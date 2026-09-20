<?php
/**
 * Global Header & Floating Navbar
 * Includes SEO meta, modern typography, icons, GSAP CDNs, and responsive navigation.
 */
if (!isset($page_title)) {
    $page_title = 'Muhammad Musab — Full-Stack Website Developer';
}
if (!isset($is_subpage)) {
    $is_subpage = false;
}
if (!isset($is_light_hero)) {
    $is_light_hero = false;
}
$base_url = $is_subpage ? './' : './';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="Portfolio of Muhammad Musab — Full-Stack Website Developer specializing in custom web design, PHP & MySQL back-end architecture, responsive front-ends, and 3D web experiences.">
  <meta name="keywords" content="Muhammad Musab, Full Stack Web Developer, PHP Developer, MySQL, Front-End Developer, Back-End Developer, Responsive Web Design">
  <meta name="author" content="Muhammad Musab">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/Logo 2.png">
  
  <!-- Google Fonts: Plus Jakarta Sans (Headings) & Inter (Body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- FontAwesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- GSAP & ScrollTrigger Animation Libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Floating Transparent-to-Frosted-Glass Navbar -->
  <header class="site-navbar<?php echo $is_light_hero ? ' light-page-navbar' : ''; ?>" id="siteNavbar">
    <div class="container navbar-inner">
      
      <!-- Left: Bare Logo -->
      <a href="<?php echo $is_subpage ? 'index.php' : '#hero'; ?>" class="brand-logo" id="brandLogoLink">
        <img src="assets/images/Logo 2.png" alt="Muhammad Musab Logo" class="brand-logo-img" onerror="this.src='Logo 2.png'">
      </a>

      <!-- Center: Nav Links (Desktop) -->
      <nav class="nav-menu" id="desktopNavMenu">
        <a href="<?php echo $is_subpage ? 'index.php#hero' : '#hero'; ?>" class="nav-link">Home</a>
        <a href="<?php echo $is_subpage ? 'index.php#services' : '#services'; ?>" class="nav-link">Services</a>
        <a href="projects.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) === 'projects.php') ? 'active' : ''; ?>">Projects</a>
        <a href="<?php echo $is_subpage ? 'index.php#about' : '#about'; ?>" class="nav-link">About Me</a>
        <a href="<?php echo $is_subpage ? 'index.php#process' : '#process'; ?>" class="nav-link">Process</a>
        <a href="<?php echo $is_subpage ? 'index.php#pricing' : '#pricing'; ?>" class="nav-link">Pricing</a>
        <a href="<?php echo $is_subpage ? 'index.php#testimonials' : '#testimonials'; ?>" class="nav-link">Reviews</a>
        <a href="contact.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) === 'contact.php') ? 'active' : ''; ?>">Contact</a>
      </nav>

      <!-- Far Right: Solid Sage-Green CTA Pill Button -->
      <div class="nav-right">
        <a href="contact.php" class="btn btn-sage-solid nav-cta-btn magnetic-btn" id="navCtaBtn">
          <span>Let's Talk</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
        
        <!-- Mobile Hamburger Button -->
        <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobileNavOverlay">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>
      </div>

    </div>
  </header>

  <!-- Mobile Full-Screen Navigation Drawer -->
  <div class="mobile-nav-overlay" id="mobileNavOverlay" role="dialog" aria-modal="true" aria-label="Navigation Menu">
    <button class="mobile-nav-close-btn" id="closeMobileNavBtn" aria-label="Close navigation menu">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <nav class="mobile-nav-menu">
      <a href="<?php echo $is_subpage ? 'index.php#hero' : '#hero'; ?>" class="mobile-nav-link">Home</a>
      <a href="<?php echo $is_subpage ? 'index.php#services' : '#services'; ?>" class="mobile-nav-link">Services</a>
      <a href="projects.php" class="mobile-nav-link">All Projects</a>
      <a href="<?php echo $is_subpage ? 'index.php#about' : '#about'; ?>" class="mobile-nav-link">About Me</a>
      <a href="<?php echo $is_subpage ? 'index.php#process' : '#process'; ?>" class="mobile-nav-link">My Process</a>
      <a href="<?php echo $is_subpage ? 'index.php#pricing' : '#pricing'; ?>" class="mobile-nav-link">Pricing Packages</a>
      <a href="<?php echo $is_subpage ? 'index.php#testimonials' : '#testimonials'; ?>" class="mobile-nav-link">Client Reviews</a>
      <a href="contact.php" class="mobile-nav-link">Contact</a>
      <a href="contact.php" class="btn btn-sage-solid" style="margin-top: 16px; width: 100%;">
        <span>Let's Talk</span>
        <i class="fa-solid fa-arrow-right"></i>
      </a>
    </nav>
  </div>
