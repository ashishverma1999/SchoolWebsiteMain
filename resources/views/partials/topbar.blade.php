<!-- Top Contact Bar -->
<div class="top-bar bg-dark text-white py-1 border-bottom border-secondary">
    <div class="container-fluid px-3 px-md-4 d-flex justify-content-between align-items-center">
        <div class="contact-details mb-0 small">
            <span class="me-3"><i class="fa-solid fa-phone me-1"></i> <a href="tel:{{ config('school.phone') }}" class="text-white text-decoration-none">{{ config('school.phone') }}</a></span>
            <span class="d-none d-sm-inline me-3">|</span>
            <span class="me-3 d-none d-sm-inline"><i class="fa-solid fa-envelope me-1"></i> <a href="mailto:{{ config('school.email') }}" class="text-white text-decoration-none">{{ config('school.email') }}</a></span>
            <span class="me-3 d-inline d-sm-none"><a href="mailto:{{ config('school.email') }}" class="text-white text-decoration-none" title="Email Us"><i class="fa-solid fa-envelope"></i></a></span>
            <span class="d-none d-lg-inline me-3">|</span>
            <span class="badge bg-primary text-white font-weight-normal d-none d-lg-inline-block">{{ config('school.affiliation') }}</span>
        </div>
        <div class="social-icons d-flex align-items-center gap-3">
            <a href="{{ config('school.facebook') }}" target="_blank" class="text-white small" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ config('school.instagram') }}" target="_blank" class="text-white small" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="{{ config('school.youtube') }}" target="_blank" class="text-white small" title="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="{{ config('school.whatsapp') }}" target="_blank" class="text-white small" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</div>
