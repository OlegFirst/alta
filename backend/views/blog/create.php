<?php
use yii\helpers\Html;

$this->title = 'Створити блог';
$this->params['breadcrumbs'][] = ['label' => 'Блог', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', compact('model', 'sortMax', 'categoryModel')) ?>
</div>