<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\User;

class SigninForm extends Model
{
    public $userName;
    public $password;
		public $rememberMe;
		
		private $_user;
		
    public function rules()
    {
        return [
            ['userName', 'trim'],
            ['userName', 'required', 'message' => 'Ім`я не може бути порожнім'],
						['userName', 'string', 'min' => 2, 'max' => 255, 
							'message' => 'Ім`я має бути рядком', 
							'tooShort' => 'Ім`я має бути довшим, ніж 2 літери', 
							'tooLong' => 'Ім`я має бути менше 255 букв'
						],
						
						['password', 'trim'],
						['password', 'required', 'message' => 'Пароль не може бути порожнім'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength'], 'tooShort' => 'Пароль має бути довшим, ніж 7 літер']
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
		}
		
    public function signin()
    {
        if ($this->validate()) {
            $user = $this->getUser();
				
						if ($user) {
							return Yii::$app->user->login($user, $this->rememberMe ? 3600*24*30 : 0);
						}
        }
				
				$this->addError('userName', 'Неправильний login або пароль');
				$this->addError('password', 'Неправильний login або пароль');
				
				return false;
    }
		
		private function getUser() {
			if ($this->_user === null) {
				$this->_user = User::findByUsername($this->userName);
			}
			
			return $this->_user;
		}
}