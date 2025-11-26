<!-- FOOTER AREA START -->
<footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-1 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="">
                            <a href="{{ route('home') }}" class="d-block">
                                @if(get_setting('footer_logo') != null)
                                    <h4 class="footer-title">
                                        <img class="lazyload h-50px" 
                                             src="{{ static_asset('assets/img/logo1.png') }}" 
                                             data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" 
                                             alt="{{ env('APP_NAME') }}" 
                                             height="50">
                                        {{ get_setting('footer_title') != null ? get_setting('footer_title') : 'Fruikinz' }}
                                    </h4>
                                @else
                                    <h4 class="footer-title">
                                        <img class="lazyload h-50px" 
                                             src="{{ static_asset('assets/img/logo1.png') }}" 
                                             data-src="{{ static_asset('assets/img/logo.png') }}" 
                                             alt="{{ env('APP_NAME') }}" 
                                             height="50">
                                        {{ get_setting('footer_title') != null ? get_setting('footer_title') : 'Fruikinz' }}
                                    </h4>
                                @endif
                            </a>
                            
                        </div>


                @if ( get_setting('footer_description') != null)
                        <div class="mb-4 fw-13 text-gray-dark text-justify">
                            {{ get_setting('footer_description')}}
                        </div>
                @endif

                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p  class="fs-13 text-gray-darkt">{{ get_setting('contact_address',null,App::getLocale()) }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p  class="fs-13 text-gray-darkt">{{ get_setting('contact_phone') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p>
                                            <a href="mailto:{{ get_setting('contact_email') }}" class="fs-13 text-gray-darkt hov-text-primary">{{ get_setting('contact_email')  }}</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media mt-20">
                            @if ( get_setting('show_social_links') )
                                <h5 class="fs-14 fw-700 text-secondary text-uppercase mt-3 mt-lg-0">{{ translate('Follow Us') }}</h5>

                                        <ul>
                                            @if (!empty(get_setting('facebook_link')))
                                                <li><a href="{{ get_setting('facebook_link') }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            @endif
                                            @if (!empty(get_setting('twitter_link')))
                                                <li><a href="{{ get_setting('twitter_link') }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            @endif
                                            @if (!empty(get_setting('instagram_link')))
                                                <li><a href="{{ get_setting('instagram_link') }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            @endif
                                            @if (!empty(get_setting('youtube_link')))
                                                <li><a href="{{ get_setting('youtube_link') }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>

                                            @endif
                                            @if (!empty(get_setting('linkedin_link')))
                                                <li><a href="{{ get_setting('linkedin_link') }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                            @endif
                                        </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Company</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a  href="{{ route('about') }}">About Us</a></li>
                                <li><a href="javascript:void(0);">News & Blog</a></li>
                                <li><a href="javascript:void(0);">Products</a></li>
                                <li><a href="javascript:void(0);">FAQs</a></li>
                                <li><a href="{{ route('contact.view') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Quick Link</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="javascript:void(0);">Our Story</a></li>
                                <li><a href="javascript:void(0);">Commitment</a></li>
                                <li><a href="javascript:void(0);">Careers</a></li>
                                <li><a href="javascript:void(0);">Link 1</a></li>
                                <li><a href="javascript:void(0);">Link 2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-widget footer-newsletter-widget">
                        <h4 class="footer-title">Newsletter</h4>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <div class="footer-newsletter">
                            <div id="mc_embed_signup">
                                <form  action="{{ route('subscribers.store') }}"method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    @csrf
                                    <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group">
                                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email*">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dde0a42ff09e8d43cad40dc82_72d274d15d" tabindex="-1" value=""></div>
                                        <div class="clear">
                                            <div class="btn-wrapper">
                                                <button class="theme-btn-1 btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"><i class="fas fa-location-arrow"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- <h4 class="footer-title">Newsletter</h4>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <div class="footer-newsletter">
                            <div id="mc_embed_signup">
                                <form action="https://gmail.us5.list-manage.com/subscribe/post?u=dde0a42ff09e8d43cad40dc82&amp;id=72d274d15d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group">
                                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email*">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dde0a42ff09e8d43cad40dc82_72d274d15d" tabindex="-1" value=""></div>
                                        <div class="clear">
                                            <div class="btn-wrapper">
                                                <button class="theme-btn-1 btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"><i class="fas fa-location-arrow"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        {{-- <img src="{{ static_asset('assets/img/icons/payment-4.png')}}" alt="Payment Image"> --}}
                        <!-- Payment Method Images -->
                        <div class=" mb-4 mb-lg-0">
                            <div class="text-center text-lg-right">
                                <ul class="list-inline mb-0">
                                    @if ( get_setting('payment_method_images') !=  null )
                                    <h5 class="mt-30">We Accept</h5>
                                        @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                            <li class="mr-3">
                                                <img src="{{ uploaded_asset($value) }}"  alt="{{ translate('payment_method') }}">
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-2  ltn__border-top-2--- plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <!-- Copyright -->
                <div class="text-center text-white text-lg-left fs-14" current-verison="{{get_setting("current_version")}}">
                    {!! get_setting('frontend_copyright_text', null, App::getLocale()) !!}
                </div>
                        {{-- <p>All Rights Reserved @ Fruikinz <span class="current-year"></span></p> --}}
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-end">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Claim</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER AREA END -->