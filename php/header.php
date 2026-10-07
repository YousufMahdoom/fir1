<!DOCTYPE html>
<html class="dark" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'FHR Sports Platform'; ?></title>
  <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'FHR Sports Custom Sublimation Factory'; ?>">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Oswald:wght@500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "on-primary-container": "#f8f7ff",
            "on-surface": "#dfe2ee",
            "error": "#ffb4ab",
            "outline-variant": "#424656",
            "on-secondary": "#2a3400",
            "background": "#0f131c",
            "surface-dim": "#0f131c",
            "primary": "#b3c5ff",
            "tertiary-fixed": "#ffdad9",
            "tertiary-container": "#e3083c",
            "primary-fixed": "#dae1ff",
            "inverse-on-surface": "#2c3039",
            "tertiary": "#ffb3b3",
            "on-error-container": "#ffdad6",
            "on-secondary-fixed-variant": "#3e4c00",
            "on-tertiary-container": "#fff7f6",
            "on-secondary-container": "#596c00",
            "secondary-container": "#caf300",
            "on-tertiary-fixed": "#40000a",
            "on-tertiary-fixed-variant": "#920023",
            "surface-container-highest": "#31353e",
            "surface-variant": "#31353e",
            "inverse-primary": "#0054d6",
            "on-tertiary": "#680016",
            "on-error": "#690005",
            "on-surface-variant": "#c2c6d8",
            "tertiary-fixed-dim": "#ffb3b3",
            "surface-bright": "#353942",
            "surface-container-lowest": "#0a0e16",
            "on-primary-fixed-variant": "#003fa4",
            "surface-container-high": "#262a33",
            "secondary": "#ffffff",
            "on-primary-fixed": "#001849",
            "surface-container-low": "#181c24",
            "on-secondary-fixed": "#171e00",
            "surface-tint": "#b3c5ff",
            "secondary-fixed-dim": "#b0d500",
            "inverse-surface": "#dfe2ee",
            "error-container": "#93000a",
            "outline": "#8c90a1",
            "on-primary": "#002b75",
            "surface": "#0f131c",
            "surface-container": "#1c2028",
            "primary-container": "#0066ff",
            "on-background": "#dfe2ee",
            "secondary-fixed": "#caf300",
            "primary-fixed-dim": "#b3c5ff"
          },
          fontFamily: {
            "headline-md": ["Oswald", "sans-serif"],
            "headline-lg": ["Oswald", "sans-serif"],
            "headline-sm": ["Oswald", "sans-serif"],
            "display-hero": ["Oswald", "sans-serif"],
            "body-sm": ["Inter", "sans-serif"],
            "body-md": ["Inter", "sans-serif"],
            "body-lg": ["Inter", "sans-serif"]
          }
        }
      }
    };
  </script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col antialiased selection:bg-secondary-fixed selection:text-on-secondary overflow-x-hidden">

<?php
$currentPage = isset($activePage) ? $activePage : 'home';

$homeLink = 'index.php';
$shopLink = 'shop.php';
$subLink = 'sublimation.php';
$teamLink = 'team-orders.php';

$baseLinkClasses = "transition-colors uppercase tracking-wider font-['Inter'] text-xs font-semibold hover:text-secondary-fixed py-2";
$activeClass = "text-secondary-fixed font-bold border-b-2 border-secondary-fixed pb-1";
$inactiveClass = "text-on-surface-variant";

$homeActive = ($currentPage === 'home') ? $activeClass : $inactiveClass;
$shopActive = ($currentPage === 'shop') ? $activeClass : $inactiveClass;
$subActive = ($currentPage === 'sublimation') ? $activeClass : $inactiveClass;
$teamActive = ($currentPage === 'team-orders') ? $activeClass : $inactiveClass;
?>

<!-- TOP ANNOUNCEMENT TICKER -->
<div class="w-full bg-surface-container-lowest border-b border-outline-variant/30 py-2 px-4 text-xs font-['Inter'] text-on-surface-variant relative z-40">
  <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
    <div class="flex items-center gap-3 overflow-hidden">
      <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded bg-secondary-container/20 text-secondary-fixed text-[10px] font-bold uppercase tracking-wider shrink-0">
        <span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed animate-ping"></span> FACTORY DIRECT
      </span>
      <span class="hidden md:inline text-[11px] uppercase tracking-wider text-on-surface font-medium truncate">
        100% Sublimation Jersey Customization • Bulk Discounts Up To 35% • 7-Day Express Dispatch
      </span>
      <span class="md:hidden text-[11px] uppercase tracking-wider text-on-surface font-medium truncate">
        Custom Sublimation Matchwear • Bulk Discounts
      </span>
    </div>
    <div class="flex items-center gap-4 text-[11px] shrink-0">
      <a href="tel:+94112899450" class="hover:text-secondary hidden sm:flex items-center gap-1.5 transition-colors">
        <span class="material-symbols-outlined text-[14px] text-primary">call</span> +94 (11) 289-9450
      </a>
      <span class="text-outline-variant/60 hidden sm:inline">|</span>
      <a href="<?php echo $teamLink; ?>" class="text-secondary-fixed hover:underline font-bold uppercase tracking-wider text-[11px]">
        Wholesale Rates
      </a>
    </div>
  </div>
</div>

<!-- MAIN STICKY NAVIGATION HEADER -->
<div class="sticky top-0 left-0 right-0 z-50">
<header class="h-20 bg-surface/95 backdrop-blur-xl shadow-lg border-b border-outline-variant/40">
  <div class="h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4">
    
    <!-- Left: Brand Logo & Mobile Trigger -->
    <div class="flex items-center gap-3">
      <button aria-label="Open navigation menu" data-mobile-menu-toggle="true" class="lg:hidden p-2 text-on-surface hover:text-secondary hover:bg-surface-container-high rounded-lg transition-colors cursor-pointer">
        <span class="material-symbols-outlined text-[26px]">menu</span>
      </button>

      <a href="<?php echo $homeLink; ?>" class="flex items-center gap-3 shrink-0 group py-1">
        <div class="h-11 w-11 sm:h-12 sm:w-12 flex items-center justify-center shrink-0">
          <img src="assets/images/crest.svg" alt="FHR Sports Crest" class="h-full w-full object-contain filter drop-shadow-[0_2px_10px_rgba(0,102,255,0.4)] transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="flex flex-col justify-center">
          <div class="flex items-center gap-1.5">
            <span class="font-['Oswald'] text-lg sm:text-xl uppercase text-secondary tracking-wider leading-none group-hover:text-primary transition-colors font-bold">FHR SPORTS</span>
            <span class="bg-primary-container text-on-primary-container text-[10px] font-bold uppercase px-1.5 py-0.5 rounded tracking-wider">FACTORY</span>
          </div>
          <span class="text-[9px] sm:text-[10px] text-on-surface-variant tracking-widest uppercase font-['Inter'] leading-tight mt-0.5 hidden sm:inline-block">COLLECTIONS OF SPORTS EQUIPMENTS</span>
        </div>
      </a>
    </div>

    <!-- Center: Desktop Navigation Bar with Ample Spacing -->
    <nav class="hidden lg:flex items-center gap-6 xl:gap-8 h-full">
      <a class="<?php echo $baseLinkClasses . ' ' . $homeActive; ?>" href="<?php echo $homeLink; ?>">Home</a>
      
      <!-- SHOP Mega-Menu Trigger -->
      <div class="group relative h-full flex items-center">
        <a class="<?php echo $baseLinkClasses . ' ' . $shopActive; ?> flex items-center gap-1 cursor-pointer" href="<?php echo $shopLink; ?>">
          Shop <span class="material-symbols-outlined text-[16px] transition-transform duration-300 group-hover:rotate-180">expand_more</span>
        </a>
        
        <!-- Mega-Menu Dropdown Panel -->
        <div class="absolute top-[72px] left-1/2 -translate-x-1/2 w-[820px] max-w-[calc(100vw-2rem)] bg-surface-container-high/95 backdrop-blur-xl border border-outline-variant/50 rounded-xl shadow-2xl p-6 opacity-0 invisible pointer-events-none group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto transition-all duration-300 z-50">
          <div class="grid grid-cols-12 gap-6">
            <!-- Col 1: Disciplines -->
            <div class="col-span-4 border-r border-outline-variant/30 pr-5">
              <div class="flex items-center gap-1.5 mb-3">
                <span class="w-2 h-2 rounded-full bg-secondary-fixed"></span>
                <span class="text-[11px] uppercase tracking-wider text-secondary-fixed font-bold">Sports Disciplines</span>
              </div>
              <ul class="flex flex-col gap-1.5 text-on-surface-variant text-xs">
                <li><a href="<?php echo $shopLink; ?>?sport=football" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-primary">sports_soccer</span> Football Pro Kits</a></li>
                <li><a href="<?php echo $shopLink; ?>?sport=cricket" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-secondary-fixed">sports_cricket</span> Cricket Matchwear</a></li>
                <li><a href="<?php echo $shopLink; ?>?sport=basketball" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-tertiary">sports_basketball</span> Basketball Uniforms</a></li>
                <li><a href="<?php echo $shopLink; ?>?sport=volleyball" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-primary">sports_volleyball</span> Volleyball & Netball</a></li>
                <li><a href="<?php echo $shopLink; ?>?sport=rugby" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-secondary-fixed">sports_rugby</span> Rugby Union Kits</a></li>
                <li><a href="<?php echo $shopLink; ?>?sport=training" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-on-surface">fitness_center</span> Gym & Training Gear</a></li>
              </ul>
            </div>

            <!-- Col 2: Apparel -->
            <div class="col-span-4 border-r border-outline-variant/30 pr-5">
              <div class="flex items-center gap-1.5 mb-3">
                <span class="w-2 h-2 rounded-full bg-primary"></span>
                <span class="text-[11px] uppercase tracking-wider text-primary font-bold">Apparel & Gear</span>
              </div>
              <ul class="flex flex-col gap-1.5 text-on-surface-variant text-xs">
                <li><a href="<?php echo $shopLink; ?>?category=tracksuits" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-primary">apparel</span> Team Tracksuits & Podiums</a></li>
                <li><a href="<?php echo $shopLink; ?>?category=footwear" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-secondary-fixed">sports</span> Boots & Studded Footwear</a></li>
                <li><a href="<?php echo $shopLink; ?>?category=bags" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-tertiary">luggage</span> All-Weather Duffle Bags</a></li>
                <li><a href="<?php echo $teamLink; ?>" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-primary">school</span> School & College Bundles</a></li>
                <li><a href="<?php echo $teamLink; ?>" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-secondary-fixed">corporate_fare</span> Corporate Mercantile Kits</a></li>
                <li><a href="<?php echo $shopLink; ?>?category=bibs" class="flex items-center gap-2 py-1 px-2 rounded hover:bg-surface-container-highest hover:text-secondary transition-colors"><span class="material-symbols-outlined text-[16px] text-on-surface">military_tech</span> Referee & Sideline Bibs</a></li>
              </ul>
            </div>

            <!-- Col 3: Promo -->
            <div class="col-span-4 flex flex-col justify-between bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/30">
              <div>
                <span class="bg-secondary-container text-on-secondary text-[10px] px-2 py-0.5 rounded font-bold uppercase inline-block mb-2">3D BUILDER</span>
                <h4 class="font-['Oswald'] text-base uppercase text-secondary font-bold leading-tight">Custom Kit Creator</h4>
                <p class="text-xs text-on-surface-variant mt-1.5 leading-relaxed">Customize your club crest, Pantone colors & roster numbers with zero setup fee.</p>
              </div>
              <div class="mt-4 pt-3 border-t border-outline-variant/20 flex items-center justify-between">
                <span class="text-[11px] text-secondary-fixed font-bold uppercase">4-7 Day Turnaround</span>
                <a href="<?php echo $subLink; ?>" class="inline-flex items-center gap-1 text-[11px] uppercase bg-primary-container text-on-primary-container px-2.5 py-1 rounded font-bold hover:bg-inverse-primary transition-colors">Design Now <span class="material-symbols-outlined text-[14px]">arrow_forward</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a class="<?php echo $baseLinkClasses . ' ' . $subActive; ?> flex items-center" href="<?php echo $subLink; ?>">
        Custom Sublimation 
        <span class="ml-2 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold px-2 py-0.5 rounded uppercase">FACTORY DIRECT</span>
      </a>
      <a class="<?php echo $baseLinkClasses . ' ' . $teamActive; ?> flex items-center" href="<?php echo $teamLink; ?>">
        Team Orders & Quotes 
        <span class="ml-2 bg-secondary-container/30 text-secondary-fixed border border-secondary-container/40 text-[10px] font-bold px-2 py-0.5 rounded uppercase">BULK TIER</span>
      </a>
    </nav>

    <!-- Right: Action Buttons Suite -->
    <div class="flex items-center gap-2 sm:gap-3 shrink-0">
      <!-- Search Button -->
      <a href="<?php echo $shopLink; ?>" aria-label="Search sportswear" class="flex items-center gap-1.5 bg-surface-container-high hover:bg-surface-bright text-on-surface-variant hover:text-on-surface px-3 py-2 rounded-lg border border-outline-variant/50 transition-all text-xs font-semibold">
        <span class="material-symbols-outlined text-[18px]">search</span>
        <span class="hidden md:inline">Catalog</span>
      </a>

      <!-- Cart Bag Button -->
      <button aria-label="Open Cart" data-cart-toggle="true" class="flex items-center gap-2 bg-surface-container-high hover:bg-surface-container-highest px-3 py-2 rounded-lg border border-outline-variant/40 transition-all cursor-pointer">
        <div class="relative flex items-center">
          <span class="material-symbols-outlined text-[20px] text-on-surface">shopping_bag</span>
          <span class="cart-badge absolute -top-1.5 -right-1.5 w-4 h-4 bg-secondary-fixed text-on-secondary rounded-full text-[10px] flex items-center justify-center font-bold">1</span>
        </div>
        <span class="text-xs text-on-surface font-semibold hidden sm:inline">Bag</span>
      </button>

      <!-- Request Quote CTA Button -->
      <a class="hidden sm:inline-flex items-center justify-center bg-secondary-container hover:bg-secondary-fixed text-on-secondary text-xs uppercase tracking-wider px-4 py-2.5 rounded-lg font-bold shadow-md hover:shadow-lg transition-all" href="<?php echo $teamLink; ?>#quote-engine">
        REQUEST QUOTE
      </a>
    </div>
  </div>
</header>
</div>
