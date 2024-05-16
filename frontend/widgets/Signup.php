<?php
	/** @var components\FrontendUser $modelUserRole */	

	namespace frontend\widgets;
	
	use frontend\models\SignupForm;
	use Yii;

	class Signup extends \yii\bootstrap5\Widget
	{
		public function run() {
			$model = new SignupForm();
			
			if ($model->load(Yii::$app->request->post())) {
				if ($model->signup()) {
					Yii::$app->CustomCookies->setCookie('authenticationStatus', Yii::$app->params['authenticationStatus']['CLEAR']);
					Yii::$app->session->setFlash('flashMessage', 'Дякуємо за реєстрацію');
					
				} else {
					Yii::$app->CustomCookies->setCookie('authenticationStatus', Yii::$app->params['authenticationStatus']['SIGN_UP']);
				}
			}
			
			return $this->render('signup', compact('model'));
		}
	}