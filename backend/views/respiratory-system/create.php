<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RespiratorySystem */

$this->title = 'Create Respiratory System';
$this->params['breadcrumbs'][] = ['label' => 'Respiratory Systems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="respiratory-system-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
