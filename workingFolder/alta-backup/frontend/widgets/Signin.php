<?php

	namespace frontend\widgets;
	use common\models\SigninForm;
	use Yii;

	class Signin extends \yii\bootstrap5\Widget
	{
		public function run()
		{
			$model = new SigninForm();
			$infoMessage = '';
			
			if ($model->load(Yii::$app->request->post()) && $model->signin()) {
				if ($model->signin()) {
					$infoMessage = 'Success';
				} else {
					$infoMessage = 'User not found';
					echo 'failed';
				}
				return true;
			}
			
			return $this->render('signin', compact('model', 'infoMessage'));
		}
	}