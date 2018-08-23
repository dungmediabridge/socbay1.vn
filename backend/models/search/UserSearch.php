<?php

namespace backend\models\search;

use common\models\User;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * UserSearch represents the model behind the search form about `common\models\User`.
 */
class UserSearch extends User
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'oauth_client_user_id'], 'integer'],
            [['created_at', 'updated_at', 'logged_at'], 'filter', 'filter' => 'strtotime', 'skipOnEmpty' => true],
            [['created_at', 'updated_at', 'logged_at'], 'default', 'value' => null],
            [['username', 'role_name', 'auth_key', 'password_hash', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = User::find();
        if (isset($params['UserSearch']['role_name']) && !empty($params['UserSearch']['role_name'])) {
            $query->joinWith([
                'assign' => function ($query) use ($params) {
                    $query->andWhere(['=', 'item_name', $params['UserSearch']['role_name']]);
                }
            ]);
        }
        if (!$params) {
            $query->orderBy('id desc');
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id'                   => $this->id,
            'status'               => $this->status,
            'oauth_client_user_id' => $this->oauth_client_user_id
        ]);

        if ($this->created_at !== null) {
            $query->andFilterWhere(['between', User::tableName() . '.created_at', $this->created_at, $this->created_at + 3600 * 24]);
        }
        if ($this->updated_at !== null) {
            $query->andFilterWhere(['between', User::tableName() . '.updated_at', $this->updated_at, $this->updated_at + 3600 * 24]);
        }
        if ($this->logged_at !== null) {
            $query->andFilterWhere(['between', User::tableName() . '.logged_at', $this->logged_at, $this->logged_at + 3600 * 24]);
        }

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
