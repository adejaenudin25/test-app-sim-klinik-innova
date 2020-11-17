<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptObat */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apt Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="apt-obat-view">

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
            'kd_satuan',
            'kd_satuan_besar',
            'nama_obat',
            'ket_obat',
            'generic',
            'fractions',
            'mg',
            'dpho',
            'tag',
            'aktif',
            'kd_pabrik',
            'data_owner',
            'generik',
        ],
    ]) ?>

</div>
