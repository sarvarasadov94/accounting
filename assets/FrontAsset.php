<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/public/css/bootstrap.min.css",
        "/public/css/bootstrap-dialog.css",
        "/public/css/font-awesome.css",
        "/public/css/main.css",
        "/public/css/media.css",
    ];
    public $js = [
        "/public/js/dialog.js",
        "/public/js/bootstrap.min.js",
        "/public/js/raphael.min.js",
        "/public/js/jquery.mCustomScrollbar.concat.min.js",


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
