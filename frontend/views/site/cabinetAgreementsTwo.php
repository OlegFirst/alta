<?php	
	include '_blocks/cabinet-menu.php';

	$this->title = 'Договори';
	$cabinetMenuView = new CabinetMenuView('agreementsTwo');
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
										Договори
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
                        <img src="img/profile2-miniblock7.png" alt="">
                        <span>Договори</span>
                    </a>
                </div>
                <div class="cabinet-agreements__table">
                    <div class="table-first">
                        <div class="cabinet-agreements__table1">
                            <span>№</span>
                        </div>
                        <div class="cabinet-agreements__table2">
                            <span>№ Замовлення</span>
                        </div>
                        <div class="cabinet-agreements__table3">
                            <span>Початок дії</span>
                        </div>
                        <div class="cabinet-agreements__table4">
                            <span>Кінець дії</span>
                        </div>
                    </div>

                    <div class="table--grey">
                        <div class="cabinet-agreements__table1">
                            <span>1.</span>
                        </div>
                        <div class="cabinet-agreements__table2">
                            <span>567298732</span>
                        </div>
                        <div class="cabinet-agreements__table3">
                            <span>12.04.22</span>
                        </div>
                        <div class="cabinet-agreements__table4">
                            <span>20.04.22</span>
                        </div>
                        
                    </div>
                    <div class="table--grey">
                        <div class="cabinet-agreements__table1">
                            <span>2.</span>
                        </div>
                        <div class="cabinet-agreements__table2">
                            <span>567298732</span>
                        </div>
                        <div class="cabinet-agreements__table3">
                            <span>12.04.22</span>
                        </div>
                        <div class="cabinet-agreements__table4">
                            <span>20.04.22</span>
                        </div>                        
                    </div>
                    <div class="table--grey">
                        <div class="cabinet-agreements__table1">
                            <span>3.</span>
                        </div>
                        <div class="cabinet-agreements__table2">
                            <span>567298732</span>
                        </div>
                        <div class="cabinet-agreements__table3">
                            <span>12.04.22</span>
                        </div>
                        <div class="cabinet-agreements__table4">
                            <span>20.04.22</span>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>