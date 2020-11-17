<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model modules\master\models\Pabrik */

$this->title = 'Create Pabrik';
$this->params['breadcrumbs'][] = ['label' => 'Pabriks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pabrik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
