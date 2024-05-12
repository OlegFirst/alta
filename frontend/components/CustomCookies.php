<?php

namespace app\components;

use yii\base\Component;

class CustomCookies extends Component
{
	public function setCookie($name, $value) {
		$cookieOptions = [
			'expires' => time() + 3600,
			'samesite' => 'None',
			'secure' => true
		];				
		
		setcookie($name, $value, $cookieOptions);
	}
}