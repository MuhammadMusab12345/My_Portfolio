<?php
/**
 * Muhammad Musab - Dedicated Contact Page (PHP Version)
 */

$page_title = 'Contact Muhammad Musab — Full-Stack Website Developer';
$is_subpage = true;
$is_light_hero = true;

require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';
?>

  <!-- =========================================================================
       DEDICATED CONTACT PAGE HERO & FORM
       ========================================================================= -->
  <div class="contact-page-header">
    <div class="container">
      <a href="index.php" class="contact-back-link">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back to Home</span>
      </a>
      <div class="eyebrow sage-pill" style="margin: 0 auto 16px;">
        <i class="fa-solid fa-envelope"></i>
        <span>Direct Inquiry</span>
      </div>
      <h1 class="section-title" style="font-size: clamp(2.3rem, 4vw, 3.4rem); color: var(--text-dark-primary);">
        Let's Start Your Project
      </h1>
      <p class="section-subtitle" style="margin: 12px auto 0; max-width: 620px;">
        Have a new website in mind or need expert full-stack development? Send me a message and let's bring your vision to life.
      </p>
    </div>
  </div>

  <main class="contact-page-wrap">
    <div class="container">

      <!-- =====================================================================
           CONTACT OPTIONS: 3 LUXURY CARDS (Direct Call, WhatsApp, Email)
           ===================================================================== -->
      <section class="contact-options-section" aria-label="Contact Options">
        <div class="contact-options-header text-center">
          <div class="eyebrow sage-pill" style="margin: 0 auto 14px;">
            <i class="fa-solid fa-headset"></i>
            <span>Ways to Connect</span>
          </div>
          <h2 class="contact-options-title">Choose Your Preferred Way to Connect</h2>
          <p class="contact-options-desc">
            Have a project in mind? Reach out through your preferred contact method.
          </p>
        </div>

        <div class="contact-options-grid">

          <!-- Card 1: DIRECT CALL -->
          <div class="contact-option-card">
            <div class="contact-option-top">
              <div class="contact-option-icon-box" aria-hidden="true">
                <i class="fa-solid fa-phone-volume"></i>
              </div>
              <span class="contact-option-badge">Direct Line</span>
            </div>
            <h3 class="contact-option-title">Direct Call</h3>
            <p class="contact-option-desc">Speak directly with me for project details and quick guidance.</p>
            <div class="contact-option-value-wrap">
              <a href="tel:03228127038" class="contact-option-value" aria-label="Phone number: 03228127038">
                <i class="fa-solid fa-phone" aria-hidden="true"></i>
                <span>03228127038</span>
              </a>
            </div>
            <a href="tel:03228127038" class="btn btn-sage-solid contact-option-btn magnetic-btn" aria-label="Call Now at 03228127038">
              <span>Call Now</span>
              <i class="fa-solid fa-phone" aria-hidden="true"></i>
            </a>
          </div>

          <!-- Card 2: WHATSAPP SUPPORT -->
          <div class="contact-option-card">
            <div class="contact-option-top">
              <div class="contact-option-icon-box" aria-hidden="true">
                <i class="fa-brands fa-whatsapp"></i>
              </div>
              <span class="contact-option-badge">Instant Chat</span>
            </div>
            <h3 class="contact-option-title">WhatsApp Support</h3>
            <p class="contact-option-desc">Message me directly on WhatsApp for quick communication.</p>
            <div class="contact-option-value-wrap">
              <a href="https://wa.me/923228127038" target="_blank" rel="noopener noreferrer" class="contact-option-value" aria-label="WhatsApp: 03228127038">
                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                <span>03228127038</span>
              </a>
            </div>
            <a href="https://wa.me/923228127038" target="_blank" rel="noopener noreferrer" class="btn btn-sage-solid contact-option-btn magnetic-btn" aria-label="Chat on WhatsApp">
              <span>Chat on WhatsApp</span>
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            </a>
          </div>

          <!-- Card 3: EMAIL SUPPORT -->
          <div class="contact-option-card">
            <div class="contact-option-top">
              <div class="contact-option-icon-box" aria-hidden="true">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <span class="contact-option-badge">Official Inbox</span>
            </div>
            <h3 class="contact-option-title">Email Support</h3>
            <p class="contact-option-desc">Send me your project details and I’ll get back to you.</p>
            <div class="contact-option-value-wrap">
              <a href="mailto:muhammadmusabmehtab1@gmail.com" class="contact-option-value" aria-label="Email: muhammadmusabmehtab1@gmail.com">
                <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                <span>muhammadmusabmehtab1@gmail.com</span>
              </a>
            </div>
            <a href="mailto:muhammadmusabmehtab1@gmail.com" class="btn btn-sage-solid contact-option-btn magnetic-btn" aria-label="Send Email">
              <span>Send Email</span>
              <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
            </a>
          </div>

        </div>
      </section>

      <!-- =====================================================================
           EXISTING CONTACT FORM SECTION
           ===================================================================== -->
      <div class="contact-form-section-header text-center">
        <div class="eyebrow sage-pill" style="margin: 0 auto 12px;">
          <i class="fa-solid fa-envelope-open-text"></i>
          <span>Direct Inquiry</span>
        </div>
        <h2 class="contact-options-title" style="font-size: clamp(1.8rem, 2.8vw, 2.3rem);">
          Or Send Me a Message Directly
        </h2>
        <p class="contact-options-desc" style="margin-bottom: 30px;">
          Fill out the form below with your project requirements and I'll get back to you within 24 hours.
        </p>
      </div>

      <div class="contact-page-grid">

        <!-- Left Column: Musab Cutout Pointing to Form -->
        <div class="contact-pointer-col">
          <img src="assets/images/Contact Section Image.png"
            alt="Muhammad Musab pointing to contact form"
            class="contact-pointer-img"
            onerror="this.src='MY images/Contact Section Image.png'"
            loading="eager">
        </div>

        <!-- Right Column: Soft Tan-Tinted Form Card -->
        <div class="contact-form-card-col">
          <div class="contact-card-cream">

            <p class="contact-card-intro">
              You can easily reach me using the form below. Your message will come straight to me — I read and reply to every message personally, usually within one business day.
            </p>

            <div id="contactFeedbackAlert" class="form-feedback-alert"></div>

            <form id="portfolioContactForm" novalidate>

              <!-- Full-width Name -->
              <div class="form-group">
                <label for="contactName" class="form-label">Name*</label>
                <input type="text" id="contactName" name="name" class="form-input" placeholder="e.g. Alexander Vance" required>
              </div>

              <!-- Side by side Email & Phone -->
              <div class="contact-form-row-2col">
                <div class="form-group">
                  <label for="contactEmail" class="form-label">E-mail*</label>
                  <input type="email" id="contactEmail" name="email" class="form-input" placeholder="alexander@company.com" required>
                </div>
                <div class="form-group">
                  <label for="contactPhone" class="form-label">Phone <span style="font-weight: 400; font-size: 0.8rem; color: var(--text-dark-muted);">(Optional)</span></label>
                  <input type="tel" id="contactPhone" name="phone" class="form-input" placeholder="+1 (555) 000-0000">
                </div>
              </div>

              <!-- Full-width Message -->
              <div class="form-group">
                <label for="contactMessage" class="form-label">Your message*</label>
                <textarea id="contactMessage" name="message" class="form-textarea"
                  placeholder="Tell me about your business, required features, timeline, and goals..." required></textarea>
              </div>

              <!-- Privacy Checkbox -->
              <div class="contact-privacy-wrap">
                <input type="checkbox" id="contactPrivacy" name="privacy" class="contact-privacy-checkbox" required checked>
                <label for="contactPrivacy" class="contact-privacy-label">
                  I have read the privacy policy and agree to the processing of my data for the purpose of handling my request.
                </label>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn-sage-contact-submit magnetic-btn" id="submitContactBtn">
                <span class="btn-text">
                  <span>Send Message</span>
                  <i class="fa-solid fa-paper-plane" style="margin-left: 6px;"></i>
                </span>
                <span class="btn-spinner"></span>
              </button>

            </form>

          </div>
        </div>

      </div>
    </div>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
