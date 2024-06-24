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
		'css/reset.css',
		'css/style.css',		
		'css/media.css'
	];
	public $js = [
		'js/general.js',
		'js/phoneinput.js'
	];
	public $depends = [
		'yii\web\YiiAsset',
		// 'yii\bootstrap5\BootstrapAsset',
	];
}