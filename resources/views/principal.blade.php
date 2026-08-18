@extends('layouts.app')

@section('title', 'Principal Desk - ' . config('school.name'))

@section('content')
<div class="bg-dark text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">From the Principal's Desk</h1>
        <p class="mb-0 text-secondary">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row g-4 align-items-start justify-content-center">
        <div class="col-md-4 text-center">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden p-3 bg-light">
                <div class="rounded-3 overflow-hidden mx-auto mb-3 shadow-sm" style="width: 100%; max-width: 240px; aspect-ratio: 3/4; background-color: #e9ecef;">
                    <img src="{{ asset('assets/images/principal/principal.jpg') }}" alt="Principal, {{ config('school.name') }}" class="w-100 h-100" style="object-fit: cover; object-position: top center;">
                </div>
                <h4 class="fw-bold text-dark mb-1">Principal</h4>
                <p class="text-primary fw-semibold mb-0">{{ config('school.name') }}</p>
                <small class="text-muted">{{ config('school.location') }}</small>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <h3 class="fw-bold text-primary mb-3">Warm Greetings to Students, Parents & Well-Wishers</h3>
                
                <p class="text-secondary lead">
                    As we step into a new academic session at <strong>{{ config('school.name') }}</strong>, I extend my heartfelt welcome to all our students, dedicated staff members, parents, and esteemed members of our community.
                </p>

                <p class="text-secondary">
                    Every academic year brings fresh vigor, new opportunities, and renewed determination to fulfill our dreams. At {{ config('school.name') }}, our objective is to help every student realize their full potential and support them in pursuing their goals with enthusiasm and perseverance.
                </p>

                <p class="text-secondary">
                    We aim to make every child a <em>'Beacon of Hope'</em> for themselves, their family, and society. {{ config('school.name') }} provides a safe, welcoming, and positive learning environment — a true <strong>'home away from home'</strong>. Here, every student is respected and nurtured regardless of background.
                </p>

                <p class="text-secondary">
                    Along with academic excellence, we prioritize moral, spiritual, ethical, and civic values. Education is a collaborative effort between the school and parents, and together, we will continue to build a bright and meaningful future for our children.
                </p>

                <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Principal</h6>
                        <small class="text-muted">{{ config('school.name') }}</small>
                    </div>
                    <span class="badge bg-primary px-3 py-2">Session 2026-27</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
