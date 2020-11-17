<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Kunjungan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kunjungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kunjungan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Anamnesa', ['/pendaftaran/anamnesa', 'id-kunjungan' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Diagnosa', ['/pendaftaran/diagnosa', 'id-kunjungan' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kd_unit',
            'kd_pasien',
            'tgl_daftar',
            'status_kunjungan',
            'kd_dokter',
        ],
    ]) ?>

</div>
