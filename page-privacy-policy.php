<?php
/*
Template Name: Privacy Policy
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Privacy Policy - eedii. Learn how we collect, use, and protect your information.">
  <title>Privacy Policy – eedii</title>
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
          <a href="<?php echo esc_url(home_url('/catalog/')); ?>">Entire Catalog</a>
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

  <!-- POLICY CONTENT -->
  <main class="policy-page">
    <div class="policy-container">
      <h1 class="policy-title">Privacy Policy</h1>
      <p class="policy-subtitle">Your privacy matters to us. This policy explains how we collect, use, and protect your
        information when you use our website.</p>

      <section class="policy-section">
        <h2>1 : Information We Collect</h2>
        <p>Name, email, and billing information provided during checkout.</p>
        <p>Basic analytics (via cookies) to understand website traffic and improve user experience.</p>
      </section>

      <section class="policy-section">
        <h2>2 : How We Use Your Information</h2>
        <ul>
          <li>To process and deliver your digital purchases.</li>
          <li>To communicate updates, product launches, or special offers (only if you subscribe).</li>
          <li>To improve website performance and security.</li>
        </ul>
      </section>

      <section class="policy-section">
        <h2>3 : Data Protection</h2>
        <p>We do not sell, rent, or trade your personal information to third parties. Payments are processed securely
          through trusted third-party payment gateways (PayPal, ...).</p>
      </section>

      <section class="policy-section">
        <h2>4 : Cookies</h2>
        <p>Our website may use cookies to enhance browsing. You can disable cookies in your browser settings if
          preferred.</p>
      </section>

      <section class="policy-section">
        <h2>5 : Third-Party Services</h2>
        <p>We may use third-party tools (like Google Analytics or payment providers) that collect basic usage data.
          These services have their own privacy policies.</p>
      </section>

      <section class="policy-section">
        <h2>6 : Your Rights</h2>
        <p>You may request access, correction, or deletion of your personal data by contacting us at <a
            href="mailto:contact@eedii.com">contact@eedii.com</a>.</p>
      </section>

      <section class="policy-section">
        <h2>7 : Policy Updates</h2>
        <p>We may revise this Privacy Policy from time to time. Updates will be posted on this page.</p>
      </section>
    </div>
  </main>

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
