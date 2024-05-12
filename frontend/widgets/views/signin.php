<?php
	use yii\bootstrap5\Html;
	use yii\bootstrap5\ActiveForm;
?>

<div class="modal modal-login" id="modal-signin" data-close="modal-signin">
    <div class="container">
        <div class="modal-content">
            <div class="modal-block">
									<?php $form = ActiveForm::begin(['id' => 'form-signin']); ?>
											<div class="modal-login__title">
													<span>
															Увійти
													</span>
													
													<a href="#" class="modal-content__close" data-close="modal-signin">
															<svg xmlns="http://www.w3.org/2000/svg" width="26" height="28" viewBox="0 0 26 28" fill="none">
																	<path d="M5.41406 22.6499L20.5799 7.16391" stroke="#676767" stroke-width="2" stroke-linecap="round"/>
																	<path d="M20.5811 22.6499L5.41519 7.16391" stroke="#676767" stroke-width="2" stroke-linecap="round"/>
															</svg>
													</a>
											</div>
											
											<?php
												echo $form->field($model, 'email', [
													'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'type' => 'email']
													])->textInput()->input('email', ['placeholder' => 'email'])->label(false);
													
												echo '</br>';
												
												echo $form->field($model, 'password', [
													'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'type' => 'password']
													])->textInput()->input('password', ['placeholder' => 'password'])->label(false);
													
												echo '</br>';
											?>
												
											<div class="modal-login__form-checkbox" style='display: none;'>
												<?php
													// echo $form->field($model, 'rememberMe')->checkbox(['id' => 'checkbox-remember-me'])->label(false);
												?>
												
												<label for="checkbox-remember-me">Запам`ятати</label>
											</div>
											
											<?php
												echo '</br>';
												
												echo '</br>';
											?>
											
											<?= Html::submitButton('Увійти', ['class' => 'btn-general', 'name' => 'signin-button']) ?>
									
								<?php ActiveForm::end(); ?>
						</div>
        </div>
    </div>
</div>