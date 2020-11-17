<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\AptObat */

$this->title = 'Create Apt Obat';
$this->params['breadcrumbs'][] = ['label' => 'Apt Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apt-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
