<?php	
	include '_blocks/cabinet-menu.php';

	$this->title = 'Активні замовлення';
	$cabinetMenuView = new CabinetMenuView('activeOrdersTwo');
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
										Активні замовлення
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-xl-3 d-none d-xl-block">
                <?php $cabinetMenuView->run(); ?>
            </div>

            <div class="col-xl-9">
                <div class="d-flex">
                    <a href="#" class="profile-title cabinet-offcanvas__open">
                        <img src="img/profile-miniblock2.png" alt="">
                        <span>Активні замовлення</span>
                    </a>
                </div>
                <div class="cabinet-orders__wrap">
                    <div class="cabinet-orders__before">
                        <div class="cabinet-orders__before-number">
                            №
                        </div>
                        <div class="cabinet-orders__before-order">
                            № Замовлення
                        </div>
                        <div class="cabinet-orders__before-date1">
                            Дата замовлення
                        </div>
                        <div class="cabinet-orders__before-date2">
                            Дата оплати
                        </div>
                        <div class="cabinet-orders__before-sum">
                            Сума замовлення
                        </div>
                        <div class="cabinet-orders__before-date3">
                            Дата доставки
                        </div>
                        <div class="cabinet-orders__before-icons"></div>
                    </div>
                    <div class="cabinet-orders">
                        <div class="cabinet-orders__top-wrap">
                            <div class="cabinet-orders__top">
                                <div class="cabinet-orders__number">
                                    1.
                                </div>
                                <div class="cabinet-orders__order">
                                    567298732
                                </div>
                                <div class="cabinet-orders__date1">
                                    12.04.22
                                </div>
                                <div class="cabinet-orders__date2">
                                    28.04.22
                                </div>
                                <div class="cabinet-orders__sum">
                                    44 200 грн
                                </div>
                                <div class="cabinet-orders__date3">
                                    20.04.22
                                </div>
                                <div class="cabinet-orders__icons">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                            <path d="M12.2387 22C12.0698 22.0002 11.9026 21.9671 11.7466 21.9027C11.5906 21.8383 11.4489 21.7438 11.3297 21.6246L6.39251 16.7053C6.26971 16.5871 6.17177 16.4458 6.10438 16.2895C6.037 16.1332 6.00153 15.9651 6.00005 15.795C5.99857 15.6249 6.0311 15.4562 6.09574 15.2987C6.16039 15.1413 6.25586 14.9983 6.37658 14.878C6.4973 14.7577 6.64085 14.6626 6.79886 14.5982C6.95687 14.5338 7.12617 14.5013 7.29689 14.5028C7.4676 14.5043 7.63631 14.5396 7.79318 14.6068C7.95004 14.6739 8.09191 14.7715 8.21051 14.8939L12.2387 18.9075L21.8211 9.35961C22.0636 9.12625 22.3883 8.99713 22.7255 9.00005C23.0626 9.00297 23.385 9.1377 23.6234 9.37522C23.8618 9.61274 23.997 9.93405 24 10.2699C24.0029 10.6058 23.8733 10.9294 23.6391 11.1711L13.1477 21.6246C13.0284 21.7438 12.8867 21.8383 12.7307 21.9027C12.5747 21.9671 12.4075 22.0002 12.2387 22Z" fill="#5FBA46"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                            <path d="M2.33333 0C1.71449 0 1.121 0.223883 0.683417 0.622398C0.245833 1.02091 0 1.56141 0 2.125V14.875C0 15.4386 0.245833 15.9791 0.683417 16.3776C1.121 16.7761 1.71449 17 2.33333 17H11.6667C12.2855 17 12.879 16.7761 13.3166 16.3776C13.7542 15.9791 14 15.4386 14 14.875V5.75238C13.9996 5.32983 13.8149 4.92472 13.4867 4.62613L8.92033 0.466437C8.59227 0.167855 8.14747 9.01864e-05 7.68367 0H2.33333ZM1.16667 2.125C1.16667 1.84321 1.28958 1.57296 1.50838 1.3737C1.72717 1.17444 2.02391 1.0625 2.33333 1.0625H7V4.78125C7 5.20394 7.18437 5.60932 7.51256 5.9082C7.84075 6.20709 8.28587 6.375 8.75 6.375H12.8333V14.875C12.8333 15.1568 12.7104 15.427 12.4916 15.6263C12.2728 15.8256 11.9761 15.9375 11.6667 15.9375H2.33333C2.02391 15.9375 1.72717 15.8256 1.50838 15.6263C1.28958 15.427 1.16667 15.1568 1.16667 14.875V2.125ZM12.5918 5.3125H8.75C8.59529 5.3125 8.44692 5.25653 8.33752 5.1569C8.22812 5.05727 8.16667 4.92215 8.16667 4.78125V1.28244L12.5918 5.3125Z" fill="#274683"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M9.5 2C5.36 2 2 5.36 2 9.5C2 13.64 5.36 17 9.5 17C13.64 17 17 13.64 17 9.5C17 5.36 13.64 2 9.5 2ZM10.25 13.25H8.75V8.75H10.25V13.25ZM10.25 7.25H8.75V5.75H10.25V7.25Z" fill="#00215D"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="cabinet-orders__top-mob">
                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Дата замовлення</div>
                                    <span>12.04.22</span>
                                </div>
                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Дата оплати</div>
                                    <span>28.04.22</span>
                                </div>
                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Сума замовлення</div>
                                    <span>44 200 грн</span>
                                </div>
                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Дата доставки</div>
                                    <span>20.04.22</span>
                                </div>
                            </div>
                        </div>
                        <div class="cabinet-orders__bottom">
                            <div class="cabinet-orders__more">
                                <div class="cabinet-orders__more-img">
                                    <img src="uploads/s-recomendation-slider.png" alt="">
                                </div>
                                <div class="cabinet-orders__more-art">
                                    Арт. 20127
                                </div>
                                <div class="cabinet-orders__more-name">
                                    <a href="#">
                                        Болт з шестигранною головкою 
                                        M3x5 8,8 цинк
                                    </a>
                                </div>
                                <div class="cabinet-orders__more-diam">
                                    <span>3</span>
                                    <span>5</span>
                                </div>
                                <div class="cabinet-orders__more-type">
                                    <span>Коробка</span>
                                </div>
                                <div class="cabinet-orders__more-pack">
                                    <span>10 кг</span>
                                </div>
                                <div class="cabinet-orders__more-priceone">
                                    <span>840 грн</span>
                                </div>
                                <div class="cabinet-orders__more-count js-count">
                                    <a href="#" class="good-list__count-minus js-count__minus">-</a>
                                    <input class="good-list__count-input js-count__input" type="number" name="" id="" value="1">
                                    <a href="#" class="good-list__count-plus js-count__plus">+</a>
                                </div>
                                <div class="cabinet-orders__more-weight">
                                    <span>10 кг</span>
                                </div>
                                <div class="cabinet-orders__more-price">
                                    <span>840 грн</span>
                                </div>
                                <div class="cabinet-orders__more-mobile">
                                    <div class="cabinet-orders__more-mobile-info">
                                        <div class="cabinet-orders__more-mobile-info-img">
                                            <img src="uploads/s-recomendation-slider.png" alt="">
                                        </div>
                                        <div>
                                            <div class="cabinet-orders__more-mobile-info-title">
                                                Болт з шестигранною головкою 
                                                M3x5 8,8 цинк
                                            </div>
                                            <div class="cabinet-orders__more-mobile-info-art">
                                                Арт. 20127
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cabinet-orders__more-mobile-line">
                                        <div class="cabinet-orders__more-mobile-line-title">Діаметр та довжина</div>
                                        <div class="d-flex">
                                            <span>3</span>
                                            <span>5</span>
                                        </div>
                                    </div>
                                    <div class="cabinet-orders__more-mobile-line">
                                        <div class="cabinet-orders__more-mobile-line-title">Вид пакування</div>
                                        <span>Коробка</span>
                                    </div>
                                    <div class="cabinet-orders__more-mobile-line">
                                        <div class="cabinet-orders__more-mobile-line-title">Діаметр та довжина</div>
                                        <span>10 кг</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cabinet-orders__more">
                                <div class="cabinet-orders__more-img">
                                    <img src="uploads/s-recomendation-slider.png" alt="">
                                </div>
                                <div class="cabinet-orders__more-art">
                                    Арт. 20127
                                </div>
                                <div class="cabinet-orders__more-name">
                                    <a href="#">
                                        Болт з шестигранною головкою 
                                        M3x5 8,8 цинк
                                    </a>
                                </div>
                                <div class="cabinet-orders__more-diam">
                                    <span>3</span>
                                    <span>5</span>
                                </div>
                                <div class="cabinet-orders__more-type">
                                    <span>Коробка</span>
                                </div>
                                <div class="cabinet-orders__more-pack">
                                    <span>10 кг</span>
                                </div>
                                <div class="cabinet-orders__more-priceone">
                                    <span>840 грн</span>
                                </div>
                                <div class="cabinet-orders__more-count js-count">
                                    <a href="#" class="good-list__count-minus js-count__minus">-</a>
                                    <input class="good-list__count-input js-count__input" type="number" name="" id="" value="1">
                                    <a href="#" class="good-list__count-plus js-count__plus">+</a>
                                </div>
                                <div class="cabinet-orders__more-weight">
                                    <span>10 кг</span>
                                </div>
                                <div class="cabinet-orders__more-price">
                                    <span>840 грн</span>
                                </div>

                                <div class="cabinet-orders__more-mobile">
                                    <div class="cabinet-orders__more-mobile-info">
                                        <div class="cabinet-orders__more-mobile-info-img">
                                            <img src="uploads/s-recomendation-slider.png" alt="">
                                        </div>
                                        <div>
                                            <div class="cabinet-orders__more-mobile-info-title">
                                                Болт з шестигранною головкою 
                                                M3x5 8,8 цинк
                                            </div>
                                            <div class="cabinet-orders__more-mobile-info-art">
                                                Арт. 20127
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cabinet-orders__more-mobile-line">
                                        <div class="cabinet-orders__more-mobile-line-title">Діаметр та довжина</div>
                                        <div class="d-flex">

                                            <span>3</span>
                                            <span>5</span>
                                        </div>
                                    </div>
                                    <div class="cabinet-orders__more-mobile-line">
                                        <div class="cabinet-orders__more-mobile-line-title">Вид пакування</div>
                                        <span>Коробка</span>
                                    </div>
                                    <div class="cabinet-orders__more-mobile-line">
                                        <div class="cabinet-orders__more-mobile-line-title">Діаметр та довжина</div>
                                        <span>10 кг</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cabinet-orders__price">
                                <div class="cabinet-orders__price-info">
                                    <div class="cabinet-orders__price-info-text">
                                        Загальна сума:
                                    </div>
                                    <span>13 440 грн.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cabinet-orders">
                        <div class="cabinet-orders__top-wrap">
                            <div class="cabinet-orders__top">
                                <div class="cabinet-orders__number">
                                    1.
                                </div>
                                <div class="cabinet-orders__order">
                                    567298732
                                </div>
                                <div class="cabinet-orders__date1">
                                    12.04.22
                                </div>
                                <div class="cabinet-orders__date2">
                                    28.04.22
                                </div>
                                <div class="cabinet-orders__sum">
                                    44 200 грн
                                </div>
                                <div class="cabinet-orders__date3">
                                    20.04.22
                                </div>
                                <div class="cabinet-orders__icons">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                            <path d="M12.2387 22C12.0698 22.0002 11.9026 21.9671 11.7466 21.9027C11.5906 21.8383 11.4489 21.7438 11.3297 21.6246L6.39251 16.7053C6.26971 16.5871 6.17177 16.4458 6.10438 16.2895C6.037 16.1332 6.00153 15.9651 6.00005 15.795C5.99857 15.6249 6.0311 15.4562 6.09574 15.2987C6.16039 15.1413 6.25586 14.9983 6.37658 14.878C6.4973 14.7577 6.64085 14.6626 6.79886 14.5982C6.95687 14.5338 7.12617 14.5013 7.29689 14.5028C7.4676 14.5043 7.63631 14.5396 7.79318 14.6068C7.95004 14.6739 8.09191 14.7715 8.21051 14.8939L12.2387 18.9075L21.8211 9.35961C22.0636 9.12625 22.3883 8.99713 22.7255 9.00005C23.0626 9.00297 23.385 9.1377 23.6234 9.37522C23.8618 9.61274 23.997 9.93405 24 10.2699C24.0029 10.6058 23.8733 10.9294 23.6391 11.1711L13.1477 21.6246C13.0284 21.7438 12.8867 21.8383 12.7307 21.9027C12.5747 21.9671 12.4075 22.0002 12.2387 22Z" fill="#5FBA46"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                            <path d="M2.33333 0C1.71449 0 1.121 0.223883 0.683417 0.622398C0.245833 1.02091 0 1.56141 0 2.125V14.875C0 15.4386 0.245833 15.9791 0.683417 16.3776C1.121 16.7761 1.71449 17 2.33333 17H11.6667C12.2855 17 12.879 16.7761 13.3166 16.3776C13.7542 15.9791 14 15.4386 14 14.875V5.75238C13.9996 5.32983 13.8149 4.92472 13.4867 4.62613L8.92033 0.466437C8.59227 0.167855 8.14747 9.01864e-05 7.68367 0H2.33333ZM1.16667 2.125C1.16667 1.84321 1.28958 1.57296 1.50838 1.3737C1.72717 1.17444 2.02391 1.0625 2.33333 1.0625H7V4.78125C7 5.20394 7.18437 5.60932 7.51256 5.9082C7.84075 6.20709 8.28587 6.375 8.75 6.375H12.8333V14.875C12.8333 15.1568 12.7104 15.427 12.4916 15.6263C12.2728 15.8256 11.9761 15.9375 11.6667 15.9375H2.33333C2.02391 15.9375 1.72717 15.8256 1.50838 15.6263C1.28958 15.427 1.16667 15.1568 1.16667 14.875V2.125ZM12.5918 5.3125H8.75C8.59529 5.3125 8.44692 5.25653 8.33752 5.1569C8.22812 5.05727 8.16667 4.92215 8.16667 4.78125V1.28244L12.5918 5.3125Z" fill="#274683"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M9.5 2C5.36 2 2 5.36 2 9.5C2 13.64 5.36 17 9.5 17C13.64 17 17 13.64 17 9.5C17 5.36 13.64 2 9.5 2ZM10.25 13.25H8.75V8.75H10.25V13.25ZM10.25 7.25H8.75V5.75H10.25V7.25Z" fill="#00215D"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="cabinet-orders__top-mob">
                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Дата замовлення</div>
                                    <span>12.04.22</span>
                                </div>

                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Дата оплати</div>
                                    <span>28.04.22</span>
                                </div>

                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Сума замовлення</div>
                                    <span>44 200 грн</span>
                                </div>

                                <div class="cabinet-orders__top-mob-line">
                                    <div class="cabinet-orders__top-mob-line-title">Дата доставки</div>
                                    <span>20.04.22</span>
                                </div>
                            </div>
                        </div>
                        <div class="cabinet-orders__bottom2">
                            <div class="cabinet-orders__bottom2-dl">
                                <div class="cabinet-orders__bottom2-dl-icon">
                                    <img src="img/btn_exel.png" alt="">
                                </div>
                                <span>
                                    Накладна за 14.04.22
                                </span>
                                <a href="#" class="cabinet-orders__bottom2-dl-btn">
                                    <span>Завантажити</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                        <path d="M3.23633 12.0605V13.3938C3.23633 13.7474 3.38814 14.0866 3.65837 14.3366C3.92861 14.5867 4.29512 14.7271 4.67728 14.7271H13.323C13.7052 14.7271 14.0717 14.5867 14.3419 14.3366C14.6122 14.0866 14.764 13.7474 14.764 13.3938V12.0605M5.39776 8.06047L9.00015 11.3938M9.00015 11.3938L12.6025 8.06047M9.00015 11.3938V3.3938" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="cabinet-orders__bottom2-dl">
                                <div class="cabinet-orders__bottom2-dl-icon">
                                    <img src="img/btn_word.png" alt="">
                                </div>
                                <span>
                                    Накладна за 18.04.22
                                </span>
                                <a href="#" class="cabinet-orders__bottom2-dl-btn">
                                    <span>Завантажити</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                        <path d="M3.23633 12.0605V13.3938C3.23633 13.7474 3.38814 14.0866 3.65837 14.3366C3.92861 14.5867 4.29512 14.7271 4.67728 14.7271H13.323C13.7052 14.7271 14.0717 14.5867 14.3419 14.3366C14.6122 14.0866 14.764 13.7474 14.764 13.3938V12.0605M5.39776 8.06047L9.00015 11.3938M9.00015 11.3938L12.6025 8.06047M9.00015 11.3938V3.3938" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="cabinet-orders__bottom2-dl">
                                <div class="cabinet-orders__bottom2-dl-icon">
                                    <img src="img/btn_pdf.png" alt="">
                                </div>
                                <span>
                                    Рахунок-фактура за 14.04.22
                                </span>
                                <a href="#" class="cabinet-orders__bottom2-dl-btn">
                                    <span>Завантажити</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                                        <path d="M3.23633 12.0605V13.3938C3.23633 13.7474 3.38814 14.0866 3.65837 14.3366C3.92861 14.5867 4.29512 14.7271 4.67728 14.7271H13.323C13.7052 14.7271 14.0717 14.5867 14.3419 14.3366C14.6122 14.0866 14.764 13.7474 14.764 13.3938V12.0605M5.39776 8.06047L9.00015 11.3938M9.00015 11.3938L12.6025 8.06047M9.00015 11.3938V3.3938" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>