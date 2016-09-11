<?php
/**
 * @link https://github.com/kovalenkojuls/yii2-widget-combodate/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://github.com/kovalenkojuls/yii2-widget-combodate/blob/master/LICENSE.md
 */

namespace kovalenkojuls\date;

use yii\web\AssetBundle;

/**
 * @author Julia Kovalenko <kovalenko_jul_s@mail.ru>
 */
class CombodateAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets/js/combodate/src/';
    
    public $js = [
        'combodate.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
        'kovalenkojuls\date\MomentJsAsset'
    ];
}
