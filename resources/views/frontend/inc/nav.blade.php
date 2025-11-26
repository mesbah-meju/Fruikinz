<!-- HEADER AREA START (header-5) -->
<style>
    .ltn__secondary-color:hover {
        color: #f7a412 !important;
    }
</style>
<header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="locations.html" class="ltn__secondary-color"><i class="icon-placeholder"></i> {{ get_setting('contact_address',null,App::getLocale()) }}</a></li>
                            <li><a href="mailto:{{ get_setting('contact_email') }}" class="fs-13 ltn__secondary-color hov-text-dark"><i class="icon-mail"></i>{{ get_setting('contact_email')  }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right  text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            @if (!empty(get_setting('facebook_link')))
                                                 <li><a href="{{ get_setting('facebook_link') }}" title="Facebook"><i class="fab fa-facebook-f ltn__secondary-color"></i></a></li>
                                            @endif
                                            
                                            @if (!empty(get_setting('twitter_link')))
                                                <li><a href="{{ get_setting('twitter_link') }}"title="Twitter"><i class="fab fa-twitter ltn__secondary-color"></i></a></li>
                                            @endif
                                            @if (!empty(get_setting('instagram_link')))
                                                  <li><a href="{{ get_setting('instagram_link') }}" title="Instagram"><i class="fab fa-instagram ltn__secondary-color"></i></a></li>
                                            @endif


                                            @if (!empty(get_setting('linkedin_link')))
                                             <li><a href="{{ get_setting('linkedin_link') }}" title="Linkedin"><i class="fab fa-linkedin ltn__secondary-color"></i></a></li>
                                            @endif
                                           
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option sticky-active-into-mobile--- plr--9---">
        <div class="container">
            <div class="row">
                <div class="col ltn__header-options ltn__header-options-2">
                    <div class="mobile-menu-toggle">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            {{-- <a href="{{route('home')}}"><img src="{{ static_asset('assets/img/logo1.png')}}" alt="Logo" style="width: 150px"></a> --}}
                            <a class="d-block py-20px mr-3 ml-0" href="{{ route('home') }}">
                                @php
                                    $header_logo = get_setting('header_logo');
                                @endphp
                                @if ($header_logo != null)
                                    <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}"
                                    style="width: 150px">
                                @else
                                    <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}"
                                    style="width: 150px">
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white---">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li class="special-link"><a href="{{route('quote.view')}}">GET A QUOTE</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->

<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="{{ route('home') }}"><img src="{{ static_asset('assets/img/product/1.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Red Hot Tomato</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ static_asset('assets/img/product/2.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Vegetables Juices</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ static_asset('assets/img/product/3.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Orange Sliced Mix</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ static_asset('assets/img/product/4.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Orange Fresh Juice</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <h4 class="m-0"><a href="{{ route('home') }}"><img src="{{ static_asset('assets/img/logo1.png') }}" alt="Logo" style="width: 50px"></a> Fruikinz</h4>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu">
           
            <ul class="">
                @if (get_setting('header_menu_labels') != null)
                    @foreach (json_decode(get_setting('header_menu_labels'), true) as $key => $value)
                        <li class="">
                            <a href="{{ json_decode(get_setting('header_menu_links'), true)[$key] }}"
                                class="fs-13 px-3 py-3 d-inline-block fw-700  header_menu_links hov-bg-black-10
                            @if (url()->current() == json_decode(get_setting('header_menu_links'), true)[$key]) active @endif">
                                {{ translate($value) }}
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
            
        </div>
        <div class="ltn__social-media-2 mt-4">
            <ul>
                @if (!empty(get_setting('facebook_link')))
                    <li><a href="{{ get_setting('facebook_link') }}"  title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                @endif
                @if (!empty(get_setting('twitter_link')))
                    <li><a href="{{ get_setting('twitter_link') }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                @endif
                @if (!empty(get_setting('instagram_link')))
                    <li><a href="{{ get_setting('instagram_link') }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                @endif
                @if (!empty(get_setting('linkedin_link')))
                    <li><a href="{{ get_setting('linkedin_link') }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                @endif

            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>