<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MenstruationTypes */

$this->title = 'Update Menstruation Types: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Menstruation Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menstruation-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
