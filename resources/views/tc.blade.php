@extends('layouts.app')

@section('title', 'Transfer Certificate (TC) - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">Transfer Certificate (TC) Verification</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <h4 class="fw-bold text-dark mb-3 text-center"><i class="fa-solid fa-file-contract text-primary me-2"></i> Search Issued TC</h4>
                <p class="text-muted text-center small mb-4">Enter Admission Number / TC Number to verify or download issued Transfer Certificate.</p>

                <form action="#" method="GET" class="mb-4">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Enter Admission No. or TC No. (e.g. TC-2026-104)" required>
                        <button type="submit" class="btn btn-primary fw-bold px-4">Search TC</button>
                    </div>
                </form>

                <div class="alert alert-info border-0 rounded-3 small">
                    <i class="fa-solid fa-circle-info me-2"></i> <strong>Note:</strong> Transfer Certificates are issued strictly upon formal application and clearance of all school dues. For further assistance, contact the administrative office at {{ config('school.phone') }}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
