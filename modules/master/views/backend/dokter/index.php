<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel modules\master\models\DokterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dokters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokter-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dokter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
