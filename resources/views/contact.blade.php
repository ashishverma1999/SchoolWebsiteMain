@extends('layouts.app')

@section('title', 'Contact Us - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">Contact School Office</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-light">
                <h3 class="fw-bold text-dark mb-4">Get In Touch</h3>

                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-primary"><i class="fa-solid fa-school"></i></div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">School Name</h6>
                        <p class="text-secondary small mb-0">{{ config('school.name') }}</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-primary"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Campus Address</h6>
                        <p class="text-secondary small mb-0">{{ config('school.full_address') }}</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-primary"><i class="fa-solid fa-phone"></i></div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Phone Number</h6>
                        <p class="text-secondary small mb-0">
                            <a href="tel:{{ config('school.phone') }}" class="text-decoration-none text-secondary">{{ config('school.phone') }}</a>
                        </p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3 fs-3 text-primary"><i class="fa-solid fa-envelope"></i></div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Email Address</h6>
                        <p class="text-secondary small mb-0">
                            <a href="mailto:{{ config('school.email') }}" class="text-decoration-none text-secondary">{{ config('school.email') }}</a>
                        </p>
                    </div>
                </div>

                <div class="pt-3 border-top mt-auto">
                    <h6 class="fw-bold text-dark mb-2">Office Hours</h6>
                    <p class="small text-muted mb-0">Monday – Saturday: 08:00 AM – 02:00 PM (Closed on Sundays & Gazetted Holidays)</p>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <h3 class="fw-bold text-dark mb-4">Send Us a Message</h3>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0 small">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small">Your Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe" value="{{ old('name') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control" placeholder="+91 98765 43210" value="{{ old('phone') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small">Subject <span class="text-danger">*</span></label>
                            <input type="text" name="subject" class="form-control" placeholder="Admission Query / General Inquiry" value="{{ old('subject') }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold small">Your Message <span class="text-danger">*</span></label>
                            <textarea name="message" rows="4" class="form-control" placeholder="Please write your inquiry here..." required>{{ old('message') }}</textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-bold">Send Message <i class="fa-solid fa-paper-plane ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
