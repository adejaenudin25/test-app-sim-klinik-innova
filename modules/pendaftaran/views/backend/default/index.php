<?php

use yii\helpers\Html;
use modules\pendaftaran\Module;

$this->title = Module::translate('module', 'Pendaftaran');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-backend-default-index">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

            <div class="box-tools pull-right"></div>
        </div>
        <div class="box-body">
            <div class="pull-left"></div>
            <div class="pull-right"></div>
            <p>
                This is the module pendaftaran backend page.
                You may modify the following file to customize its content:
            </p>
            <code><?= __FILE__ ?></code>
        </div>
        <div class="box-footer"></div>
    </div>
</div>
