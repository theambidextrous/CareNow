<style>
    .main-header__top-address li+li {
        margin-left: 20px;
    }

    .main-menu-wrapper__logo {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .main-menu .main-menu__list>li {
        padding-top: 27px;
        padding-bottom: 27px;
    }

    .thm-btn {
        padding: 10px 30px 10px;
    }
</style>
<header class="main-header clearfix">
    <div class="main-header__top clearfix">
        <div class="container clearfix">
            <div class="main-header__top-inner clearfix">
                <div class="main-header__top-left">
                    <ul class="list-unstyled main-header__top-address">
                        <li>
                            <div class="icon">
                                <span class="icon-call"></span>
                            </div>
                            <div class="text">
                                <p><a href="tel:{{ config('app.phone') }}">+{{ config('app.phone') }}</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-envejlope"></span>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{ config('app.email') }}"></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-envelope"></span>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{ config('app.email') }}">Email us here</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-place"></span>
                            </div>
                            <div class="text">
                                <p>{{ config('app.address') }}, {{config('app.city')}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-header__top-right">
                    <ul class="list-unstyled main-header__top-right-content">
                        <li><a href="#">Login</a></li>
                        <!-- <li><a href="#">Help Someone</a></li> -->
                        <!-- <li><a href="#" class="search-toggler"> <i class="fa fa-search"></i> Search</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu clearfix">
        <div class="container clearfix">
            <div class="main-menu-wrapper clearfix">
                <div class="main-menu-wrapper__left">
                    <div class="main-menu-wrapper__logo">
                        <a href="{{ route('web.index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="main-menu-wrapper__right">
                    <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li><a class="{{ $active == 'home' ? 'current' : ''}}" href="{{ route('web.index') }}">Home</a></li>
                            <li><a class="{{ $active == 'about' ? 'current' : ''}}" href="{{ route('web.about') }}">About</a></li>
                            <li class="dropdown {{ $active == 'causes' ? 'current' : ''}}">
                                <a href="#">What we do</a>
                                <ul>
                                    <li><a href="{{ route('ta.health') }}">Health & Nutrition</a></li>
                                    <li><a href="{{ route('ta.agriculture') }}">Agriculture & Livelihood</a></li>
                                    <li><a href="{{ route('ta.education') }}">Education & Youth empowerment</a></li>
                                    <li><a href="{{ route('ta.energy') }}">Renewable energy</a></li>
                                    <li><a href="{{ route('ta.water') }}">Water & Sanitation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown {{ $active == 'locations' ? 'current' : ''}}">
                                <a href="#">Where we work</a>
                                <ul>
                                    <li><a href="#">Nairobi</a></li>
                                    <li><a href="#">Tana River</a></li>
                                    <li><a href="#">Garissa</a></li>
                                    <li><a href="#">Wajir</a></li>
                                    <li><a href="#">Mandera</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Photos & Videos</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                    <a href="#" class="thm-btn main-header__btn">Donate Now</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>