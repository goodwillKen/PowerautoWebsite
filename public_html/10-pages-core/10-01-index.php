<?php 
// 1. Security Check
include 'includes/auth_check.php';

// 2. Page Configuration
$pageTitle = "Powerauto Hydraulics - Home";
$activePage = "home";

include 'includes/header.php'; 
?>

    <!-- ========================= -->
    <!-- WELCOME SECTION BLOCK     -->
    <!-- ========================= -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">WELCOME TO POWERAUTO HYDRAULICS</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                For 20 years, Powerauto Hydraulics has been contributing to the Australian transport landscape through our quality products, expert advice, strong service and state of the art innovations. Considered to be one of the leaders in hydraulic engineering in Australia, Powerauto Hydraulics is the main distributor of Hydreco, Superwinch and Scanreco products. Dealing with everything transport hydraulics, Powerauto Hydraulics has established trust from their respective fields.
            </p>
            <a href="2-about.php" class="bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-8 rounded-lg text-lg transition duration-300">More About Us</a>
        </div>
    </section>

    <!-- ========================= -->
    <!-- KEY SOLUTIONS BLOCK       -->
    <!-- ========================= -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-12">OUR KEY SOLUTIONS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                
                <!-- Key Product 1: Power Take-Offs -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center">
                        <img src="assets/images/categories/11-01-pto-thumb.webp" alt="Power Take-Offs (PTOs)" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=PTOs';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Power Take-Offs (PTOs)</h3>
                    
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="10-pto.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Power%20Take-Offs" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Power%20Take-Offs" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Key Product 2: Hydraulic Pumps & Motors -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center">
                        <img src="assets/images/categories/11-02-pumps-thumb.webp" alt="Hydraulic Pumps & Motors" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Pumps';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Hydraulic Pumps & Motors</h3>
                    
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="11-pumps.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Pumps" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Hydraulic%20Pumps" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Key Product 3: Hydraulic Valves -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center">
                        <img src="assets/images/categories/11-03-valves-thumb.webp" alt="Hydraulic Valves" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Valves';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Hydraulic Valves</h3>
                    
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="12-valves.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hydraulic%20Valves" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Hydraulic%20Valves" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Key Product 4: Hoists & Cylinders -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center">
                        <img src="assets/images/categories/11-05-hoists-thumb.webp" alt="Hoists & Cylinders" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Hoists';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Hoists & Cylinders</h3>
                    
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="13-hoists-cylinders.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hoists%20and%20Cylinders" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Hoists%20and%20Cylinders" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Key Product 5: Cabin Controls & Electrical -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center">
                        <img src="assets/images/categories/11-06-controls-thumb.webp" alt="Cabin Controls & Electrical" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Controls';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Cabin Controls & Electrical</h3>
                    
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="14-controls.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Cabin%20Controls" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Cabin%20Controls" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Key Product 6: Spares and Auxiliary -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center">
                        <img src="assets/images/categories/11-12-spares-thumb.webp" alt="Spares and Auxiliary" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Spares';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Spares and Auxiliary</h3>
                    
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="15-spares.php" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Spares%20and%20Auxiliary" class="flex-1 group flex items-center justify-center py-2 px-2 bg-gray-100 hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Maintenance%20Spares" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================= -->
    <!-- KEY APPLICATIONS BLOCK    -->
    <!-- ========================= -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-12">OUR KEY APPLICATIONS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Application 1: Standard Rear Tipper Truck -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-01-tipper.webp" alt="Standard Rear Tipper Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Tipper';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Standard Rear Tipper Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Standard%20Rear%20Tipper%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Standard%20Rear%20Tipper%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 2: Tilt and Slide Truck -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-02-tiltslide.webp" alt="Tilt and Slide Truck (Tow Truck)" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Tilt+Slide';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Tilt and Slide Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Tilt%20and%20Slide%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Tilt%20and%20Slide%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 3: Waste Collection -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-03-waste.webp" alt="Waste Collection and Compression Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Waste';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Waste Collection Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Waste%20Collection%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Waste%20Collection%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 4: Skip Bin Loader -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-04-skiploader.webp" alt="Skip Bin Loader Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Skip+Loader';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Skip Bin Loader Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Skip%20Bin%20Loader" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Skip%20Bin%20Loader" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 5: Crane Truck -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-05-crane.webp" alt="Crane Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Crane';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Crane Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Crane%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Crane%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 6: Side Tipper -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-06-sidetipper.webp" alt="Side Tipper Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Side+Tipper';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Side Tipper Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Side%20Tipper%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Side%20Tipper%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 7: Hook Lift -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-07-hooklift.webp" alt="Hook Lift Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Hook+Lift';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Hook Lift Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Hook%20Lift%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Hook%20Lift%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 8: Walking Floor -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-08-walkingfloor.webp" alt="Walking Floor Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Walking+Floor';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Walking Floor Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Walking%20Floor%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Walking%20Floor%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Application 9: Low Loader -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <div class="mx-auto mb-4 rounded w-full aspect-square overflow-hidden flex items-center justify-center bg-white">
                        <img src="assets/images/applications/40-09-lowloader.webp" alt="Low Loader Truck" class="w-full h-full object-contain" onerror="this.onerror=null; this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=Low+Loader';">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Low Loader Truck</h3>
                    <!-- Action Toolbar -->
                    <div class="mt-auto flex space-x-2 pt-4 border-t border-gray-200">
                        <a href="4-products.php#kits" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Read More">
                            <i class="fas fa-info-circle text-xl"></i>
                        </a>
                        <a href="tel:+61397912255" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Call Us">
                            <i class="fas fa-phone-alt text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Enquiry%20about%20Low%20Loader%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-white hover:bg-red-600 rounded-md text-gray-600 hover:text-white transition-colors duration-300 shadow-sm border border-gray-100" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="3-contact.php?reason=sales&product=Low%20Loader%20Truck" class="flex-1 group flex items-center justify-center py-2 px-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition-colors duration-300" title="Contact Form">
                            <i class="fas fa-paper-plane text-lg"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================= -->
    <!-- SLOGAN / CALLOUT BLOCK    -->
    <!-- ========================= -->
    <section class="py-12 bg-red-700 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-semibold">
                Powerauto Hydraulics are leaders in hydraulic engineering in Australia, specialising in trucks, transport hydraulics, and mobile equipment!
            </h2>
        </div>
    </section>

<?php 
$showFooterPartners = true;
include 'includes/footer.php'; 
?>