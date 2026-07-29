# 🛒 ApexStore - Modern E-Commerce & Product Catalog WordPress Theme

[![WordPress](https://img.shields.io/badge/WordPress-6.0%2B-21759B.svg?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4.svg?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![WPML](https://img.shields.io/badge/WPML-Multilingual-FF6600.svg?style=for-the-badge&logo=wpml&logoColor=white)](https://wpml.org)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6%2B-F7DF1E.svg?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org)
[![CSS3](https://img.shields.io/badge/CSS3-Responsive-1572B6.svg?style=for-the-badge&logo=css3&logoColor=white)](https://w3.org)

**ApexStore** is a custom-built, full-featured WordPress theme engineered for high-performance product catalog management, e-commerce showcases, and multi-language business websites.

---

## 🌟 Key Features

- 🛍️ **Custom Product Catalog Templates**: Purpose-built template pages (`page-catalog.php`, `page-product1.php`, `page-product2.php`, `page-product3.php`).
- 🌐 **WPML Multilingual Ready**: Full internationalization configuration via `wpml-config.xml`.
- 🎨 **Modern Gutenberg Block Theme Support**: Native integration with `theme.json` for cohesive design tokens, custom color palettes, and typography.
- ⚙️ **Toolset & Custom Post Types**: Advanced content structure configuration via `toolset-config.json`.
- 📄 **Complete Policy & Service Pages**: Built-in template support for Privacy Policy, Terms of Service, and Refund Policies.
- 🔍 **Custom Search & 404 Handlers**: Tailored search form rendering and optimized fallback user flows.

---

## 📁 Repository Structure

```
.
├── assets-5/                 # Theme assets (CSS, JS, Fonts, Images)
├── 404.php                   # Custom 404 Error Page Template
├── archive.php               # Archive Page Template
├── comments.php              # Comments Component
├── footer.php                # Global Footer Section
├── functions.php             # Core Theme Logic & Hooks
├── header.php                # Global Header & Navigation
├── home.php                  # Homepage Template
├── index.php                 # Fallback Index Template
├── page-catalog.php          # Main Product Catalog Layout
├── page-contact-us.php       # Contact Form Page Template
├── page-privacy-policy.php   # Legal Privacy Policy Page
├── page-product1.php         # Specialized Product Showcase Template 1
├── page-product2.php         # Specialized Product Showcase Template 2
├── page-product3.php         # Specialized Product Showcase Template 3
├── page-refund-policy.php    # Refund Policy Page
├── page-terms-of-service.php # Terms of Service Page
├── search.php                # Search Results Page
├── searchform.php            # Custom Search Bar Component
├── sidebar.php               # Sidebar Component
├── single.php                # Single Post Template
├── theme.json                # WordPress Theme Design System Tokens
├── toolset-config.json       # Toolset Custom Fields & Post Types Config
└── wpml-config.xml           # WPML Multilingual Translation Config
```

---

## 🚀 Installation Guide

1. Download or clone this repository into your WordPress installation:
   ```bash
   wp-content/themes/apex-storefront/
   ```
2. Log in to your **WordPress Admin Dashboard**.
3. Navigate to **Appearance > Themes**.
4. Locate **ApexStore Theme** and click **Activate**.
5. Assign menu locations and custom page templates under **Pages > Add New** selecting the appropriate Page Template (e.g. `Catalog Page`, `Product Showcase`).

---

## 📜 License

This project is licensed under the GPL-2.0-or-later License.
