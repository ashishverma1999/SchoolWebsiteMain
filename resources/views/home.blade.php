@extends('layouts.app')

@section('title', config('school.name') . ' - ' . config('school.location'))

@section('content')
<!-- Hero Slider Section -->
<section class="hero home-hero position-relative bg-dark text-white overflow-hidden" id="hero-slider-section" style="width: 100%; display: block; clear: both;">
    <div class="home-hero__slider position-relative w-100" style="width: 100% !important; min-height: 500px; height: 500px; display: block; overflow: hidden;">
        @foreach($banners as $index => $banner)
        <div class="slide-item {{ $index === 0 ? 'active' : '' }}"
            style="position: absolute; top: 0; left: 0; width: 100% !important; height: 100% !important; opacity: {{ $index === 0 ? 1 : 0 }}; transition: opacity 0.8s ease-in-out; z-index: {{ $index === 0 ? 2 : 1 }}; display: block;">
            <img src="{{ asset($banner['image']) }}"
                alt="{{ $banner['title'] }}"
                class="home-hero__image">
            <div class="home-hero__overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%); z-index: 2; pointer-events: none;"></div>

            <!-- Banner Content -->
            
            <div class="hero__content-wrap home-hero__content py-3 py-md-4 px-3 px-md-4 text-white my-auto ms-md-4 ms-lg-5">
                <span class="badge bg-warning text-dark px-3 py-2 text-uppercase mb-2 fw-bold shadow-sm" style="letter-spacing: 1px; font-size: clamp(11px, 2.5vw, 13px);">{{ $banner['subtitle'] }}</span>
                <h1 class="text-white fw-bold mb-2 mb-md-3" style="font-size: clamp(1.4rem, 4vw, 2.5rem); line-height: 1.25;">{{ $banner['title'] }}</h1>
                <p class="text-light lead d-none d-sm-block mb-3 mb-md-4" style="font-size: clamp(0.88rem, 1.8vw, 1.05rem);">Dedicated to academic excellence, moral discipline, and holistic child development.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('admission') }}" class="btn btn-primary px-3 px-md-4 py-2 fw-bold rounded-pill shadow">Apply For Admission</a>
                    <a href="{{ route('about') }}" class="btn btn-outline-light px-3 px-md-4 py-2 rounded-pill">Explore School</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Navigation Buttons Floating on Left and Right Edges -->
    <button class="banner-nav-btn prev-btn" onclick="moveSlide(-1)" aria-label="Previous Slide">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="banner-nav-btn next-btn" onclick="moveSlide(1)" aria-label="Next Slide">
        <i class="fa-solid fa-chevron-right"></i>
    </button>

    <!-- Slider Dots -->
    <div class="slider-dots position-absolute bottom-0 start-50 translate-middle-x mb-3 d-flex gap-2" style="z-index: 10;">
        @foreach($banners as $index => $banner)
        <span class="dot-item {{ $index === 0 ? 'active' : '' }} rounded-pill bg-white" style="width: {{ $index === 0 ? '24px' : '10px' }}; height: 10px; opacity: {{ $index === 0 ? 1 : 0.5 }}; cursor: pointer; transition: all 0.3s ease;" onclick="goToSlide({{ $index }})"></span>
        @endforeach
    </div>
    </div>
</section>

<!-- Notice Board / Ticker Banner -->
<div class="notice-ticker bg-primary text-white py-2 shadow-sm">
    <div class="container-fluid px-3 px-md-4 d-flex align-items-center">
        <span class="badge bg-danger text-white me-2 me-md-3 px-2 px-md-3 py-2 text-uppercase fw-bold flex-shrink-0" style="font-size: 12px;">Latest Notices</span>
        <marquee onmouseover="this.stop();" onmouseout="this.start();" class="text-white fw-semibold small">
            @foreach($notices as $notice)
            <span class="me-4 me-md-5"><i class="fa-solid fa-bell text-warning me-1"></i> <strong>[{{ $notice['date'] }}]</strong> {{ $notice['title'] }}</span>
            @endforeach
        </marquee>
    </div>
</div>

<!-- About Us Highlights Section -->
<section class="py-4 py-md-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="pe-lg-3 text-center text-lg-start">
                    <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1.5px;">Welcome To Our Campus</span>
                    <h2 class="fw-bold text-dark mt-2 mb-3" style="font-size: clamp(1.6rem, 3.5vw, 2.4rem);">About {{ config('school.name') }}</h2>
                    <p class="text-muted lead" style="font-size: clamp(0.95rem, 2vw, 1.1rem);">Located at {{ config('school.location') }}, {{ config('school.name') }} provides an inspiring learning environment where students excel academically, socially, and morally.</p>
                    <p class="text-secondary small">Our goal is to foster independent thinkers, confident leaders, and responsible global citizens through modern pedagogical methods, state-of-the-art facilities, and strong core values.</p>

                    <div class="row g-3 mt-3">
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-primary bg-light rounded-3 text-center text-sm-start">
                                <h4 class="fw-bold text-primary mb-1">100%</h4>
                                <small class="text-dark fw-semibold">Pass Result Guarantee</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-success bg-light rounded-3 text-center text-sm-start">
                                <h4 class="fw-bold text-success mb-1">Modern</h4>
                                <small class="text-dark fw-semibold">Computer & Science Labs</small>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn btn-dark mt-4 px-4 py-2 rounded-pill">Read More About Us <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Principal's Message Mobile Optimized Card -->
            <div class="col-lg-6">
                <div class="principal-message-card card border-0 shadow-lg rounded-4 overflow-hidden bg-white h-100">
                    <div class="card-header bg-dark text-white p-3 p-md-4 border-0">
                        <h4 class="mb-0 text-white fw-bold" style="font-size: clamp(1.2rem, 3vw, 1.5rem);"><i class="fa-solid fa-user-graduate me-2 text-warning"></i> Principal's Message</h4>
                        <small class="text-secondary d-block mt-1">Desk of the Principal • {{ config('school.name') }}</small>
                    </div>
                    <div class="card-body p-3 p-md-4 bg-light">
                        <div class="row align-items-center g-3">
                            <div class="col-12 col-md-4 text-center">
                                <div class="principal-photo rounded-4 overflow-hidden shadow-sm mx-auto border border-3 border-primary">
                                    <img src="{{ asset('assets/images/principal/principal.jpg') }}"
                                        alt="Principal, {{ config('school.name') }}"
                                        class="w-100 h-100">
                                </div>
                                <span class="badge bg-primary text-white fw-bold mt-2 px-2 py-1 small">Principal</span>
                            </div>
                            <div class="col-12 col-md-8">
                                <blockquote class="blockquote small text-secondary mb-3" style="font-style: italic; font-size: 0.9rem;">
                                    "Education is not merely the learning of facts, but the training of the mind to think critically and act compassionately. At {{ config('school.name') }}, we walk with every student on their journey toward academic success."
                                </blockquote>
                                <div class="text-sm-end border-top pt-2 mt-2">
                                    <a href="{{ route('principal') }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">Full Message <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Facilities Showcase Grid -->
<!-- Key Facilities Showcase Grid -->
<section class="py-4 py-md-5 bg-light border-top border-bottom">
    <div class="container">

        <div class="text-center mb-4 mb-md-5">
            <span class="text-primary fw-bold text-uppercase small"
                style="letter-spacing: 1px;">
                World Class Campus
            </span>

            <h2 class="fw-bold text-dark mt-1"
                style="font-size: clamp(1.5rem, 3.5vw, 2.2rem);">
                Our School Facilities & Adventure Sports
            </h2>

            <div class="mx-auto bg-primary rounded"
                style="width: 60px; height: 3px;">
            </div>
        </div>


        <div class="row g-4">

            <!-- Sports & Fitness -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="facility-image-wrapper">

                        <img src="{{ asset('assets/images/facilities/sports-net.jpg') }}"
                            alt="Sports & Fitness"
                            class="facility-image">

                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary shadow-sm">
                            Sports & Fitness
                        </span>

                    </div>

                    <div class="card-body p-3 p-md-4">

                        <h4 class="fw-bold text-dark mb-2"
                            style="font-size: 1.15rem;">
                            Net Climbing & Physical Training
                        </h4>

                        <p class="card-text text-muted small">
                            Specialized physical education courses, obstacle courses,
                            and rope climbing activities designed to build agility
                            and teamwork.
                        </p>

                        <a href="{{ route('gallery') }}"
                            class="fw-bold text-primary text-decoration-none small">
                            View Gallery
                            <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>

                    </div>
                </div>
            </div>


            <!-- Adventure Sports -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="facility-image-wrapper">

                        <img src="{{ asset('assets/images/facilities/zipline.jpg') }}"
                            alt="Adventure Camp"
                            class="facility-image">

                        <span class="position-absolute top-0 end-0 m-3 badge bg-success shadow-sm">
                            Adventure Sports
                        </span>

                    </div>

                    <div class="card-body p-3 p-md-4">

                        <h4 class="fw-bold text-dark mb-2"
                            style="font-size: 1.15rem;">
                            Zipline & Outdoor Adventure Camp
                        </h4>

                        <p class="card-text text-muted small">
                            Annual adventure camp featuring ziplining, safety drills,
                            and outdoor confidence-building activities for students.
                        </p>

                        <a href="{{ route('gallery') }}"
                            class="fw-bold text-success text-decoration-none small">
                            View Adventure Camp
                            <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>

                    </div>
                </div>
            </div>


            <!-- Campus Facilities -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="facility-image-wrapper">

                        <img src="{{ asset('assets/images/facilities/rope-bridge.jpg') }}"
                            alt="Rope Bridge"
                            class="facility-image">

                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark shadow-sm">
                            Campus Facilities
                        </span>

                    </div>

                    <div class="card-body p-3 p-md-4">

                        <h4 class="fw-bold text-dark mb-2"
                            style="font-size: 1.15rem;">
                            Rope Bridge & Balance Training
                        </h4>

                        <p class="card-text text-muted small">
                            Encouraging physical health, courage, and perseverance
                            through experiential outdoor sports facilities.
                        </p>

                        <a href="{{ route('gallery') }}"
                            class="fw-bold text-dark text-decoration-none small">
                            Explore All Facilities
                            <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Toppers Showcase Section -->
<section class="py-4 py-md-5 bg-white">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-8">
                <span class="text-primary fw-bold text-uppercase small">Academic Stars</span>
                <h2 class="fw-bold text-dark" style="font-size: clamp(1.4rem, 3vw, 2.2rem);">Board Exam Toppers</h2>
            </div>
            <div class="col-4 text-end">
                <a href="{{ route('toppers.x') }}" class="btn btn-outline-primary rounded-pill px-3 py-1 btn-sm">View All</a>
            </div>
        </div>

        <div class="row g-3 g-md-4">
            @foreach(array_merge(array_slice($toppersX, 0, 2), array_slice($toppersXII, 0, 2)) as $topper)
            <div class="col-6 col-lg-3">
                <div class="card h-100 border shadow-sm text-center p-3 rounded-4">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-2 border border-3 border-primary" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-user-graduate fs-3 text-primary"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">{{ $topper['name'] }}</h6>
                    <span class="badge bg-warning text-dark mx-auto mb-2 fw-bold" style="font-size: 12px;">{{ $topper['percentage'] }}</span>
                    <p class="small text-muted mb-0" style="font-size: 11px;">{{ $topper['rank'] }} • Session {{ $topper['year'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-4 py-md-5 bg-dark text-white text-center">
    <div class="container px-3">
        <h2 class="fw-bold text-white mb-2" style="font-size: clamp(1.4rem, 3.5vw, 2.2rem);">Admissions Open For Session 2026-27</h2>
        <p class="lead text-light mb-4" style="max-width: 700px; margin: 0 auto; font-size: clamp(0.9rem, 2vw, 1.1rem);">Join {{ config('school.name') }}, {{ config('school.location') }} and build a bright future for your child.</p>
        <div class="d-flex justify-content-center gap-2 gap-md-3 flex-wrap">
            <a href="{{ route('admission') }}" class="btn btn-primary px-4 py-2 fw-bold rounded-pill shadow">Admission Procedure</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-2 rounded-pill">Contact School Office</a>
        </div>
    </div>
</section>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide-item');
    const dots = document.querySelectorAll('.dot-item');
    let slideInterval;

    function showSlide(index) {
        if (slides.length === 0) return;
        if (index >= slides.length) currentSlide = 0;
        else if (index < 0) currentSlide = slides.length - 1;
        else currentSlide = index;

        slides.forEach((slide, i) => {
            if (i === currentSlide) {
                slide.style.opacity = '1';
                slide.style.zIndex = '2';
                slide.classList.add('active');
            } else {
                slide.style.opacity = '0';
                slide.style.zIndex = '1';
                slide.classList.remove('active');
            }
        });

        dots.forEach((dot, i) => {
            if (i === currentSlide) {
                dot.style.opacity = '1';
                dot.style.width = '24px';
            } else {
                dot.style.opacity = '0.5';
                dot.style.width = '10px';
            }
        });
    }

    function moveSlide(step) {
        showSlide(currentSlide + step);
        resetTimer();
    }

    function goToSlide(index) {
        showSlide(index);
        resetTimer();
    }

    function startTimer() {
        slideInterval = setInterval(() => {
            moveSlide(1);
        }, 4500);
    }

    function resetTimer() {
        clearInterval(slideInterval);
        startTimer();
    }

    document.addEventListener('DOMContentLoaded', function() {
        showSlide(0);
        startTimer();
    });
</script>
@endsection