<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Flavors */

$this->title = 'Create Flavors';
$this->params['breadcrumbs'][] = ['label' => 'Flavors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flavors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
