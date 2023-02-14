@extends('web.layout')

@section('header')
@include('web.header', ['active' => 'about'])
@endsection

@section('slider')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>About us</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ config('web.index') }}">Home</a></li>
                <li><span>/</span></li>
                <li class="active">About</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->
@endsection

@section('home_about')
<style>
    .about-custom {
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
                        <p class="about-one__text">We believe that access to quality healthcare is a fundamental human right and we are committed to working with local partners to ensure that communities have the resources and support they need to live healthy lives. Our programs focus on preventative care, disease management, and community health education. We also provide emergency medical assistance in times of crisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Mission visiob -->
<section class="counter-one">
    @php( $img_bg1 = asset('assets/images/backgrounds/main-slider-1-2.jpg'))
    <div class="counter-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url('{{ $img_bg1 }}');"></div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">What drives us</span>
            <h2 class="section-title__title">The mission, vission & <br> Core values.</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <!--Counter One Single-->
                <div class="counter-one__single">
                    <div class="counter-one__content">
                        <h3 class="oddometer" data-count="">Mission</h3>
                        <span class="counter-one__letter"></span>
                        <p class="counter-one__text">Improve livelihood of persons in vulnerable regions</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                <!--Counter One Single-->
                <div class="counter-one__single">
                    <div class="counter-one__content">
                        <h3 class="oddometer" data-count="">Vission</h3>
                        <span class="counter-one__letter"></span>
                        <p class="counter-one__text">Improve accessiblity to clean water, food, health and education</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                <!--Counter One Single-->
                <div class="counter-one__single">
                    <div class="counter-one__content">
                        <h3 class="oddometer" data-count="">Values</h3>
                        <span class="counter-one__letter"></span>
                        <p class="counter-one__text">Compassion, integrity, honest, empathy and leading by example.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter One End-->
@endsection

@section('footer')
@include('web.footer')
@endsection