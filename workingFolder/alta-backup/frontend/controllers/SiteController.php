<?php

	namespace frontend\controllers;
	use yii\web\Controller;
	use yii\filters\VerbFilter;
	use yii\filters\AccessControl;
	use frontend\models\SignupForm;
	use frontend\models\TestForm;
	use Yii;

	class SiteController extends Controller
	{
		
		public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
            ]
        ];
    }
		
		public function actionIndex()
		{
			return $this->render('index');
		}
		
		public function actionAbout()
		{
			return $this->render('about');
		}
		
		public function actionBlog()
		{
			return $this->render('blog');
		}
		
		public function actionPrice()
		{
			return $this->render('price');
		}
		
		public function actionWholesalers()
		{
			return $this->render('wholesalers');
		}
		
		public function actionDelivery()
		{
			return $this->render('delivery');
		}
		
		public function actionCalculator()
		{
			return $this->render('calculator');
		}
		
		public function actionContacts()
		{
			return $this->render('contacts');
		}
		
		public function actionFaq()
		{
			return $this->render('faq');
		}
	}