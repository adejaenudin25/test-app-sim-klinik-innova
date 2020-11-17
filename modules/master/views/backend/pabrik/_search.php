<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\master\models\PabrikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pabrik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'account') ?>

    <?= $form->field($model, 'pabrik') ?>

    <?= $form->field($model, 'contact') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'kota') ?>

    <?php // echo $form->field($model, 'telepon1') ?>

    <?php // echo $form->field($model, 'telepon2') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'kd_pos') ?>

    <?php // echo $form->field($model, 'negara') ?>

    <?php // echo $form->field($model, 'beg_bal') ?>

    <?php // echo $form->field($model, 'currents') ?>

    <?php // echo $form->field($model, 'cr_limit') ?>

    <?php // echo $form->field($model, 'finance') ?>

    <?php // echo $form->field($model, 'term') ?>

    <?php // echo $form->field($model, 'pbf') ?>

    <?php // echo $form->field($model, 'disc_faktur') ?>

    <?php // echo $form->field($model, 'disc_saldo') ?>

    <?php // echo $form->field($model, 'norek') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
