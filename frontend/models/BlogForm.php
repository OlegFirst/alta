<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

/*
* Get the 'id' of the selected blog article
*/
class BlogForm extends Model
{
	public $id;

	public function rules()
	{
		return [
			['id', 'required'],
			['id', 'integer'],
		];
	}
	
	public function getBlogId() {
		if (!$this->validate()) {
			return null;
		}
		
		return $this->id;
	}
}