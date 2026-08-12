@extends('layouts.app')

@section('title', 'Admission Details - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">Admission Details & Procedure</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                <h3 class="fw-bold text-dark mb-3">Admission Guidelines (Session 2026-27)</h3>
                <p class="text-secondary">
                    Admissions to <strong>{{ config('school.name') }}</strong> are open to all eligible candidates subject to availability of seats and fulfillment of admission criteria.
                </p>

                <h5 class="fw-bold text-primary mt-4 mb-3">Admission Process Step-by-Step</h5>
                <ol class="lh-lg text-secondary">
                    <li><strong>Registration:</strong> Obtain and fill out the admission form from the school office at {{ config('school.location') }} or register online.</li>
                    <li><strong>Interaction / Assessment:</strong> Informal interaction for Pre-Primary classes and basic assessment test for Class I onwards.</li>
                    <li><strong>Document Verification:</strong> Verification of Date of Birth certificate, Transfer Certificate (if applicable), and address proof.</li>
                    <li><strong>Fee Payment & Confirmation:</strong> Deposit admission fees at the school accounts desk to confirm enrollment.</li>
                </ol>

                <h5 class="fw-bold text-primary mt-4 mb-3">Required Documents</h5>
                <ul class="list-group list-group-flush mb-3 text-secondary">
                    <li class="list-group-item"><i class="fa-solid fa-file-lines me-2 text-primary"></i> Birth Certificate issued by Municipal Authority</li>
                    <li class="list-group-item"><i class="fa-solid fa-file-lines me-2 text-primary"></i> Original Transfer Certificate (TC) from previous school (Class I onwards)</li>
                    <li class="list-group-item"><i class="fa-solid fa-file-lines me-2 text-primary"></i> Copy of Aadhaar Card of Student & Parents</li>
                    <li class="list-group-item"><i class="fa-solid fa-file-lines me-2 text-primary"></i> 4 Recent Passport Size Photographs of Student</li>
                    <li class="list-group-item"><i class="fa-solid fa-file-lines me-2 text-primary"></i> Report Card / Marksheet of previous class</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-light">
                <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-headset me-2 text-primary"></i> Admission Helpdesk</h4>
                <p class="small text-muted mb-4">For admission inquiries, fee structure details, and campus visits, please contact our administrative desk.</p>

                <div class="mb-3">
                    <strong class="d-block text-dark small"><i class="fa-solid fa-phone me-2 text-primary"></i> Phone Number</strong>
                    <a href="tel:{{ config('school.phone') }}" class="text-primary text-decoration-none fw-bold">{{ config('school.phone') }}</a>
                </div>

                <div class="mb-3">
                    <strong class="d-block text-dark small"><i class="fa-solid fa-envelope me-2 text-primary"></i> Email Address</strong>
                    <a href="mailto:{{ config('school.email') }}" class="text-primary text-decoration-none fw-bold">{{ config('school.email') }}</a>
                </div>

                <div class="mb-4">
                    <strong class="d-block text-dark small"><i class="fa-solid fa-location-dot me-2 text-primary"></i> School Campus</strong>
                    <span class="text-secondary small">{{ config('school.full_address') }}</span>
                </div>

                <a href="{{ route('contact') }}" class="btn btn-primary w-100 fw-bold py-2 rounded-pill">Contact Admissions Office</a>
            </div>
        </div>
    </div>
</div>
@endsection
