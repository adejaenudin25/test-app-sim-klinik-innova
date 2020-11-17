<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel modules\pendaftaran\models\KunjunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kunjungans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kunjungan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (!empty($idPasien)): ?>
        <p>
            <?= Html::a('Create Kunjungan', ['create', 'id-pasien' => $idPasien], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kd_unit',
            'kd_pasien',
            'tgl_daftar',
            'status_kunjungan',
            //'kd_dokter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
