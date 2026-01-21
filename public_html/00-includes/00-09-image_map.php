<?php
/**
 * includes/image_map.php
 * Central source of truth for all image paths.
 * Mapped to the new assets/images/ directory structure.
 */

// Define base path relative to the public_html root
// If your PHP files are in public_html, this relative path works.
define('IMG_BASE', 'assets/images/');

$images = [
    // --- 01. HERO BANNERS (assets/images/hero/) ---
    'hero' => [
        // Note: Structure lists specific files. Mapping logic to closest match.
        'about'    => IMG_BASE . 'hero/01-02-about-hero.webp',
        'products' => IMG_BASE . 'hero/01-03-products-hero.webp',
        'contact'  => IMG_BASE . 'hero/01-04-contact-hero.webp',
        
        // Fallbacks for Home/Privacy/Terms if specific files don't exist in the structure list yet
        'home'     => IMG_BASE . 'hero/01-02-about-hero.webp', 
        'privacy'  => IMG_BASE . 'hero/01-02-about-hero.webp',
        'terms'    => IMG_BASE . 'hero/01-02-about-hero.webp',
    ],

    // --- 10. CATEGORY HEADERS (assets/images/products/) ---
    // Used on category pages (e.g., 10-pto.php)
    'cat_header' => [
        'pto'       => IMG_BASE . 'products/10-01-pto-header.webp',
        'pumps'     => IMG_BASE . 'products/10-02-pumps-header.webp',
        'valves'    => IMG_BASE . 'products/10-03-valves-header.webp',
        'tanks'     => IMG_BASE . 'products/10-04-tanks-header.webp', // Listed as MISSING in structure, ensure it exists or use fallback
        'hoists'    => IMG_BASE . 'products/10-05-hoists-header.webp',
        'controls'  => IMG_BASE . 'products/10-06-controls-header.webp',
        'hoses'     => IMG_BASE . 'products/10-07-hoses-header.webp',
        'filters'   => IMG_BASE . 'products/10-08-filters-header.webp',
        'body'      => IMG_BASE . 'products/10-09-body-header.webp',
        'winch'     => IMG_BASE . 'products/10-10-winch-header.webp',
        'kits'      => IMG_BASE . 'products/10-11-kits-header.webp',
        'spares'    => IMG_BASE . 'products/10-12-spares-header.webp',
    ],

    // --- 11. CATEGORY THUMBNAILS (assets/images/categories/) ---
    // Used on Home Page and Products Hub Grid
    'cat_thumb' => [
        'pto'       => IMG_BASE . 'categories/11-01-pto-thumb.webp',
        'pumps'     => IMG_BASE . 'categories/11-02-pumps-thumb.webp',
        'valves'    => IMG_BASE . 'categories/11-03-valves-thumb.webp',
        'tanks'     => IMG_BASE . 'categories/11-04-tanks-thumb.webp',
        'hoists'    => IMG_BASE . 'categories/11-05-hoists-thumb.webp',
        'controls'  => IMG_BASE . 'categories/11-06-controls-thumb.webp',
        'spares'    => IMG_BASE . 'categories/11-12-spares-thumb.webp',
    ],

    // --- 30. PARTNER LOGOS (assets/images/partners/) ---
    'partners' => [
        'hydreco'    => IMG_BASE . 'partners/30-01-hydreco.webp',
        'hydac'      => IMG_BASE . 'partners/30-02-hydac.webp',
        'brevini'    => IMG_BASE . 'partners/30-03-brevini.webp',
        'scanreco'   => IMG_BASE . 'partners/30-04-scanreco.webp',
        'superwinch' => IMG_BASE . 'partners/30-05-superwinch.webp',
    ],

    // --- 40. APPLICATIONS (assets/images/applications/) ---
    'apps' => [
        'tipper'     => IMG_BASE . 'applications/40-01-tipper.webp',
        'tiltslide'  => IMG_BASE . 'applications/40-02-tiltslide.webp',
        'waste'      => IMG_BASE . 'applications/40-03-waste.webp',
        'skiploader' => IMG_BASE . 'applications/40-04-skiploader.webp',
        'crane'      => IMG_BASE . 'applications/40-05-crane.webp',
        'sidetipper' => IMG_BASE . 'applications/40-06-sidetipper.webp',
        'hooklift'   => IMG_BASE . 'applications/40-07-hooklift.webp',
        'walking'    => IMG_BASE . 'applications/40-08-walkingfloor.webp',
        'lowloader'  => IMG_BASE . 'applications/40-09-lowloader.webp',
    ],
    
    // --- 99. UI / MISC (assets/images/logos/ or assets/images/icons/) ---
    'ui' => [
        'logo'       => IMG_BASE . 'logos/99-01-logo-main.webp',
        'favicon'    => IMG_BASE . 'icons/Powerauto-Logo-Icon.ico',
        // Generic UI icons
        'icon_phone' => IMG_BASE . 'ui/phone.svg',
        'icon_email' => IMG_BASE . 'ui/email.svg',
        'icon_menu'  => IMG_BASE . 'ui/menu.svg',
        'icon_info'  => IMG_BASE . 'ui/info.svg',
        
        'placeholder'=> 'https://placehold.co/600x400/EEE/31343C?text=Image+Not+Found',
    ]
];

/**
 * Helper function to safely get image paths.
 * Usage: img('hero.about') or img('partners.hydreco')
 */
function img($key) {
    global $images;
    $parts = explode('.', $key);
    $group = $parts[0];
    $item  = $parts[1] ?? null;

    if (isset($images[$group][$item])) {
        return $images[$group][$item];
    }
    return $images['ui']['placeholder']; // Safe fallback
}
?>