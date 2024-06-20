<?php
	namespace frontend\controllers;

	use yii\web\Controller;
	use yii\filters\VerbFilter;
	use yii\filters\AccessControl;
	use yii\data\Pagination;
	use Yii;
	
	
	use common\models\Blog;
	use common\models\formatted\BlogFormatted;
	use common\models\Category;
	use frontend\models\BlogForm;
	
	class BlogController extends Controller
	{
		private $currentBlogArticleInitialState = [
			'id' => null,
			'isViewCountIncreased' => false
		];
		
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
		
		public function actionIndex()
		{			
			$pagination = new Pagination([
				'defaultPageSize' => 4,
				'totalCount' => count(BlogFormatted::getModel())
			]);
			
			$model = BlogFormatted::getPaginatedModel($pagination);			
			$categoryModel = Category::find()->asArray()->all();
			$formModel = new BlogForm();
			
			if ($formModel->load(Yii::$app->request->post())) {
				$blogId = $formModel->getBlogId();
				
				// Some blog is selected
				if ($blogId) {
					$this->setCurrentBlogArticle($blogId, false);
					return $this->redirect(['blog-article', 'id' => $blogId]);
				}
			}
			
			return $this->render('blog', compact('model', 'categoryModel', 'formModel', 'pagination'));
		}
		
		public function actionBlogArticle()
		{
			$blogId = Yii::$app->request->queryParams;
			
			// Try to increase blog view count
			$this->blogViewCountUpdate($blogId);
			
			$model = BlogFormatted::getModelById($blogId);
			
			$popularArticles = BlogFormatted::getPopularModel();
			
			$formModel = new BlogForm();
			
			if ($formModel->load(Yii::$app->request->post())) {
				$currentBlogId = $formModel->getBlogId();
				
				if ($currentBlogId) {
					return $this->redirect(['blog-article', 'id' => $currentBlogId]);
				}
			}
			
			return $this->render('blogArticle', compact('model', 'popularArticles', 'formModel'));
		}
		
		private function getCurrentBlogArticle() {
			$cookies = Yii::$app->request->cookies;			
			return $cookies->getValue('currentBlogArticle', $this->currentBlogArticleInitialState);
		}
		
		private function setCurrentBlogArticle($id, $isViewCountIncreased) {
			$cookies = Yii::$app->response->cookies;
			$cookies->add(new \yii\web\Cookie([
				'name' => 'currentBlogArticle',
				'value' => [
					'id' => $id,
					'isViewCountIncreased' => $isViewCountIncreased
				]
			]));
		}
		
		private function clearCurrentBlogArticle() {
			$cookies = Yii::$app->response->cookies;
			$cookies->remove('currentBlogArticle');
		}
		
		private function blogViewCountUpdate($blogId) {
			if (!$blogId) {
				return;
			}
			
			$currentBlogArticle = $this->getCurrentBlogArticle();
				
			if ($currentBlogArticle['id'] == $blogId && $currentBlogArticle['isViewCountIncreased']) {
				return;
			}
			
			$this->setCurrentBlogArticle($blogId, true);
			
			$blogModel =Blog::findOne(['id' => $blogId]);			
			$blogModel['view_count'] = $blogModel['view_count'] + 1;
			$blogModel->save();
		}
	}