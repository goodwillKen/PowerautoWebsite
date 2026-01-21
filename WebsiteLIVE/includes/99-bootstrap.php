<?php
/**
 * 99-bootstrap.php - Universal Include Chain
 */
require_once __DIR__ . '/00-config.php';
require_once INC_DIR . 'auth_check.php';
require_once INC_DIR . 'helper.php';
require_once INC_DIR . 'product_data.php';

// Now, any variable in config.php is available to any page that bootstraps.