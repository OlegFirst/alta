<?php

namespace backend\controllers;

use backend\models\SigninForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

// name = 'admin'
// password = 'adminpassword'

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
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
        return $this->render('index');
    }

    public function actionLogin()
    {
        // if (!Yii::$app->user->isGuest) {
            // return $this->goHome();
        // }
        $this->layout = 'blank';

        $model = new SigninForm();
        if ($model->load(Yii::$app->request->post()) && $model->signin()) {
						 $this->layout = 'main';
            return $this->render('index');
						// return $this->goBack();
        }

        return $this->render('admin', [
            'model' => $model
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
		
		public function actionGoodsCatalog()
		{
			return $this->render('goodsCatalog');
		}
		
		public function actionOne()
		{
			return $this->render('one');
		}
}