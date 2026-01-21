<?php 
$pageTitle = "Powerauto Hydraulics - Products";
$activePage = "products";

include 'includes/header.php'; 
?>
    
    <!-- Scrolling Hero Banner -->
    <section class="page-hero relative" style="height: 400px; background-color: #374151;">
        <div id="scrollingBanner" class="absolute top-0 left-0 h-full z-10 banner-scroll-wrapper">
            <!-- Ensure images load with cache busting -->
            <img id="measureBanner" src="assets/images/hero/01-03-products-hero.webp?v=<?php echo time(); ?>" alt="Products Banner" class="banner-image" width="8000" height="358">
            <img src="assets/images/hero/01-03-products-hero.webp?v=<?php echo time(); ?>" alt="Products Banner" class="banner-image" width="8000" height="358">
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-between items-center z-20 py-1">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold">Extensive Range of Hydraulic Products</h1>
            </div>
            <div class="text-center text-white px-4">
                <p class="text-lg md:text-xl font-medium">Specialized Solutions for Victorian Industry</p>
            </div>
        </div>
    </section>

    <main class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <section class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Product Categories</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Explore our range of high-performance components. Our carousels cycle through detailed product overviews and specific models tailored for Transport, Waste, and Civil applications.
                </p>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <!-- KITS -->
                <div id="kits" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-11-kits-header.webp" alt="Application Kits" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=App+Kits';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Application Kits</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Application Kits from Powerauto Hydraulics are pre-engineered hydraulic packages built around real truck applications such as tippers, hook lifts, skip loaders, tilt trays, cranes, low loaders, walking floors and waste compaction systems, for work in Australian conditions. Each kit is matched to the job, combining the correct PTO, pump, valves, hoist or cylinders, tank, controls, hoses and fittings so you can install with confidence and get the vehicle earning again sooner.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Complete Solutions</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    They are designed for the way local operators actually work, helping independent truck owners, repair workshops, auxiliary fit-out specialists and body builders avoid trial-and-error sizing, reduce downtime, and deliver consistent, compliant builds. Clear documentation, application-driven specifications and support from our technical team make it easier to quote, fit and service hydraulic systems across new builds, retrofits and repairs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="application_kits.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog">
                            <i class="fas fa-list text-lg"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Application%20Kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Application%20Kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- PTO -->
                <div id="pto" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-01-pto-header.webp" alt="Power Take-Offs" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=PTOs';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Power Take-Offs (PTOs)</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Powerauto Hydraulics offers a comprehensive range of robust Power Take-Off units designed for the demanding Australian transport industry. Choose from side-mount, rear-mount, and heavy-duty hot shift PTOs compatible with major transmissions like Eaton Fuller, Allison, ZF, Volvo/Mack, Mercedes, Isuzu, Hino, Mitsubishi Fuso, UD Nissan, Iveco, Scania, Paccar, Detroit/Daimler, and more.
                                </p>
                            </div>
                        </div>
                        <!-- ... other slides ... -->
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="10-pto.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Power%20Take-Offs" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Power%20Take-Offs" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- PUMPS -->
                <div id="pumps" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-02-pumps-header.webp" alt="Hydraulic Pumps" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Pumps';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hydraulic Pumps & Motors</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Drive and power your hydraulic systems with high-performance Powerauto Hydraulics gear pumps, piston pumps, and hydraulic motors. Our pump range includes the heavy-duty POW series and versatile A and T series gear pumps, plus bent-axis and straight-axis piston pumps.
                                </p>
                            </div>
                        </div>
                        <!-- ... other slides ... -->
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="11-pumps.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Pumps" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Hydraulic%20Pumps" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- VALVES -->
                <div id="valves" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-03-valves-header.webp" alt="Hydraulic Valves" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Valves';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hydraulic Valves</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Control your hydraulic circuits precisely with Powerauto Hydraulics’ extensive range of valves. We offer robust transport valves including tipper valves, diverter valves, hose burst protection, and relief valves suited for demanding mobile applications.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="12-valves.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Valves" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Hydraulic%20Valves" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- HOISTS -->
                <div id="hoists" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-05-hoists-header.webp" alt="Hoists & Cylinders" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Hoists';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hoists & Cylinders</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Powerauto Hydraulics supplies reliable telescopic hoists and underbody hoists designed for various tipping applications in the transport industry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="13-hoists-cylinders.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hoists%20and%20Cylinders" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Hoists%20and%20Cylinders" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- CONTROLS -->
                <div id="controls" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-06-controls-header.webp" alt="Cabin Controls" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Controls';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Cabin Controls & Electrical</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manage your hydraulic and pneumatic systems effectively with Powerauto Hydraulics’ range of cabin controls and electrical components.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="14-controls.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Cabin%20Controls" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Cabin%20Controls" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- TANKS (Missing image fallback handled) -->
                <div id="tanks" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-04-tanks-header.webp" alt="Hydraulic Tanks" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Tanks';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hydraulic Tanks & Power Units</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Store and supply hydraulic fluid reliably with Powerauto Hydraulics’ oil tanks and power units.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="#" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Tanks" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Hydraulic%20Tanks" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- FILTRATION -->
                <div id="filtration" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-08-filters-header.webp" alt="Filtration" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Filtration';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Filtration</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Protect your hydraulic components and maintain fluid cleanliness with Powerauto Hydraulics’ filtration solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="#" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Filtration" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Filtration" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- HOSES -->
                <div id="hoses" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-07-hoses-header.webp" alt="Hoses & Fittings" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Hoses';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hoses, Fittings & Couplings</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Connect your hydraulic system components securely with Powerauto Hydraulics’ range of hoses, fittings, and couplings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="#" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hoses%20and%20Fittings" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Hoses%20and%20Fittings" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- BODY PARTS -->
                <div id="bodyparts" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-09-body-header.webp" alt="Body Components" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Body+Parts';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Body Components & Accessories</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Find essential components for truck bodies and trailers at Powerauto Hydraulics. We supply tailgate side swing hinge kits, air cylinders for tailgate operation, and associated catches and pins.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="#" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Body%20Components" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Body%20Components" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- MAINTENANCE -->
                <div id="maintenance" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-12-spares-header.webp" alt="Spares & Kits" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Spares';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Maintenance, Spares & Kits</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Keep your Powerauto Hydraulics equipment running smoothly with our comprehensive range of maintenance parts, spares, and kits. We stock genuine seal kits, bearing kits, and gasket kits specifically for Powerauto Hydraulics PTOs, pumps, valves, and hoists.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="15-spares.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Maintenance%20Spares" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Maintenance%20Spares" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- WINCH -->
                <div id="winch" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="assets/images/products/10-10-winch-header.webp" alt="Winch & Recovery" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Winch';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Winch & Recovery</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Powerauto Hydraulics provides reliable winching solutions for recovery and industrial applications. Our range includes electric winches in various capacities (e.g., 8000lb, 12000lb, 15000lb, 18000lb) available in 12V or 24V options.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="#" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Winch%20and%20Recovery" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="3-contact.php?reason=sales&product=Winch%20and%20Recovery" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

            </section>
            
            <section class="mb-12 py-10 bg-white rounded-lg">
                <?php include 'includes/partners.php'; ?>
            </section>

            <section class="text-center py-10 bg-red-700 text-white rounded-lg">
                <h2 class="text-3xl font-bold mb-4">Can't Find What You're Looking For?</h2>
                <p class="text-lg mb-6 max-w-xl mx-auto">
                    Our warehouse in Dandenong stocks thousands of parts. Contact our knowledgeable team for specific component enquiries.
                </p>
                <a href="3-contact.php?reason=sales" class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-3 px-8 rounded-lg text-lg transition duration-300">Contact Sales Team</a>
            </section>

        </div>
    </main>
    
<?php 
    $showFooterPartners = false; // We already showed them above
    include 'includes/footer.php'; 
?>