@extends('frontend.layouts.app')

@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="{{ static_asset('assets/img/banner/s3.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                        <h1 class="section-title white-color">About Us</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

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

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1 pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">//  features  //</h6>
                    <h1 class="section-title">Why Choose Us<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">
                            <span><img src="{{ static_asset('assets/img/icons/icon-img/13.png')}}" alt="#"></span>
                        </div>
                        <h3><a href="service-details.html">All Kind Brand</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">
                            <span><img src="{{ static_asset('assets/img/icons/icon-img/11.png')}}" alt="#"></span>
                        </div>
                        <h3><a href="service-details.html">Curated Products</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">
                            <span><img src="{{ static_asset('assets/img/icons/icon-img/12.png')}}" alt="#"></span>
                        </div>
                        <h3><a href="service-details.html">Pesticide Free Goods</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- TEAM AREA START (Team - 3) -->
@if (count($members) > 0)
    <div class="ltn__team-area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Team Member</h1>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center"> --}}
                <div class="row justify-content-center ltn__tab-product-slider-one-active slick-arrow-1"  
                data-items="6" 
                data-xl-items="5" 
                data-lg-items="4"  
                data-md-items="3" 
                data-sm-items="2" 
                data-xs-items="2" 
                data-arrows='true' 
                data-infinite='false'>
                @foreach ($members as $member)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="ltn__team-item">
                            <div class="team-img">
                                @if ($member->user->avatar_original != null)
                                            <img src="{{ $member->user->avatar_original}}"
                                                class="img-fit" alt="{{ translate('avatar') }}" style="height: 250px; width: 100%; padding: 10px;"
                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                        @else
                                            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image" alt="{{ translate('avatar') }}"
                                            style="height: 250px; width: 100%; padding: 10px;"
                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                        @endif
                                {{-- <img src="{{ uploaded_asset($member->avatar) }}" alt="Image"> --}}
                            </div>
                            <div class="team-info">
                                <h6 class="ltn__secondary-color">//  {{ $member->role->name }}  //</h6>
                                <h4><a href="team-details.html">{{ $member->user->name }}</a></h4>
                                <div class="ltn__social-media">
                                    <ul>
                                        @if ($member->facebook != null)
                                            <li><a href="{{ $member->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        @else
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if ($member->twitter != null)
                                            <li><a href="{{ $member->twitter }}"  target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        @else
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        @endif
                                        @if ($member->linkedin != null)
                                            <li><a href="{{ $member->linkedin }}"  target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                        @else
                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
        
            </div>
        </div>
    </div>
@endif
<!-- TEAM AREA END -->

<!-- CALL TO ACTION START (call-to-action-5) -->
<div class="call-to-action-area call-to-action-5 bg-image bg-overlay-theme-90 pt-40 pb-25 d-none" data-bg="img/bg/13.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-5 text-center">
                    <h2 class="white-color text-decoration">24/7 Availability, Make <a href="contact.html">An Appointment</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- PROGRESS BAR AREA START -->
<div class="ltn__progress-bar-area before-bg-right pt-115 pb-95 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ltn__progress-bar-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// skills</h6>
                        <h1 class="section-title">We Have A Skillest
                            Team Ever<span>.</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                    <div class="ltn__progress-bar-inner">
                        <div class="ltn__progress-bar-item">
                            <p>Car Repair</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 72%">
                                    <span>72%</span>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__progress-bar-item">
                            <p>Car Rental Service</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 74%">
                                    <span>74%</span>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__progress-bar-item">
                            <p>Car Cleaning & Parts</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 81%">
                                    <span>81%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30" data-bg="img/others/5.jpg')}}">
                    <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PROGRESS BAR AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-4) -->
<div class="ltn__testimonial-area section-bg-1 pt-115 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">//  Testimonials</h6>
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

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area pt-115 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color---">Some Questions</h1>
                </div>
            </div>
        </div>
        @php
            $faq_section_links = json_decode(get_setting('faq_section_links', null, $lang), true) ?? [];
            $faq_section_titles = json_decode(get_setting('faq_section_titles', null, $lang), true) ?? [];
            $faq_section_descriptions = json_decode(get_setting('faq_section_descriptions', null, $lang), true) ?? [];
        @endphp
        <div class="row">
            <div class="col-lg-6">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        @foreach($faq_section_titles as $index => $title)
                            <!-- card -->
                            <div class="card">
                                <h6 class="ltn__card-title {{ $loop->first ? '' : 'collapsed' }}" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#faq-item-2-{{ $index }}" 
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                                    {{ $title }}
                                </h6>
                                <div id="faq-item-2-{{ $index }}" 
                                    class="collapse {{ $loop->first ? 'show' : '' }}" 
                                    data-parent="#accordion_2">
                                    <div class="card-body">
                                        @if(isset($faq_section_links[$index]) && !empty($faq_section_links[$index]))
                                            <div class="ltn__video-img alignleft">
                                                <img src="{{ static_asset('assets/img/bg/17.jpg') }}" alt="Video Thumbnail">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----" 
                                                   href="{{ $faq_section_links[$index] }}" 
                                                   data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        @endif
                                        <p>{{ $faq_section_descriptions[$index] ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <aside class="sidebar-area ltn__right-sidebar mt-60">
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget about-us-img-wrap">
                        <a href="shop.html"><img src="{{ static_asset('assets/img/banner/s3.png') }}" alt="Banner Image"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<!-- FAQ AREA START -->

<!-- NEWSLETTER AREA START -->
<div class="ltn__newsletter-area section-bg-1 bg-overlay-black-90 pt-110 pb-90 bg-image" data-bg="img/bg/2.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="ltn__newsletter-inner text-center">
                    <h1 class="white-color">We make your inbox better</h1>
                    <p class="white-color">Sign up to our newsletter to receive grooming tips, style inspiration, <br> exclusive access to pre-launch product pricing and more.</p>
                    <form action="#" class="ltn__form-box">
                        <input type="email" name="email" placeholder="Email*">
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn btn-effect-1 text-uppercase" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- NEWSLETTER AREA END -->

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
                
            
            </div>
        </div>
    </div>
@endif
<!-- BLOG AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ static_asset('assets/img/icons/icon-img/11.png')}}" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Curated Products</h4>
                                    <p>Provide Curated Products for
                                        all product over $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ static_asset('assets/img/icons/icon-img/12.png')}}" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Handmade</h4>
                                    <p>We ensure the product quality
                                        that is our main goal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ static_asset('assets/img/icons/icon-img/13.png')}}" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Natural Food</h4>
                                    <p>Return product within 3 days
                                        for any product you buy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ static_asset('assets/img/icons/icon-img/14.png')}}" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>Free home delivery</h4>
                                    <p>We ensure the product quality
                                        that you can trust easily</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->
@endsection