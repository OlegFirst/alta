<?php

	namespace frontend\widgets;
	use frontend\models\SigninForm;
	use Yii;

	class Signin extends \yii\bootstrap5\Widget
	{
		public function run() {
			$model = new SigninForm();
			
			if ($model->load(Yii::$app->request->post())) {
				if ($model->signin()) {
					
					$userName = $model->getIndentityUsername();
					Yii::$app->CustomCookies->setCookie('userName', $userName);
					
					Yii::$app->CustomCookies->setCookie('authenticationStatus', Yii::$app->params['authenticationStatus']['CLEAR']);
					Yii::$app->session->setFlash('flashMessage', 'З поверненням!');
					
				} else {
					Yii::$app->CustomCookies->setCookie('authenticationStatus', Yii::$app->params['authenticationStatus']['SIGN_IN']);
				}
			}
			
			return $this->render('signin', compact('model'));
		}
	}