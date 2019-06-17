<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TreatmentsEarPoints */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="treatments-ear-points-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'earPonitId')->textInput() ?>

    <?= $form->field($model, 'anamnesisId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
