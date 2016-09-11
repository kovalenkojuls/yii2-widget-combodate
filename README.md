# yii2-widget-combodate
Wrapper of jQuery plugin Combodate (https://github.com/vitalets/combodate)

* Simple Input
* Many options
* Many templates

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/kartik-v/yii2-widget-datepicker/blob/master/composer.json) for this extension's requirements and dependencies. Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

To install, either run

```
$ php composer.phar require kovalenkojuls/yii2-widget-combodate "*"
```

or add

```
"kovalenkojuls/yii2-widget-combodate": "*"
```

to the `require` section of your `composer.json` file.


## Demo

You can refer detailed [demos](http://vitalets.github.io/combodate/)

## Usage

```php
use kovalenkojuls\date\CombodateWidget;

// usage without model
echo '<label>Check Date</label>';
echo CombodateWidget::widget([
	'name' => 'check_date', 
	'options' => [
               'language'       => 'ru',
               'data-format'    => 'DD.MM.YYYY',
               'data-template'  => 'D MMMM YYYY',
               'customClass'    => 'form-control'
           ]
]);

//.......................................................................

// usage model
$form = ActiveForm::begin();
echo $form->field($model, 'birthday')->widget(CombodateWidget::className(),
       [
           'value'   => $model->birthday ? $model->birthday : '',
           'options' => [
               'language'       => 'ru',
               'data-format'    => 'DD.MM.YYYY',
               'data-template'  => 'D MMMM YYYY',
               'customClass'    => 'form-control'
           ]
       ])
```

## Required parameters

| Name  | Type    | Example   | Description         |
| ---------------|-----------------|--------------------| -----------------|
| language | string | 'ru', 'fr', 'en'  | All language look at yii2-widget-combodate/assets/js/moment/locale/ |
| data-format | string | 'DD-MM-YYYY', 'DD-MM-YYYY HH:mm', 'DD-MM-YYYY h:mm a' | In this format date is stored in original input.| 
| data-template | string | 'D MMM YYYY', 'DD / MM / YYYY     HH : mm' | In this format dropdowns are displayed.  |
| name (without model) | string | 'data-input'    | Name of input.  |
| value (with model)   | strind| If data-format='DD-MM-YYYY', value='21-05-2016' (for example) | Initial value.|

## Optional parameters

| Name	    | Type	   | Default	| Description |
| ---------------|:-------:|:--------:| ----------------|
| value          |	mixed  |	null    |	Initial value. Used as default value if not defined in <input>.                                 |
| minYear        |	int    |	1970    |	Minimum value in years dropdown.                                                                |
| maxYear        |	int    |	2015    |	Maximum value in years dropdown.                                                                |
| yearDescending |	bool   |	true    |	Years order.                                                                                    |
| minuteStep     |	int    |	5       |	Step of values in minutes dropdown.                                                             |
| secondStep     |	int    |	1       |	Step of values in seconds dropdown.                                                             |
| firstItem      |	string |	'empty' |	What is shown in first item of all dropdown. Can be empty|name|none.                            |
| errorClass     |	string |	null    |	Css class applied if date is incorrect, e.g. Feb, 31. If null dropdowns appears in red border.  |
| customClass    |	string |	null    |	Css class applied to each dropdown.                                                         |
| roundTime      |	bool   |	true    |	Whether to round minutes and seconds if step > 1.                                               |
| smartDays      |	bool   |	false   |	If true - number of days depends on selected month and year.                                    |

##License

[MIT LICENSE](https://github.com/kovalenkojuls/yii2-widget-combodate/blob/master/LICENSE)
