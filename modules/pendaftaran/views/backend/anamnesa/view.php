<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Anamnesa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Anamnesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="anamnesa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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
            'kd_kunjungan',
            'keluhan_utama',
            'lama_sakit',
            'keluhan_tambahan',
            'tinggi_badan',
            'berat_badan',
            'suhu',
            'is_hamil',
            'alergi_obat',
            'alergi_makanan',
            'alergi_lainnya',
            'edukasi',
            'terapi',
            'rencana',
            'observasi',
            'keterangan',
            'is_merokok',
            'is_alkohol',
            'is_kurang_vegetarian',
            'dokter',
            'kd_dokter',
            'tgl_anamnesa',
        ],
    ]) ?>

</div>
