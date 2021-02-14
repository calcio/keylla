<?php

/* @var $this yii\web\View */

$this->title = 'Keylla Corrêa Acupuntura e Estética';
?>
<div class="container">
    <!-- Carousel starts -->
    <?= $this->render('_carousel', ['carouselList' => null]) ?>
    <!-- Carousel ends -->

    <br />
    <div class="divider-1"></div>

    <!-- Hospital info -->
    <?= $this->render('_info', ['info' => null]) ?>

    <br />
    <div class="divider-1"></div>
    <div class="row">
        <?= $this->render('_faq', ['info' => null]) ?>
        <div class="clearfix visible-sm-block"></div>
        <?= $this->render('_setup_appointment', ['info' => null]) ?>
    </div>

    <div class="divider-1"></div>
    <br />
</div>
