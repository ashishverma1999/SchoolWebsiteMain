@extends('layouts.app')

@section('title', 'Photo Gallery - ' . config('school.name'))

@section('content')
<!-- Gallery Grid -->
<div class="row g-2 g-md-4" id="gallery-grid">

    @foreach($galleryItems as $index => $item)

    <div class="col-6 col-md-4 col-lg-3 gallery-item"
        data-category="{{ $item['category'] }}">

        <div class="card border-0 shadow-sm rounded-3 rounded-md-4 overflow-hidden h-100">

            <!-- Image Preview -->
            <div class="gallery-image-wrapper"
                onclick="openLightbox(
                         '{{ asset($item['image']) }}',
                         '{{ addslashes($item['title']) }}',
                         '{{ $item['category'] }}'
                     )">

                <img src="{{ asset($item['image']) }}"
                    alt="{{ $item['title'] }}"
                    class="gallery-image"
                    loading="lazy">

                <!-- Category -->
                <span class="position-absolute top-0 end-0 m-1 m-md-2 badge bg-warning text-dark shadow-sm"
                    style="font-size: 10px;">
                    {{ $item['category'] }}
                </span>

                <!-- Zoom Icon -->
                <div class="gallery-overlay">
                    <div class="gallery-zoom-icon">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                </div>

            </div>

            <!-- Title -->
            <div class="card-body p-2 p-md-3 text-center bg-white">

                <h6 class="fw-bold text-dark mb-0 text-truncate"
                    style="font-size: clamp(0.78rem, 2vw, 0.95rem);"
                    title="{{ $item['title'] }}">
                    {{ $item['title'] }}
                </h6>

            </div>

        </div>

    </div>

    @endforeach

</div>


<!-- Image Lightbox Modal -->
<div class="modal fade"
    id="lightboxModal"
    tabindex="-1"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content border-0 bg-dark text-white rounded-4 overflow-hidden">

            <div class="modal-header border-0 pb-0">

                <span class="badge bg-warning text-dark me-2"
                    id="lightboxCategory">
                </span>

                <h5 class="modal-title text-white fw-bold mb-0"
                    id="lightboxTitle">
                </h5>

                <button type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>

            <div class="modal-body text-center p-2 p-md-3">

                <img src=""
                    id="lightboxImg"
                    class="lightbox-image"
                    alt="Gallery Preview">

            </div>

        </div>

    </div>

</div>


<style>
    /* =========================================================
   GALLERY IMAGE PREVIEW
   ========================================================= */

    .gallery-image-wrapper {
        position: relative;
        width: 100%;
        height: 220px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #f1f5f9;

        overflow: hidden;

        cursor: pointer;
    }


    /* Complete image visible */
    .gallery-image {
        display: block !important;

        width: 100% !important;
        height: 100% !important;

        max-width: 100% !important;
        max-height: 100% !important;

        object-fit: contain !important;
        object-position: center center !important;

        transition: transform 0.35s ease;
    }


    /* =========================================================
   ZOOM OVERLAY
   ========================================================= */

    .gallery-overlay {
        position: absolute;
        inset: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(0, 0, 0, 0.35);

        opacity: 0;

        transition: opacity 0.3s ease;

        pointer-events: none;
    }


    .gallery-zoom-icon {
        width: 46px;
        height: 46px;

        border-radius: 50%;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(0, 0, 0, 0.65);

        border: 2px solid rgba(255, 255, 255, 0.8);

        color: #ffffff;

        font-size: 18px;
    }


    /* Desktop hover */
    .gallery-image-wrapper:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-image-wrapper:hover .gallery-image {
        transform: scale(1.04);
    }


    /* =========================================================
   LIGHTBOX IMAGE
   ========================================================= */

    .lightbox-image {
        display: block;

        width: auto;
        max-width: 100%;

        height: auto;
        max-height: 78vh;

        margin: 0 auto;

        object-fit: contain;

        border-radius: 12px;
    }


    /* =========================================================
   TABLET
   ========================================================= */

    @media (max-width: 991.98px) {

        .gallery-image-wrapper {
            height: 210px;
        }

    }


    /* =========================================================
   MOBILE
   ========================================================= */

    @media (max-width: 767.98px) {

        .gallery-image-wrapper {
            height: 180px;

            background: #f1f5f9;
        }

        .gallery-image {
            object-fit: contain !important;
        }

        /*
     * Always show a small zoom hint on mobile,
     * because there is no hover on touch devices.
     */
        .gallery-overlay {
            opacity: 1;

            background: linear-gradient(180deg,
                    transparent 55%,
                    rgba(0, 0, 0, 0.18) 100%);
        }

        .gallery-zoom-icon {
            width: 34px;
            height: 34px;
            font-size: 13px;

            position: absolute;
            right: 8px;
            bottom: 8px;

            background: rgba(0, 0, 0, 0.60);
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 75vh;
        }
    }


    /* =========================================================
   SMALL MOBILE
   ========================================================= */

    @media (max-width: 480px) {

        .gallery-image-wrapper {
            height: 155px;
        }

        .gallery-zoom-icon {
            width: 30px;
            height: 30px;
            font-size: 11px;

            right: 6px;
            bottom: 6px;
        }

    }


    /* =========================================================
   TOUCH DEVICES
   ========================================================= */

    @media (hover: none) {

        .gallery-image-wrapper:active .gallery-image {
            transform: scale(1.02);
        }

    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* =====================================================
           FILTERING
           ===================================================== */

        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(function(btn) {

            btn.addEventListener('click', function() {

                filterBtns.forEach(function(b) {
                    b.classList.remove('active', 'btn-primary');
                    b.classList.add('btn-outline-primary');
                });

                this.classList.remove('btn-outline-primary');
                this.classList.add('active', 'btn-primary');

                const filter = this.getAttribute('data-filter');

                items.forEach(function(item) {

                    const category = item.getAttribute('data-category');

                    if (filter === 'all' || category === filter) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }

                });

            });

        });

    });


    /* =========================================================
       OPEN LIGHTBOX
       ========================================================= */

    function openLightbox(src, title, category) {

        const image = document.getElementById('lightboxImg');
        const titleElement = document.getElementById('lightboxTitle');
        const categoryElement = document.getElementById('lightboxCategory');
        const modalElement = document.getElementById('lightboxModal');

        image.src = src;
        image.alt = title;

        titleElement.textContent = title;
        categoryElement.textContent = category;

        const modal = bootstrap.Modal.getOrCreateInstance(modalElement);

        modal.show();
    }
</script>
@endsection