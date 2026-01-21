<?php 
$pageTitle = "Maintenance & Spares - Powerauto Hydraulics";
$activePage = "products";

include 'includes/header.php';
include 'includes/product_data.php';
include 'includes/product_renderer.php';
?>

    <section class="page-hero">
        <img src="assets/images/products/10-12-spares-header.webp" alt="Spares Header" class="w-full h-full object-cover opacity-60 blur-sm" onerror="this.src='https://placehold.co/1920x400/374151/FFFFFF?text=Spares'">
        <div class="hero-overlay">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-2">Maintenance & Spares</h1>
                <div class="text-sm md:text-base text-gray-300">
                    <a href="4-products.php" class="hover:text-white underline">Products</a> <i class="fas fa-chevron-right mx-2 text-xs"></i> <span>Spares</span>
                </div>
            </div>
        </div>
    </section>

    <main class="py-12 md:py-16 bg-white flex-grow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">Repair & Rebuild</h2>
                <p class="text-gray-600 leading-relaxed max-w-4xl">
                    Keep your Powerauto Hydraulics equipment running smoothly with our comprehensive range of maintenance parts, spares, and kits. We stock genuine seal kits, bearing kits, and gasket kits.
                </p>
            </div>

            <div class="mb-16">
                <?php 
                if (isset($catalog['maintenance'])) {
                    renderProductCatalog($catalog['maintenance']); 
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