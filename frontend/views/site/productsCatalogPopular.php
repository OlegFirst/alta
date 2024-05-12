<?php
	$this->title = 'Популярні товари';
?>

<section class="p-catalog pt-s pb-m">
	<div class="container">
		<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
							<li class="breadcrumb-item">
									<a href="#">
											<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
													<path d="M11.9284 1.14779C11.8042 1.05201 11.6512 1 11.4937 1C11.3362 1 11.1832 1.05201 11.059 1.14779L1 8.90526L1.8701 9.99359L3.1 9.04511V17.6154C3.10074 17.9824 3.24848 18.3341 3.51087 18.5936C3.77326 18.8532 4.12892 18.9993 4.5 19H18.5C18.8711 18.9993 19.2267 18.8532 19.4891 18.5936C19.7515 18.3341 19.8993 17.9824 19.9 17.6154V9.05134L21.1299 9.99982L22 8.91149L11.9284 1.14779ZM12.9 17.6154H10.1V12.0768H12.9V17.6154ZM14.3 17.6154V12.0768C14.2996 11.7097 14.152 11.3577 13.8895 11.0981C13.6271 10.8385 13.2712 10.6925 12.9 10.6921H10.1C9.72881 10.6925 9.37293 10.8385 9.11046 11.0981C8.84799 11.3577 8.70037 11.7097 8.7 12.0768V17.6154H4.5V7.96578L11.5 2.57259L18.5 7.9727V17.6154H14.3Z"
													fill="#12203A"/>
											</svg>
									</a>
							</li>
							<li class="breadcrumb-item" aria-current="page">
									<a href="<?= Yii::$app->menu->get('productsCatalog')['url'] ?>">
											 Каталог товарів
									</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">
									Болти
							</li>
					</ol>
			</nav>

		<div class="row">
			<div class="col-xl-3">
				<div class="category-filter" id="category-filter">
					<div class="category-filter__name">
						<div class="category-filter__name-text">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
								<path d="M14.6247 12.4987V20.8154C14.6672 21.132 14.561 21.4697 14.3166 21.6914C14.2183 21.7892 14.1016 21.8668 13.9731 21.9198C13.8446 21.9727 13.7068 22 13.5677 22C13.4285 22 13.2908 21.9727 13.1622 21.9198C13.0337 21.8668 12.917 21.7892 12.8187 21.6914L10.6834 19.57C10.5675 19.4574 10.4794 19.3198 10.426 19.1679C10.3725 19.0159 10.3552 18.8537 10.3753 18.694V12.4987H10.3434L4.22427 4.70977C4.05175 4.48975 3.97391 4.21083 4.00775 3.93397C4.04159 3.6571 4.18436 3.4048 4.40487 3.23219C4.60672 3.08443 4.82981 3 5.06353 3H19.9365C20.1702 3 20.3933 3.08443 20.5951 3.23219C20.8156 3.4048 20.9584 3.6571 20.9922 3.93397C21.0261 4.21083 20.9482 4.48975 20.7757 4.70977L14.6566 12.4987H14.6247Z" fill="#F79E1B"/>
							</svg>
							<span>Фільтр</span>
						</div>
						<div class="category-filter__close" onclick="filterToggle()">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd"
								d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L8 6.58579L14.2929 0.292893C14.6834 -0.0976311 15.3166 -0.0976311 15.7071 0.292893C16.0976 0.683417 16.0976 1.31658 15.7071 1.70711L9.41421 8L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L8 9.41421L1.70711 15.7071C1.31658 16.0976 0.683417 16.0976 0.292893 15.7071C-0.0976311 15.3166 -0.0976311 14.6834 0.292893 14.2929L6.58579 8L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z"
								fill="#C9C9C9"/>
							</svg>
						</div>
					</div>

					<div class="category-filter__scroll">
						<div class="category-filter__block category-filter__block--binare">
							<input type="checkbox" id="checkbox1">

							<label for="checkbox1">
								Тільки товари
								за знижкою
							</label>
						</div>
						<div class="category-filter__block category-filter__block--binare">
							<input type="checkbox" id="checkbox2">

							<label for="checkbox2">
								Уцінені товари
							</label>
						</div>
						<div class="category-filter__block category-filter__block--checkbox">
							<div class="category-filter__checkbox-text">
								Стандарти
							</div>

							<div class="js-more__wrap" data-more-text-inactive="Сховати" data-more-text-active="Показати більше" data-max-height="85">
								<div class="js-more__block category-filter__checkbox-input__block2">
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 933
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 931
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 933
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 933
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 933
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 931
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 933
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 931
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 933
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 931
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 933
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											DIN 931
										</label>
										<div class="category-filter__checkbox-question"></div>
									</div>
								</div>
							</div>

						</div>
						<div class="category-filter__block category-filter__block--checkbox">
							<div class="category-filter__checkbox-text">
								Країна виробник
							</div>

							<div class="js-more__wrap" data-more-text-inactive="Сховати" data-more-text-active="Показати більше" data-max-height="90">
								<div class="js-more__block category-filter__checkbox-input__block1">
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											Польща
										</label>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											Україна
										</label>
									</div>

								</div>
							</div>
						</div>
						<div class="category-filter__block category-filter__block--checkbox">
							<div class="category-filter__checkbox-text">
								Головка
							</div>

							<div class="js-more__wrap" data-more-text-inactive="Сховати" data-more-text-active="Показати більше" data-max-height="90">
								<div class="js-more__block category-filter__checkbox-input__block1">
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											Т-подібна
										</label>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											кільце
										</label>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											напівкругла
										</label>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											напівкругла збільшена
										</label>
									</div>

								</div>
							</div>
						</div>
						<div class="category-filter__block category-filter__block--checkbox">
							<div class="category-filter__checkbox-text">
								Призначення
							</div>

							<div class="js-more__wrap" data-more-text-inactive="Сховати" data-more-text-active="Показати більше" data-max-height="90">
								<div class="js-more__block category-filter__checkbox-input__block1">
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											для авторемонту
										</label>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											для водного транспорту
										</label>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											для машинобудування
										</label>
									</div>
									<div class="category-filter__checkbox-input">
										<input type="checkbox" id="checkbox3">
										<label for="checkbox3">
											Т-подібна
										</label>
									</div>

								</div>
							</div>
						</div>

						<div class="category-filter__btn">
							<a href="#" class="btn-general">Показати</a>
							<a href="" class="category-filter__del">Очистити фільтри</a>
						</div>

					</div>


				</div>

			</div>
			<div class="col-xl-9">
				<h1 class="h1-title h1-title--slider">Популярні товари</h1>
				<div class="splide recomendation-slider mb-m" aria-label="">
					<div class="h1-title__slider-progress">
						<div class="h1-title__slider-progress-bar"></div>
					</div>
					<div class="splide__track">
						<ul class="splide__list">

							<?php for ($i = 0; $i < 7; $i++) { ?>
								<li class="splide__slide">
									<?php include '_blocks/good-mini.php'; ?>
								</li>
							<?php } ?>

						</ul>
					</div>
				</div>
				<script>
					var mainSlider = new Splide('.recomendation-slider', {
						perPage: 3,
						perMove: 1,
						gap: 30,
						pagination: false,
						breakpoints: {
							1260: {
								perPage: 3,
								gap: 20,
							},
							768: {
								autoWidth: true,
								perPage: false,
							}
						}
					});
					var bar = mainSlider.root.querySelector( '.h1-title__slider-progress-bar' );
					mainSlider.on( 'mounted move', function () {
						var end  = mainSlider.Components.Controller.getEnd() + 1;
						var rate = Math.min( ( mainSlider.index + 1 ) / end, 1 );
						bar.style.width = String( 100 * rate ) + '%';
					} );
					mainSlider.mount();
				</script>

				<div class="h1-title mb-s">
					Усі болти
				</div>

				<a href="#" class="filter-btn-mob" id="filter-btn-mob">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
						<path d="M14.6247 12.4987V20.8154C14.6672 21.132 14.561 21.4697 14.3166 21.6914C14.2183 21.7892 14.1016 21.8668 13.9731 21.9198C13.8446 21.9727 13.7068 22 13.5677 22C13.4285 22 13.2908 21.9727 13.1622 21.9198C13.0337 21.8668 12.917 21.7892 12.8187 21.6914L10.6834 19.57C10.5675 19.4574 10.4794 19.3198 10.426 19.1679C10.3725 19.0159 10.3552 18.8537 10.3753 18.694V12.4987H10.3434L4.22427 4.70977C4.05175 4.48975 3.97391 4.21083 4.00775 3.93397C4.04159 3.6571 4.18436 3.4048 4.40487 3.23219C4.60672 3.08443 4.82981 3 5.06353 3H19.9365C20.1702 3 20.3933 3.08443 20.5951 3.23219C20.8156 3.4048 20.9584 3.6571 20.9922 3.93397C21.0261 4.21083 20.9482 4.48975 20.7757 4.70977L14.6566 12.4987H14.6247Z"
						fill="white"/>
					</svg>
					<span>Фільтр</span>
				</a>

				<div class="line-filter mb-s">
					<div class="line-filter__top">
						<div class="line-filter__top-text">
							Вибрані фільтри
						</div>
						<select name="" id="" class="line-filter__top-select">
							<option value="За рейтингом">За рейтингом</option>
							<option value="За популяністю">За популяністю</option>
							<option value="За рейтингом">За рейтингом</option>
							<option value="За популяністю">За популяністю</option>
						</select>
						<div class="line-filter__top-type">
							<a href="catalog-2-list.php" class="line-filter__top-type-a">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd"
									d="M0 6C0 6.55228 0.447715 7 1 7H6C6.55228 7 7 6.55228 7 6V1C7 0.447715 6.55228 0 6 0H1C0.447715 0 0 0.447715 0 1V6ZM9 23C9 23.5523 9.44772 24 10 24H23C23.5523 24 24 23.5523 24 23V18C24 17.4477 23.5523 17 23 17H10C9.44771 17 9 17.4477 9 18V23ZM0 23C0 23.5523 0.447715 24 1 24H6C6.55228 24 7 23.5523 7 23V18C7 17.4477 6.55228 17 6 17H1C0.447715 17 0 17.4477 0 18V23ZM0 15C0 15.5523 0.447715 16 1 16H6C6.55228 16 7 15.5523 7 15V9.99999C7 9.44771 6.55228 8.99999 6 8.99999H1C0.447715 8.99999 0 9.44771 0 9.99999V15ZM9 15C9 15.5523 9.44772 16 10 16H23C23.5523 16 24 15.5523 24 15V9.99999C24 9.44771 23.5523 8.99999 23 8.99999H10C9.44771 8.99999 9 9.44771 9 9.99999V15ZM9 6C9 6.55228 9.44772 7 10 7H23C23.5523 7 24 6.55228 24 6V1C24 0.447715 23.5523 0 23 0H10C9.44771 0 9 0.447715 9 1V6Z"
									fill="#00215D"/>
								</svg>
							</a>

							<a href="#" class="line-filter__top-type-a active">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd"
									d="M0 6C0 6.55228 0.447715 7 1 7H6C6.55228 7 7 6.55228 7 6V1C7 0.447715 6.55228 0 6 0H1C0.447715 0 0 0.447715 0 1V6ZM9 23C9 23.5523 9.44772 24 10 24H15C15.5523 24 16 23.5523 16 23V18C16 17.4477 15.5523 17 15 17H10C9.44771 17 9 17.4477 9 18V23ZM0 23C0 23.5523 0.447715 24 1 24H6C6.55228 24 7 23.5523 7 23V18C7 17.4477 6.55228 17 6 17H1C0.447715 17 0 17.4477 0 18V23ZM0 15C0 15.5523 0.447715 16 1 16H6C6.55228 16 7 15.5523 7 15V10C7 9.44771 6.55228 9 6 9H1C0.447715 9 0 9.44772 0 10V15ZM9 15C9 15.5523 9.44772 16 10 16H15C15.5523 16 16 15.5523 16 15V10C16 9.44771 15.5523 9 15 9H10C9.44771 9 9 9.44772 9 10V15ZM18 0C17.4477 0 17 0.447715 17 1V6C17 6.55228 17.4477 7 18 7H23C23.5523 7 24 6.55228 24 6V1C24 0.447715 23.5523 0 23 0H18ZM9 6C9 6.55228 9.44772 7 10 7H15C15.5523 7 16 6.55228 16 6V1C16 0.447715 15.5523 0 15 0H10C9.44771 0 9 0.447715 9 1V6ZM17 15C17 15.5523 17.4477 16 18 16H23C23.5523 16 24 15.5523 24 15V10C24 9.44771 23.5523 9 23 9H18C17.4477 9 17 9.44772 17 10V15ZM17 23C17 23.5523 17.4477 24 18 24H23C23.5523 24 24 23.5523 24 23V18C24 17.4477 23.5523 17 23 17H18C17.4477 17 17 17.4477 17 18V23Z"
									fill="#00215D"/>
								</svg>
							</a>
						</div>
						<a href="#" class="line-filter__top-exel"></a>

					</div>
					<div class="line-filter__bottom">
						<div class="line-filter__bottom-text">
							Вибрані фільтри
						</div>
						<a href="#" class="line-filter__bottom-tag">
							Стандарти: DIN 933
						</a>
						<a href="#" class="line-filter__bottom-tag">
							Головка: кільце
						</a>
						<a href="#" class="line-filter__bottom-tag deactive">
							Скинути всі фільтри
						</a>
					</div>

				</div>

				<div class="category-list__wrap mb-s">


					<?php for ($i = 0; $i < 12; $i++) { ?>
						<?php include '_blocks/good-block.php'; ?>
					<?php } ?>



				</div>

				<ul class="pagination">
					<li class="pagination-item">
						<a class="pagination-link" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
								<path d="M5.1417 7.84268L10.2333 12.8693C10.3183 12.9532 10.4311 13 10.5485 13C10.6659 13 10.7788 12.9532 10.8637 12.8693L10.8692 12.8636C10.9105 12.8229 10.9434 12.774 10.9659 12.7197C10.9884 12.6654 11 12.607 11 12.5479C11 12.4888 10.9884 12.4304 10.9659 12.3761C10.9434 12.3218 10.9105 12.2729 10.8692 12.2322L6.07451 7.49905L10.8692 2.76781C10.9105 2.72713 10.9434 2.67816 10.9659 2.62389C10.9884 2.56962 11 2.51117 11 2.45211C11 2.39304 10.9884 2.3346 10.9659 2.28032C10.9434 2.22605 10.9105 2.17709 10.8692 2.13641L10.8637 2.13073C10.7788 2.04681 10.6659 2 10.5485 2C10.4311 2 10.3183 2.04681 10.2333 2.13073L5.1417 7.15732C5.09692 7.20153 5.06128 7.25469 5.03692 7.3136C5.01256 7.3725 5 7.43592 5 7.5C5 7.56408 5.01256 7.6275 5.03692 7.6864C5.06128 7.74531 5.09692 7.79848 5.1417 7.84268Z"
								fill="#12203A"/>
							</svg>
						</a>
					</li>
					<li class="pagination-item">
						<a class="pagination-link" href="#">
							<span>1</span>
						</a>
					</li>
					<li class="pagination-item active">
						<a class="pagination-link" href="#">
							<span>2</span>
						</a>
					</li>
					<li class="pagination-item">
						<a class="pagination-link" href="#">
							<span>3</span>
						</a>
					</li>
					<li class="pagination-item">
						<span>...</span>
					</li>

					<li class="pagination-item">
						<a class="pagination-link" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
								<path d="M9.8583 7.15732L4.76669 2.13072C4.68173 2.04681 4.56886 2 4.45149 2C4.33412 2 4.22125 2.04681 4.13629 2.13072L4.13081 2.1364C4.08948 2.17708 4.05657 2.22605 4.03408 2.28032C4.0116 2.3346 4 2.39304 4 2.4521C4 2.51117 4.0116 2.56961 4.03408 2.62389C4.05657 2.67816 4.08948 2.72713 4.13081 2.76781L8.92549 7.50095L4.13081 12.2322C4.08948 12.2729 4.05657 12.3218 4.03408 12.3761C4.0116 12.4304 4 12.4888 4 12.5479C4 12.607 4.0116 12.6654 4.03408 12.7197C4.05657 12.7739 4.08948 12.8229 4.13081 12.8636L4.13629 12.8693C4.22125 12.9532 4.33411 13 4.45149 13C4.56886 13 4.68173 12.9532 4.76669 12.8693L9.8583 7.84268C9.90308 7.79847 9.93872 7.74531 9.96308 7.6864C9.98744 7.6275 10 7.56408 10 7.5C10 7.43592 9.98744 7.3725 9.96308 7.3136C9.93872 7.25469 9.90308 7.20152 9.8583 7.15732Z"
								fill="#12203A"/>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>