<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Pasien */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kunjungan', ['/pendaftaran/kunjungan', 'id-pasien' => $model->id], ['class' => 'btn btn-warning']) ?>
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
            'kd_kelurahan',
            'nama',
            'no_kk',
            'nik',
            'pekerjaan',
            'jenis_kelamin',
            'tgl_lahir',
            'tempat_lahir',
            'gol_darah',
            'handphone',
            'alamat',
            'rt',
            'rw',
            'agama',
            'pendidikan',
            'status_marital',
            'status_keluarga',
            'wni',
            'nama_ayah',
            'nama_ibu',
            'ktp_alamat',
            'ktp_kd_kelurahan',
            'ktp_rt',
            'ktp_rw',
        ],
    ]) ?>

</div>
