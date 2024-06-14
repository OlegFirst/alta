<?php
namespace common\models;
use yii\db\ActiveRecord;
use Yii;

/*
 * Blog model
 *
 * @property integer $id
 * @property string $label
 * @property string $title
 * @property string $image_name
 * @property string $text
 * @property string $created_at
 * @property integer $view_count
 * @property integer $sort
 * @property integer $status
 * @property integer $is_popular
 *
 */

/*
* NB: 
* $sort - direction of showing blog`s articles
*	$status = 0 (visible) or 1 (hidden)
* $is_popular = 1 or 0 ( is shown in a blog article slider or not )
*/

class Blog extends ActiveRecord
{
	public $file;
	
	public static function tableName()
  {
		return 'blog';
  }
	
	 public function rules()
	{
		return [
			[['label', 'title', 'image_name', 'text', 'created_at'], 'string'],
			[['view_count', 'sort', 'status', 'is_popular'], 'integer'],
			[['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, svg'],
			[['label', 'title', 'image_name', 'text', 'created_at', 'view_count', 'sort'], 'required']			
		];
	}
	
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'label' => 'Label',
			'title' => 'Title',
			'file' => 'Image',
			'text' => 'Text',
			'created_at' => 'Created at',
			'view_count' => 'View count',
			'sort' => 'Sort',
			'status' => 'Status',
			'is_popular' => 'The article is pupular'
		];
	}
	
	 public function beforeSave($insert)
   {
			if ($this->isNewRecord)
			{
				
				$maxOrderNumber = Yii::$app->db->createCommand('SELECT max(sort) as max FROM blog')->queryScalar();
				$this->sort = $maxOrderNumber + 1;
			
			} else {
				
				$duplicate = self::find()->where(['sort' => $this->sort])->andWhere(['!=', 'id', $this->id])->one();
				if ($duplicate) {
					$items = self::find()->where(['>=', 'sort', $this->sort])->all();
					foreach ($items as $item) {
						$item->sort = $item->sort + 1;
						$item->save(false);
					}
				}
				
			}

			return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
			if ($this->file) {
				$this->file->saveAs(Yii::getAlias(Yii::$app->urlManagerFrontend->baseUrl.'/uploads/blog/').$this->file->name);
			}

			parent::afterSave($insert, $changedAttributes);
    }
}