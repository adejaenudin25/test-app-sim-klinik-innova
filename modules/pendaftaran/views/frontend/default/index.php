<?php

use yii\helpers\Html;
use modules\pendaftaran\Module;

$this->title = Module::translate('module', 'Pendaftaran');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-frontend-default-index">
    <h1><?= Html::decode($this->title) ?></h1>

    <p>
        This is the module pendaftaran frontend page.
        You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
