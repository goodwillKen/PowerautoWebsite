<?php
// Page Configuration
$pageTitle = 'Powerauto Hydraulics - About Us';
$activePage = 'about';

// Page Specific CSS (Slick Carousel + Hero Styles)
$extraCSS = '
<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
<style>
    /* Page Hero Styles */
    .page-hero {
        position: relative;
        overflow: hidden;
    }
    .banner-image {
        width: 100%;
        height: auto;
        max-height: 550px;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    /* Slick Carousel custom arrows */
    .slick-prev, .slick-next {
        z-index: 1;
    }
</style>';

// CORRECTED PATH: Pointing to the 'includes' folder shown in your screenshot
if (file_exists(__DIR__ . '/includes/header.php')) {
    include __DIR__ . '/includes/header.php'; 
} else {
    echo "<div style='color:red; padding:20px; text-align:center; font-weight:bold;'>Error: header.php not found in " . __DIR__ . "/includes/</div>";
}
?>

    <!-- ========================= -->
    <!-- PAGE HERO BLOCK           -->
    <!-- ========================= -->
    <section class="page-hero relative bg-gray-700">
        <img src="images/AboutUsBannerWide.png" alt="About Powerauto Hydraulics" class="banner-image" onerror="this.onerror=null; this.src='https://placehold.co/3800x550/3D4852/F7FAFC?text=About+Powerauto';">
        
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-between items-center py-1">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold">About Powerauto Hydraulics</h1>
            </div>
            <div class="text-center text-white px-4">
                <p class="text-lg md:text-xl font-medium">Powering Australian Transport Since 2001</p>
            </div>
        </div>
    </section>

    <!-- ========================= -->
    <!-- MAIN CONTENT BLOCK        -->
    <!-- ========================= -->
    <main class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- "Our Heritage" Section -->
            <section class="mb-12 md:mb-16">
                <div class="flex flex-col lg:flex-row items-start gap-12">
                    <div class="lg:w-3/5">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Heritage</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed">
                            <p>
                                Powerauto Hydraulics (Powerauto Vic Pty Ltd) has operated from Dandenong South since 2001, serving the Victorian transport industry with mobile hydraulic solutions. Our business maintains a direct connection to the original <strong>David-Brown Engineering & Hydraulics Pty Ltd</strong>, the company responsible for establishing the <strong>POWAUTO</strong> brand in Australia.
                            </p>
                            <p>
                                Following the acquisition of David-Brown by <strong>Textron</strong>, the new ownership made the decision to divest its Australian holdings during the market downturn at the turn of the millennium. In response to these liquidations, our Managing Director acquired the Victorian operations to ensure the local industry retained access to essential supply lines and technical expertise.
                            </p>
                            <p>
                                As part of this transition, we retained the <strong>Victorian Master Distributorship for Hydreco Powauto</strong> products. This allows us to provide uninterrupted access to the Hydreco inventory while maintaining the technical knowledge required to support both legacy equipment and modern hydraulic systems.
                            </p>
                            
                            <!-- Strategic Partnerships Sub-Section -->
                            <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-6">Strategic Partnerships</h3>
                            <div class="space-y-6">
                                <!-- Hydreco Block -->
                                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-red-600 shadow-sm">
                                    <div class="flex items-center mb-3">
                                        <h4 class="text-xl font-bold text-gray-800 mr-4">Hydreco Powauto</h4>
                                        <span class="text-xs font-semibold bg-blue-100 text-blue-800 px-2 py-1 rounded border border-blue-200">Member of DAIKIN Group</span>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3 font-medium">
                                        Victorian Master Distributor.
                                    </p>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        We provide the complete catalogue of PTOs, pumps, and valves from Hydreco Powauto. Backed by the manufacturing capabilities of the <strong>DAIKIN Group</strong>, the range includes gear pumps, piston pumps, and control valves engineered for Australian transport conditions. Hydreco’s history of reliable product delivery underpins our inventory.
                                    </p>
                                </div>

                                <!-- Other Partners Grid (Expanded to 2x2) -->
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div class="bg-white border border-gray-200 p-5 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                                        <h4 class="font-bold text-gray-800 mb-2 text-lg">Superwinch</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            Superwinch products represent the majority of our winch inventory. We stock a comprehensive range of electric and hydraulic winches suitable for both industrial recovery and recreational applications.
                                        </p>
                                    </div>
                                    <div class="bg-white border border-gray-200 p-5 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                                        <h4 class="font-bold text-gray-800 mb-2 text-lg">Scanreco</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            We supply, program, and pair Scanreco radio remote receivers and transmitters in-house. Our service supports various applications, for example, Cranes, Tilt Trays, and Hook Lifts.
                                        </p>
                                    </div>
                                    <div class="bg-white border border-gray-200 p-5 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                                        <h4 class="font-bold text-gray-800 mb-2 text-lg">Hydac</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            We partner with Hydac for specialized mobile hydraulic projects. This includes utilizing components such as their control systems and tilt slide valves for engineering tasks requiring specific configurations.
                                        </p>
                                    </div>
                                    <!-- NEW CARD: WorX Plus -->
                                    <div class="bg-white border border-gray-200 p-5 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                                        <h4 class="font-bold text-gray-800 mb-2 text-lg">WorX Plus</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            We collaborate with WorX Plus on their concrete surface preparation equipment. Our team is currently developing the hydraulic control systems for their new range of concrete grinders to meet specific operational demands.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Toolbar -->
                        <div class="flex flex-wrap gap-3 mt-8">
                            <a href="tel:+61397912255" class="flex-1 sm:flex-none group flex items-center justify-center py-3 px-6 bg-gray-800 hover:bg-gray-900 rounded-lg text-white transition duration-300" title="Call Us">
                                <i class="fas fa-phone-alt mr-2"></i> Call Us
                            </a>
                            <a href="mailto:sales@powerauto.com.au?subject=General%20Enquiry&body=Hi%20Powerauto%20Team%2C%0D%0A%0D%0AI%20would%20like%20to%20know%20more%20about%20your%20services.%0D%0A%0D%0APlease%20contact%20me.%0D%0A%0D%0ARegards%2C" class="flex-1 sm:flex-none group flex items-center justify-center py-3 px-6 bg-gray-200 hover:bg-red-600 hover:text-white text-gray-800 rounded-lg transition duration-300" title="Email Us">
                                <i class="fas fa-envelope mr-2"></i> Email
                            </a>
                            <a href="contact.php?reason=general" class="flex-1 sm:flex-none group flex items-center justify-center py-3 px-6 bg-red-600 hover:bg-red-700 text-white rounded-lg transition duration-300" title="Contact Form">
                                <i class="fas fa-paper-plane mr-2"></i> Contact Form
                            </a>
                        </div>

                    </div>
                    <div class="lg:w-2/5">
                        <div class="sticky top-24 space-y-6">
                            <img src="images/Powerauto-about.webp" alt="Powerauto Hydraulics Workshop" class="rounded-lg shadow-xl w-full" onerror="this.onerror=null; this.src='https://placehold.co/600x400/CCCCCC/4A4A4A?text=Workshop+View';">
                            <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-red-600 shadow-md">
                                <h4 class="font-bold text-lg text-gray-800 mb-2">Did You Know?</h4>
                                <p class="text-sm text-gray-600 mb-3">Our Dandenong facility maintains a significant inventory of critical spares to support rapid turnaround for urgent breakdowns.</p>
                                <p class="text-sm text-gray-600 mb-3">We also maintain an R&D capability grounded by academic research expertise. This team focuses on custom solutions and integration projects, allowing us to address complex hydraulic requirements beyond standard applications.</p>
                                <p class="text-sm text-gray-600">Our location in the Dandenong South industrial precinct positions us in the heart of Victoria's manufacturing hub. This proximity facilitates close collaboration with local body builders and OEMs, enabling efficient system integration and product support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- "Core Capabilities" Section -->
            <section class="mb-12 md:mb-16 bg-gray-50 p-8 md:p-12 rounded-lg">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-800">Operational Capabilities</h3>
                    <p class="text-gray-600 mt-2">Combining global brands with local technical expertise.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8 text-center">
                    <div>
                        <div class="text-red-600 text-4xl mb-4"><i class="fas fa-tools"></i></div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">System Engineering</h4>
                        <p class="text-gray-600 text-sm">We design complete hydraulic circuits, from wet-kit fit-outs to custom control logic, ensuring component compatibility.</p>
                    </div>
                    <div>
                        <div class="text-red-600 text-4xl mb-4"><i class="fas fa-warehouse"></i></div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Strategic Inventory</h4>
                        <p class="text-gray-600 text-sm">We stock critical components including Hydreco PTOs, Superwinch units, and Scanreco remotes in Dandenong to minimize downtime.</p>
                    </div>
                    <div>
                        <div class="text-red-600 text-4xl mb-4"><i class="fas fa-microchip"></i></div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Integration</h4>
                        <p class="text-gray-600 text-sm">We provide solutions bridging mechanical power and digital control, supporting specialized requirements.</p>
                    </div>
                </div>
            </section>
            
            <!-- Partner with Us Section -->
            <section class="mb-16 py-10 border-t border-gray-200">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Partner With Us</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        We offer dedicated support for fleet operators, workshops, and manufacturers.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Card 1: Trade Account -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                        <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <i class="fas fa-file-invoice-dollar text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Open a Trade Account</h3>
                        <p class="text-gray-600 text-sm text-center mb-6 flex-grow">
                            Streamline procurement with a 30-day trade account. Consolidated invoicing and priority dispatch for regular orders.
                        </p>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="tel:+61397912255" class="block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-4 rounded transition duration-300">
                                <i class="fas fa-phone-alt"></i> Call
                            </a>
                            <a href="mailto:accounts@powerauto.com.au?subject=Trade%20Account%20Application&body=Hi%20Accounts%20Team%2C%0D%0A%0D%0AWe%20would%20like%20to%20apply%20for%20a%20trade%20account.%0D%0A%0D%0ACompany%20Name%3A%20%0D%0AContact%20Person%3A%20%0D%0APhone%3A%20%0D%0A%0D%0APlease%20send%20us%20the%20application%20forms.%0D%0A%0D%0ARegards%2C" class="block text-center bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-4 rounded transition duration-300">
                                <i class="fas fa-envelope mr-2"></i> Apply
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Fleet Supply -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                        <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <i class="fas fa-truck-moving text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Fleet Supply Arrangements</h3>
                        <p class="text-gray-600 text-sm text-center mb-6 flex-grow">
                            Discuss standing orders or critical spares agreements to support fleet maintenance requirements.
                        </p>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="tel:+61397912255" class="block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-4 rounded transition duration-300">
                                <i class="fas fa-phone-alt"></i> Call
                            </a>
                            <a href="mailto:sales@powerauto.com.au?subject=Fleet%20Supply%20Enquiry&body=Hi%20Sales%20Team%2C%0D%0A%0D%0AI%20manage%20a%20fleet%20and%20would%20like%20to%20discuss%20supply%20arrangements.%0D%0A%0D%0APlease%20contact%20me.%0D%0A%0D%0ARegards%2C" class="block text-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-4 rounded transition duration-300">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Distribution Opportunities -->
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                        <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <i class="fas fa-handshake text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Distribution Opportunities</h3>
                        <p class="text-gray-600 text-sm text-center mb-6 flex-grow">
                            Are you a manufacturer seeking a technical partner in Victoria? Contact us to discuss product distribution opportunities.
                        </p>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="tel:+61397912255" class="block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-4 rounded transition duration-300">
                                <i class="fas fa-phone-alt"></i> Call
                            </a>
                            <a href="mailto:sales@powerauto.com.au?subject=New%20Product%20Distribution%20Partnership&body=Hi%20Powerauto%20Management%2C%0D%0A%0D%0AWe%20are%20a%20manufacturer%20of%20%5BProduct%20Type%5D%20and%20are%20interested%20in%20Powerauto%20acting%20as%20our%20distributor.%0D%0A%0D%0APlease%20contact%20us%20to%20discuss%20opportunities.%0D%0A%0D%0ARegards%2C" class="block text-center bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-4 rounded transition duration-300">
                                <i class="fas fa-envelope mr-2"></i> Email
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- "Why Choose Us" Carousel Section -->
            <section class="mb-12 md:mb-16 relative">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-10">Why Choose Powerauto Hydraulics?</h2>
                <div class="content-carousel">
                    <div class="text-center p-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg h-full flex flex-col items-center">
                            <i class="fas fa-medal text-5xl text-red-600 mb-4"></i>
                            <h4 class="text-xl font-semibold text-gray-700 mb-2">Proven Reliability</h4>
                            <p class="text-gray-600 text-sm">Established in 2001 with a track record of operational resilience and technical excellence.</p>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg h-full flex flex-col items-center">
                            <i class="fas fa-check-circle text-5xl text-red-600 mb-4"></i>
                            <h4 class="text-xl font-semibold text-gray-700 mb-2">Authorized Distributor</h4>
                            <p class="text-gray-600 text-sm">Direct line to Hydreco, Scanreco, Superwinch, and other global manufacturers.</p>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg h-full flex flex-col items-center">
                            <i class="fas fa-cogs text-5xl text-red-600 mb-4"></i>
                            <h4 class="text-xl font-semibold text-gray-700 mb-2">Technical Partner</h4>
                            <p class="text-gray-600 text-sm">Custom solenoid boxes and remote control programming and transmitter pairing.</p>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg h-full flex flex-col items-center">
                            <i class="fas fa-users text-5xl text-red-600 mb-4"></i>
                            <h4 class="text-xl font-semibold text-gray-700 mb-2">Customer-Centric</h4>
                            <p class="text-gray-600 text-sm">Dedicated support and tailored solutions to meet specific requirements.</p>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg h-full flex flex-col items-center">
                            <i class="fas fa-map-marked-alt text-5xl text-red-600 mb-4"></i>
                            <h4 class="text-xl font-semibold text-gray-700 mb-2">Strategic Location</h4>
                            <p class="text-gray-600 text-sm">Located in Dandenong South near major arterials for rapid service.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php 
// CORRECTED PATH: Pointing to the 'includes' folder shown in your screenshot
if (file_exists(__DIR__ . '/includes/footer.php')) {
    include __DIR__ . '/includes/footer.php'; 
} else {
    echo "<div style='color:red; padding:20px; text-align:center; font-weight:bold;'>Error: footer.php not found in " . __DIR__ . "/includes/</div>";
}
?>

<!-- Page Specific Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        // Carousel Init
        $('.content-carousel').slick({
            dots: true,
            infinite: true, 
            speed: 500,
            slidesToShow: 3, 
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev absolute top-1/2 left-0 z-10 -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 focus:outline-none"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next absolute top-1/2 right-0 z-10 -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 focus:outline-none"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                { breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1 } },
                { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }
            ]
        });
    });
</script>