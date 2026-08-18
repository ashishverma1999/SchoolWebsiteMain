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
        /* =========================================================
       GLOBAL
       ========================================================= */

        html,
        body {
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        body {
            font-family: 'Trebuchet MS', system-ui, -apple-system, sans-serif;
        }

        .img-fluid-responsive {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto;
        }

        .object-fit-cover {
            object-fit: cover !important;
        }

        .object-fit-contain {
            object-fit: contain !important;
        }

        .object-top {
            object-position: top center !important;
        }

        .inset-0 {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .backdrop-blur {
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .cursor-pointer {
            cursor: pointer;
        }


        /* =========================================================
       HEADER / TOP BAR
       ========================================================= */

        .top-bar,
        .header11topDown {
            position: relative !important;
            top: auto !important;
            left: auto !important;
            right: auto !important;
            height: auto !important;
            margin-top: 0 !important;
            z-index: 20 !important;
        }

        .header.header__sticky {
            position: relative !important;
            z-index: 21 !important;
        }


        /* =========================================================
       FULL WIDTH HERO / BANNER
       ========================================================= */

        .home-hero {
            position: relative !important;
            width: 100vw !important;
            max-width: 100vw !important;
            margin: 0 !important;
            padding: 0 !important;
            left: 0 !important;
            overflow: hidden !important;
        }

        .home-hero__slider {
            position: relative !important;
            width: 100vw !important;
            max-width: 100vw !important;

            height: clamp(450px, 60vw, 650px) !important;
            min-height: 450px !important;
            max-height: 650px !important;

            margin: 0 !important;
            padding: 0 !important;

            background: #111827 !important;
            overflow: hidden !important;
        }

        .slide-item {
            position: absolute !important;
            inset: 0 !important;

            width: 100% !important;
            height: 100% !important;
            min-width: 100% !important;
            min-height: 100% !important;

            opacity: 0;
            visibility: hidden;

            overflow: hidden !important;

            transition:
                opacity 0.8s ease-in-out,
                visibility 0.8s ease-in-out;
        }

        .slide-item.active {
            opacity: 1 !important;
            visibility: visible !important;
            z-index: 2 !important;
        }


        /* =========================================================
       HERO IMAGE
       ========================================================= */

        .home-hero__image,
        .slide-item img {
            position: absolute !important;
            inset: 0 !important;

            display: block !important;

            width: 100vw !important;
            min-width: 100vw !important;
            max-width: none !important;

            height: 100% !important;
            min-height: 100% !important;
            max-height: none !important;

            margin: 0 !important;
            padding: 0 !important;

            object-fit: cover !important;
            object-position: center center !important;

            transform: none !important;

            z-index: 1 !important;
        }


        /* =========================================================
       HERO OVERLAY
       ========================================================= */

        .home-hero__overlay {
            position: absolute !important;
            inset: 0 !important;

            width: 100% !important;
            height: 100% !important;

            background:
                linear-gradient(90deg,
                    rgba(0, 0, 0, 0.60) 0%,
                    rgba(0, 0, 0, 0.35) 40%,
                    rgba(0, 0, 0, 0.12) 100%) !important;

            z-index: 3 !important;
            pointer-events: none !important;
        }


        /* =========================================================
       HERO CONTENT
       ========================================================= */

        .home-hero__slider .container {
            position: relative !important;
            z-index: 4 !important;
            height: 100% !important;
        }

        .home-hero__content {
            width: 100%;
            max-width: 580px;

            background: rgba(15, 23, 42, 0.72);

            border: 1px solid rgba(255, 255, 255, 0.20);
            border-radius: 1.25rem;

            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.40);

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }


        /* =========================================================
       HERO NAVIGATION BUTTONS
       ========================================================= */

        .banner-nav-btn {
            position: absolute !important;
            top: 50% !important;

            width: 48px !important;
            height: 48px !important;

            padding: 0 !important;

            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            border-radius: 50% !important;
            border: 1.5px solid rgba(255, 255, 255, 0.55) !important;

            background: rgba(0, 0, 0, 0.45) !important;
            color: #ffffff !important;

            font-size: 18px !important;

            transform: translateY(-50%) !important;
            transition: all 0.3s ease !important;

            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);

            z-index: 10 !important;
            cursor: pointer !important;
        }

        .banner-nav-btn.prev-btn {
            left: 24px !important;
            right: auto !important;
        }

        .banner-nav-btn.next-btn {
            right: 24px !important;
            left: auto !important;
        }

        .banner-nav-btn:hover {
            background: rgba(255, 255, 255, 0.90) !important;
            color: #000000 !important;
            transform: translateY(-50%) scale(1.08) !important;
        }


        /* =========================================================
       SLIDER DOTS
       ========================================================= */

        .slider-dots {
            z-index: 10 !important;
        }

        .dot-item {
            transition: all 0.3s ease !important;
        }


        /* =========================================================
       NOTICE TICKER
       ========================================================= */

        .notice-ticker {
            position: relative;
            z-index: 5;
            width: 100%;
            overflow: hidden;
        }

        .notice-ticker marquee {
            display: block;
            min-width: 0;
            width: 100%;
        }


        /* =========================================================
       PRINCIPAL PHOTO
       ========================================================= */

        .principal-photo {
            width: min(170px, 100%);
            aspect-ratio: 3 / 4;

            background: #f8f9fa;

            overflow: hidden;
        }

        .principal-photo img {
            width: 100%;
            height: 100%;

            object-fit: contain;
            object-position: center top;

            background: #151924;
        }


        /* =========================================================
       DESKTOP
       ========================================================= */

        @media (min-width: 1200px) {

            .home-hero__slider {
                width: 100vw !important;
                height: 650px !important;
                min-height: 650px !important;
                max-height: 650px !important;
            }

            .home-hero__image,
            .slide-item img {
                width: 100vw !important;
                height: 650px !important;
            }

            .banner-nav-btn.prev-btn {
                left: 28px !important;
            }

            .banner-nav-btn.next-btn {
                right: 28px !important;
            }
        }


        /* =========================================================
       TABLET
       ========================================================= */

        @media (min-width: 768px) and (max-width: 1199.98px) {

            .home-hero__slider {
                width: 100vw !important;
                height: 560px !important;
                min-height: 560px !important;
                max-height: 560px !important;
            }

            .home-hero__image,
            .slide-item img {
                width: 100vw !important;
                height: 560px !important;
            }

            .home-hero__content {
                max-width: 520px;
            }

            .banner-nav-btn.prev-btn {
                left: 16px !important;
            }

            .banner-nav-btn.next-btn {
                right: 16px !important;
            }
        }


        /* =========================================================
       MOBILE
       ========================================================= */

        @media (max-width: 767.98px) {

            .container {
                padding-left: 16px !important;
                padding-right: 16px !important;
            }

            /* Full-width mobile banner */
            .home-hero {
                width: 100vw !important;
                max-width: 100vw !important;
                left: 0 !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
                transform: none !important;
            }

            .home-hero__slider {
                width: 100vw !important;
                max-width: 100vw !important;

                height: 75vh !important;
                min-height: 500px !important;
                max-height: none !important;
            }

            .slide-item {
                width: 100% !important;
                height: 100% !important;
            }

            .home-hero__image,
            .slide-item img {
                width: 100vw !important;
                min-width: 100vw !important;

                height: 100% !important;
                min-height: 100% !important;

                object-fit: cover !important;
                object-position: center center !important;
            }

            .home-hero__overlay {
                background:
                    linear-gradient(180deg,
                        rgba(0, 0, 0, 0.18) 0%,
                        rgba(0, 0, 0, 0.30) 40%,
                        rgba(0, 0, 0, 0.72) 100%) !important;
            }


            /* Mobile hero content */
            .home-hero__content {
                width: calc(100% - 30px) !important;
                max-width: none !important;

                margin-left: auto !important;
                margin-right: auto !important;

                padding: 14px !important;

                background: rgba(15, 23, 42, 0.80) !important;

                border-radius: 14px !important;
            }

            .hero__content-wrap {
                padding: 14px !important;
            }


            /* Mobile navigation */
            .banner-nav-btn {
                width: 36px !important;
                height: 36px !important;

                font-size: 14px !important;
            }

            .banner-nav-btn.prev-btn {
                left: 8px !important;
            }

            .banner-nav-btn.next-btn {
                right: 8px !important;
            }


            /* Mobile dots */
            .slider-dots {
                margin-bottom: 12px !important;
            }


            /* Mobile brand */
            .brand-title {
                font-size: 14px !important;
                line-height: 1.15 !important;
            }

            .brand-subtitle {
                font-size: 10px !important;
            }

            .header__logo img {
                width: 48px !important;
                height: 48px !important;
            }


            /* Mobile notice ticker */
            .notice-ticker .container-fluid {
                display: flex !important;
                align-items: flex-start !important;
                gap: 8px;
            }

            .notice-ticker .badge {
                white-space: nowrap;
            }


            /* Principal card */
            .principal-message-card .card-header,
            .principal-message-card .card-body {
                text-align: center;
            }

            .principal-photo {
                width: min(220px, 72vw);
            }


            /* Older slider button compatibility */
            .slider-btn {
                width: 36px !important;
                height: 36px !important;
                font-size: 12px !important;
            }
        }


        /* =========================================================
       SMALL MOBILE DEVICES
       ========================================================= */

        @media (max-width: 480px) {

            .home-hero__slider {
                min-height: 460px !important;
                height: 70vh !important;
            }

            .home-hero__content {
                width: calc(100% - 24px) !important;
                padding: 12px !important;
            }

            .banner-nav-btn {
                width: 32px !important;
                height: 32px !important;
                font-size: 12px !important;
            }

            .banner-nav-btn.prev-btn {
                left: 6px !important;
            }

            .banner-nav-btn.next-btn {
                right: 6px !important;
            }
        }


        /* =========================================================
   FACILITY IMAGES
   Show complete image without cropping
   ========================================================= */

        .facility-image-wrapper {
            position: relative;
            width: 100%;
            height: 300px;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;

            background: #f8f9fa;
        }

        .facility-image {
            display: block !important;

            width: 100% !important;
            height: 100% !important;

            max-width: 100% !important;
            max-height: 100% !important;

            margin: 0 !important;
            padding: 0 !important;

            object-fit: contain !important;
            object-position: center center !important;

            background: #f8f9fa;

            /* Prevent theme CSS from shrinking the image */
            flex: 1 1 auto;
        }


        /* =========================================================
   FACILITY CARDS
   ========================================================= */

        .facility-image-wrapper .badge {
            position: absolute !important;
            top: 12px !important;
            right: 12px !important;
            z-index: 5 !important;
        }


        /* =========================================================
   TABLET
   ========================================================= */

        @media (max-width: 991.98px) {
            .facility-image-wrapper {
                height: 280px;
            }
        }


        /* =========================================================
   MOBILE
   ========================================================= */

        @media (max-width: 767.98px) {
            .facility-image-wrapper {
                height: 260px;
            }

            .facility-image {
                width: 100% !important;
                height: 100% !important;
                object-fit: contain !important;
            }
        }


        /* =========================================================
   SMALL MOBILE
   ========================================================= */

        @media (max-width: 480px) {
            .facility-image-wrapper {
                height: 240px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    @include('partials.topbar')

    @include('partials.header')

    @include('partials.offcanvas')

    <div id="anywhere-home"></div>

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