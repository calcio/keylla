<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Emotions */

$this->title = 'Create Emotions';
$this->params['breadcrumbs'][] = ['label' => 'Emotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emotions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
