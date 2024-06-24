<?php

	/** @var \yii\web\View $this */
	/** @var string $content */

	use common\widgets\Alert;
	use frontend\assets\AppAsset;
	use frontend\widgets\Header;
	use frontend\widgets\Signup;
	use frontend\widgets\Signin;
	use frontend\widgets\Footer;
	
	use yii\bootstrap5\Html;


	AppAsset::register($this);
	
	$this->registerCsrfMetaTags();
	$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
	$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
	$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>" class="h-100">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php $this->registerCsrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
		<?php $this->head() ?>
	</head>
	<body>
	<?php $this->beginBody() ?>
	
	<?= Header::widget() ?>
	
	<?= Signup::widget() ?>
	
	<?= Signin::widget() ?>

	<main>
		<?= $content ?>
	</main>
	
	<?= Footer::widget() ?>

	<?php $this->endBody() ?>
	</body>
	</html>
<?php $this->endPage();