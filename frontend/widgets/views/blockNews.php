<?php 
	use yii\bootstrap5\ActiveForm;
	$form = ActiveForm::begin(
		$activeFormAttributes ?? []
	); 
?>

	<button class="block-news__wrapper" type="submit">
		<div class="block-news">
			<div class="block-news__img">
				<div class="block-news__tag">
					<?= $model['label'] ?>
				</div>
				<img src="<?= 'uploads/blog/'.$model['image_name'] ?>" alt="picture">
			</div>
			
			<div class='block-news__title'><?= $model['title'] ?></div>

			<?php
				if ($isTextShow) {
						echo "<div class='block-news__text'>".$model['text']."</div>";
				}
			?>

			<div class="block-news__info">
				<div class="block-news__info-date"><?= $model['created_at'] ?></div>
				<div class="block-news__info-views"><?= $model['view_count'] ?></div>
			</div>
		</div>

		<?= $form->field($formModel, 'id')->hiddenInput(['value' => $model['id']])->label(false) ?>
	</button>

<?php ActiveForm::end(); ?>