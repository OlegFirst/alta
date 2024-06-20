<?php
	use yii\bootstrap5\Html;
	use yii\bootstrap5\ActiveForm;
	use kartik\editors\Summernote;
?>

<div>
	<?php
		$form = ActiveForm::begin();
	
		echo "<br>";
		
		echo $form->field($model, 'name')->textInput();

		echo Html::submitButton('Save', ['class' => 'btn btn-success']);

		ActiveForm::end(); 
	?>
</div>