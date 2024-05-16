<?php
/** 
	@var common\models\User $model
	@var common\models\UserRole $model
*/

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use frontend\models\UserRole;

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
		public $companyName;
		public $companyTypeId = 0;
		public $companyInfo;
		public $privacyPolicy;
		
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
						
						['phone', 'trim'],
            ['phone', 'required', 'message' => 'Номер телефону не може бути порожнім'],
            ['phone', 'string', 'min' => 4, 'max' => 255,
							'tooShort' => 'Номер телефону має бути довшим ніж 4 цифри', 
							'tooLong' => 'Номер телефону має бути менше ніж 255 цифр'
						],

            ['email', 'trim'],
            ['email', 'required', 'message' => 'Email не може бути порожнім'],
						['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Цей email уже використано'],
            ['email', 'email', 'message' => 'Email неправильний'],
            ['email', 'string', 'max' => 255, 'tooLong' => 'Email має бути бути менше 255 букв'],
						
						['password', 'trim'],
						['password', 'required', 'message' => 'Пароль не може бути порожнім'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength'], 'tooShort' => 'Пароль має бути довшим, ніж 7 літер'],
						
						['isLegalEntity', 'integer'],
						
						['companyName', 'trim'],
						['companyName', 'companyNameValidation', 'skipOnEmpty' => false],
						
						['companyTypeId', 'companyTypeIdValidation', 'skipOnEmpty' => false],
						
						['companyInfo', 'trim'],
						['companyInfo', 'companyInfoValidation', 'skipOnEmpty' => false],
						
						['privacyPolicy', 'integer'],
						['privacyPolicy', 'privacyPolicyValidation', 'skipOnEmpty' => false],
        ];
    }
		
		public function companyNameValidation($attribute, $params) {
			if ($this->isLegalEntity == 0) {
				return true;
			}
			
			if (strlen($this->companyName) >= 1 && strlen($this->companyName) <= 10) {
				return true;
			}
			
			$this->addError($attribute, 'Назва компанії не може бути пустою або довшою за 10 літер');
		}
		
		public function companyTypeIdValidation($attribute, $params) {
			if ($this->isLegalEntity == 0) {
				return;
			}
			
			if ($this->companyTypeId == '') {
				$this->addError($attribute, 'Виберіть тип компанії');
			}
		}
		
		public function companyInfoValidation($attribute, $params) {
			if ($this->isLegalEntity == 0) {
				return;
			}
			
			if (strlen($this->companyInfo) >= 1 && strlen($this->companyInfo) <= 10) {
				return;
			}
			
			$this->addError($attribute, 'ЄДРПОУ не може бути пустою або довшою за 10 літер');
		}
		
		public function privacyPolicyValidation($attribute, $params) {
			if ($this->privacyPolicy == '1') {
				return;
			}
			
			$this->addError($attribute, 'Не можна ігнорувати');
		}
		
    /**
     * Sign user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
				// Create new User
        $user = new User();
        $user->username = $this->userName;
				$user->phone = $this->phone;
        $user->email = $this->email;
				$user->setPassword($this->password);
				$user->is_legal_entity = $this->isLegalEntity;
				$user->company_name = $this->companyName;
				$user->company_type_id = $this->companyTypeId;				
				$user->company_info = $this->companyInfo;
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
				
				if ($user->save()) {
					return $this->saveUserRole();
				}
				
				return false;
    }
		
		private function saveUserRole()
		{
				$savedUser = User::findByEmail($this->email);
				$id = $savedUser['id'];
				$roleAlias = $this->isLegalEntity ? 'legalEntity' : 'physicalPerson';
				$roleName = Yii::$app->FrontendUser->getUserRole($roleAlias);
				
				$modelUserRole = new UserRole();
				$modelUserRole->item_name = $roleName;
				$modelUserRole->user_id = $id;
				
				return $modelUserRole->save();
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