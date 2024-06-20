<?php

namespace backend\controllers;

use common\models\Category;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

class CategoryController extends Controller
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

	public function actionIndex()
	{
		$dataProvider = new ActiveDataProvider([
			'query' => Category::find()
		]);
		
		return $this->render('index', [ 'dataProvider' => $dataProvider ]);
	}
	
	public function actionCreate()
	{
		$model = new Category();
		
		if ($this->request->isPost) {
			if ($model->load($this->request->post())) {				
				if ($model->save()) {
					return $this->redirect(['index']);
				}
			}
		} else {
				$model->loadDefaultValues();
		}
		
		return $this->render('create', [ 'model' => $model ]);
	}
	
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($this->request->isPost && $model->load($this->request->post())) {
			if ($model->save()) {
				return $this->redirect(['index']);
			}
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}
	
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}
	
	protected function findModel($id)
	{
		if (($model = Category::findOne(['id' => $id])) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}