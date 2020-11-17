<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use modules\pendaftaran\models\Dokter;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Anamnesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anamnesa-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Anamnesa</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'kd_dokter')->dropDownList(ArrayHelper::map(Dokter::find()->asArray()->all(), 'id', 'dokter'),['prompt'=>'Pilih Dokter', 'onchange' => new \yii\web\JsExpression(" if($('#anamnesa-kd_dokter').val() != ''){ $('#anamnesa-dokter').val($('#anamnesa-kd_dokter option:selected').text()) } else { $('#anamnesa-dokter').val('') }")])?>

                        <?= $form->field($model, 'dokter')->hiddenInput(['maxlength' => true])->label(false) ?>

                        <?= $form->field($model, 'tgl_anamnesa')->widget(\yii\jui\DatePicker::classname(), [ 'dateFormat' => 'yyyy-MM-dd', 'options' => ['class' => 'form-control'] ]) ?>

                        <?= $form->field($model, 'kd_kunjungan')->textInput([ 'readonly' => true, 'value' => $idKunjungan ]) ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>
                        
                        <?= $form->field($model, 'lama_sakit')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'keluhan_tambahan')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Periksa Fisik</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'tinggi_badan', [
                            'template' => '{label}<div class="input-group">{input}
                            <span class="input-group-addon">cm</span></div>{error}{hint}'
                        ]); ?>

                        <?= $form->field($model, 'berat_badan', [
                            'template' => '{label}<div class="input-group">{input}
                            <span class="input-group-addon">kg</span></div>{error}{hint}'
                        ]); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'suhu', [
                            'template' => '{label}<div class="input-group">{input}
                            <span class="input-group-addon">°C</span></div>{error}{hint}'
                        ]); ?>
                        
                        <?= $form->field($model, 'is_hamil')->dropDownList(['0' => 'Tidak', '1' => 'Ya'])->label('Hamil') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Alergi Pasien</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <?= $form->field($model, 'alergi_obat')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'alergi_makanan')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'alergi_lainnya')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Lainnya</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'edukasi')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'terapi')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rencana')->textInput(['maxlength' => true]) ?>
                        
                        <?= $form->field($model, 'observasi')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'is_merokok')->dropDownList(['0' => 'Tidak', '1' => 'Ya'])->label('Merokok') ?>

                        <?= $form->field($model, 'is_alkohol')->dropDownList(['0' => 'Tidak', '1' => 'Ya'])->label('Konsumsi Alkohol') ?>

                        <?= $form->field($model, 'is_kurang_vegetarian')->dropDownList(['0' => 'Tidak', '1' => 'Ya'])->label('Kurang Sayur') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (!$model->id): ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    <?php else: ?>
        <?= Html::Button('Kembali', ['class' => 'btn btn-primary', 'onclick' => 'window.history.go(-1); return false;']) ?>
    <?php endif ?>

</div>
