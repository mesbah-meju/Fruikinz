@extends('frontend.layouts.app')

@section('content')
<style>
    .our-story {
    font-family: Arial, sans-serif;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.intro {
    text-align: center;
}

.intro h1 {
    font-size: 36px;
    margin-bottom: 10px;
}

.intro .subtitle {
    font-size: 20px;
    margin-bottom: 20px;
}

.intro-img {
    width: 80%;
    max-width: 800px;
    height: auto;
    margin: 20px auto;
}

.timeline {
    margin-top: 40px;
    background-color: #f7f7f7;
    padding: 20px;
    border-radius: 8px;
}

.timeline h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
}

.timeline ul {
    list-style: none;
    padding: 0;
}

.timeline li {
    margin-bottom: 20px;
}

.timeline h3 {
    font-size: 24px;
    margin-bottom: 5px;
}

.mission-vision {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
}

.mission, .vision {
    width: 48%;
}

.mission h2, .vision h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.meet-team {
    margin-top: 40px;
    text-align: center;
}

.meet-team h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.team-member {
    display: inline-block;
    width: 200px;
    margin: 0 15px;
    text-align: center;
}

.team-member img {
    width: 100%;
    border-radius: 50%;
    margin-bottom: 10px;
}

.cta {
    margin-top: 40px;
    text-align: center;
    font-size: 18px;
}

.cta a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
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
                        <h1 class="section-title white-color">Our Story</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Story</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
@php
    $story_section_images = get_setting('story_section_images', null, $lang);
    $story_section_link = get_setting('story_section_link', null, $lang);
    $story_section_story = get_setting('story_section_story', null, $lang);
    $story_section_mission = get_setting('story_section_mission', null, $lang);
    $story_section_vision = get_setting('story_section_vision', null, $lang);

    $story_section_links = json_decode(get_setting('story_section_links', null, $lang), true) ?? [];
    $story_section_titles = json_decode(get_setting('story_section_titles', null, $lang), true) ?? [];
    $story_section_descriptions = json_decode(get_setting('story_section_descriptions', null, $lang), true) ?? [];
@endphp
<div class="our-story">
    <div class="intro">
        <h1>Our Story</h1>
        <p class="subtitle"> {{ $story_section_story ?? "Building a legacy with passion and innovation."}}</p>
        {{-- <img src="path-to-your-image.jpg" alt="Story Image" class="intro-img"> --}}
    </div>

    <section class="timeline">
        <h2>Our Milestones</h2>
        @foreach ($story_section_links as $key => $link)
            <ul>
                <li>
                    <h3>{{ $story_section_titles[$key] ?? ""}}</h3>
                    <p>{{ $story_section_descriptions[$key] ?? ""}}</p>
                </li>
            </ul>
        @endforeach
    </section>

    <section class="mission-vision">
        <div class="mission">
            <h2>Our Mission</h2>
            <p> {{ $story_section_mission ?? "To provide high-quality, sustainable solutions for a better tomorrow." }}</p>
        </div>
        <div class="vision">
            <h2>Our Vision</h2>
            <p>{{ $story_section_vision ?? "To be a leader in our industry, driving positive change and innovation."}}</p>
        </div>
    </section>

    <section class="meet-team">
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
    </section>

    <div class="cta">
        <p>Join us on our journey. <a href="{{route('contact.view')}}">Contact us</a> to learn more.</p>
    </div>
</div>


@endsection