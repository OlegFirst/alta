<?php

	namespace frontend\widgets;
	use frontend\models\SignupForm;
	use Yii;

	class Signup extends \yii\bootstrap5\Widget
	{
		public function run()
		{
			$model = new SignupForm();
			
			if ($model->load(Yii::$app->request->post()) && $model->signup()) {			
				Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
			}
			
			return $this->render('signup', compact('model'));
		}
	}