<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\master\models\Pabrik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pabrik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pabrik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'negara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beg_bal')->textInput() ?>

    <?= $form->field($model, 'currents')->textInput() ?>

    <?= $form->field($model, 'cr_limit')->textInput() ?>

    <?= $form->field($model, 'finance')->textInput() ?>

    <?= $form->field($model, 'term')->textInput() ?>

    <?= $form->field($model, 'pbf')->textInput() ?>

    <?= $form->field($model, 'disc_faktur')->textInput() ?>

    <?= $form->field($model, 'disc_saldo')->textInput() ?>

    <?= $form->field($model, 'norek')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
