<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use modules\users\Module;

/**
 * @var $this yii\web\View
 * @var $model modules\users\models\User
 * @var $form yii\widgets\ActiveForm
 */

?>

<div class="row">
    <div class="col-sm-6">
        <?php $form = ActiveForm::begin([
            'action' => Url::to(['update-password']),
            'validationUrl' => ['ajax-validate-password-form'],
        ]); ?>

        <?= $form->field($model, 'newPassword')->passwordInput([
            'maxlength' => true,
            'placeholder' => true,
        ]) ?>

        <?= $form->field($model, 'newPasswordRepeat')->passwordInput([
            'maxlength' => true,
            'placeholder' => true,
        ]) ?>

        <?= $form->field($model, 'currentPassword', ['enableAjaxValidation' => true])->passwordInput([
            'maxlength' => true,
            'placeholder' => true,
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('<span class="fas fa-save"></span> ' . Module::translate('module', 'Save'), [
                'class' => 'btn btn-primary',
                'name' => 'submit-button',
            ]) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

