<?php
/**
 * Global Luxury Footer & Lightbox Modals
 */
?>
  <!-- Luxury Dark Footer -->
  <footer class="site-footer" id="siteFooter">
    <div class="container">
      
      <div class="footer-grid">
        
        <!-- Column 1: Brand & Tagline -->
        <div class="footer-col-brand">
          <a href="#hero" class="brand-logo footer-brand-logo">
            <img src="assets/images/Logo 2.png" alt="Muhammad Musab Logo" class="brand-logo-img" onerror="this.src='Logo 2.png'">
          </a>
          <p class="footer-tagline-quote">"Develop. Build. Deliver."</p>
          <p class="footer-desc">
            Crafting state-of-the-art web solutions with clean front-end code, scalable PHP backends, and intuitive user experiences.
          </p>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-col">
          <h4 class="footer-col-title">Navigation</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo $is_subpage ? 'index.php#hero' : '#hero'; ?>" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i> Home</a></li>
            <li><a href="<?php echo $is_subpage ? 'index.php#services' : '#services'; ?>" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i> Services</a></li>
            <li><a href="projects.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i> All Projects</a></li>
            <li><a href="<?php echo $is_subpage ? 'index.php#about' : '#about'; ?>" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i> About Me</a></li>
            <li><a href="<?php echo $is_subpage ? 'index.php#process' : '#process'; ?>" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i> My Process</a></li>
            <li><a href="<?php echo $is_subpage ? 'index.php#pricing' : '#pricing'; ?>" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i> Pricing</a></li>
            <li><a href="contact.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem;"></i> Contact</a></li>
          </ul>
        </div>

        <!-- Column 3: Web Dev Services -->
        <div class="footer-col">
          <h4 class="footer-col-title">Services</h4>
          <ul class="footer-links-list">
            <li><a href="#services" class="footer-link">Custom Web Design</a></li>
            <li><a href="#services" class="footer-link">Full-Stack Development</a></li>
            <li><a href="#services" class="footer-link">Responsive Web Design</a></li>
            <li><a href="#services" class="footer-link">UI / UX Prototyping</a></li>
            <li><a href="#services" class="footer-link">Website Chatbot Integration</a></li>
            <li><a href="#services" class="footer-link">SEO Optimization</a></li>
            <li><a href="#services" class="footer-link">Website Maintenance</a></li>
          </ul>
        </div>

        <!-- Column 4: Contact & Newsletter -->
        <div class="footer-col">
          <h4 class="footer-col-title">Stay Connected</h4>
          <p class="footer-desc" style="margin-bottom: 16px;">
            Subscribe to get occasional web engineering insights and design breakdowns.
          </p>
          <form class="footer-newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Muhammad Musab\'s newsletter!'); this.reset();">
            <div class="newsletter-input-group">
              <input type="email" placeholder="Enter your email..." required class="newsletter-input">
              <button type="submit" class="newsletter-btn" aria-label="Subscribe to newsletter">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
          </form>

          <div class="contact-socials-wrap" style="margin-top: 24px;">
            <a href="https://www.facebook.com/share/1CXeQoBHsq/" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="Facebook Profile">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/muhammadmusab.official?stkn=dGZvdHVnMjB5eTlx" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="Instagram Profile">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://github.com/MuhammadMusab12345" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="GitHub Profile">
              <i class="fa-brands fa-github"></i>
            </a>
            <a href="mailto:musabmehtabmusab1@gmail.com" class="social-circle-btn" aria-label="Email Musab">
              <i class="fa-solid fa-envelope"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="LinkedIn Profile">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>

      </div>

      <div class="footer-divider"></div>

      <div class="footer-bottom-bar">
        <p>&copy; <?php echo date('Y'); ?> Muhammad Musab. All Rights Reserved. Engineered with precision.</p>
        <div class="footer-bottom-links">
          <a href="#" class="footer-link">Privacy Policy</a>
          <a href="#" class="footer-link">Terms of Service</a>
          <button class="open-resume-modal-btn footer-link" style="background:none; border:none; color:inherit; cursor:pointer;">View Résumé</button>
        </div>
      </div>

    </div>
  </footer>

  <!-- Resume Lightbox Modal -->
  <div class="resume-modal-overlay" id="resumeModalOverlay">
    <div class="resume-modal-card">
      <div class="resume-modal-header">
        <div class="modal-header-title">
          <i class="fa-solid fa-file-lines"></i>
          <span>Muhammad Musab — Official Résumé</span>
        </div>
        <div class="modal-actions">
          <button class="btn btn-sage-solid" id="downloadResumeBtn" style="padding: 8px 18px; font-size: 0.85rem;">
            <i class="fa-solid fa-download"></i>
            <span>Download CV</span>
          </button>
          <button class="modal-close-btn" id="closeResumeModalBtn" aria-label="Close modal">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>
      <div class="resume-modal-body">
        <img src="https://raw.githubusercontent.com/MuhammadMusab12345/My-Resume/refs/heads/main/Muhammad-Musab-Resume.png" alt="Muhammad Musab Resume" id="resumeModalImage" loading="lazy">
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/resume-modal.js"></script>

</body>
</html>
