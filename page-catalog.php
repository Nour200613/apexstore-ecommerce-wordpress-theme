<?php
/*
Template Name: Catalog
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="eedii - Premium digital templates and planners. Professional Resume Templates, Digital Planners, Budget Spreadsheets and more.">
  <title>Entire Catalog – eedii</title>
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/styles.css">
  <?php wp_head(); ?>
</head>

<body>

  <!-- ═══════════════════════════════════════════
       1. TOP MARQUEE BAR
       ═══════════════════════════════════════════ -->
  <div class="marquee-bar" id="top-marquee">
    <div class="marquee-track">
      <div class="marquee-content">
        <span class="marquee-item">NO MONTHLY FEES</span>
        <span class="marquee-item">LIFETIME ACCESS</span>
        <span class="marquee-item">PREMIUM EBOOKS</span>
        <span class="marquee-item">ONE-TIME PAYMENT</span>
        <span class="marquee-item">FLASH SALE!!</span>
      </div>
      <div class="marquee-content">
        <span class="marquee-item">NO MONTHLY FEES</span>
        <span class="marquee-item">LIFETIME ACCESS</span>
        <span class="marquee-item">PREMIUM EBOOKS</span>
        <span class="marquee-item">ONE-TIME PAYMENT</span>
        <span class="marquee-item">FLASH SALE!!</span>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════
       2. HEADER / NAVIGATION
       ═══════════════════════════════════════════ -->
  <header class="header" id="header">
    <div class="header-container">
      <div class="header-left-group">
        <button class="hamburger" id="hamburger-btn" aria-label="Open menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <nav class="desktop-nav">
          <a href="<?php echo esc_url(home_url('/home/')); ?>">Home</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>
          <a href="<?php echo esc_url(home_url('/catalog/')); ?>" class="active">Entire Catalog</a>
        </nav>
      </div>

      <a href="<?php echo esc_url(home_url('/home/')); ?>" class="header-logo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="eedii Logo">
      </a>

      <div class="header-right">
        <button class="header-icon" aria-label="Search" id="search-btn">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Nav -->
  <nav class="mobile-nav" id="mobile-nav">
    <button class="mobile-nav-close" id="nav-close">&#10005;</button>
    <a href="<?php echo esc_url(home_url('/home/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>
    <a href="<?php echo esc_url(home_url('/catalog/')); ?>">Entire Catalog</a>
  </nav>
  <div class="nav-overlay" id="nav-overlay"></div>

  <!-- ═══════════════════════════════════════════
       PRODUCTS CATALOG
       ═══════════════════════════════════════════ -->
  <section class="bestsellers-section" id="catalog" style="padding-top: 32px;">
    <h1 class="section-title fade-in" style="margin-top: 20px;">Browse our catalog of premium digital templates and
      planners</h1>
    <br>

    <div class="bestsellers-grid"
      style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; padding-bottom: 40px;">

      <!-- Product 1 -->
      <div class="bestseller-card fade-in">
        <a href="<?php echo esc_url(home_url('/resume-cv-template/')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-1.jpeg" alt="Resume Template" class="bestseller-img">
          <div class="bestseller-info">
            <h3 class="bestseller-name">Professional Resume &amp; CV Template for Executives</h3>
            <div class="bestseller-price">
              <span class="price-current">$7.97</span>
            </div>
            <button class="btn-buy-sm">VIEW PRODUCT</button>
          </div>
        </a>
      </div>

      <!-- Product 2 -->
      <div class="bestseller-card fade-in">
        <a href="<?php echo esc_url(home_url('/digital-planner/')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p2-17.jpeg" alt="All-in-One Digital Planner" class="bestseller-img">
          <div class="bestseller-info">
            <h3 class="bestseller-name">All-in-One Digital Planner 2026, 2027, 2028 Digital Planner</h3>
            <div class="bestseller-price">
              <span class="price-current">$2.99</span>
            </div>
            <button class="btn-buy-sm">VIEW PRODUCT</button>
          </div>
        </a>
      </div>

      <!-- Product 3 -->
      <div class="bestseller-card fade-in">
        <a href="<?php echo esc_url(home_url('/budget-planner/')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg" alt="Budget Planner Google Sheet" class="bestseller-img">
          <div class="bestseller-info">
            <h3 class="bestseller-name">Budget Planner Google Sheet Monthly Budget Spreadsheet</h3>
            <div class="bestseller-price">
              <span class="price-current">$2.99</span>
            </div>
            <button class="btn-buy-sm">VIEW PRODUCT</button>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       FOOTER
       ═══════════════════════════════════════════ -->
  <footer class="footer" id="footer">
    <div class="footer-links">
      <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy policy</a>
      <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">Terms of service</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>
      <a href="<?php echo esc_url(home_url('/refund-policy/')); ?>">Refund policy</a>
    </div>
    <hr class="footer-divider">

    <div class="payment-icons">
      <div class="payment-icon">
        <span style="color:#1a1f71; font-weight:900; font-size:0.8rem; font-style:italic;">VISA</span>
      </div>
      <div class="payment-icon">
        <svg width="36" height="22" viewBox="0 0 36 22">
          <circle cx="13" cy="11" r="8" fill="#EB001B" opacity="0.9" />
          <circle cx="23" cy="11" r="8" fill="#F79E1B" opacity="0.9" />
          <path d="M18 4.5a8 8 0 0 1 0 13" fill="#FF5F00" opacity="0.9" />
        </svg>
      </div>
      <div class="payment-icon">
        <span style="color:#003087; font-weight:800; font-size:0.65rem;">Pay<span
            style="color:#009cde;">Pal</span></span>
      </div>
      <div class="payment-icon">
        <span style="color:#2e77bb; font-weight:900; font-size:0.55rem; letter-spacing:-0.5px;">AMEX</span>
      </div>
      <div class="payment-icon">
        <span style="color:rgba(255,255,255,0.8); font-weight:600; font-size:0.6rem;"> Pay</span>
      </div>
      <div class="payment-icon">
        <span style="font-weight:600; font-size:0.6rem;"><span style="color:#4285f4;">G</span><span
            style="color:rgba(255,255,255,0.7);"> Pay</span></span>
      </div>
      <div class="payment-icon">
        <span style="color:#5a31f4; font-weight:700; font-size:0.6rem;">Shop</span>
      </div>
      <div class="payment-icon">
        <span style="color:#ff6000; font-weight:700; font-size:0.55rem;">DISCOVER</span>
      </div>
    </div>

    <p class="footer-copy">© <?php echo date("Y"); ?> eedii. All rights reserved.</p>
  </footer>

  <button id="scrollTopBtn" class="scroll-top-btn" aria-label="Scroll to top">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
      stroke-linecap="round" stroke-linejoin="round">
      <path d="M18 15l-6-6-6 6" />
    </svg>
  </button>

  <!-- Search Overlay -->
  <div class="search-overlay" id="search-overlay">
    <button class="search-close" id="search-close">&times;</button>
    <div class="search-container">
      <div class="search-input-wrapper">
        <input type="text" class="search-input" id="search-input" placeholder="Search products..." autocomplete="off">
      </div>
      <div class="search-results" id="search-results"></div>
    </div>
  </div>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/script.js"></script>
  <?php wp_footer(); ?>
</body>

</html>