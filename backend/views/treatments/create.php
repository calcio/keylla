<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Treatments */

$this->title = 'Create Treatments';
$this->params['breadcrumbs'][] = ['label' => 'Treatments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="treatments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
