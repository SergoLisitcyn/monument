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
        'css/site.css',
        'css/style.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
//        'https://fonts.googleapis.com/css?family=Montserrat',
        'https://fonts.googleapis.com/css?family=Roboto',


    ];
    public $js = [
        'js/script.js',
//        'js/plugins.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
