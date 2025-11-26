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
                            <h1 class="section-title white-color">Product Details</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    @php
        $photos = [];
    @endphp
    @if ($detailedProduct->photos != null)
        @php
            $photos = explode(',', $detailedProduct->photos);
        @endphp
    @endif

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner mb-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ltn__shop-details-img-gallery">
                                    <!-- Large Images -->
                                    <div class="ltn__shop-details-large-img">
                                        @php
                                            $photos = [];
                                            if ($detailedProduct->photos != null) {
                                                $photos = explode(',', $detailedProduct->photos);
                                            }
                                        @endphp
                            
                                        @if ($detailedProduct->digital == 0)
                                            @foreach ($detailedProduct->stocks as $stock)
                                                @if ($stock->image != null)
                                                    <div class="single-large-img">
                                                        <a href="{{ uploaded_asset($stock->image) }}" data-rel="lightcase:myCollection">
                                                            <img src="{{ uploaded_asset($stock->image) }}"
                                                                 data-src="{{ uploaded_asset($stock->image) }}"
                                                                 alt="Stock Image"
                                                                 onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                        </a>
                                                    </div>
                                                 @else
                                                    <div class="single-large-img">
                                                        <a href="{{ uploaded_asset($stock->image) }}" data-rel="lightcase:myCollection">
                                                            <img src="{{ uploaded_asset($stock->image) }}"
                                                                data-src="{{ uploaded_asset($stock->image) }}"
                                                                alt="Stock Image"
                                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                            
                                        @foreach ($photos as $photo)
                                            <div class="single-large-img">
                                                <a href="{{ uploaded_asset($photo) }}" data-rel="lightcase:myCollection">
                                                    <img src="{{ uploaded_asset($photo) }}"
                                                         data-src="{{ uploaded_asset($photo) }}"
                                                         alt="Product Image"
                                                         onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                            
                                    <!-- Small Images -->
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        @if ($detailedProduct->digital == 0)
                                            @foreach ($detailedProduct->stocks as $stock)
                                                @if ($stock->image != null)
                                                    <div class="single-small-img">
                                                        <img src="{{ uploaded_asset($photo) }}"
                                                             data-src="{{ uploaded_asset($stock->image) }}"
                                                             alt="Stock Thumbnail"
                                                             onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                            
                                        @foreach ($photos as $photo)
                                            <div class="single-small-img">
                                                <img src="{{ uploaded_asset($photo) }}"
                                                     data-src="{{ uploaded_asset($photo) }}"
                                                     alt="Product Thumbnail"
                                                     onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">
                                    <div class="product-ratting">
                                        <div class="row align-items-center mb-3">
                                            <!-- Review -->
                                            @if ($detailedProduct->auction_product != 1)
                                                <div class="col-12">
                                                    @php
                                                        $total = 0;
                                                        $total += $detailedProduct->reviews->where('status', 1)->count();
                                                    @endphp
                                                    <span class="rating rating-mr-2">
                                                        {{ renderStarRating($detailedProduct->rating) }}
                                                    </span>
                                                    <span class="ml-1 opacity-50 fs-14">({{ $total }}
                                                        {{ translate('reviews') }})</span>
                                                </div>
                                            @endif
                                            <!-- Estimate Shipping Time -->
                                            @if ($detailedProduct->est_shipping_days)
                                                <div class="col-auto fs-14 mt-1">
                                                    <small class="mr-1 opacity-50 fs-14">{{ translate('Estimate Shipping Time') }}:</small>
                                                    <span class="fw-500">{{ $detailedProduct->est_shipping_days }} {{ translate('Days') }}</span>
                                                </div>
                                            @endif
                                            <!-- In stock -->
                                            @if ($detailedProduct->digital == 1)
                                                <div class="col-12 mt-1">
                                                    <span class="badge badge-md badge-inline badge-pill badge-success">{{ translate('In stock') }}</span>
                                                </div>
                                            @endif
                                        </div>
                                        {{-- <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                        </ul> --}}
                                    </div>

                                     <!-- Brand Logo & Name -->
                                    @if ($detailedProduct->brand != null)
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <span class="text-secondary fs-14 fw-400 mr-4 w-80px">{{ translate('Brand') }}</span><br>
                                            <a href="{{ route('products.brand', $detailedProduct->brand->slug) }}"
                                                class="text-reset hov-text-primary fs-14 fw-700">{{ $detailedProduct->brand->name }}</a>
                                        </div>
                                    @endif
                                    <h3>  {{ $detailedProduct->getTranslation('name') }}</h3>
                                     <!-- Without auction product -->
        @if ($detailedProduct->wholesale_product == 1)
            <!-- Wholesale -->
            <table class="table mb-3">
                <thead>
                    <tr>
                        <th class="border-top-0">{{ translate('Min Qty') }}</th>
                        <th class="border-top-0">{{ translate('Max Qty') }}</th>
                        <th class="border-top-0">{{ translate('Unit Price') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detailedProduct->stocks->first()->wholesalePrices as $wholesalePrice)
                        <tr>
                            <td>{{ $wholesalePrice->min_qty }}</td>
                            <td>{{ $wholesalePrice->max_qty }}</td>
                            <td>{{ single_price($wholesalePrice->price) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <!-- Without Wholesale -->
            @if (home_price($detailedProduct) != home_discounted_price($detailedProduct))
                <div class="row no-gutters mb-3">
                    <div class="col-sm-2">
                        <div class="text-secondary fs-14 fw-400">{{ translate('Price') }}</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="d-flex align-items-center">
                            <!-- Discount Price -->
                            <div class="product-price">
                                {{ home_discounted_price($detailedProduct) }}
                            </div>
                           
                            <!-- Home Price -->
                            <del class="fs-14 opacity-60 ml-2">
                                {{ home_price($detailedProduct) }}
                            </del>
                            <!-- Unit -->
                            @if ($detailedProduct->unit != null)
                                <span class="opacity-70 ml-1">/{{ $detailedProduct->getTranslation('unit') }}</span>
                            @endif
                            <!-- Discount percentage -->
                            @if (discount_in_percentage($detailedProduct) > 0)
                                <span class="bg-primary ml-2 fs-11 fw-700 text-white w-35px text-center p-1"
                                    style="padding-top:2px;padding-bottom:2px;">-{{ discount_in_percentage($detailedProduct) }}%</span>
                            @endif
                            <!-- Club Point -->
                            @if (addon_is_activated('club_point') && $detailedProduct->earn_point > 0)
                                <div class="ml-2 bg-secondary-base d-flex justify-content-center align-items-center px-3 py-1"
                                    style="width: fit-content;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12">
                                        <g id="Group_23922" data-name="Group 23922" transform="translate(-973 -633)">
                                            <circle id="Ellipse_39" data-name="Ellipse 39" cx="6"
                                                cy="6" r="6" transform="translate(973 633)"
                                                fill="#fff" />
                                            <g id="Group_23920" data-name="Group 23920"
                                                transform="translate(973 633)">
                                                <path id="Path_28698" data-name="Path 28698"
                                                    d="M7.667,3H4.333L3,5,6,9,9,5Z" transform="translate(0 0)"
                                                    fill="#f3af3d" />
                                                <path id="Path_28699" data-name="Path 28699"
                                                    d="M5.33,3h-1L3,5,6,9,4.331,5Z" transform="translate(0 0)"
                                                    fill="#f3af3d" opacity="0.5" />
                                                <path id="Path_28700" data-name="Path 28700"
                                                    d="M12.666,3h1L15,5,12,9l1.664-4Z" transform="translate(-5.995 0)"
                                                    fill="#f3af3d" />
                                            </g>
                                        </g>
                                    </svg>
                                    <small class="fs-11 fw-500 text-white ml-2">{{ translate('Club Point') }}:
                                        {{ $detailedProduct->earn_point }}</small>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <div class="row no-gutters mb-3">
                    <div class="col-sm-2">
                        <div class="text-secondary fs-14 fw-400">{{ translate('Price') }}</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="d-flex align-items-center">
                            <!-- Discount Price -->
                            <div class="product-price">
                                {{ home_discounted_price($detailedProduct) }}
                            </div>
                            <del class="fs-14 opacity-60 ml-2">
                                {{ home_price($detailedProduct) }}
                            </del>
                            
                            <!-- Unit -->
                            @if ($detailedProduct->unit != null)
                                <span class="opacity-70">/{{ $detailedProduct->getTranslation('unit') }}</span>
                            @endif
                            <!-- Club Point -->
                            @if (addon_is_activated('club_point') && $detailedProduct->earn_point > 0)
                                <div class="ml-2 bg-secondary-base d-flex justify-content-center align-items-center px-3 py-1"
                                    style="width: fit-content;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12">
                                        <g id="Group_23922" data-name="Group 23922" transform="translate(-973 -633)">
                                            <circle id="Ellipse_39" data-name="Ellipse 39" cx="6"
                                                cy="6" r="6" transform="translate(973 633)"
                                                fill="#fff" />
                                            <g id="Group_23920" data-name="Group 23920"
                                                transform="translate(973 633)">
                                                <path id="Path_28698" data-name="Path 28698"
                                                    d="M7.667,3H4.333L3,5,6,9,9,5Z" transform="translate(0 0)"
                                                    fill="#f3af3d" />
                                                <path id="Path_28699" data-name="Path 28699"
                                                    d="M5.33,3h-1L3,5,6,9,4.331,5Z" transform="translate(0 0)"
                                                    fill="#f3af3d" opacity="0.5" />
                                                <path id="Path_28700" data-name="Path 28700"
                                                    d="M12.666,3h1L15,5,12,9l1.664-4Z" transform="translate(-5.995 0)"
                                                    fill="#f3af3d" />
                                            </g>
                                        </g>
                                    </svg>
                                    <small class="fs-11 fw-500 text-white ml-2">{{ translate('Club Point') }}:
                                        {{ $detailedProduct->earn_point }}</small>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endif
                             @if ($detailedProduct->category != null)
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Categories:</strong>
                                                <span>
                                                    {{ $detailedProduct->category->name }}
                                                    {{-- <a href="#">Parts</a>
                                                    <a href="#">Car</a>
                                                    <a href="#">Seat</a>
                                                    <a href="#">Cover</a> --}}
                                                    
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                                     <!-- Brand Logo & Name -->
                                    @if ($detailedProduct->brand != null)
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <span class="text-secondary fs-14 fw-400 mr-4 w-80px">{{ translate('Brand') }}</span><br>
                                            <a href="{{ route('products.brand', $detailedProduct->brand->slug) }}"
                                                class="text-reset hov-text-primary fs-14 fw-700">{{ $detailedProduct->brand->name }}</a>
                                        </div>
                                    @endif
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            @php
                                                $qty = 0;
                                                foreach ($detailedProduct->stocks as $key => $stock) {
                                                    $qty += $stock->qty;
                                                }
                                            @endphp
                                            <div class="avialable-amount opacity-60">
                                                @if ($detailedProduct->stock_visibility_state == 'quantity')
                                                    (<span id="available-quantity">{{ $qty }}</span>
                                                    {{ translate('available') }})
                                                @elseif($detailedProduct->stock_visibility_state == 'text' && $qty >= 1)
                                                    (<span id="available-quantity">{{ translate('In Stock') }}</span>)
                                                @endif
                                            </div>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="ltn__product-details-menu-3">
                                        <ul>
                                            <li>
                                                <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                    <span>Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <span>Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                     <!-- Total Price -->
                                    <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                        <div class="col-sm-2">
                                            <div class="text-secondary fs-14 fw-400 mt-1">{{ translate('Total Price') }}</div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="product-price">
                                                <strong id="chosen_price" class="fs-20 fw-700 text-primary">

                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="ltn__social-media mt-20">
                                        @if ( get_setting('show_social_links') )
            
                                                    <ul>
                                                        <li>Share: </li>
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
                                    <hr>
                                    <div class="ltn__safe-checkout">
                                        <h5>Guaranteed Safe Checkout</h5>
                                        <img src="{{ static_asset('assets/img/banner/bg1.png')}}-2.png" alt="Payment Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab Start -->
                    <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                        <div class="ltn__shop-details-tab-menu">
                            <div class="nav">
                                <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                                <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                     <!-- Description, Video, Downloads -->
                                    @include('frontend.product_details.description')
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_details_1_2">
                                <div class="ltn__shop-details-tab-content-inner">
                                     <!-- Reviews & Ratings -->
                                        @include('frontend.product_details.review_section')
                                    <hr>
                                    <!-- comment-area -->
                                    
                                    <!-- comment-reply -->
                                    <div class="ltn__comment-reply-area ltn__form-box mb-30">
                                        <form action="#">
                                            <h4 class="title-2">Add a Review</h4>
                                            <div class="mb-30">
                                                <div class="add-a-review">
                                                    <h6>Your Ratings:</h6>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <textarea placeholder="Type your comments...."></textarea>
                                            </div>
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" placeholder="Type your name....">
                                            </div>
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" placeholder="Type your email....">
                                            </div>
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="website" placeholder="Type your website....">
                                            </div>
                                            <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                            <div class="btn-wrapper">
                                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab End -->
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                            <!-- Top Selling Products -->
                        <div class="d-lg-none">
                            @include('frontend.product_details.top_selling_products')
                       </div>
                        </div>
                        {{-- <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="{{ static_asset('assets/img/banner/bg1.png')}} alt=" #"></a>
                        </div> --}}
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// </h6>
                        <h1 class="section-title">Related Products<span>.</span></h1>
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
    <!-- PRODUCT SLIDER AREA END -->

    <!-- FEATURE AREA START -->
<div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                    <div class="row">
                        <!-- Feature Items -->
                        @foreach([
                            ['img' => '11.png', 'title' => 'Curated Products', 'text' => 'Provide curated products for all purchases over $100.'],
                            ['img' => '12.png', 'title' => 'Handmade', 'text' => 'We ensure the product quality that is our main goal.'],
                            ['img' => '13.png', 'title' => 'Natural Food', 'text' => 'Return products within 3 days for any purchase.'],
                            ['img' => '14.png', 'title' => 'Free Home Delivery', 'text' => 'We ensure trustworthy product quality.']
                        ] as $feature)
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ static_asset('assets/img/icons/icon-img/'.$feature['img']) }}" alt="{{ $feature['title'] }}">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>{{ $feature['title'] }}</h4>
                                    <p>{{ $feature['text'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Feature Items -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

    <!-- FOOTER AREA START -->
    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ltn__quick-view-modal-inner">
                            <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="{{ static_asset('assets/img/banner/bg1.png')}}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3>BBQ Jackfruit Chips</h3>
                                            <div class="product-price">
                                                <span>$149.00</span>
                                                <del>$165.00</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong>
                                                        <span>
                                                            <a href="#">Sour</a>
                                                            <a href="#">Sweet</a>
                                                            <a href="#">Spicy</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ltn__quick-view-modal-inner">
                            <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="{{ static_asset('assets/img/banner/bg1.png')}}" alt="#">
                                        </div>
                                        <div class="modal-product-info">
                                            <h5><a href="product">BBQ Jackfruit Chips</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                        </div>
                                        <!-- additional-info -->
                                        <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="{{ static_asset('assets/img/banner/bg1.png')}}.png" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ltn__quick-view-modal-inner">
                            <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="{{ static_asset('assets/img/banner/bg1.png')}}" alt="#">
                                        </div>
                                        <div class="modal-product-info">
                                            <h5><a href="product">BBQ Jackfruit Chips</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                        </div>
                                        <!-- additional-info -->
                                        <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="{{ static_asset('assets/img/banner/bg1.png')}}.png" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
@endsection