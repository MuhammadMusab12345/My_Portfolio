/**
 * Muhammad Musab - Full-Stack Portfolio Interactive Scripts
 * Handles GSAP ScrollTrigger animations, rotating role text, carousel, counters, and navigation.
 */

document.addEventListener('DOMContentLoaded', () => {
  // Initialize GSAP & ScrollTrigger
  if (typeof gsap !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
    initGSAPAnimations();
  }

  initNavbarScroll();
  initScrollSpy();
  initMobileMenu();
  initRotatingRoleText();
  initStatsCounter();
  initProjectsIntroStats();
  initFaqAccordion();
  initTestimonialCarousel();
  initMagneticButtons();
});

/* --------------------------------------------------------------------------
   1. Navbar Scroll Transition
   -------------------------------------------------------------------------- */
function initNavbarScroll() {
  const navbar = document.getElementById('siteNavbar');
  if (!navbar) return;

  const handleScroll = () => {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();
}

/* --------------------------------------------------------------------------
   2. Mobile Hamburger Menu & Full-Screen Overlay
   -------------------------------------------------------------------------- */
function initMobileMenu() {
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const mobileNavOverlay = document.getElementById('mobileNavOverlay');
  const closeMobileNavBtn = document.getElementById('closeMobileNavBtn');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');

  if (!hamburgerBtn || !mobileNavOverlay) return;

  const closeMenu = () => {
    hamburgerBtn.classList.remove('active');
    hamburgerBtn.setAttribute('aria-expanded', 'false');
    mobileNavOverlay.classList.remove('open');
    document.documentElement.style.overflow = '';
    document.body.style.overflow = '';
  };

  const openMenu = () => {
    hamburgerBtn.classList.add('active');
    hamburgerBtn.setAttribute('aria-expanded', 'true');
    mobileNavOverlay.classList.add('open');
    document.documentElement.style.overflow = 'hidden';
    document.body.style.overflow = 'hidden';
  };

  const toggleMenu = () => {
    const isOpen = hamburgerBtn.classList.contains('active');
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  };

  hamburgerBtn.addEventListener('click', toggleMenu);

  if (closeMobileNavBtn) {
    closeMobileNavBtn.addEventListener('click', closeMenu);
  }

  mobileLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Close when clicking overlay background outside links/menu
  mobileNavOverlay.addEventListener('click', (e) => {
    if (e.target === mobileNavOverlay) {
      closeMenu();
    }
  });

  // Close on ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileNavOverlay.classList.contains('open')) {
      closeMenu();
    }
  });

  // Clean up if window is resized past mobile breakpoint
  window.addEventListener('resize', () => {
    if (window.innerWidth > 1024 && mobileNavOverlay.classList.contains('open')) {
      closeMenu();
    }
  });
}

/* --------------------------------------------------------------------------
   3. Rotating Role Text in Hero Section (2s Cycle)
   -------------------------------------------------------------------------- */
function initRotatingRoleText() {
  const roleElem = document.getElementById('rotatingRoleText');
  if (!roleElem) return;

  const roles = [
    'Full Stack Website Developer',
    'Front-End Developer',
    'Back-End Developer',
    'Responsive Web Design Expert',
    'Modern Web Architect'
  ];

  let currentIndex = 0;

  setInterval(() => {
    // Fade out and slide up slightly
    roleElem.style.opacity = '0';
    roleElem.style.transform = 'translateY(-10px)';

    setTimeout(() => {
      currentIndex = (currentIndex + 1) % roles.length;
      roleElem.textContent = roles[currentIndex];

      // Reset position and fade in
      roleElem.style.transform = 'translateY(10px)';
      roleElem.style.opacity = '0';

      setTimeout(() => {
        roleElem.style.transition = 'all 0.35s ease';
        roleElem.style.opacity = '1';
        roleElem.style.transform = 'translateY(0)';
      }, 50);
    }, 300);
  }, 2000);
}

/* --------------------------------------------------------------------------
   4. Stats Banner Numerical Counter
   -------------------------------------------------------------------------- */
function initStatsCounter() {
  const statNumbers = document.querySelectorAll('.stat-count');
  if (!statNumbers.length) return;

  let counted = false;

  const startCounters = () => {
    statNumbers.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
      const duration = 2000;
      const frameRate = 1000 / 60;
      const totalFrames = Math.round(duration / frameRate);
      let currentFrame = 0;

      const counterInterval = setInterval(() => {
        currentFrame++;
        const progress = currentFrame / totalFrames;
        // Ease out quadratic
        const easeProgress = 1 - (1 - progress) * (1 - progress);
        const currentCount = Math.floor(easeProgress * target);

        counter.textContent = currentCount;

        if (currentFrame >= totalFrames) {
          counter.textContent = target;
          clearInterval(counterInterval);
        }
      }, frameRate);
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !counted) {
        counted = true;
        startCounters();
      }
    });
  }, { threshold: 0.3 });

  const statsSection = document.getElementById('statsBanner');
  if (statsSection) {
    observer.observe(statsSection);
  }
}

/* --------------------------------------------------------------------------
   5. Client Feedback Testimonials Carousel
   -------------------------------------------------------------------------- */
function initTestimonialCarousel() {
  const track = document.getElementById('testimonialsTrack');
  const prevBtn = document.getElementById('prevReviewBtn');
  const nextBtn = document.getElementById('nextReviewBtn');
  const dotsContainer = document.getElementById('carouselDots');

  if (!track) return;

  const cards = track.querySelectorAll('.testimonial-card-wrap');
  if (!cards.length) return;

  let currentIndex = 0;
  let cardsPerView = getCardsPerView();
  let maxIndex = Math.max(0, cards.length - cardsPerView);
  let autoplayTimer = null;

  function getCardsPerView() {
    if (window.innerWidth <= 767) return 1;
    if (window.innerWidth <= 1024) return 2;
    return 3;
  }

  function updateCarousel() {
    cardsPerView = getCardsPerView();
    maxIndex = Math.max(0, cards.length - cardsPerView);
    if (currentIndex > maxIndex) currentIndex = maxIndex;

    const percentageShift = (100 / cardsPerView) * currentIndex;
    track.style.transform = `translateX(-${percentageShift}%)`;

    // Update Dots
    if (dotsContainer) {
      const dots = dotsContainer.querySelectorAll('.carousel-dot');
      dots.forEach((dot, idx) => {
        dot.classList.toggle('active', idx === currentIndex);
      });
    }
  }

  function createDots() {
    if (!dotsContainer) return;
    dotsContainer.innerHTML = '';
    const totalDots = Math.min(8, maxIndex + 1); // Cap visual dots to 8 for neatness
    for (let i = 0; i < totalDots; i++) {
      const dot = document.createElement('div');
      dot.className = `carousel-dot ${i === 0 ? 'active' : ''}`;
      dot.addEventListener('click', () => {
        currentIndex = Math.min(i * Math.ceil(maxIndex / totalDots), maxIndex);
        updateCarousel();
        resetAutoplay();
      });
      dotsContainer.appendChild(dot);
    }
  }

  function nextSlide() {
    currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
    updateCarousel();
  }

  function prevSlide() {
    currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
    updateCarousel();
  }

  function startAutoplay() {
    autoplayTimer = setInterval(nextSlide, 4500);
  }

  function resetAutoplay() {
    clearInterval(autoplayTimer);
    startAutoplay();
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetAutoplay();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      resetAutoplay();
    });
  }

  // Touch Swipe Support for Mobile & Tablets
  let touchStartX = 0;
  let touchEndX = 0;

  track.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
    clearInterval(autoplayTimer);
  }, { passive: true });

  track.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    const diff = touchStartX - touchEndX;
    if (Math.abs(diff) > 45) {
      if (diff > 0) {
        nextSlide();
      } else {
        prevSlide();
      }
    }
    resetAutoplay();
  }, { passive: true });

  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      updateCarousel();
      createDots();
      if (typeof ScrollTrigger !== 'undefined') {
        ScrollTrigger.refresh();
      }
    }, 150);
  });

  createDots();
  updateCarousel();
  startAutoplay();

  // Pause on hover
  track.addEventListener('mouseenter', () => clearInterval(autoplayTimer));
  track.addEventListener('mouseleave', () => startAutoplay());
}

/* --------------------------------------------------------------------------
   6. Magnetic Button Hover Effect
   -------------------------------------------------------------------------- */
function initMagneticButtons() {
  const magneticBtns = document.querySelectorAll('.magnetic-btn');

  magneticBtns.forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;

      btn.style.transform = `translate(${x * 0.22}px, ${y * 0.22}px)`;
    });

    btn.addEventListener('mouseleave', () => {
      btn.style.transform = 'translate(0px, 0px)';
    });
  });
}

/* --------------------------------------------------------------------------
   7. GSAP & ScrollTrigger Animations
   -------------------------------------------------------------------------- */
function initGSAPAnimations() {
  // Hero Section One-Time Page-Load Staggered Sequence
  const heroIntroLead = document.querySelector('.hero-intro-lead');
  const heroRole = document.querySelector('.rotating-role-wrapper');
  const heroRating = document.querySelector('.hero-ref-rating-line');
  const heroBadges = document.querySelectorAll('.hero-ref-badge-item');
  const heroCta = document.querySelector('.hero-ref-cta-group');
  const heroPortrait = document.querySelector('.hero-portrait-col');
  const heroCutoutImg = document.querySelector('.hero-cutout-img');

  if (heroIntroLead || heroRole) {
    const heroTl = gsap.timeline({ defaults: { ease: 'power4.out', duration: 0.95 } });

    // 1. Role tag fades in first
    if (heroRole) {
      heroTl.from(heroRole, { opacity: 0, y: 20, scale: 0.95, duration: 0.7, ease: 'power3.out', delay: 0.1 });
    }

    // 2. Identity block (name, role, mission) slides up
    if (heroIntroLead) {
      heroTl.from(heroIntroLead, { opacity: 0, y: 30, duration: 0.9, ease: 'power4.out' }, '-=0.5');
    }

    // 3. Recommendation rating line
    if (heroRating) {
      heroTl.from(heroRating, { opacity: 0, y: 15, duration: 0.6, ease: 'power3.out' }, '-=0.5');
    }

    // 4. Trust Badges row
    if (heroBadges.length) {
      heroTl.from(heroBadges, { opacity: 0, y: 15, stagger: 0.08, duration: 0.55, ease: 'power3.out' }, '-=0.45');
    }

    // 5. CTA Button Group
    if (heroCta) {
      heroTl.from(heroCta, { opacity: 0, y: 20, duration: 0.7, ease: 'power3.out' }, '-=0.4');
    }

    // 6. Floating Cutout Portrait - glow backdrop fades in behind the ribbon
    if (heroPortrait) {
      heroTl.from(heroPortrait, { opacity: 0, duration: 1.1, ease: 'power3.out' }, '-=1.1');
    }

    // 7. Image rises up from behind the ribbon (bottom -> top reveal, one
    //    continuous clip-path sweep so there is never a visible break/seam)
    if (heroCutoutImg) {
      heroTl.fromTo(
        heroCutoutImg,
        { clipPath: 'inset(88% 0% 0% 0%)', webkitClipPath: 'inset(88% 0% 0% 0%)' },
        { clipPath: 'inset(0% 0% 0% 0%)', webkitClipPath: 'inset(0% 0% 0% 0%)', duration: 1.4, ease: 'power4.out' },
        '-=1.1'
      );
    }
  }

  // Generic Section Fade-In
  const revealSections = document.querySelectorAll('.gsap-reveal-section');
  revealSections.forEach(sec => {
    gsap.from(sec, {
      scrollTrigger: {
        trigger: sec,
        start: 'top 85%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 50,
      duration: 0.9,
      ease: 'power2.out'
    });
  });

  // Staggered Cards (Services, Projects, Pricing)
  const staggerContainers = document.querySelectorAll('.gsap-stagger-grid');
  staggerContainers.forEach(container => {
    const items = container.children;
    gsap.from(items, {
      scrollTrigger: {
        trigger: container,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 40,
      stagger: 0.15,
      duration: 0.8,
      ease: 'power2.out'
    });
  });

  // Process Timeline Connecting Line Draw Animation
  const processSection = document.getElementById('processSection') || document.getElementById('process');
  const progressLine = document.getElementById('timelineProgressLine');
  const stepNodes = document.querySelectorAll('.process-step-node');

  if (processSection && progressLine) {
    ScrollTrigger.create({
      trigger: processSection,
      start: 'top 65%',
      end: 'bottom 80%',
      scrub: 0.6,
      onUpdate: (self) => {
        const progress = self.progress * 100;
        progressLine.style.width = `${progress}%`;

        // Highlight step nodes progressively
        stepNodes.forEach((node, index) => {
          const threshold = (index / (stepNodes.length - 1)) * 100;
          if (progress >= threshold - 5) {
            node.classList.add('active');
          } else {
            node.classList.remove('active');
          }
        });
      }
    });
  }

  // Projects Intro Staggered Scroll-Reveal
  const projectsIntro = document.querySelector('.projects-intro-block');
  if (projectsIntro) {
    gsap.from('.projects-intro-left > *', {
      scrollTrigger: {
        trigger: projectsIntro,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 35,
      stagger: 0.12,
      duration: 0.8,
      ease: 'power2.out'
    });

    gsap.from('.projects-intro-img-card', {
      scrollTrigger: {
        trigger: projectsIntro,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      x: 40,
      duration: 1,
      ease: 'power3.out'
    });
  }

  // CTA Banner Reveal
  const ctaBanner = document.querySelector('.cta-banner-section');
  if (ctaBanner) {
    gsap.from('.cta-banner-content > *', {
      scrollTrigger: {
        trigger: ctaBanner,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 30,
      stagger: 0.1,
      duration: 0.8,
      ease: 'power2.out'
    });
  }
}

/* --------------------------------------------------------------------------
   8. FAQ Accordion Logic
   -------------------------------------------------------------------------- */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-item');
  if (!faqItems.length) return;

  faqItems.forEach(item => {
    const btn = item.querySelector('.faq-question-btn');
    const answer = item.querySelector('.faq-answer');
    if (!btn || !answer) return;

    btn.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Accordion behavior: close all other items
      faqItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('active')) {
          otherItem.classList.remove('active');
          const otherAnswer = otherItem.querySelector('.faq-answer');
          if (otherAnswer) {
            otherAnswer.style.maxHeight = null;
          }
          const otherBtn = otherItem.querySelector('.faq-question-btn');
          if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
        }
      });

      // Toggle clicked item
      if (isActive) {
        item.classList.remove('active');
        answer.style.maxHeight = null;
        btn.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('active');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });
}

/* --------------------------------------------------------------------------
   9. Projects Intro Stats Counter
   -------------------------------------------------------------------------- */
function initProjectsIntroStats() {
  const statNumbers = document.querySelectorAll('.project-stat-count');
  if (!statNumbers.length) return;

  let counted = false;

  const startCounters = () => {
    statNumbers.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
      const duration = 1800;
      const frameRate = 1000 / 60;
      const totalFrames = Math.round(duration / frameRate);
      let currentFrame = 0;

      const counterInterval = setInterval(() => {
        currentFrame++;
        const progress = currentFrame / totalFrames;
        const easeProgress = 1 - (1 - progress) * (1 - progress);
        const currentCount = Math.floor(easeProgress * target);

        counter.textContent = currentCount;

        if (currentFrame >= totalFrames) {
          counter.textContent = target;
          clearInterval(counterInterval);
        }
      }, frameRate);
    });
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !counted) {
        counted = true;
        startCounters();
      }
    });
  }, { threshold: 0.25 });

  const introBlock = document.querySelector('.projects-intro-block');
  if (introBlock) {
    observer.observe(introBlock);
  }
}

/* --------------------------------------------------------------------------
   10. Scroll-Spy for Desktop Navbar
   -------------------------------------------------------------------------- */
function initScrollSpy() {
  const sections = document.querySelectorAll('section[id], header[id]');
  const navLinks = document.querySelectorAll('#desktopNavMenu .nav-link');
  if (!sections.length || !navLinks.length) return;

  const onScroll = () => {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    let currentId = '';

    sections.forEach(section => {
      const sectionTop = section.offsetTop - 140;
      const sectionHeight = section.offsetHeight;
      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        currentId = section.getAttribute('id');
      }
    });

    if (currentId) {
      navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === `#${currentId}` || href.endsWith(`#${currentId}`)) {
          link.classList.add('active');
        } else if (href.startsWith('#') || href.includes('.html#') || href.includes('.php#')) {
          link.classList.remove('active');
        }
      });
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}


