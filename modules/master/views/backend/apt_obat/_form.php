<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use modules\master\models\Pabrik;
use modules\master\models\AptSatuan;
use modules\master\models\AptSatuanBesar;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptObat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apt-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_satuan')->dropDownList(ArrayHelper::map(AptSatuan::find()->asArray()->all(), 'id', 'satuan'),['prompt'=>'Pilih Satuan'])?>

    <?= $form->field($model, 'kd_satuan_besar')->dropDownList(ArrayHelper::map(AptSatuanBesar::find()->asArray()->all(), 'id', 'satuan_besar'),['prompt'=>'Pilih Satuan Besar'])?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'generic')->dropDownList(['1' => 'Ya', '0' => 'Tidak'],['prompt'=>'Pilih Status']) ?>

    <?= $form->field($model, 'fractions')->textInput() ?>

    <?= $form->field($model, 'mg')->textInput() ?>

    <?= $form->field($model, 'dpho')->textInput() ?>

    <?= $form->field($model, 'tag')->textInput() ?>

    <?= $form->field($model, 'aktif')->dropDownList(['1' => 'Ya', '0' => 'Tidak'],['prompt'=>'Pilih Status']) ?>

    <?= $form->field($model, 'kd_pabrik')->dropDownList(ArrayHelper::map(Pabrik::find()->asArray()->all(), 'id', 'pabrik'),['prompt'=>'Pilih Vendor'])?>

    <?= $form->field($model, 'data_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'generik')->dropDownList(['1' => 'Ya', '0' => 'Tidak'],['prompt'=>'Pilih Status']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
