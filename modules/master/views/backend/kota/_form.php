<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\master\models\KabupatenKota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kabupaten-kota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_provinsi')->textInput() ?>

    <?= $form->field($model, 'kabkot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ibukota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'k_bsni')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
