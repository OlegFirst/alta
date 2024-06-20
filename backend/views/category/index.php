<?php
	use yii\helpers\Html;
	use yii\grid\ActionColumn;
	use yii\grid\GridView;
	use yii\widgets\Pjax;

	$this->title = 'Категорія';
	$this->params['breadcrumbs'][] = $this->title;
?>

<p>
	<?= Html::a('Створити категорію', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?php
	Pjax::begin();
		echo GridView::widget([
			'dataProvider' => $dataProvider,
			'columns' => [
				'id',
				'name',
				[
					'class' => ActionColumn::className(),
					'template' => '{update} {delete}',
				]
			]
		]);
	Pjax::end(); 
?>