<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/default/assets/';
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
        'site.css',
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

//    public $sourcePath = '@app/themes/axy2shop/assets/';
//    public $sourcePath = '@webroot/css';
//    public $basePath = '@webroot/css';
//    public $baseUrl = '@web/themes/axy2shop/assets/';