<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use modules\pendaftaran\models\Dokter;
use modules\pendaftaran\models\Unit;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Kunjungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kunjungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_unit')->dropDownList(ArrayHelper::map(Unit::find()->asArray()->all(), 'id', 'unit'))?>

    <?= $form->field($model, 'kd_pasien')->textInput(['value' => $idPasien, 'readonly' => true]) ?>

    <?= Html::label('Person', 'xxx') ?>
    <?= Html::textInput('xxx', ($dataPasien->nama ?? ''), ['class' => 'form-control margin-bottom', 'readonly' => true]) ?>

    <?= $form->field($model, 'tgl_daftar')->textInput(['value' => date('Y-m-d'), 'readonly' => true]) ?>

    <?= $form->field($model, 'status_kunjungan')->dropDownList(['SAKIT' => 'Kunjungan Sakit', 'SEHAT' => 'Kunjungan Sehat']);
    ?>

    <?= $form->field($model, 'kd_dokter')->dropDownList(ArrayHelper::map(Dokter::find()->asArray()->all(), 'id', 'dokter'))?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
