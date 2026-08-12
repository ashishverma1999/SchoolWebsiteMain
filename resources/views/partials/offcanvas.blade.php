<!-- Mobile Navigation Drawer / Offcanvas -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="fa-sharp fa-solid fa-xmark"></i></button>
    
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail mb--30 text-center">
            <img src="{{ asset(config('school.logo')) }}" alt="{{ config('school.name') }} Logo" style="max-width: 90px;" class="rounded-circle shadow-sm">
            <h5 class="mt-2 fw-bold text-dark mb-0" style="font-size: 18px;">{{ config('school.name') }}</h5>
            <small class="text-muted" style="font-size: 12px;">{{ config('school.location') }}</small>
        </div>
        
        <div class="mobile-menu-sidebar">
            <nav class="nav-main mobile-menu-active">
                <ul class="mainmenu flex-column">
                    <li><a href="{{ route('home') }}" class="main">Home</a></li>
                    <li class="has-droupdown">
                        <a href="javascript:void(0);" class="main">About Us</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('objectives') }}">Objectives</a></li>
                            <li><a href="{{ route('principal') }}">Principal Desk</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="javascript:void(0);" class="main">Curriculum</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('fees') }}">Fees Structure</a></li>
                            <li><a href="{{ route('admission') }}">Admission Details</a></li>
                            <li><a href="{{ route('page.show', 'school-timings') }}">School Timings</a></li>
                            <li><a href="{{ route('page.show', 'teaching-staff') }}">Teaching Staff</a></li>
                            <li><a href="{{ route('page.show', 'academic-calendar') }}">Academic Calendar</a></li>
                            <li><a href="{{ route('page.show', 'school-infrastructure') }}">School Infrastructure</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="javascript:void(0);" class="main">Facilities</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('facility.show', 'library') }}">Library</a></li>
                            <li><a href="{{ route('facility.show', 'computer-lab') }}">Computer Lab</a></li>
                            <li><a href="{{ route('facility.show', 'physics-lab') }}">Physics Lab</a></li>
                            <li><a href="{{ route('facility.show', 'chemistry-lab') }}">Chemistry Lab</a></li>
                            <li><a href="{{ route('facility.show', 'biology-lab') }}">Biology Lab</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="javascript:void(0);" class="main">Achievements</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('toppers.x') }}">Toppers Class X</a></li>
                            <li><a href="{{ route('toppers.xii') }}">Toppers Class XII</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('gallery') }}" class="main">Gallery</a></li>
                    <li><a href="{{ route('tc') }}" class="main">Transfer Certificate (TC)</a></li>
                    <li><a href="{{ route('contact') }}" class="main">Contact Us</a></li>
                </ul>
            </nav>

            <div class="offcanvase__info--content mt--30 border-top pt-3">
                <a href="tel:{{ config('school.phone') }}" class="d-block mb-2 text-decoration-none text-dark">
                    <span><i class="fa-sharp fa-solid fa-phone text-primary me-2"></i></span>{{ config('school.phone') }}
                </a>
                <a href="mailto:{{ config('school.email') }}" class="d-block mb-2 text-decoration-none text-dark">
                    <span><i class="fa-sharp fa-solid fa-envelope text-primary me-2"></i></span>{{ config('school.email') }}
                </a>
                <p class="mb-2 text-muted small">
                    <span><i class="fa-sharp fa-solid fa-location-dot text-primary me-2"></i></span>{{ config('school.full_address') }}
                </p>
                <div class="offcanvase__info--content--social mt-3">
                    <p class="title fw-bold mb-2">Follow Us:</p>
                    <div class="social__links d-flex gap-3">
                        <a href="{{ config('school.facebook') }}" class="text-primary fs-5"><i class="fa-brands fa-facebook"></i></a>
                        <a href="{{ config('school.instagram') }}" class="text-danger fs-5"><i class="fa-brands fa-instagram"></i></a>
                        <a href="{{ config('school.whatsapp') }}" target="_blank" class="text-success fs-5"><i class="fab fa-whatsapp"></i></a>
                        <a href="{{ config('school.youtube') }}" class="text-danger fs-5"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
