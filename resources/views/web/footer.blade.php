<footer class="site-footer-one">
    <div class="site-footer-one__top">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget-one__about">
                        <div class="footer-widget-one__about-logo">
                            <a href="{{ route('web.index') }}"><img src="{{ asset('assets/images/resources/footer-logo.png') }}" alt=""></a>
                        </div>
                        <p class="footer-widget-one__about-text">
                            CareNow HealthFoundation Inc. is a non-profit organization dedicated to improving the health and well-being of communities globally.
                        </p>
                        <ul class="list-unstyled footer-widget-one__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-place"></span>
                                </div>
                                <div class="text">
                                    <p>{{ config('app.address') }}, {{config('app.city')}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="text">
                                    <p><a href="tel:{{ config('app.phone') }}">+{{ config('app.phone') }}</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget-one__gallery clearfix">
                        <h3 class="footer-widget-one__title">Gallery</h3>
                        <ul class="footer-widget-one__gallery-list list-unstyled clearfix">
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-1.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-2.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-3.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-4.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-5.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-6.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-7.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-8.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__gallery-img">
                                    <img src="{{ asset('assets/images/resources/footer-widget-one-gallery-9.jpg') }}" alt="">
                                    <a href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget-one__latest-works clearfix">
                        <h3 class="footer-widget-one__title">Latest News</h3>
                        <ul class="footer-widget-one__latest-works-list list-unstyled clearfix">
                            <li>
                                <div class="footer-widget-one__latest-works-content">
                                    <h4 class="footer-widget-one__latest-works-title">
                                        <a href="#">Change your Life Through Education</a>
                                    </h4>
                                    <p class="footer-widget-one__latest-works-date">
                                        July 29, 20222
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-one__latest-works-content">
                                    <h4 class="footer-widget-one__latest-works-title">
                                        <a href="#">Donate your woolens this winter</a>
                                    </h4>
                                    <p class="footer-widget-one__latest-works-date">
                                        July 29, 20222
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget-one__twitter-feed clearfix">
                        <h3 class="footer-widget-one__title">Twitter Feed</h3>
                        <div class="owl-carousel owl-theme thm-owl__carousel footer-widget-one__twitter-feed-content" data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": true,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "991": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>
                            <div class="footer-widget-one__twitter-feed-single">
                                <p class="footer-widget-one__twitter-feed-text">Lorem ipsum is simply free text
                                    dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt <a href="#">http://t.twitter.com</a></p>
                                <div class="footer-widget-one__twitter-feed-bottom">
                                    <div class="footer-widget-one__twitter-feed-icon">
                                        <span class="fab fa-twitter"></span>
                                    </div>
                                    <div class="footer-widget-one__twitter-feed-details">
                                        <h5 class="footer-widget-one__twitter-feed-name">John Smith
                                            <span>@unicktheme</span>
                                        </h5>
                                        <p class="footer-widget-one__twitter-feed-time">18 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-widget-one__twitter-feed-single">
                                <p class="footer-widget-one__twitter-feed-text">Lorem ipsum is simply free text
                                    dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt <a href="#">http://t.twitter.com</a></p>
                                <div class="footer-widget-one__twitter-feed-bottom">
                                    <div class="footer-widget-one__twitter-feed-icon">
                                        <span class="fab fa-twitter"></span>
                                    </div>
                                    <div class="footer-widget-one__twitter-feed-details">
                                        <h5 class="footer-widget-one__twitter-feed-name">Kavin Smith
                                            <span>@unicktheme</span>
                                        </h5>
                                        <p class="footer-widget-one__twitter-feed-time">18 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-widget-one__twitter-feed-single">
                                <p class="footer-widget-one__twitter-feed-text">Lorem ipsum is simply free text
                                    dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt <a href="#">http://t.twitter.com</a></p>
                                <div class="footer-widget-one__twitter-feed-bottom">
                                    <div class="footer-widget-one__twitter-feed-icon">
                                        <span class="fab fa-twitter"></span>
                                    </div>
                                    <div class="footer-widget-one__twitter-feed-details">
                                        <h5 class="footer-widget-one__twitter-feed-name">Sara Albart
                                            <span>@unicktheme</span>
                                        </h5>
                                        <p class="footer-widget-one__twitter-feed-time">18 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="site-footer__bottom-inner">
                <p class="site-footer__bottom-text">© {{ date('Y') }} Copyright by <a href="#">{{ config('app.name') }}</a></p>
            </div>
        </div>
    </div>
</footer>