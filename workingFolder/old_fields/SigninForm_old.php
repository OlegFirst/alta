<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signin form
 */
class SigninForm extends Model
{
    // public $userName;
		public $email;
    public $password;
		public $rememberMe;
		
		private $_user;
		
    public function rules()
    {
        return [
            // ['userName', 'required', 'message' => 'Ім`я не може бути порожнім'],
						
						['email', 'required', 'message' => 'Email не може бути порожнім'],
						
						['password', 'validatePassword'],
						
						['rememberMe', 'integer']
        ];
    }
		
		public function validatePassword($attribute, $params)
		{
			if (!$this->hasErrors()) {
				$user = $this->getUser();
				
				var_dump($user->validatePassword($this->password));
			
				
				if ($user) {
					if ($user->validatePassword($this->password)) {
						return true;
					}
				}
			}
			
			// $this->addError('userName', 'Неправильне ім`я або пароль');
			$this->addError('email', 'Неправильний email або пароль');
			$this->addError('password', 'Неправильний email або пароль');
		}
    
    public function signin() {
			if ($this->validate()) {
				$user = $this->getUser();
				
				if ($user) {
					return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
				}
			}
			
			return false;
    }
		
		private function getUser() {
			if ($this->_user === null) {
				$this->_user = User::findByEmail($this->email);
			}
			
			return $this->_user;
		}
		
		// private function getUser() {
			// if ($this->_user === null) {
				// $this->_user = User::findByUsername($this->userName);
			// }
			
			// return $this->_user;
		// }
}