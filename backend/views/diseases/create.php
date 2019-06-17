<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diseases */

$this->title = 'Create Diseases';
$this->params['breadcrumbs'][] = ['label' => 'Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diseases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
