<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('school.name') . ' - ' . config('school.location'))</title>
    <meta name="description" content="@yield('meta_description', config('school.name') . ', ' . config('school.location') . ' - Providing quality education, modern facilities, and holistic student development.')">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(config('school.logo')) }}">
    
    <!-- CSS Vendor & Plugin Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">

    <!-- Mobile Responsiveness & Custom Overrides -->
    <style>
        body {
            overflow-x: hidden;
            font-family: 'Trebuchet MS', system-ui, -apple-system, sans-serif;
        }
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        @media (max-width: 576px) {
            .brand-title {
                font-size: 15px !important;
                line-height: 1.1 !important;
            }
            .brand-subtitle {
                font-size: 11px !important;
            }
            .header__logo img {
                width: 50px !important;
                height: 50px !important;
            }
            .hero__content-wrap {
                left: 15px !important;
                right: 15px !important;
                bottom: 20px !important;
                padding: 10px !important;
            }
            .hero__content-wrap .title {
                font-size: 16px !important;
                line-height: 22px !important;
            }
        }
        .cursor-pointer {
            cursor: pointer;
        }
    </style>

    @stack('styles')
</head>
<body>

    @include('partials.topbar')

    @include('partials.header')

    @include('partials.offcanvas')

    <main id="main-content">
        @if(session('success'))
            <div class="container mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Progress Back to Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <!-- JS Core Vendor Files -->
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/metismenu.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnifying-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotop.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/resize-sensor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/twinmax.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
