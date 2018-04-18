<?php use yii\helpers\Html; ?>

<div id="bs-carousel-1" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover" data-wrap="true">
    <!-- Bootstrap indicators. If you don't need indicators, remove the below section -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel-1" data-slide-to="1"></li>
        <li data-target="#bs-carousel-1" data-slide-to="2"></li>
        <li data-target="#bs-carousel-1" data-slide-to="3"></li>
    </ol>
    <!-- Slides. You can also add captions -->
    <div class="carousel-inner">
        <!-- Item, First item should have extra class "active" -->
        <div class="item active">
            <!-- Image -->
            <?= Html::img('@web/img/medical/big/1.jpg', ['alt' => '']) ?>
            <!-- Right big -->
            <div class="carousel-caption c-right-big">
                <!-- Heading -->
                <h4><a href="#">Best Doctors Award</a></h4>
                <!-- Para -->
                <p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur. Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
            </div>
        </div>
        <div class="item">
            <?= Html::img('@web/img/medical/big/2.jpg', ['alt' => '']) ?>
            <!-- Right big -->
            <div class="carousel-caption c-left-big">
                <!-- Heading -->
                <h4><a href="#">Best Doctors Award</a></h4>
                <!-- Para -->
                <p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur. Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
            </div>
        </div>
        <div class="item">
            <?= Html::img('@web/img/medical/big/3.jpg', ['alt' => '']) ?>
            <!-- Right big -->
            <div class="carousel-caption c-right-big">
                <!-- Heading -->
                <h4><a href="#">Best Doctors Award</a></h4>
                <!-- Para -->
                <p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur. Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
            </div>
        </div>
        <div class="item">
            <?= Html::img('@web/img/medical/big/4.jpg', ['alt' => '']) ?>
            <!-- Right big -->
            <div class="carousel-caption c-left-big">
                <!-- Heading -->
                <h4><a href="#">Best Doctors Award</a></h4>
                <!-- Para -->
                <p>Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur. Nemo enim ipsam voluptatem quia voluptas sit it aut fugit, sed quia neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur.</p>
            </div>
        </div>
    </div>
    <!-- Carousel controls (arrows). If you don't need controls, remove the below section -->
    <a class="left carousel-control" href="#bs-carousel-1" role="button" data-slide="prev">
        <span class="fa fa-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#bs-carousel-1" role="button" data-slide="next">
        <span class="fa fa-chevron-right"></span>
    </a>
</div>
