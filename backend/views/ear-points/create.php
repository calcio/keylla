<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EarPoints */

$this->title = 'Create Ear Points';
$this->params['breadcrumbs'][] = ['label' => 'Ear Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ear-points-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
