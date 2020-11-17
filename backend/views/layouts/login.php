<?php

use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\LoginAsset;
use common\widgets\Alert;
use yii\web\View;

/* @var $this View */
/* @var $content string */

LoginAsset::register($this);
$homeUrl = is_string(Yii::$app->homeUrl) ? Yii::$app->homeUrl : '/';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::$app->name . ' | ' . Html::encode($this->title) ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->head() ?>
    <link href="https://maxcdn.bootstrapcdn.com/css/ie10-viewport-bug-workaround.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://dl.dropboxusercontent.com/s/4a2ppgctmki23sj/utils.css?dl=0">
  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
<div class="row">
    <div class="col-md-12">
        <?= Alert::widget([
            'options' => [
                'style' => 'text-align:center;'
            ]
        ]) ?>
    </div>
</div>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
