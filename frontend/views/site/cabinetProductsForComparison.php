<?php	
	include '_blocks/cabinet-menu.php';

	$this->title = 'Товари для порівняння';
	$cabinetMenuView = new CabinetMenuView('productsForComparison');
?>

<div class="cabinet-offcanvas">
    <button class="cabinet-offcanvas__close" id="cabinet-offcanvas__close"></button>

    <?php $cabinetMenuView->run(); ?>
</div>

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
										<a href="<?= Yii::$app->cabinetMenu->get('myCabinet')['url'] ?>">
												Особистий кабінет
										</a>
                </li>
								<li class="breadcrumb-item active" aria-current="page">
										Товари для порівняння
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-xl-3 d-none d-xl-block">
                <?php $cabinetMenuView->run(); ?>
            </div>
            <div class="col-xl-9 position-relative">
                <div class="d-flex">
                    <a href="#" class="profile-title cabinet-offcanvas__open">
                        <img src="img/profile-miniblock6.png" alt="">
                        <span>Товари для порівняння</span>
                    </a>
                </div>

                <div class="profile-filter">

                    <div class="profile-filter__top">

                        <div class="profile-filter__top-text">
                            Список порівняння:
                        </div>
                        <select name="" id="" class="profile-filter__top-select">
                            <option value="За рейтингом">За рейтингом</option>
                            <option value="За популяністю">За популяністю</option>
                            <option value="За рейтингом">За рейтингом</option>
                            <option value="За популяністю">За популяністю</option>
                        </select>
                    </div>

                    <div class="btn-general">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path d="M7 13L7 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <path d="M13 7L1 7" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span>Додати товар</span>
                    </div>

                    <a href="#" class="profile-filter__del">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M9.4 1.08889V1.86667H12.55C12.6693 1.86667 12.7838 1.91583 12.8682 2.00335C12.9526 2.09087 13 2.20957 13 2.33333C13 2.4571 12.9526 2.5758 12.8682 2.66332C12.7838 2.75083 12.6693 2.8 12.55 2.8H1.45C1.33065 2.8 1.21619 2.75083 1.1318 2.66332C1.04741 2.5758 1 2.4571 1 2.33333C1 2.20957 1.04741 2.09087 1.1318 2.00335C1.21619 1.91583 1.33065 1.86667 1.45 1.86667H4.6V1.08889C4.6 0.487822 5.0704 0 5.65 0H8.35C8.9296 0 9.4 0.487822 9.4 1.08889ZM5.5 1.08889V1.86667H8.5V1.08889C8.5 1.04763 8.4842 1.00807 8.45607 0.978895C8.42794 0.949722 8.38978 0.933333 8.35 0.933333H5.65C5.61022 0.933333 5.57206 0.949722 5.54393 0.978895C5.5158 1.00807 5.5 1.04763 5.5 1.08889ZM2.7982 3.84409C2.79307 3.78265 2.77625 3.72288 2.74871 3.66822C2.72117 3.61357 2.68346 3.56511 2.63775 3.52566C2.59205 3.48621 2.53925 3.45655 2.48243 3.43839C2.4256 3.42022 2.36587 3.41392 2.30668 3.41984C2.24749 3.42576 2.19001 3.44379 2.13758 3.47288C2.08515 3.50197 2.0388 3.54155 2.00121 3.58933C1.96361 3.63711 1.93553 3.69215 1.91857 3.75126C1.90161 3.81036 1.89611 3.87237 1.9024 3.93369L2.7496 13.0169C2.77494 13.2861 2.896 13.5359 3.08922 13.7177C3.28243 13.8994 3.53395 14 3.7948 14H10.2052C10.4661 14 10.7177 13.8993 10.911 13.7174C11.1042 13.5356 11.2252 13.2856 11.2504 13.0163L12.0982 3.93369C12.1097 3.81042 12.0734 3.68747 11.9975 3.5919C11.9215 3.49634 11.8121 3.43597 11.6932 3.42409C11.5743 3.41221 11.4558 3.44978 11.3636 3.52855C11.2715 3.60731 11.2133 3.72082 11.2018 3.84409L10.3546 12.926C10.351 12.9646 10.3337 13.0003 10.3061 13.0263C10.2785 13.0523 10.2425 13.0667 10.2052 13.0667H3.7948C3.75749 13.0667 3.72152 13.0523 3.6939 13.0263C3.66627 13.0003 3.64898 12.9646 3.6454 12.926L2.7982 3.84409Z" fill="#676767"/>
                            <path d="M5.40408 5.00107C5.46028 4.99758 5.51658 5.00576 5.56977 5.02513C5.62296 5.0445 5.67199 5.07468 5.71406 5.11396C5.75614 5.15324 5.79043 5.20084 5.81497 5.25404C5.83952 5.30724 5.85384 5.36499 5.85712 5.42401L6.14277 10.5232C6.14944 10.6424 6.11072 10.7596 6.03513 10.8489C5.95955 10.9381 5.85328 10.9922 5.73972 10.9992C5.62616 11.0062 5.5146 10.9656 5.42958 10.8862C5.34457 10.8068 5.29306 10.6952 5.2864 10.576L5.00075 5.4768C4.99742 5.41779 5.00521 5.35867 5.02365 5.30282C5.0421 5.24696 5.07085 5.19548 5.10825 5.1513C5.14566 5.10712 5.19098 5.07111 5.24165 5.04533C5.29231 5.01956 5.34731 5.00452 5.40351 5.00107H5.40408ZM8.99926 5.4768C9.00593 5.35755 8.96721 5.2404 8.89162 5.15113C8.81604 5.06186 8.70977 5.00778 8.59621 5.00077C8.48265 4.99377 8.37109 5.03443 8.28607 5.1138C8.20106 5.19317 8.14955 5.30476 8.14289 5.42401L7.85724 10.5232C7.85057 10.6424 7.88926 10.7594 7.96479 10.8487C8.04033 10.9379 8.14652 10.9919 8.26 10.9989C8.37349 11.0059 8.48498 10.9653 8.56994 10.886C8.6549 10.8067 8.70638 10.6952 8.71304 10.576L8.99926 5.4768Z" fill="#676767"/>
                        </svg>
                        <span>Видалити ввесь список</span>
                    </a>

                </div>
                <div class="profile-filter__binare">
                    <span>Відмінності</span>
                    <input type="checkbox" id="checkbox1">
                    <label for="checkbox1"></label>
                    <span>Всі параметри</span>
                </div>

                <div class="splide profile-slider mb-m" aria-label="">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for ($i = 0; $i < 7; $i++) { ?>
                                <li class="splide__slide">
                                    <div class="good-block">
                                        <div class="good-block__top">
                                            <div class="good-block__top-tag good-block__top-tag--standart">
                                                <span>ALTA-METIZ</span>
                                            </div>
                                            <div class="good-block__top-cod">
                                                <span>Код товару: 20127</span>
                                            </div>
                                            <a href="#" class="good-block__top-close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.311199 0.311199C0.726131 -0.103733 1.39887 -0.103733 1.8138 0.311199L8.5 6.9974L15.1862 0.311199C15.6011 -0.103733 16.2739 -0.103733 16.6888 0.311199C17.1037 0.726131 17.1037 1.39887 16.6888 1.8138L10.0026 8.5L16.6888 15.1862C17.1037 15.6011 17.1037 16.2739 16.6888 16.6888C16.2739 17.1037 15.6011 17.1037 15.1862 16.6888L8.5 10.0026L1.8138 16.6888C1.39887 17.1037 0.726131 17.1037 0.311199 16.6888C-0.103733 16.2739 -0.103733 15.6011 0.311199 15.1862L6.9974 8.5L0.311199 1.8138C-0.103733 1.39887 -0.103733 0.726131 0.311199 0.311199Z" fill="#F79E1B"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <a href="" class="good-block__img">
                                            <img src="uploads/s-recomendation-slider.png" alt="">
                                        </a>
                                        <div class="profile-slider__btn">
                                            <a href="#" class="good-block__title">
                                                Болт з шестигранною
                                                головкою
                                            </a>
                                            <a href="#" class="btn-general">Перейти в асортимент</a>
                                        </div>

                                        <div class="profile-slider__info-title">
                                            <span>Стандарт: </span>
                                        </div>
                                        <div class="profile-slider__info">
                                            <span>DIN 933</span>
                                        </div>

                                        <div class="profile-slider__info-title">
                                            <span>Матеріал: </span>
                                        </div>
                                        <div class="profile-slider__info">
                                            <span>Сталь</span>
                                        </div>

                                        <div class="profile-slider__info-title">
                                            <span>Покриття:</span>
                                        </div>
                                        <div class="profile-slider__info">
                                            <span>5.8</span>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <script>
                    var mainSlider = new Splide('.profile-slider', {
                        gap: 30,
                        pagination: false,
                        arrows: false,
                        autoWidth: true,
                        perPage: false,
                        breakpoints: {
                            1260: {
                                gap: 20,
                            }
                        }
                    });
                    mainSlider.mount();
                </script>
            </div>
        </div>
    </div>
</section>