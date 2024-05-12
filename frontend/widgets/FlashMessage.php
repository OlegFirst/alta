<?php

	namespace frontend\widgets;
	use Yii;

	class FlashMessage extends \yii\bootstrap5\Widget
	{
		public function run()
		{			
			return $this->render('flashMessage');
		}
	}