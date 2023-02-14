<section class="support-us">
    @php( $bg = asset('assets/images/backgrounds/support-us-bg.jpg') )
    <div class="support-us-bg" style="background-image: url('{{ $bg }}');">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div class="support-us__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="support-us__content-box">
                        <h3 class="support-us__title">Contact Us</h3>
                        <p class="support-us__text">Lorem ipsum dolor sit amet, consectetur nod adipisicing elit
                            sed do eiusmod tempor</p>
                        <form id="support-us__donate-form" name="donate_form" action="#" method="post">
                            <div class="custon-box">
                                <input type="text" id="donate-amount-5" placeholder="Custom" name="donate-amount" />
                                <div class="icon"><i class="fa fa-dollar-sign" aria-hidden="true"></i></div>
                            </div>
                            <ul class="list-unstyled support-us__donate-form-select-box">
                                <li>
                                    <input type="radio" id="donate-amount-1" name="donate-amount" />
                                    <label for="donate-amount-1" data-amount="25">$25</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                                    <label for="donate-amount-2" data-amount="50">$50</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-3" name="donate-amount" />
                                    <label for="donate-amount-3" data-amount="100">$100</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-4" name="donate-amount" />
                                    <label for="donate-amount-4" data-amount="500">$500</label>
                                </li>
                            </ul>
                            <div class="support-us-button-box text-center">
                                <button class="thm-btn support-us__btn" type="submit">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="support-us__right">
                    <div class="support-us__right-content">
                        <h3 class="support-us__right-content-title">10 Surgeons <br> 22 Healed</h3>
                        <p class="support-us__right-content-text">[New Professional every year]</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>