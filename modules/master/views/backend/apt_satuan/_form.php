<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptSatuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apt-satuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
