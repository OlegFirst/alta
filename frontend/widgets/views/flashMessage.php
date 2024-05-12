<?php if (Yii::$app->session->hasFlash('flashMessage', null, true)): ?>
	<div class='flash-message'>
		<div class='flash-message__content'>
			<?= Yii::$app->session->getFlash('flashMessage') ?>
		</div>
	</div>
<?php endif; ?>