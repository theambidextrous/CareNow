<style>
    .about-custom {
        background-color: #e4eee3 !important;
        padding: 120px 0 90px;
        z-index: 1;
    }
</style>
<section class="about-one about-custom">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                        </div>
                        <div class="about-one__small-img wow zoomIn animated animated" data-wow-delay="500ms" data-wow-duration="2500ms">
                            <img src="{{ asset('assets/images/resources/about-one-small-img.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="about-one__right-content">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">About Us</span>
                            <h2 class="section-title__title">We Can Save More Lifes With Your Helping Hand.</h2>
                        </div>
                        <p class="about-one__text">CareNow HealthFoundation Inc. is a non-profit organization dedicated to improving the health and well-being of communities globally.</p>
                        <br>
                        <p class="about-one__text">Our mission is to provide access to quality healthcare services and promote health education to individuals and families, particularly those in underprivileged areas.</p>
                        <br>
                        <p class="about-one__text">We believe that access to quality healthcare is a fundamental human right and we are committed to working ...</p>
                        <br>
                        <div class="about-one__bottom-video-box">
                            <div class="about-one__btn-box">
                                <a href="{{ route('web.about') }}" class="thm-btn about-one__btn">About More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>