<?php
	$title = Yii::$app->menu->get('blog')['text'];
	$this->title = $title;
?>

<section class="p-blog pt-s">
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
                    <?= $title ?>
                </li>
            </ol>
        </nav>

        <div class="d-flex justify-content-center">
            <h1 class="h1-title text-center"><?= $title ?></h1>
        </div>

        <div class="blog__subtitle-wrap">
            <div class="blog__subtitle">
                <a href="#">Статті</a>
            </div>
            <div class="blog__subtitle active">
                Новини
            </div>
        </div>

        <div class="blog__filter-wrap">
            <div class="blog__filter-tags">
                <span class="blog__filter-tag active">Всі</span>
                <a href="#" class="blog__filter-tag">Саморізи</a>
                <a href="#" class="blog__filter-tag">Саморізи</a>
                <a href="#" class="blog__filter-tag">Саморізи</a>
            </div>
						
            <select name="" id="" class="blog__filter-select">
                <option value="За рейтингом">За рейтингом</option>
                <option value="За популяністю">За популяністю</option>
                <option value="За рейтингом">За рейтингом</option>
                <option value="За популяністю">За популяністю</option>
            </select>
        </div>

        <div class="row">
            <?php for ($i = 0; $i < 12; $i++) { ?>
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
				
        <ul class="pagination mt-s mb-m">
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
</section>