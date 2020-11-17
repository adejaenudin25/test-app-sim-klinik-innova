<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\KabupatenKota */

$this->title = 'Create Kabupaten Kota';
$this->params['breadcrumbs'][] = ['label' => 'Kabupaten Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kabupaten-kota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
