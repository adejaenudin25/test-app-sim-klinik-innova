<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\pendaftaran\models\Anamnesa */

$this->title = 'Create Anamnesa';
$this->params['breadcrumbs'][] = ['label' => 'Anamnesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anamnesa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'idKunjungan' => $idKunjungan,
    ]) ?>

</div>
