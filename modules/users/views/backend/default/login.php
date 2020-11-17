<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use modules\users\models\LoginForm;
use modules\users\Module;

/**
 * @var $this yii\web\View
 * @var $form yii\bootstrap\ActiveForm
 * @var $model LoginForm
 */

$this->title = Module::translate('module', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="limiter">
       <div class="container-login100">
          <div class="wrap-login100">
             <div class="login100-pic js-tilt" data-tilt>
                <img src="https://dl.dropbox.com/s/o70g7ycsz1dosq0/img-demo.png?dl=0">
                <h2 class="text-center">Dinas Kesehatan</h2>
                <br>
                <h2 class="text-center">Kota/Kab Demo</h2>
             </div>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form'
            ]); ?>
                <span class="login100-form-title">
                    <img src="https://dl.dropbox.com/s/32og5a3f5uxgu92/logo.png?dl=0" width="160" alt="IMG">
                </span>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: exeample@abc.xyz">
                   <input autocomplete="off" id="loginform-email" type="text" class="input100" name="LoginForm[email]" value="" placeholder="user atau email" required autofocus oninvalid="this.setCustomValidity('Silahkan isi ID anda!')" oninput="this.setCustomValidity('')" style="text-transform:lowercase;">
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                   </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                   <input autocomplete="off" id="loginform-password" type="password" class="input100" name="LoginForm[password]" placeholder="kata kunci" required oninvalid="this.setCustomValidity('Silahkan isi Kata kunci!')" oninput="this.setCustomValidity('')">
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                   </span>
                </div>
                <div class="container-login100-form-btn">
                   <button type="submit" class="login100-form-btn" onclick="return requiredCheckLogin(this);" >
                   Login
                   </button>
                </div>
            <?php ActiveForm::end(); ?>
             <!-- </form> -->
          </div>
       </div>
    </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>