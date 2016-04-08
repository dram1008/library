<?php

use yii\helpers\Html;

/**
 * [
 * 'value'    =>  [
 *      'file' => '/uploads/...',
 *      'url'  => ''
 * ]
 * 'attribute' => attribute_name // string
 * 'formName' => $this->model->formName(), // string
 * 'model'    => $this->model, // \yii\base\Model
 * 'attrId'   => $this->attrId, // attribute id
 * 'attrName' => $this->attrName, // attribute name
 * 'widgetOptions' => $widgetOptions, // widgetOptions опции переданные при конфигурации виджета в widgetOptions
 * ]
 */

/** @var $value */
/** @var $attrId */
/** @var $attrName */
/** @var $widgetOptions */
/** @var $formName */
/** @var $attribute */
?>

<div class="col-lg-14">
    <?php if ($value['value'] != '') { ?>
        <img src="<?= $value['value'] ?>" id="<?= $attrId ?>-img" style="width: 150px;" class="thumbnail">
        <div class="col-lg-14" style="margin-bottom: 20px;">
            <a class="btn btn-default" id="<?= $attrId ?>-delete" role="button">Удалить</a>
            <input type="file" name="<?= $attrName ?>" id="<?= $attrId ?>" accept="image/*" title="Выбрать файл">
        </div>
        <div class="col-lg-14" style="margin-bottom: 20px;">
            <?php
            $options = [
                'type' => 'text',
                'name' => $formName . '[' . $attribute . '-url]',
                'class' => 'form-control',
                'placeholder' => 'URL: http://...',
            ];
            if (($url = \yii\helpers\ArrayHelper::getValue($value, 'url', '')) != '') {
                $options['value'] = $url;
            }
            ?>
            <?= Html::tag('input',null, $options) ?>
        </div>
        <input type="hidden" name="<?= $formName . '[' . $attribute . '-is_delete]' ?>" id="<?= $attrId ?>-is_delete" value="0">
        <div id="<?= $attrId ?>-img_name"></div>
    <?php } else { ?>
        <div class="photo_form_upload blue_button">
            <input type="file" name="<?= $attrName ?>" id="<?= $attrId ?>" accept="image/*" title="Выбрать файл">
        </div>
        <input type="text" name="<?= $formName . '[' . $attribute . '-url]' ?>" class="form-control" placeholder="URL: http://..." style="margin-top: 20px; margin-bottom: 20px;">
        <div id="{$attrId}-img_name"></div>
    <?php } ?>
    <input type="hidden" name="<?= $attrName ?>" id="<?= $attrId ?>-value" value="<?= $value['value'] ?>">
</div>