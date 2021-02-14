<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MatrialStatus */

$this->title = 'Create Matrial Status';
$this->params['breadcrumbs'][] = ['label' => 'Matrial Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matrial-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
