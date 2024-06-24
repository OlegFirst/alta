<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $userName;
		public $phone;
    public $email;
    public $password;
		public $isLegalEntity;
		public $companyName = null;
		public $companyTypeId = null;
		public $companyInfo = null;
		
    public function rules()
    {
        return [
            ['userName', 'trim'],
            ['userName', 'required'],
            ['userName', 'string', 'min' => 2, 'max' => 255],
						
						['phone', 'trim'],
            ['phone', 'required'],
            ['phone', 'string', 'min' => 4, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
						['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
						
						['password', 'trim'],
						['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
						
						['isLegalEntity', 'integer'],
						
						['companyName', 'trim'],
            ['companyName', 'string', 'min' => 1, 'max' => 255],
						
						['companyTypeId', 'trim'],
            ['companyTypeId', 'string', 'min' => 1, 'max' => 255],
						
						['companyInfo', 'trim'],
            ['companyInfo', 'string', 'min' => 1, 'max' => 255]
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->userName;
				$user->phone = $this->phone;
        $user->email = $this->email;
				$user->password = $this->password;
        // $user->setPassword($this->password);				
				$user->is_legal_entity = $this->isLegalEntity;
				$user->company_name = $this->companyName;
				$user->company_type_id = $this->companyTypeId;				
				$user->company_info = $this->companyInfo;
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();

        return $user->save();
				// && $this->sendEmail($user);
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
