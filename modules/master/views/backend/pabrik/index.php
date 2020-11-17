<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel modules\master\models\PabrikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pabriks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pabrik-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pabrik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'account',
            'pabrik',
            'contact',
            'alamat',
            //'kota',
            //'telepon1',
            //'telepon2',
            //'fax',
            //'kd_pos',
            //'negara',
            //'beg_bal',
            //'currents',
            //'cr_limit',
            //'finance',
            //'term',
            //'pbf',
            //'disc_faktur',
            //'disc_saldo',
            //'norek',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
