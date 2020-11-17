<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JsExpression;
use modules\pendaftaran\models\Kelurahan;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $data = Kelurahan::find()
    ->select(['kelurahan as value', 'kelurahan as  label','id'])
    ->asArray()
    ->all();

    echo '<div class="form-group field-pasien-kelurahan required">';
        echo '<label class="control-label" for="pasien-kelurahan">Kelurahan</label>';
        echo \yii\jui\AutoComplete::widget([
            'name' => 'pasien-kelurahan',
            'id' => 'pasien-kelurahan',
            'clientOptions' => [
                'source' => $data,
                'autoFill'=>true,
                'minLength'=>'2',
                'select' => new JsExpression("function( event, ui ) {
                    $('#pasien-kd_kelurahan').val(ui.item.id);
                }")
            ],
            'options' => [
                'class' => 'form-control'
            ]
        ]);
        echo '<div class="help-block"></div>';
    echo '</div>';
    ?>

    <?= $form->field($model, 'kd_kelurahan', )->textInput(['readonly'=> true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gol_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_marital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktp_alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktp_kd_kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktp_rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktp_rw')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
