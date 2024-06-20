<?php
	use yii\bootstrap5\Html;
	use yii\bootstrap5\ActiveForm;
	use kartik\editors\Summernote;
	
	/*
	*	@models:	Blog, Category
	* @var:	$sortMax ( max OR null )
	*/
?>

<div>
	<?php
		$form = ActiveForm::begin();
	
		echo "<br>";
		
		$categoryList = [];
		foreach($categoryModel as $item) {
			$categoryList[$item['id']] = $item['name'];
		}
		
		echo $form
			->field($model, 'category_id')
			->dropdownList($categoryList, [
				'prompt' => 'Виберіть категорію',
				'class' => 'modal-login__form-select'],
				['options' => ['1' => ['Selected' => true]]
			])
			->label(false);
		
		echo $form->field($model, 'title')->textInput();
		
		$baseUrlImage = '../'.Yii::$app->urlManagerFrontend->baseUrl.'/uploads/blog/'.$model->image_name;
		echo $form->field($model, 'file')->fileInput();
		if (isset($model->image_name)) {
			echo "<img src='$baseUrlImage' width='200' alt='picture'>";
		}
		
		echo "<br>";
		echo "<br>";
		
		echo $form->field($model, 'text')->widget(Summernote::class, [
			'useKrajeePresets' => true,
		]);
		
		echo $form->field($model, 'created_at')->textInput();
		
		echo $form->field($model, 'view_count')->textInput();
		
		echo $form->field($model, 'sort')->textInput(['value' => $model->sort ?? $sortMax]);
		
		echo $form->field($model, 'status')->checkbox();		
		
		echo $form->field($model, 'is_popular')->checkbox();

		echo Html::submitButton('Save', ['class' => 'btn btn-success']);

		ActiveForm::end(); 
	?>
</div>