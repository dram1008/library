<?php

namespace cs\plugins\ImageGallery;


use cs\helpers\Html;
use yii\base\Object;
use yii\helpers\Url;

class ImageGallery extends Object
{
    /** @var  array
     */
    public $items;

    public function run()
    {
        $this->registerAssets();
        return '';
    }

    private function registerAssets()
    {
        Asset::register(\Yii::$app->view);
    }

    public static function widget($config = [])
    {
        $class = new self($config);

        return $class->run();
    }
} 