<?php	
	include '_blocks/cabinet-menu.php';

	$this->title = 'Кошик';
	$cabinetMenuView = new CabinetMenuView('basket');
?>

<div class="cabinet-offcanvas">
    <button class="cabinet-offcanvas__close" id="cabinet-offcanvas__close"></button>

    <?php $cabinetMenuView->run(); ?>
</div>

<section class="p-basket pt-s pb-m">
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
										Кошик
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12">
                <div class="basket-title__wrap">
                    <h1 class="h1-title">Кошик</h1>
                    <a href="#" class="basket__exel">
                        <span>ІМПОРТ ІЗ EXCEL</span>
                        <img src="img/exel_basket.png" alt="">
                    </a>
                </div>                
            </div>

            <div class="col-12">
                <div class="basket-disc__wrap d-xl-none">
                    <div class="basket-disc">
                        <div class="basket-disc__title">
                            <span>Ваша персональна знижка*</span>
                        </div>

                        <div class="basket-disc__rating">
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>1%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl1" style="background:#FFE2B7;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>2%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl2" style="background:#FFD393;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>3%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl3" style="background:#FFC571;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>4%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl4" style="background:#FBB650;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block active">
                                <div class="basket-disc__rating-block-text">
                                    <span>5%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl5" style="background:#F79E1B;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>6%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl6"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>7%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl7"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>8%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl8"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>9%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl9"></div>
                            </div>                  
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>10%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="basket-disc">
                        <div class="basket-disc__title">
                            <span>Система знижок</span>
                        </div>
                        <div class="basket-disc__line-wrap">
                            <div class="basket-disc__line">
                                <div class="basket-disc__line-text">
                                    Від 10 000 грн
                                </div>
                                <div class="basket-disc__line-persent">
                                    5 %
                                </div>
                            </div>
                            <div class="basket-disc__line">
                                <div class="basket-disc__line-text">
                                    Від 50 000 грн
                                </div>
                                <div class="basket-disc__line-persent">
                                    10 %
                                </div>
                            </div>
                            <div class="basket-disc__line">
                                <div class="basket-disc__line-text">
                                    Від 100 000 грн
                                </div>
                                <div class="basket-disc__line-persent">
                                    15 %
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9">
                <div class="category-list2__wrap cabinet-orders__wrap">

                    <div class="good-list__before">
                        <div class="good-list__before-mob basket-list__before-mob"><span>Список товарів</span></div>

                        <div class="good-list__before-img"></div>

                        <div class="good-list__before-cod2">
                            <span>Артикл</span>
                        </div>
                        <div class="good-list__before-name">
                            <span>Назва</span>
                        </div>
                        <div class="good-list__before-diam">
                            <span>Діаметр та
                            довжина</span>
                        </div>
                        <div class="good-list__before-type">
                            <span>Вид
                            пакування</span>
                        </div>
                        <div class="good-list__before-pack">
                            <span>Упаковка</span>
                        </div>
                        <div class="good-list__before-priceone">
                            <span>Ціна за
                            одиницю</span>
                        </div>
                        <div class="good-list__before-count">
                            <span>Кількість</span>
                        </div>
                        <div class="good-list__before-weight">
                            <span>≈ Вага</span>
                        </div>
                        <div class="good-list__before-price">
                            <span>Загальна
                            ціна</span>
                        </div>
                        <div class="good-list__before-buy2">
                        </div>
                    </div>
                    
                    <div class="good-list basket-table">
                        <div class="good-list__img">
                            <img src="image/s-recomendation-slider.png" alt="">
                        </div>
                        <div class="good-list__cod2">
                            Арт. 20127
                        </div>
                        <div class="good-list__name">
                            <a href="#" class="good-list__name-title">
                                Болт з шестигранною головкою
                                M3x5 8,8 цинк
                            </a>
                            <div class="good-list__name-cod d-lg-none">
                                Арт. 20127
                            </div>
                        </div>
                        <div class="good-list__diam">
                            <span>3</span>
                            <span>5</span>
                        </div>
                        <div class="good-list__type">
                            <span>Коробка</span>
                        </div>
                        <div class="good-list__pack">

                            <span>10 кг</span>
                        </div>
                        <div class="good-list__priceone">
                            <span>840 грн<span class="d-lg-none">/од</span></span>
                        </div>
                        <div class="good-list__count js-count">
                            <a href="#" class="good-list__count-minus js-count__minus">-</a>
                            <input class="good-list__count-input js-count__input" type="number" name="" id="" value="1">
                            <a href="#" class="good-list__count-plus js-count__plus">+</a>
                        </div>
                        <div class="good-list__weight">
                            <span>10 кг</span>
                        </div>
                        <div class="good-list__price">
                            <span>840 грн</span>
                        </div>
                        <div class="good-list__buy2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path d="M12.5 2.4V3.4H16.4375C16.5867 3.4 16.7298 3.46321 16.8352 3.57574C16.9407 3.68826 17 3.84087 17 4C17 4.15913 16.9407 4.31174 16.8352 4.42426C16.7298 4.53679 16.5867 4.6 16.4375 4.6H2.5625C2.41332 4.6 2.27024 4.53679 2.16475 4.42426C2.05926 4.31174 2 4.15913 2 4C2 3.84087 2.05926 3.68826 2.16475 3.57574C2.27024 3.46321 2.41332 3.4 2.5625 3.4H6.5V2.4C6.5 1.6272 7.088 1 7.8125 1H11.1875C11.912 1 12.5 1.6272 12.5 2.4ZM7.625 2.4V3.4H11.375V2.4C11.375 2.34696 11.3552 2.29609 11.3201 2.25858C11.2849 2.22107 11.2372 2.2 11.1875 2.2H7.8125C7.76277 2.2 7.71508 2.22107 7.67992 2.25858C7.64475 2.29609 7.625 2.34696 7.625 2.4ZM4.24775 5.9424C4.24134 5.86341 4.22031 5.78656 4.18589 5.71629C4.15146 5.64601 4.10432 5.58372 4.04719 5.533C3.99006 5.48228 3.92407 5.44414 3.85303 5.42078C3.782 5.39743 3.70733 5.38932 3.63334 5.39693C3.55936 5.40455 3.48752 5.42772 3.42198 5.46513C3.35644 5.50253 3.2985 5.55342 3.25151 5.61486C3.20452 5.67629 3.16941 5.74705 3.14821 5.82304C3.12701 5.89904 3.12014 5.97876 3.128 6.0576L4.187 17.736C4.21867 18.0822 4.37001 18.4033 4.61152 18.637C4.85304 18.8707 5.16744 19.0001 5.4935 19H13.5065C13.8327 19 14.1472 18.8705 14.3887 18.6367C14.6302 18.4029 14.7815 18.0815 14.813 17.7352L15.8727 6.0576C15.8871 5.89911 15.8418 5.74104 15.7468 5.61816C15.6519 5.49529 15.5151 5.41768 15.3665 5.4024C15.2179 5.38712 15.0697 5.43543 14.9545 5.5367C14.8393 5.63797 14.7666 5.78391 14.7523 5.9424L13.6932 17.6192C13.6888 17.6687 13.6672 17.7147 13.6326 17.7481C13.5981 17.7815 13.5531 17.8 13.5065 17.8H5.4935C5.44687 17.8 5.4019 17.7815 5.36737 17.7481C5.33284 17.7147 5.31123 17.6687 5.30675 17.6192L4.24775 5.9424Z" fill="#676767"/>
                                    <path d="M7.5051 5.00143C7.57535 4.99678 7.64573 5.00768 7.71221 5.0335C7.7787 5.05933 7.83999 5.09958 7.89258 5.15195C7.94517 5.20432 7.98803 5.26778 8.01872 5.33872C8.0494 5.40965 8.0673 5.48666 8.0714 5.56534L8.42846 12.3643C8.4368 12.5233 8.3884 12.6795 8.29392 12.7985C8.19943 12.9175 8.0666 12.9896 7.92465 12.999C7.7827 13.0083 7.64325 12.9541 7.53698 12.8483C7.43071 12.7424 7.36633 12.5937 7.358 12.4347L7.00093 5.63573C6.99678 5.55705 7.00651 5.47822 7.02957 5.40375C7.05262 5.32929 7.08856 5.26064 7.13531 5.20173C7.18207 5.14282 7.23873 5.09481 7.30206 5.06045C7.36539 5.02608 7.43414 5.00602 7.50439 5.00143H7.5051ZM11.9991 5.63573C12.0074 5.47673 11.959 5.32054 11.8645 5.20151C11.77 5.08248 11.6372 5.01037 11.4953 5.00103C11.3533 4.9917 11.2139 5.04591 11.1076 5.15174C11.0013 5.25757 10.9369 5.40635 10.9286 5.56534L10.5715 12.3643C10.5632 12.5232 10.6116 12.6793 10.706 12.7982C10.8004 12.9172 10.9331 12.9892 11.075 12.9986C11.2169 13.0079 11.3562 12.9537 11.4624 12.848C11.5686 12.7422 11.633 12.5935 11.6413 12.4347L11.9991 5.63573Z" fill="#676767"/>
                                </svg>
                            </a>
                        </div>
                        <div class="good-list__mob-line"></div>
                        <a href="#" class="good-list__more js-more__url"></a>
                        <div class="good-list__mob-more js-more__wrap" data-max-height="0" data-status="1">
                            <div class="good-list__mob-more-block js-more__block">

                                <div class="good-list__mob-more-block-list">
                                    <div class="good-list__mob-more-block-list-name">Діаметр та довжина</div>
                                    <div class="good-list__mob-more-block-list-parametr">
                                        <span>3</span>
                                        <span>5</span>
                                    </div>
                                </div>
                                <div class="good-list__mob-more-block-list">
                                    <div class="good-list__mob-more-block-list-name">Вид пакування</div>
                                    <div class="good-list__mob-more-block-list-parametr">
                                        <span>Коробка</span>
                                    </div>
                                </div>
                                <div class="good-list__mob-more-block-list">
                                    <div class="good-list__mob-more-block-list-name">Упаковка</div>
                                    <div class="good-list__mob-more-block-list-parametr">
                                        <span>10 кг</span>
                                    </div>
                                </div>
                                <div class="good-list__mob-more-block-list">
                                    <div class="good-list__mob-more-block-list-name">≈ Вага</div>
                                    <div class="good-list__mob-more-block-list-parametr">
                                        <span>10 кг</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="good-list__after">
                        <span>
                            Всього позицій: 5
                        </span>
                        <span>
                            Загальна вага: 400 кг
                        </span>
                        <div class="good-list__after-mob"></div>
                        <a href="#" class="good-list__after-delete">
                            <span>
                                Очистити список товарів
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M10.1 1.08889V1.86667H13.5125C13.6418 1.86667 13.7658 1.91583 13.8572 2.00335C13.9486 2.09087 14 2.20957 14 2.33333C14 2.4571 13.9486 2.5758 13.8572 2.66332C13.7658 2.75083 13.6418 2.8 13.5125 2.8H1.4875C1.35821 2.8 1.23421 2.75083 1.14279 2.66332C1.05136 2.5758 1 2.4571 1 2.33333C1 2.20957 1.05136 2.09087 1.14279 2.00335C1.23421 1.91583 1.35821 1.86667 1.4875 1.86667H4.9V1.08889C4.9 0.487822 5.4096 0 6.0375 0H8.9625C9.5904 0 10.1 0.487822 10.1 1.08889ZM5.875 1.08889V1.86667H9.125V1.08889C9.125 1.04763 9.10788 1.00807 9.0774 0.978895C9.04693 0.949722 9.0056 0.933333 8.9625 0.933333H6.0375C5.9944 0.933333 5.95307 0.949722 5.9226 0.978895C5.89212 1.00807 5.875 1.04763 5.875 1.08889ZM2.94805 3.84409C2.94249 3.78265 2.92427 3.72288 2.89443 3.66822C2.8646 3.61357 2.82374 3.56511 2.77423 3.52566C2.72472 3.48621 2.66753 3.45655 2.60596 3.43839C2.5444 3.42022 2.47969 3.41392 2.41557 3.41984C2.35144 3.42576 2.28918 3.44379 2.23238 3.47288C2.17558 3.50197 2.12537 3.54155 2.08464 3.58933C2.04392 3.63711 2.01349 3.69215 1.99511 3.75126C1.97674 3.81036 1.97079 3.87237 1.9776 3.93369L2.8954 13.0169C2.92285 13.2861 3.05401 13.5359 3.26332 13.7177C3.47263 13.8994 3.74512 14 4.0277 14H10.9723C11.255 14 11.5276 13.8993 11.7369 13.7174C11.9462 13.5356 12.0773 13.2856 12.1046 13.0163L13.023 3.93369C13.0355 3.81042 12.9962 3.68747 12.9139 3.5919C12.8316 3.49634 12.7131 3.43597 12.5843 3.42409C12.4555 3.41221 12.3271 3.44978 12.2273 3.52855C12.1274 3.60731 12.0644 3.72082 12.0519 3.84409L11.1341 12.926C11.1303 12.9646 11.1115 13.0003 11.0816 13.0263C11.0517 13.0523 11.0127 13.0667 10.9723 13.0667H4.0277C3.98729 13.0667 3.94831 13.0523 3.91839 13.0263C3.88846 13.0003 3.86973 12.9646 3.86585 12.926L2.94805 3.84409Z" fill="#E7E7E7"/>
                                <path d="M5.40408 5.00107C5.46028 4.99758 5.51658 5.00576 5.56977 5.02513C5.62296 5.0445 5.67199 5.07468 5.71406 5.11396C5.75614 5.15324 5.79043 5.20084 5.81497 5.25404C5.83952 5.30724 5.85384 5.36499 5.85712 5.42401L6.14277 10.5232C6.14944 10.6424 6.11072 10.7596 6.03513 10.8489C5.95955 10.9381 5.85328 10.9922 5.73972 10.9992C5.62616 11.0062 5.5146 10.9656 5.42958 10.8862C5.34457 10.8068 5.29306 10.6952 5.2864 10.576L5.00075 5.4768C4.99742 5.41779 5.00521 5.35867 5.02365 5.30282C5.0421 5.24696 5.07085 5.19548 5.10825 5.1513C5.14566 5.10712 5.19098 5.07111 5.24165 5.04533C5.29231 5.01956 5.34731 5.00452 5.40351 5.00107H5.40408ZM8.99926 5.4768C9.00593 5.35755 8.96721 5.2404 8.89162 5.15113C8.81604 5.06186 8.70977 5.00778 8.59621 5.00077C8.48265 4.99377 8.37109 5.03443 8.28607 5.1138C8.20106 5.19317 8.14955 5.30476 8.14289 5.42401L7.85724 10.5232C7.85057 10.6424 7.88926 10.7594 7.96479 10.8487C8.04033 10.9379 8.14652 10.9919 8.26 10.9989C8.37349 11.0059 8.48498 10.9653 8.56994 10.886C8.6549 10.8067 8.70638 10.6952 8.71304 10.576L8.99926 5.4768Z" fill="#E7E7E7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="basket-disc__wrap d-none d-xl-flex">
                    <div class="basket-disc">
                        <div class="basket-disc__title">
                            <span>Ваша персональна знижка*</span>
                        </div>

                        <div class="basket-disc__rating">
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>1%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl1" style="background:#FFE2B7;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>2%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl2" style="background:#FFD393;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>3%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl3" style="background:#FFC571;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>4%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl4" style="background:#FBB650;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block active">
                                <div class="basket-disc__rating-block-text">
                                    <span>5%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl5" style="background:#F79E1B;"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>6%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl6"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>7%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl7"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>8%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl8"></div>
                            </div>                        
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>9%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl9"></div>
                            </div>                  
                            <div class="basket-disc__rating-block">
                                <div class="basket-disc__rating-block-text">
                                    <span>10%</span>
                                </div>
                                <div class="basket-disc__rating-block-bl basket-disc__rating-block-bl10"></div>
                            </div>
                        </div>
                    </div>

                    <div class="basket-disc">
                        <div class="basket-disc__title">
                            <span>Система знижок</span>
                        </div>
                        <div class="basket-disc__line-wrap">
                            <div class="basket-disc__line">
                                <div class="basket-disc__line-text">
                                    Від 10 000 грн
                                </div>
                                <div class="basket-disc__line-persent">
                                    5 %
                                </div>
                            </div>
                            <div class="basket-disc__line">
                                <div class="basket-disc__line-text">
                                    Від 50 000 грн
                                </div>
                                <div class="basket-disc__line-persent">
                                    10 %
                                </div>
                            </div>
                            <div class="basket-disc__line">
                                <div class="basket-disc__line-text">
                                    Від 100 000 грн
                                </div>
                                <div class="basket-disc__line-persent">
                                    15 %
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

                <div class="basket-sum__wrap">
                    <div class="basket-sum__title">
                        Разом
                    </div>
                    <div class="basket-sum__line">
                        <div class="basket-sum__line-title">
                            5 товарів на суму
                        </div>
                        <div class="basket-sum__line-value">
                            33 600 грн.
                        </div>
                    </div>
                    <div class="basket-sum__line">
                        <div class="basket-sum__line-title">
                            Вартість доставки
                        </div>
                        <div class="basket-sum__line-value">
                            за тарифами перевізника
                        </div>
                    </div>
                    <div class="basket-sum__line">
                        <div class="basket-sum__line-title">
                            Знижка
                        </div>
                        <div class="basket-sum__line-value">
                            -1680 грн.
                        </div>
                    </div>
                    <div class="basket-sum__line">
                        <div class="basket-sum__line-title">
                            Загальна знижка
                        </div>
                        <div class="basket-sum__line-value">
                            -1680 грн.
                        </div>
                    </div>
                    <div class="basket-sum__line-fin">
                        <div class="basket-sum__line-title">
                            До сплати
                        </div>
                        <div class="basket-sum__line-final">
                            -1680 грн.
                        </div>
                    </div>

                    <div class="basket-sum__btn-wrap">
                        <a href="#" class="btn-general">
                            Оформити замовлення
                        </a>
                        <a href="#" class="basket-sum__btn">
                            Продовжити покупки
                        </a>
                    </div>

                    <div class="category-filter__checkbox-input">
                        <input type="checkbox" id="checkbox3">
                        <label for="checkbox3">
                            Підтверджуючи замовлення, 
                            я приймаю умови <a href="#">угоди користувача</a>
                        </label>
                    </div>
                </div>
            </div>
				</div>
    </div>
</section>