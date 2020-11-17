<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel modules\pendaftaran\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kd_kelurahan',
            'nama',
            'no_kk',
            'nik',
            //'pekerjaan',
            //'jenis_kelamin',
            //'tgl_lahir',
            //'tempat_lahir',
            //'gol_darah',
            //'handphone',
            //'alamat',
            //'rt',
            //'rw',
            //'agama',
            //'pendidikan',
            //'status_marital',
            //'status_keluarga',
            //'wni',
            //'nama_ayah',
            //'nama_ibu',
            //'ktp_alamat',
            //'ktp_kd_kelurahan',
            //'ktp_rt',
            //'ktp_rw',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
