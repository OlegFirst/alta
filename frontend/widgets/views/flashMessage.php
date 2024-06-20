<?php if (Yii::$app->session->hasFlash('flashMessage', null, true)): ?>
	<div class='flash-message'>
		<div class='flash-message__content'>
			<?php
				echo Yii::$app->session->getFlash('flashMessage');
			
				// echo var_dump(Yii::$app->session->getFlash('flashMessage'));
			?>
		</div>
	</div>
<?php endif; ?>