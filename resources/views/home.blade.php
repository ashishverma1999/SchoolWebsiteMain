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

<!-- Our Blog Section -->
<section class="blog-section py-4 py-md-5 bg-white border-top">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-md-5">
            <h2 class="testimonials-heading mb-2">Our Blog</h2>
            <p class="testimonials-subheading text-muted mb-0">You'll find something to spark your curiosity and enhance</p>
        </div>

        <!-- Blog Swiper Slider -->
        <div class="blog-slider-container position-relative px-1 px-sm-2">
            <div class="swiper blog-slider">
                <div class="swiper-wrapper pb-5">
                    @foreach($blogs as $blog)
                    <div class="swiper-slide h-auto">
                        <div class="blog-card">
                            <div class="blog-card-top">
                                <!-- Blog Image -->
                                <div class="blog-card-image mb-3">
                                    <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" class="w-100 h-100 object-fit-cover">
                                </div>

                                <!-- Blog Title -->
                                <h4 class="blog-card-title mb-2">{{ $blog['title'] }}</h4>

                                <!-- Blog Excerpt -->
                                <p class="blog-card-excerpt mb-3">{{ $blog['excerpt'] }}</p>
                            </div>

                            <!-- Blog Meta Footer -->
                            <div class="blog-card-meta d-flex align-items-center justify-content-between pt-2 border-top text-muted small">
                                <span><i class="fa-solid fa-user me-1 text-secondary"></i> {{ $blog['author'] }}</span>
                                <span><i class="fa-solid fa-calendar-days me-1 text-secondary"></i> {{ $blog['date'] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Slider Pagination Dots -->
                <div class="swiper-pagination blogs-pagination"></div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Showcase Slider Section -->
<section class="testimonials-section py-4 py-md-5 bg-white border-top">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-md-5">
            <h2 class="testimonials-heading mb-2">Testimonials</h2>
            <p class="testimonials-subheading text-muted mb-0">You'll find something to spark your curiosity and enhance</p>
        </div>

        <!-- Testimonials Swiper Slider -->
        <div class="testimonials-slider-container position-relative px-1 px-sm-2">
            <div class="swiper testimonials-slider">
                <div class="swiper-wrapper pb-5">
                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide h-auto">
                        <div class="testimonial-card">
                            <!-- Star Rating -->
                            <div class="testimonial-stars mb-3">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $testimonial['rating'])
                                        <i class="fa-solid fa-star text-dark me-1"></i>
                                    @else
                                        <i class="fa-regular fa-star text-secondary opacity-50 me-1"></i>
                                    @endif
                                @endfor
                            </div>

                            <!-- Quote Body -->
                            <p class="testimonial-text mb-4">
                                {{ $testimonial['quote'] }}
                            </p>

                            <!-- Author & Quote Icon -->
                            <div class="testimonial-footer d-flex align-items-center justify-content-between mt-auto pt-2">
                                <div class="testimonial-author">
                                    <h6 class="author-name fw-bold mb-0 text-dark">{{ $testimonial['name'] }}</h6>
                                    <small class="author-role text-muted">{{ $testimonial['role'] }}</small>
                                </div>
                                <div class="testimonial-quote-icon">
                                    <span class="quote-symbol">”</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Slider Pagination Dots -->
                <div class="swiper-pagination testimonials-pagination"></div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-4 py-md-5 text-white text-center" style="background: linear-gradient(135deg, #3A0507 0%, #580B0D 50%, #7A1215 100%) !important;">
    <div class="container px-3">
        <h2 class="fw-bold text-white mb-2" style="font-size: clamp(1.4rem, 3.5vw, 2.2rem);">Admissions Open For Session 2026-27</h2>
        <p class="lead text-light mb-4" style="max-width: 700px; margin: 0 auto; font-size: clamp(0.9rem, 2vw, 1.1rem);">Join {{ config('school.name') }}, {{ config('school.location') }} and build a bright future for your child.</p>
        <div class="d-flex justify-content-center gap-2 gap-md-3 flex-wrap">
            <a href="{{ route('admission') }}" class="btn btn-primary px-4 py-2 fw-bold rounded-pill shadow">Admission Procedure</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-2 rounded-pill">Contact School Office</a>
        </div>
    </div>
</section>

<style>
    .testimonials-heading {
        font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
        font-size: clamp(2rem, 3.8vw, 2.75rem);
        font-weight: 500;
        color: #111827;
        letter-spacing: -0.5px;
    }

    .testimonials-subheading {
        font-size: clamp(0.95rem, 1.8vw, 1.05rem);
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Blog Cards Styling */
    .blog-card {
        background: #ffffff;
        border: 1.5px solid #e5e7eb;
        border-radius: 18px;
        padding: 16px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.02);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        border-color: #cbd5e1;
    }

    .blog-card-top {
        width: 100%;
        display: block;
    }

    .blog-card-image {
        width: 100% !important;
        height: 180px !important;
        border-radius: 14px !important;
        overflow: hidden !important;
        position: relative !important;
        display: block !important;
        background-color: #f1f5f9;
    }

    .blog-card-image img {
        width: 100% !important;
        height: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        min-height: 100% !important;
        max-height: 100% !important;
        object-fit: cover !important;
        object-position: center !important;
        display: block !important;
        transition: transform 0.4s ease !important;
    }

    .blog-card:hover .blog-card-image img {
        transform: scale(1.05) !important;
    }

    .blog-card-title {
        font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
        font-size: 1.15rem;
        font-weight: 600;
        color: #111827;
        line-height: 1.35;
    }

    .blog-card-excerpt {
        color: #64748b;
        font-size: 0.88rem;
        line-height: 1.55;
    }

    .blog-card-meta {
        font-size: 0.82rem;
    }

    @media (max-width: 767.98px) {
        .blog-card-image {
            height: 200px !important;
        }

        .blog-card {
            padding: 14px;
        }

        .blog-card-title {
            font-size: 1.1rem;
        }
    }

    .blogs-slider .swiper-pagination {
        bottom: 0px !important;
    }

    .blogs-pagination .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: #cbd5e1;
        opacity: 1;
        margin: 0 4px !important;
        transition: all 0.3s ease;
    }

    .blogs-pagination .swiper-pagination-bullet-active {
        width: 22px;
        border-radius: 10px;
        background: #7A1215;
    }

    /* Testimonials Cards Styling */
    .testimonial-card {
        background: #ffffff;
        border: 1.5px solid #e5e7eb;
        border-radius: 18px;
        padding: 30px 26px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.02);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        border-color: #cbd5e1;
    }

    .testimonial-stars {
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .testimonial-text {
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.65;
        font-weight: 400;
        margin-bottom: 24px;
    }

    .author-name {
        font-size: 1rem;
        letter-spacing: -0.2px;
    }

    .author-role {
        font-size: 0.85rem;
    }

    .testimonial-quote-icon .quote-symbol {
        font-size: 2.6rem;
        line-height: 0.8;
        font-family: Georgia, serif;
        color: #f87171;
        opacity: 0.8;
        display: inline-block;
        user-select: none;
    }

    .testimonials-slider .swiper-pagination {
        bottom: 0px !important;
    }

    .testimonials-pagination .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: #cbd5e1;
        opacity: 1;
        margin: 0 4px !important;
        transition: all 0.3s ease;
    }

    .testimonials-pagination .swiper-pagination-bullet-active {
        width: 22px;
        border-radius: 10px;
        background: #7A1215;
    }
</style>

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

        // Initialize Blog Swiper Slider
        if (document.querySelector('.blog-slider') && typeof Swiper !== 'undefined') {
            new Swiper('.blog-slider', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.blogs-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 24,
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 24,
                    }
                }
            });
        }

        // Initialize Testimonials Swiper Slider
        if (document.querySelector('.testimonials-slider') && typeof Swiper !== 'undefined') {
            new Swiper('.testimonials-slider', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.testimonials-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1.5,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 28,
                    }
                }
            });
        }
    });
</script>
@endsection