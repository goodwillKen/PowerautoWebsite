<?php 
$pageTitle = "Power Take-Offs (PTOs) - Powerauto Hydraulics";
$activePage = "products";

include 'includes/header.php';
include 'includes/product_data.php';
include 'includes/product_renderer.php';
?>

    <!-- HERO SECTION -->
    <section class="page-hero">
        <img src="assets/images/products/10-01-pto-header.webp" alt="PTO Header" class="w-full h-full object-cover opacity-60 blur-sm" onerror="this.src='https://placehold.co/1920x400/374151/FFFFFF?text=PTO+Header'">
        <div class="hero-overlay">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-2">Power Take-Offs</h1>
                <div class="text-sm md:text-base text-gray-300">
                    <a href="4-products.php" class="hover:text-white underline">Products</a> <i class="fas fa-chevron-right mx-2 text-xs"></i> <span>Power Take-Offs (PTOs)</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <main class="py-12 md:py-16 bg-white flex-grow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- 1. OVERVIEW SECTION -->
            <div class="flex flex-col lg:flex-row gap-10 mb-12">
                <div class="lg:w-1/3">
                    <div class="bg-gray-50 rounded-lg border border-gray-200 p-4 sticky top-24">
                        <img src="assets/images/products/10-01-pto-header.webp" alt="PTOs" class="w-full h-auto object-contain rounded" onerror="this.src='https://placehold.co/800x800/CCCCCC/4A4A4A?text=PTOs'">
                    </div>
                </div>
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">Overview</h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed">
                        <p class="mb-4">Powerauto Hydraulics offers a comprehensive range of robust Power Take-Off units designed for the demanding Australian transport industry. Choose from side-mount, rear-mount, and heavy-duty hot shift PTOs compatible with major transmissions like Eaton Fuller, Allison, ZF, Volvo/Mack, Mercedes, Isuzu, Hino, Mitsubishi Fuso, UD Nissan, Iveco, Scania, Paccar, Detroit/Daimler, and more.</p>
                        <p>We provide complete mounting kits, gear adapters, and various output options (e.g., DIN 5462 Spline, SAE Spline A/B/BB/C, keyed shaft, 1310/1410 Series Flange) to ensure seamless integration. Engage your hydraulic system reliably with our airshift, cable shift, vacuum shift, or electro-hydraulic engagement options.</p>
                    </div>
                </div>
            </div>

            <!-- 2. COMMON MODELS -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Common Models</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-gray-50 border border-gray-200 p-4 rounded text-center">
                        <h4 class="font-bold text-gray-700">PA850/851 Series</h4>
                        <p class="text-sm text-gray-500">8-Bolt Heavy Duty</p>
                    </div>
                    <div class="bg-gray-50 border border-gray-200 p-4 rounded text-center">
                        <h4 class="font-bold text-gray-700">PA4000 Hotshift</h4>
                        <p class="text-sm text-gray-500">Allison Automatic</p>
                    </div>
                    <div class="bg-gray-50 border border-gray-200 p-4 rounded text-center">
                        <h4 class="font-bold text-gray-700">Rear Mount</h4>
                        <p class="text-sm text-gray-500">PA3900 High Torque</p>
                    </div>
                    <div class="bg-gray-50 border border-gray-200 p-4 rounded text-center">
                        <h4 class="font-bold text-gray-700">Deep Reach</h4>
                        <p class="text-sm text-gray-500">Isuzu / Hino Specific</p>
                    </div>
                </div>
            </div>

            <!-- 3. TECHNICAL COMPARISONS TABLE -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Technical Comparison</h3>
                <div class="overflow-x-auto bg-white rounded-lg shadow border border-gray-200">
                    <table class="tech-table">
                        <thead>
                            <tr>
                                <th>Series</th>
                                <th>Mounting</th>
                                <th>Torque (Nominal)</th>
                                <th>Engagement</th>
                                <th>Typical Application</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PA850 / 851</td>
                                <td>8 Bolt Bottom</td>
                                <td>450 Nm</td>
                                <td>Air / Cable</td>
                                <td>Tippers, Water Carts</td>
                            </tr>
                            <tr>
                                <td>PA3900</td>
                                <td>Rear Mount</td>
                                <td>600 Nm+</td>
                                <td>Air</td>
                                <td>Cranes, Heavy Haulage</td>
                            </tr>
                            <tr>
                                <td>PA4000</td>
                                <td>Allison 6/10 Bolt</td>
                                <td>580 Nm</td>
                                <td>Hydraulic Clutch</td>
                                <td>Waste, Agitators</td>
                            </tr>
                            <tr>
                                <td>PA3800</td>
                                <td>6 Bolt Side</td>
                                <td>300 Nm</td>
                                <td>Air / Vacuum</td>
                                <td>Japanese Trucks</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 4. PRODUCT CATALOG (DYNAMIC) -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b border-gray-200 pb-4">Product Catalog</h2>
                
                <?php 
                if (isset($catalog['pto'])) {
                    renderProductCatalog($catalog['pto']); 
                } else {
                    echo "<p class='text-gray-500'>Product data not found.</p>";
                }
                ?>

            </div>

        </div>
    </main>

<?php 
$showFooterPartners = true;
include 'includes/footer.php'; 
?>