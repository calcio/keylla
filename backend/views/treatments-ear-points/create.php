<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TreatmentsEarPoints */

$this->title = 'Create Treatments Ear Points';
$this->params['breadcrumbs'][] = ['label' => 'Treatments Ear Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="treatments-ear-points-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
