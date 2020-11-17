<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Kunjungan */

$this->title = 'Create Kunjungan';
$this->params['breadcrumbs'][] = ['label' => 'Kunjungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kunjungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'idPasien' => $idPasien,
        'dataPasien' => $dataPasien,
    ]) ?>

</div>
