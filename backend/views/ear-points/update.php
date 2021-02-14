<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EarPoints */

$this->title = 'Update Ear Points: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ear Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ear-points-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
