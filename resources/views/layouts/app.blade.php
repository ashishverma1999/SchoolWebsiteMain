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
            width: 170px;
            height: auto;
            margin: 0 auto;

            overflow: hidden;

            background: #f8f9fa;

            border-radius: 12px;
        }

        .principal-photo img {
            display: block;

            width: 100%;
            height: auto;

            max-width: 100%;

            object-fit: initial;
            object-position: center;

            background: transparent;
        }

        @media (max-width: 767.98px) {
            .principal-photo {
                width: min(220px, 72vw);
                height: auto;
            }

            .principal-photo img {
                width: 100%;
                height: auto;
            }
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

            /* -----------------------------------------------------
       GENERAL MOBILE
       ----------------------------------------------------- */

            html,
            body {
                width: 100%;
                max-width: 100%;
                overflow-x: hidden !important;
            }

            .container {
                padding-left: 16px !important;
                padding-right: 16px !important;
            }


            /* =====================================================
       TOP BAR - KEEP COMPACT
       ===================================================== */

            .top-bar {
                width: 100% !important;
                height: auto !important;
                min-height: 0 !important;
                margin: 0 !important;
                padding: 4px 0 !important;
                position: relative !important;
            }


            .top-bar .container,
            .top-bar .container-fluid,
            .header11topDown,
            .header11topDown .container,
            .header11topDown .container-fluid {
                width: 100% !important;
                max-width: 100% !important;
                margin: 0 !important;
                padding-left: 10px !important;
                padding-right: 10px !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }


            /* =====================================================
       HEADER - REDUCE LARGE WHITE SPACE
       ===================================================== */

            .header,
            .header.header__sticky {
                width: 100% !important;
                height: auto !important;
                min-height: 0 !important;
                margin: 0 !important;
                padding: 0 !important;
                position: relative !important;
                z-index: 21 !important;
            }

            .header .container,
            .header .container-fluid {
                min-height: 0 !important;
                height: auto !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .header.v__2 .header__wrapper,
            .header__wrapper {
                height: auto !important;
                min-height: 0 !important;
                margin-top: 0 !important;
                padding: 6px 0 !important;
            }


            /* =====================================================
            HEADER LOGO
            ===================================================== */

            .header__logo {
                display: flex !important;
                align-items: center !important;
                margin: 0 !important;
                padding: 0 !important;
                min-height: 0 !important;
            }

            .header__logo img {
                width: 44px !important;
                height: 44px !important;
                max-width: 44px !important;
                max-height: 44px !important;
                object-fit: contain !important;
                margin-right: 8px !important;
            }

            .brand-title {
                font-size: 14px !important;
                line-height: 1.1 !important;
                margin: 0 !important;
            }

            .brand-subtitle {
                font-size: 9px !important;
                line-height: 1.1 !important;
                margin: 2px 0 0 !important;
            }


            /* =====================================================
            MOBILE MENU BUTTON
            ===================================================== */

            .header__nav,
            .main-menu,
            .main-menu-wrapper,
            .header__menu {
                height: auto !important;
                min-height: 0 !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .menu-toggle,
            .hamburger-menu,
            .menu-btn {
                margin: 0 !important;
            }

            .menu__trigger {
                padding: 6px 10px !important;
                min-height: 0 !important;
                height: auto !important;
            }


            /* =====================================================
            HERO - FULL WIDTH
            ===================================================== */

            .home-hero {
                width: 100vw !important;
                max-width: 100vw !important;

                left: 0 !important;

                margin-left: 0 !important;
                margin-right: 0 !important;

                margin-top: 0 !important;
                padding-top: 0 !important;

                transform: none !important;
            }

            .home-hero__slider {
                width: 100vw !important;
                max-width: 100vw !important;

                height: 75vh !important;
                min-height: 500px !important;
                max-height: none !important;

                margin-top: 0 !important;
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


            /* =====================================================
            HERO CONTENT
            ===================================================== */

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


            /* =====================================================
            HERO NAVIGATION
            ===================================================== */

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


            /* =====================================================
            HERO DOTS
            ===================================================== */

            .slider-dots {
                margin-bottom: 12px !important;
            }


            /* =====================================================
            NOTICE TICKER
            ===================================================== */

            .notice-ticker {
                margin: 0 !important;
                padding-top: 6px !important;
                padding-bottom: 6px !important;
            }

            .notice-ticker .container-fluid {
                display: flex !important;
                align-items: center !important;
                gap: 8px;
            }

            .notice-ticker .badge {
                white-space: nowrap;
            }


            /* =====================================================
            PRINCIPAL CARD
            ===================================================== */

            .principal-message-card {
                margin-top: 0 !important;
            }

            .principal-message-card .card-header,
            .principal-message-card .card-body {
                text-align: center;
            }

            .principal-message-card .card-header {
                padding: 12px !important;
            }

            .principal-message-card .card-body {
                padding: 12px !important;
            }


            /* =====================================================
            PRINCIPAL PHOTO
            SHOW FULL IMAGE - NO BLACK/WHITE EMPTY SPACE
            ===================================================== */

            .principal-photo {
                width: min(220px, 72vw) !important;

                height: auto !important;
                aspect-ratio: auto !important;

                margin-left: auto !important;
                margin-right: auto !important;

                overflow: hidden !important;

                background: #f8f9fa !important;

                border-radius: 12px !important;
            }

            .principal-photo img {
                display: block !important;

                width: 100% !important;
                height: auto !important;

                min-width: 0 !important;
                min-height: 0 !important;

                max-width: 100% !important;
                max-height: none !important;

                object-fit: initial !important;
                object-position: center center !important;

                background: transparent !important;
            }


            /* =====================================================
            OLDER SLIDER BUTTON COMPATIBILITY
            ===================================================== */

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

            .principal-photo {
                width: min(200px, 70vw) !important;
            }
        }


        /* =========================================================
        FACILITY IMAGES
        SHOW COMPLETE IMAGE
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

            flex: 1 1 auto;
        }

        .facility-image-wrapper .badge {
            position: absolute !important;

            top: 12px !important;
            right: 12px !important;

            z-index: 5 !important;
        }


        /* =========================================================
        TABLET FACILITY IMAGES
        ========================================================= */

        @media (max-width: 991.98px) {

            .facility-image-wrapper {
                height: 280px;
            }
        }


        /* =========================================================
        MOBILE FACILITY IMAGES
        ========================================================= */

        @media (max-width: 767.98px) {

            .facility-image-wrapper {
                height: 260px;
            }

            .facility-image {
                width: 100% !important;
                height: 100% !important;

                object-fit: contain !important;
                object-position: center center !important;
            }
        }


        /* =========================================================
        SMALL MOBILE FACILITY IMAGES
        ========================================================= */

        @media (max-width: 480px) {

            .facility-image-wrapper {
                height: 240px;
            }
        }


        /* =========================================================
        TOP CONTACT BAR
        ========================================================= */

        .top-bar {
            width: 100%;
            margin: 0;
            padding: 0 !important;

            background: #212529 !important;
        }

        .top-bar-inner {
            width: 100%;
            max-width: 100%;

            min-height: 44px;

            padding: 6px 18px !important;

            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;

            gap: 20px;

            flex-wrap: nowrap !important;
        }


        /* =========================================================
        CONTACT DETAILS
        ========================================================= */

        .contact-details {
            display: flex;
            align-items: center;

            gap: 16px;

            min-width: 0;

            white-space: nowrap;
        }

        .contact-item {
            display: inline-flex;

            align-items: center;
            gap: 5px;

            font-size: 14px;
            line-height: 1;

            white-space: nowrap;
        }

        .contact-item i {
            font-size: 13px;
            flex-shrink: 0;
        }


        /* Affiliation */
        .affiliation-badge {
            display: inline-flex;
            align-items: center;

            padding: 4px 8px;

            font-size: 11px;
            line-height: 1;

            border-radius: 3px;

            background: #5631ff;
            color: #fff;

            white-space: nowrap;
        }


        /* =========================================================
        SOCIAL ICONS
        ========================================================= */

        .top-bar .social-icons {
            display: flex !important;

            align-items: center !important;
            justify-content: center !important;

            gap: 22px;

            flex-shrink: 0;

            white-space: nowrap;
        }

        .top-bar .social-icons a {
            width: 24px;
            height: 24px;

            display: flex !important;

            align-items: center !important;
            justify-content: center !important;

            text-decoration: none;

            line-height: 1;
        }

        .top-bar .social-icons i {
            font-size: 16px;
        }


        /* =========================================================
   MOBILE
   ========================================================= */

        @media (max-width: 767.98px) {

            .top-bar {
                width: 100% !important;
                height: auto !important;
                min-height: 0 !important;

                margin: 0 !important;
                padding: 0 !important;
            }

            .top-bar-inner {
                min-height: 42px !important;
                height: 42px !important;

                padding: 5px 10px !important;

                gap: 8px !important;

                justify-content: space-between !important;

                flex-wrap: nowrap !important;
            }


            /* Contact section */
            .contact-details {
                display: flex !important;

                align-items: center !important;

                gap: 8px !important;

                min-width: 0 !important;

                flex: 1 1 auto !important;

                overflow: hidden !important;
            }


            /* Phone */
            .phone-link {
                flex-shrink: 0 !important;

                max-width: none !important;

                font-size: 12px !important;
            }

            .phone-link span {
                display: inline !important;

                white-space: nowrap !important;
            }


            /* Email: icon only on mobile */
            .email-link {
                width: 22px !important;
                height: 22px !important;

                flex-shrink: 0 !important;

                justify-content: center !important;
            }

            .email-link span {
                display: none !important;
            }

            .email-link i {
                font-size: 14px !important;
            }


            /* Hide affiliation on mobile */
            .affiliation-badge {
                display: none !important;
            }


            /* Social icons */
            .top-bar .social-icons {
                display: flex !important;

                align-items: center !important;
                justify-content: flex-end !important;

                gap: 18px !important;

                flex-shrink: 0 !important;
            }

            .top-bar .social-icons a {
                width: 22px !important;
                height: 22px !important;
            }

            .top-bar .social-icons i {
                font-size: 16px !important;
            }
        }


        /* =========================================================
        VERY SMALL PHONES
        ========================================================= */

        @media (max-width: 400px) {

            .top-bar-inner {
                padding-left: 8px !important;
                padding-right: 8px !important;
            }

            .phone-link {
                font-size: 11px !important;
            }

            .top-bar .social-icons {
                gap: 13px !important;
            }

            .top-bar .social-icons i {
                font-size: 15px !important;
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