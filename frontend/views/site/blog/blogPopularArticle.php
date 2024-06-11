<div class='popular-article'>
	<div class='popular-article__top'>
		<h2 class='popular-article__top-title'>Популярні статті</h2>
		
		<div class='popular-article__top-buttons'>
			<img
				class='popular-article__top-buttons-left'
				src="img/button-arrow-left.png"
				width='36'
				height='36'
				alt="left"
			>
			
			<img
				class='popular-article__top-buttons-right'
				src="img/button-arrow-left.png"
				width='36'
				height='36'
				alt="right"
			>
		</div>
	</div>
	
	<div class='popular-article__progress-line'>
		<div class='popular-article__progress-line-active'></div>
	</div>

	<div class="row">
		<?php for ($i = 0; $i < 4; $i++) { ?>
			<div class="col-xl-3 col-lg-4 col-sm-6 s-catalog__mt">
				<div class="block-news">
					<a href="<?= Yii::$app->menu->get('blogArticle')['url'] ?>" class="block-news__img">
						<div class="block-news__tag">
								Саморізи
						</div>
						<img src="uploads/recomendation-slider__bolt.jpg" alt="">
					</a>

					<a href="" class="block-news__title">
						Як вибрати якісний саморіз для своїх потреб
					</a>
					
					<a href="<?= Yii::$app->menu->get('blogArticle')['url'] ?>">
						<div class="block-news__text">
							Розрізняють два основних види 
							саморізів: cаморізи по дереву і  по металу.Якщо вам необхідно 
							прикріпити металочерепицю до ...
						</div>
					</a>
					
					<a href="<?= Yii::$app->menu->get('blogArticle')['url'] ?>">
						<div class="block-news__info">
							<div class="block-news__info-date">24.02.2023</div>
							<div class="block-news__info-views">2567</div>
						</div>
					</a>
				</div>
			</div>
		<?php } ?>
	</div>
</div>