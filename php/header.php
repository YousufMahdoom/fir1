<!DOCTYPE html>
<html class="dark" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'FHR Sports Collections'; ?></title>
  <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'FHR Sports Custom Sublimation Factory'; ?>">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Oswald:wght@500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
  
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
echo getHeaderHtml($currentPage, true);
?>
