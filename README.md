# FHR Sports E-Commerce & Sublimation Platform

A modern, high-performance athletic apparel & sublimation factory website built with responsive HTML, CSS, JavaScript, and PHP templates.

---

## 🌟 Key Features

1. **100% Responsive Design Across All Devices**:
   - Seamlessly calibrated for mobile screens (320px - 430px), tablets (768px - 1024px), laptops, and desktop displays.
   - Touch-optimized 44px+ touch targets, fluid typography (`clamp()`), and slide-over navigation drawers.
2. **Kinetic Parallax & 3D Tilt**:
   - Scroll-driven velocity parallax on athletic depth watermarks and ambient lighting.
   - 3D mouse perspective gyro tilt on equipment cards, product tiles, and package tiers.
   - `IntersectionObserver` scroll-reveal animations for section entrances.
3. **Interactive 3D Sublimation Factory**:
   - Real-time jersey customizer with Front/Back angle toggles.
   - Live color palette swatches, collar variants, pattern selectors, and custom team roster entries.
4. **Dynamic Bulk Wholesale Quote Engine**:
   - Interactive quantity slider with real-time tier calculation (Match Day Basic, Pro Team Pack, Elite Sublimation).
   - Instant cost breakdown per kit, squad total, and wholesale quotation generation.
5. **Team Equipment Bag (Cart Drawer)**:
   - Slide-over cart drawer with quantity modifiers, remove item actions, dynamic subtotal, and toast notifications.

---

## 🚀 Deployment to GitHub Pages

This platform is structured so that the root static files serve directly on GitHub Pages without any build steps:

1. Push this folder to your GitHub repository (or add via **GitHub Desktop**):
   - `index.html` (Home)
   - `shop.html` (Catalog)
   - `sublimation.html` (Custom Builder)
   - `team-orders.html` (Quote Engine)
   - `assets/` (CSS, JS, Images)
2. On GitHub, navigate to **Settings** > **Pages**.
3. Under **Build and deployment**:
   - **Source**: Deploy from a branch
   - **Branch**: `main` (or `master`), folder: `/ (root)`
4. Click **Save**. Your site will be live within seconds and shareable with clients!

---

## 💻 Running Locally on Apache / XAMPP

This project also includes PHP entry points:
- Open your browser and visit: `http://localhost/FIR1/` or `http://localhost/FIR1/index.php`
- All pages include modular headers and footers from `/php/`.
