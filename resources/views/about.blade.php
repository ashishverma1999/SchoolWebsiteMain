@extends('layouts.app')

@section('title', 'About Us - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">About Our School</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row g-4 align-items-center mb-5">
        <div class="col-lg-6">
            <h2 class="fw-bold text-dark mb-3">Welcome to {{ config('school.name') }}</h2>
            <p class="lead text-primary fw-semibold">{{ config('school.tagline') }}</p>
            <p class="text-secondary">
                At <strong>{{ config('school.name') }}</strong>, located at <strong>{{ config('school.location') }}</strong>, we are committed to providing a holistic educational experience that equips students with academic excellence, ethical integrity, and 21st-century life skills.
            </p>
            <p class="text-secondary">
                Our institution nurtures curiosity, critical thinking, creativity, and self-confidence. With a dedicated team of experienced educators, modern infrastructure, and safe environment, every child is encouraged to achieve their highest potential.
            </p>
        </div>
        <div class="col-lg-6">
            <div class="p-4 bg-light rounded-4 border shadow-sm">
                <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-bullseye text-primary me-2"></i> Our Core Philosophy</h4>
                <ul class="list-unstyled lh-lg text-secondary">
                    <li class="mb-2"><i class="fa-solid fa-check-circle text-success me-2"></i> <strong>Academic Rigor:</strong> Conceptual learning aligned with national standards.</li>
                    <li class="mb-2"><i class="fa-solid fa-check-circle text-success me-2"></i> <strong>Character Building:</strong> Inculcating moral, spiritual, and civic values.</li>
                    <li class="mb-2"><i class="fa-solid fa-check-circle text-success me-2"></i> <strong>Holistic Growth:</strong> Equal focus on academics, sports, arts, and technology.</li>
                    <li class="mb-2"><i class="fa-solid fa-check-circle text-success me-2"></i> <strong>Safe Environment:</strong> Caring, inclusive, and disciplined campus atmosphere.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="p-4 border rounded-3 bg-white shadow-sm h-100">
                <i class="fa-solid fa-compass fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold text-dark">Our Mission</h4>
                <p class="text-muted small">To empower students to reach their full academic, social, and emotional potential through innovative teaching and value-based education.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded-3 bg-white shadow-sm h-100">
                <i class="fa-solid fa-eye fs-1 text-success mb-3"></i>
                <h4 class="fw-bold text-dark">Our Vision</h4>
                <p class="text-muted small">To be a premier institution recognized for academic excellence, moral leadership, and shaping compassionate citizens for society.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border rounded-3 bg-white shadow-sm h-100">
                <i class="fa-solid fa-heart fs-1 text-danger mb-3"></i>
                <h4 class="fw-bold text-dark">Our Values</h4>
                <p class="text-muted small">Integrity, Respect, Discipline, Empathy, Perseverance, and Excellence in every endeavor we undertake.</p>
            </div>
        </div>
    </div>
</div>
@endsection
