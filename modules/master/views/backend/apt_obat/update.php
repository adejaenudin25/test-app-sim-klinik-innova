<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptObat */

$this->title = 'Update Apt Obat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apt Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apt-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
