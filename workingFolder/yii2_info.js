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