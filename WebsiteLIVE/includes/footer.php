<?php
// Default to hiding partners unless specific page requests them
if (!isset($showFooterPartners)) { $showFooterPartners = false; }
?>

    <footer class="bg-gray-900 text-gray-300 pt-12 pb-8 mt-auto">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <h5 class="text-xl font-semibold text-white mb-4">POWERAUTO HYDRAULICS</h5>
                    <p class="text-sm mb-4">Your trusted partner for hydraulic solutions in Australia. Specialising in transport hydraulics and mobile equipment.</p>
                    <p class="text-sm">4/147 Greens Road, Dandenong South, VIC, Australia</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-white mb-4">Quick Links</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="2-about.php" class="hover:text-red-400 transition duration-300">About Us</a></li>
                        <li><a href="4-products.php" class="hover:text-red-400 transition duration-300">Products</a></li>
                        <li><a href="3-contact.php" class="hover:text-red-400 transition duration-300">Contact Us</a></li>
                        <li><a href="#" onclick="openLeadModal(); return false;" class="hover:text-red-400 transition duration-300">Stay Updated</a></li>
                        <li><a href="90-privacy.php" class="hover:text-red-400 transition duration-300">Privacy Policy</a></li>
                        <li><a href="91-terms.php" class="hover:text-red-400 transition duration-300">Terms of Use</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-white mb-4">Contact Info</h5>
                    <ul class="space-y-2 text-sm">
                        <li><i class="fas fa-map-marker-alt mr-2 text-red-400"></i> 4/147 Greens Road, Dandenong South 3175 VIC</li>
                        <li><a href="tel:+61397912255" class="hover:text-red-400 transition duration-300"><i class="fas fa-phone-alt mr-2 text-red-400"></i> +61 3 9791 2255</a></li>
                        <li><a href="mailto:sales@powerauto.com.au?subject=Website%20Enquiry" class="hover:text-red-400 transition duration-300"><i class="fas fa-envelope mr-2 text-red-400"></i> sales@powerauto.com.au</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-white mb-4">Find Us</h5>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://www.linkedin.com/company/powerauto-hydraulics" target="_blank" rel="noopener noreferrer" 
                           class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 text-gray-400 hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm" title="LinkedIn">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                        <a href="mailto:sales@powerauto.com.au?subject=Website%20Enquiry" 
                           class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 text-gray-400 hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm" title="Email Us">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="https://www.google.com/maps/place/Powerauto+Hydraulics" target="_blank" rel="noopener noreferrer" 
                           class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 text-gray-400 hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm" title="Google Maps">
                            <i class="fab fa-google text-lg"></i>
                        </a>
                        <a href="https://www.facebook.com/powerautohydraulics/" target="_blank" rel="noopener noreferrer" 
                           class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 text-gray-400 hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm" title="Facebook">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/powerautohydraulics" target="_blank" rel="noopener noreferrer" 
                           class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 text-gray-400 hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm" title="Instagram">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <!-- Add local directory links if needed -->
                    </div>
                </div>
            </div>

            <!-- Partners Section (Conditional) -->
            <?php if ($showFooterPartners): ?>
            <div class="py-8 mb-8">
                 <?php include __DIR__ . '/partners.php'; ?>
            </div>
            <?php endif; ?>

            <div class="text-center text-sm border-t border-gray-700 pt-8">
                <p>&copy; <span id="currentYear"></span> Powerauto Hydraulics Pty Ltd. All Rights Reserved.</p>
                <p>4/147 Greens Road, Dandenong South 3175 VIC.</p>
                <p>ABN: 78 095 800 436 | ACN: 095 800 436</p>
                <p class="mt-1">Website by S-KvdM</p>
            </div>
        </div>
    </footer>

    <!-- ========================= -->
    <!-- GLOBAL UTILITY ELEMENTS   -->
    <!-- ========================= -->
    <button id="backToTop" class="fixed bottom-5 right-5 bg-red-600 hover:bg-red-700 text-white p-3 rounded-full shadow-lg transition-opacity duration-300 opacity-0 z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- 1. Lead Modal -->
    <div id="leadModal" class="modal">
        <div class="modal-content">
            <span id="closeLeadModal" class="close-button">&times;</span>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/5 mb-4 md:mb-0 md:mr-6">
                    <img src="https://placehold.co/300x400/CCCCCC/4A4A4A?text=Hydraulic+Excellence" alt="Keep in touch" class="rounded-lg w-full h-auto object-cover">
                </div>
                <div class="md:w-3/5">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Keep me in the loop!</h3>
                    <p class="text-gray-600 mb-4 text-sm">Get the latest updates, product news, and special offers directly to your inbox.</p>
                    <form id="leadCaptureForm" action="submit_lead.php" method="POST">
                        <div class="mb-4">
                            <label for="leadNameModal" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="leadNameModal" name="leadName" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                        </div>
                        <div class="mb-4">
                            <label for="leadEmailModal" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="leadEmailModal" name="leadEmail" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                        </div>
                        <input type="hidden" name="return_url" id="leadReturnUrl">
                        <button type="submit" id="leadSubmitButtonModal" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-md transition duration-300">Keep In Touch</button>
                        <p id="leadFormMessage" class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Contact Card Modal -->
    <div id="contactCardModal" class="modal">
        <div class="modal-content text-center">
            <span id="closeContactCardModal" class="close-button">&times;</span>
            <div class="p-4">
                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-address-card text-4xl text-red-600"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-2 text-gray-800">Save to Contacts?</h3>
                <p class="text-gray-600 mb-6">
                    Add <strong>Powerauto Hydraulics</strong> to your address book for quick access to our support and sales team.
                </p>
                <div class="bg-gray-50 p-4 rounded-lg mb-6 text-left text-sm text-gray-700 border border-gray-200">
                    <p><strong>Powerauto Hydraulics Pty Ltd - Dandenong</strong></p>
                    <p class="mt-1">Unit 4/147 Greens Road, Dandenong South, VIC</p>
                    <p class="mt-1">Sales Team - 03 9791 2255</p>
                </div>
                <div class="flex space-x-4">
                    <button onclick="document.getElementById('contactCardModal').style.display='none'" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-md transition duration-300">
                        Cancel
                    </button>
                    <button onclick="generateAndDownloadVCard()" class="flex-1 bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-md transition duration-300">
                        <i class="fas fa-download mr-2"></i> Save Contact
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 3. PDF VIEWER MODAL (for product pages) -->
    <div id="pdfViewerModal" class="modal" style="display:none;">
        <div class="modal-content" style="padding:0;">
            <div class="flex justify-between items-center bg-gray-800 text-white p-3 rounded-t-lg">
                <h4 id="pdfViewerTitle" class="text-lg font-semibold truncate pr-4">Document Viewer</h4>
                <button class="text-gray-300 hover:text-white focus:outline-none" onclick="document.getElementById('pdfViewerModal').style.display='none'">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <div class="flex-grow bg-gray-200 relative h-full">
                <iframe id="pdfViewerFrame" src="" class="w-full h-full border-0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Core Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <!-- Local JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/carousel.js"></script>
</body>
</html>