@extends('layouts.app')

@section('title', config('school.name') . ' - ' . config('school.location'))

@section('content')
<!-- Hero Slider Section -->
<section class="hero position-relative bg-dark text-white overflow-hidden" style="min-height: 480px; max-height: 600px;">
    <div class="slider-container position-relative w-100 h-100">
        @foreach($banners as $index => $banner)
            <div class="slide {{ $index === 0 ? 'active' : '' }} position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(rgba(11,37,69,0.65), rgba(11,37,69,0.75)), url('{{ asset($banner['image']) }}') center/cover no-repeat; opacity: {{ $index === 0 ? 1 : 0 }}; transition: opacity 0.8s ease-in-out;">
                <div class="container h-100 d-flex align-items-center">
                    <div class="hero__content-wrap py-4 px-3 px-md-4 rounded bg-dark bg-opacity-50 text-white" style="max-width: 650px;">
                        <span class="badge bg-warning text-dark px-3 py-2 text-uppercase mb-2 font-weight-bold" style="letter-spacing: 1px;">{{ $banner['subtitle'] }}</span>
                        <h1 class="text-white fw-bold mb-3" style="font-size: clamp(1.6rem, 4vw, 2.8rem); line-height: 1.2;">{{ $banner['title'] }}</h1>
                        <p class="text-light lead d-none d-sm-block mb-4">Dedicated to academic excellence, moral discipline, and holistic child development.</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('admission') }}" class="btn btn-primary px-4 py-2 fw-bold rounded-pill">Apply For Admission</a>
                            <a href="{{ route('about') }}" class="btn btn-outline-light px-4 py-2 rounded-pill">Explore School</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Notice Board / Ticker Banner -->
<div class="bg-primary text-white py-2 shadow-sm">
    <div class="container-fluid px-3 px-md-4 d-flex align-items-center">
        <span class="badge bg-danger text-white me-3 px-3 py-2 text-uppercase font-weight-bold flex-shrink-0" style="font-size: 13px;">Latest Notices</span>
        <marquee onmouseover="this.stop();" onmouseout="this.start();" class="text-white fw-semibold small">
            @foreach($notices as $notice)
                <span class="me-5"><i class="fa-solid fa-bell text-warning me-1"></i> <strong>[{{ $notice['date'] }}]</strong> {{ $notice['title'] }}</span>
            @endforeach
        </marquee>
    </div>
</div>

<!-- About Us Highlights Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="pe-lg-4 text-center text-lg-start">
                    <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 1.5px;">Welcome To Our Campus</span>
                    <h2 class="fw-bold text-dark mt-2 mb-3" style="font-size: clamp(1.8rem, 3vw, 2.5rem);">About {{ config('school.name') }}</h2>
                    <p class="text-muted lead">Located at {{ config('school.location') }}, {{ config('school.name') }} provides an inspiring learning environment where students excel academically, socially, and morally.</p>
                    <p class="text-secondary small">Our goal is to foster independent thinkers, confident leaders, and responsible global citizens through modern pedagogical methods, state-of-the-art facilities, and strong core values.</p>
                    
                    <div class="row g-3 mt-3">
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-primary bg-light rounded">
                                <h4 class="fw-bold text-primary mb-1">100%</h4>
                                <small class="text-dark fw-semibold">Pass Result Guarantee</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border-start border-4 border-success bg-light rounded">
                                <h4 class="fw-bold text-success mb-1">Modern</h4>
                                <small class="text-dark fw-semibold">Computer & Science Labs</small>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn btn-dark mt-4 px-4 py-2 rounded-pill">Read More About Us <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header bg-dark text-white p-4">
                        <h4 class="mb-0 text-white fw-bold"><i class="fa-solid fa-user-graduate me-2 text-warning"></i> Principal's Message</h4>
                        <small class="text-secondary">Desk of the Principal • {{ config('school.name') }}</small>
                    </div>
                    <div class="card-body p-4 bg-light">
                        <blockquote class="blockquote small text-secondary mb-3" style="font-style: italic;">
                            "Education is not merely the learning of facts, but the training of the mind to think critically and act compassionately. At {{ config('school.name') }}, we walk with every student on their journey toward academic success and personal integrity."
                        </blockquote>
                        <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                            <div>
                                <h6 class="mb-0 fw-bold text-dark">Principal</h6>
                                <small class="text-muted">{{ config('school.name') }}, {{ config('school.location') }}</small>
                            </div>
                            <a href="{{ route('principal') }}" class="btn btn-outline-primary btn-sm rounded-pill">Full Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Facilities Showcase Grid -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold text-uppercase small">World Class Campus</span>
            <h2 class="fw-bold text-dark mt-1">Our School Facilities</h2>
            <div class="mx-auto bg-primary rounded" style="width: 60px; height: 3px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden hover-top transition">
                    <div class="p-4 bg-primary text-white text-center">
                        <i class="fa-solid fa-book-open fs-1 mb-2"></i>
                        <h4 class="text-white fw-bold mb-0">Rich Library</h4>
                    </div>
                    <div class="card-body p-4">
                        <p class="card-text text-muted small">Over 10,000 reference books, journals, encyclopedias, and literature fostering independent reading habits.</p>
                        <a href="{{ route('facility.show', 'library') }}" class="fw-bold text-primary text-decoration-none small">Explore Library <i class="fa-solid fa-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden hover-top transition">
                    <div class="p-4 bg-success text-white text-center">
                        <i class="fa-solid fa-laptop-code fs-1 mb-2"></i>
                        <h4 class="text-white fw-bold mb-0">Computer Lab</h4>
                    </div>
                    <div class="card-body p-4">
                        <p class="card-text text-muted small">High-speed internet workstations, coding modules, and digital tools preparing students for the modern tech era.</p>
                        <a href="{{ route('facility.show', 'computer-lab') }}" class="fw-bold text-success text-decoration-none small">Explore Computer Lab <i class="fa-solid fa-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden hover-top transition">
                    <div class="p-4 bg-dark text-white text-center">
                        <i class="fa-solid fa-flask-vial fs-1 mb-2 text-warning"></i>
                        <h4 class="text-white fw-bold mb-0">Science Labs</h4>
                    </div>
                    <div class="card-body p-4">
                        <p class="card-text text-muted small">Fully equipped Physics, Chemistry, and Biology laboratories enabling hands-on practical experimentation.</p>
                        <a href="{{ route('facility.show', 'physics-lab') }}" class="fw-bold text-dark text-decoration-none small">Explore Science Labs <i class="fa-solid fa-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Toppers Showcase Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-8">
                <span class="text-primary fw-bold text-uppercase small">Academic Stars</span>
                <h2 class="fw-bold text-dark">Our Board Exam Toppers</h2>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('toppers.x') }}" class="btn btn-outline-primary rounded-pill px-4 btn-sm">View All Toppers</a>
            </div>
        </div>

        <div class="row g-4">
            @foreach(array_merge(array_slice($toppersX, 0, 2), array_slice($toppersXII, 0, 2)) as $topper)
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 border shadow-sm text-center p-3 rounded-4">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3 border border-3 border-primary" style="width: 80px; height: 80px;">
                            <i class="fa-solid fa-user-graduate fs-2 text-primary"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-1">{{ $topper['name'] }}</h5>
                        <span class="badge bg-warning text-dark mx-auto mb-2 fw-bold">{{ $topper['percentage'] }}</span>
                        <p class="small text-muted mb-0">{{ $topper['rank'] }} • Session {{ $topper['year'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h2 class="fw-bold text-white mb-2">Admissions Open For Session 2026-27</h2>
        <p class="lead text-light mb-4" style="max-width: 700px; margin: 0 auto;">Join {{ config('school.name') }}, {{ config('school.location') }} and build a bright future for your child.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('admission') }}" class="btn btn-primary px-4 py-2 fw-bold rounded-pill">Admission Procedure</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-2 rounded-pill">Contact School Office</a>
        </div>
    </div>
</section>
@endsection
