<?php
	use yii\bootstrap5\ActiveForm;
	use yii\bootstrap5\Html;

	$this->title = 'Sign in';
?>
<div class="site-login">
    <div class="mt-5 offset-lg-3">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Будь ласка, заповніть наступні поля для входу:</p>

        <?php 
					$form = ActiveForm::begin(['id' => 'signin-form']); 
						echo $form->field($model, 'userName')->textInput(['autofocus' => true, 'value' => 'admin'])->label(false);
							
						echo '</br>';
						
						echo $form->field($model, 'password')->passwordInput(['value' => 'adminpassword'])->label(false);
							
						echo '</br>';
						
						echo Html::submitButton('Увійти', ['class' => 'btn btn-primary btn-block', 'name' => 'signin-button']);
						
					ActiveForm::end(); 
				?>
    </div>
</div>
