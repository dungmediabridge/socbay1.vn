<?php

namespace api\controllers;

use Yii;
use yii\base\Action;
use yii\web\Controller;

/**
 * Class ApiController
 */
abstract class ApiController extends Controller
{
    /**
     * @var array Data response
     */
    public $data = [];
    /**
     * @var string Message description
     */
    public $msg = "Ok";
    /**
     * @var integer Http code response
     */
    public $code = 200;
    /**
     * @var int Http response format Html
     */
    public $is_html = 0;
    /**
     * @var integer
     */
    public $client_id = 1; //App Name
    /**
     * @var integer
     */
    public $device_type = 1; //IOS, Android

    /**
     * @var integer User ID
     */
    public $uid = 0;

    public function init()
    {
        Yii::$app->language = 'vi';
        Yii::$app->user->enableSession = false;
        parent::init();
    }

    public function behaviors()
    {
        return [
            /* 'authenticator' => [
                 'class'  => AccessTokenAuth::class,
             ],
             [
                 'class' => 'api\components\ApiKeyFilter',
             ],
             [
                 'class' => 'api\components\TwoFactorAuth',
             ],*/
        ];
    }

    /**
     * @param $controller
     * @param $action
     *
     * @return bool
     */
    public function beforeAction($action)
    {
        $response = Yii::$app->getResponse();
        $response->is_html = $this->is_html;

        if (parent::beforeAction($action)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * This method is invoked right after an action is executed.
     *
     * @param Action $action the action just executed.
     *
     * @return mixed
     */
    public function afterAction($action, $result)
    {
        return $this->senData($action, $result);
    }

    /**/
    protected function senData($action, $result = null)
    {
        // @var ApiResponse $response
        $response = Yii::$app->getResponse();
        if ($this->is_html) {
            $response->is_html = 1;
        } else {
            $response->is_html = 0;
            $response->is_json = 1;
            $response->setStatusCode($this->code);
            $response->statusText = $this->msg;
            if (!empty($this->data)) {
                $response->data = $this->data;
            }
        }

        return parent::afterAction($action, $result);
    }

}
