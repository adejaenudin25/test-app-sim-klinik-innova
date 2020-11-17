<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\AnamnesaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anamnesa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kd_kunjungan') ?>

    <?= $form->field($model, 'keluhan_utama') ?>

    <?= $form->field($model, 'lama_sakit') ?>

    <?= $form->field($model, 'keluhan_tambahan') ?>

    <?php // echo $form->field($model, 'tinggi_badan') ?>

    <?php // echo $form->field($model, 'berat_badan') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'is_hamil') ?>

    <?php // echo $form->field($model, 'alergi_obat') ?>

    <?php // echo $form->field($model, 'alergi_makanan') ?>

    <?php // echo $form->field($model, 'alergi_lainnya') ?>

    <?php // echo $form->field($model, 'edukasi') ?>

    <?php // echo $form->field($model, 'terapi') ?>

    <?php // echo $form->field($model, 'rencana') ?>

    <?php // echo $form->field($model, 'observasi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'is_merokok') ?>

    <?php // echo $form->field($model, 'is_alkohol') ?>

    <?php // echo $form->field($model, 'is_kurang_vegetarian') ?>

    <?php // echo $form->field($model, 'dokter') ?>

    <?php // echo $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'tgl_anamnesa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
