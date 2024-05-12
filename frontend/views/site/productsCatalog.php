<?php	
	$this->title = 'Каталог товарів';
?>

<section class="s-catalog pt-s">
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
										Каталог товарів
                </li>
            </ol>
        </nav>

        <div class="d-flex justify-content-center">
            <h1 class="h1-title h1-title--line text-center">Каталог товарів</h1>
        </div>

        <div class="row">
            <?php 
            $catalog = array(
                1 => array('img' => 'uploads/s-catalog__block1.png', 'text' => 'Болти'),
                2 => array('img' => 'uploads/s-catalog__block2.png', 'text' => 'Шурупи'),
                3 => array('img' => 'uploads/s-catalog__block3.png', 'text' => 'Шпильки'),
                4 => array('img' => 'uploads/s-catalog__block4.png', 'text' => 'Шайби'),
                5 => array('img' => 'uploads/s-catalog__block5.png', 'text' => 'Саморізи'),
                6 => array('img' => 'uploads/s-catalog__block6.png', 'text' => 'Дюбеля'),
                7 => array('img' => 'uploads/s-catalog__block7.png', 'text' => 'Гайки'),
                8 => array('img' => 'uploads/s-catalog__block8.png', 'text' => 'Заклепка'),
                9 => array('img' => 'uploads/s-catalog__block9.png', 'text' => 'Анкера'),
                10 => array('img' => 'uploads/s-catalog__block10.png', 'text' => 'Такелаж'),
            );
						
            foreach ($catalog as $item) { ?>
                <div class="col-lg-3 col-6 s-catalog__mt">
                    <?php include '_blocks/s-catalog__block.php'; ?>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<section class="s-recomendation-slider pt-l pb-m">
    <div class="container">
        <h1 class="h1-title h1-title--slider">Популярні товари</h1>

        <div class="splide recomendation-slider" aria-label="">
            <div class="h1-title__slider-progress">
                <div class="h1-title__slider-progress-bar"></div>
            </div>
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for ($i = 0; $i < 7; $i++) { ?>
                        <li class="splide__slide">
                            <?php include '_blocks/good-block.php'; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <script>
            var mainSlider = new Splide('.recomendation-slider', {
                perPage: 4,
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
    </div>
</section>