<?php
	/** @var frontend\models\SignupForm $model */
	
	use yii\bootstrap5\Html;
	use yii\bootstrap5\ActiveForm;
?>

<div class="modal modal-login" id="modal-login2" data-close="modal-login2">
    <div class="container">
        <div class="modal-content">
            <div class="modal-block">						
							 <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
									<div class="modal-login__title">
											<span class="modal-login__title-sign-up">
													Реєстрація
											</span>
											
											<a class="modal-login__sign-in modal-content__close" href="#" data-modal="modal-signin">Вже зареєструвалися?</a>
											
											<a href="#" class="modal-content__close" data-close="modal-login2">
													<svg xmlns="http://www.w3.org/2000/svg" width="26" height="28" viewBox="0 0 26 28" fill="none">
															<path d="M5.41406 22.6499L20.5799 7.16391" stroke="#676767" stroke-width="2" stroke-linecap="round"/>
															<path d="M20.5811 22.6499L5.41519 7.16391" stroke="#676767" stroke-width="2" stroke-linecap="round"/>
													</svg>
											</a>
									</div>
									
									<?php
										echo $form->field($model, 'userName')->textInput(['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'placeholder' => 'ПІБ'])->label(false);
											
										echo '</br>';
											
										echo $form->field($model, 'email', [
											'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'type' => 'email']
											])->textInput()->input('email', ['placeholder' => 'email'])->label(false);
											
										echo '</br>';	
											
										echo $form->field($model, 'phone', [
											'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'type' => 'tel']
											])->textInput()->input('phone', ['placeholder' => 'Номер телефону'])->label(false);
											
										echo '</br>';	
											
										echo $form->field($model, 'password', [
											'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'type' => 'password']
											])->textInput()->input('password', ['placeholder' => 'password'])->label(false);
											
										echo '</br>';
									?>
									
									<div class="modal-login__form-checkbox">
										<?php
											echo $form->field($model, 'isLegalEntity')->checkbox(['id' => 'checkbox-legal', 'onchange' => 'handleCheckboxChange()'])->label(false);
										?>
										
										<label for="checkbox-legal">Юридична особа</label>
									</div>
									
									</br>
									
									<div class="modal-login__form-legal" id="modal-login__form-legal">
										<?php 
											echo $form->field($model, 'companyName')->textInput(['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'placeholder' => 'Назва компанії'])->label(false);
										
											$companyIdList = ['1' => 'Тип компанії 1', '2' => 'Тип компанії 2'];
											echo $form->field($model, 'companyTypeId')->dropdownList($companyIdList, ['prompt' => 'Тип компанії', 'class' => 'modal-login__form-select'], ['options' => ['1' => ['Selected' => true]]])->label(false);
										
											echo $form->field($model, 'companyInfo')->textInput(['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'placeholder' => 'ЄДРПОУ'])->label(false);
											
											echo '</br>';
										?>
									</div>

									<script>
											handleCheckboxChange();
									
											function handleCheckboxChange() {
													var checkbox = document.getElementById("checkbox-legal");
													var formLegal = document.getElementById("modal-login__form-legal");

													if (checkbox.checked) {
															formLegal.classList.add("active");
													} else {
															formLegal.classList.remove("active");
													}
											}
									</script>

									<div class="modal-login__form-checkbox">
											<?php
													echo $form->field($model, 'privacyPolicy')->checkbox(['id' => 'checkbox3333'])->label(false);
											?>
											
											<label for="checkbox3333">
													Ознайомлений з політикою конфіденційності
											</label>
									</div>
									
									</br>
									
									<?= Html::submitButton('Зареєструватися', ['class' => 'btn-general', 'name' => 'signup-button']) ?>
									
								<?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>