/*
* Time
*/



-------------------------------
Total: 8h + 12h + 8h Need to be payed

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
- file - 'cabinet-1.php'
- file - 'cabinet-2.php'
- file - 'cabinet-3.php'
- file - 'cabinet-4.php'
- file - 'cabinet-5.php'
- file - 'cabinet-6.php'
- file - 'cabinet-7.php'
- file - 'cabinet-8.php'
- file - 'cabinet-2-1.php'
- file - 'cabinet-2-2.php'
- file - 'cabinet-2-3.php'
- file - 'cabinet-2-4.php'
- file - 'cabinet-2-5.php'
- file - 'cabinet-2-6.php'
- file - 'cabinet-2-7.php'
- file - 'basket.php'
- file - 'catalog.php'
- file - 'catalog-2.php'
- file - 'catalog-2-list.php'
- file - 'opt.php'
- file - 'supplier.php'
- file - 'tovar.php'

/*
*	Hosted project
*/
http://mir-test1.klev.net.ua/alta_metiz

/* Figma */
https://www.figma.com/file/9EMVn8AWuMPvQWX3XkV0MZ/Alta-metiz-(final-2)?type=design&node-id=681-21946&mode=design

/* Hosting FTP */
https://oleg-test1.klev.net.ua/

91.239.233.100
olegftp@klev.net.ua
fe?4Tv~ksoN4hj

/* Data base */
'username' => 'grnweswb_oleg_dbuser',
'password' => '@NPsE0w1$uiAfg',

/*
* TO DO:
*/
- signin -> rememberMe realize

/*
* Before fill into hoisting. Change files
*/

- C:\xampp\htdocs\alta\common\config\main-local.php
- C:\xampp\htdocs\alta\frontend\config\main.php
- C:\xampp\htdocs\alta\backend\config\main.php


// CRUD video
https://www.youtube.com/watch?v=O7oEl7TUqtA

// User roles
https://www.yiiframework.com/doc/guide/2.0/en/security-authorization

// var_dump($this->getUser());


// 'blog' => 'site/blog',
							// 'price' => 'site/price',
							// 'wholesalers' => 'site/wholesalers',
							// 'delivery' => 'site/delivery',
							// 'calculator' => 'site/calculator',
							// 'contacts' => 'site/contacts',
							// 'faq' => 'site/faq',
							// 'cabinet' => 'site/cabinet',


// $legalEntity = new LegalEntity([
					// 'isLegalEntity' => $this->isLegalEntity,
					// 'companyName' => $this->companyName,
					// 'companyTypeId' => $this->companyTypeId,
					// 'companyInfo' => $this->companyInfo
				// ]);
				// $islegalEntityValid = $legalEntity->validate();
				// if ($islegalEntityValid) {
					// echo 'ok';
				// } else {
					// echo 'failure';
				// }
				
				// $this->addError('companyName', 'Incorrect name or password.');

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



<script type="text/javascript">
				var authenticationStatus = "<?= Yii::$app->session->get('authenticationStatus') ?>";
		</script>