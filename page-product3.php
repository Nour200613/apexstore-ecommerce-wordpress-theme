<?php
/*
Template Name: Product3
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Budget Planner Google Sheet - Monthly Budget Spreadsheet. Simple, easy-to-use financial planning template.">
  <title>Budget Planner Google Sheet – eedii</title>
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

  <!-- ═══════════════════════════════════════════
       5. PRODUCT GALLERY + INFO
       ═══════════════════════════════════════════ -->
  <main class="product-section" id="product">
    <!-- Image Gallery -->
    <div class="product-gallery fade-in">
      <div class="gallery-main" id="gallery-main">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg"
          alt="Budget Planner Google Sheet" id="main-image">
        <button class="gallery-nav gallery-prev" id="gallery-prev" aria-label="Previous image">&#8249;</button>
        <button class="gallery-nav gallery-next" id="gallery-next" aria-label="Next image">&#8250;</button>
      </div>
      <div class="gallery-thumbnails" id="gallery-thumbnails">
        <div class="gallery-thumb active" data-index="0"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg" alt="Thumbnail 1">
        </div>
        <div class="gallery-thumb" data-index="1"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-video.mp4" data-type="video"
          data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg">
          <div style="position:relative;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg"
              alt="Video Thumbnail">
            <svg
              style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:24px;height:24px;fill:rgba(255,255,255,0.8);"
              viewBox="0 0 24 24">
              <path d="M8 5v14l11-7z" />
            </svg>
          </div>
        </div>
        <div class="gallery-thumb" data-index="2"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-2.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-2.jpeg" alt="Thumbnail 3">
        </div>
        <div class="gallery-thumb" data-index="3"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-3.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-3.jpeg" alt="Thumbnail 4">
        </div>
        <div class="gallery-thumb" data-index="4"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-4.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-4.jpeg" alt="Thumbnail 5">
        </div>
        <div class="gallery-thumb" data-index="5"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-5.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-5.jpeg" alt="Thumbnail 6">
        </div>
        <div class="gallery-thumb" data-index="6"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-6.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-6.jpeg" alt="Thumbnail 7">
        </div>
        <div class="gallery-thumb" data-index="7"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-7.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-7.jpeg" alt="Thumbnail 8">
        </div>
        <div class="gallery-thumb" data-index="8"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-8.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-8.jpeg" alt="Thumbnail 9">
        </div>
        <div class="gallery-thumb" data-index="9"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-9.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-9.jpeg" alt="Thumbnail 10">
        </div>
        <div class="gallery-thumb" data-index="10"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-10.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-10.jpeg" alt="Thumbnail 11">
        </div>
      </div>
    </div>

    <!-- Product Info -->
    <div class="product-info fade-in">
      <h1 class="product-title">Budget Planner Google Sheet Monthly Budget Spreadsheet Paycheck Budget Template Simple
        Weekly Financial Planner Beginners Biweekly Budgeting</h1>

      <div class="product-rating">
        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <span class="rating-count">(932 reviews)</span>
      </div>

            <div class="product-price">
             <span class="price-current">$2.99</span>
             <span class="price-old">$12.95</span>
             <span class="price-badge">78% OFF</span>
            </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <a href="https://eedii.com/step/store-checkout-04-3/" class="btn-buy" id="btn-buy">
     &#128722; Buy Now – $2.99
    </a>



    <!-- ═══════════════════════════════════════════
         6. DIGITAL DOWNLOAD INFO
         ═══════════════════════════════════════════ -->
    <div class="digital-info fade-in">
      <div class="digital-badge">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
          <polyline points="7 10 12 15 17 10"></polyline>
          <line x1="12" y1="15" x2="12" y2="3"></line>
        </svg>
        Digital download
      </div>
      <div class="digital-filetype">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <path
            d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
          </path>
        </svg>
        Digital file type(s): 1 PDF, 1 other file
      </div>

      <div class="download-warning">
        <div class="warning-title">&#9888;&#65039; Download Information</div>
        <p>This is a digital product; no physical item will be shipped.</p>
        <p style="margin-top: 6px;">Once payment is completed, the digital files will be available for download on the
          post-checkout page, and they will also be sent to your email.</p>
      </div>
    </div>

    <!-- ═══════════════════════════════════════════
         7. PRODUCT DESCRIPTION
         ═══════════════════════════════════════════ -->
    <div class="product-description fade-in">
      <p>Streamline your finances effortlessly with our beginner-friendly Budget Planner Google Sheets or Microsoft
        Excel (Office 365). This Budget Spreadsheet has only 1 tab to simplify financial planning, helping you manage
        your income, expenses, debt, bills and savings on a Weekly, Biweekly, Monthly or Paycheck basis. Whether you're
        a beginner or an enthusiast, our Simple Budget Google Sheets or Excel is your go-to tool for achieving financial
        stability and mastering budget management. Start budgeting with 3 easy steps, budgeting has never been so easy!
      </p>

      <h2>&#9733; WHY THIS BUDGET</h2>
      <ul>
        <li>Beginner-friendly</li>
        <li>One essential budget tab with only the features you need</li>
        <li>Quick start in 3 easy steps, video tutorial included</li>
        <li>Easy to use and understand</li>
        <li>Automatic Calculations</li>
        <li>Sync the spreadsheet across multiple devices</li>
      </ul>

      <h2>&#9733; KEY FEATURES</h2>
      <ul>
        <li>Use with any currency</li>
        <li>Change colors</li>
        <li>Duplicate tab for each new budget</li>
        <li>Customise your categories</li>
        <li>Add extra rows, if needed</li>
        <li>Budget by paycheck, weekly, bi-weekly or monthly</li>
        <li>Add a starting balance for accurate tracking</li>
        <li>Convenient checkboxes to mark off paid bills, debt and savings</li>
        <li>Intuitive dashboard for a quick glance at your finances!</li>
      </ul>

      <h2>&#9733; WHAT YOU WILL RECEIVE</h2>
      <ul>
        <li>PDF with the link to Budget Spreadsheet</li>
        <li>Bonus Template: Savings and debt tracker</li>
        <li>Step-by-step Instructions</li>
        <li>Video Tutorials</li>
        <li>Example budget to guide you</li>
        <li>Unlimited and quick customer support</li>
      </ul>

      <h2>&#10071;&#10071; IMPORTANT &#10071;&#10071;</h2>
      <ul>
        <li>This spreadsheet is only compatible with Google Sheets and Microsoft Excel (Office 365)</li>
        <li>For Google Sheets, you will need a Google account (which is free)</li>
      </ul>

      <p class="desc-contact">If you need formatting help or advice at any step, I'm here for you: <a
          href="mailto:contact@eedii.com">contact@eedii.com</a></p>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <a href="https://eedii.com/step/store-checkout-04-3/" class="btn-buy" id="btn-buy">
     &#128722; Buy Now – $2.99
    </a>
    </div>
  </main>

  <!-- ═══════════════════════════════════════════
       8. CUSTOMER REVIEWS (IMAGES)
       ═══════════════════════════════════════════ -->
  <section class="reviews-section" id="reviews">
    <h2 class="section-title fade-in">What Our Customers Say</h2>
    <p class="section-subtitle fade-in">Real reviews from real people &#9733;&#9733;&#9733;&#9733;&#9733;</p>
    <div class="reviews-images">
      <div class="review-image-card fade-in">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-review1.jpeg"
          alt="Customer Reviews 1">
      </div>
      <div class="review-image-card fade-in">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-review2.jpeg"
          alt="Customer Reviews 2">
      </div>
    </div>
  </section>

  <!-- Mid-page Buy Button CTA -->
  <div class="mid-cta-section">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <a href="https://eedii.com/step/store-checkout-04-3/" class="btn-buy" id="btn-buy">
     &#128722; Buy Now – $2.99
    </a>
  </div>

  <!-- ═══════════════════════════════════════════
       10. OUR BESTSELLERS
       ═══════════════════════════════════════════ -->
  <section class="bestsellers-section" id="bestsellers">
    <h2 class="section-title fade-in">Our Bestsellers &#127942;</h2>

    <div class="bestsellers-grid">
      <div class="bestseller-card fade-in">
        <a href="<?php echo esc_url(home_url('/resume-cv-template/')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-1.jpeg" alt="Resume Template"
            class="bestseller-img">
          <div class="bestseller-info">
            <h3 class="bestseller-name">Professional Resume &amp; CV Template for Executives</h3>
            <div class="bestseller-price">
              <span class="price-current">$7.97</span>
            </div>
            <button class="btn-buy-sm">VIEW PRODUCT</button>
          </div>
        </a>
      </div>

      <div class="bestseller-card fade-in">
        <a href="<?php echo esc_url(home_url('/digital-planner/')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p2-17.jpeg"
            alt="All-in-One Digital Planner" class="bestseller-img">
          <div class="bestseller-info">
            <h3 class="bestseller-name">All-in-One Digital Planner 2026, 2027, 2028</h3>
            <div class="bestseller-price">
              <span class="price-current">$2.99</span>
            </div>
            <button class="btn-buy-sm">VIEW PRODUCT</button>
          </div>
        </a>
      </div>
    </div>
  </section>

  <div class="sticky-cart-bar" id="sticky-cart-bar">
    <div class="sticky-cart-left">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg" alt="Product"
        class="sticky-cart-img">
      <div class="sticky-cart-info">
        <div class="sticky-cart-title">Budget Planner Google Sheet Monthly Budget Spreadsheet</div>
            <div class="product-price">
             <span class="price-current">$2.99</span>
             <span class="price-old">$12.95</span>
             <span class="price-badge">78% OFF</span>
            </div>
      </div>
    </div>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <a href="https://eedii.com/step/store-checkout-04-3/" class="btn-buy" id="btn-buy">
     &#128722; Buy Now – $2.99
    </a>
  </div>

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