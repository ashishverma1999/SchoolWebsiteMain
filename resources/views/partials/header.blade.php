<!-- header area start -->
<header class="header header__sticky v__2 shadow-sm bg-white">
    <div class="container-fluid header11topDown py-2">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="header__wrapper d-flex align-items-center justify-content-between">
                    <div class="header__logo d-flex align-items-center">
                        <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
                            <img src="{{ asset(config('school.logo')) }}" height="70" width="70" alt="{{ config('school.name') }} Logo" class="me-2 rounded-circle border" style="object-fit: contain; width: 65px; height: 65px;">
                            <div class="school-name text-dark">
                                <h5 class="mb-0 fw-bold brand-title" style="font-size: 20px; line-height: 1.2; color: #0b2545;">{{ config('school.name') }}</h5>
                                <small class="text-secondary fw-semibold brand-subtitle" style="font-size: 13px; display: block;">{{ config('school.location') }}</small>
                            </div>
                        </a>
                    </div>

                    <div class="header__menu d-none d-lg-block">
                        <div class="navigation">
                            <nav class="navigation__menu">
                                <ul>
                                    <li class="navigation__menu--item {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}" class="navigation__menu--item__link">Home</a>
                                    </li> 
                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="javascript:void(0);" class="navigation__menu--item__link">About Us</a>
                                        <ul class="submenu sub__style">
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('objectives') }}">Objectives</a></li>
                                            <li><a href="{{ route('principal') }}">Principal Desk</a></li>
                                        </ul>
                                    </li>
                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="javascript:void(0);" class="navigation__menu--item__link">Curriculum</a>
                                        <ul class="submenu sub__style">
                                            <li><a href="{{ route('fees') }}">Fees Structure</a></li>
                                            <li><a href="{{ route('admission') }}">Admission Details</a></li>
                                            <li><a href="{{ route('page.show', 'school-timings') }}">School Timings</a></li>
                                            <li><a href="{{ route('page.show', 'teaching-staff') }}">Teaching Staff</a></li>
                                            <li><a href="{{ route('page.show', 'academic-calendar') }}">Academic Calendar</a></li>
                                            <li><a href="{{ route('page.show', 'school-infrastructure') }}">School Infrastructure</a></li>
                                            <li><a href="{{ route('page.show', 'school-management-committee') }}">School Management Committee</a></li>
                                        </ul>
                                    </li>
                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="javascript:void(0);" class="navigation__menu--item__link">Facilities</a>
                                        <ul class="submenu sub__style">
                                            <li><a href="{{ route('facility.show', 'library') }}">Library</a></li>
                                            <li><a href="{{ route('facility.show', 'computer-lab') }}">Computer Lab</a></li>
                                            <li><a href="{{ route('facility.show', 'physics-lab') }}">Physics Lab</a></li>
                                            <li><a href="{{ route('facility.show', 'chemistry-lab') }}">Chemistry Lab</a></li>
                                            <li><a href="{{ route('facility.show', 'biology-lab') }}">Biology Lab</a></li>
                                            <li><a href="{{ route('facility.show', 'parent-teacher-interaction') }}">Parent-Teacher Interaction</a></li>
                                        </ul>
                                    </li>
                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="javascript:void(0);" class="navigation__menu--item__link">Achievements</a>
                                        <ul class="submenu sub__style">
                                            <li><a href="{{ route('toppers.x') }}">Toppers Class X</a></li>
                                            <li><a href="{{ route('toppers.xii') }}">Toppers Class XII</a></li>
                                        </ul>
                                    </li>
                                    <li class="navigation__menu--item {{ request()->routeIs('gallery') ? 'active' : '' }}">
                                        <a href="{{ route('gallery') }}" class="navigation__menu--item__link">Gallery</a>
                                    </li>
                                    <li class="navigation__menu--item {{ request()->routeIs('tc') ? 'active' : '' }}">
                                        <a href="{{ route('tc') }}" class="navigation__menu--item__link">TC</a>
                                    </li>
                                    <li class="navigation__menu--item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}" class="navigation__menu--item__link">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header__right d-flex align-items-center gap-2">
                        <a href="{{ route('admission') }}" class="btn btn-primary d-none d-sm-inline-block rounded-pill px-3 py-2 btn-sm fw-bold">Admission Open</a>
                        <div class="header__right--item d-lg-none">
                            <button type="button" id="menu-btn" class="menu__trigger cursor-pointer rounded border d-flex align-items-center justify-content-center" aria-label="Open mobile navigation menu">
                                <i class="fa-solid fa-bars text-dark fs-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
