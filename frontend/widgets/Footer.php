<?php
	namespace frontend\widgets;

	class Footer extends \yii\bootstrap5\Widget
	{
		public function run()
		{
			return $this->render('footer');
		}
	}