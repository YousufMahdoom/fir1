<?php
$pageTitle = "3D Custom Sublimation Jersey & Apparel Factory | FHR Sports";
$pageDescription = "Interactive 3D team jersey configurator. Customize collars, patterns, colors, club crests, and player rosters directly with our Colombo manufacturing complex.";
$activePage = "sublimation";
include __DIR__ . '/php/header.php';
?>

<main class="w-full pt-16 sm:pt-20 bg-surface relative flex-1 overflow-x-hidden">
<main class="w-full pt-28 bg-surface"><div class="flex flex-col w-full">
<!-- SECTION 1: HERO OVERLAY & ENGINE INTRO -->
<section class="relative w-full overflow-hidden bg-surface-container-lowest -mt-28 pt-36 pb-20">
<div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#0066ff_1px,transparent_1px)] [background-size:24px_24px]"></div>
<div class="absolute top-1/4 right-0 w-96 h-96 bg-primary-container/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="max-w-[1440px] mx-auto px-gutter-mobile lg:px-gutter relative z-10">
<div class="flex flex-col lg:flex-row items-start justify-between gap-space-xl">
<div class="flex flex-col max-w-3xl">
<div class="inline-flex items-center gap-space-xs bg-surface-container-high px-space-sm py-1 rounded-full mb-space-md self-start">
<span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
<span class="font-label-xs text-label-xs uppercase tracking-widest text-secondary-fixed">Factory Direct Engineering • Homagama Facility</span>
</div>
<h1 class="font-display-hero text-headline-lg lg:text-display-hero uppercase text-secondary tracking-tight leading-none mb-space-md">
            CUSTOM SUBLIMATION JERSEY &amp; APPAREL FACTORY
          </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed mb-space-lg">
            Design without limits. Zero color fade, high-definition digital sublimation printing, durable poly-spandex moisture fabrics, custom player names &amp; numbers at zero extra cost.
          </p>
<div class="flex flex-wrap items-center gap-space-md">
<a class="inline-flex items-center justify-center gap-space-xs bg-secondary-container text-on-secondary font-label-lg text-label-lg uppercase tracking-wider px-space-xl py-3 rounded-lg shadow-lg hover:shadow-secondary-container/20 transition-all" href="#customizer">
<span class="material-symbols-outlined text-[20px]">view_in_ar</span>
              Launch 3D Jersey Builder
            </a>
<a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-lg text-label-lg uppercase tracking-wider px-space-lg py-3 rounded-lg shadow-md transition-all" href="#quote-hub">
<span class="material-symbols-outlined text-[20px]">cloud_upload</span>
              Upload Mockup / Vector Kit
            </a>
</div>
</div>
<!-- Metric Telemetry Panel -->
<div class="grid grid-cols-2 gap-space-sm w-full lg:w-80 shrink-0">
<div class="bg-surface-container p-space-md rounded-xl shadow-sm">
<div class="font-label-xs text-label-xs text-outline uppercase tracking-wider mb-1">Lead Time Guarantee</div>
<div class="font-headline-md text-headline-md text-secondary uppercase">7-10 Days</div>
<div class="font-body-sm text-body-sm text-primary flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">bolt</span> Rapid Prototyping
            </div>
</div>
<div class="bg-surface-container p-space-md rounded-xl shadow-sm">
<div class="font-label-xs text-label-xs text-outline uppercase tracking-wider mb-1">Color Fidelity</div>
<div class="font-headline-md text-headline-md text-secondary-fixed uppercase">Ultra HD</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-1">360 DPI Digital Print</div>
</div>
<div class="bg-surface-container p-space-md rounded-xl shadow-sm">
<div class="font-label-xs text-label-xs text-outline uppercase tracking-wider mb-1">Custom Badges &amp; Names</div>
<div class="font-headline-md text-headline-md text-secondary uppercase">LKR 0.00</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-1">Unlimited Customization</div>
</div>
<div class="bg-surface-container p-space-md rounded-xl shadow-sm">
<div class="font-label-xs text-label-xs text-outline uppercase tracking-wider mb-1">Durability Wash Life</div>
<div class="font-headline-md text-headline-md text-primary uppercase">200+ Cycles</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-1">Zero Peeling or Cracking</div>
</div>
</div>
</div>
</div>
</section>
<!-- SECTION 2: LIVE 3D INTERACTIVE KIT BUILDER PREVIEW COMPONENT -->
<section class="w-full bg-surface-container-low py-space-xl" id="customizer">
<div class="max-w-[1440px] mx-auto px-gutter-mobile lg:px-gutter">
<!-- Section Tagline -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
<div>
<span class="font-label-xs text-label-xs uppercase tracking-widest text-primary font-bold">Interactive Sublimation Engine v3.2</span>
<h2 class="font-headline-lg text-headline-lg uppercase text-secondary reveal-on-scroll">Real-Time Team Jersey Configurator</h2>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
<span class="w-2.5 h-2.5 rounded-full bg-secondary-container inline-block"></span>
<span class="">LIVE SPECIFICATION FEED TO FACTORY FLOOR</span>
</div>
</div>
<!-- Main Configurator Studio Split -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
<!-- LEFT CANVAS: 3D Visualizer -->
<div class="lg:col-span-6 bg-surface-container-lowest p-space-lg rounded-xl flex flex-col justify-between relative shadow-xl">
<!-- View Angle & Canvas Controls -->
<div class="flex items-center justify-between z-20">
<div class="inline-flex bg-surface-container p-1 rounded-lg">
<button class="px-space-sm py-1 rounded font-label-md text-label-md uppercase bg-primary-container text-on-primary-container" id="view-front-btn" onclick="setView('front')">Front View</button>
<button class="px-space-sm py-1 rounded font-label-md text-label-md uppercase text-on-surface-variant hover:text-on-surface" id="view-back-btn" onclick="setView('back')">Back View</button>
<button class="px-space-sm py-1 rounded font-label-md text-label-md uppercase text-on-surface-variant hover:text-on-surface" id="view-sleeve-btn" onclick="setView('sleeves')">Sleeves Detail</button>
</div>
<div class="flex items-center gap-space-xs">
<span class="font-label-xs text-label-xs bg-surface-container-high px-2 py-1 rounded text-primary" id="fabric-gsm-badge">AirVent • 160 GSM</span>
<button class="w-8 h-8 rounded bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-secondary" onclick="resetKitDefaults()" title="Reset Spec">
<span class="material-symbols-outlined text-[18px]">restart_alt</span>
</button>
</div>
</div>
<!-- Interactive Graphic SVG Mockup Area -->
<div class="relative w-full aspect-square my-space-md flex items-center justify-center select-none overflow-hidden bg-gradient-to-b from-surface-container/30 to-surface-container-lowest rounded-lg">
<!-- Dynamic SVG Jersey Vector -->
<svg class="w-full h-full max-h-[460px] drop-shadow-2xl transition-all duration-300" id="jersey-svg" viewBox="0 0 500 500">
<defs>
<!-- Pattern 1: Geometric Lightning -->
<pattern height="60" id="pattern-lightning" patternUnits="userSpaceOnUse" width="60">
<path d="M0 20 L25 0 L30 15 L50 5 L35 35 L45 35 L10 60 L20 35 L0 35 Z" fill="var(--color-pattern)" opacity="0.35"></path>
</pattern>
<!-- Pattern 2: Carbon Camo -->
<pattern height="80" id="pattern-camo" patternUnits="userSpaceOnUse" width="80">
<path d="M10 20 Q 30 10 40 30 T 70 20 T 50 60 T 20 50 Z" fill="var(--color-pattern)" opacity="0.4"></path>
<circle cx="65" cy="70" fill="var(--color-pattern)" opacity="0.25" r="8"></circle>
<path d="M0 70 Q 15 65 30 75 Z" fill="var(--color-pattern)" opacity="0.3"></path>
</pattern>
<!-- Pattern 3: Speed Gradients -->
<pattern height="500" id="pattern-speed" patternUnits="userSpaceOnUse" width="20">
<line opacity="0.35" stroke="var(--color-pattern)" stroke-width="4" x1="0" x2="20" y1="0" y2="500"></line>
<line opacity="0.2" stroke="var(--color-pattern)" stroke-width="2" x1="8" x2="28" y1="0" y2="500"></line>
</pattern>
<!-- Pattern 4: Honeycomb Hex -->
<pattern height="49" id="pattern-hex" patternUnits="userSpaceOnUse" width="28">
<path d="M14 0 L28 8 L28 24 L14 32 L0 24 L0 8 Z M14 49 L28 41 L28 25 L14 33 L0 25 L0 41 Z" fill="none" opacity="0.4" stroke="var(--color-pattern)" stroke-width="1.2"></path>
</pattern>
<linearGradient id="fabricShading" x1="0%" x2="100%" y1="0%" y2="0%">
<stop offset="0%" stop-color="#000" stop-opacity="0.4"></stop>
<stop offset="20%" stop-color="#fff" stop-opacity="0.08"></stop>
<stop offset="50%" stop-color="#fff" stop-opacity="0"></stop>
<stop offset="80%" stop-color="#fff" stop-opacity="0.08"></stop>
<stop offset="100%" stop-color="#000" stop-opacity="0.4"></stop>
</linearGradient>
</defs>
<style>
                :root {
                  --color-primary: #0047ba;
                  --color-secondary: #001233;
                  --color-accent: #caf300;
                  --color-pattern: #ffffff;
                }
              </style>
<!-- Jersey Base Body -->
<g class="transition-opacity duration-300" id="front-view-group">
<!-- Sleeves Left & Right -->
<path d="M 130 90 L 40 160 L 75 225 L 140 185 Z" fill="var(--color-secondary)"></path>
<path d="M 370 90 L 460 160 L 425 225 L 360 185 Z" fill="var(--color-secondary)"></path>
<!-- Left Sleeve Trim -->
<path d="M 40 160 L 50 178 L 85 242 L 75 225 Z" fill="var(--color-accent)"></path>
<!-- Right Sleeve Trim -->
<path d="M 460 160 L 450 178 L 415 242 L 425 225 Z" fill="var(--color-accent)"></path>
<!-- Torso Main Body -->
<path d="M 130 90 C 180 110, 320 110, 370 90 L 360 440 C 300 450, 200 450, 140 440 Z" fill="var(--color-primary)"></path>
<!-- Pattern Torso Overlay -->
<path d="M 130 90 C 180 110, 320 110, 370 90 L 360 440 C 300 450, 200 450, 140 440 Z" fill="url(#pattern-lightning)" id="pattern-layer"></path>
<!-- Athletic Side Contrast Panels -->
<path d="M 130 90 L 145 220 L 140 440 L 160 441 L 165 220 L 155 100 Z" fill="var(--color-accent)" opacity="0.9"></path>
<path d="M 370 90 L 355 220 L 360 440 L 340 441 L 335 220 L 345 100 Z" fill="var(--color-accent)" opacity="0.9"></path>
<!-- Realistic Shading Overlay -->
<path d="M 130 90 C 180 110, 320 110, 370 90 L 360 440 C 300 450, 200 450, 140 440 Z" fill="url(#fabricShading)" pointer-events="none"></path>
<!-- Front Collar Component -->
<g id="collar-round">
<path d="M 195 90 C 215 130, 285 130, 305 90 C 285 110, 215 110, 195 90 Z" fill="var(--color-accent)"></path>
</g>
<!-- Team Badge Crest (Left Chest) -->
<g transform="translate(180, 150)">
<polygon fill="#0f131c" points="0,0 36,0 42,22 18,44 -6,22" stroke="var(--color-accent)" stroke-width="2"></polygon>
<text fill="#ffffff" font-family="Oswald" font-size="11" font-weight="700" text-anchor="middle" x="18" y="24">FHR</text>
<circle cx="18" cy="11" fill="var(--color-accent)" r="3"></circle>
</g>
<!-- Sponsor Logo Placement (Center Chest) -->
<g transform="translate(250, 240)">
<text fill="#ffffff" font-family="Oswald" font-size="28" font-weight="700" id="jersey-sponsor" letter-spacing="2" text-anchor="middle" x="0" y="0">CEYLON PRO</text>
<line stroke="var(--color-accent)" stroke-width="2" x1="-65" x2="65" y1="10" y2="10"></line>
</g>
<!-- Front Small Player Number -->
<text fill="#ffffff" font-family="Oswald" font-size="24" font-weight="700" id="jersey-front-num" text-anchor="middle" x="315" y="175">07</text>
</g>
<!-- Back View Overlay Group (Toggled by JS) -->
<g class="opacity-0 transition-opacity duration-300 pointer-events-none" id="back-view-group">
<!-- Back Torso -->
<path d="M 130 90 C 180 100, 320 100, 370 90 L 360 440 C 300 450, 200 450, 140 440 Z" fill="var(--color-primary)"></path>
<path d="M 130 90 C 180 100, 320 100, 370 90 L 360 440 C 300 450, 200 450, 140 440 Z" fill="url(#pattern-lightning)" id="pattern-layer-back"></path>
<path d="M 130 90 C 180 100, 320 100, 370 90 L 360 440 C 300 450, 200 450, 140 440 Z" fill="url(#fabricShading)" pointer-events="none"></path>
<!-- Back Player Name -->
<text fill="#ffffff" font-family="Oswald" font-size="36" font-weight="700" id="jersey-name" letter-spacing="4" text-anchor="middle" x="250" y="165">FERNANDO</text>
<!-- Back Big Player Number -->
<text fill="var(--color-accent)" font-family="Oswald" font-size="118" font-weight="700" id="jersey-back-num" text-anchor="middle" x="250" y="295">07</text>
<!-- Sublimation Factory Mark -->
<text fill="#ffffff" font-family="Inter" font-size="9" font-weight="600" letter-spacing="2" opacity="0.6" text-anchor="middle" x="250" y="420">ENGINEERED BY FHR FACTORY • SRI LANKA</text>
</g>
</svg>
<!-- Rotation / Zoom Quick Badge -->
<div class="absolute bottom-3 left-3 bg-surface-container-high/90 backdrop-blur px-2.5 py-1 rounded text-outline font-label-xs text-label-xs flex items-center gap-1.5">
<span class="material-symbols-outlined text-[14px] text-secondary-fixed">sync</span>
              360° DIGITAL TWIN PREVIEW
            </div>
</div>
<!-- Bottom Live Sublimation Info Bar -->
<div class="bg-surface-container p-space-sm rounded-lg flex flex-wrap items-center justify-between gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="font-label-md text-label-md text-on-surface">Collar Selected:</span>
<span class="font-label-md text-label-md text-primary font-bold" id="current-collar-text">V-Neck Modern</span>
</div>
<div class="flex items-center gap-space-xs font-label-md text-label-md">
<span class="text-outline">Sport:</span>
<span class="text-secondary-fixed font-bold" id="current-sport-text">Football Pro Kit</span>
</div>
</div>
</div>
<!-- RIGHT CANVAS: Step-By-Step Kit Customizer Controls -->
<div class="lg:col-span-6 bg-surface-container p-space-lg rounded-xl shadow-xl flex flex-col gap-space-lg">
<!-- STEP 1: Sport Selection -->
<div>
<div class="flex items-center justify-between mb-space-xs">
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary flex items-center gap-1">
<span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-xs">1</span>
                Sport Type Pattern Cut
              </label>
<span class="font-label-xs text-label-xs text-outline">Anatomical Fit Spec</span>
</div>
<div class="grid grid-cols-3 sm:grid-cols-5 gap-space-xs">
<button class="sport-btn active bg-primary-container text-on-primary-container p-2 rounded flex flex-col items-center gap-1 text-center transition-all" onclick="setSport('Football', this)">
<span class="material-symbols-outlined text-[20px]">sports_soccer</span>
<span class="font-label-xs text-label-xs uppercase font-bold">Football</span>
</button>
<button class="sport-btn bg-surface-container-high text-on-surface-variant hover:text-on-surface p-2 rounded flex flex-col items-center gap-1 text-center transition-all" onclick="setSport('Cricket', this)">
<span class="material-symbols-outlined text-[20px]">sports_cricket</span>
<span class="font-label-xs text-label-xs uppercase font-bold">Cricket</span>
</button>
<button class="sport-btn bg-surface-container-high text-on-surface-variant hover:text-on-surface p-2 rounded flex flex-col items-center gap-1 text-center transition-all" onclick="setSport('Basketball', this)">
<span class="material-symbols-outlined text-[20px]">sports_basketball</span>
<span class="font-label-xs text-label-xs uppercase font-bold">Basketball</span>
</button>
<button class="sport-btn bg-surface-container-high text-on-surface-variant hover:text-on-surface p-2 rounded flex flex-col items-center gap-1 text-center transition-all" onclick="setSport('Volleyball', this)">
<span class="material-symbols-outlined text-[20px]">sports_volleyball</span>
<span class="font-label-xs text-label-xs uppercase font-bold">Volleyball</span>
</button>
<button class="sport-btn bg-surface-container-high text-on-surface-variant hover:text-on-surface p-2 rounded flex flex-col items-center gap-1 text-center transition-all" onclick="setSport('Rugby', this)">
<span class="material-symbols-outlined text-[20px]">sports_rugby</span>
<span class="font-label-xs text-label-xs uppercase font-bold">Rugby</span>
</button>
</div>
</div>
<!-- STEP 2: Pattern Template & Collar -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary flex items-center gap-1 mb-space-xs">
<span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-xs">2</span>
                Sublimation Pattern
              </label>
<select class="w-full bg-surface-container-lowest text-on-surface p-space-sm rounded-lg font-label-md text-label-md focus:outline-none" id="pattern-selector" onchange="updatePattern(this.value)">
<option value="lightning">Geometric Lightning</option>
<option value="camo">Carbon Camo Tactical</option>
<option value="speed">Speed Gradients</option>
<option value="hex">Honeycomb Hex Tech</option>
<option value="none">Solid Clean Minimal</option>
</select>
</div>
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary flex items-center gap-1 mb-space-xs">
<span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-xs">3</span>
                Collar Construction
              </label>
<select class="w-full bg-surface-container-lowest text-on-surface p-space-sm rounded-lg font-label-md text-label-md focus:outline-none" id="collar-selector" onchange="updateCollar(this.value)">
<option value="V-Neck Modern">V-Neck Modern Pro</option>
<option value="Round Athletic">Round Neck Ribbed</option>
<option value="Athletic Polo">Performance Polo Button</option>
<option value="Mandarin Standing">Mandarin Collar Zip</option>
</select>
</div>
</div>
<!-- STEP 3: Factory Pantone Color Swatches -->
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary flex items-center gap-1 mb-space-xs">
<span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-xs">4</span>
              Color Formulation Palettes
            </label>
<div class="grid grid-cols-3 gap-space-sm">
<!-- Primary Color -->
<div class="bg-surface-container-lowest p-space-sm rounded-lg">
<span class="font-label-xs text-label-xs text-outline block mb-1">Base Torso</span>
<div class="flex items-center gap-2">
<input class="w-8 h-8 rounded bg-transparent cursor-pointer" id="picker-primary" oninput="changePrimaryColor(this.value)" type="color" value="#0047ba">
<span class="font-label-xs text-label-xs uppercase font-mono text-on-surface" id="lbl-primary">#0047BA</span>
</div>
</div>
<!-- Secondary Color -->
<div class="bg-surface-container-lowest p-space-sm rounded-lg">
<span class="font-label-xs text-label-xs text-outline block mb-1">Shoulders / Trim</span>
<div class="flex items-center gap-2">
<input class="w-8 h-8 rounded bg-transparent cursor-pointer" id="picker-secondary" oninput="changeSecondaryColor(this.value)" type="color" value="#001233">
<span class="font-label-xs text-label-xs uppercase font-mono text-on-surface" id="lbl-secondary">#001233</span>
</div>
</div>
<!-- Accent Glow Color -->
<div class="bg-surface-container-lowest p-space-sm rounded-lg">
<span class="font-label-xs text-label-xs text-outline block mb-1">Piping &amp; Numbers</span>
<div class="flex items-center gap-2">
<input class="w-8 h-8 rounded bg-transparent cursor-pointer" id="picker-accent" oninput="changeAccentColor(this.value)" type="color" value="#caf300">
<span class="font-label-xs text-label-xs uppercase font-mono text-on-surface" id="lbl-accent">#CAF300</span>
</div>
</div>
</div>
</div>
<!-- STEP 4: Fabric Selector -->
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary flex items-center gap-1 mb-space-xs">
<span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-xs">5</span>
              Technical Fabric Specification
            </label>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-space-xs">
<div class="fabric-card active p-space-sm bg-surface-container-highest rounded-lg cursor-pointer transition-all" onclick="selectFabric('AirVent Honeycomb (160 GSM)', this)">
<div class="font-label-sm text-label-md text-secondary font-bold">AirVent Honeycomb</div>
<div class="font-label-xs text-label-xs text-primary">160 GSM • Hyper-Breathe</div>
<div class="font-body-sm text-label-xs text-on-surface-variant mt-1">Recommended for Football &amp; Running</div>
</div>
<div class="fabric-card p-space-sm bg-surface-container-lowest rounded-lg cursor-pointer hover:bg-surface-container-high transition-all tilt-card" onclick="selectFabric('Pro-Fit Interlock (180 GSM)', this)">
<div class="font-label-sm text-label-md text-secondary font-bold">Pro-Fit Interlock</div>
<div class="font-label-xs text-label-xs text-outline">180 GSM • Smooth Glide</div>
<div class="font-body-sm text-label-xs text-on-surface-variant mt-1">Ideal for Cricket &amp; Volleyball</div>
</div>
<div class="fabric-card p-space-sm bg-surface-container-lowest rounded-lg cursor-pointer hover:bg-surface-container-high transition-all tilt-card" onclick="selectFabric('Heavy Rugged Twill (220 GSM)', this)">
<div class="font-label-sm text-label-md text-secondary font-bold">Rugged Poly-Shield</div>
<div class="font-label-xs text-label-xs text-outline">220 GSM • Tear-Resistant</div>
<div class="font-body-sm text-label-xs text-on-surface-variant mt-1">Designed for Rugby Collisions</div>
</div>
</div>
</div>
<!-- STEP 5: Live Roster Quick Editor -->
<div>
<div class="flex items-center justify-between mb-space-xs">
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary flex items-center gap-1">
<span class="w-5 h-5 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-xs">6</span>
                Dynamic Roster Sample
              </label>
<button class="font-label-xs text-label-xs text-secondary-fixed hover:underline flex items-center gap-1" onclick="toggleBackViewPreview()">
<span class="material-symbols-outlined text-[14px]">preview</span> Check Back Print
              </button>
</div>
<div class="bg-surface-container-lowest p-space-sm rounded-lg">
<div class="grid grid-cols-12 gap-2 mb-2 font-label-xs text-label-xs text-outline uppercase tracking-wider">
<span class="col-span-5">Player Name</span>
<span class="col-span-3">Number</span>
<span class="col-span-4">Size Fit</span>
</div>
<!-- Row 1 -->
<div class="grid grid-cols-12 gap-2 mb-1.5 items-center">
<input class="col-span-5 bg-surface-container px-2 py-1 rounded text-on-surface font-label-sm text-label-md uppercase" id="sample-name-input" oninput="updateLiveRoster()" type="text" value="FERNANDO">
<input class="col-span-3 bg-surface-container px-2 py-1 rounded text-on-surface font-label-sm text-label-md uppercase font-mono" id="sample-num-input" maxlength="2" oninput="updateLiveRoster()" type="text" value="07">
<select class="col-span-4 bg-surface-container px-2 py-1 rounded text-on-surface font-label-sm text-label-md">
<option>M (Chest 40")</option>
<option selected="">L (Chest 42")</option>
<option>XL (Chest 44")</option>
</select>
</div>
<!-- Row 2 -->
<div class="grid grid-cols-12 gap-2 items-center opacity-70">
<input class="col-span-5 bg-surface-container px-2 py-1 rounded text-on-surface font-label-sm text-label-md uppercase" readonly="" type="text" value="SILVA">
<input class="col-span-3 bg-surface-container px-2 py-1 rounded text-on-surface font-label-sm text-label-md uppercase font-mono" readonly="" type="text" value="10">
<span class="col-span-4 font-label-xs text-label-xs text-on-surface-variant">L • Regular Fit</span>
</div>
</div>
</div>
<!-- STEP 6: Instant Bulk Price Quote Calculator -->
<div class="bg-surface-container-lowest p-space-md rounded-xl">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-headline-sm text-headline-sm uppercase text-secondary">Factory Direct Volume Pricing</span>
<span class="font-label-xs text-label-xs bg-secondary-container text-on-secondary px-2 py-0.5 rounded font-bold uppercase">Islandwide Delivery</span>
</div>
<!-- Volume Slider / Step Selector -->
<div class="grid grid-cols-4 gap-space-xs text-center mb-space-md">
<button class="bulk-tier-btn bg-surface-container p-2 rounded transition-all" onclick="calculateBulk(15, this)">
<div class="font-label-xs text-label-xs text-outline">Tier 1</div>
<div class="font-label-md text-label-md text-secondary font-bold">15 - 24 Kits</div>
<div class="font-label-xs text-label-xs text-primary mt-1">LKR 3,800/pc</div>
</button>
<button class="bulk-tier-btn bg-surface-container p-2 rounded transition-all" onclick="calculateBulk(25, this)">
<div class="font-label-xs text-label-xs text-outline">Tier 2</div>
<div class="font-label-md text-label-md text-secondary font-bold">25 - 49 Kits</div>
<div class="font-label-xs text-label-xs text-primary mt-1">LKR 3,400/pc</div>
</button>
<button class="bulk-tier-btn active bg-primary-container p-2 rounded transition-all" onclick="calculateBulk(50, this)">
<div class="font-label-xs text-label-xs text-on-primary-container">Tier 3 (Club)</div>
<div class="font-label-md text-label-md text-on-primary-container font-bold">50 - 99 Kits</div>
<div class="font-label-xs text-label-xs text-secondary-fixed mt-1">LKR 2,950/pc</div>
</button>
<button class="bulk-tier-btn bg-surface-container p-2 rounded transition-all" onclick="calculateBulk(100, this)">
<div class="font-label-xs text-label-xs text-outline">Tier 4 (Bulk)</div>
<div class="font-label-md text-label-md text-secondary font-bold">100+ Kits</div>
<div class="font-label-xs text-label-xs text-secondary-container mt-1">LKR 2,650/pc</div>
</button>
</div>
<!-- Calculated Summary Bar -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-space-md bg-surface-container-high p-space-md rounded-lg">
<div>
<span class="font-label-xs text-label-xs text-outline uppercase block">Current Production Rate</span>
<div class="flex items-baseline gap-2">
<span class="font-headline-md text-headline-md text-secondary-fixed font-bold" id="quote-unit-price">LKR 2,950</span>
<span class="font-label-sm text-label-md text-on-surface-variant">/ kit (Jersey + Shorts)</span>
</div>
<span class="font-label-xs text-label-xs text-secondary" id="quote-savings-tag">You save 22% vs individual print retail</span>
</div>
<a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-primary-container hover:bg-primary-container/80 text-on-primary-container font-label-md text-label-md uppercase tracking-wider px-space-md py-2.5 rounded font-bold shadow-lg transition-all" href="#quote-hub">
                Lock Specification &amp; Quote
                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- SECTION 3: FACTORY CAPABILITIES & SUBLIMATION ADVANTAGE -->
<section class="w-full bg-surface py-space-xl">
<div class="max-w-[1440px] mx-auto px-gutter-mobile lg:px-gutter">
<!-- Section Header -->
<div class="max-w-2xl mb-space-xl">
<span class="font-label-xs text-label-xs uppercase tracking-widest text-primary font-bold">Precision Textile Manufacturing</span>
<h2 class="font-headline-lg text-headline-lg uppercase text-secondary mt-1 reveal-on-scroll">Engineered For Zero Decay In Heavy Match Play</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
          Sublimation is a molecular bond, not an ink layer glued on top of polyester. Heat fuses disperse dyes directly inside the polymer filament core.
        </p>
</div>
<!-- 3 Key Factory Advantage Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg mb-space-xl">
<!-- Card 1 -->
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col justify-between shadow-sm">
<div>
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-space-md text-primary tilt-card">
<span class="material-symbols-outlined text-[28px]">palette</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary mb-space-xs">Japanese &amp; Italian Dyes</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              We exclusively import certified high-density dispersion inks. Flawless gradient transitions, vibrant neon pantones, and true non-hazy deep blacks rated OEKO-TEX Eco-Passport safe for athletes.
            </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary-fixed">verified</span>
<span class="font-label-xs text-label-xs text-on-surface">200+ Wash Cycle Guarantee</span>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col justify-between shadow-sm">
<div>
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-space-md text-secondary-fixed tilt-card">
<span class="material-symbols-outlined text-[28px]">precision_manufacturing</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary mb-space-xs">Laser-Cut Pattern Sizing</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              Industrial CNC laser tables seal raw fabric edges instantly, preventing seam fraying under intense tackle pressure. Sizing holds consistent down to the millimeter across 1,000+ batch runs.
            </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary-fixed">verified</span>
<span class="font-label-xs text-label-xs text-on-surface">Zero Edge Unraveling</span>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col justify-between shadow-sm">
<div>
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-space-md text-tertiary tilt-card">
<span class="material-symbols-outlined text-[28px]">straighten</span>
</div>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary mb-space-xs">Anti-Chafe Flat-Lock Stitch</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              Using reinforced 4-needle 6-thread industrial interlock machines, our seams lie entirely flush against the player's skin. Prevents runner chafing during high-humidity 90-minute matches.
            </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary-fixed">verified</span>
<span class="font-label-xs text-label-xs text-on-surface">High-Tensile Thread Matrix</span>
</div>
</div>
</div>
<!-- Sublimation vs Screen Print Technical Matrix Table -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-xl overflow-x-auto">
<div class="mb-space-md">
<span class="font-label-xs text-label-xs uppercase tracking-widest text-secondary-fixed font-bold">Industrial Comparison</span>
<h3 class="font-headline-sm text-headline-sm uppercase text-secondary">Why Modern Sports Demands Full Sublimation</h3>
</div>
<div class="responsive-table-wrapper"><table class="w-full text-left font-body-sm text-body-sm">
<thead>
<tr class="bg-surface-container font-label-md text-label-md uppercase tracking-wider text-outline">
<th class="p-space-sm rounded-l">Performance Attribute</th>
<th class="p-space-sm text-primary">FHR Sublimation Tech</th>
<th class="p-space-sm text-on-surface-variant">Traditional Screen Print</th>
<th class="p-space-sm text-on-surface-variant rounded-r">Vinyl Heat Transfer</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<tr>
<td class="p-space-sm font-semibold text-secondary">Breathability &amp; Air Mesh</td>
<td class="p-space-sm text-secondary-fixed font-semibold flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px]">check_circle</span> 100% Breathable (Zero Clogged Pores)
              </td>
<td class="p-space-sm text-on-surface-variant">Plastic ink blocks sweat evaporation</td>
<td class="p-space-sm text-on-surface-variant">Thick plastic film blocks skin breathing</td>
</tr>
<tr>
<td class="p-space-sm font-semibold text-secondary">Color Count &amp; Complexity</td>
<td class="p-space-sm text-secondary-fixed font-semibold flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px]">check_circle</span> Unlimited Gradients, High-Res Art
              </td>
<td class="p-space-sm text-on-surface-variant">Charged per color screen (Expensive)</td>
<td class="p-space-sm text-on-surface-variant">Limited to simple cut shapes</td>
</tr>
<tr>
<td class="p-space-sm font-semibold text-secondary">Weight &amp; Garment Drag</td>
<td class="p-space-sm text-secondary-fixed font-semibold flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px]">check_circle</span> Featherlight (Zero Weight Added)
              </td>
<td class="p-space-sm text-on-surface-variant">Adds heavy gummy weight when wet</td>
<td class="p-space-sm text-on-surface-variant">Heavy stiff patches on chest</td>
</tr>
<tr>
<td class="p-space-sm font-semibold text-secondary">Wash Durability Lifecycle</td>
<td class="p-space-sm text-secondary-fixed font-semibold flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px]">check_circle</span> Permanent (Part of Fabric Fiber)
              </td>
<td class="p-space-sm text-on-surface-variant">Cracks &amp; flakes after 25-30 washes</td>
<td class="p-space-sm text-on-surface-variant">Peels off under tumble dry heat</td>
</tr>
<tr>
<td class="p-space-sm font-semibold text-secondary">Roster Customization (Names/Nos)</td>
<td class="p-space-sm text-secondary-fixed font-semibold flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px]">check_circle</span> FREE Included in Production Flow
              </td>
<td class="p-space-sm text-on-surface-variant">Extra plate cost per player name</td>
<td class="p-space-sm text-on-surface-variant">Expensive individual vinyl pressing</td>
</tr>
</tbody>
</table></div>
</div>
</div>
</section>
<!-- SECTION 4: RECENT TEAM CLIENT SHOWCASE & PORTFOLIO -->
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-[1440px] mx-auto px-gutter-mobile lg:px-gutter">
<!-- Portfolio Intro -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
<div>
<span class="font-label-xs text-label-xs uppercase tracking-widest text-primary font-bold">Field Proven Across South Asia</span>
<h2 class="font-headline-lg text-headline-lg uppercase text-secondary reveal-on-scroll">Recent Factory Production Deployments</h2>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-md">
          Supplying collegiate championships, premier cricket club tournaments, corporate mercantile leagues, and esports teams with race-ready custom uniforms.
        </p>
</div>
<!-- Bento Grid of Real Jersey Showcase -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-xl">
<!-- Showcase Item 1 -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all flex flex-col">
<div class="relative h-64 w-full bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Close up dramatic studio photograph of a Sri Lankan cricket club custom sublimation uniform in rich cobalt blue and gold with intricate lion motif textures and player numbers, professional sports apparel photography dark background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5R8BB7RcJ8HeIcq4xSVG3uDuHNVACVu9PbskDJNrAXmQxXmsPnS5kbD46jDJ2OsMiEC8r5HDZM84KC5cI0DDKy3Zs0K-Qvul8iRU_1RVesiWKfyDm7m3tMAQM9zY6WgFEoGbHZnpBJXVeyqzEQ2OU7dXL-Xzugh3IpXHxCBtH6pce6M4X2eMxmPIslFXd25jTVmYwNGAKP9fkjLmLbMgRzyrmdg7EAwHIR35QSIRk-GkxPSo4Ngfixw">
<div class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur px-2 py-0.5 rounded font-label-xs text-label-xs text-secondary-fixed font-bold uppercase">Cricket Club Pro</div>
</div>
<div class="p-space-md flex flex-col justify-between flex-grow">
<div>
<h4 class="font-headline-sm text-headline-sm uppercase text-secondary">Colombo Lions Premier XI</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">160 GSM CoolDry mesh with gradient sleeve caps and metallic gold crest heat stamp.</p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between text-outline font-label-xs text-label-xs">
<span class="">Qty: 45 Full Kits</span>
<span class="text-primary font-semibold">T20 Tournament Series</span>
</div>
</div>
</div>
<!-- Showcase Item 2 -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all flex flex-col">
<div class="relative h-64 w-full bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Action shot of a football team jersey hanging on athlete locker room stall in neon volt green and carbon grey geometric lightning sublimation pattern with bold sponsor logo, high contrast athletic wear lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7IxSo0N3cXV2c9czlaX1bSNv0Er64SoQiy84d7CH1FHOMv-r45e-LyI6fSYDkc2HiXV7l8gjzGBX3tr6q9Zv2ciT3qDpQPrui9oXY7EQRGFqC9v5inOzIuXYrwqWAq4N6fvY9UVipBOBwqpTvFOhNEHq_S7hlKjtxM9xeXpnO4JvW93EeOMBFhWmeD-7DBdmw4OOKwNwVq6vLYdMRXf7amOiyA5jC541kvPsyGhKOFdNbAeT_SU3dVA">
<div class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur px-2 py-0.5 rounded font-label-xs text-label-xs text-primary font-bold uppercase">Football League</div>
</div>
<div class="p-space-md flex flex-col justify-between flex-grow">
<div>
<h4 class="font-headline-sm text-headline-sm uppercase text-secondary">Apex United FC</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">V-Neck construction in high-stretch poly-elastane, zero fade wash guarantee after season long run.</p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between text-outline font-label-xs text-label-xs">
<span class="">Qty: 80 Match Kits</span>
<span class="text-primary font-semibold">Division 1 Champions</span>
</div>
</div>
</div>
<!-- Showcase Item 3 -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all flex flex-col">
<div class="relative h-64 w-full bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Rugby jersey technical photo showing ultra durable 220 GSM heavy twill reinforced flatlock seams in crimson red and dark navy with rubberized collar insert, industrial sportswear aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPtJsTI_L-7TqKPjPomBzniVuYkZ66cFDygtJ87VzBNlxWkXYS8_BTluFkz416v6AagTeQCcHv5k8g6DqVwoOts4Kw4xhos0aQjBNJ4QeMl2ymhTFugUT90gWAg_iPs_3AtU4fclN8obnQyR1IxCi-3WG_qCuYtCR2xOMtAzXIEXt7G0DuauG9xO7HdenG2AfdjiWYZEuYIeQZxWjXSgz0pXoUgY94v0SXeXtY4eP-NjVHyJnQYCq7pA">
<div class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur px-2 py-0.5 rounded font-label-xs text-label-xs text-tertiary font-bold uppercase">Rugby Championship</div>
</div>
<div class="p-space-md flex flex-col justify-between flex-grow">
<div>
<h4 class="font-headline-sm text-headline-sm uppercase text-secondary">Kandy Hawks RFC</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Rugged 220 GSM heavy fabric with stretch gussets under arms for zero tear during full contact scrums.</p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between text-outline font-label-xs text-label-xs">
<span class="">Qty: 35 Rugged Sets</span>
<span class="text-primary font-semibold">Inter-Club Rugby 7s</span>
</div>
</div>
</div>
<!-- Showcase Item 4 -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all flex flex-col">
<div class="relative h-64 w-full bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Corporate mercantile athletic team wearing matching custom polo jerseys in crisp white and electric cobalt blue holding a trophy on sports field outdoors sunny day in Sri Lanka" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCc2GBGqG1AgKDUleUI42bKW4lbtveNjbhlN52wPpcy8q4VsAWr8m0CEhkF_R9g1Z_u5ir9LaKBxPD1D6nOI1I6Kkmck-6FXbZt9u1TObeExXDVoNii2g4jxKyALp8PP364nJCT90wz0ZlKLTkioGST1u5WQStx_Ru7okPYA1H1Ax1W3wonTp6uWozok9FKrGcnK6nCeXi-Fesm8MnHI5DLCvUK8v26crYXCjT3G6HWRumvXBm9DBglNw">
<div class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur px-2 py-0.5 rounded font-label-xs text-label-xs text-secondary font-bold uppercase">Mercantile Corporate</div>
</div>
<div class="p-space-md flex flex-col justify-between flex-grow">
<div>
<h4 class="font-headline-sm text-headline-sm uppercase text-secondary">Dialog Axiata Track Squad</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Lightweight zip-mandarin track shirts with personalized corporate employee names and division badges.</p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between text-outline font-label-xs text-label-xs">
<span class="">Qty: 250 Units</span>
<span class="text-primary font-semibold">Annual Sports Festival</span>
</div>
</div>
</div>
</div>
<!-- SECTION 5: CLIENT QUOTE REQUEST FORM & VECTOR UPLOAD -->
<div class="bg-surface-container-lowest rounded-2xl p-space-lg lg:p-space-xl shadow-2xl relative overflow-hidden" id="quote-hub">
<div class="absolute top-0 right-0 w-80 h-80 bg-primary-container/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
<!-- Instructions Column -->
<div class="lg:col-span-5 flex flex-col justify-between">
<div>
<div class="inline-flex items-center gap-2 bg-surface-container px-3 py-1 rounded-full mb-space-md">
<span class="material-symbols-outlined text-[16px] text-secondary-fixed">assignment_turned_in</span>
<span class="font-label-xs text-label-xs text-on-surface uppercase tracking-wider">Fast 2-Hour Response Time</span>
</div>
<h3 class="font-headline-lg text-headline-lg uppercase text-secondary mb-space-sm">Request Your Official Factory Quotation</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-lg leading-relaxed">
                Submit your order details, player count, and vector design files. Our factory merchandising team will review pantone specifications, generate digital print mockups, and issue an official tax invoice.
              </p>
<div class="space-y-space-sm font-body-sm text-body-sm text-on-surface">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">check</span>
<span class="">Instant digital PDF render sent within 120 minutes</span>
</div>
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">check</span>
<span class="">Free physical fabric swatch mailer for bulk orders (50+ kits)</span>
</div>
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">check</span>
<span class="">Direct WhatsApp hotline assistance with senior technical cutters</span>
</div>
</div>
</div>
<!-- Factory Direct Contacts -->
<div class="mt-space-lg pt-space-md bg-surface-container p-space-md rounded-xl">
<span class="font-label-xs text-label-xs text-outline uppercase block mb-1">Direct Factory Hotline</span>
<div class="font-headline-sm text-headline-sm text-secondary-fixed">+94 77 123 4567</div>
<span class="font-label-xs text-label-xs text-on-surface-variant">Homagama Industrial Facility • Mon to Sat (8am - 6pm)</span>
</div>
</div>
<!-- Form Column -->
<div class="lg:col-span-7">
<form class="space-y-space-md" onsubmit="handleQuoteSubmit(event)">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Contact Name *</label>
<input class="w-full bg-surface-container text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none" placeholder="e.g. Kasun Fernando" required="" type="text">
</div>
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Club / Organization Name *</label>
<input class="w-full bg-surface-container text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none" placeholder="e.g. Colombo Strikers FC" required="" type="text">
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Phone / WhatsApp Number *</label>
<input class="w-full bg-surface-container text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none" placeholder="+94 77 000 0000" required="" type="tel">
</div>
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Email Address *</label>
<input class="w-full bg-surface-container text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none" placeholder="kasun@team.lk" required="" type="email">
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Sport Discipline</label>
<select class="w-full bg-surface-container text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none">
<option>Football / Soccer</option>
<option>Cricket Match Kits</option>
<option>Basketball Uniforms</option>
<option>Rugby Combat Wear</option>
<option>Volleyball Kits</option>
<option>Track &amp; Field / Running</option>
</select>
</div>
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Estimated Quantity *</label>
<input class="w-full bg-surface-container text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none" min="10" type="number" value="25">
</div>
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Required Delivery Date</label>
<input class="w-full bg-surface-container text-on-surface px-space-md py-2 rounded-lg font-body-sm text-body-sm focus:outline-none" type="date">
</div>
</div>
<!-- Drag and Drop Vector Logo / Mockup Upload Box -->
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Upload Team Crest / Vector Artwork / Mockup</label>
<div class="bg-surface-container rounded-xl p-space-lg text-center cursor-pointer hover:bg-surface-container-high transition-all tilt-card">
<input accept=".ai,.pdf,.eps,.png,.jpg,.svg" class="hidden" id="vector-file-input" onchange="displaySelectedFile(this)" type="file">
<label class="cursor-pointer flex flex-col items-center justify-center" for="vector-file-input">
<span class="material-symbols-outlined text-[36px] text-primary mb-2">cloud_upload</span>
<span class="font-label-md text-label-md text-secondary font-bold" id="file-upload-text">CLICK OR DRAG ARTWORK HERE</span>
<span class="font-label-xs text-label-xs text-outline mt-1">Accepts Vector (.AI, .PDF, .EPS) or High-Res PNG / JPG (Max 25MB)</span>
</label>
</div>
</div>
<div>
<label class="font-label-md text-label-md uppercase tracking-wider text-secondary block mb-1.5">Specific Print / Pantone Requirements or Notes</label>
<textarea class="w-full bg-surface-container text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none" placeholder="Enter pantone codes, collar custom requirements, player name font preferences, or sponsor sleeve logo placements..." rows="3"></textarea>
</div>
<div class="flex items-center gap-space-md pt-space-xs">
<button class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-secondary-container hover:bg-secondary-fixed-dim text-on-secondary font-label-lg text-label-lg uppercase tracking-wider px-space-xl py-3 rounded-lg font-bold shadow-lg transition-all" type="submit">
<span class="material-symbols-outlined text-[20px]">send</span>
                  Submit For Instant Factory Quotation
                </button>
<span class="font-label-xs text-label-xs text-outline hidden md:inline">No immediate payment required. Official quote PDF generated.</span>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Interactive Engine Logic Script -->
<script>
  let currentView = 'front';

  function setView(view) {
    currentView = view;
    const frontGroup = document.getElementById('front-view-group');
    const backGroup = document.getElementById('back-view-group');
    const frontBtn = document.getElementById('view-front-btn');
    const backBtn = document.getElementById('view-back-btn');
    const sleeveBtn = document.getElementById('view-sleeve-btn');

    // Reset styles
    [frontBtn, backBtn, sleeveBtn].forEach(btn => {
      btn.className = "px-space-sm py-1 rounded font-label-md text-label-md uppercase text-on-surface-variant hover:text-on-surface";
    });

    if (view === 'front') {
      frontGroup.style.opacity = '1';
      backGroup.style.opacity = '0';
      frontGroup.style.pointerEvents = 'auto';
      backGroup.style.pointerEvents = 'none';
      frontBtn.className = "px-space-sm py-1 rounded font-label-md text-label-md uppercase bg-primary-container text-on-primary-container";
    } else if (view === 'back') {
      frontGroup.style.opacity = '0';
      backGroup.style.opacity = '1';
      frontGroup.style.pointerEvents = 'none';
      backGroup.style.pointerEvents = 'auto';
      backBtn.className = "px-space-sm py-1 rounded font-label-md text-label-md uppercase bg-primary-container text-on-primary-container";
    } else if (view === 'sleeves') {
      frontGroup.style.opacity = '1';
      backGroup.style.opacity = '0';
      sleeveBtn.className = "px-space-sm py-1 rounded font-label-md text-label-md uppercase bg-primary-container text-on-primary-container";
    }
  }

  function toggleBackViewPreview() {
    setView('back');
  }

  function setSport(sportName, btn) {
    document.querySelectorAll('.sport-btn').forEach(b => {
      b.className = "sport-btn bg-surface-container-high text-on-surface-variant hover:text-on-surface p-2 rounded flex flex-col items-center gap-1 text-center transition-all";
    });
    btn.className = "sport-btn active bg-primary-container text-on-primary-container p-2 rounded flex flex-col items-center gap-1 text-center transition-all";
    document.getElementById('current-sport-text').innerText = sportName + ' Kit';
  }

  function updatePattern(patternKey) {
    const patternLayer = document.getElementById('pattern-layer');
    const patternLayerBack = document.getElementById('pattern-layer-back');

    if (patternKey === 'none') {
      patternLayer.setAttribute('fill', 'transparent');
      patternLayerBack.setAttribute('fill', 'transparent');
    } else {
      patternLayer.setAttribute('fill', `url(#pattern-${patternKey})`);
      patternLayerBack.setAttribute('fill', `url(#pattern-${patternKey})`);
    }
  }

  function updateCollar(collarName) {
    document.getElementById('current-collar-text').innerText = collarName;
  }

  function changePrimaryColor(val) {
    document.documentElement.style.setProperty('--color-primary', val);
    document.getElementById('lbl-primary').innerText = val.toUpperCase();
  }

  function changeSecondaryColor(val) {
    document.documentElement.style.setProperty('--color-secondary', val);
    document.getElementById('lbl-secondary').innerText = val.toUpperCase();
  }

  function changeAccentColor(val) {
    document.documentElement.style.setProperty('--color-accent', val);
    document.getElementById('lbl-accent').innerText = val.toUpperCase();
  }

  function selectFabric(fabricName, card) {
    document.querySelectorAll('.fabric-card').forEach(c => {
      c.className = "fabric-card p-space-sm bg-surface-container-lowest rounded-lg cursor-pointer hover:bg-surface-container-high transition-all";
    });
    card.className = "fabric-card active p-space-sm bg-surface-container-highest rounded-lg cursor-pointer transition-all";
    
    // Update top badge
    const shortName = fabricName.split('(')[0].trim();
    const gsm = fabricName.includes('160') ? '160 GSM' : (fabricName.includes('180') ? '180 GSM' : '220 GSM');
    document.getElementById('fabric-gsm-badge').innerText = `${shortName} • ${gsm}`;
  }

  function updateLiveRoster() {
    const nameVal = document.getElementById('sample-name-input').value.trim() || 'PLAYER';
    const numVal = document.getElementById('sample-num-input').value.trim() || '00';

    document.getElementById('jersey-name').textContent = nameVal.toUpperCase();
    document.getElementById('jersey-back-num').textContent = numVal;
    document.getElementById('jersey-front-num').textContent = numVal;
  }

  function calculateBulk(qty, btn) {
    document.querySelectorAll('.bulk-tier-btn').forEach(b => {
      b.className = "bulk-tier-btn bg-surface-container p-2 rounded transition-all";
      const head = b.children[0];
      const title = b.children[1];
      head.className = "font-label-xs text-label-xs text-outline";
      title.className = "font-label-md text-label-md text-secondary font-bold";
    });

    btn.className = "bulk-tier-btn active bg-primary-container p-2 rounded transition-all";
    btn.children[0].className = "font-label-xs text-label-xs text-on-primary-container";
    btn.children[1].className = "font-label-md text-label-md text-on-primary-container font-bold";

    const priceTag = document.getElementById('quote-unit-price');
    const savingsTag = document.getElementById('quote-savings-tag');

    if (qty === 15) {
      priceTag.innerText = 'LKR 3,800';
      savingsTag.innerText = 'Base Team MOQ rate with full bespoke sublimation';
    } else if (qty === 25) {
      priceTag.innerText = 'LKR 3,400';
      savingsTag.innerText = 'You save 11% vs base tier';
    } else if (qty === 50) {
      priceTag.innerText = 'LKR 2,950';
      savingsTag.innerText = 'You save 22% vs individual retail (Recommended Club Tier)';
    } else if (qty === 100) {
      priceTag.innerText = 'LKR 2,650';
      savingsTag.innerText = 'Maximum volume factory direct discount (30% savings)';
    }
  }

  function resetKitDefaults() {
    changePrimaryColor('#0047ba');
    changeSecondaryColor('#001233');
    changeAccentColor('#caf300');
    document.getElementById('picker-primary').value = '#0047ba';
    document.getElementById('picker-secondary').value = '#001233';
    document.getElementById('picker-accent').value = '#caf300';
    document.getElementById('pattern-selector').value = 'lightning';
    updatePattern('lightning');
    document.getElementById('sample-name-input').value = 'FERNANDO';
    document.getElementById('sample-num-input').value = '07';
    updateLiveRoster();
    setView('front');
  }

  function displaySelectedFile(input) {
    if (input.files && input.files[0]) {
      const fileName = input.files[0].name;
      document.getElementById('file-upload-text').innerText = 'UPLOADED: ' + fileName.toUpperCase();
      document.getElementById('file-upload-text').classList.add('text-secondary-fixed');
    }
  }

  function handleQuoteSubmit(e) {
    e.preventDefault();
    alert('Thank you! Your custom sublimation specs and artwork have been submitted to FHR Sports Homagama Factory. Our technical coordinator will send an official quote & 3D render to your email/WhatsApp within 2 hours.');
  }
</script></main>
</main>

<?php
include __DIR__ . '/php/footer.php';
?>