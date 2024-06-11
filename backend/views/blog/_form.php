<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use kartik\editors\Summernote;
?>

<div>
	<?php
		$form = ActiveForm::begin();
	
		echo $form->field($model, 'label')->textInput();
		
		echo $form->field($model, 'title')->textInput();
		
		$baseUrlImage = Yii::$app->urlManagerFrontend->baseUrl.'/uploads/blog/'.$model->image_name;				
		if (file_exists($baseUrlImage)) {
			echo Html::img($baseUrlImage, ['width' => 200]);
		}
		echo $form->field($model, 'file')->fileInput();
		
		echo $form->field($model, 'text')->widget(Summernote::class, [
			'useKrajeePresets' => true,
		]);
		
		echo $form->field($model, 'created_at')->textInput();
		
		echo $form->field($model, 'view_count')->textInput();
		
		echo $form->field($model, 'sort')->textInput();
		
		echo $form->field($model, 'status')->checkbox();		

		echo Html::submitButton('Save', ['class' => 'btn btn-success']);

		ActiveForm::end(); 
	?>
</div>