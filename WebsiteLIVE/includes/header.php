<?php
/**
 * includes/header.php
 * Global Header Template
 */

// Default values
if (!isset($pageTitle)) { $pageTitle = 'Powerauto Hydraulics'; }
if (!isset($activePage)) { $activePage = ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Core Styles & Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Local Styles -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/products.css">
    
    <!-- Favicons -->
    <link rel="icon" href="assets/images/icons/Powerauto-Logo-Icon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/icons/Powerauto-Logo-Icon.ico" type="image/x-icon">

    <!-- Global Styles for PHP injections -->
    <?php if (isset($extraCSS)) echo $extraCSS; ?>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <!-- Top Bar -->
        <div class="bg-gray-800 text-white py-2 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto flex justify-between items-center text-sm">
                <div id="top-tagline" class="text-left hidden md:block">
                    <span id="tagline-leading" class="font-semibold text-red-400">Trusted local partner</span>
                    for mobile hydraulics and control systems support that keeps you working.
                </div>
                <div class="md:hidden text-xs">Trusted partner for mobile hydraulics.</div>
                <div class="flex items-center">
                    <button onclick="openContactCardModal()" class="hover:text-red-400 transition duration-300 mr-6 flex items-center focus:outline-none">
                        <i class="fas fa-address-card mr-2"></i> <span class="hidden sm:inline">Save Contact</span>
                    </button>
                    <a href="tel:+61397912255" class="hover:text-red-400 transition duration-300 mr-4 text-lg"><i class="fas fa-phone-alt mr-1"></i> +61 3 9791 2255</a>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <a href="1-index.php" class="inline-block">
                    <!-- Updated Logo Path -->
                    <img src="assets/images/logos/99-01-logo-main.webp" alt="Powerauto Hydraulics Logo" class="h-20" onerror="this.onerror=null; this.src='https://placehold.co/200x80/ffffff/c41e24?text=Powerauto';">
                </a>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-4 lg:space-x-6 items-center">
                    <?php
                    // Navigation Array matching new filenames
                    $navLinks = [
                        'home'     => ['url' => '1-index.php', 'label' => 'Home'],
                        'about'    => ['url' => '2-about.php', 'label' => 'About'],
                        'products' => ['url' => '4-products.php', 'label' => 'Products'],
                        'contact'  => ['url' => '3-contact.php', 'label' => 'Contact']
                    ];

                    foreach ($navLinks as $key => $link) {
                        $isActive = ($activePage === $key);
                        $class = $isActive 
                            ? 'text-red-600 hover:text-red-700 font-bold underline underline-offset-4' 
                            : 'text-gray-700 hover:text-red-600 font-medium transition duration-300';
                        echo "<a href=\"{$link['url']}\" class=\"{$class}\">{$link['label']}</a>";
                    }
                    ?>
                </nav>
                
                <div class="hidden md:flex items-center space-x-3"></div>

                <div class="md:hidden">
                    <button id="mobileMenuButton" class="text-gray-700 hover:text-red-600 focus:outline-none"><i class="fas fa-bars text-2xl"></i></button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-white shadow-lg py-2">
            <?php
            foreach ($navLinks as $key => $link) {
                $isActive = ($activePage === $key);
                $mobileClass = $isActive 
                    ? 'block px-4 py-2 text-red-600 bg-red-100 hover:bg-red-500 hover:text-white' 
                    : 'block px-4 py-2 text-gray-700 hover:bg-red-500 hover:text-white';
                echo "<a href=\"{$link['url']}\" class=\"{$mobileClass}\">{$link['label']}</a>";
            }
            ?>
        </div>
    </header>