<?php
	/*
	* @return '../../ ... /.$basePath'
	*/
	function createImagePath($basePath) {
		$pathArray = explode('/', Yii::$app->request->pathInfo);
		$pathBegin = '';
		for ($i = 1; $i < count($pathArray); $i++) {
			$pathBegin = $pathBegin.'../';
		}
		
		return $pathBegin.$basePath;
	}
?>