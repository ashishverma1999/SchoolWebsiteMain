@extends('layouts.app')

@section('title', $title . ' - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">{{ $title }}</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="text-center mb-5">
        <span class="text-primary fw-bold text-uppercase small">Hall of Fame</span>
        <h2 class="fw-bold text-dark">Our Outstanding Academic Achievers</h2>
        <p class="text-muted small">Congratulations to our brilliant students for exceptional performance in board examinations.</p>
    </div>

    <div class="row g-4">
        @foreach($toppers as $topper)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border shadow-sm text-center p-4 rounded-4 h-100">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3 border border-3 border-warning shadow-sm" style="width: 90px; height: 90px;">
                        <i class="fa-solid fa-trophy fs-2 text-warning"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-1">{{ $topper['name'] }}</h5>
                    <div class="mb-2">
                        <span class="badge bg-primary fs-6 px-3 py-1">{{ $topper['percentage'] }}</span>
                    </div>
                    <p class="small fw-bold text-dark mb-1">{{ $topper['rank'] }}</p>
                    @if(isset($topper['stream']))
                        <p class="small text-primary mb-1">{{ $topper['stream'] }}</p>
                    @endif
                    <small class="text-muted d-block">{{ $topper['remarks'] ?? 'High Achiever' }}</small>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
