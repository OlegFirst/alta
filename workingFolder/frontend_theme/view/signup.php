<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
		
		
</div>

<input type="text" class="modal-login__form-input" placeholder="ПІБ">
                    <input type="tel" class="modal-login__form-input" placeholder="Номер телефону">
                    <input type="email" class="modal-login__form-input" placeholder="Email">


                    <div class="modal-login__form-checkbox">
                        <input type="checkbox" id="checkbox-legal" onchange="handleCheckboxChange()">
                        <label for="checkbox-legal">
                            Юридична особа
                        </label>
                    </div>

                    <div class="modal-login__form-legal" id="modal-login__form-legal">
                        <input type="text" class="modal-login__form-input" placeholder="Назва компанії">
                        <select name="" id="" class="modal-login__form-select">
                            <option value="" disabled selected>Тип компанії</option>
                            <option value="">Тип компанії 1</option>
                            <option value="">Тип компанії 2</option>
                        </select>
                        <input type="text" class="modal-login__form-input" placeholder="ЄДРПОУ">
                    </div>
