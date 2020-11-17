<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptSatuan */

$this->title = 'Update Apt Satuan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apt Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apt-satuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
