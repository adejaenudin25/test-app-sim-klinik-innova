<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel modules\master\models\AptObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apt Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apt-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apt Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kd_satuan',
            'kd_satuan_besar',
            'nama_obat',
            'ket_obat',
            //'generic',
            //'fractions',
            //'mg',
            //'dpho',
            //'tag',
            //'aktif',
            //'kd_pabrik',
            //'data_owner',
            //'generik',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
