<?php
namespace common\models\formatted;

use common\models\Blog;

/*
 * @property integer $id
 * @property string $category_name
 * @property string $title
 * @property string $image_name
 * @property string $text
 * @property string $created_at
 * @property integer $view_count
 * @property integer $sort
 * @property integer $status = 1
 * @property integer $is_popular 
 */

/*
* NB: INNER JOIN with other table(s)*
*/

class BlogFormatted extends Blog
{
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'category_name' => 'Category name',
			'title' => 'Title',
			'file' => 'Image',
			'text' => 'Text',
			'created_at' => 'Created at',
			'view_count' => 'View count',
			'sort' => 'Sort',
			'status' => 'Status',
			'is_popular' => 'Is pupular'
		];
	}
	
	// public static function getModelQuery() {
		// $query = new \yii\db\Query();
		
		// return $query
			// ->select(
				// 'blog.id, blog.title, blog.image_name, blog.text, blog.created_at, blog.view_count, blog.sort, blog.status, blog.is_popular,
				// category.name as category_name'
			// )
			// ->from('blog')
			// ->leftJoin('category', 'blog.category_id = category.id');
	// }
	
	public static function getModel() {
		$query = new \yii\db\Query();
		
		return $query
			->select(
				'blog.id, blog.title, blog.image_name, blog.text, blog.created_at, blog.view_count, blog.sort, blog.status, blog.is_popular,
				category.name as category_name'
			)
			->from('blog')
			->leftJoin('category', 'blog.category_id = category.id')
			->where(['status' => 1])
			->orderBy('sort')
			->all();
	}
	
	public static function getModelById($id) {
		$query = new \yii\db\Query();
		
		return $query
			->select(
				'blog.id, blog.title, blog.image_name, blog.text, blog.created_at, blog.view_count, blog.sort, blog.status, blog.is_popular,
				category.name as category_name'
			)
			->from('blog')
			->leftJoin('category', 'blog.category_id = category.id')
			->where(['blog.id' => $id])
			->all()
			[0];
	}
	
	public static function getPaginatedModel($pagination) {
		$query = new \yii\db\Query();
		
		return $query
			->select(
				'blog.id, blog.title, blog.image_name, blog.text, blog.created_at, blog.view_count, blog.sort, blog.status, blog.is_popular,
				category.name as category_name'
			)
			->from('blog')
			->leftJoin('category', 'blog.category_id = category.id')
			->where(['status' => 1])
			->orderBy('sort')
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();
	}
	
	public static function getPopularModel() {
		$query = new \yii\db\Query();
		
		return $query
			->select(
				'blog.id, blog.title, blog.image_name, blog.text, blog.created_at, blog.view_count, blog.sort, blog.status, blog.is_popular,
				category.name as category_name'
			)
			->from('blog')
			->leftJoin('category', 'blog.category_id = category.id')
			->where(['status' => 1])
			->andWhere(['is_popular' => 1])
			->orderBy('sort')
			->all();
	}
}