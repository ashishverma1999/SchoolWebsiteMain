<!-- Footer Area Start -->
<footer class="footer-area bg-dark text-white pt-5 pb-3">
    <div class="container-fluid px-4 px-md-5">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset(config('school.logo')) }}" alt="{{ config('school.name') }}" style="width: 55px; height: 55px; max-width: 55px; max-height: 55px; object-fit: contain; flex-shrink: 0;" class="me-3 rounded-circle bg-white p-1">
                        <div class="flex-grow-1 min-w-0">
                            <h4 class="text-white mb-0 fw-bold" style="font-size: 18px; line-height: 1.25; word-wrap: break-word;">{{ config('school.name') }}</h4>
                            <p class="text-secondary small mb-0" style="font-size: 12px;">{{ config('school.location') }}</p>
                        </div>
                    </div>
                    <p class="text-light small mb-3">
                        Empowering young minds with quality education, core moral values, and modern academic excellence in a supportive environment.
                    </p>
                    <p class="small text-warning fw-bold mb-0">{{ config('school.affiliation') }}</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-3 border-bottom border-secondary pb-2">Quick Links</h5>
                    <ul class="list-unstyled small lh-lg">
                        <li><a href="{{ route('home') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> About Us</a></li>
                        <li><a href="{{ route('principal') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Principal Desk</a></li>
                        <li><a href="{{ route('admission') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Admission</a></li>
                        <li><a href="{{ route('tc') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> TC Verification</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-3 border-bottom border-secondary pb-2">Academics & Policy</h5>
                    <ul class="list-unstyled small lh-lg">
                        <li><a href="{{ route('fees') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Fees Structure</a></li>
                        <li><a href="{{ route('toppers.x') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Board Toppers</a></li>
                        <li><a href="{{ route('gallery') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Photo Gallery</a></li>
                        <li><a href="{{ route('page.show', 'school-infrastructure') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Infrastructure</a></li>
                        <li><a href="{{ route('contact') }}" class="text-light text-decoration-none hover-primary"><i class="fa-solid fa-chevron-right me-1 text-primary"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-3 border-bottom border-secondary pb-2">Contact Info</h5>
                    <ul class="list-unstyled small text-light lh-lg">
                        <li class="mb-2"><i class="fa-solid fa-location-dot me-2 text-primary"></i> {{ config('school.full_address') }}</li>
                        <li class="mb-2"><i class="fa-solid fa-phone me-2 text-primary"></i> <a href="tel:{{ config('school.phone') }}" class="text-light text-decoration-none">{{ config('school.phone') }}</a></li>
                        <li class="mb-2"><i class="fa-solid fa-envelope me-2 text-primary"></i> <a href="mailto:{{ config('school.email') }}" class="text-light text-decoration-none">{{ config('school.email') }}</a></li>
                    </ul>
                    <div class="mt-3">
                        <a href="{{ config('school.facebook') }}" class="btn btn-outline-light btn-sm me-1 rounded-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ config('school.instagram') }}" class="btn btn-outline-light btn-sm me-1 rounded-circle"><i class="fab fa-instagram"></i></a>
                        <a href="{{ config('school.youtube') }}" class="btn btn-outline-light btn-sm me-1 rounded-circle"><i class="fab fa-youtube"></i></a>
                        <a href="{{ config('school.whatsapp') }}" target="_blank" class="btn btn-outline-success btn-sm me-1 rounded-circle"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4 border-secondary">

        <div class="row align-items-center text-center text-md-start">
            <div class="col-md-8 mb-2 mb-md-0">
                <p class="small text-secondary mb-0">
                    &copy; {{ date('Y') }} <strong class="text-white">{{ config('school.name') }}</strong> ({{ config('school.location') }}). All Rights Reserved.
                </p>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <p class="small text-secondary mb-0">Designed & Developed with Laravel</p>
            </div>
        </div>
    </div>
</footer>
