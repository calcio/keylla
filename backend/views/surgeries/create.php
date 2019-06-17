<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Surgeries */

$this->title = 'Create Surgeries';
$this->params['breadcrumbs'][] = ['label' => 'Surgeries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surgeries-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
