@extends('frontend.layouts.app')

@section('content')
<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3 section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        @php
            $decoded_slider_images = json_decode(get_setting('home_slider_images', null, $lang), true);
            $sliders = get_slider_images($decoded_slider_images);
            $home_slider_links = json_decode(get_setting('home_slider_links', null, $lang), true) ?? [];
            $home_slider_titles = json_decode(get_setting('home_slider_titles', null, $lang), true) ?? [];
            $home_slider_descriptions = json_decode(get_setting('home_slider_descriptions', null, $lang), true) ?? [];
        @endphp

        @foreach ($sliders as $key => $slider)
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title animated">
                                        <img src="{{ static_asset('assets/img/icons/icon-img/1.png') }}" alt="#"> 100% Genuine Products
                                    </h6>
                                    <h1 class="slide-title animated">
                                        {{ $home_slider_titles[$key] ?? 'Crispy, Delicious, Natural!' }}
                                    </h1>
                                    <div class="slide-brief animated">
                                        <p>
                                            {{ $home_slider_descriptions[$key] ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.' }}
                                        </p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="{{ $home_slider_links[$key] ?? '#' }}" class="theme-btn-1 btn btn-effect-1 text-uppercase">Explore Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img animated">
                                <img src="{{ $slider ? my_asset($slider->file_name) : static_asset('assets/img/placeholder.jpg') }}" alt="Slider Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        @endforeach
    </div>
</div>


{{-- <div class="ltn__slider-area ltn__slider-3 section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-video mb-50 d-none">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <h6 class="slide-sub-title animated"><img src="{{ static_asset('assets/img/icons/icon-img/1.png')}}" alt="#"> 100% genuine Products</h6>
                                    <h1 class="slide-title animated ">Crispy, Delicious, Natural!</h1>
                                    <div class="slide-brief animated">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Explore Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img animated">
                                <img src="{{ static_asset('assets/img/slider/s3.png') }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        
    </div>
</div> --}}
<!-- SLIDER AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
@php
    $second_section_images = json_decode(get_setting('second_section_images', null, $lang), true);
    $second_image = get_slider_images($second_section_images);
    $second_section_links = json_decode(get_setting('second_section_links', null, $lang), true);
    $second_section_title1 = get_setting('second_section_title1', null, $lang);
    $second_section_description1 = get_setting('second_section_description1', null, $lang);
    $second_section_title2 = get_setting('second_section_title2', null, $lang);
    $second_section_description2 = get_setting('second_section_description2', null, $lang);
    $second_section_title3 = get_setting('second_section_title3', null, $lang);
    $second_section_description3 = get_setting('second_section_description3', null, $lang);
    $second_section_title4 = get_setting('second_section_title4', null, $lang);
    $second_section_description4 = get_setting('second_section_description4', null, $lang);
@endphp

<div class="container-fluid" style="margin-top: 200px; margin-bottom:200px">
    <div class="row">
        <div class="col-lg-12">
            <div class="jackfruit-container">
                <div class="jackfruit-center p-5">
                    @php
                    $default_image = static_asset('assets/img/jf.png');
                    $jackfruit_image = $second_image && isset($second_image[0]->file_name)
                        ? my_asset($second_image[0]->file_name)
                        : $default_image;
                @endphp
                <img src="{{ $jackfruit_image }}" alt="jackfruit-img" class="jackfruit-img p-4">
                    
                    {{-- <img src="{{ static_asset('assets/img/jc.png') }}" alt="Jackfruit" class="jackfruit-img"> --}}
                </div>

                <!-- Feature 1 -->
                <div class="feature-item feature-1">
                    <div class="ltn__feature-icon">
                        <img src="{{ static_asset('assets/img/icons/icon-img/11.png')}}" alt="#" class="feature-icon">
                        <h4 class="feature-title">{{ $second_section_title1 ?? "100% Jackfruit" }}</h4>
                    </div>
                    <div class="ltn__feature-info">
                        <p class="feature-info">{{ $second_section_description1 ?? "Fresh, versatile, and perfect for every meal!" }}</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="feature-item feature-2">
                    <div class="ltn__feature-icon">
                        <img src="{{ static_asset('assets/img/icons/icon-img/12.png')}}" alt="#" class="feature-icon">
                        <h4 class="feature-title">{{ $second_section_title2 ?? "No Artificial Flavors"}}</h4>
                    </div>
                    <div class="ltn__feature-info">
                        <p class="feature-info">{{ $second_section_description2 ?? "Pure taste, just as nature intended."}}</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="feature-item feature-3">
                    <div class="ltn__feature-icon">
                        <img src="{{ static_asset('assets/img/icons/icon-img/13.png')}}" alt="#" class="feature-icon">
                        <h4 class="feature-title">{{ $second_section_title3 ?? "No Artificial Colors" }}</h4>
                    </div>
                    <div class="ltn__feature-info">
                        <p class="feature-info">{{ $second_section_description3 ?? "Natural goodness in every bite."}}</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="feature-item feature-4">
                    <div class="ltn__feature-icon">
                        <img src="{{ static_asset('assets/img/icons/icon-img/14.png')}}" alt="#" class="feature-icon">
                        <h4 class="feature-title">{{ $second_section_title4 ?? "No Preservatives" }}</h4>
                    </div>
                    <div class="ltn__feature-info">
                        <p class="feature-info">{{ $second_section_description4 ?? "Freshness you can trust forever." }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- ABOUT US AREA START -->
@php
    $about_shop_section_images = json_decode(get_setting('about_shop_section_images', null, $lang), true);

    $about_images = get_slider_images($about_shop_section_images);
    $about_shop_section_links = json_decode(get_setting('about_shop_section_links', null, $lang), true);
    $about_shop_section_title = get_setting('about_shop_section_title', null, $lang);
    $about_shop_section_description1 = get_setting('about_shop_section_description1', null, $lang);
    $about_shop_section_description2 = get_setting('about_shop_section_description2', null, $lang);
@endphp

<div class="ltn__about-us-area mt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                  
                     @php
                        $default_image = static_asset('assets/img/slider/s3.png');
                        $about_image = $about_images && isset($about_images[0]->file_name)
                            ? my_asset($about_images[0]->file_name)
                            : $default_image;
                    @endphp
                <img src="{{ $about_image }}" alt="about-img" >
                    {{-- <img src="{{ static_asset('assets/img/slider/s3.png') }}" alt="About Us Image"> --}}
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Know More About Shop</h6>
                        <h1 class="section-title">{{ $about_shop_section_title ?? "Farm-Fresh & Naturally Delicious"}}</h1>
                        <p> {{ $about_shop_section_description1 ?? "Experience the pure taste of carefully selected, sustainably grown ingredients that bring authentic flavors to your table." }}</p>
                        <p> {{ $about_shop_section_description2 ?? "We're a community of passionate local producers and artisanal sellers committed to quality and sustainability. Our marketplace brings together mindful farmers, crafters, and food artisans with customers who value authentic, ethically sourced products."}}</p>
                        <div class="btn-wrapper animated">
                            <a href="{{ route('story') }}" class="theme-btn-1 btn btn-effect-1 text-uppercase">Our Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->


    {{-- @if (is_array(get_featured_products()) && count(get_featured_products()) > 0) --}}
        <div class="col-lg-12" style="margin-top: 150px;">
            <div class="section-title-area ltn__section-title-2 text-center">
                <h1 class="section-title">Our Products</h1>
            </div>
        </div>
        
        <div class="row ltn__category-slider-active slick-slide-arrow-1 product-carousel" 
            data-items="6" 
            data-xl-items="5" 
            data-lg-items="4"  
            data-md-items="3" 
            data-sm-items="2" 
            data-xs-items="2" 
            data-arrows="true" 
            data-infinite="false">
            @foreach (get_featured_products() as $product)
                @php
                    $product_url = $product->auction_product 
                                    ? route('auction-product', $product->slug) 
                                    : route('product', $product->slug);
                @endphp

                <div class="col-lg-12">
                    <div class="ltn__blog-item slider-item">
                       
                        <a href="{{ $product_url }}">
                            <img class="lazyload mx-auto img-fit has-transition"
                                src="{{ uploaded_asset($product->thumbnail_img) }}"
                                 alt="{{ $product->getTranslation('name') }}" 
                                 title="{{ $product->getTranslation('name') }}"
                                 {{-- onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';" --}}
                                 >
                        </a>
                        
                        @php
                            $fallbackColors = ['tangy-chilly', 'sour-cream', 'bbq', 'cheddar-cheese'];
                            $productIndex = $loop->index ?? 0;
                            $fallbackColor = $fallbackColors[$productIndex % count($fallbackColors)];
                            // Safely determine the color
                            $productColor = (is_array($product->colors) && !empty($product->colors)) ? $product->colors[0] : $fallbackColor;
                        @endphp

                        <style>
                            .description  {
                                padding:5px 10px!important;
                            }
                            .description span {
                                display: inline-block;
                                font-size: 16px!important;
                                font-weight: bold;
                                /* font-family: 'Pacifico', cursive; */
                                font-family: var(--ltn__heading-font)!important;
                                text-transform: uppercase;
                                letter-spacing: 1px;
                                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                                padding:5px 2px!important;
                            }
                        </style>

                        <div 
                            class="description {{ $productColor }}" 
                            style="background-color: {{ $productColor }} !important; border-color: rgba(255, 204, 51, 0.982);">
                            @if ($product->getTranslation('name'))
                                <span>{{ $product->getTranslation('name') }}</span>
                            @endif
                        </div>



                    </div>
                </div>
            @endforeach
        </div>
    {{-- @endif --}}

        {{-- <div class="col-lg-12">
            <div class="ltn__blog-item slider-item">
                <img src="{{ static_asset('assets/img/banner/flavour2.png') }}" alt="" />
                <div class="description tangy-chilly">
                    <span>Tangy Chilly</span>
                </div>
            </div>
        </div> --}}
        
    </div>

<!-- PRODUCT AREA START (product-item-3) -->
@if (count(get_featured_products()) > 0)
    <div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">{{ __('Featured Products') }}</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__tab-product-slider-one-active slick-arrow-1"  
                data-items="6" 
                data-xl-items="5" 
                data-lg-items="4"  
                data-md-items="3" 
                data-sm-items="2" 
                data-xs-items="2" 
                data-arrows='true' 
                data-infinite='false'>
                @foreach (get_featured_products() as $product)
                @php
                    $product_url = $product->auction_product == 1 
                                ? route('auction-product', $product->slug) 
                                : route('product', $product->slug);
                @endphp
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-left">
                        <!-- Image -->
                        
                        <div class="product-img">
                            <a href="{{ $product_url }}">
                                    <img class="lazyload mx-auto img-fit has-transition"
                                        src="{{ uploaded_asset($product->thumbnail_img) }}" style="height:266px!important"
                                        alt="{{ $product->getTranslation('name') }}" 
                                        title="{{ $product->getTranslation('name') }}"
                                        {{-- onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';" --}}
                                        >
                                </a>
                                {{-- <img src="{{ static_asset('assets/img/banner/bg1.png')}}" alt="{{ $product->getTranslation('name') }}"> --}}
                            
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">{{ __('New') }}</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="{{ __('Quick View') }}" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="{{ __('Add to Cart') }}" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="{{ __('Wishlist') }}" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                <a href="{{ $product_url }}" class="d-block text-reset hov-text-primary"
                                    title="{{ $product->getTranslation('name') }}">{{ $product->getTranslation('name') }}</a>
                            </h3>
                            <!-- Discount Tag -->
                            {{-- @if (discount_in_percentage($product) > 0)
                            <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center"
                                style="padding-top:2px;padding-bottom:2px;">
                                -{{ discount_in_percentage($product) }}%
                            </span>
                            @endif
                            <!-- Wholesale Tag -->
                            @if ($product->wholesale_product)
                            <span class="absolute-top-left fs-11 text-white fw-700 px-2 lh-1-8 ml-1 mt-1"
                                style="background-color: #455a64; @if (discount_in_percentage($product) > 0) top:25px; @endif">
                                {{ __('Wholesale') }}
                            </span>
                            @endif
                            <div class="product-price">
                                <span>{{ single_price($product->unit_price) }}</span>
                                @if ($product->discount > 0)
                                <del>{{ single_price($product->unit_price + $product->discount) }}</del>
                                @endif
                            </div> --}}
                        </div>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>
    </div>
@endif

<!-- PRODUCT AREA END -->

<!-- COUNTDOWN AREA START -->
<div class="ltn__call-to-action-area ltn__call-to-action-4 section-bg-1 pt-110 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ static_asset('assets/img/banner/s3.png')}}" alt="#" >
            </div>
            <div class="col-lg-7">
                <div class="call-to-action-inner call-to-action-inner-4 text-color-white--- text-center---">
                    <div class="section-title-area ltn__section-title-2 text-center---">
                        <h6 class="ltn__secondary-color">Todays Hot Deals</h6>
                        <h1 class="section-title">Original Frukinz <br> Combo Package</h1>
                    </div>
                    <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="2024/12/28"></div>
                    <div class="btn-wrapper animated">
                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTDOWN AREA END -->



<!-- VIDEO AREA START -->
<div class="ltn__video-popup-area ltn__video-popup-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__video-bg-img ltn__video-popup-height-600 bg-overlay-black-10-- bg-image" data-bg="{{ static_asset('assets/img/bg/15.jpg')}}">
                    <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VIDEO AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-4) -->
<div class="ltn__testimonial-area section-bg-1 pt-290 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Testimonials</h6>
                    <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="{{ static_asset('assets/img/testimonial/6.jpg')}}" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="{{ static_asset('assets/img/testimonial/7.jpg')}}" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="{{ static_asset('assets/img/testimonial/1.jpg')}}" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="{{ static_asset('assets/img/testimonial/2.jpg')}}" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="{{ static_asset('assets/img/testimonial/5.jpg')}}" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <h4>Rosalina D. William</h4>
                        <h6>Founder</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

<!-- BLOG AREA START (blog-3) -->
@if (count($recent_blogs) > 0)
    <div class="ltn__blog-area pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Leatest Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                @foreach($recent_blogs as $recent_blog)
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url("blog").'/'. $recent_blog->slug }}" class="text-reset d-block overflow-hidden size-80px size-xl-90px mr-2">
                                @if($recent_blog->banner !== null)
                                    <img src="{{ uploaded_asset($recent_blog->banner) }}"
                                        data-src="{{ uploaded_asset($recent_blog->banner) }}"
                                        alt="{{ $recent_blog->title }}" style="height: 260px; width: 100%;"
                                        class="img-fit lazyload  has-transition">
                                @else
                                    <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                        data-src="{{ uploaded_asset($recent_blog->banner) }}"
                                        alt="{{ $recent_blog->title }}" style="height: 260px; width: 100%;"
                                        class="img-fit lazyload  has-transition">
                                @endif
                            </a>
                            {{-- <a href="blog-details.html"><img src="{{ static_asset('assets/img/blog/1.jpg')}}" alt="#"></a> --}}
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>

                                    @if($recent_blog->category != null)
                                        <li class="ltn__blog-tags">
                                            <a href="#"><i class="fas fa-tags"></i>{{ $recent_blog->category->category_name }}</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            {{-- <h3 class="ltn__blog-title"><a href="blog-details.html">Common Engine Oil Problems and Solutions</a></h3> --}}
                            <h3 class="fs-14 fw-700 mb-2 mb-xl-3 h-35px text-truncate-2">
                                <a href="{{ url("blog").'/'. $recent_blog->slug }}" class="text-reset hov-text-primary" title="{{ $recent_blog->title }}">
                                    {{ $recent_blog->title }}
                                </a>
                            </h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{ date('M d, Y',strtotime($recent_blog->created_at)) }}</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url("blog").'/'. $recent_blog->slug }}" >Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--  -->
            </div>
        </div>
    </div>
@endif
<!-- BLOG AREA END -->


@endsection