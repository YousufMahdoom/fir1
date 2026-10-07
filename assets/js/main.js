/**
 * FHR SPORTS - CORE APPLICATION INTERFACE SCRIPT
 * Manages Navigation, Cart Drawer, Quick View Modal, and Notifications
 */

(function () {
  'use strict';

  // 1. GLOBAL STATE
  const state = {
    cart: [
      {
        id: 'fhr-pro-01',
        title: 'FHR AeroStrike Elite Pro Football Kit',
        price: 49.99,
        size: 'L',
        qty: 1,
        image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxasWNjktOYKAtelgPW-SWdNn94hhe_WB49fJXdMsNp-MUdigfVSiHnj2sZ4RVrTYmihd5yRarGoRmmkElXeazJqzyzC5o9dTEp8PeAIDRsdTkyofWMjsn0F_X2j34e-o5AVASqZOb8OxvZ-VVurRVmJdFAbNwmzVbRqXjif6VPxkYV0Vwa9CsKib4S85EvShHEfe0II9Jk1JLp8QfggKO9PxfLcGbvcZzaWK6W-PbUbVWAzZEnh3Mgg'
      }
    ]
  };

  // 2. TOAST NOTIFICATION ENGINE
  window.fhrToast = function (title, message, type = 'info') {
    let container = document.getElementById('toast-container');
    if (!container) {
      container = document.createElement('div');
      container.id = 'toast-container';
      document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = 'toast flex items-start gap-3 p-4 rounded-xl border shadow-2xl min-w-[300px] max-w-[380px] bg-surface-container-high/95 backdrop-blur-xl';
    
    let icon = 'info';
    let borderColor = 'border-outline-variant';
    let iconColor = 'text-primary';

    if (type === 'success') {
      icon = 'check_circle';
      borderColor = 'border-secondary-fixed/50';
      iconColor = 'text-secondary-fixed';
    } else if (type === 'error') {
      icon = 'error';
      borderColor = 'border-tertiary-container/50';
      iconColor = 'text-tertiary-container';
    }

    toast.classList.add(borderColor);

    toast.innerHTML = `
      <span class="material-symbols-outlined ${iconColor} text-[22px] shrink-0 mt-0.5">${icon}</span>
      <div class="flex-1">
        <h4 class="font-headline-sm text-sm uppercase tracking-wider text-secondary font-bold">${title}</h4>
        <p class="font-body-sm text-xs text-on-surface-variant mt-0.5 leading-relaxed">${message}</p>
      </div>
      <button class="text-on-surface-variant hover:text-secondary text-sm p-1 ml-1" onclick="this.parentElement.remove()">
        <span class="material-symbols-outlined text-[18px]">close</span>
      </button>
    `;

    container.appendChild(toast);
    requestAnimationFrame(() => toast.classList.add('show'));

    setTimeout(() => {
      toast.classList.remove('show');
      setTimeout(() => toast.remove(), 350);
    }, 4000);
  };

  // 3. CART SYSTEM & SLIDE-OVER DRAWER
  function initCart() {
    const cartToggleBtns = document.querySelectorAll('[data-cart-toggle]');
    const cartDrawer = document.getElementById('cart-drawer');
    const cartBackdrop = document.getElementById('cart-backdrop');
    const cartCloseBtn = document.getElementById('cart-close-btn');

    function openCart() {
      if (cartDrawer && cartBackdrop) {
        cartBackdrop.classList.add('active');
        cartDrawer.classList.add('active');
        document.body.style.overflow = 'hidden';
        renderCart();
      }
    }

    function closeCart() {
      if (cartDrawer && cartBackdrop) {
        cartDrawer.classList.remove('active');
        cartBackdrop.classList.remove('active');
        document.body.style.overflow = '';
      }
    }

    cartToggleBtns.forEach(btn => btn.addEventListener('click', (e) => {
      e.preventDefault();
      openCart();
    }));

    if (cartCloseBtn) cartCloseBtn.addEventListener('click', closeCart);
    if (cartBackdrop) cartBackdrop.addEventListener('click', closeCart);

    // Add to cart buttons throughout catalog
    document.addEventListener('click', (e) => {
      const target = e.target.closest('[data-add-to-cart]');
      if (target) {
        e.preventDefault();
        const id = target.dataset.productId || 'item-' + Date.now();
        const title = target.dataset.productTitle || 'FHR Performance Apparel';
        const price = parseFloat(target.dataset.productPrice) || 39.99;
        const image = target.dataset.productImage || 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxasWNjktOYKAtelgPW-SWdNn94hhe_WB49fJXdMsNp-MUdigfVSiHnj2sZ4RVrTYmihd5yRarGoRmmkElXeazJqzyzC5o9dTEp8PeAIDRsdTkyofWMjsn0F_X2j34e-o5AVASqZOb8OxvZ-VVurRVmJdFAbNwmzVbRqXjif6VPxkYV0Vwa9CsKib4S85EvShHEfe0II9Jk1JLp8QfggKO9PxfLcGbvcZzaWK6W-PbUbVWAzZEnh3Mgg';
        const size = target.dataset.productSize || 'L';

        // Check if item exists
        const existing = state.cart.find(item => item.id === id && item.size === size);
        if (existing) {
          existing.qty += 1;
        } else {
          state.cart.push({ id, title, price, size, qty: 1, image });
        }

        updateCartCount();
        window.fhrToast('Added to Team Kit', `${title} (${size}) added to your cart.`, 'success');
        openCart();
      }
    });

    updateCartCount();
  }

  function updateCartCount() {
    const badges = document.querySelectorAll('.cart-badge');
    const totalCount = state.cart.reduce((sum, item) => sum + item.qty, 0);
    badges.forEach(b => {
      b.textContent = totalCount;
      if (totalCount > 0) {
        b.classList.remove('hidden');
      } else {
        b.classList.add('hidden');
      }
    });
  }

  function renderCart() {
    const list = document.getElementById('cart-items-list');
    const subtotalEl = document.getElementById('cart-subtotal');
    if (!list) return;

    if (state.cart.length === 0) {
      list.innerHTML = `
        <div class="py-16 text-center text-on-surface-variant flex flex-col items-center">
          <span class="material-symbols-outlined text-5xl mb-3 text-outline-variant">shopping_bag</span>
          <p class="font-headline-sm uppercase text-lg text-secondary">Your Cart is Empty</p>
          <p class="font-body-sm text-xs mt-1 text-on-surface-variant">Explore our athletic catalog or custom sublimation builder.</p>
          <a href="shop.html" class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 bg-primary-container text-on-primary-container font-headline-sm uppercase text-xs tracking-wider rounded-lg font-bold hover:brightness-110 transition-all">
            Browse Catalog <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
          </a>
        </div>
      `;
      if (subtotalEl) subtotalEl.textContent = '$0.00';
      return;
    }

    let subtotal = 0;
    list.innerHTML = state.cart.map((item, idx) => {
      subtotal += item.price * item.qty;
      return `
        <div class="flex items-center gap-4 p-3 bg-surface-container-low border border-outline-variant/30 rounded-xl">
          <img src="${item.image}" alt="${item.title}" class="w-16 h-16 object-cover rounded-lg bg-surface shrink-0 border border-outline-variant/40">
          <div class="flex-1 min-w-0">
            <h4 class="font-headline-sm text-sm text-secondary truncate font-semibold uppercase">${item.title}</h4>
            <div class="flex items-center gap-2 text-xs text-on-surface-variant mt-1 font-body-sm">
              <span class="bg-surface-container-highest px-1.5 py-0.5 rounded text-[10px] font-bold">SIZE: ${item.size}</span>
              <span class="text-secondary font-semibold">$${item.price.toFixed(2)}</span>
            </div>
            <div class="flex items-center gap-3 mt-2">
              <div class="flex items-center border border-outline-variant/50 rounded bg-surface">
                <button class="px-2 py-0.5 text-on-surface-variant hover:text-secondary text-xs" onclick="window.fhrCartChangeQty(${idx}, -1)">-</button>
                <span class="px-2 text-xs font-bold text-secondary">${item.qty}</span>
                <button class="px-2 py-0.5 text-on-surface-variant hover:text-secondary text-xs" onclick="window.fhrCartChangeQty(${idx}, 1)">+</button>
              </div>
              <button class="text-tertiary-container hover:underline text-xs flex items-center gap-0.5 ml-auto font-body-sm" onclick="window.fhrCartRemove(${idx})">
                <span class="material-symbols-outlined text-[14px]">delete</span> Remove
              </button>
            </div>
          </div>
        </div>
      `;
    }).join('');

    if (subtotalEl) {
      subtotalEl.textContent = '$' + subtotal.toFixed(2);
    }
  }

  window.fhrCartChangeQty = function (index, change) {
    if (state.cart[index]) {
      state.cart[index].qty += change;
      if (state.cart[index].qty <= 0) {
        state.cart.splice(index, 1);
      }
      updateCartCount();
      renderCart();
    }
  };

  window.fhrCartRemove = function (index) {
    if (state.cart[index]) {
      const removed = state.cart.splice(index, 1);
      updateCartCount();
      renderCart();
      window.fhrToast('Item Removed', `${removed[0].title} removed from cart.`, 'info');
    }
  };

  // 4. MOBILE HAMBURGER MENU DRAWER
  function initMobileMenu() {
    const hamburgerBtn = document.querySelector('[data-mobile-menu-toggle]');
    const mobileDrawer = document.getElementById('mobile-drawer');
    const mobileBackdrop = document.getElementById('mobile-backdrop');
    const mobileCloseBtn = document.getElementById('mobile-close-btn');

    function openMobileMenu() {
      if (mobileDrawer && mobileBackdrop) {
        mobileBackdrop.classList.add('active');
        mobileDrawer.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeMobileMenu() {
      if (mobileDrawer && mobileBackdrop) {
        mobileDrawer.classList.remove('active');
        mobileBackdrop.classList.remove('active');
        document.body.style.overflow = '';
      }
    }

    if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMobileMenu);
    if (mobileCloseBtn) mobileCloseBtn.addEventListener('click', closeMobileMenu);
    if (mobileBackdrop) mobileBackdrop.addEventListener('click', closeMobileMenu);
  }

  // 5. ACTIVE NAVIGATION SYNC
  function initActiveNav() {
    const currentPath = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('nav a, #mobile-drawer a');

    navLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (!href) return;
      const targetPath = href.split('/').pop();

      if (
        (currentPath === '' || currentPath === 'index.html' || currentPath === 'index.php') &&
        (targetPath === 'index.html' || targetPath === 'index.php' || targetPath === '#' || href === './')
      ) {
        link.classList.add('text-secondary-fixed', 'font-bold');
      } else if (targetPath === currentPath) {
        link.classList.add('text-secondary-fixed', 'font-bold');
      }
    });
  }

  // 6. CHECKOUT ACTION SIMULATION
  window.fhrCheckout = function () {
    if (state.cart.length === 0) {
      window.fhrToast('Cart Empty', 'Please add jerseys or equipment before proceeding.', 'error');
      return;
    }
    window.fhrToast('Order In Processing', 'Connecting to secure B2B athletic payment gateway...', 'success');
    setTimeout(() => {
      alert('Thank you! Your Team Equipment & Sublimation order draft has been generated. An FHR Factory Representative will review your specs shortly.');
      state.cart = [];
      updateCartCount();
      renderCart();
      const cartCloseBtn = document.getElementById('cart-close-btn');
      if (cartCloseBtn) cartCloseBtn.click();
    }, 1200);
  };

  // DOM Ready
  document.addEventListener('DOMContentLoaded', () => {
    initCart();
    initMobileMenu();
    initActiveNav();
  });
})();
