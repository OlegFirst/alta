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
		
		public function beforeAction($action)
		{
			$this->enableCsrfValidation = false;
			return parent::beforeAction($action);
		}
		
		public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ]
        ];
    }
		
		public function actionLogout()
		{
			Yii::$app->user->logout();
			Yii::$app->CustomCookies->setCookie('userName', '');
			
			return $this->redirect(['/site/index']);
		}
		
		public function actionLogin()
		{
			return $this->redirect(['/site/index']);
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
			return $this->render('blog/blog');
		}
		
		public function actionBlogArticle()
		{
			return $this->render('blog/blogArticle');
		}
		
		public function actionPrice()
		{
			return $this->render('price');
		}
		
		public function actionDiscountSystem()
		{
			return $this->render('discountSystem');
		}
		
		public function actionWholesalers()
		{
			return $this->render('wholesalers');
		}
		
		public function actionDelivery()
		{
			return $this->render('delivery');
		}
		
		public function actionSupplier()
		{
			return $this->render('supplier');
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
		
		public function actionCabinet()
		{
			return $this->render('cabinet');
		}
		
		public function actionBasket()
		{
			return $this->render('basket');
		}
		
		public function actionProductsCatalog()
		{
			return $this->render('productsCatalog');
		}
		
		public function actionProductsCatalogPopular()
		{
			return $this->render('productsCatalogPopular');
		}
		
		public function actionProductsCatalogPopularList()
		{
			return $this->render('productsCatalogPopularList');
		}
		
		public function actionOpt()
		{
			return $this->render('opt');
		}
		
		public function actionTovar()
		{
			return $this->render('tovar');
		}
		
		/*
		* Cabinet_1(start)
		*/		
		public function actionCabinetPersonalData()
		{
			return $this->render('cabinetPersonalData');
		}
		
		public function actionCabinetActiveOrders()
		{		
				return $this->render('cabinetActiveOrders');
		}
		
		public function actionCabinetOrderHistory()
		{
			return $this->render('cabinetOrderHistory');
		}
		
		public function actionCabinetDiscountSystem()
		{
			return $this->render('cabinetDiscountSystem');
		}
		
		public function actionCabinetSelectedProducts()
		{
			return $this->render('cabinetSelectedProducts');
		}
				
		public function actionCabinetProductsForComparison()
		{
			return $this->render('cabinetProductsForComparison');
		}
		
		public function actionCabinetReviewedProducts()
		{
			return $this->render('cabinetReviewedProducts');
		}
		/*
		* Cabinet_(end)
		*/
		
		/*
		*	Cabinet 2_(start)
		*/
		// Cabinet 2_2
		public function actionCabinetPersonalDataTwo()
		{
			return $this->render('cabinetPersonalDataTwo');
		}
		
		// Cabinet 2_3
		public function actionCabinetActiveOrdersTwo()
		{
			return $this->render('cabinetActiveOrdersTwo');
		}
		
		// Cabinet 2_4
		public function actionCabinetOrderHistoryTwo()
		{
			return $this->render('cabinetOrderHistoryTwo');
		}
		
		// Cabinet 2_5
		public function actionCabinetCalculationTwo()
		{
			return $this->render('cabinetCalculationTwo');
		}
		
		// Cabinet 2_6
		public function actionCabinetDelayedPaymentTwo()
		{
			return $this->render('cabinetDelayedPaymentTwo');
		}
		
		// Cabinet 2_7
		public function actionCabinetManagerTwo()
		{
			return $this->render('cabinetManagerTwo');
		}
		
		// Cabinet 2_8
		public function actionCabinetAgreementsTwo()
		{
			return $this->render('cabinetAgreementsTwo');
		}
		/*
		*	Cabinet 2_(end)
		*/
	}