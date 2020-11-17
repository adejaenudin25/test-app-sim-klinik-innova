<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptObatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apt-obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kd_satuan') ?>

    <?= $form->field($model, 'kd_satuan_besar') ?>

    <?= $form->field($model, 'nama_obat') ?>

    <?= $form->field($model, 'ket_obat') ?>

    <?php // echo $form->field($model, 'generic') ?>

    <?php // echo $form->field($model, 'fractions') ?>

    <?php // echo $form->field($model, 'mg') ?>

    <?php // echo $form->field($model, 'dpho') ?>

    <?php // echo $form->field($model, 'tag') ?>

    <?php // echo $form->field($model, 'aktif') ?>

    <?php // echo $form->field($model, 'kd_pabrik') ?>

    <?php // echo $form->field($model, 'data_owner') ?>

    <?php // echo $form->field($model, 'generik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
