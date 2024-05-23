<?php
namespace app\components;

use Yii;
use yii\base\Component;
use common\models\User;

/**
* Extended yii/web/user
*
* - This allow to do 'Yii::$app->user->SOMETHING'
* - It has userRoles list
*
*/

class FrontendUser extends Component
{
	
	private $userRoles;
	
	public function init() {
		parent::init();
		
		// @'name' equals 'name' in the 'auth_item' - table of the data base
		$this->userRoles = [
			['name' => 'error', 'alias' => 'notFound'],
			['name' => 'physical-person', 'alias' => 'physicalPerson'],
			['name' => 'legal-entity', 'alias' => 'legalEntity']
		];
	}
		
	public function getUsername() {
		Yii::$app->session->setFlash('error', 'This is the message');
		
		return Yii::$app->user->identity ? Yii::$app->user->identity->username : null;
	}
	
	// User role_(start)
	public function is($alias) {		
		$roleName = null;
		
		forEach ($this->userRoles as $item) {
			if ($item['alias'] == $alias) {
				$roleName = $item['name'];
			}
		}
		
		if ($roleName) {
			if (Yii::$app->user->can($roleName)) {
				return true;
			}
		}
			
		return false;
	}
	
	public function getUserRole($alias) {
		$notFoundItem = $this->userRoles[0]['name'];
		$index = array_search($alias, array_column($this->userRoles, 'alias'));
			
		return $index == true ? $this->userRoles[$index]['name'] : $notFoundItem;
	}
	// User role_(end)
	
	public function signout() {
		Yii::$app->user->logout();
	}
}