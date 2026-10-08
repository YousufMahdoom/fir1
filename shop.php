<?php
$pageTitle = "Shop All Sportswear & Matchwear Collections | FHR Sports";
$pageDescription = "Explore high-performance sportswear, football kits, cricket matchwear, basketball jerseys, training tracksuits, and equipment crafted with athletic precision.";
$activePage = "shop";
include __DIR__ . '/php/header.php';
?>

<main class="w-full bg-surface relative flex-1 overflow-x-hidden">
<main class="w-full pt-28 bg-surface"><div class="flex flex-col w-full">
<!-- Subtle Ambient Glow -->
<div class="relative w-full overflow-hidden">
<div class="absolute -top-32 left-1/4 w-96 h-96 bg-primary-container/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute top-64 right-10 w-80 h-80 bg-secondary-container/5 rounded-full blur-3xl pointer-events-none"></div>
<!-- BREADCRUMBS & COMPACT SUB-HERO STRIP -->
<section class="max-w-[1440px] mx-auto w-full px-gutter-mobile lg:px-gutter pt-space-md pb-space-sm">
<nav class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md uppercase tracking-wider mb-space-sm">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="#">
<span class="material-symbols-outlined text-[15px]">home</span> Home
        </a>
<span class="text-outline-variant">/</span>
<a class="hover:text-primary transition-colors" href="#">Shop</a>
<span class="text-outline-variant">/</span>
<span class="text-secondary font-semibold">All Sportswear &amp; Gear</span>
</nav>
<!-- CATALOG MASTHEAD & FACET SUMMARY -->
<div class="bg-surface-container-low rounded-xl p-space-md lg:p-space-lg shadow-sm mb-space-md">
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-space-xs mb-1">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-surface-container text-secondary-fixed font-label-xs text-label-xs tracking-widest uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed animate-pulse"></span>
                Direct Factory Inventory
              </span>
<span class="text-outline-variant font-label-xs text-label-xs">•</span>
<span class="text-outline font-label-xs text-label-xs tracking-wider uppercase">Sri Lanka &amp; Global Shipping</span>
</div>
<h1 class="font-headline-lg text-headline-lg uppercase text-secondary tracking-wide">
              ALL SPORTSWEAR &amp; FACTORY COLLECTIONS
            </h1>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
              Engineered high-performance teamwear, heavy-duty match kits, and bespoke full-sublimation athletic apparel.
              <span class="text-primary font-medium">Showing 148 verified club-spec products</span>
</p>
</div>
<!-- Quick Stat KPI Strip -->
<div class="flex items-center gap-space-sm flex-wrap shrink-0">
<div class="bg-surface-container px-space-sm py-2 rounded-lg text-center min-w-[100px]">
<div class="font-headline-sm text-headline-sm text-secondary">3-5 DAYS</div>
<div class="font-label-xs text-label-xs text-outline uppercase tracking-wider">Sublimation Turnaround</div>
</div>
<div class="bg-surface-container px-space-sm py-2 rounded-lg text-center min-w-[100px]">
<div class="font-headline-sm text-headline-sm text-secondary-fixed">100%</div>
<div class="font-label-xs text-label-xs text-outline uppercase tracking-wider">Pantone Lock Tech</div>
</div>
<div class="bg-surface-container px-space-sm py-2 rounded-lg text-center min-w-[100px]">
<div class="font-headline-sm text-headline-sm text-primary">ISO 9001</div>
<div class="font-label-xs text-label-xs text-outline uppercase tracking-wider">Lab Tested Mesh</div>
</div>
</div>
</div>
<!-- ACTIVE FILTER TAGS & CONTROLS TOOLBAR -->
<div class="mt-space-md pt-space-md flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<!-- Filter Chips -->
<div class="flex items-center gap-space-xs flex-wrap">
<span class="font-label-xs text-label-xs text-outline uppercase tracking-widest mr-1">Active Facets:</span>
<button class="group inline-flex items-center gap-1.5 px-space-sm py-1 rounded bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-colors shadow-sm">
<span class="">Custom Sublimation</span>
<span class="material-symbols-outlined text-[14px] text-outline group-hover:text-error transition-colors">close</span>
</button>
<button class="group inline-flex items-center gap-1.5 px-space-sm py-1 rounded bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-colors shadow-sm">
<span class="">Football (38)</span>
<span class="material-symbols-outlined text-[14px] text-outline group-hover:text-error transition-colors">close</span>
</button>
<button class="group inline-flex items-center gap-1.5 px-space-sm py-1 rounded bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-colors shadow-sm">
<span class="">In Stock</span>
<span class="material-symbols-outlined text-[14px] text-outline group-hover:text-error transition-colors">close</span>
</button>
<button class="text-tertiary hover:text-tertiary-fixed text-label-md font-label-md uppercase tracking-wider ml-space-xs underline decoration-tertiary/40 underline-offset-4 transition-colors">
              Clear All (3)
            </button>
</div>
<!-- Sorting & Grid Switcher Bar -->
<div class="flex items-center gap-space-sm shrink-0">
<!-- Sort dropdown -->
<div class="flex items-center gap-space-xs bg-surface-container px-space-sm py-1.5 rounded-lg shadow-sm">
<span class="font-label-xs text-label-xs text-outline uppercase tracking-wider hidden sm:inline">Sort:</span>
<select class="bg-transparent text-secondary font-label-md text-label-md tracking-wide focus:outline-none cursor-pointer pr-space-xs" id="sort-select">
<option class="bg-surface-container-high text-on-surface" value="featured">Featured Equipment</option>
<option class="bg-surface-container-high text-on-surface" selected="" value="best-selling">Best Selling Kits</option>
<option class="bg-surface-container-high text-on-surface" value="price-low">Price: Low to High</option>
<option class="bg-surface-container-high text-on-surface" value="price-high">Price: High to Low</option>
<option class="bg-surface-container-high text-on-surface" value="rating">Customer Rating</option>
<option class="bg-surface-container-high text-on-surface" value="newest">Newest Releases</option>
</select>
</div>
<!-- Layout switcher -->
<div class="hidden sm:flex items-center bg-surface-container rounded-lg p-0.5 shadow-sm">
<button class="px-2 py-1 rounded bg-primary-container text-on-primary-container transition-all flex items-center justify-center" id="btn-grid-4" title="4 Columns Density">
<span class="material-symbols-outlined text-[18px]">grid_view</span>
</button>
<button class="px-2 py-1 rounded text-on-surface-variant hover:text-secondary transition-all flex items-center justify-center" id="btn-grid-3" title="3 Columns Wide">
<span class="material-symbols-outlined text-[18px]">view_column</span>
</button>
<button class="px-2 py-1 rounded text-on-surface-variant hover:text-secondary transition-all flex items-center justify-center" id="btn-list" title="Detailed List View">
<span class="material-symbols-outlined text-[18px]">view_agenda</span>
</button>
</div>
<!-- Mobile Filter Toggle Button -->
<button class="lg:hidden flex items-center gap-1.5 bg-surface-container hover:bg-surface-container-high text-secondary px-space-sm py-1.5 rounded-lg font-label-md text-label-md uppercase tracking-wider" id="mobile-filter-trigger">
<span class="material-symbols-outlined text-[18px]">tune</span>
<span class="">Filters (7)</span>
</button>
</div>
</div>
</div>
</section>
<!-- MAIN TWO-COLUMN BODY LAYOUT -->
<section class="max-w-[1440px] mx-auto w-full px-gutter-mobile lg:px-gutter pb-space-xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
<!-- ======================= LEFT FACETED SIDEBAR ======================= -->
<aside class="lg:col-span-3 flex flex-col gap-space-md bg-surface-container-low/70 lg:bg-transparent rounded-xl p-space-md lg:p-0" id="filter-sidebar">
<div class="flex items-center justify-between pb-space-xs border-b border-surface-container-highest lg:border-none">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[20px]">filter_alt</span>
<h2 class="font-headline-sm text-headline-sm uppercase text-secondary tracking-wide">Refine Gear</h2>
</div>
<button class="text-outline hover:text-primary font-label-xs text-label-xs uppercase tracking-wider transition-colors">Reset</button>
</div>
<!-- Section 1: Categories -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<div class="flex items-center justify-between mb-space-sm">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary">Garment Hierarchy</h3>
<span class="material-symbols-outlined text-outline text-[16px]">expand_less</span>
</div>
<div class="flex flex-col gap-1.5 font-body-sm text-body-sm">
<a class="flex items-center justify-between py-1 px-1.5 rounded hover:bg-surface-container-high text-secondary font-medium transition-colors" href="#">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary-fixed">apparel</span> Custom Jerseys
                </span>
<span class="font-label-xs text-label-xs px-2 py-0.5 rounded-full bg-surface-container-highest text-secondary-fixed">24</span>
</a>
<a class="flex items-center justify-between py-1 px-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" href="#">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline">groups</span> Team Uniforms
                </span>
<span class="font-label-xs text-label-xs px-2 py-0.5 rounded-full bg-surface-container text-outline">42</span>
</a>
<a class="flex items-center justify-between py-1 px-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" href="#">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline">fitness_center</span> Training &amp; Gym
                </span>
<span class="font-label-xs text-label-xs px-2 py-0.5 rounded-full bg-surface-container text-outline">35</span>
</a>
<a class="flex items-center justify-between py-1 px-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" href="#">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline">sports</span> Pro Tracksuits
                </span>
<span class="font-label-xs text-label-xs px-2 py-0.5 rounded-full bg-surface-container text-outline">18</span>
</a>
<a class="flex items-center justify-between py-1 px-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" href="#">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline">steps</span> Cleats &amp; Footwear
                </span>
<span class="font-label-xs text-label-xs px-2 py-0.5 rounded-full bg-surface-container text-outline">15</span>
</a>
<a class="flex items-center justify-between py-1 px-1.5 rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" href="#">
<span class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline">shield</span> Bibs &amp; Accessories
                </span>
<span class="font-label-xs text-label-xs px-2 py-0.5 rounded-full bg-surface-container text-outline">14</span>
</a>
</div>
</div>
<!-- Section 2: Sports Matrix -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary mb-space-sm">Discipline / Sport</h3>
<div class="flex flex-col gap-2 font-body-sm text-body-sm">
<label class="flex items-center justify-between cursor-pointer group">
<span class="flex items-center gap-2 text-secondary">
<input checked="" class="w-4 h-4 rounded bg-surface-container-highest text-primary-container focus:ring-0 cursor-pointer accent-primary-container" type="checkbox">
<span class="">Football (Soccer)</span>
</span>
<span class="font-label-xs text-label-xs text-outline">38 Kits</span>
</label>
<label class="flex items-center justify-between cursor-pointer group">
<span class="flex items-center gap-2 text-on-surface-variant group-hover:text-on-surface">
<input class="w-4 h-4 rounded bg-surface-container-highest text-primary-container focus:ring-0 cursor-pointer accent-primary-container" type="checkbox">
<span class="">Cricket (Match &amp; Whites)</span>
</span>
<span class="font-label-xs text-label-xs text-outline">29 Kits</span>
</label>
<label class="flex items-center justify-between cursor-pointer group">
<span class="flex items-center gap-2 text-on-surface-variant group-hover:text-on-surface">
<input class="w-4 h-4 rounded bg-surface-container-highest text-primary-container focus:ring-0 cursor-pointer accent-primary-container" type="checkbox">
<span class="">Basketball (Reversible)</span>
</span>
<span class="font-label-xs text-label-xs text-outline">18 Kits</span>
</label>
<label class="flex items-center justify-between cursor-pointer group">
<span class="flex items-center gap-2 text-on-surface-variant group-hover:text-on-surface">
<input class="w-4 h-4 rounded bg-surface-container-highest text-primary-container focus:ring-0 cursor-pointer accent-primary-container" type="checkbox">
<span class="">Rugby High-Tensile</span>
</span>
<span class="font-label-xs text-label-xs text-outline">14 Kits</span>
</label>
<label class="flex items-center justify-between cursor-pointer group">
<span class="flex items-center gap-2 text-on-surface-variant group-hover:text-on-surface">
<input class="w-4 h-4 rounded bg-surface-container-highest text-primary-container focus:ring-0 cursor-pointer accent-primary-container" type="checkbox">
<span class="">Volleyball QuickDry</span>
</span>
<span class="font-label-xs text-label-xs text-outline">12 Kits</span>
</label>
<label class="flex items-center justify-between cursor-pointer group">
<span class="flex items-center gap-2 text-on-surface-variant group-hover:text-on-surface">
<input class="w-4 h-4 rounded bg-surface-container-highest text-primary-container focus:ring-0 cursor-pointer accent-primary-container" type="checkbox">
<span class="">Track &amp; Athletics</span>
</span>
<span class="font-label-xs text-label-xs text-outline">22 Kits</span>
</label>
</div>
</div>
<!-- Section 3: Customization Method -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary mb-space-sm">Factory Production Type</h3>
<div class="space-y-2">
<label class="p-2 rounded bg-surface-container flex items-start gap-2.5 cursor-pointer">
<input checked="" class="mt-0.5 text-primary accent-primary-container" name="custom_type" type="radio">
<div>
<div class="font-label-md text-label-md text-secondary font-semibold">Full Bespoke Sublimation</div>
<div class="font-label-xs text-label-xs text-outline leading-tight mt-0.5">Edge-to-edge ink infused, zero weight gradient matching</div>
</div>
</label>
<label class="p-2 rounded bg-surface-container-low hover:bg-surface-container flex items-start gap-2.5 cursor-pointer transition-colors">
<input class="mt-0.5 text-primary accent-primary-container" name="custom_type" type="radio">
<div>
<div class="font-label-md text-label-md text-on-surface font-semibold">Semi-Custom Stock Overlay</div>
<div class="font-label-xs text-label-xs text-outline leading-tight mt-0.5">Pre-tailored chassis with personalized team heat seal</div>
</div>
</label>
<label class="p-2 rounded bg-surface-container-low hover:bg-surface-container flex items-start gap-2.5 cursor-pointer transition-colors">
<input class="mt-0.5 text-primary accent-primary-container" name="custom_type" type="radio">
<div>
<div class="font-label-md text-label-md text-on-surface font-semibold">Industrial High-Density Embroidery</div>
<div class="font-label-xs text-label-xs text-outline leading-tight mt-0.5">High stitch-count crests &amp; sponsor patches</div>
</div>
</label>
</div>
</div>
<!-- Section 4: Dynamic Price Slider -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<div class="flex items-center justify-between mb-space-xs">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary">Price Window (LKR)</h3>
<span class="font-label-xs text-label-xs font-semibold text-secondary-fixed" id="price-display">LKR 1,500 - 25,000</span>
</div>
<input class="w-full accent-secondary-fixed cursor-pointer my-space-xs" max="25000" min="1500" step="500" type="range" value="18000">
<div class="flex items-center justify-between font-label-xs text-label-xs text-outline mb-space-sm">
<span class="">LKR 1,500</span>
<span class="">LKR 25,000+</span>
</div>
<div class="grid grid-cols-3 gap-1">
<button class="bg-surface-container hover:bg-surface-container-high py-1 px-1.5 rounded font-label-xs text-label-xs text-on-surface-variant text-center transition-colors">&lt; 3,500</button>
<button class="bg-surface-container hover:bg-surface-container-high py-1 px-1.5 rounded font-label-xs text-label-xs text-on-surface-variant text-center transition-colors">3.5k - 8k</button>
<button class="bg-surface-container hover:bg-surface-container-high py-1 px-1.5 rounded font-label-xs text-label-xs text-on-surface-variant text-center transition-colors">8,000+</button>
</div>
</div>
<!-- Section 5: Size Grid Selector -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary mb-space-sm">Athletic Sizing Matrix</h3>
<div class="grid grid-cols-4 gap-1.5 font-label-md text-label-md">
<button class="py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-secondary hover:bg-surface-bright transition-all">XS</button>
<button class="py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-secondary hover:bg-surface-bright transition-all">S</button>
<button class="py-1.5 rounded bg-primary-container text-on-primary-container font-semibold transition-all">M</button>
<button class="py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-secondary hover:bg-surface-bright transition-all">L</button>
<button class="py-1.5 rounded bg-primary-container text-on-primary-container font-semibold transition-all">XL</button>
<button class="py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-secondary hover:bg-surface-bright transition-all">2XL</button>
<button class="py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-secondary hover:bg-surface-bright transition-all">3XL</button>
<button class="py-1.5 rounded bg-surface-container text-on-surface-variant hover:text-secondary hover:bg-surface-bright transition-all">4XL</button>
</div>
<button class="w-full mt-2 py-1 rounded bg-surface-container hover:bg-surface-container-high text-outline text-label-xs font-label-xs uppercase tracking-wider transition-colors">
              Junior / Youth Sizes (6Y-14Y)
            </button>
</div>
<!-- Section 6: Color Swatches -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary mb-space-sm">Palette Matching</h3>
<div class="flex flex-wrap gap-2">
<button class="w-6 h-6 rounded-full bg-secondary-container ring-2 ring-secondary-container shadow-sm" title="Electric Volt"></button>
<button class="w-6 h-6 rounded-full bg-tertiary-container shadow-sm" title="Crimson Red"></button>
<button class="w-6 h-6 rounded-full bg-primary-container shadow-sm" title="Royal Blue"></button>
<button class="w-6 h-6 rounded-full bg-surface-container-lowest ring-1 ring-outline shadow-sm" title="Jet Black"></button>
<button class="w-6 h-6 rounded-full bg-amber-400 shadow-sm" title="Athletic Gold"></button>
<button class="w-6 h-6 rounded-full bg-secondary shadow-sm" title="Pure White"></button>
<button class="w-6 h-6 rounded-full bg-orange-500 shadow-sm" title="Neon Orange"></button>
<button class="w-6 h-6 rounded-full bg-emerald-600 shadow-sm" title="Forest Green"></button>
</div>
</div>
<!-- Section 7: Fabric Technology Chips -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary mb-space-sm">Technical Fabric Knit</h3>
<div class="flex flex-wrap gap-1.5">
<span class="px-2 py-1 rounded bg-surface-container text-primary font-label-xs text-label-xs tracking-wider uppercase cursor-pointer hover:bg-surface-bright">DryWick Pro (160 GSM)</span>
<span class="px-2 py-1 rounded bg-surface-container text-on-surface-variant font-label-xs text-label-xs tracking-wider uppercase cursor-pointer hover:bg-surface-bright">HydroShield 4-Way</span>
<span class="px-2 py-1 rounded bg-surface-container text-on-surface-variant font-label-xs text-label-xs tracking-wider uppercase cursor-pointer hover:bg-surface-bright">AirMesh 3D Flank</span>
<span class="px-2 py-1 rounded bg-surface-container text-on-surface-variant font-label-xs text-label-xs tracking-wider uppercase cursor-pointer hover:bg-surface-bright">RipStop Rugby 240 GSM</span>
<span class="px-2 py-1 rounded bg-surface-container text-on-surface-variant font-label-xs text-label-xs tracking-wider uppercase cursor-pointer hover:bg-surface-bright">ThermoFleece Pro</span>
</div>
</div>
<!-- Section 8: Lead Time / Availability -->
<div class="bg-surface-container-low rounded-xl p-space-md shadow-sm">
<h3 class="font-label-lg text-label-lg uppercase tracking-wider text-secondary mb-space-sm">Production Availability</h3>
<div class="space-y-1.5 font-body-sm text-body-sm">
<label class="flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded bg-surface-container-highest accent-secondary-fixed" type="checkbox">
<span class="text-secondary font-medium">In Stock (Dispatched 24H)</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded bg-surface-container-highest accent-secondary-fixed" type="checkbox">
<span class="text-on-surface-variant">Made to Order (3-5 Days)</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input class="rounded bg-surface-container-highest accent-secondary-fixed" type="checkbox">
<span class="text-on-surface-variant">Bulk Team Quotas (25+ Pcs)</span>
</label>
</div>
</div>
</aside>
<!-- ======================= RIGHT PRODUCT CATALOG ======================= -->
<main class="lg:col-span-9 flex flex-col gap-space-lg">
<!-- Product Grid Container: Switchable through JS -->
<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-4 lg:gap-6" id="product-grid">
<!-- PRODUCT 1: CRICKET MATCH KIT -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="High-spec modern custom sublimated cricket colored match jersey with sharp electric volt and cobalt geometric dynamic patterns, displayed on a mannequin in a dark industrial factory setting with subtle rim lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDE8jJv2sgfIbIVC-nk2D5tYajqIRAPyRdL5D7c3UfSRXKxkyFfWevauc3IzcWrMfPH-v_wiOxRfUPZgcXTa73UZEDFfFea-XxW0isizSCDpLw6QHjHhrSzjcLanwFQa5sh6RbYcBpn622Awg6ufLAC6Y8PEuQYU536lD01vDcQJI83eMEpy_Ozjm10rpT81uWKeSU1nA80CnHvAMJhzxdwprT34zothkw6ymgRmiYWB4wxAHMfqhZSMw">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-tertiary-container text-on-tertiary-container font-label-xs text-label-xs px-2 py-0.5 rounded font-bold uppercase tracking-wider shadow-sm">-25% FLASH</span>
<span class="bg-surface-container-lowest/90 text-secondary-fixed font-label-xs text-label-xs px-2 py-0.5 rounded font-medium tracking-wider backdrop-blur-md uppercase">180 GSM DRY</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
<div class="absolute bottom-2 left-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex items-center justify-center gap-1 bg-surface-container-lowest/90 backdrop-blur-md p-1 rounded-lg">
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">S</button>
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">M</button>
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">L</button>
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">XL</button>
</div>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Cricket Coloured Kits</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.9 (42)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Predator T20 Match Kit
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Engineered for high humidity, anti-snag weave with mesh side gussets.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<div class="flex items-baseline gap-1.5">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 4,850</span>
<span class="font-label-xs text-label-xs text-outline line-through">LKR 6,500</span>
</div>
<span class="font-label-xs text-label-xs text-secondary-fixed uppercase">3-Day Ready</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all text-center truncate shadow-[0_0_8px_rgba(202,243,0,0.2)]">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 2: FOOTBALL HOME PRO JERSEY -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Athletic slim fit soccer jersey in royal cobalt blue with sharp white collar accents and industrial sublimation crest on high-performance athletic display." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCt4krYXHJitKltakbHJAre4nNOj7csf0dHeV_pgeAZlNHFQ1rUEz0XC0Ld54eHxUJnPqsUcLUrzz1I-HkTZC72nX4gyvzzWLnLg64bYdZfqfHqaDn9SRmiKUFbbHLbhlJ5zSbDVWB5BcmFPrW7llXWiLq57FJQagsV7oBn1bDyYC1lxcACWy1l2c4vbUo2pV-9iSdVc0AotBDa6NIAyTfoIxyhaMoOTPlKzFI-_3VSxmXvIMgPunaPw">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-primary-container text-on-primary-container font-label-xs text-label-xs px-2 py-0.5 rounded font-bold uppercase tracking-wider shadow-sm">TOP SELLER</span>
<span class="bg-surface-container-lowest/90 text-on-surface font-label-xs text-label-xs px-2 py-0.5 rounded font-medium tracking-wider backdrop-blur-md uppercase">PRO FIT</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
<div class="absolute bottom-2 left-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex items-center justify-center gap-1 bg-surface-container-lowest/90 backdrop-blur-md p-1 rounded-lg">
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">XS</button>
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">S</button>
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">M</button>
<button class="px-2 py-0.5 rounded text-on-surface hover:bg-primary hover:text-on-primary font-label-xs text-label-xs transition-colors">L</button>
</div>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Football Match Pro</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 5.0 (89)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Apex Striker Home Kit
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    HydroShield micro-knit with heat-bonded silicone chest emblems.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<div class="flex items-baseline gap-1.5">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 4,200</span>
<span class="font-label-xs text-label-xs text-outline">Per Player</span>
</div>
<span class="font-label-xs text-label-xs text-primary uppercase">Direct Stock</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 3: BASKETBALL REVERSIBLE -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Dynamic reversible basketball tank jersey dual-tone black and electric volt yellow layout with breathable open-hole mesh panels on dark technical studio background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa2v2YIV7qgmq8i2kGCoaB729kJMw9uu1iN4q4S0hwAslcWsSq-uyxds4zWTzezHwXO-Al7uAHW-GtVEpwwlU0WF5U77bKT88gIItSe_QS3ktoctss5XJBNhDAIZ2joFggzE2xd2Bc9s4WqE4Y7xgY7KrisfMpLcyftuX3x4k6LM081qyPbPHVbb-C3Hohb9GyN2lnshT6qMu-ZTU3P9UfxuGUsqF3QyInzEP7ghg9vMD7AOS2UNutlQ">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-surface-container-highest text-secondary font-label-xs text-label-xs px-2 py-0.5 rounded font-bold uppercase tracking-wider shadow-sm">REVERSIBLE 2-IN-1</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Basketball League</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.8 (34)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Dual-Vortex Court Tank
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Double-layer featherlight interlock knit. Switch Home/Away effortlessly.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 5,100</span>
<span class="font-label-xs text-label-xs text-secondary-fixed uppercase">Made to Order</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 4: RUGBY HEAVY-TENSILE MATCH KIT -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Rugby match kit reinforced heavy-duty collar with crimson red and charcoal geometric ripstop paneling shot with stark athletic lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgCsD2lNQP97tBNSR5YiJ-efS6qkPRqBWiUh4Pt7lxSGUNOFipJZJWHwd7x3xmxm9evMsrMt05NR9ImriBlKwVZNsKOgGIXpa57__ZgmNoIEHGs2RHq-bBJVRy7jhLIo1an5LV7QmKrzAKRtDsHCHyIU2jkwxXfB7bxMe1hvbEx3sw8658oRN7nMKbjepAwvV2BGIRw1wNeAaa_hbdME89fD2B6Ur1G_2yJkXDBjYGUa1bAaGrLaL9LA">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-surface-container-lowest/90 text-primary font-label-xs text-label-xs px-2 py-0.5 rounded font-bold tracking-wider backdrop-blur-md uppercase">260 GSM REINFORCED</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Rugby High-Tensile</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.9 (51)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Titan RipStop Rugby Kit
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Bar-tack reinforced stretch collar, grab-resistant body contouring.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 5,800</span>
<span class="font-label-xs text-label-xs text-outline uppercase">Bulk Tier Available</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 5: PRO TRACKSUIT -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="High-neck full zip athletic warmup tracksuit jacket in deep carbon black with razor-thin electric blue shoulder piping on athletic model." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwAjDKBiLKfVGpgR-HiL7jyyMJBYq9P5RdcJ-VTUbLeLzMWm4MavbfSqAHdJLUNbvhviVlnuX1JqKHh5dghJEX1Osfil2LmvKUbO7GQQ32VfbjCUWITBvOZOZ-Q4waLtIxpXi4ve1IkuKomIuBtHz6urGRslGhUkKWnWC-gXk2_Mw8F4v-ULj4agkX4UIQ4zkRIIVnqH78pVD3bgte5lCLHy0xgveFVEa22rDIVluNkxvW35g1_9KF5w">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-primary-container text-on-primary-container font-label-xs text-label-xs px-2 py-0.5 rounded font-bold uppercase tracking-wider shadow-sm">NEW SPEC</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Sideline Tracksuits</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.7 (23)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Velocity Pro Track Jacket
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    ThermoPoly wind-resistant weave with moisture exhaust back venting.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 7,900</span>
<span class="font-label-xs text-label-xs text-secondary-fixed uppercase">In Stock</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 6: CRICKET TEST WHITES -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Traditional pristine white cricket match polo shirt and trousers kit with subtle dark green woven team collar trims hanging in professional dressing room." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9HnZcR7WmJxxCSBCJfpezhsrkv0CRKgIrfwsSEVDu1mYXGRMA2vbra7uEnqc1ekQ3s6qyZIidTMIl-7e7upUYjhWia1MsTTy7n5XiV_0dpZb107roV_uSq6B4O_IgjCgoAS8t7f5pbYaq5o4XvKxxx0sBUDUoQkIaAEDNLaRre7AXW8pfyxgQQ5SCne8SG_uIBqfTLldVG0QIdHekLdS4Fvh7zTFRBOgjphmNvYQ6RBRKMhzBXAOdMA">
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Cricket Whites</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.9 (67)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Club Test Match Whites (Set)
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    UV 50+ SunShield treated poly-cotton blend with flex knee articulation.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 6,400</span>
<span class="font-label-xs text-label-xs text-primary uppercase">Ready to Ship</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 7: VOLLEYBALL COMPRESSION WEAR -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Sleek short sleeve volleyball performance top in vibrant gradient neon orange with black technical flatlock seams in studio lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUXjvwZJBLQRRYtPyMzUqf7dXNy8hJgOvDOgnlebmSakUmZxdaYmJTakf9czOFb2s4tm9lYVWkkOjuaQK4q8FZE24aL1bdN1iBLTEsB8rv9P7e4-9bHO87k1iSTgjxRDgLFCmhxvIerfUedcznxC7gKgl92nNZcBlECA-8eS3g-Fx5zTSWpvKYRqjsSausmCtmvnPxK1DmErIgqDTmsXzIBm_jhJP6WDS0mRVanCMoDNW8wKzI1mhXqg">
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Volleyball Uniforms</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.6 (19)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Spike-Pro Sublimated Top
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Zero-drag seam construction engineered for maximum spike velocity.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 3,650</span>
<span class="font-label-xs text-label-xs text-secondary-fixed uppercase">3-Day Ready</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 8: HIGH-TRACTION FOOTBALL CLEATS -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="High performance football firm ground soccer boots in matte black with volt yellow chevron molded studs and chrome heel counter on dark textured surface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZ_ObAgW7nx8TNCBZ5uRWpRm17DUxoOl21PYJibcIFZAAJaMq9B9191QefdAWCc9dyg4N4nM6jS5_yu1TJL2yXpFNU2w9QHytxASCWuSt3Q8_Hwjx2eQuQ8Y-E3-71olZd3sOlesmZzv1iKTPXdnGLb94FQ6kujk1kcKffafyGsQ9a8tOC-oQZM-RPeFy9XBH6dozQnPeCldX0nZJmMXexYFSAN103wo_cXYzW4YvsnCJ6b4yjytTQxw">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-surface-container-highest text-secondary font-label-xs text-label-xs px-2 py-0.5 rounded font-bold uppercase tracking-wider shadow-sm">FIRM GROUND FG</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Cleats &amp; Footwear</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.9 (98)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Torque-X Carbon FG Cleats
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Reinforced micro-fiber skin with explosive carbon composite soleplate.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 16,500</span>
<span class="font-label-xs text-label-xs text-outline uppercase">Direct Stock</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-surface-container-highest hover:bg-surface-bright text-on-surface font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      SPEC SHEET
                    </button>
<button class="py-1.5 px-2 bg-primary-container hover:bg-primary-fixed-dim text-on-primary-container font-label-md text-label-md uppercase rounded font-bold tracking-wide transition-all flex items-center justify-center gap-1">
<span class="material-symbols-outlined text-[16px]">shopping_bag</span> BUY NOW
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 9: TRAINING PERFORMANCE TEE -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Athletic training compression dry-fit shirt in carbon gray with laser perforated ventilations across shoulders and back on sports mannequin." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxFIOkR7y_22Nzs8IA34lfJJl6svsYIkWuz45m1Rh-_AFOud-xK0GgiENv4T5R9rwwreEk-YOmvHiTq-eEjzvJeJFh6TWgHr7vKZBaOFHQq9XTM6BzPQaDgYLH-78kEOlc6q8HxwDJKkTbpWWyN5ewq_gIgfu5XM_ozqNRLXgqdHH6BcmFVwYLDGlGd4F3y1SFSxKukaO8xrM4JVMhT8dHgOmnPmR6PuRojEi1HkSbHfUE6CJv-2IV6w">
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Training &amp; Gym</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.7 (44)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    AeroVent Technical Tee
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Ultra-light 140 GSM poly blend with anti-microbial silver ion coating.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 2,650</span>
<span class="font-label-xs text-label-xs text-secondary-fixed uppercase">Bulk Discount</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 10: SUBLIMATED WARM-UP BIBS (PACK OF 12) -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Stack of vibrant neon training pinnies bibs in volt yellow and electric coral red with printed team squad numbers in industrial athletic locker." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQiQoruMPnhrhnkflBkLw4dmJgiXTLzYUtDYfnppBcDU6bTHwoW8Nytpv7s_37qtdHp5pvjLKhlUdC7J3ilgpqVZnxmF6rzNbU7S1Ogh7QaCxwfY66tXWoxjsGvtPZOHTvPZqiIsV7Yh2byRr9U1WseqnDmr6t7Fhjot5rfD4FyYWN92fblg-xIeSz62XiBsl2_tAEtQs00Yk5Yn-8_aChtyyPu6FgzDwCwYMi2h2INocMC729QHx4CQ">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-surface-container-lowest/90 text-secondary-fixed font-label-xs text-label-xs px-2 py-0.5 rounded font-bold uppercase tracking-wider">TEAM PACK (12 PCS)</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Bibs &amp; Accessories</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 5.0 (27)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Squad Training Bibs (12-Pack)
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Heavy-duty breathable micro-mesh, numbered front &amp; back. Tear proof.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 9,600</span>
<span class="font-label-xs text-label-xs text-primary uppercase">Ready to Ship</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      NUMBERING
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 11: FOOTBALL AWAY SUB-KIT -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Modern football away jersey in arctic white with slate grey digital pixel camouflage patterns and sleek minimal branding against dark stadium lights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2_2AKRGfYFt5Bz9QPJ0h8i-Rrbs73WDgtZ9V0CF_-YT1i1Pi74ayVDrYhiO228FtTJ_WG-SIeAVv2rNJBYa3yE-rV8lDJLMf2SGUCOCyRglo_VargYPYyUTslXrOTHT95zagTWuDd_UNm-bZIYbHKmSTluuvPSCQe7LsGoMUL6pSiGL7T3rLi3x8EE1PPgbsJo_e8RE578rBwDJMIja8H7wrWaihGHMzKKaz2omUiyZ2EcQlNpTXZpg">
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Football Match Pro</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 4.8 (37)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    Glacier Away Match Shirt
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Precision heat-applied crest ready, moisture channel technology.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 4,200</span>
<span class="font-label-xs text-label-xs text-secondary-fixed uppercase">3-Day Ready</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
<!-- PRODUCT 12: ATHLETIC HEAVY GYM HOODIE -->
<article class="group bg-surface-container-low hover:bg-surface-container rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full border border-outline-variant/20 hover:border-primary/40">
<div class="relative w-full aspect-[4/5] bg-surface-container-lowest overflow-hidden rounded-t-xl">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Heavyweight athletic gym pullover hoodie in charcoal heather with structured kangaroo pocket and reflective sleeve logo in athletic workshop setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2ZOatdGQENLofUxaXbqhiYAVDo7rcUP75TGhEvIR1Mzzlt9-MpLXqHxQ-SOXxxhdAPgSOWyr7JEny9QLPlGfl-bS3VFqzjLlVJQXFcSwfFO57IkE1ooN7fwM5LyUcxEL1UIvY4HwCCn-wCCVmygopgLS0bQFB0rCMbZ5ITzFhoJ9yitZ0HCTQo7nRXYo4gqM9S7H8zgwDBnWndOWUTBzN_dR3a8xHHf_I3kKdtdD6OEzM8p71I1bTbQ">
<div class="absolute top-2 left-2 flex flex-col gap-1">
<span class="bg-surface-container-lowest/90 text-on-surface font-label-xs text-label-xs px-2 py-0.5 rounded font-bold uppercase tracking-wider">340 GSM FLEECE</span>
</div>
<button aria-label="Add to Wishlist" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 hover:bg-surface-bright text-on-surface hover:text-tertiary flex items-center justify-center transition-all shadow-sm">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-space-sm flex flex-col flex-1 justify-between">
<div>
<div class="flex items-center justify-between text-outline font-label-xs text-label-xs uppercase tracking-wider mb-1">
<span class="">Training &amp; Gym</span>
<span class="text-secondary-fixed flex items-center gap-0.5"><span class="material-symbols-outlined text-[13px] fill-current">star</span> 5.0 (62)</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary group-hover:text-primary transition-colors line-clamp-1">
                    IronCore Sublimated Hoodie
                  </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">
                    Double-brushed interior with sublimated inside hood lining for club badges.
                  </p>
</div>
<div class="mt-space-sm pt-space-xs border-t border-surface-container-highest/50">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-headline-md text-headline-sm text-secondary font-bold">LKR 6,950</span>
<span class="font-label-xs text-label-xs text-secondary-fixed uppercase">Made to Order</span>
</div>
<div class="grid grid-cols-2 gap-1.5">
<button class="py-1.5 px-2 bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-md text-label-md uppercase font-bold rounded tracking-wide transition-all">
                      CUSTOMIZE
                    </button>
<button class="py-1.5 px-2 bg-surface-container-high hover:bg-surface-bright text-on-surface text-[10px] sm:text-xs uppercase font-bold rounded tracking-wider transition-all flex items-center justify-center gap-0.5 sm:gap-1">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span> BUY
                    </button>
</div>
</div>
</div>
</article>
</div>
<!-- ======================= INDUSTRIAL FACTORY TRUST BANNER ======================= -->
<div class="bg-gradient-to-r from-surface-container-low via-surface-container to-surface-container-low rounded-xl p-space-lg shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-xl bg-primary-container/20 flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[28px]">sports_score</span>
</div>
<div class="flex flex-col">
<h4 class="font-headline-sm text-headline-sm uppercase text-secondary tracking-wide">Ordering for an entire club or school tournament?</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Lock in tier discounts starting from 25 jerseys. Free digital mockup render within 24 hours.</p>
</div>
</div>
<a class="shrink-0 bg-primary-container hover:bg-primary-fixed-dim text-on-primary-container font-label-lg text-label-lg uppercase px-space-md py-2.5 rounded font-bold tracking-wider transition-all shadow-md" href="#">
              DIRECT WHOLESALE QUOTE
            </a>
</div>
<!-- ======================= PAGINATION BAR ======================= -->
<nav aria-label="Catalog Navigation" class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-sm pb-space-lg">
<div class="font-label-md text-label-md text-on-surface-variant">
              Showing <span class="text-secondary font-bold">1 - 12</span> of <span class="text-secondary font-bold">148</span> High-Performance Articles
            </div>
<div class="flex items-center gap-1 bg-surface-container-low p-1 rounded-xl shadow-sm">
<button aria-label="Previous Page" class="p-2 rounded hover:bg-surface-container text-outline hover:text-secondary disabled:opacity-40 transition-colors" disabled="">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<button class="w-9 h-9 rounded bg-primary-container text-on-primary-container font-label-md text-label-md font-bold transition-all shadow-sm">1</button>
<button class="w-9 h-9 rounded text-on-surface-variant hover:text-secondary hover:bg-surface-container font-label-md text-label-md transition-all">2</button>
<button class="w-9 h-9 rounded text-on-surface-variant hover:text-secondary hover:bg-surface-container font-label-md text-label-md transition-all">3</button>
<span class="px-2 text-outline font-label-md text-label-md">...</span>
<button class="w-9 h-9 rounded text-on-surface-variant hover:text-secondary hover:bg-surface-container font-label-md text-label-md transition-all">12</button>
<button aria-label="Next Page" class="p-2 rounded hover:bg-surface-container text-outline hover:text-secondary transition-colors">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</nav>
</main>
</div>
</section>
<!-- FLOATING RECENTLY VIEWED / LIVE FACTORY NOTIFIER -->
<div class="fixed bottom-4 right-4 z-40 max-w-sm w-full bg-surface-container-high/95 backdrop-blur-xl rounded-xl p-space-sm shadow-2xl flex items-center justify-between gap-space-sm transition-all transform translate-y-0" id="sticky-factory-dock">
<div class="flex items-center gap- space-sm">
<div class="relative w-10 h-10 rounded-lg overflow-hidden bg-surface-container shrink-0">
<img class="w-full h-full object-cover" data-alt="Small thumbnail preview of predator cricket match jersey." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXQNlyqeKqrdUx4ONSt3p69o1qKtf0FqAPVL_iy2_k-V3-b1RrW155nF7Ba49Joq0kyrIqpMqD-EyEElLZKdF9aPFe1ao_8y8SFfh4ctCbaQ4LJ7UnRQQ4ZHSuPhHAZ55yr80OWIFezZ2gX0IWaFjw5icRYEW9WkATzY7f9vq1kXVphvyvF8TEGE-2vw3UpK9N_qGp1xI53tM0k7g2eLDhEbRM0whi3tbc0zmJmZgUv1AbrZSyDjlWvQ">
<span class="absolute -top-1 -right-1 w-2.5 h-2.5 rounded-full bg-secondary-fixed"></span>
</div>
<div class="flex flex-col min-w-0">
<div class="font-label-xs text-label-xs text-secondary-fixed uppercase tracking-wider font-semibold">Live Factory Order</div>
<div class="font-label-md text-label-md text-secondary truncate font-medium">St. Peter's College ordered 45x Cricket Kits</div>
</div>
</div>
<button aria-label="Close notification" class="text-outline hover:text-on-surface p-1" onclick="document.getElementById('sticky-factory-dock').style.display='none'">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
</div>
</div>
</div>
<script>
  // Simple layout density switcher
  const gridContainer = document.getElementById('product-grid');
  const btnGrid4 = document.getElementById('btn-grid-4');
  const btnGrid3 = document.getElementById('btn-grid-3');
  const btnList = document.getElementById('btn-list');

  function setActiveBtn(activeBtn) {
    [btnGrid4, btnGrid3, btnList].forEach(b => {
      b.classList.remove('bg-primary-container', 'text-on-primary-container');
      b.classList.add('text-on-surface-variant');
    });
    activeBtn.classList.add('bg-primary-container', 'text-on-primary-container');
    activeBtn.classList.remove('text-on-surface-variant');
  }

  btnGrid4?.addEventListener('click', () => {
    setActiveBtn(btnGrid4);
    gridContainer.className = 'grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md';
  });

  btnGrid3?.addEventListener('click', () => {
    setActiveBtn(btnGrid3);
    gridContainer.className = 'grid grid-cols-1 md:grid-cols-3 gap-space-lg';
  });

  btnList?.addEventListener('click', () => {
    setActiveBtn(btnList);
    gridContainer.className = 'grid grid-cols-1 gap-space-sm';
  });

  // Mobile filter drawer toggler
  const filterTrigger = document.getElementById('mobile-filter-trigger');
  const sidebar = document.getElementById('filter-sidebar');
  filterTrigger?.addEventListener('click', () => {
    sidebar.classList.toggle('hidden');
    sidebar.scrollIntoView({ behavior: 'smooth' });
  });
</script></main>
</main>

<?php
include __DIR__ . '/php/footer.php';
?>