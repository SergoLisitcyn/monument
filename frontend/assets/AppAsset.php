<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/bootstrap.min.css',
//        'css/owl.carousel.min.css',
//        'css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css',
    ];
    public $js = [
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
