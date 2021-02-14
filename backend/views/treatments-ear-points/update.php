<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TreatmentsEarPoints */

$this->title = 'Update Treatments Ear Points: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Treatments Ear Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="treatments-ear-points-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
