<?php
	use yii\helpers\Html;
	use yii\grid\ActionColumn;
	use yii\grid\GridView;
	use yii\widgets\Pjax;

	$this->title = 'Блог';
	$this->params['breadcrumbs'][] = $this->title;
?>

<p>
	<?= Html::a('Створити блог', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?php
	Pjax::begin();
		echo GridView::widget([
			'dataProvider' => $dataProvider,
			'columns' => [
				'id',
				'category_id',
				'title',
				[
					'attribute' => 'file',
					'format' => 'raw',
					'value' => function($model) {
						return Html::img(
							Yii::$app->urlManagerFrontend->baseUrl.'/uploads/blog/'.$model['image_name'],
							['width' => 100, 'alt' => 'picture']
						);
					},
				],
				[
					'attribute' => 'text',
					'format' => 'raw',
					'value' => function($model) {
						return $model['text'];
					}
				],
				'created_at',
				'view_count',
				'sort',
				'status',
				'is_popular',
				[
					'class' => ActionColumn::className(),
					'template' => '{update} {delete}',
				]
			]
		]);
	Pjax::end(); 
?>