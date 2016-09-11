<?php
/**
 * @link https://github.com/kovalenkojuls/yii2-widget-combodate/
 * @copyright Copyright (c) 2016
 * @license https://github.com/kovalenkojuls/yii2-widget-combodate/blob/master/LICENSE.md
 */

namespace kovalenkojuls\date;

use kovalenkojuls\date\CombodateAsset;
use yii\widgets\InputWidget;
use yii\helpers\Html;

class CombodateWidget extends InputWidget
{
    public $view;

    public function init()
    {
        parent::init();
        $this->view = $this->getView();
        $this->registerAssets();
    }

    public function getJsCode(){
        return sprintf(
            "$(document).ready(function(){
                moment.locale('%s');
                $('#%s').combodate(%s);});",
            $this->options['language'],
            $this->options['id'],
            json_encode($this->options, JSON_UNESCAPED_UNICODE)
        );
    }

    public function registerAssets()
    {
        CombodateAsset::register($this->view);
        $this->view->registerJs($this->getJsCode());
        $this->view->registerCss(file_get_contents(__DIR__."/assets/css/combodate-widget.css"));
    }

    public function getName()
    {
        return isset($this->model) ? $this->model->formName() . "[{$this->attribute}]" : $this->name;
    }

    public function run()
    {
        return Html::input('text',
                $name    = $this->getName(),
                $value   = $this->value,
                $options = [
                    'style'         => 'display:none;',
                    'id'            => $this->options['id'], 
                    'data-format'   => $this->options['data-format'],
                    'data-template' => $this->options['data-template']
                ]
            );
    }
}
