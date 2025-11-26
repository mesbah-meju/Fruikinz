@extends('frontend.layouts.app')

@section('content')
<style>
    
    .commitment-section {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .commitment-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        flex: 1 1 calc(33.333% - 20px);
        min-width: 280px;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .commitment-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }
    .commitment-card img {
        width: 100%;
        border-radius: 10px;
    }
    .commitment-card h3 {
        font-size: 1.5rem;
        margin: 15px 0 10px;
    }
    .commitment-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: #666;
    }
    .cta-section {
        width: 100%;
        background: #8db6f3;
        color: white;
        padding: 50px 20px;
        text-align: center;
        margin-top: 60px;
    }
    .cta-section h2 {
        font-size: 2rem;
        margin: 0;
    }
    .cta-section p {
        margin: 15px 0;
        font-size: 1.2rem;
        opacity: 0.9;
    }
    .cta-section a {
        background: white;
        color: #0052cc;
        padding: 15px 30px;
        border-radius: 30px;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        transition: background 0.3s, color 0.3s;
    }
    .cta-section a:hover {
        background: #007bff;
        color: white;
    }
    .intro {
        text-align: center;
        width: 100%;
    }

</style>
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="{{ static_asset('assets/img/banner/s3.png') }}">>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                        <h1 class="section-title white-color">Our Commitment</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Commitment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    // Decode and process settings
    $commitment_section_images = json_decode(get_setting('commitment_section_images', null, $lang), true) ?? [];
    $commitment_images = get_slider_images($commitment_section_images);
    $commitment_section_titles = json_decode(get_setting('commitment_section_titles', null, $lang), true) ?? [];
    $commitment_section_descriptions = json_decode(get_setting('commitment_section_descriptions', null, $lang), true) ?? [];
    $commitment_section_story = get_setting('commitment_section_story', null, $lang) ?? "Dedicated to delivering excellence in every step we take.";
@endphp

<div class="container commitment-section">
    <div class="intro text-center">
        <h1>Our Commitment</h1>
        <p>{{ $commitment_section_story }}</p>
    </div>

    <section class="commitment-cards-section">
        <div class="row justify-content-center">
            @if (!empty($commitment_images))
                @foreach ($commitment_images as $key => $commitment_image)
                    <div class="col-md-4 col-sm-6 commitment-card text-center mb-4">
                        <div class="card">
                            <div class="card-img-container d-flex justify-content-center align-items-center">
                                <img src="{{ $commitment_image ? my_asset($commitment_image->file_name) : static_asset('assets/img/placeholder.jpg') }}" 
                                     alt="{{ $commitment_section_titles[$key] ?? 'Commitment Image' }}" 
                                     class="card-img-top rounded" style="width: 80px; height: 80px;">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $commitment_section_titles[$key] ?? 'Untitled' }}</h3>
                                <p class="card-text">{{ $commitment_section_descriptions[$key] ?? 'No description available.' }}</p>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            @else
                <p class="text-center">No commitments to display at the moment.</p>
            @endif
        </div>
    </section>

    <section class="cta-section text-center mt-5">
        <h2>Ready to Partner with Us?</h2>
        <p>Let’s work together to create a better future. Reach out to us today!</p>
        <a href="{{ route('contact.view') }}" class="btn btn-primary">Contact Us</a>
    </section>
</div>

<!-- BREADCRUMB AREA END -->


@endsection