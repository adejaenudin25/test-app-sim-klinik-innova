<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel modules\pendaftaran\models\AnamnesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anamnesas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anamnesa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anamnesa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kd_kunjungan',
            'keluhan_utama',
            'lama_sakit',
            'keluhan_tambahan',
            //'tinggi_badan',
            //'berat_badan',
            //'suhu',
            //'is_hamil',
            //'alergi_obat',
            //'alergi_makanan',
            //'alergi_lainnya',
            //'edukasi',
            //'terapi',
            //'rencana',
            //'observasi',
            //'keterangan',
            //'is_merokok',
            //'is_alkohol',
            //'is_kurang_vegetarian',
            //'dokter',
            //'kd_dokter',
            //'tgl_anamnesa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
