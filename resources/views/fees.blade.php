@extends('layouts.app')

@section('title', 'Fees Structure - ' . config('school.name'))

@section('content')
<div class="bg-primary text-white py-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-bold text-white mb-1">Fee Structure & Guidelines</h1>
        <p class="mb-0 text-light">{{ config('school.name') }}, {{ config('school.location') }}</p>
    </div>
</div>

<div class="container py-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <h3 class="fw-bold text-dark mb-2">Fee Schedule (Session 2026-27)</h3>
                <p class="text-secondary small mb-4">Fees can be paid quarterly at the school fee counter or online through school bank transfer.</p>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Class Group</th>
                                <th>Admission Fee (One-Time)</th>
                                <th>Annual Charges</th>
                                <th>Monthly Tuition Fee</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Nursery to UKG</strong></td>
                                <td>₹ 3,500</td>
                                <td>₹ 2,000</td>
                                <td>₹ 1,100</td>
                            </tr>
                            <tr>
                                <td><strong>Class I to V</strong></td>
                                <td>₹ 4,500</td>
                                <td>₹ 2,500</td>
                                <td>₹ 1,350</td>
                            </tr>
                            <tr>
                                <td><strong>Class VI to VIII</strong></td>
                                <td>₹ 5,000</td>
                                <td>₹ 3,000</td>
                                <td>₹ 1,550</td>
                            </tr>
                            <tr>
                                <td><strong>Class IX & X</strong></td>
                                <td>₹ 6,000</td>
                                <td>₹ 3,500</td>
                                <td>₹ 1,800</td>
                            </tr>
                            <tr>
                                <td><strong>Class XI & XII (Science/Commerce)</strong></td>
                                <td>₹ 7,500</td>
                                <td>₹ 4,000</td>
                                <td>₹ 2,200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bg-light p-4 rounded-3 mt-4">
                    <h5 class="fw-bold text-primary mb-2"><i class="fa-solid fa-circle-info me-2"></i> Important Fee Rules</h5>
                    <ul class="small text-secondary mb-0 lh-lg">
                        <li>Fees must be paid on or before the 10th day of each due month.</li>
                        <li>Late fee charges of ₹10 per day will apply after the due date.</li>
                        <li>Duplicate fee receipts can be issued on payment of ₹50 processing fee.</li>
                        <li>For any fee query, please contact the administrative counter at {{ config('school.location') }}.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
