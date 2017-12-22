<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/owl.carousel.css',
        'css/medical.css',
        'css/style.css',
        'css/skin-purple.css',
        'css/custom.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/placeholders.js',
        'js/jquery.magnific-popup.min.js',
        'js/owl.carousel.min.js',
        'js/respond.min.js',
        'js/html5shiv.js',
        'js/main.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
