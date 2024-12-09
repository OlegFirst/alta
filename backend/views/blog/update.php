<?php
	use yii\helpers\Html;

	$this->title = 'Update Blog: ' . $model->id;
	$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['index']];
	$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
	$this->params['breadcrumbs'][] = 'Update';
	
	$sortMax = null;
?>

<div>	
	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', compact('model', 'sortMax', 'categoryModel')) ?>
</div>