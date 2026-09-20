<?php
/**
 * Muhammad Musab - Full-Stack Portfolio Main Page (PHP Version)
 * Complete 12-section modern luxury portfolio matching reference design.
 */

$page_title = 'Muhammad Musab — Full-Stack Website Developer';
$is_subpage = false;

require_once __DIR__ . '/includes/db.php';

// Fetch dynamic data
$normal_projects = Database::getProjects('normal', 3);
$all_testimonials = Database::getTestimonials();
$pricing_packages = Database::getPricingPackages();

include __DIR__ . '/includes/header.php';
?>

  <!-- =========================================================================
       1. HERO SECTION (Dark Navy with Reference Hero Layout & Cutout Overlap)
       ========================================================================= -->
  <section class="hero-section" id="hero">
    <!-- Atmospheric Glow Blobs -->
    <div class="glow-blob sage" style="top: 15%; left: 5%; width: 380px; height: 380px;"></div>
    <div class="glow-blob slate" style="bottom: 10%; right: 10%; width: 450px; height: 450px;"></div>

    <div class="container">
      <div class="hero-grid">
        
        <!-- Left Column: Reference Layout Typography & Trust Elements -->
        <div class="hero-content">
          
          <!-- Rotating Role Badge (2-Second Cycle) -->
          <div class="rotating-role-wrapper">
            <span class="role-pulse-dot"></span>
            <span class="rotating-role-text" id="rotatingRoleText">Full Stack Website Developer</span>
          </div>

          <!-- Hero Identity Block (Greeting, Name, Role, Mission) -->
          <div class="hero-intro-lead">
            <div class="hero-intro-name-wrap">
              <span class="hero-intro-greet">HI, I'M</span>
              <span class="hero-intro-name">MUHAMMAD MUSAB</span>
            </div>
            <div class="hero-intro-role">WEB DEVELOPER &amp; GRAPHIC DESIGNER</div>
            <p class="hero-intro-mission">I BUILD MODERN WEBSITES &amp; CREATIVE DIGITAL EXPERIENCES.</p>
          </div>

          <!-- Massive Impact Headline (3-Line Style with Staggered Entrance Masks) -->
          <h1 class="hero-ref-title">
            <span class="hero-title-line-mask"><span class="hero-title-line">MORE TRAFFIC.</span></span>
            <span class="hero-title-line-mask"><span class="hero-title-line">BETTER RESULTS.</span></span>
            <span class="hero-title-line-mask"><span class="hero-title-line highlight-line">WITH CUSTOM WEB DEV.</span></span>
          </h1>

          <!-- Recommendation & Rating Line -->
          <div class="hero-ref-rating-line">
            <span>99% recommendation rate</span>
            <span class="rating-stars-gold">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
            <span>4.9 on Google &amp; Client Reviews</span>
          </div>

          <!-- Monochrome Trust Badges Row (from Reference) -->
          <div class="hero-ref-badges-row">
            <div class="hero-ref-badge-item">
              <i class="fa-solid fa-star"></i>
              <span>Trustpilot ★★★★★</span>
            </div>
            <div class="hero-ref-badge-item">
              <i class="fa-brands fa-wordpress"></i>
              <span>WordPress</span>
            </div>
            <div class="hero-ref-badge-item">
              <i class="fa-brands fa-google"></i>
              <span>Google Partner</span>
            </div>
            <div class="hero-ref-badge-item">
              <i class="fa-solid fa-circle-check"></i>
              <span>ProvenExpert</span>
            </div>
          </div>

          <!-- Combined CTA Group: Pill Button + Adjoining Circle Arrow -->
          <div class="hero-ref-cta-group">
            <a href="contact.php" class="hero-ref-main-btn magnetic-btn" id="heroRequestQuoteBtn">
              <span>Request a quote now, no obligation.</span>
            </a>
            <a href="projects.php" class="hero-ref-arrow-btn magnetic-btn" aria-label="Explore Projects">
              <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
          </div>

        </div>

        <!-- Right Column: Floating Portrait / Responsive Framed Cutout on Mobile -->
        <div class="hero-portrait-col">
          <div class="hero-glow-backdrop"></div>
          <div class="hero-portrait-frame">
            <img 
              src="assets/images/MY Image.png" 
              alt="Muhammad Musab - Web Developer &amp; Graphic Designer" 
              class="hero-cutout-img"
              onerror="this.src='MY Image.png'"
              loading="eager"
            >
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       2. TRUSTED TOOLS / TECH STRIP (Continuous Marquee)
       ========================================================================= -->
  <section class="tech-marquee-section" id="techStrip">
    <div class="marquee-track-container">
      <div class="marquee-track">
        <?php 
        $marquee_items = array_merge($tech_tools, $tech_tools);
        foreach ($marquee_items as $tool): 
        ?>
          <div class="tool-badge-item" style="--tool-color: <?php echo htmlspecialchars($tool['color']); ?>;">
            <i class="<?php echo htmlspecialchars($tool['icon']); ?>"></i>
            <span class="tool-name"><?php echo htmlspecialchars($tool['name']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. ABOUT ME SECTION (Cream Dotted Background)
       ========================================================================= -->
  <section class="section-light" id="about">
    <div class="container">
      
      <div class="about-grid">
        
        <!-- Left Side: Framed Image with Glow Accent & Tilt -->
        <div class="about-image-col">
          <div class="about-image-card">
            <img 
              src="assets/images/About Image.png" 
              alt="Muhammad Musab at Team Session" 
              onerror="this.src='About Image.png'"
              loading="lazy"
            >
          </div>
          <div class="about-exp-badge">
            <span class="exp-years">3+</span>
            <span class="exp-text">Years of Web<br>Development</span>
          </div>
        </div>

        <!-- Right Side: About Copy & CTAs -->
        <div class="about-text-col">
          <div class="eyebrow sage-pill" style="align-self: flex-start;">
            <i class="fa-solid fa-user"></i>
            <span>About Me</span>
          </div>

          <h2 class="section-title">Turning Ideas Into Digital Reality</h2>

          <div class="about-paragraphs">
            <p>
              I am <strong>Muhammad Musab</strong>, a passionate and detail-driven <strong>Full-Stack Website Developer</strong>. I build custom, responsive, and high-performance websites combining sleek visual appeal with robust backend engineering.
            </p>
            <p>
              My expertise spans the entire development lifecycle — from crafting intuitive user interfaces with modern HTML5, CSS3, and JavaScript, to structuring secure database architectures and server-side logic using PHP and MySQL.
            </p>
            <p>
              Whether you need a bespoke business website, an interactive portal, or a high-converting web application, my mission is to deliver clean code, lightning-fast load times, and an exceptional user experience that drives real results.
            </p>
          </div>

          <div class="about-highlights-grid">
            <div class="highlight-item">
              <i class="fa-solid fa-circle-check"></i>
              <span>Modern PHP &amp; MySQL Backends</span>
            </div>
            <div class="highlight-item">
              <i class="fa-solid fa-circle-check"></i>
              <span>Pixel-Perfect Responsive UIs</span>
            </div>
            <div class="highlight-item">
              <i class="fa-solid fa-circle-check"></i>
              <span>High Performance &amp; Clean Code</span>
            </div>
            <div class="highlight-item">
              <i class="fa-solid fa-circle-check"></i>
              <span>SEO-Friendly Architecture</span>
            </div>
          </div>

          <div class="about-actions">
            <button class="btn btn-gradient open-resume-modal-btn magnetic-btn" id="aboutViewCvBtn">
              <i class="fa-solid fa-file-lines"></i>
              <span>View My CV</span>
            </button>
            <a href="https://github.com/MuhammadMusab12345" target="_blank" rel="noopener noreferrer" class="btn-github magnetic-btn" id="aboutGithubBtn">
              <i class="fa-brands fa-github"></i>
              <span>GitHub Profile</span>
            </a>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. LATEST PROJECTS SECTION (Cream Dotted Background)
       ========================================================================= -->
  <section class="section-light" id="projects" style="padding-top: 40px;">
    <div class="container">
      
      <!-- NEW INTRO BLOCK: My Work Overview & Stats -->
      <div class="projects-intro-block">
        <div class="projects-intro-grid">

          <!-- Left Side: Headline with Highlight Chip, Description & 3-Stat Counter -->
          <div class="projects-intro-left">
            <span class="chip-highlight projects-intro-chip">A Look At My Work.</span>
            <h2 class="projects-intro-title">Here's What I've Built.</h2>
            <p class="projects-intro-tagline">Clean Code. Solid Design. Real Results.</p>

            <p class="projects-intro-desc">
              I approach web development with a focus on simplicity, robust engineering, and visual elegance. Every site I craft is designed to convert visitors into loyal customers while ensuring fast loading speeds across all devices.
            </p>
            <p class="projects-intro-desc">
              Whether architecting secure backend databases or designing responsive front-ends, my focus is always on building practical, reliable, and high-performance solutions.
            </p>

            <hr class="projects-intro-divider">

            <!-- 3-Stat Row (Counts up on scroll) -->
            <div class="projects-intro-stats">
              <div class="projects-stat-box">
                <span class="projects-stat-number"><span class="project-stat-count" data-target="6">0</span></span>
                <span class="projects-stat-label">Projects Completed</span>
              </div>
              <div class="projects-stat-box">
                <span class="projects-stat-number"><span class="project-stat-count" data-target="3">0</span><span class="stat-suffix">+</span></span>
                <span class="projects-stat-label">Technologies Mastered</span>
              </div>
              <div class="projects-stat-box">
                <span class="projects-stat-number"><span class="project-stat-count" data-target="100">0</span><span class="stat-suffix">%</span></span>
                <span class="projects-stat-label">Client Satisfaction</span>
              </div>
            </div>

            <hr class="projects-intro-divider">

            <p class="projects-intro-note">
              Every project below was built from scratch — real code, real websites, live and working.
            </p>
          </div>

          <!-- Right Side: Musab Relaxed Photo (3 (2).png) -->
          <div class="projects-intro-img-col">
            <div class="projects-intro-img-card">
              <img src="assets/images/3 (2).png"
                alt="Muhammad Musab - Full Stack Web Developer"
                onerror="this.src='MY images/3 (2).png'"
                loading="lazy">
            </div>
          </div>

        </div>
      </div>

      <div class="section-header with-action">
        <div>
          <div class="eyebrow slate-pill">
            <i class="fa-solid fa-layer-group"></i>
            <span>Featured Portfolio</span>
          </div>
          <h2 class="section-title">Latest Projects</h2>
          <p class="section-subtitle">
            A curated selection of modern web development projects crafted for real-world performance.
          </p>
        </div>
        <a href="projects.php" class="view-all-link" id="viewAllProjectsBtn">
          <span>View All Projects</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <div class="projects-grid">
        <?php foreach ($normal_projects as $proj): ?>
          <div class="project-card">
            <div class="project-img-wrap">
              <span class="project-badge-tag"><?php echo htmlspecialchars($proj['category_label'] ?? 'Website'); ?></span>
              <img 
                src="<?php echo htmlspecialchars($proj['image_path']); ?>" 
                alt="<?php echo htmlspecialchars($proj['title']); ?>"
                loading="lazy"
              >
            </div>
            <div class="project-content">
              <div class="project-tags">
                <?php foreach ((array)$proj['tags'] as $tag): ?>
                  <span class="project-tag"><?php echo htmlspecialchars(trim($tag)); ?></span>
                <?php endforeach; ?>
              </div>
              <h3 class="project-title"><?php echo htmlspecialchars($proj['title']); ?></h3>
              <p class="project-desc"><?php echo htmlspecialchars($proj['description']); ?></p>
              <div class="project-footer">
                <a href="<?php echo htmlspecialchars($proj['live_url']); ?>" target="_blank" rel="noopener noreferrer" class="project-visit-btn">
                  <span>Visit Live Website</span>
                  <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. SERVICES I OFFER SECTION (Dark Navy Background)
       ========================================================================= -->
  <section class="section-dark" id="services">
    <div class="glow-blob sage" style="top: 20%; right: 5%; width: 400px; height: 400px;"></div>
    <div class="glow-blob slate" style="bottom: 10%; left: 5%; width: 350px; height: 350px;"></div>

    <div class="container">
      
      <div class="section-header text-center">
        <div class="eyebrow sage-pill">
          <i class="fa-solid fa-laptop-code"></i>
          <span>What I Do</span>
        </div>
        <h2 class="section-title">Services I Offer</h2>
        <p class="section-subtitle">
          Specialized, high-end web development services built with modern technologies, scalable architectures, and clean code.
        </p>
      </div>

      <div class="services-grid">
        <?php foreach ($services_data as $service): ?>
          <div class="service-card">
            <div class="service-icon-box">
              <?php
                $iconClass = 'fa-solid fa-code';
                if ($service['icon'] === 'server') $iconClass = 'fa-solid fa-server';
                if ($service['icon'] === 'smartphone') $iconClass = 'fa-solid fa-mobile-screen-button';
                if ($service['icon'] === 'layout') $iconClass = 'fa-solid fa-pen-ruler';
                if ($service['icon'] === 'bot') $iconClass = 'fa-solid fa-robot';
                if ($service['icon'] === 'search') $iconClass = 'fa-solid fa-magnifying-glass-chart';
                if ($service['icon'] === 'shield-check') $iconClass = 'fa-solid fa-shield-halved';
              ?>
              <i class="<?php echo $iconClass; ?>"></i>
            </div>
            <span class="service-badge"><?php echo htmlspecialchars($service['badge']); ?></span>
            <h3 class="service-title"><?php echo htmlspecialchars($service['title']); ?></h3>
            <p class="service-desc"><?php echo htmlspecialchars($service['description']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       NEW SECTION: FAQ (Dark Navy Accordion)
       ========================================================================= -->
  <section class="faq-section" id="faq">
    <div class="glow-blob sage" style="top: 25%; left: 5%; width: 400px; height: 400px;"></div>
    <div class="glow-blob slate" style="bottom: 15%; right: 5%; width: 420px; height: 420px;"></div>

    <div class="container">

      <div class="faq-header">
        <div class="eyebrow sage-pill" style="margin: 0 auto 12px;">
          <i class="fa-solid fa-circle-question"></i>
          <span>FAQ</span>
        </div>
        <h2 class="faq-title">
          <span class="light-weight">Got Questions?</span> <span class="bold-weight">Already Answered.</span>
        </h2>
        <p class="section-subtitle" style="margin: 0 auto;">
          Everything you need to know about starting a project, workflow, timelines, and support.
        </p>
      </div>

      <div class="faq-container">
        <div class="faq-list">

          <!-- FAQ 1 -->
          <div class="faq-item">
            <button class="faq-question-btn" aria-expanded="false">
              <span class="faq-question-text">How does the collaboration/work process work?</span>
              <div class="faq-icon-btn"><i class="fa-solid fa-plus"></i></div>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                I start by understanding your goals and requirements, then move through planning, design, development, and testing before launching your website.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question-btn" aria-expanded="false">
              <span class="faq-question-text">What do you need before starting a project?</span>
              <div class="faq-icon-btn"><i class="fa-solid fa-plus"></i></div>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Just your business details, any branding assets you already have (logo, colors), and a clear idea of what you want the website to achieve.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="faq-item">
            <button class="faq-question-btn" aria-expanded="false">
              <span class="faq-question-text">Do you provide ongoing support after the project is completed?</span>
              <div class="faq-icon-btn"><i class="fa-solid fa-plus"></i></div>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Yes, I offer maintenance and support packages to keep your website updated and running smoothly after launch.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="faq-item">
            <button class="faq-question-btn" aria-expanded="false">
              <span class="faq-question-text">How long does a typical website take to build?</span>
              <div class="faq-icon-btn"><i class="fa-solid fa-plus"></i></div>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Depending on complexity, most websites are completed within 1–3 weeks from approved design to launch.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="faq-item">
            <button class="faq-question-btn" aria-expanded="false">
              <span class="faq-question-text">What technologies do you work with?</span>
              <div class="faq-icon-btn"><i class="fa-solid fa-plus"></i></div>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                HTML, CSS, JavaScript, React, PHP, SQL, and other modern web development tools and frameworks.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="faq-item">
            <button class="faq-question-btn" aria-expanded="false">
              <span class="faq-question-text">How can I get a quote?</span>
              <div class="faq-icon-btn"><i class="fa-solid fa-plus"></i></div>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Simply reach out through the contact page with your project details, and I'll get back to you with a clear, transparent quote.
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. STATS BANNER (Solid Gradient #415A77 -> #779D7A)
       ========================================================================= -->
  <section class="stats-banner-section" id="statsBanner">
    <div class="container">
      <div class="stats-grid">
        <?php foreach ($stats_data as $stat): ?>
          <div class="stat-item">
            <div class="stat-number-wrap">
              <span class="stat-count" data-target="<?php echo intval($stat['number']); ?>"><?php echo intval($stat['number']); ?></span><?php echo htmlspecialchars($stat['suffix']); ?>
            </div>
            <span class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       7. CLIENT FEEDBACK SECTION (Cream Dotted Background - Carousel)
       ========================================================================= -->
  <section class="section-light" id="testimonials">
    <div class="container">
      
      <div class="section-header with-action">
        <div>
          <div class="eyebrow tan-pill">
            <i class="fa-solid fa-comments"></i>
            <span>Testimonials</span>
          </div>
          <h2 class="section-title">Client Feedback</h2>
          <p class="section-subtitle">
            What business owners, technical leads, and founders say about working with Muhammad Musab.
          </p>
        </div>
        <div class="view-all-link" style="cursor: default;">
          <i class="fa-solid fa-star" style="color: #F7B731;"></i>
          <span>5.0 Star Rated (25+ Reviews)</span>
        </div>
      </div>

      <div class="testimonials-wrapper">
        <div class="testimonials-carousel" id="testimonialsCarousel">
          <div class="testimonials-track" id="testimonialsTrack">
            <?php foreach ($all_testimonials as $review): ?>
              <div class="testimonial-card-wrap">
                <div class="testimonial-card">
                  <div class="testimonial-quote-icon">
                    <i class="fa-solid fa-quote-left"></i>
                  </div>
                  <div class="testimonial-stars">
                    <?php for ($s = 0; $s < 5; $s++): ?>
                      <i class="fa-solid fa-star"></i>
                    <?php endfor; ?>
                  </div>
                  <p class="testimonial-feedback">
                    "<?php echo htmlspecialchars($review['feedback']); ?>"
                  </p>
                  <div class="testimonial-author">
                    <div class="author-avatar" style="background-color: <?php echo htmlspecialchars($review['avatar_bg'] ?? '#415A77'); ?>;">
                      <?php echo htmlspecialchars($review['avatar_initials'] ?? 'CL'); ?>
                    </div>
                    <div class="author-details">
                      <span class="author-name"><?php echo htmlspecialchars($review['name']); ?></span>
                      <span class="author-role"><?php echo htmlspecialchars($review['role']); ?> • <?php echo htmlspecialchars($review['company']); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="carousel-controls">
          <button class="carousel-arrow-btn" id="prevReviewBtn" aria-label="Previous reviews">
            <i class="fa-solid fa-arrow-left"></i>
          </button>
          <div class="carousel-dots" id="carouselDots"></div>
          <button class="carousel-arrow-btn" id="nextReviewBtn" aria-label="Next reviews">
            <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. MY PROCESS SECTION (Dark Navy with Numbered Timeline)
       ========================================================================= -->
  <section class="section-dark" id="process">
    <div class="glow-blob slate" style="top: 10%; left: 10%; width: 400px; height: 400px;"></div>
    <div class="glow-blob sage" style="bottom: 10%; right: 10%; width: 350px; height: 350px;"></div>

    <div class="container">
      
      <div class="section-header text-center">
        <div class="eyebrow sage-pill">
          <i class="fa-solid fa-diagram-project"></i>
          <span>My Process</span>
        </div>
        <h2 class="section-title">A Simple, Proven Process</h2>
        <p class="section-subtitle">
          How I take your vision from initial concept to a high-performing, fully-tested live website.
        </p>
      </div>

      <div class="process-timeline-wrap">
        <div class="timeline-track-line">
          <div class="timeline-progress-line" id="timelineProgressLine"></div>
        </div>

        <div class="process-steps-grid">
          <?php foreach ($process_steps as $step): ?>
            <div class="process-step-node">
              <div class="step-node-circle"><?php echo htmlspecialchars($step['step']); ?></div>
              <h3 class="step-title"><?php echo htmlspecialchars($step['title']); ?></h3>
              <p class="step-desc"><?php echo htmlspecialchars($step['description']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       9. PRICING SECTION (Cream Dotted Background)
       ========================================================================= -->
  <section class="section-light" id="pricing">
    <div class="container">
      
      <div class="section-header text-center">
        <div class="eyebrow slate-pill">
          <i class="fa-solid fa-tags"></i>
          <span>Transparent Packages</span>
        </div>
        <h2 class="section-title">Simple, Value-Driven Pricing</h2>
        <p class="section-subtitle">
          Clear, straightforward web development packages designed to deliver maximum return on investment.
        </p>
      </div>

      <div class="pricing-grid">
        <?php foreach ($pricing_packages as $pkg): ?>
          <div class="pricing-card <?php echo !empty($pkg['is_popular']) ? 'popular' : ''; ?>">
            
            <?php if (!empty($pkg['badge'])): ?>
              <div class="popular-badge"><?php echo htmlspecialchars($pkg['badge']); ?></div>
            <?php endif; ?>

            <div class="pricing-header">
              <h3 class="pricing-tier-name"><?php echo htmlspecialchars($pkg['name']); ?></h3>
              <p class="pricing-tier-tagline"><?php echo htmlspecialchars($pkg['tagline'] ?? ''); ?></p>
              
              <div class="price-box">
                <span class="price-currency"><?php echo htmlspecialchars($pkg['currency'] ?? '$'); ?></span>
                <span class="price-amount"><?php echo htmlspecialchars($pkg['price']); ?></span>
                <span class="price-period">/ project</span>
              </div>
            </div>

            <div class="pricing-features-list">
              <?php foreach ((array)$pkg['features'] as $feat): ?>
                <div class="pricing-feature-item">
                  <i class="fa-solid fa-circle-check"></i>
                  <span><?php echo htmlspecialchars($feat); ?></span>
                </div>
              <?php endforeach; ?>
            </div>

            <a href="contact.php" class="btn <?php echo !empty($pkg['is_popular']) ? 'btn-gradient' : 'btn-outline'; ?> pricing-btn magnetic-btn" style="<?php echo empty($pkg['is_popular']) ? 'color: var(--text-dark-primary); border-color: var(--accent-slate);' : ''; ?>">
              <span><?php echo htmlspecialchars($pkg['button_text'] ?? 'Get Started'); ?></span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>

          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       NEW SECTION: CTA BANNER (Directly Above Footer)
       ========================================================================= -->
  <section class="cta-banner-section" id="ctaBanner">
    <div class="glow-blob sage" style="top: 10%; right: 15%; width: 350px; height: 350px;"></div>
    <div class="glow-blob slate" style="bottom: 10%; left: 10%; width: 400px; height: 400px;"></div>

    <div class="container">
      <div class="cta-banner-grid">

        <!-- Left Side: Text & Actions -->
        <div class="cta-banner-content">
          <div class="cta-banner-eyebrow">
            <i class="fa-solid fa-paper-plane"></i>
            <span>GET IN TOUCH</span>
          </div>

          <h2 class="cta-banner-title">
            <span class="cta-banner-chip">Let's Build Something Great.</span>
            <span class="cta-banner-title-plain">And Bring Your Vision to Life!</span>
          </h2>

          <p class="cta-banner-tagline">More Projects. Better Websites. Real Results.</p>

          <p class="cta-banner-desc">
            Ready for a website that doesn't just look good but actually performs? Let's talk about where your business stands today, what could make it more visible online, and what the right next steps look like.
          </p>

          <div class="cta-banner-actions">
            <a href="contact.php" class="cta-banner-main-btn magnetic-btn">
              <span>Start Your Project</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="contact.php" class="cta-banner-arrow-btn magnetic-btn" aria-label="Go to Contact Page">
              <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
          </div>
        </div>

        <!-- Right Side: Musab Photo with Pulsing Glow (4.png) -->
        <div class="cta-banner-img-col">
          <div class="cta-photo-wrap">
            <div class="cta-pulse-glow"></div>
            <img src="assets/images/4.png"
              alt="Muhammad Musab - Let's build your website"
              class="cta-banner-photo"
              onerror="this.src='MY images/4.png'"
              loading="lazy">
          </div>
        </div>

      </div>
    </div>
  </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
