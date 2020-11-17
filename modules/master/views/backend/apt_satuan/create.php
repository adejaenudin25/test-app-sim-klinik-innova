<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptSatuan */

$this->title = 'Create Apt Satuan';
$this->params['breadcrumbs'][] = ['label' => 'Apt Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apt-satuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
