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
    public $email;
    public $password;
		public $rememberMe;
		
		private $_user;
		
    public function rules()
    {
        return [
						['email', 'required', 'message' => 'Email не може бути порожнім'],						
						['password', 'validatePassword'],						
						// ['rememberMe', 'integer']
        ];
    }
		
		public function validatePassword($attribute, $params)
		{
			if (!$this->hasErrors()) {
				$user = $this->getUser();
				
				if ($user) {
					if ($user->validatePassword($this->password)) {
						return true;
					}
				}
			}
			
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
		
		public function getIndentityUsername() {
			$user = $this->getUser();
			$id = $user->getId();
			$indentity = $user->findIdentity($id);
			return $indentity['username'];
		}
		
		private function getUser() {
			if ($this->_user === null) {
				$this->_user = User::findByEmail($this->email);
			}
			
			return $this->_user;
		}
}