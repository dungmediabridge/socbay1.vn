<?php

use backend\assets_b\BackendAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

$bundle = BackendAsset::register($this);

$this->params['body-class'] = array_key_exists('body-class', $this->params) ?
    $this->params['body-class']
    : null;
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset ?>">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <?php echo Html::csrfMetaTags() ?>
        <title><?php echo Html::encode($this->title) ?></title>
        <link rel="icon" type="image/png" href="<?php echo baseUrl() . '/web/img/favicon.ico' ?>">
        <?php $this->registerJs('url_search = ' . \yii\helpers\Json::htmlEncode(Url::to(['/ajax/search'])), \yii\web\View::POS_HEAD); ?>

        <?php $this->head() ?>

    </head>
    <?php echo Html::beginTag('body', [
        'class' => implode(' ', [
            'hold-transition sidebar-mini',
            ArrayHelper::getValue($this->params, 'body-class'),
            Yii::$app->keyStorage->get('backend.theme-skin', 'skin-blue'),
            Yii::$app->keyStorage->get('backend.layout-fixed') ? 'fixed' : null,
            Yii::$app->keyStorage->get('backend.layout-boxed') ? 'layout-boxed' : null,
            Yii::$app->keyStorage->get('backend.layout-collapsed-sidebar') ? 'sidebar-collapse' : null,
        ])
    ]) ?>
    <?php $this->beginBody() ?>
    <?php echo $content ?>
    <?php $this->endBody() ?>
    <?php echo Html::endTag('body') ?>
    </html>
<?php $this->endPage() ?>