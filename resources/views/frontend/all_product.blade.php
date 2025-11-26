@extends('frontend.layouts.app')

@section('content')
<style>
    .ltn__header-transparent {
        position: absolute;
        width: 100%;
        z-index: 999;
        background-color: #ededed;
    }
</style>
<div class="body-wrapper">
   

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                            <h1 class="section-title white-color">Products</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>All Products </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
   

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            @if (count($products) > 0)
                <div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-area ltn__section-title-2 text-center">
                                    <h1 class="section-title">{{ __('All Products') }}</h1>
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
                            @foreach ($products as $product)
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
                                                    src="{{ uploaded_asset($product->photos) }}" style="height:266px!important"
                                                    alt="{{ $product->getTranslation('name') }}" 
                                                    title="{{ $product->getTranslation('name') }}"
                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
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
                                        @if (discount_in_percentage($product) > 0)
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
@endsection