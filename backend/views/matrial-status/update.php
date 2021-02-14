<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MatrialStatus */

$this->title = 'Update Matrial Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matrial Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matrial-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
