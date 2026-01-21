<?php 
$pageTitle = "Cabin Controls - Powerauto Hydraulics";
$activePage = "products";

include 'includes/header.php';
include 'includes/product_data.php';
include 'includes/product_renderer.php';
?>

    <section class="page-hero">
        <img src="assets/images/products/10-06-controls-header.webp" alt="Controls Header" class="w-full h-full object-cover opacity-60 blur-sm" onerror="this.src='https://placehold.co/1920x400/374151/FFFFFF?text=Controls'">
        <div class="hero-overlay">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-2">Cabin Controls</h1>
                <div class="text-sm md:text-base text-gray-300">
                    <a href="4-products.php" class="hover:text-white underline">Products</a> <i class="fas fa-chevron-right mx-2 text-xs"></i> <span>Controls</span>
                </div>
            </div>
        </div>
    </section>

    <main class="py-12 md:py-16 bg-white flex-grow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">Operator Interface</h2>
                <p class="text-gray-600 leading-relaxed max-w-4xl">
                    Manage your hydraulic and pneumatic systems effectively with Powerauto Hydraulics’ range of cabin controls and electrical components. We offer pneumatic control kits, electric/pneumatic kits, cable controls, and radio remote systems.
                </p>
            </div>

            <div class="mb-16">
                <?php 
                if (isset($catalog['controls'])) {
                    renderProductCatalog($catalog['controls']); 
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