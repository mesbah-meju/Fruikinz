@extends('frontend.layouts.app')

@section('content')

<div class="ltn__utilize-overlay text-white"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="{{ static_asset('assets/img/banner/s3.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                        <h1 class="section-title white-color">Quote</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->

<!-- CONTACT ADDRESS AREA END -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-120 mb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Get A Quote</h4>
                    <form id="contact-form" action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address" required>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select" name="service_type" required>
                                        <option value="">Select Service Type</option>
                                        <option value="Gardening">Gardening</option>
                                        <option value="Landscaping">Landscaping</option>
                                        <option value="Vegetables Growing">Vegetables Growing</option>
                                        <option value="Land Preparation">Land Preparation</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Enter phone number" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="content" placeholder="Enter message" required></textarea>
                        </div>
                        {{-- <p>
                            <label class="input-info-save mb-0">
                                <input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.
                            </label>
                        </p> --}}

                        
                        <div class="btn-wrapper mt-0">
                            {{-- @if (empty(env('MAIL_USERNAME')) || empty(env('MAIL_PASSWORD')))
                                <a href="javascript:void(0)" onclick="showWarning()" class="btn theme-btn-1 btn-effect-1 text-uppercase">
                                    {{ translate('get a free service') }}
                                </a>
                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Get a Free Service</button>
                            @else --}}
                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Get a Free Service</button>
                            {{-- @endif --}}
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA END -->

<!-- GOOGLE MAP AREA START -->
<div class="google-map mb-120">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- GOOGLE MAP AREA END -->

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

@endsection

@section('script')

<script>
    function showWarning() {
        AIZ.plugins.notify('warning', '{{ translate('Please configure SMTP correctly to send mail') }}');
    }
</script>
@endsection
