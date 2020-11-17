<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptSatuanBesar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apt-satuan-besar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'satuan_besar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
