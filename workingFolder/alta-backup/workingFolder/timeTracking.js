/*
* Time
*/

8.52-11.29
12.09-14.32
14.45-15.10
15.34-17.00

6.40-11.00

17.50-19.16

5.20-


-------------------------------
Total: 7h

/*
* Layout files/folder are used:
*/
- folder 'css'
- folder 'js'
- folder 'libs' - is EMPTY
- folder 'images'
- folder - 'img'
- file - 'header.php'
- file - 'footer.php'
- file - 'about.php'
- file - 'main.php'
- folder - '_blocks'
- file - 'blog.php'
- file - 'price.php'
- file - 'calculator.php'
- file - 'contacts.php'
- file - 'faq.php'
- file - 'delivery.php'
- file - 'opt.php'


// CRUD video
https://www.youtube.com/watch?v=O7oEl7TUqtA


<?php
										echo $form->field($model, 'userName', [
											'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'modal-login__form-input', 'type' => 'text']
											])->textInput()->input('userName', ['placeholder' => 'ПІБ'])->label(false);
											
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
											echo $form->field($model, 'isLegalEntity', [
												'inputOptions' => ['autofocus' => 'autofocus', 'id' => 'checkbox-legal', 'type' => 'checkbox', 'onchange' => 'handleCheckboxChange()']
												])->textInput()->input('isLegalEntity', ['placeholder' => ''])->label(false);
										?>									
									
											
											
											<label for="checkbox-legal">
													Юридична особа
											</label>
									</div>


<?= Html::textInput('phone', '', array(
										'class' => 'modal-login__form-input', 'type' => 'tel', 'placeholder' => 'Номер телефону'
									)) ?>
									
									<?= Html::textInput('email', '', array(
										'class' => 'modal-login__form-input', 'type' => 'email', 'placeholder' => 'email'
									)) ?>
									
									<?= Html::textInput('password', '', array(
										'class' => 'modal-login__form-input', 'type' => 'text', 'placeholder' => 'password'
									)) ?>
									
									
									
									<div class="modal-login__form-checkbox">
										<?php
											echo $form->field($model, 'isLegalEntity', [
												'inputOptions' => ['autofocus' => 'autofocus', 'id' => 'checkbox-legal', 'type' => 'checkbox', 'onchange' => 'handleCheckboxChange()']
												])->textInput()->input('isLegalEntity')->label(false);
										?>	
									
										<input type="checkbox" id="checkbox-legal" name="isLegalEntity" onchange="handleCheckboxChange()">
										
										<label for="checkbox-legal">
												Юридична особа
										</label>
									</div>
									
									echo $form->field($model, 'isLegalEntity', [
												'inputOptions' => ['autofocus' => 'autofocus', 'id' => 'checkbox-legal', 'type' => 'checkbox', 'onchange' => 'handleCheckboxChange()']
												])->checkbox()->label(false);
												
												
												
											
											<select name="companyTypeId" id="" class="modal-login__form-select">
													<option value="" disabled selected>Тип компанії</option>
													<option value="">Тип компанії 1</option>
													<option value="">Тип компанії 2</option>
											</select>
									
									
									
									
									
									echo $form->field($model, 'isLegalEntity', [
												'inputOptions' => ['autofocus' => 'autofocus', 'id' => 'checkbox-legal', 'type' => 'checkbox', 'onchange' => 'handleCheckboxChange()']
												])->textInput()->input('isLegalEntity')->label(false);
												
												
												------------------------
												
												
												use app\models\ProductCategory;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\Product */

echo $form->field($model, 'product_category')->dropdownList(
    ProductCategory::find()->select(['category_name', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Category']
);