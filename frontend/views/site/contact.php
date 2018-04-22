<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\captcha\Captcha;
use yii\bootstrap\ActiveForm;

$this->title = 'Contato';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-heading-two">
    <div class="container">
        <h2><?= Html::encode($this->title) ?></h2>
        <?php /* Breadcrumbs::widget([
            'tag' => 'div',
            'options' => ['class' => 'breads'],
            'itemTemplate' => "<a>{link}</a> / \n",
            'activeItemTemplate' => "<a class=\"active\">{link}</a>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>
        <div class="clearfix"></div>
    </div>
</div>

<div class="contact-us-one">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="text-center">
                    <h3>Está com dúvida?<br /><br /></h3>
                    <h5>Fale comigo pelo formulário de contato
                        <br />ou pelo telefône:
                    <br /><br /><i class="fa fa-phone"></i>
                    &nbsp;&nbsp;&nbsp;<?= Html::encode(Yii::$app->params['personalCelphone']) ?></h5>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="contact-item">
                    <div class="contact-form">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['class' => 'form', 'role' => 'form']]); ?>

                            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Digite seu nome'])->label(false) ?>

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Digite seu e-mail'])->label(false) ?>

                            <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Qual o assunto?'])->label(false) ?>

                            <?= $form->field($model, 'body')->textArea(['placeholder' => 'Digite sua mensagem', 'rows' => '7'])->label(false) ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), ['options' => [
                                'placeholder' => 'Digite o codigo aqui.']])->label('') ?>

                            <?= Html::submitButton('Enviar', ['class' => 'btn btn-color']) ?>&nbsp;
                            <button type="button" class="btn btn-default">Limpar</button>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6">
                <div class="contact-item">
                    <div class="brand-bg">
                        <h5>Redes socias</h5>
                        <ul class="list-unstyled">
                            <!-- Social Media Icons -->
                            <li><a href="<?= Html::encode(Yii::$app->params['facebook']) ?>" class="facebook"><i class="fa fa-facebook circle-3" target="_new"></i>Facebook</a></li>
                            <li><a href="<?= Html::encode(Yii::$app->params['linkedin']) ?>" class="linkedin" target="_new"><i class="fa fa-linkedin circle-3"></i>LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
