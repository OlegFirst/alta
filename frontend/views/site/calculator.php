<?php

	$this->title = 'Калькулятор';

?>

<section class="s-calculator pt-s mb-m">
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
                <li class="breadcrumb-item active" aria-current="page">
                    Калькулятор
                </li>
            </ol>
        </nav>

        <h1 class="h1-title text-center">Калькулятор</h1>
        <div class="calculator__subtitle">
            Перерахунок із штук в кілограми
        </div>

        <div class="table-first calculator-table__first">
            <div class="calculator-table1">
                <div class="calculator-table__title">
                    <span>Назва</span>
                </div>
                <div class="calculator-table__size">
                    <span class="d-none d-lg-block">Розмір виробу</span>
                    <span class="d-lg-none">Вага</span>
                </div>
            </div>
            <div class="calculator-table2">
                <div class="calculator-table__weight">
                    <span>Вага однієї шт. із сталі</span>
                </div>
                <div class="calculator-table__x">
                    <span></span>
                </div>
                <div class="calculator-table__number">
                    <span>Кількість шт.</span>
                </div>
                <div class="calculator-table__x">
                    <span></span>
                </div>

                <div class="calculator-table__weight-all">
                    <div class="calculator-table__weight-st">
                        <span>Вага із сталі</span>
                    </div>
                    <div class="calculator-table__weight-br">
                        <span>Вага із латуні</span>
                    </div>
                    <div class="calculator-table__weight-al">
                        <span>Вага із алюмінію</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="calculator-table__wrap">
            <div class="calculator-table">
                <div class="calculator-table1">
                    <div class="calculator-table__title">
                        <span>Болт з шестигранною головкою M3x5 8,8 цинк</span>
                    </div>
                    <div class="calculator-table__size">
                        <select name="" id="" class="line-filter__top-select">
                            <option value="За рейтингом">16 х 2</option>
                            <option value="За популяністю">18 х 2</option>
                        </select>
                    </div>
                </div>
                <div class="calculator-table2">
                    <div class="calculator-table__weight">
                        <div class="calculator-table__title2">
                            <div>К-сть штук</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>x</span>
                    </div>
                    <div class="calculator-table__number">
                        <div class="calculator-table__title2">
                            <div>Вага 1 шт. 
                            із сталі</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>=</span>
                    </div>

                    <div class="calculator-table__weight-all">
                        <div class="calculator-table__weight-st">
                            <div class="calculator-table__weight-title2">
                                Вага із сталі
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                        <div class="calculator-table__weight-br">
                            <div class="calculator-table__weight-title2">
                                Вага із латуні
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                        <div class="calculator-table__weight-al">
                            <div class="calculator-table__weight-title2">
                                Вага із алюмінію
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calculator-table">
                <div class="calculator-table1">
                    <div class="calculator-table__title">
                        <span>Болт з шестигранною головкою M3x5 8,8 цинк</span>
                    </div>
                    <div class="calculator-table__size">
                        <select name="" id="" class="line-filter__top-select">
                            <option value="За рейтингом">16 х 2</option>
                            <option value="За популяністю">18 х 2</option>
                        </select>
                    </div>
                </div>
                <div class="calculator-table2">
                    <div class="calculator-table__weight">
                        <div class="calculator-table__title2">
                            <div>К-сть штук</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>x</span>
                    </div>
                    <div class="calculator-table__number">
                        <div class="calculator-table__title2">
                            <div>Вага 1 шт. 
                            із сталі</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>=</span>
                    </div>

                    <div class="calculator-table__weight-all">
                        <div class="calculator-table__weight-st">
                            <div class="calculator-table__weight-title2">
                                Вага із сталі
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                        <div class="calculator-table__weight-br">
                            <div class="calculator-table__weight-title2">
                                Вага із латуні
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                        <div class="calculator-table__weight-al">
                            <div class="calculator-table__weight-title2">
                                Вага із алюмінію
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calculator-table">
                <div class="calculator-table1">
                    <div class="calculator-table__title">
                        <span>Болт з шестигранною головкою M3x5 8,8 цинк</span>
                    </div>
                    <div class="calculator-table__size">
                        <select name="" id="" class="line-filter__top-select">
                            <option value="За рейтингом">16 х 2</option>
                            <option value="За популяністю">18 х 2</option>
                        </select>
                    </div>
                </div>
                <div class="calculator-table2">
                    <div class="calculator-table__weight">
                        <div class="calculator-table__title2">
                            <div>К-сть штук</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>x</span>
                    </div>
                    <div class="calculator-table__number">
                        <div class="calculator-table__title2">
                            <div>Вага 1 шт. 
                            із сталі</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>=</span>
                    </div>

                    <div class="calculator-table__weight-all">
                        <div class="calculator-table__weight-st">
                            <div class="calculator-table__weight-title2">
                                Вага із сталі
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                        <div class="calculator-table__weight-br">
                            <div class="calculator-table__weight-title2">
                                Вага із латуні
                            </div>
                            <input type="text" class="input__standart" disabled> 
                        </div>
                        <div class="calculator-table__weight-al">
                            <div class="calculator-table__weight-title2">
                                Вага із алюмінію
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calculator-table">
                <div class="calculator-table1">
                    <div class="calculator-table__title">
                        <span>Болт з шестигранною головкою M3x5 8,8 цинк</span>
                    </div>
                    <div class="calculator-table__size">
                        <select name="" id="" class="line-filter__top-select">
                            <option value="За рейтингом">16 х 2</option>
                            <option value="За популяністю">18 х 2</option>
                        </select>
                    </div>
                </div>
                <div class="calculator-table2">
                    <div class="calculator-table__weight">
                        <div class="calculator-table__title2">
                            <div>К-сть штук</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>x</span>
                    </div>
                    <div class="calculator-table__number">
                        <div class="calculator-table__title2">
                            <div>Вага 1 шт. 
                            із сталі</div>
                        </div>
                        <input type="text" class="input__standart">
                    </div>
                    <div class="calculator-table__x">
                        <span>=</span>
                    </div>

                    <div class="calculator-table__weight-all">
                        <div class="calculator-table__weight-st">
                            <div class="calculator-table__weight-title2">
                                Вага із сталі
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                        <div class="calculator-table__weight-br">
                            <div class="calculator-table__weight-title2">
                                Вага із латуні
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                        <div class="calculator-table__weight-al">
                            <div class="calculator-table__weight-title2">
                                Вага із алюмінію
                            </div>
                            <input type="text" class="input__standart" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-s">
            таблица не основана на нашем товаре, все данные приблизительные  и лишь дают возможность  увидеть теоретический результат
        </div>
    </div>
</section>