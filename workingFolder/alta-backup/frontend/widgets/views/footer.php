<footer class="footer">
	<div class="container">
		<div class="row footer__row">
			<div class="col-xl-3 col-md-4 footer-col1">
				<img src="img/footer__logo.svg" alt="" class="d-none d-lg-block footer__logo">
				<img src="img/footer__logo-mob.png" alt="" class="d-lg-none footer__logo">

				<div class="footer__cards">
					<img src="img/mastercard.png" alt="">
					<img src="img/visa.png" alt="">
					<img src="img/privat.png" alt="">
				</div>
				<div class="footer__copy">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
						<g clip-path="url(#clip0_1065_12791)">
							<path d="M1 8C1 9.85652 1.7375 11.637 3.05025 12.9497C4.36301 14.2625 6.14348 15 8 15C9.85652 15 11.637 14.2625 12.9497 12.9497C14.2625 11.637 15 9.85652 15 8C15 6.14348 14.2625 4.36301 12.9497 3.05025C11.637 1.7375 9.85652 1 8 1C6.14348 1 4.36301 1.7375 3.05025 3.05025C1.7375 4.36301 1 6.14348 1 8ZM16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C5.87827 16 3.84344 15.1571 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0C10.1217 0 12.1566 0.842855 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8ZM8.146 4.992C6.934 4.992 6.219 5.912 6.219 7.494V8.554C6.219 10.125 6.922 11.016 8.146 11.016C9.125 11.016 9.787 10.43 9.875 9.598H11.17V9.691C11.07 11.139 9.816 12.158 8.14 12.158C6.049 12.158 4.871 10.822 4.871 8.555V7.482C4.871 5.221 6.072 3.844 8.141 3.844C9.822 3.844 11.076 4.898 11.17 6.416V6.504H9.875C9.787 5.625 9.107 4.992 8.146 4.992Z" fill="#F5F5F5"/>
						</g>
						<defs>
							<clipPath id="clip0_1065_12791">
								<rect width="16" height="16" fill="white"/>
							</clipPath>
						</defs>
					</svg>
					<span>
						2023. Alta Metiz. Всі права захищені.
					</span>
				</div>


			</div>

			<div class="col-xl-footer footer-col2">
				<div class="footer__title">
					ALTA METIZ
				</div>
				
				 <ul class="footer__nav">
							<?php foreach (Yii::$app->menu->getFooterMenu() as $item): ?>
									<li class="footer__nav-li">
											<a class="footer__nav-a" href="<?= $item['url'] ?>"><?= $item['text'] ?></a>
									 </li>
							<?php endforeach; ?>
					</ul>
			</div>
			
			<div class="col-xl-footer footer-col3">
				<div class="footer__title">
					Клієнтам
				</div>
				<ul class="footer__nav">
					<li class="footer__nav-li">
						<a href="#" class="footer__nav-a">Кошик</a>
					</li>
					<li class="footer__nav-li">
						<a href="#" class="footer__nav-a">Особистий кабінет</a>
					</li>
					<li class="footer__nav-li">
						<a href="#" class="footer__nav-a">Вибрані товари</a>
					</li>
					<li class="footer__nav-li">
						<a href="#" class="footer__nav-a">Переглянуті товари</a>
					</li>
					<li class="footer__nav-li">
						<a href="#" class="footer__nav-a">Товари для порівняння</a>
					</li>
				</ul>
			</div>
			<div class="col-xl-footer footer-col4">
				<div class="footer__title">
					Контактні дані
				</div>
				<ul class="footer__nav">
					<li class="footer__nav-li">
						<a href="#" class="footer__nav-a footer__nav-a--flex">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<path d="M3.7079 8.57998C5.34014 12.1366 8.24042 14.9555 11.8408 16.4847L12.419 16.7425C13.0592 17.0278 13.7795 17.0778 14.4529 16.8837C15.1264 16.6896 15.7098 16.264 16.1003 15.6817L16.8561 14.5553C16.9744 14.3787 17.0223 14.1642 16.9903 13.9539C16.9584 13.7437 16.8489 13.5531 16.6835 13.4197L14.1228 11.3524C14.0336 11.2805 13.9308 11.2273 13.8205 11.1961C13.7103 11.1649 13.5949 11.1563 13.4813 11.1709C13.3677 11.1854 13.2581 11.2228 13.1593 11.2807C13.0605 11.3387 12.9743 11.416 12.9061 11.5081L12.1138 12.5775C10.0798 11.5723 8.43337 9.92461 7.42919 7.88921L8.49703 7.09635C8.58906 7.02809 8.66636 6.94192 8.72427 6.84302C8.78219 6.74413 8.81954 6.63454 8.83407 6.52084C8.8486 6.40714 8.84002 6.29167 8.80884 6.18137C8.77765 6.07108 8.72452 5.96822 8.65262 5.87899L6.58665 3.31666C6.45325 3.15115 6.26275 3.04163 6.05268 3.00967C5.8426 2.97771 5.62818 3.02562 5.45164 3.14396L4.31834 3.90449C3.73289 4.29733 3.30583 4.88537 3.11323 5.56385C2.92063 6.24234 2.975 6.9672 3.26665 7.60932L3.7079 8.57998Z" fill="white"/>
							</svg>
							<span>+380964722328</span>
						</a>
					</li>
				</ul>

				<div class="footer__title footer__title2">
					Графік роботи
				</div>

				<ul class="footer__nav footer__nav2">
					<li class="footer__nav-li">
						Прийом замовлень: <br>
						цілодобово без вихідних 
					</li>
					<li class="footer__nav-li">
						Обробка замовлень: <br>
						Пн-Пт 9:00-18:00
					</li>
				</ul>


			</div>
			<div class="footer-col6">
				<div class="footer__title">
					Графік роботи
				</div>

				<ul class="footer__nav">
					<li class="footer__nav-li">
						Прийом замовлень: <br>
						цілодобово без вихідних 
					</li>
					<li class="footer__nav-li">
						Обробка замовлень: <br>
						Пн-Пт 9:00-18:00
					</li>
				</ul>

				<div class="footer__cards mt-s">
					<img src="img/mastercard.png" alt="">
					<img src="img/visa.png" alt="">
					<img src="img/privat.png" alt="">
				</div>

			</div>
			<div class="col-xl-3 col-md-8 footer-col5">
				<div class="footer__title">
					Підписка на новини та акції
				</div>
				<form action="" class="footer__form">
					<input type="email" class="input__standart" placeholder="email@email.com">
					<input type="button" class="btn-general" value="Підписатися">

				</form>
			</div>

			<div class="footer-col7">
				
				<div class="footer__copy">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
						<g clip-path="url(#clip0_1065_12791)">
							<path d="M1 8C1 9.85652 1.7375 11.637 3.05025 12.9497C4.36301 14.2625 6.14348 15 8 15C9.85652 15 11.637 14.2625 12.9497 12.9497C14.2625 11.637 15 9.85652 15 8C15 6.14348 14.2625 4.36301 12.9497 3.05025C11.637 1.7375 9.85652 1 8 1C6.14348 1 4.36301 1.7375 3.05025 3.05025C1.7375 4.36301 1 6.14348 1 8ZM16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C5.87827 16 3.84344 15.1571 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0C10.1217 0 12.1566 0.842855 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8ZM8.146 4.992C6.934 4.992 6.219 5.912 6.219 7.494V8.554C6.219 10.125 6.922 11.016 8.146 11.016C9.125 11.016 9.787 10.43 9.875 9.598H11.17V9.691C11.07 11.139 9.816 12.158 8.14 12.158C6.049 12.158 4.871 10.822 4.871 8.555V7.482C4.871 5.221 6.072 3.844 8.141 3.844C9.822 3.844 11.076 4.898 11.17 6.416V6.504H9.875C9.787 5.625 9.107 4.992 8.146 4.992Z" fill="#F5F5F5"/>
						</g>
						<defs>
							<clipPath id="clip0_1065_12791">
								<rect width="16" height="16" fill="white"/>
							</clipPath>
						</defs>
					</svg>
					<span>
						2023. Alta Metiz. Всі права захищені.
					</span>
				</div>
			</div>

		</div>
	</div>
</footer>