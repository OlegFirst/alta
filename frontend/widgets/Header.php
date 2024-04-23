<?php

	namespace frontend\widgets;

	class Header extends \yii\bootstrap5\Widget
	{
		public function run()
		{
			$menu = 'menu test';

			return $this->render('header', compact('menu'));
		}
	}