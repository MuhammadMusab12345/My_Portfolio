<?php
/**
 * Muhammad Musab - All Projects Gallery Page (PHP Version)
 * 2-column grid across 3 rows featuring all 6 web development projects.
 */

$page_title = 'All Web Projects — Muhammad Musab | Full-Stack Developer';
$is_subpage = true;

require_once __DIR__ . '/includes/db.php';

$all_projects = Database::getProjects();

include __DIR__ . '/includes/header.php';
?>

  <!-- Projects Hero Header Banner (Dark Navy) -->
  <section class="section-dark projects-page-hero">
    <div class="glow-blob sage" style="top: 15%; left: 30%; width: 450px; height: 450px;"></div>
    
    <div class="container">
      <div class="eyebrow sage-pill" style="margin-bottom: 20px;">
        <i class="fa-solid fa-code-fork"></i>
        <span>Full Portfolio</span>
      </div>
      <h1 class="section-title" style="font-size: clamp(2.4rem, 4vw, 3.5rem); margin-bottom: 16px;">
        All Web Development Projects
      </h1>
      <p class="section-subtitle" style="margin: 0 auto; max-width: 650px;">
        Explore my complete collection of custom web applications, full-stack platforms, and high-performance 3D digital experiences.
      </p>

      <div style="margin-top: 24px;">
        <a href="index.php" class="btn btn-outline magnetic-btn" style="padding: 10px 22px; font-size: 0.875rem;">
          <i class="fa-solid fa-arrow-left"></i>
          <span>Back to Home</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Projects Grid Section (Cream Dotted Background) -->
  <section class="section-light" style="padding-top: 60px; min-height: 80vh;">
    <div class="container">

      <!-- Interactive Category Filter Pills -->
      <div class="category-filter-pills" id="projectFilterPills">
        <button class="filter-pill active" data-filter="all">All Projects (6)</button>
        <button class="filter-pill" data-filter="normal">Standard Websites (3)</button>
        <button class="filter-pill" data-filter="3d">3D &amp; Interactive (3)</button>
      </div>

      <!-- 2-Column Grid Across 3 Rows (2, 2, 2 Layout) -->
      <div class="projects-grid two-columns" id="allProjectsGrid">
        <?php foreach ($all_projects as $proj): ?>
          <div class="project-card project-item-card" data-category="<?php echo htmlspecialchars($proj['category']); ?>">
            
            <div class="project-img-wrap">
              <span class="project-badge-tag <?php echo $proj['category'] === '3d' ? 'badge-3d' : ''; ?>">
                <?php echo htmlspecialchars($proj['category_label'] ?? ($proj['category'] === '3d' ? '3D Website' : 'Website')); ?>
              </span>
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
              
              <?php if (!empty($proj['tagline'])): ?>
                <p style="font-size: 0.85rem; font-weight: 700; color: var(--accent-slate); margin-bottom: 8px;">
                  <?php echo htmlspecialchars($proj['tagline']); ?>
                </p>
              <?php endif; ?>

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

      <!-- Bottom Call To Action -->
      <div class="projects-bottom-cta-card">
        <h3 style="font-family: var(--font-heading); font-size: clamp(1.4rem, 3vw, 1.8rem); font-weight: 800; color: var(--text-dark-primary); margin-bottom: 12px;">
          Need a Custom Website Built for Your Business?
        </h3>
        <p style="color: var(--text-dark-secondary); max-width: 550px; margin: 0 auto 28px auto;">
          Whether you require a clean responsive layout or a full-stack database system, let's turn your ideas into a high-converting digital product.
        </p>
        <a href="contact.php" class="btn btn-gradient magnetic-btn">
          <span>Let's Discuss Your Project</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Filter JavaScript for Projects Page -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const filterBtns = document.querySelectorAll('#projectFilterPills .filter-pill');
      const projectCards = document.querySelectorAll('.project-item-card');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          filterBtns.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');

          const filterVal = btn.getAttribute('data-filter');

          projectCards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            if (filterVal === 'all' || cardCat === filterVal) {
              card.style.display = 'flex';
              card.style.opacity = '1';
              card.style.transform = 'scale(1)';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>

<?php include __DIR__ . '/includes/footer.php'; ?>
