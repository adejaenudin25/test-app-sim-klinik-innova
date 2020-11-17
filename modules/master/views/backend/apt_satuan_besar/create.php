<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptSatuanBesar */

$this->title = 'Create Apt Satuan Besar';
$this->params['breadcrumbs'][] = ['label' => 'Apt Satuan Besars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apt-satuan-besar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
