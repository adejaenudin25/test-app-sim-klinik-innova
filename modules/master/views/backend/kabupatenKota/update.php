<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\KabupatenKota */

$this->title = 'Update Kabupaten Kota: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kabupaten-kota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
