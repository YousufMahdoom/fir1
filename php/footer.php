<?php
$homeLink = 'index.php';
$shopLink = 'shop.php';
$subLink = 'sublimation.php';
$teamLink = 'team-orders.php';
?>

<footer class="w-full bg-surface-container-lowest border-t border-outline-variant/30 text-on-surface-variant pt-16 pb-12 relative overflow-hidden">
  <div class="parallax-watermark text-[160px] -bottom-10 right-0" data-parallax-speed="0.08">FHR SPORTS</div>
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
      <!-- Col 1: Brand & Factory Identity -->
      <div class="lg:col-span-2">
        <a href="<?php echo $homeLink; ?>" class="flex items-center gap-3 mb-4 group">
          <img src="assets/images/crest.svg" alt="FHR Sports Crest" class="w-10 h-10 object-contain filter drop-shadow-[0_2px_8px_rgba(0,102,255,0.4)]">
          <span class="font-['Oswald'] text-lg uppercase text-secondary tracking-wider font-bold">FHR SPORTS FACTORY</span>
        </a>
        <p class="font-['Inter'] text-sm text-on-surface-variant mb-5 max-w-sm leading-relaxed">
          Specialist athletic manufacturer & direct sublimation factory. Supplying professional sporting clubs, school academies, national federations, and corporate leagues worldwide with zero-decay matchwear.
        </p>
        <div class="flex flex-wrap items-center gap-2">
          <span class="badge-volt text-xs px-2.5 py-1 rounded-md font-bold uppercase">ISO 9001:2015</span>
          <span class="badge-blue text-xs px-2.5 py-1 rounded-md font-bold uppercase">OEKO-TEX 100</span>
          <span class="badge-crimson text-xs px-2.5 py-1 rounded-md font-bold uppercase">ZERO DECAY</span>
        </div>
      </div>

      <!-- Col 2: Navigation Links -->
      <div>
        <h4 class="font-['Oswald'] text-sm uppercase text-secondary mb-4 font-semibold tracking-wider">Quick Navigation</h4>
        <ul class="flex flex-col gap-2.5 font-['Inter'] text-xs">
          <li><a href="<?php echo $homeLink; ?>" class="hover:text-secondary hover:underline transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-[14px] text-primary">chevron_right</span> Home Overview</a></li>
          <li><a href="<?php echo $shopLink; ?>" class="hover:text-secondary hover:underline transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-[14px] text-secondary-fixed">chevron_right</span> Sportswear Catalog</a></li>
          <li><a href="<?php echo $subLink; ?>" class="hover:text-secondary hover:underline transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-[14px] text-tertiary">chevron_right</span> 3D Sublimation Customizer</a></li>
          <li><a href="<?php echo $teamLink; ?>" class="hover:text-secondary hover:underline transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-[14px] text-primary">chevron_right</span> Dynamic Bulk Quote Engine</a></li>
          <li><a href="<?php echo $teamLink; ?>#faq" class="hover:text-secondary hover:underline transition-colors flex items-center gap-1.5"><span class="material-symbols-outlined text-[14px] text-secondary-fixed">chevron_right</span> Squad Ordering FAQs</a></li>
        </ul>
      </div>

      <!-- Col 3: Sports Disciplines -->
      <div>
        <h4 class="font-['Oswald'] text-sm uppercase text-secondary mb-4 font-semibold tracking-wider">Teamwear Disciplines</h4>
        <ul class="flex flex-col gap-2.5 font-['Inter'] text-xs">
          <li><a href="<?php echo $shopLink; ?>?sport=football" class="hover:text-secondary transition-colors">Football Pro Kits</a></li>
          <li><a href="<?php echo $shopLink; ?>?sport=cricket" class="hover:text-secondary transition-colors">Cricket Match & Colored T20</a></li>
          <li><a href="<?php echo $shopLink; ?>?sport=basketball" class="hover:text-secondary transition-colors">Basketball Reversible Kits</a></li>
          <li><a href="<?php echo $shopLink; ?>?sport=volleyball" class="hover:text-secondary transition-colors">Volleyball & Netball Matchwear</a></li>
          <li><a href="<?php echo $shopLink; ?>?sport=rugby" class="hover:text-secondary transition-colors">Heavy-Tensile Rugby Uniforms</a></li>
          <li><a href="<?php echo $shopLink; ?>?category=tracksuits" class="hover:text-secondary transition-colors">Team Podiums & Tracksuits</a></li>
        </ul>
      </div>

      <!-- Col 4: Factory Contacts -->
      <div>
        <h4 class="font-['Oswald'] text-sm uppercase text-secondary mb-4 font-semibold tracking-wider">Factory & Support</h4>
        <div class="flex flex-col gap-3 font-['Inter'] text-xs">
          <p class="flex items-start gap-2">
            <span class="material-symbols-outlined text-[16px] text-primary shrink-0 mt-0.5">factory</span>
            <span>FHR Sports Industrial Complex, Homagama High-Tech Zone, Colombo, Sri Lanka</span>
          </p>
          <p class="flex items-center gap-2">
            <span class="material-symbols-outlined text-[16px] text-secondary-fixed shrink-0">call</span>
            <a href="tel:+94112899450" class="hover:text-secondary">+94 (11) 289-9450</a>
          </p>
          <p class="flex items-center gap-2">
            <span class="material-symbols-outlined text-[16px] text-tertiary shrink-0">mail</span>
            <a href="mailto:orders@fhrsports.com" class="hover:text-secondary">orders@fhrsports.com</a>
          </p>
          <p class="flex items-center gap-2">
            <span class="material-symbols-outlined text-[16px] text-secondary-fixed shrink-0">chat</span>
            <span class="text-secondary-fixed font-semibold">24/7 WhatsApp Team Desk</span>
          </p>
        </div>
      </div>
    </div>

    <!-- Bottom Legal Row -->
    <div class="pt-6 border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-4 font-['Inter'] text-xs text-on-surface-variant">
      <p>© 2026 FHR Sports Collections. All Rights Reserved. Engineered with Zero Decay Athletic Technology.</p>
      <div class="flex flex-wrap items-center gap-4">
        <a href="<?php echo $teamLink; ?>" class="hover:text-secondary">Wholesale Terms</a>
        <span>•</span>
        <a href="<?php echo $subLink; ?>" class="hover:text-secondary">Sublimation Specs</a>
        <span>•</span>
        <a href="<?php echo $teamLink; ?>#quote-engine" class="hover:text-secondary">Request Volume Quote</a>
      </div>
    </div>
  </div>
</footer>

<!-- Mobile Drawer Backdrop & Panel -->
<div id="mobile-backdrop" class="drawer-backdrop fixed inset-0 bg-black/80 z-[100] backdrop-blur-sm transition-opacity"></div>
<aside id="mobile-drawer" class="drawer-panel-left fixed top-0 left-0 bottom-0 w-[320px] max-w-[85vw] bg-surface-container-high border-r border-outline-variant/40 shadow-2xl z-[101] flex flex-col justify-between overflow-y-auto">
  <div class="p-5">
    <div class="flex items-center justify-between pb-4 border-b border-outline-variant/30">
      <div class="flex items-center gap-2.5">
        <img src="assets/images/crest.svg" alt="FHR Crest" class="w-8 h-8 object-contain">
        <span class="font-['Oswald'] uppercase text-lg text-secondary tracking-wider font-bold">FHR SPORTS</span>
      </div>
      <button id="mobile-close-btn" class="p-2 text-on-surface-variant hover:text-secondary rounded-lg hover:bg-surface-container-highest cursor-pointer">
        <span class="material-symbols-outlined text-[24px]">close</span>
      </button>
    </div>
    
    <nav class="flex flex-col gap-1.5 mt-6 font-['Oswald'] uppercase tracking-wider text-sm">
      <a href="<?php echo $homeLink; ?>" class="flex items-center gap-3 px-3.5 py-3 rounded-lg text-on-surface hover:text-secondary hover:bg-surface-container-highest transition-colors">
        <span class="material-symbols-outlined text-primary text-[20px]">home</span> Home
      </a>
      <a href="<?php echo $shopLink; ?>" class="flex items-center gap-3 px-3.5 py-3 rounded-lg text-on-surface hover:text-secondary hover:bg-surface-container-highest transition-colors">
        <span class="material-symbols-outlined text-secondary-fixed text-[20px]">storefront</span> Shop Catalog
      </a>
      <a href="<?php echo $subLink; ?>" class="flex items-center justify-between px-3.5 py-3 rounded-lg text-on-surface hover:text-secondary hover:bg-surface-container-highest transition-colors">
        <div class="flex items-center gap-3">
          <span class="material-symbols-outlined text-tertiary-container text-[20px]">palette</span> Custom Sublimation
        </div>
        <span class="text-[10px] bg-tertiary-container/30 text-tertiary-container border border-tertiary-container/40 px-2 py-0.5 rounded font-bold font-['Inter']">3D</span>
      </a>
      <a href="<?php echo $teamLink; ?>" class="flex items-center justify-between px-3.5 py-3 rounded-lg text-on-surface hover:text-secondary hover:bg-surface-container-highest transition-colors">
        <div class="flex items-center gap-3">
          <span class="material-symbols-outlined text-primary text-[20px]">groups</span> Team Orders & Quotes
        </div>
        <span class="text-[10px] bg-secondary-container/30 text-secondary-fixed border border-secondary-container/40 px-2 py-0.5 rounded font-bold font-['Inter']">BULK</span>
      </a>
    </nav>
    
    <div class="mt-8 pt-6 border-t border-outline-variant/30">
      <p class="font-['Inter'] uppercase text-on-surface-variant tracking-widest text-[11px] mb-3 font-bold">Sports Disciplines</p>
      <div class="grid grid-cols-2 gap-2 text-xs font-['Inter'] text-on-surface-variant">
        <a href="<?php echo $shopLink; ?>?sport=football" class="p-2.5 bg-surface-container rounded-lg hover:text-secondary hover:bg-surface-container-highest flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-primary">sports_soccer</span> Football</a>
        <a href="<?php echo $shopLink; ?>?sport=cricket" class="p-2.5 bg-surface-container rounded-lg hover:text-secondary hover:bg-surface-container-highest flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-secondary-fixed">sports_cricket</span> Cricket</a>
        <a href="<?php echo $shopLink; ?>?sport=basketball" class="p-2.5 bg-surface-container rounded-lg hover:text-secondary hover:bg-surface-container-highest flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-tertiary">sports_basketball</span> Basketball</a>
        <a href="<?php echo $shopLink; ?>?sport=rugby" class="p-2.5 bg-surface-container rounded-lg hover:text-secondary hover:bg-surface-container-highest flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px] text-primary">sports_rugby</span> Rugby</a>
      </div>
    </div>
  </div>
  
  <div class="p-5 border-t border-outline-variant/30 bg-surface-container-lowest">
    <a href="<?php echo $teamLink; ?>#quote-engine" class="flex items-center justify-center gap-2 w-full py-3 bg-secondary-container text-on-secondary font-['Oswald'] uppercase text-xs tracking-wider rounded-lg font-bold shadow-lg hover:brightness-110">
      Request Team Quote <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
    </a>
  </div>
</aside>

<!-- Slide-Over Team Equipment Cart Drawer -->
<div id="cart-backdrop" class="drawer-backdrop fixed inset-0 bg-black/80 z-[110] backdrop-blur-sm transition-opacity"></div>
<aside id="cart-drawer" class="drawer-panel fixed top-0 right-0 bottom-0 w-[420px] max-w-[92vw] bg-surface-container-high border-l border-outline-variant/40 shadow-2xl z-[111] flex flex-col justify-between">
  <div class="p-4 sm:p-5 border-b border-outline-variant/30 flex items-center justify-between bg-surface-container-highest/60">
    <div class="flex items-center gap-2.5">
      <span class="material-symbols-outlined text-primary text-[24px]">shopping_bag</span>
      <h3 class="font-['Oswald'] text-base sm:text-lg uppercase text-secondary font-bold tracking-wider">Team Equipment Bag</h3>
      <span class="cart-badge bg-secondary-fixed text-on-secondary text-xs px-2 py-0.5 rounded-full font-bold">1</span>
    </div>
    <button id="cart-close-btn" class="p-1.5 text-on-surface-variant hover:text-secondary rounded-lg hover:bg-surface-container-highest cursor-pointer">
      <span class="material-symbols-outlined text-[22px]">close</span>
    </button>
  </div>
  
  <div id="cart-items-list" class="flex-1 p-4 sm:p-5 overflow-y-auto flex flex-col gap-3">
    <!-- Populated dynamically by main.js -->
  </div>
  
  <div class="p-4 sm:p-5 border-t border-outline-variant/30 bg-surface-container-lowest flex flex-col gap-3 sm:gap-4">
    <div class="flex items-center justify-between font-['Oswald'] uppercase text-sm sm:text-base">
      <span class="text-on-surface-variant">Estimated Subtotal:</span>
      <span id="cart-subtotal" class="text-secondary font-bold text-lg sm:text-xl">$49.99</span>
    </div>
    <p class="text-[11px] text-on-surface-variant font-['Inter'] leading-tight">
      * Direct factory volume discounts apply automatically to bulk orders. Free nationwide delivery on 20+ kits.
    </p>
    <div class="flex gap-2">
      <a href="<?php echo $shopLink; ?>" class="flex-1 text-center py-2.5 sm:py-3 bg-surface-container border border-outline-variant/50 text-on-surface hover:text-secondary rounded-lg font-['Oswald'] uppercase text-xs tracking-wider font-bold hover:bg-surface-container-highest transition-colors">
        Add More
      </a>
      <button onclick="window.fhrCheckout()" class="flex-1 py-2.5 sm:py-3 bg-secondary-container hover:bg-secondary-fixed text-on-secondary rounded-lg font-['Oswald'] uppercase text-xs tracking-wider font-bold shadow-lg transition-all cursor-pointer">
        Checkout
      </button>
    </div>
  </div>
</aside>

<!-- Toast Container -->
<div id="toast-container"></div>

<script src="assets/js/parallax.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
