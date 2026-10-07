<!DOCTYPE html>
<html class="dark" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'FHR Sports Collections'; ?></title>
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
?>
<!-- ATHLETIC TICKER ANNOUNCEMENT BAR -->
<div class="w-full bg-surface-container-lowest border-b border-outline-variant/30 py-1.5 px-3 sm:px-4 text-xs font-body-sm text-on-surface-variant flex items-center justify-between overflow-hidden relative z-40">
  <div class="max-w-[1440px] mx-auto w-full flex items-center justify-between gap-2">
    <div class="flex items-center gap-2 sm:gap-3 shrink-0">
      <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-secondary-container/20 text-secondary-fixed text-[10px] font-bold uppercase tracking-wider shrink-0">
        <span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed animate-ping"></span> FACTORY DIRECT
      </span>
      <span class="hidden md:inline text-[11px] uppercase tracking-wider text-on-surface font-semibold truncate">
        100% Sublimation Jersey Customization • Bulk Discounts Up To 35% • 7-Day Express Dispatch
      </span>
      <span class="md:hidden text-[11px] uppercase tracking-wider text-on-surface font-semibold truncate">
        Custom Sublimation Kits • Bulk Discounts
      </span>
    </div>
    <div class="flex items-center gap-3 text-[11px] shrink-0">
      <a href="tel:+94112899450" class="hover:text-secondary hidden sm:flex items-center gap-1 transition-colors">
        <span class="material-symbols-outlined text-[14px] text-primary">call</span> +94 (11) 289-9450
      </a>
      <span class="text-outline-variant/60 hidden sm:inline">|</span>
      <a href="team-orders.php" class="text-secondary-fixed hover:underline font-bold uppercase tracking-wider text-[11px]">
        Wholesale Rates
      </a>
    </div>
  </div>
</div>

<div class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
<header class="h-16 sm:h-20 bg-surface/95 backdrop-blur-xl shadow-[0_4px_24px_rgba(0,0,0,0.5)] border-b border-outline-variant/40">
  <div class="h-full max-w-[1440px] mx-auto px-3 sm:px-gutter-mobile lg:px-gutter flex items-center justify-between gap-2 sm:gap-space-md relative">
    <div class="flex items-center gap-1.5 sm:gap-3">
      <button aria-label="Open navigation menu" data-mobile-menu-toggle="true" class="xl:hidden p-1.5 sm:p-2 text-on-surface hover:text-secondary hover:bg-surface-container-high rounded-lg transition-colors cursor-pointer">
        <span class="material-symbols-outlined text-[24px]">menu</span>
      </button>
      <a href="index.php" class="flex items-center gap-2 sm:gap-2.5 shrink-0 group py-1">
        <div class="h-10 w-10 sm:h-12 sm:w-12 flex items-center justify-center shrink-0">
          <img src="assets/images/crest.svg" alt="FHR Sports Crest" class="h-full w-full object-contain filter drop-shadow-[0_2px_10px_rgba(0,102,255,0.4)] transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="flex flex-col justify-center">
          <div class="flex items-center gap-1 sm:gap-1.5">
            <span class="font-headline-md text-base sm:text-headline-sm uppercase text-secondary tracking-wider leading-none group-hover:text-primary transition-colors">FHR SPORTS</span>
            <span class="bg-primary-container text-on-primary-container font-label-xs text-[10px] sm:text-label-xs px-1.5 py-0.5 rounded font-bold uppercase tracking-wider">FACTORY</span>
          </div>
          <span class="font-label-xs text-[9px] sm:text-label-xs text-on-surface-variant tracking-widest uppercase leading-tight mt-0.5 hidden sm:inline-block">COLLECTIONS OF SPORTS EQUIPMENTS</span>
        </div>
      </a>
    </div>
    <nav class="hidden xl:flex items-center gap-space-xs 2xl:gap-space-sm h-full">
      <a class="transition-colors uppercase tracking-wide font-label-md text-label-md <?php echo $currentPage === 'home' ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg px-space-sm py-space-xs' : 'text-on-surface-variant hover:text-secondary px-space-sm py-space-xs'; ?>" href="index.php">Home</a>
      <a class="transition-colors uppercase tracking-wide font-label-md text-label-md <?php echo $currentPage === 'shop' ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg px-space-sm py-space-xs' : 'text-on-surface-variant hover:text-secondary px-space-sm py-space-xs'; ?>" href="shop.php">Shop</a>
      <a class="transition-colors uppercase tracking-wide font-label-md text-label-md flex items-center gap-space-xs <?php echo $currentPage === 'sublimation' ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg px-space-sm py-space-xs' : 'text-on-surface-variant hover:text-secondary px-space-sm py-space-xs'; ?>" href="sublimation.php">
        Custom Sublimation <span class="bg-tertiary-container text-on-tertiary-container font-label-xs text-label-xs px-1.5 py-0.5 rounded font-bold">FACTORY DIRECT</span>
      </a>
      <a class="transition-colors uppercase tracking-wide font-label-md text-label-md flex items-center gap-space-xs <?php echo $currentPage === 'team-orders' ? 'bg-primary-container text-on-primary-container font-semibold rounded-lg px-space-sm py-space-xs' : 'text-on-surface-variant hover:text-secondary px-space-sm py-space-xs'; ?>" href="team-orders.php">
        Team Orders & Quotes <span class="bg-secondary-container/30 text-secondary-fixed border border-secondary-container/40 font-label-xs text-label-xs px-1.5 py-0.5 rounded font-bold">BULK TIER</span>
      </a>
    </nav>
    <div class="flex items-center gap-1.5 sm:gap-space-sm shrink-0">
      <button aria-label="Open Cart" data-cart-toggle="true" class="flex items-center gap-1 bg-surface-container-high hover:bg-surface-container-highest p-1.5 sm:px-space-sm sm:py-1.5 rounded-lg border border-outline-variant/40 transition-all cursor-pointer">
        <div class="relative flex items-center">
          <span class="material-symbols-outlined text-[20px] text-on-surface">shopping_bag</span>
          <span class="cart-badge absolute -top-1.5 -right-1.5 w-4 h-4 bg-secondary-fixed text-on-secondary rounded-full font-label-xs text-[10px] flex items-center justify-center font-bold">1</span>
        </div>
        <span class="font-label-md text-label-md text-on-surface font-semibold hidden sm:inline">Bag</span>
      </button>
      <a class="hidden sm:inline-flex items-center justify-center bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase tracking-wider px-space-md py-2 rounded-lg font-bold shadow-[0_0_12px_rgba(202,243,0,0.3)] transition-all" href="team-orders.php#quote-engine">
        REQUEST QUOTE
      </a>
    </div>
  </div>
</header>
</div>
