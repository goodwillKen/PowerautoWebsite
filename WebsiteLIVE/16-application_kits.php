<?php 
$pageTitle = "Application Kits - Powerauto Hydraulics";
$activePage = "products";

include 'includes/header.php';
include 'includes/product_data.php';
include 'includes/product_renderer.php';
?>

    <section class="page-hero">
        <img src="assets/images/products/10-11-kits-header.webp" class="w-full h-full object-cover opacity-60 blur-sm" onerror="this.src='https://placehold.co/1920x400/374151/FFFFFF?text=Application+Kits'">
        <div class="hero-overlay">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-2">Application Kits</h1>
                <div class="text-sm md:text-base text-gray-300">
                    <a href="4-products.php" class="hover:text-white underline">Products</a> <i class="fas fa-chevron-right mx-2 text-xs"></i> <span>Kits</span>
                </div>
            </div>
        </div>
    </section>

    <main class="py-12 md:py-16 bg-white flex-grow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-10 mb-12">
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">Complete Hydraulic Solutions</h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed">
                        <p class="mb-4">Application Kits from Powerauto Hydraulics are pre-engineered hydraulic packages built around real truck applications such as tippers, hook lifts, skip loaders, and cranes. Each kit is matched to the job, combining the correct PTO, pump, valves, and tank so you can install with confidence.</p>
                    </div>
                </div>
                <div class="lg:w-1/3">
                     <div class="bg-red-50 border-l-4 border-red-600 p-4 rounded">
                        <h4 class="font-bold text-red-700 mb-2">Need a Custom Kit?</h4>
                        <p class="text-sm text-gray-600 mb-4">We can tailor any package to suit specific chassis or body requirements.</p>
                        <a href="3-contact.php?reason=sales" class="text-sm font-semibold text-red-700 hover:text-red-800 underline">Contact Engineering Team &rarr;</a>
                     </div>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Product Catalog</h2>
                <?php 
                if (isset($catalog['kits'])) {
                    renderProductCatalog($catalog['kits']); 
                } else {
                    echo "<p class='text-gray-500'>No products found in this category.</p>";
                }
                ?>
            </div>
        </div>
    </main>

<?php 
$showFooterPartners = true;
include 'includes/footer.php'; 
?>