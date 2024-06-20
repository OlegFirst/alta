<?php
namespace backend\controllers;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

use common\models\Blog;
use common\models\formatted\BlogFormatted;
use common\models\Category;

class BlogController extends Controller
{
	public function behaviors()
	{
		return array_merge(
			parent::behaviors(),
			[
				'verbs' => [
					'class' => VerbFilter::className(),
					'actions' => [
						'delete' => ['POST'],
					],
				],
			]
		);
	}	

	 public function actions()
	{
		return [
			'error' => [
				'class' => \yii\web\ErrorAction::class,
			],
		];
	}
	
	/*
	 * Lists all Blog models.
	 * @return string
	 */
	public function actionIndex()
	{
		$dataProvider = new ActiveDataProvider([
			'query' => Blog::find()->leftJoin('category', 'blog.category_id = category.id')->orderBy('sort')
		]);
				
		$categoryModel = Category::find()->all();
		
		return $this->render('index', [ 
			'dataProvider' => $dataProvider,
			'$categoryModel' => $categoryModel
		]);
	}

	/*
	 * Creates a new Blog model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return string|\yii\web\Response
	 */
	public function actionCreate()
	{
		$model = new Blog();
		$sortMax = Blog::find()->max('sort') + 1;
		$categoryModel = Category::find()->asArray()->all();
		
		if ($this->request->isPost) {
			if ($model->load($this->request->post())) {
				$uploadedFile = UploadedFile::getInstance($model, 'file');
				$model->image_name = $uploadedFile->name;
				$model->file = $uploadedFile;
				
				if ($model->save()) {
					return $this->redirect(['index']);
				}
			}
		} else {
				$model->loadDefaultValues();
		}
		
		return $this->render('create', compact('model', 'sortMax', 'categoryModel'));
	}
	
	 /*
	 * Updates an existing Blog model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param int $id ID
	 * @return string|\yii\web\Response
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		
		$categoryModel = Category::find()->asArray()->all();

		if ($this->request->isPost && $model->load($this->request->post())) {
			$uploadedFile = UploadedFile::getInstance($model, 'file');
			
			if ($uploadedFile != null) {
				$model->image_name = $uploadedFile->name;
				$model->file = $uploadedFile;
			}
			
			if ($model->save()) {
				return $this->redirect(['index']);
			}
		}

		return $this->render('update', compact('model', 'categoryModel'));
	}
	
	/*
  * Deletes an existing Blog model
  */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}
	
	/*
	 * Finds the Network model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param int $id ID
	 * @return Blog the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Blog::findOne(['id' => $id])) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}