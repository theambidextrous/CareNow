<style>
    .main-header__top-address li+li {
        margin-left: 20px;
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
                        <li><a href="#">Help Someone</a></li>
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
                        <a href="index.html"><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="main-menu-wrapper__right">
                    <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="dropdown current">
                                <a href="index.html">Home</a>
                                <ul>
                                    <li>
                                        <a href="index.html">Home One</a>
                                    </li>
                                    <li><a href="index2.html">Home Two</a></li>
                                    <li><a href="index3.html">Home Three</a></li>
                                    <li class="dropdown">
                                        <a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index.html">Header One</a></li>
                                            <li><a href="index2.html">Header Two</a></li>
                                            <li><a href="index3.html">Header Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li><a href="projects.html">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                    <li><a href="testimonials.html">Testimonial</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Donation</a>
                                <ul>
                                    <li><a href="donation.html">Donation</a></li>
                                    <li><a href="donation-list.html">Donation List</a></li>
                                    <li><a href="donation-details.html">Donation Details</a></li>
                                    <li><a href="donate-now.html">Donate Now</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="events.html">Events</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog-v-1.html">Blog V-1</a></li>
                                    <li><a href="blog-v-2.html">Blog V-2</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <a href="donate-now.html" class="thm-btn main-header__btn">Donate Now</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>