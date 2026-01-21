<?php 
$pageTitle = "Winch & Recovery - Powerauto Hydraulics";
$activePage = "products";

$extraCSS = '
<style>
    .page-hero { height: 350px; background-color: #1f2937; position: relative; overflow: hidden; }
    .hero-overlay { background: rgba(0, 0, 0, 0.6); position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; }
    
    details > summary { list-style: none; }
    details > summary::-webkit-details-marker { display: none; }
    .accordion-l1 { border: 1px solid #e5e7eb; border-radius: 0.5rem; margin-bottom: 0.5rem; overflow: hidden; background-color: white; }
    .accordion-l1 > summary { padding: 1rem; background-color: #f9fafb; cursor: pointer; font-weight: 700; color: #1f2937; display: flex; justify-content: space-between; align-items: center; transition: background-color 0.2s; }
    .accordion-l1 > summary:hover { background-color: #f3f4f6; }
    .accordion-l1 > summary::after { content: "\f078"; font-family: "Font Awesome 5 Free"; font-weight: 900; transition: transform 0.3s; }
    .accordion-l1[open] > summary::after { transform: rotate(180deg); }
    .accordion-l1-content { padding: 1rem; border-top: 1px solid #e5e7eb; }
    .accordion-l2 { margin-bottom: 0.5rem; border-left: 4px solid #ef4444; background-color: #fff; }
    .accordion-l2 > summary { padding: 0.75rem; background-color: #fef2f2; cursor: pointer; font-weight: 600; color: #7f1d1d; }
    .accordion-l2 > summary:hover { background-color: #fee2e2; }
    .accordion-l2-content { padding: 0.75rem; }
    .accordion-l3 { margin-bottom: 0.5rem; background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 0.25rem; }
    .accordion-l3 > summary { padding: 0.5rem 0.75rem; cursor: pointer; font-weight: 500; color: #374151; display: flex; align-items: center; }
    .accordion-l3 > summary::before { content: "\f0da"; font-family: "Font Awesome 5 Free"; font-weight: 900; margin-right: 0.5rem; color: #9ca3af; transition: transform 0.2s; }
    .accordion-l3[open] > summary::before { transform: rotate(90deg); color: #ef4444; }
    .accordion-l3-content { padding: 1.5rem; background-color: white; font-size: 0.95rem; border-top: 1px solid #e5e7eb; }
</style>';

include 'includes/header.php';
include 'includes/product_data.php';
include 'includes/product_renderer.php';
?>

    <section class="page-hero">
        <img src="images/WINCHcategory1200x1200.png" class="w-full h-full object-cover opacity-60 blur-sm" onerror="this.src='https://placehold.co/1920x400/374151/FFFFFF?text=Winch'">
        <div class="hero-overlay">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-2">Winch & Recovery</h1>
                <div class="text-sm md:text-base text-gray-300">
                    <a href="products.php" class="hover:text-white underline">Products</a> <i class="fas fa-chevron-right mx-2 text-xs"></i> <span>Winch</span>
                </div>
            </div>
        </div>
    </section>

    <main class="py-12 md:py-16 bg-white flex-grow">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">Recovery Solutions</h2>
                <p class="text-gray-600 leading-relaxed max-w-4xl">
                    Powerauto Hydraulics provides reliable winching solutions for recovery and industrial applications. Our range includes electric winches in various capacities (e.g., 8000lb, 12000lb, 15000lb, 18000lb) available in 12V or 24V options.
                </p>
            </div>

            <div class="mb-16">
                <?php 
                if (isset($catalog['winch'])) {
                    renderProductCatalog($catalog['winch']); 
                }
                ?>
            </div>
        </div>
    </main>

<?php 
$showFooterPartners = true;
include 'includes/footer.php'; 
?>