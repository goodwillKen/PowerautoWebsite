<?php
/**
 * 00-01-config.php
 * MASTER VARIABLE & PATH DICTIONARY
 * * The central source of truth for the entire Powerauto project.
 */

// 1. DYNAMIC BASE PATHS
define('REBUILD_ROOT', dirname(__DIR__)); // Points to 05-public_html

$PATHS = [
    'includes' => REBUILD_ROOT . '/05-00-includes/',
    'assets'   => '/05-80-assets/',
    'css'      => '/05-80-assets/80-01-css/',
    'js'       => '/05-80-assets/80-02-js/',
    'img'      => '/05-80-assets/80-03-images/',
    'data'     => dirname(REBUILD_ROOT) . '/00-website_data/', // Outside public_html
    'catalogue'=> '/05-20-page-catalogue/',
    'core'     => '/05-10-pages-core/'
];

// 2. NAVIGATION MAP
$NAV = [
    'home'     => $PATHS['core'] . '10-01-index.php',
    'about'    => $PATHS['core'] . '10-02-about.php',
    'contact'  => $PATHS['core'] . '10-03-contact.php',
    'products' => $PATHS['core'] . '10-04-products_hub.php'
];

// 3. DICTIONARY DATABASE (Item#1 Example)
$SITE_DATA = [
    'company' => 'Powerauto Hydraulics Pty Ltd',
    'phone'   => ['display' => '+61 3 9791 2255', 'link' => '+61397912255'],
    'email'   => 'sales@powerauto.com.au',
    
    // Centrally managed Item #1
    'item_1' => [
        'name'  => 'Standard Rear Tipper Truck',
        'image' => $PATHS['img'] . 'applications/40-01-tipper.webp',
        'url'   => $NAV['products'] . '#tipper'
    ]
];
?>