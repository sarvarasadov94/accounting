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
        "public/css/bootstrap.min.css",
//        "_public/css/kv-grid.css",
        "public/css/bootstrap-dialog.css",
//        "_public/css/jquery.resizableColumns.css",
        "public/css/font-awesome.css",
        "public/css/main.css",
        "public/css/media.css",


//        "_public/css/select2.css",
//        "_public/css/select2-addl.css",
//        "_public/css/select2-krajee.css",
//        "_public/css/kv-widgets.css"
    ];
    public $js = [
//        "_public/js/jquery.js",
        "public/js/dialog.js",
//        "_public/js/bootstrap.min.js",
//        "_public/js/bootstrap-dialog.js",

//        "public/js/jquery.vmap.js",
//        "public/js/vmap.uzbekistan.js",
//        "public/js/map.js",
        "public/js/jquery.mCustomScrollbar.concat.min.js",

//        "_public/js/yii.js",
//        "_public/js/dialog-yii.js",
//        "_public/js/kv-grid-export.js",
//        "_public/js/jquery.resizableColumns.js",
//        "_public/js/yii.gridView.js",
//        "_public/js/select2.full.js",
//        "_public/js/select2-krajee.js",
//        "_public/js/kv-widgets.js",
//        "_public/js/jquery.pjax.js"

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
