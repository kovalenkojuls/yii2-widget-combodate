<?php
/**
 * @link https://github.com/kovalenkojuls/yii2-widget-combodate/
 * @copyright Copyright (c) 2016
 * @license https://github.com/kovalenkojuls/yii2-widget-combodate/blob/master/LICENSE.md
 */

namespace kovalenkojuls\date;

use yii\web\AssetBundle;

/**
 * @author Julia Kovalenko <kovalenko_jul_s@mail.ru>
 */
class MomentJsAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets/js/moment/min/';
    
    public $js = [
        'moment-with-locales.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}