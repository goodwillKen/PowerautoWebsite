<?php
/**
 * 00-99-bootstrap.php
 * UNIVERSAL INCLUDE CHAIN
 */

// 1. Load Dictionary Database
require_once __DIR__ . '/00-01-config.php';

// 2. Start Secure Session
session_start();

// 3. System includes using local directory reference
require_once __DIR__ . '/00-02-auth_check.php';
require_once __DIR__ . '/00-05-product_data.php';
require_once __DIR__ . '/00-06-product_renderer.php';
require_once __DIR__ . '/00-07-email_helper.php';

/**
 * All files in 05-rebuild can now access $PATHS, $NAV, and $SITE_DATA.
 */
?>