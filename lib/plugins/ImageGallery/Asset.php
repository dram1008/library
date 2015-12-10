<?php

namespace cs\plugins\ImageGallery;


use yii\web\AssetBundle;
use Yii;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since  2.0
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/blueimp/Bootstrap-Image-Gallery';
    public $css      = [
        '//blueimp.github.io/Gallery/css/blueimp-gallery.min.css',
        'css/bootstrap-image-gallery.min.css',
    ];
    public $js       = [
        '//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js',
        'js/bootstrap-image-gallery.min.js',
    ];
    public $depends  = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
