@extends('layouts.app')

@section('title', 'Photo Gallery - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">Event & Campus Gallery</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row g-4">
        @foreach($galleryItems as $item)
            <div class="col-sm-6 col-md-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <div class="bg-secondary text-white d-flex align-items-center justify-content-center p-5 position-relative" style="min-height: 220px; background: linear-gradient(135deg, #0b2545, #134074);">
                        <i class="fa-solid fa-camera-retro fs-1 opacity-75"></i>
                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark">{{ $item['category'] }}</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h6 class="fw-bold text-dark mb-0">{{ $item['title'] }}</h6>
                        <small class="text-muted">{{ config('school.name') }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
