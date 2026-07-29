<?php
/*
Template Name: Product1
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Professional Resume & CV Template for executives and business professionals. Fully editable, ATS-friendly, compatible with Google Docs, Word & Pages.">
  <title>Professional Resume &amp; CV Template – eedii</title>
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
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-1.jpeg"
          alt="Professional Resume Template" id="main-image">
        <button class="gallery-nav gallery-prev" id="gallery-prev" aria-label="Previous image">&#8249;</button>
        <button class="gallery-nav gallery-next" id="gallery-next" aria-label="Next image">&#8250;</button>
      </div>
      <div class="gallery-thumbnails" id="gallery-thumbnails">
        <div class="gallery-thumb active" data-index="0"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-1.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-1.jpeg" alt="Thumbnail 1">
        </div>
        <div class="gallery-thumb" data-index="1"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-2.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-2.jpeg" alt="Thumbnail 2">
        </div>
        <div class="gallery-thumb" data-index="2"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-3.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-3.jpeg" alt="Thumbnail 3">
        </div>
        <div class="gallery-thumb" data-index="3"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-4.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-4.jpeg" alt="Thumbnail 4">
        </div>
        <div class="gallery-thumb" data-index="4"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-5.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-5.jpeg" alt="Thumbnail 5">
        </div>
        <div class="gallery-thumb" data-index="5"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-6.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-6.jpeg" alt="Thumbnail 6">
        </div>
        <div class="gallery-thumb" data-index="6"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-7.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-7.jpeg" alt="Thumbnail 7">
        </div>
        <div class="gallery-thumb" data-index="7"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-8.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-8.jpeg" alt="Thumbnail 8">
        </div>
        <div class="gallery-thumb" data-index="8"
          data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-9.jpeg" data-type="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-9.jpeg" alt="Thumbnail 9">
        </div>
      </div>
    </div>

    <!-- Product Info -->
    <div class="product-info fade-in">
      <h1 class="product-title">Professional Resume &amp; CV Template for Executives | ATS-Friendly | Google Docs, Word
        &amp; Pages</h1>

      <div class="product-rating">
        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <span class="rating-count">(2,847 reviews)</span>
      </div>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

      <div class="product-price">
        <span class="price-current">$7.97</span>
        <span class="price-old">$19.99</span>
        <span class="price-badge">60% OFF</span>
      </div>

      <a href="https://eedii.com/step/store-checkout-04/" class="btn-buy" id="btn-buy">
        &#128722; Buy Now – $7.97
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
          Digital file type(s): 1 PDF, 1 ZIP
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
        <p>This Professional Resume &amp; CV Template is designed for executives and business professionals who want to
          make a lasting impression. Fully editable, ATS-friendly, and compatible with Google Docs, Word &amp; Pages.
        </p>

        <h2>Why You'll Love This Template</h2>
        <ul>
          <li>Everything in one place &#8212; resume, cover letter, and references</li>
          <li>ATS-friendly format that passes automated screening</li>
          <li>Minimalist, elegant, and professional design</li>
          <li>Works with Google Docs, Microsoft Word, and Apple Pages</li>
        </ul>

        <h2>How It Works</h2>
        <ol>
          <li>Download the template files instantly after purchase</li>
          <li>Open in Google Docs, Word, or Pages</li>
          <li>Replace the placeholder text with your own information</li>
        </ol>

        <p class="desc-contact">If you need formatting help or advice at any step, I'm here for you: <a
            href="mailto:contact@eedii.com">contact@eedii.com</a></p>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <a href="https://eedii.com/step/store-checkout-04/" class="btn-buy" id="btn-buy">
          &#128722; Buy Now – $7.97
        </a>

        <h2 class="desc-reviews-title">Customer Praise &amp; Reviews &#11088;&#11088;&#11088;&#11088;&#11088;</h2>

        <div class="desc-quote">
          "It cannot be overstated how incredible this entire package is - it is absolutely worth purchasing."
        </div>

        <div class="desc-quote">
          "I was dreading even thinking about creating a new resume. Liisa's templates and resume guide is awesome! It's
          easy and beautiful. Your resume will really stand out. The resume guide and checklist is great and full of
          useful tips. I must've used all of them."
        </div>

        <div class="desc-quote">
          "This template was easy to use with amazing results! I sent it to several potential employers, and had call
          backs within a day for 4 places! They each commented on how nice/professional/aesthetically pleasing it was!"
        </div>

        <div class="desc-quote">
          "This is hands down the absolute best money you will ever spend on creating or re-creating your resume!! Not
          only are the templates beautiful and professional, they are very easy to navigate and fill in on your
          computer.
          Along with the extras you get with your resume... it's really like you have a job recruiter writing your
          resume
          with you."
        </div>
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
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-10.jpeg"
          alt="Customer Reviews 1">
      </div>
      <div class="review-image-card fade-in">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-11.jpeg"
          alt="Customer Reviews 2">
      </div>
    </div>
  </section>

  <!-- Mid-page Buy Button CTA -->
  <div class="mid-cta-section">
    <a href="https://eedii.com/step/store-checkout-04/" class="btn-buy" id="btn-buy">
      &#128722; Buy Now – $7.97
    </a>
  </div>

  <!-- ═══════════════════════════════════════════
       9. FAQ ACCORDION
       ═══════════════════════════════════════════ -->
  <section class="faq-section" id="faq">
    <h2 class="faq-title fade-in">Frequently Asked Questions</h2>

    <div class="faq-item fade-in">
      <button class="faq-question">
        <span>How does a template work?</span>
        <span class="faq-arrow">&#9660;</span>
      </button>
      <div class="faq-answer">
        <div class="faq-answer-inner">
          A template is simply a Microsoft Word document (or Mac Pages document) that is formatted using "text boxes"
          filled with my "dummy" information that you will type directly over with your own resume info. A quick text
          box tutorial is included in the Instructions file, included with purchase.
        </div>
      </div>
    </div>

    <div class="faq-item fade-in">
      <button class="faq-question">
        <span>Can I change the colors?</span>
        <span class="faq-arrow">&#9660;</span>
      </button>
      <div class="faq-answer">
        <div class="faq-answer-inner">
          Yes! All colors on every single element can be changed - you can even change the icon colors! To change a
          color, just right-click the object, and hit Format. Then select a new Fill Color or Line Color.
        </div>
      </div>
    </div>

    <div class="faq-item fade-in">
      <button class="faq-question">
        <span>Can I change the headings?</span>
        <span class="faq-arrow">&#9660;</span>
      </button>
      <div class="faq-answer">
        <div class="faq-answer-inner">
          YES! All headings, titles and sections can be changed to whatever you want. You can even delete the titles and
          headings. Templates are COMPLETELY customizable.
        </div>
      </div>
    </div>

    <div class="faq-item fade-in">
      <button class="faq-question">
        <span>What if I need to print my resume?</span>
        <span class="faq-arrow">&#9660;</span>
      </button>
      <div class="faq-answer">
        <div class="faq-answer-inner">
          <p>&#8226; Resumes these days are designed for the digital age - printing is becoming more and more rare.</p>
          <p style="margin-top: 8px;">&#8226; If you need your resume printed, I always recommend having it
            professionally
            done (Staples, OfficeMax, etc., you can even order online). Make sure it is printed "full-bleed" (aka
            borderless) on nice bright white, heavier (ex. 32lb) paper. It will look SO much better than anything you
            can do at home!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       10. OUR BESTSELLERS
       ═══════════════════════════════════════════ -->
  <section class="bestsellers-section" id="bestsellers">
    <h2 class="section-title fade-in">Our Bestsellers &#127942;</h2>

    <div class="bestsellers-grid">
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

      <div class="bestseller-card fade-in">
        <a href="<?php echo esc_url(home_url('/budget-planner/')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p3-1.jpeg"
            alt="Budget Planner Google Sheet" class="bestseller-img">
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

  <div class="sticky-cart-bar" id="sticky-cart-bar">
    <div class="sticky-cart-left">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/p1-1.jpeg" alt="Product"
        class="sticky-cart-img">
      <div class="sticky-cart-info">
        <div class="sticky-cart-title">Professional Resume &amp; CV Template for Executives</div>
        <div class="product-price">
          <span class="price-current">$7.97</span>
          <span class="price-old">$23.91</span>
          <span class="price-badge">67% OFF</span>
        </div>
      </div>
    </div>

    <a href="https://eedii.com/step/store-checkout-04/" class="btn-buy" id="btn-buy">
      &#128722; Buy Now – $7.97
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

  <script>
    document.addEventListener("click", function (e) {
      const question = e.target.closest(".faq-question");
      if (!question) return;

      const item = question.closest(".faq-item");
      const answer = item.querySelector(".faq-answer");

      document.querySelectorAll(".faq-item").forEach(function (otherItem) {
        if (otherItem !== item) {
          otherItem.classList.remove("active");
          const otherAnswer = otherItem.querySelector(".faq-answer");
          if (otherAnswer) {
            otherAnswer.style.maxHeight = "0px";
          }
        }
      });

      if (item.classList.contains("active")) {
        item.classList.remove("active");
        answer.style.maxHeight = "0px";
      } else {
        item.classList.add("active");
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    });
  </script>

  <?php wp_footer(); ?>
</body>

</html>