<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class UserRole extends ActiveRecord
{
	public static function tableName() {
		return 'auth_assignment';
	}
}