<?php
	namespace common\models;
	use yii\db\ActiveRecord;
	use Yii;

	/*
	 * Category model
	 *
	 * @property integer $id
	 * @property string $name
	 *
	 */

	class Category extends ActiveRecord
	{	
		public static function tableName()
		{
			return 'category';
		}
		
		 public function rules()
		{
			return [
				[['name'], 'string'],
				[['name'], 'required']			
			];
		}
		
		public function attributeLabels()
		{
			return [
				'id' => 'ID',
				'name' => 'Name'
			];
		}
	}