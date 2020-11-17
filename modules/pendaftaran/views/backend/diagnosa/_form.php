<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use modules\pendaftaran\models\Penyakit;
use modules\pendaftaran\models\Dokter;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Diagnosa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagnosa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_kunjungan')->textInput([ 'value' => $idKunjungan, 'readonly' => true ]) ?>

    <?php
    $dataPenyakit = json_encode(ArrayHelper::map(Penyakit::find()->asArray()->all(), 'icdx', 'penyakit'));
    ?>

    <?= $form->field($model, 'kd_penyakit')->dropDownList(ArrayHelper::map(Penyakit::find()->asArray()->all(), 'id', 'icdx'),['prompt'=>'Pilih Penyakit', 'onchange' => new \yii\web\JsExpression(" 
            if($('#diagnosa-kd_penyakit').val() != ''){
                $('#diagnosa-icdx').val($('#diagnosa-kd_penyakit option:selected').text());
                var icdxList = ".$dataPenyakit.";
                var diagnosa = icdxList[$('#diagnosa-kd_penyakit option:selected').text()];
                $('#diagnosa-diagnosa').val(diagnosa.substring(0, 30));
            } else { 
                $('#diagnosa-icdx').val('');
                $('#diagnosa-diagnosa').val('');
            }
        ")])?>

    <?= $form->field($model, 'icdx')->hiddenInput(['maxlength' => true, 'readonly' => true])->label(false) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?= $form->field($model, 'dokter')->dropDownList(ArrayHelper::map(Dokter::find()->asArray()->all(), 'dokter', 'dokter'),['prompt'=>'Pilih Dokter'])?>

    <?= $form->field($model, 'jenis')->dropDownList(['PRIMER' => 'Primer', 'SEKUNDER' => 'Sekunder', 'KOMPLIKASI' => 'Komplikasi'],['prompt'=>'Pilih Jenis']) ?>

    <?= $form->field($model, 'kasus')->dropDownList(['BARU' => 'Baru', 'Lama' => 'Lama'],['prompt'=>'Pilih Kasus']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
