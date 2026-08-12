@extends('layouts.app')

@section('title', 'School Objectives - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">Institutional Objectives</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <h3 class="fw-bold text-dark mb-4 border-bottom pb-3">Our Core Educational Objectives</h3>
                
                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-primary"><i class="fa-solid fa-graduation-cap"></i></div>
                    <div>
                        <h5 class="fw-bold text-dark">1. Academic Mastery & Cognitive Development</h5>
                        <p class="text-muted">To instill strong foundational concepts, critical thinking skills, and problem-solving abilities across science, mathematics, humanities, and languages.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-success"><i class="fa-solid fa-hands-holding-heart"></i></div>
                    <div>
                        <h5 class="fw-bold text-dark">2. Character Building & Moral Ethics</h5>
                        <p class="text-muted">To foster honesty, discipline, responsibility, and respect for diversity, ensuring every student develops into a upright citizen.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-warning"><i class="fa-solid fa-microchip"></i></div>
                    <div>
                        <h5 class="fw-bold text-dark">3. Technological Competence & Innovation</h5>
                        <p class="text-muted">To integrate modern digital tools, computer programming, and practical laboratory experiences into daily learning.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-danger"><i class="fa-solid fa-futbol"></i></div>
                    <div>
                        <h5 class="fw-bold text-dark">4. Physical Fitness & Team Spirit</h5>
                        <p class="text-muted">To encourage sportsmanship, physical wellness, and leadership through structured athletics and co-curricular programs.</p>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('admission') }}" class="btn btn-primary px-4 py-2 rounded-pill fw-bold">Enroll Your Child Today</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
