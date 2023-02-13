<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 5000
                }}'>

        <div class="swiper-wrapper">

            <!--Start Swiper Slide Single-->
            <div class="swiper-slide">
                @php( $img_bg2 = asset('assets/images/backgrounds/main-slider-1-3.jpg'))
                <div class="image-layer" style="background-image: url('{{ $img_bg2 }}');"></div>
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3 zoominout"></div>
                <div class="main-slider-shape-4 zoominout-2"></div>
                <div class="main-slider-shape-5">
                    <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>Give the <span>Poor</span> Help <br> for Families.</h2>
                                <p>There are many variations of passages of Lorem Ipsum Fasts by <br> injected
                                    humour, or randomised words which... </p>
                                <a href="about.html" class="thm-btn main-slider__btn">Leran More</a>
                                <div class="main-slider-arrow">
                                    <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" class="float-bob-x" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Swiper Slide Single-->

            <!--Start Swiper Slide Single-->
            <div class="swiper-slide">
                @php( $img_bg1 = asset('assets/images/backgrounds/main-slider-1-3.jpg'))
                <div class="image-layer" style="background-image: url('{{ $img_bg1 }}');"></div>
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3 zoominout"></div>
                <div class="main-slider-shape-4 zoominout-2"></div>
                <div class="main-slider-shape-5">
                    <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>Lets <span>Chenge</span> The World <br> With Humanity.</h2>
                                <p>There are many variations of passages of Lorem Ipsum Fasts by <br> injected
                                    humour, or randomised words which... </p>
                                <a href="about.html" class="thm-btn main-slider__btn">Leran More</a>
                                <div class="main-slider-arrow">
                                    <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" class="float-bob-x" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Swiper Slide Single-->

            <!--Start Swiper Slide Single-->
            <div class="swiper-slide">
                @php( $img_bg = asset('assets/images/backgrounds/main-slider-1-3.jpg'))
                <div class="image-layer" style="background-image: url('{{ $img_bg }}');"></div>
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3 zoominout"></div>
                <div class="main-slider-shape-4 zoominout-2"></div>
                <div class="main-slider-shape-5">
                    <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>Give the <span>Poor</span> Help <br> for Families.</h2>
                                <p>There are many variations of passages of Lorem Ipsum Fasts by <br> injected
                                    humour, or randomised words which... </p>
                                <a href="about.html" class="thm-btn main-slider__btn">Leran More</a>
                                <div class="main-slider-arrow">
                                    <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" class="float-bob-x" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Swiper Slide Single-->

        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>

        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="fa fa-long-arrow-alt-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="fa fa-long-arrow-alt-right"></i>
            </div>
        </div>

    </div>
</section>