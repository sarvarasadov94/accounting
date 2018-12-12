<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "public/css/font-awesome.css",
        "public/css/bootstrap.min.css",
        "public/css/main.css",
        "public/css/media.css"

    ];
    public $js = [
        "public/js/bootstrap.min.js",
        "public/js/bootstrap-dialog.js"


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
