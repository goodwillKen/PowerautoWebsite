<?php 
$pageTitle = "Powerauto Hydraulics - Products";
$activePage = "products";

// Inject Slick CSS and Page-Specific Styles
$extraCSS = '
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
<style>
    /* Hero Banner Styles */
    .page-hero { height: 400px; overflow: hidden; position: relative; background-color: #374151; }
    .banner-scroll-wrapper { display: flex; height: 100%; width: max-content; will-change: transform; backface-visibility: hidden; transform: translate3d(0, 0, 0); }
    .banner-image { height: 100%; width: auto; max-width: none; object-fit: cover; flex-shrink: 0; }
    
    /* Product Card Styles */
    .product-card-container { height: 100%; display: flex; flex-direction: column; }
    .text-carousel { margin-bottom: 0.5rem; padding-bottom: 1.5rem; }
    .slide-content { padding: 0 0.25rem; }
    
    /* Description Scrollbar */
    .description-scroll { height: 10rem; overflow-y: auto; padding-right: 5px; scrollbar-width: thin; scrollbar-color: #ccc #f1f1f1; }
    .description-scroll::-webkit-scrollbar { width: 6px; }
    .description-scroll::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 3px; }
    .description-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
    .description-scroll::-webkit-scrollbar-thumb:hover { background: #ef4444; }
    
    /* Slick Dots Customization */
    .slick-dots { bottom: -5px; }
    .slick-dots li { margin: 0 2px; }
    .slick-dots li button:before { font-size: 8px; color: #cc0000; opacity: 0.4; transition: opacity 0.3s; }
    .slick-dots li.slick-active button:before { color: #cc0000; opacity: 1; }
    
    html { scroll-behavior: smooth; scroll-padding-top: 120px; }
</style>';

include 'includes/header.php'; 
?>
    
    <!-- Scrolling Hero Banner -->
    <section class="page-hero relative">
        <div id="scrollingBanner" class="absolute top-0 left-0 h-full z-10 banner-scroll-wrapper">
            <!-- Ensure images load with cache busting -->
            <img id="measureBanner" src="images/ProductsBanner.png?v=<?php echo time(); ?>" alt="Products Banner" class="banner-image" width="8000" height="358">
            <img src="images/ProductsBanner.png?v=<?php echo time(); ?>" alt="Products Banner" class="banner-image" width="8000" height="358">
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
                        <img src="images/ApplicationKits1200x1200.png" alt="Application Kits" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=App+Kits';">
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
                        <a href="contact.php?reason=sales&product=Application%20Kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- PTO -->
                <div id="pto" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/PTOcategory1200x1200.png" alt="Power Take-Offs" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=PTOs';">
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
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Mounting & Output</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We provide complete mounting kits, gear adapters, and various output options (e.g., DIN 5462 Spline, SAE Spline A/B/BB/C, keyed shaft, 1310/1410 Series Flange) to ensure seamless integration. Engage your hydraulic system reliably with our airshift, cable shift, vacuum shift, or electro-hydraulic engagement options.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hotshift Series</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Our range includes specialized Hotshift PTOs designed for automatic transmissions, featuring internal clutch packs for smooth engagement under load. Ideal for waste compactors, agitators, and applications requiring frequent stop-start operation without gear clashing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="pto.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Power%20Take-Offs" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Power%20Take-Offs" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- PUMPS -->
                <div id="pumps" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/PUMPScategory1200x1200.png" alt="Hydraulic Pumps" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Pumps';">
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
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Diverse Configurations</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Our hydraulic motors are available in various displacements (e.g., 5.2cc, 100cc, 315cc) and shaft configurations to provide reliable rotary power. We also supply necessary accessories like mounts, seal kits, and bypass valves. Choose from uni-directional or bi-rotational options to suit your specific application.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="pumps.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Pumps" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Hydraulic%20Pumps" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- VALVES -->
                <div id="valves" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/VALVEScategory1200x1200.png" alt="Hydraulic Valves" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Valves';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hydraulic Valves</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Control your hydraulic circuits precisely with Powerauto Hydraulics’ extensive range of valves. We offer robust transport valves including tipper valves, diverter valves, hose burst protection, and relief valves suited for demanding mobile applications. Our Q Series monobloc valves provide versatile, compact solutions for multiple functions.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Specialized Control</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Additionally, find specialized valves for flow control, pressure control, motion control, and load holding, along with necessary spares and components. Whether you need simple directional control or sophisticated proportional valving for cranes, we have the right solution.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="valves.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Valves" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Hydraulic%20Valves" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- HOISTS -->
                <div id="hoists" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/HOISTCYLScategory1200x1200.png" alt="Hoists & Cylinders" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Hoists';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hoists & Cylinders</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Powerauto Hydraulics supplies reliable telescopic hoists and underbody hoists designed for various tipping applications in the transport industry. Choose from well-mount or front-cover telescopic hoists with multiple stages and stroke lengths. Our underbody hoists come in different configurations, including options with mounting feet or eye mounts.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Cylinders & Pneumatics</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We also provide general-purpose hydraulic cylinders and pneumatic air cylinders suitable for tailgate locks and other auxiliary functions. Our inventory includes essential mounting components like feet, cradles, pivot kits, and comprehensive seal kits for maintenance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="hoists.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hoists%20and%20Cylinders" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Hoists%20and%20Cylinders" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- CONTROLS -->
                <div id="controls" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/CONTROLScategory1200x1200.png" alt="Cabin Controls" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Controls';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Cabin Controls & Electrical</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manage your hydraulic and pneumatic systems effectively with Powerauto Hydraulics’ range of cabin controls and electrical components. We offer pneumatic control kits, electric/pneumatic kits, cable controls, and radio remote systems. Find a wide selection of switches (rocker, toggle, pressure, sensor), solenoids and coils, plus pendants, joysticks, relays, and connectors to complete your control setup.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Remote Systems</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We specialize in Scanreco radio remote systems for cranes and tilt trays, offering precise proportional control and enhanced operator safety. Our in-house technical team can assist with programming and pairing transmitters to receivers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="controls.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Cabin%20Controls" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Cabin%20Controls" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- TANKS -->
                <div id="tanks" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/TANKSPOWERPACKScategory1200x1200.png" alt="Hydraulic Tanks" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Tanks';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hydraulic Tanks & Power Units</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Store and supply hydraulic fluid reliably with Powerauto Hydraulics’ oil tanks and power units. Choose from rear-mount or side-mount hydraulic oil tanks in various capacities, available in ferrous steel or aluminium. We also offer compact 12V and 24V DC power units suitable for applications requiring self-contained hydraulic power.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Tank Accessories</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Our range includes essential tank components like filtered breathers, filler caps, level gauges, and sight glasses. We also supply water pumps for water cart applications, driven directly by your hydraulic system.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="tanks.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Tanks" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Hydraulic%20Tanks" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- FILTRATION -->
                <div id="filtration" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/FILTERScategory1200x1200.png" alt="Filtration" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Filtration';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Filtration</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Protect your hydraulic components and maintain fluid cleanliness with Powerauto Hydraulics’ filtration solutions. We supply high-pressure filters for demanding applications, convenient spin-on filters for suction and return lines, and tank-top return filters. A range of replacement filter elements with various micron ratings is available, along with breathers and strainers to ensure optimal system protection.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">System Protection</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Effective filtration is critical for modern high-pressure systems to prevent damage to pumps and valves. Our range includes indicators to alert operators when elements require changing, ensuring continuous protection.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="filtration.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Filtration" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Filtration" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- HOSES -->
                <div id="hoses" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/HoseCouplingFittingscategory1200x1200.png" alt="Hoses & Fittings" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Hoses';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hoses, Fittings & Couplings</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Connect your hydraulic system components securely with Powerauto Hydraulics’ range of hoses, fittings, and couplings. We offer industry-standard quick-release couplings (including pressure eliminator options), hydraulic hose and assemblies, and a wide variety of fittings and adaptors in BSPP, BSPT, JIC, UNO, and NPT thread types.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Installation Accessories</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Complete your installation with our range of hose clamps (Stauff type), mounting brackets, and protective wrapping. We stock specific kits for tipper and crane installations to ensure you have every fitting required for the job.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="hoses.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hoses%20and%20Fittings" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Hoses%20and%20Fittings" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- BODY PARTS -->
                <div id="bodyparts" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/BODYCOMPACCcategory1200x1200.png" alt="Body Components" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Body+Parts';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Body Components & Accessories</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Find essential components for truck bodies and trailers at Powerauto Hydraulics. We supply tailgate side swing hinge kits, air cylinders for tailgate operation, and associated catches and pins. Body pivot kits (bush type) and body lock assemblies are also available. Enhance your fit-out with general accessories such as plugs, caps, decals, and magnets.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="body_components.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Body%20Components" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Body%20Components" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- MAINTENANCE -->
                <div id="maintenance" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/MaintenanceSparesKitsCategory1200x1200.png" alt="Spares & Kits" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Spares';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Maintenance, Spares & Kits</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Keep your Powerauto Hydraulics equipment running smoothly with our comprehensive range of maintenance parts, spares, and kits. We stock genuine seal kits, bearing kits, and gasket kits specifically for Powerauto Hydraulics PTOs, pumps, valves, and hoists. Find repair kits for common wear items and essential fluids and consumables like hydraulic oil and grease.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">General Spares</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    A wide selection of general spare parts, including gears, shafts, covers, springs, levers, and more, is also available. Using genuine parts ensures compatibility and maintains the performance and warranty of your equipment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="maintenance.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Maintenance%20Spares" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Maintenance%20Spares" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

                <!-- WINCH -->
                <div id="winch" class="bg-gray-50 p-6 rounded-lg shadow-md product-card-container">
                    <div class="bg-white rounded-md mb-4 w-full aspect-square border border-gray-200 flex items-center justify-center p-2">
                        <img src="images/WINCHcategory1200x1200.png" alt="Winch & Recovery" class="max-h-full max-w-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/1200x1200/CCCCCC/4A4A4A?text=Winch';">
                    </div>
                    <div class="text-carousel">
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Winch & Recovery</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Powerauto Hydraulics provides reliable winching solutions for recovery and industrial applications. Our range includes electric winches in various capacities (e.g., 8000lb, 12000lb, 15000lb, 18000lb) available in 12V or 24V options. We also supply heavy-duty hydraulic winches for tilt trays and recovery trucks.
                                </p>
                            </div>
                        </div>
                        <div class="slide-content">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Winch Accessories</h3>
                            <div class="description-scroll">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Complement your winch setup with accessories such as wire or synthetic ropes, cables, roller fairleads, hooks, cable tensioners, and control pendants. Our team can advise on the correct winch rating and fitment for your vehicle application.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="winch.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="View Full Catalog"><i class="fas fa-list text-lg"></i></a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us"><i class="fas fa-phone-alt text-lg"></i></a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Winch%20and%20Recovery" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us"><i class="fas fa-envelope text-lg"></i></a>
                        <a href="contact.php?reason=sales&product=Winch%20and%20Recovery" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Enquire Now"><i class="fas fa-paper-plane text-lg"></i></a>
                    </div>
                </div>

            </section>
            
            <!-- We manually include partners here because on this page they sit in the main content area, not the footer -->
            <section class="mb-12 py-10 bg-white rounded-lg">
                <?php include 'includes/partners.php'; ?>
            </section>

            <section class="text-center py-10 bg-red-700 text-white rounded-lg">
                <h2 class="text-3xl font-bold mb-4">Can't Find What You're Looking For?</h2>
                <p class="text-lg mb-6 max-w-xl mx-auto">
                    Our warehouse in Dandenong stocks thousands of parts. Contact our knowledgeable team for specific component enquiries.
                </p>
                <a href="contact.php?reason=sales" class="bg-white hover:bg-gray-100 text-red-700 font-semibold py-3 px-8 rounded-lg text-lg transition duration-300">Contact Sales Team</a>
            </section>

        </div>
    </main>
    
    <!-- Footer Includes Modals and jQuery -->
    <?php 
        $showFooterPartners = false; // We already showed them above
        include 'includes/footer.php'; 
    ?>

    <!-- Page Specific Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        // Banner Animation Logic
        function setupBannerAnimation() {
            const img = document.getElementById('measureBanner');
            const wrapper = document.getElementById('scrollingBanner');
            if(!img || !wrapper) return;

            function applyAnimation() {
                const width = img.offsetWidth; 
                if(width > 0) {
                    const styleSheet = document.createElement('style');
                    const keyframes = `
                        @keyframes scroll-calculated {
                            0% { transform: translateX(0px); }
                            100% { transform: translateX(-${width}px); }
                        }
                    `;
                    styleSheet.innerHTML = keyframes;
                    document.head.appendChild(styleSheet);
                    wrapper.style.animation = 'scroll-calculated 60s linear infinite';
                } else {
                    setTimeout(applyAnimation, 100);
                }
            }

            if (img.complete) {
                applyAnimation();
            } else {
                img.onload = applyAnimation;
            }
        }

        // Initialize Page Specific Logic after Window Load (when jQuery is guaranteed by footer)
        window.addEventListener('load', function() {
            // Initialize Slick on ALL text carousels
            jQuery('.text-carousel').slick({
                dots: true,
                infinite: true,
                speed: 500, // Transition speed (0.5s)
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true, // Enable autoplay
                autoplaySpeed: 10000, // 10 seconds (Very Slow)
                arrows: false, // Remove arrows
                adaptiveHeight: false
            });
            
            // Trigger banner animation setup
            setupBannerAnimation();
        });
    </script>
</body>
</html>