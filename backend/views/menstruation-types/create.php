<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MenstruationTypes */

$this->title = 'Create Menstruation Types';
$this->params['breadcrumbs'][] = ['label' => 'Menstruation Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menstruation-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
