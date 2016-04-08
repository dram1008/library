<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace cs\Widget\FileUpload3;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@csRoot/Widget/FileUpload3/assets';
    public $css = [
        'index.css'
    ];
    public $js = [
        'handlers.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'cs\assets\FileInput\Asset',
    ];
}
