@extends('layouts.app')

@section('title', $title . ' - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">{{ $title }}</h1>
        @if(isset($subtitle))
            <p class="mb-0 text-light">{{ $subtitle }}</p>
        @else
            <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
        @endif
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="content-body text-secondary lh-lg">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
