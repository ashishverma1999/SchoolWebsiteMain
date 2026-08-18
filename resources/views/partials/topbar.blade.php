<!-- Top Contact Bar -->
<div class="top-bar bg-dark text-white border-bottom border-secondary">
    <div class="container-fluid top-bar-inner">

        <!-- Contact Information -->
        <div class="contact-details">

            <!-- Phone -->
            <a href="tel:{{ config('school.phone') }}"
               class="contact-item phone-link text-white text-decoration-none">
                <i class="fa-solid fa-phone"></i>
                <span>{{ config('school.phone') }}</span>
            </a>

            <!-- Email -->
            <a href="mailto:{{ config('school.email') }}"
               class="contact-item email-link text-white text-decoration-none">
                <i class="fa-solid fa-envelope"></i>
                <span>{{ config('school.email') }}</span>
            </a>

            <!-- Affiliation -->
            <span class="affiliation-badge">
                {{ config('school.affiliation') }}
            </span>

        </div>


        <!-- Social Media -->
        <div class="social-icons">

            <a href="{{ config('school.facebook') }}"
               target="_blank"
               class="text-white"
               title="Facebook"
               aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="{{ config('school.instagram') }}"
               target="_blank"
               class="text-white"
               title="Instagram"
               aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="{{ config('school.youtube') }}"
               target="_blank"
               class="text-white"
               title="YouTube"
               aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>

            <a href="{{ config('school.whatsapp') }}"
               target="_blank"
               class="text-white"
               title="WhatsApp"
               aria-label="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>

        </div>

    </div>
</div>