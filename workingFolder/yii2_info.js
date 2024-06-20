// CRUD video
https://www.youtube.com/watch?v=O7oEl7TUqtA

// User roles
https://www.yiiframework.com/doc/guide/2.0/en/security-authorization

//
// $this->goHome();
//
public function actionLogin()
{
		if (!Yii::$app->user->isGuest) {
				return $this->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
				return $this->goBack();
		}

		$this->layout = 'blank';

		$model->password = '';
		return $this->render('login', [
				'model' => $model,
		]);
}

//
// throw new NotFoundHttpException('Page not found.');
//
class PageController extends Controller
{
    public function actionIndex($url)
    {
        $model = Page::findOne(['url' => $url, 'status' => 1]);
        if (!$model)
            throw new NotFoundHttpException('Page not found.');

        return $this->render('index', compact('model'));
    }
}

//
// return $this->redirect(['index']);
//


//
// You could use the remember() & previous() methods in yii\helpers\BaseUrl.
//
function actionScanCard()
{
    ...
    \yii\helpers\Url::remember();
    $this->redirect('/transaction/redeem');
    ...
}

in TransactionController (or other)

function actionRedeem()
{
    $url = \yii\helpers\Url::previous();
    if($url === Url::to('card/scan-card')) {
  
    } else{}
}

//
// Create unique ID
//
Html:: ... $this->getId()

//
// Yii2 + Vue.js
//
https://www.youtube.com/watch?v=fbnSR-KBOiE

//
//
//
<?= $form->field($formModel, 'id')->hiddenInput(['value' => $item['id']])->label(false) ?>

yii\helpers\HtmlPurifier.

//
// VIDGET with properties
//
<?= 
	VueWidget::widget([
		'one' => 'text'
	])
?>

//
// Queries_(start)
//

// ... LEFT JOIN `post` ON `post`.`user_id` = `user`.`id`
$query->join('LEFT JOIN', 'post', 'post.user_id = user.id');

SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;

$model = $query
			->from('blog')
			->innerJoin('category', 'blog.category_id = category.id')
			->all();

//
$this->findModel($id)->delete();

//
$model = Page::findOne(['url' => $url, 'status' => 1]);

$works = Work::find()->where(['status' => 1])->orderBy('sort')->all();
        $logosTop = Logo::find()->where(['display' => 1])->orWhere(['display' => 3])->orderBy('sort')->all();
        $logosBottom = Logo::find()->where(['display' => 2])->orWhere(['display' => 3])->orderBy('sort')->all();
        $vacancies = Vacancy::find()->where(['status' => 1])->orderBy('sort')->all();
        $networks = Network::find()->where(['status' => 1])->orderBy('sort')->all();

        return $this->render('index', compact('works', 'logosTop', 'logosBottom', 'vacancies', 'networks'));

//
$dataProvider = new ActiveDataProvider([
			'query' => Blog::find()->innerJoin('category', 'blog.category_id = category.id')
		]);

//
// Queries_(end)
//