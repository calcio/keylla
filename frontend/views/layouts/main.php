<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\FrontAsset;
use common\widgets\Alert;

FrontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="Tratamento">
    <meta name="keywords" content="Aculpuntura, Estética">
    <meta name="author" content="Cálcio, Marcelo Menezes, Menezes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="#">
</head>
<body>
<?php $this->beginBody() ?>

<div class="outer">
    <div class="top-bar">
        <div class="container">

            <div class="tb-contact pull-left">
                <i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:<?= Html::encode(Yii::$app->params['personalEmail']) ?>"><?= Html::encode(Yii::$app->params['personalEmail']) ?></a>
                &nbsp;&nbsp;

                <i class="fa fa-phone color"></i> &nbsp; <?= Html::encode(Yii::$app->params['personalCelphone']) ?>
            </div>
            
            <!-- Social media starts -->
            <div class="tb-social pull-right">
                <div class="brand-bg text-right">
                    <!-- Brand Icons -->
                    <a href="<?= Html::encode(Yii::$app->params['facebook']) ?>" class="facebook" target="_new"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                    <a href="<?= Html::encode(Yii::$app->params['linkedin']) ?>" class="linkedin" target="_new"><i class="fa fa-linkedin square-2 rounded-1"></i></a>
                </div>
            </div>
                                
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="header-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <h1><a href="/site/index">Keylla Corrêa</a></h1>
                        <h4><a href="/site/index">Medicina Tradicional Chinesa</a></h4>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="navy">
                        <ul>
                            <!-- Main menu -->
                            <li><a href="/site">Home</a></li>
                            <!-- <li><a href="#">Marcaçao de consulta</a></li> -->
                            <li><a href="/treatments">Tratamentos</a>
                            <li><a href="/site/about">Sobre</a></li>
                            <li><a href="/site/contact">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="medical-home">
        <div class="container">
        <?= $content ?>
        </div>
    </div>

    <div class="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-8">
                    <div class="foot-item">
                        <h5 class="bold"><i class="fa fa-user"></i>&nbsp;&nbsp;Redes socias</h5>
                        <p>Conecte-se através das minhas redes socias.</p>
                        <div class="brand-bg">
                            <!-- Social Media Icons -->
                            <a href="<?= Html::encode(Yii::$app->params['facebook']) ?>" class="facebook" target="_new"><i class="fa fa-facebook circle-3"></i></a>
                            <a href="<?= Html::encode(Yii::$app->params['linkedin']) ?>" class="linkedin" target="_new"><i class="fa fa-linkedin circle-3"></i></a>
                        </div>

                        <!-- 
                        <div class="subscribe-box">
                            <h5 class="bold">Receba novidades do site :</h5>
                            <form role="form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Seu e-mail aqui.">
                                    <span class="input-group-btn">
                                        <button class="btn btn-color" type="button">Inscrever-se</button>
                                    </span>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>  

                <div class="col-md-3 col-sm-6">
                    <div class="foot-item">
                    <!--  
                        <h5 class="bold"><i class="fa fa-comments"></i>&nbsp;&nbsp;Postagens recentes</h5>
                        <div class="foot-item-content">
                            <ul class="list-unstyled">
                                <li><a href="#">Denocing Sapientes Contain</a></li>
                                <li><a href="#">Dignissim Electronic Typeset</a></li>
                                <li><a href="#">Laborum Desktop Publishing</a></li>
                                <li><a href="#">Quibus PageMaker Including</a></li>
                                <li><a href="#">Denocing Sapientes Contain</a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-7">
                    <div class="foot-item">
                        <h5 class="bold"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Contatos</h5>
                        <div class="foot-item-content address">
                            <h6 class="bold"><i class="fa fa-home"></i>&nbsp;&nbsp;Keylla Correa</h6>
                            <!-- Paragraph 
                            <p class="add">
                               Rua Profª. Delfina de F. Gomes, Nº 112, Casa 2<br />
                               Pendotiba - Niteroi - 24325-070.</p>-->
                            <p class="tel"> <i class="fa fa-phone"></i> Tel : <?= Html::encode(Yii::$app->params['personalCelphone']) ?><br />
                            <i class="fa fa-envelope"></i>  e-mail : <a href="#"><?= Html::encode(Yii::$app->params['personalEmail']) ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <footer>
        <div class="container">
                <p class="pull-left">Copyright &copy; <?= date('Y') ?></p>
                <ul class="list-inline pull-right">
                    <li><a href="/site">Home</a></li>
                    <!-- <li><a href="#">Marcaçao de consulta</a></li> -->
                    <li><a href="/treatments">Tratamentos</a>
                    <li><a href="/site/about">Sobre</a></li>
                    <li><a href="/site/contact">Contato</a></li>
                </ul>
                <div class="clearfix"></div>
        </div>
    </footer>
    
    </div>

    <!-- Scroll to top -->
    <span class="totop"><a href="#"><i class="fa fa-angle-up bg-color"></i></a></span>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
