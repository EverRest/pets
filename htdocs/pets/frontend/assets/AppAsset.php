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
        //'css/site.css',
        'source/css/fonts.css',
        'source/css/main.css',
        'source/css/media.css'
    ];
    public $js = [
        //'https://maps.googleapis.com/maps/api/js?key=AIzaSyB9f4vaqJWN_wp_rxw5lDTwveJbD4Qo-Lg&amp;libraries=places',
        //'source/js/map.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
