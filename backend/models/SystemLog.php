<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "system_log".
 *
 * @property integer $id
 * @property integer $level
 * @property string  $category
 * @property integer $log_time
 * @property string  $prefix
 * @property integer $message
 */
class SystemLog extends \yii\db\ActiveRecord
{
    const CATEGORY_NOTIFICATION = 'notification';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%system_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level', 'log_time', 'message'], 'integer'],
            [['log_time'], 'required'],
            [['prefix'], 'string'],
            [['category'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'       => Yii::t('backend', 'ID'),
            'level'    => Yii::t('backend', 'Level'),
            'category' => Yii::t('backend', 'Category'),
            'log_time' => Yii::t('backend', 'Log Time'),
            'prefix'   => Yii::t('backend', 'Prefix'),
            'message'  => Yii::t('backend', 'Message'),
        ];
    }

    /*
     * Get Prefix Text
     * @return string
     * */
    public function getPrefixTitle($el = 100)
    {
        $prefixTitle = mb_strcut($this->prefix, 0, $el, 'UTF-8');
        if (strlen($this->prefix) > $el) {
            $prefixTitle .= '...';
        }

        return $prefixTitle;
    }
}