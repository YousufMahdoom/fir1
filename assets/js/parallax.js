/**
 * FHR SPORTS - PARALLAX & KINETIC INTERACTION ENGINE
 * Features:
 * - Multi-depth scroll parallax with requestAnimationFrame
 * - 3D Card Gyro / Mouse Perspective Tilt
 * - IntersectionObserver Scroll Reveal
 * - Dynamic Floating Particle / Badge movements
 */

(function () {
  'use strict';

  // 1. SCROLL PARALLAX SYSTEM
  const parallaxElements = [];

  function initParallax() {
    const nodes = document.querySelectorAll('[data-parallax-speed]');
    nodes.forEach((el) => {
      const speed = parseFloat(el.getAttribute('data-parallax-speed')) || 0.1;
      const direction = el.getAttribute('data-parallax-dir') || 'y';
      parallaxElements.push({ el, speed, direction, initialY: 0 });
    });

    if (parallaxElements.length > 0) {
      window.addEventListener('scroll', onScrollParallax, { passive: true });
      onScrollParallax();
    }
  }

  let ticking = false;
  function onScrollParallax() {
    if (!ticking) {
      requestAnimationFrame(() => {
        const scrollY = window.pageYOffset;
        const windowHeight = window.innerHeight;

        parallaxElements.forEach((item) => {
          const rect = item.el.getBoundingClientRect();
          // Only animate when element is close to viewport
          if (rect.top <= windowHeight + 100 && rect.bottom >= -100) {
            const offset = (scrollY - (item.el.offsetTop || 0)) * item.speed;
            if (item.direction === 'y') {
              item.el.style.transform = `translate3d(0, ${offset.toFixed(1)}px, 0)`;
            } else if (item.direction === 'x') {
              item.el.style.transform = `translate3d(${offset.toFixed(1)}px, 0, 0)`;
            }
          }
        });
        ticking = false;
      });
      ticking = true;
    }
  }

  // 2. 3D CARD MOUSE PERSPECTIVE TILT
  function init3DTilt() {
    const tiltCards = document.querySelectorAll('.tilt-card');
    
    // Disable on touch devices for battery and ergonomics
    if (window.matchMedia('(pointer: coarse)').matches) return;

    tiltCards.forEach((card) => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left; // x position within card
        const y = e.clientY - rect.top;  // y position within card
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const deltaX = (x - centerX) / centerX;
        const deltaY = (y - centerY) / centerY;
        
        const maxTilt = 10; // degrees
        const rotateX = (-deltaY * maxTilt).toFixed(2);
        const rotateY = (deltaX * maxTilt).toFixed(2);

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
      });
    });
  }

  // 3. INTERSECTION OBSERVER SCROLL REVEAL
  function initScrollReveal() {
    const reveals = document.querySelectorAll('.reveal-on-scroll');
    if (!('IntersectionObserver' in window)) {
      reveals.forEach(r => r.classList.add('revealed'));
      return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          obs.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    reveals.forEach(el => observer.observe(el));
  }

  // 4. HEADER BACKGROUND BLUR & CONDENSE ON SCROLL
  function initHeaderScroll() {
    const header = document.querySelector('header');
    if (!header) return;

    window.addEventListener('scroll', () => {
      if (window.scrollY > 40) {
        header.classList.add('shadow-xl', 'border-b', 'border-outline-variant/60');
      } else {
        header.classList.remove('shadow-xl', 'border-b', 'border-outline-variant/60');
      }
    }, { passive: true });
  }

  // Initialize all kinetic systems on DOM ready
  document.addEventListener('DOMContentLoaded', () => {
    initParallax();
    init3DTilt();
    initScrollReveal();
    initHeaderScroll();
  });
})();
