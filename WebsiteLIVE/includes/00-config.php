<?php
/**
 * includes/00-config.php - Global Variable & Path Dictionary
 */

// --- FILE & NAVIGATION DICTIONARY ---
// Updated with "0" prefix for sorting optimization
$NAV_MAP = [
    'home'         => '01-index.php',
    'about'        => '02-about.php',
    'contact'      => '03-contact.php',
    'products'     => '04-products.php',
    'privacy'      => '90-privacy.php',
    'terms'        => '91-terms.php',
    
    // Product Category Pages
    'pto'          => '10-pto.php',
    'pumps'        => '11-pumps.php',
    'valves'       => '12-valves.php',
    'hoists'       => '13-hoists-cylinders.php',
    'controls'     => '14-controls.php',
    'spares'       => '15-spares.php',
    'app_kits'     => '16-application_kits.php'
];

// --- "ITEM #1" & KEY DATA DICTIONARY ---
// Centralizing recurring content strings
$SITE_DATA = [
    'company_name' => 'Powerauto Hydraulics Pty Ltd',
    'phone_display' => '+61 3 9791 2255',
    'phone_tel'     => '+61397912255',
    'email_sales'   => 'sales@powerauto.com.au',
    
    // Example: Application Item #1 (from 1-index.php)
    'app_item_1' => [
        'name'    => 'Standard Rear Tipper Truck',
        'image'   => 'assets/images/applications/40-01-tipper.webp',
        'subject' => 'Enquiry about Standard Rear Tipper Truck'
    ]
];

// --- DIRECTORY DICTIONARY ---
define('INC_PATH', 'includes/');
define('PROD_IMG_PATH', 'assets/images/products/');