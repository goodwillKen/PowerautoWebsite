<?php
/**
 * Function to render the 3-Level Accordion Product Catalog
 * @param array $data The specific category array from product_data.php
 */
function renderProductCatalog($data) {
    if (!$data) return;

    foreach ($data as $group) {
        $l1Open = isset($group['open']) && $group['open'] ? 'open' : '';
        
        echo '<details class="accordion-l1" ' . $l1Open . '>';
        echo '<summary>' . htmlspecialchars($group['title']) . '</summary>';
        echo '<div class="accordion-l1-content">';

        if (isset($group['subgroups'])) {
            foreach ($group['subgroups'] as $subgroup) {
                $l2Open = isset($subgroup['open']) && $subgroup['open'] ? 'open' : '';
                
                echo '<details class="accordion-l2" ' . $l2Open . '>';
                echo '<summary>' . htmlspecialchars($subgroup['title']) . '</summary>';
                echo '<div class="accordion-l2-content">';

                if (isset($subgroup['products'])) {
                    foreach ($subgroup['products'] as $product) {
                        renderSingleProduct($product);
                    }
                }

                echo '</div></details>'; // End Level 2
            }
        }
        
        // Handle direct products in Level 1 if any (flexible structure)
        if (isset($group['products'])) {
            foreach ($group['products'] as $product) {
                echo '<div class="p-2">'; 
                renderSingleProduct($product);
                echo '</div>';
            }
        }

        echo '</div></details>'; // End Level 1
    }
}

/**
 * Helper to render the inner product card (Level 3)
 */
function renderSingleProduct($product) {
    ?>
    <details class="accordion-l3">
        <summary><?php echo htmlspecialchars($product['model']); ?></summary>
        <div class="accordion-l3-content">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- LEFT: Content -->
                <div class="flex-1 space-y-6">
                    <div>
                        <h5 class="font-bold text-gray-700 mb-2 border-b pb-1">Description</h5>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php echo htmlspecialchars($product['description']); ?>
                        </p>
                    </div>
                    
                    <?php if (!empty($product['applications'])): ?>
                    <div>
                        <h5 class="font-bold text-gray-700 mb-2 border-b pb-1">Applications</h5>
                        <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                            <?php foreach ($product['applications'] as $app): ?>
                                <li><?php echo htmlspecialchars($app); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($product['specs'])): ?>
                    <div>
                        <h5 class="font-bold text-gray-700 mb-2 border-b pb-1">Specifications</h5>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-600">
                                <tbody>
                                    <?php foreach ($product['specs'] as $key => $val): ?>
                                    <tr class="border-b border-gray-100">
                                        <th class="py-1 font-semibold w-1/3"><?php echo htmlspecialchars($key); ?></th>
                                        <td class="py-1"><?php echo htmlspecialchars($val); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- RIGHT: Image -->
                <div class="lg:w-1/3 flex flex-col items-center">
                    <div class="w-full max-w-[400px] bg-white border border-gray-200 rounded-lg p-2 shadow-sm">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['model']); ?>" class="w-full h-auto object-contain rounded">
                    </div>
                </div>
            </div>

            <!-- Documents -->
            <?php if (!empty($product['docs'])): ?>
            <div class="mt-8 pt-6 border-t border-gray-200">
                <h5 class="font-bold text-gray-800 mb-4"><i class="fas fa-folder-open mr-2 text-red-600"></i>Documents & Content</h5>
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-100">
                    <h6 class="font-semibold text-gray-700 text-sm mb-3">Technical Docs</h6>
                    <ul class="space-y-3 text-sm">
                        <?php foreach ($product['docs'] as $doc): ?>
                        <li class="flex items-center justify-between group">
                            <div class="flex items-center text-gray-600">
                                <i class="<?php echo $doc['icon']; ?> w-6"></i>
                                <span><?php echo htmlspecialchars($doc['name']); ?></span>
                            </div>
                            <div class="flex space-x-2">
                                <!-- VIEW BUTTON: Triggers the modal -->
                                <button type="button" onclick="openPdfViewer('<?php echo $doc['url']; ?>', '<?php echo htmlspecialchars($doc['name']); ?>')" class="text-xs bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-1 rounded transition duration-200 flex items-center">
                                    <i class="fas fa-eye mr-1"></i> Preview
                                </button>
                                <!-- DOWNLOAD LINK: Fallback -->
                                <a href="<?php echo $doc['url']; ?>" target="_blank" class="text-xs bg-red-50 hover:bg-red-100 text-red-600 px-3 py-1 rounded transition duration-200 flex items-center" download>
                                    <i class="fas fa-download mr-1"></i> PDF
                                </a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>

            <!-- Actions -->
            <div class="mt-6 pt-4 flex flex-wrap gap-3">
                <a href="contact.php?reason=sales&product=<?php echo urlencode($product['model']); ?>" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded text-sm transition duration-300">Enquire Now</a>
            </div>
        </div>
    </details>
    <?php
}
?>