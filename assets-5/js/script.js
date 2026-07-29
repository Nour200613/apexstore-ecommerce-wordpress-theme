/* ============================================
   eedii Product Landing Page — JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  // ── Product Gallery ──
  const thumbnails = document.querySelectorAll('.gallery-thumb');
  const prevBtn = document.getElementById('gallery-prev');
  const nextBtn = document.getElementById('gallery-next');
  const galleryMain = document.getElementById('gallery-main');
  const mainImage = document.getElementById('main-image');

  if (mainImage && thumbnails.length > 0) {
    const productMedia = Array.from(thumbnails).map(thumb => {
      return {
        type: thumb.dataset.type || 'image',
        src: thumb.dataset.src || thumb.querySelector('img').src,
        poster: thumb.dataset.poster || ''
      };
    });

    let currentIndex = 0;
    
    // Create video element for main gallery
    let mainVideo = document.getElementById('main-video');
    if (!mainVideo) {
        mainVideo = document.createElement('video');
        mainVideo.id = 'main-video';
        mainVideo.controls = true;
        mainVideo.muted = true;
        mainVideo.playsInline = true;
        mainVideo.style.display = 'none';
        mainVideo.style.width = '100%';
        mainVideo.style.height = '100%';
        mainVideo.style.objectFit = 'contain';
        mainVideo.style.borderRadius = 'var(--radius)';
        mainVideo.style.transition = 'opacity 0.2s ease';
        mainImage.parentNode.insertBefore(mainVideo, mainImage.nextSibling);
    }

    function setActiveMedia(index) {
      currentIndex = index;
      const media = productMedia[index];
      
      // Smooth transition
      mainImage.style.opacity = '0';
      mainVideo.style.opacity = '0';

      setTimeout(() => {
        if (media.type === 'video') {
            mainImage.style.display = 'none';
            mainVideo.style.display = 'block';
            mainVideo.src = media.src;
            if (media.poster) mainVideo.poster = media.poster;
            mainVideo.style.opacity = '1';
        } else {
            mainVideo.style.display = 'none';
            mainVideo.pause();
            mainImage.style.display = 'block';
            mainImage.src = media.src;
            mainImage.style.opacity = '1';
        }
      }, 200);

      thumbnails.forEach((thumb, i) => {
        thumb.classList.toggle('active', i === index);
      });

      // Scroll thumbnail into view
      const activeThumb = thumbnails[index];
      if (activeThumb) {
        activeThumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      }
    }

    thumbnails.forEach((thumb, i) => {
      thumb.addEventListener('click', () => setActiveMedia(i));
    });

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        const newIndex = (currentIndex - 1 + productMedia.length) % productMedia.length;
        setActiveMedia(newIndex);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        const newIndex = (currentIndex + 1) % productMedia.length;
        setActiveMedia(newIndex);
      });
    }

    // Touch swipe for gallery
    let touchStartX = 0;
    let touchEndX = 0;

    if (galleryMain) {
      galleryMain.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });

      galleryMain.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
          if (diff > 0) {
            // Swipe left → next
            setActiveMedia((currentIndex + 1) % productMedia.length);
          } else {
            // Swipe right → prev
            setActiveMedia((currentIndex - 1 + productMedia.length) % productMedia.length);
          }
        }
      }, { passive: true });
    }

    // ── Keyboard Navigation for Gallery ──
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        setActiveMedia((currentIndex - 1 + productMedia.length) % productMedia.length);
      } else if (e.key === 'ArrowRight') {
        setActiveMedia((currentIndex + 1) % productMedia.length);
      }
    });
  }


  // ── Mobile Navigation ──
  const hamburger = document.getElementById('hamburger-btn');
  const mobileNav = document.getElementById('mobile-nav');
  const navClose = document.getElementById('nav-close');
  const navOverlay = document.getElementById('nav-overlay');

  function openNav() {
    mobileNav.classList.add('active');
    navOverlay.classList.add('active');
    hamburger.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeNav() {
    mobileNav.classList.remove('active');
    navOverlay.classList.remove('active');
    hamburger.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (hamburger) hamburger.addEventListener('click', openNav);
  if (navClose) navClose.addEventListener('click', closeNav);
  if (navOverlay) navOverlay.addEventListener('click', closeNav);


  // ── FAQ Accordion ──
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const arrow = item.querySelector('.faq-arrow');

    if (!question || !answer) return;

    answer.style.maxHeight = '0px';

    question.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');

      // Close all FAQ items
      faqItems.forEach(other => {
        const otherAnswer = other.querySelector('.faq-answer');
        const otherArrow = other.querySelector('.faq-arrow');

        other.classList.remove('active');

        if (otherAnswer) {
          otherAnswer.style.maxHeight = '0px';
        }

        if (otherArrow) {
          otherArrow.style.transform = 'rotate(0deg)';
        }
      });

      // Open current item
      if (!isOpen) {
        item.classList.add('active');
        answer.style.maxHeight = answer.scrollHeight + 'px';

        if (arrow) {
          arrow.style.transform = 'rotate(180deg)';
        }
      }
    });
  });


  // ── Scroll Animations (Intersection Observer) ──
  const fadeElements = document.querySelectorAll('.fade-in');

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px'
    });

    fadeElements.forEach(el => observer.observe(el));
  } else {
    // Fallback for older browsers
    fadeElements.forEach(el => el.classList.add('visible'));
  }



  // ── Scroll to Top Button ──
  const scrollTopBtn = document.getElementById('scrollTopBtn');
  if (scrollTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        scrollTopBtn.classList.add('visible');
      } else {
        scrollTopBtn.classList.remove('visible');
      }
    });
    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ── Sticky Cart Bar ──
  const stickyCartBar = document.getElementById('sticky-cart-bar');
  const buyBtn = document.getElementById('btn-buy');

  if (stickyCartBar && buyBtn) {
    window.addEventListener('scroll', () => {
      const buyBtnRect = buyBtn.getBoundingClientRect();
      // Show sticky bar when the original buy button is scrolled past
      if (buyBtnRect.bottom < 0) {
        stickyCartBar.classList.add('visible');
      } else {
        stickyCartBar.classList.remove('visible');
      }
    });
  }

  // ── Search Functionality ──
  const searchBtn = document.getElementById('search-btn');
  const searchOverlay = document.getElementById('search-overlay');
  const searchClose = document.getElementById('search-close');
  const searchInput = document.getElementById('search-input');
  const searchResults = document.getElementById('search-results');

  const products = [
    {
      name: 'Professional Resume & CV Template',
      price: '$7.97',
      image: '/wp-content/themes/astra/assets/images/p1-1.jpeg',
      link: '/resume-cv-template/'
    },
    {
      name: 'All-in-One Digital Planner 2026-2028',
      price: '$2.99',
      image: '/wp-content/themes/astra/assets/images/p2-17.jpeg',
      link: '/digital-planner/'
    },
    {
      name: 'Budget Planner Google Sheet',
      price: '$2.99',
      image: '/wp-content/themes/astra/assets/images/p3-1.jpeg',
      link: '/budget-planner/'
    }
  ];

  function openSearch() {
    if (searchOverlay) {
      searchOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
      setTimeout(() => {
        if (searchInput) searchInput.focus();
      }, 300);
    }
  }

  function closeSearch() {
    if (searchOverlay) {
      searchOverlay.classList.remove('active');
      document.body.style.overflow = '';
      if (searchInput) searchInput.value = '';
      if (searchResults) searchResults.innerHTML = '';
    }
  }

  function renderResults(matches) {
    if (!searchResults) return;
    
    if (matches.length === 0) {
      if (searchInput.value.trim() === '') {
        searchResults.innerHTML = '';
      } else {
        searchResults.innerHTML = '<div class="no-results">No products found for this search.</div>';
      }
      return;
    }

    searchResults.innerHTML = matches.map(product => `
      <a href="${product.link}" class="search-item">
        <img src="${product.image}" alt="${product.name}" class="search-item-img">
        <div class="search-item-info">
          <h4>${product.name}</h4>
          <p class="price">${product.price}</p>
        </div>
      </a>
    `).join('');
  }

  if (searchBtn) searchBtn.addEventListener('click', openSearch);
  if (searchClose) searchClose.addEventListener('click', closeSearch);
  
  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const term = e.target.value.toLowerCase().trim();
      if (term === '') {
        renderResults([]);
        return;
      }
      const matches = products.filter(p => p.name.toLowerCase().includes(term));
      renderResults(matches);
    });
  }

  // Close on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && searchOverlay && searchOverlay.classList.contains('active')) {
      closeSearch();
    }
  });

});