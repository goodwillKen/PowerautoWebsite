<?php 
$pageTitle = "Powerauto Hydraulics - Contact Us";
$activePage = "contact";
include 'includes/header.php'; 
?>
    
    <!-- Page Hero / Banner -->
    <section class="relative bg-gray-700 bg-cover bg-center h-64 md:h-96" style="background-image: url('images/ContactBanner.png');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white p-4">
                <h1 class="text-4xl md:text-5xl font-bold">Get In Touch</h1>
                <p class="text-lg md:text-xl mt-2">Truck off the road? Call us now.</p>
            </div>
        </div>
    </section>

    <main class="py-12 md:py-16 bg-white relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-16">

                <!-- Contact Form Column -->
                <div class="lg:w-2/3 bg-gray-50 p-6 sm:p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                    
                    <form id="contactPageForm" action="submit_contact.php" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="contactName" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="contactName" id="contactName" required class="w-full px-4 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 placeholder-gray-400" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="contactEmail" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" name="contactEmail" id="contactEmail" required class="w-full px-4 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 placeholder-gray-400" placeholder="you@example.com">
                            </div>
                        </div>
                        <div>
                            <label for="contactPhone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number (Optional)</label>
                            <input type="tel" name="contactPhone" id="contactPhone" class="w-full px-4 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 placeholder-gray-400" placeholder="0400 123 456">
                        </div>
                        <div>
                            <label for="contactSubject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select name="contactSubject" id="contactSubject" required class="w-full px-4 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 bg-white">
                                <option value="" disabled selected>Select Topic...</option>
                                <option value="Sales Enquiry">Sales Enquiry (Stock & Pricing)</option>
                                <option value="Technical Support">Technical Support</option>
                                <option value="System Design">System Design / Integration</option>
                                <option value="General Enquiry">General Enquiry</option>
                            </select>
                        </div>
                        <div>
                            <label for="contactMessage" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea name="contactMessage" id="contactMessage" rows="5" required class="w-full px-4 py-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 placeholder-gray-400" placeholder="Tell us what you need..."></textarea>
                        </div>
                        <input type="hidden" name="return_url" id="contactFormReturnUrl">
                        
                        <div>
                            <button type="submit" id="contactSubmitButton" class="w-full sm:w-auto bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-lg text-base transition duration-300 flex items-center justify-center">
                                <span id="btnText">Send Message</span>
                                <i id="btnSpinner" class="fas fa-spinner fa-spin ml-2 hidden"></i>
                            </button>
                        </div>
                        
                        <!-- Fallback error message container -->
                        <div id="inlineMessageContainer" class="hidden rounded-md p-4 mt-4">
                            <p id="inlineMessageText" class="text-sm font-medium"></p>
                        </div>
                    </form>
                </div>

                <!-- Contact Details Column -->
                <div class="lg:w-1/3">
                    <div class="bg-gray-50 p-6 sm:p-8 rounded-lg shadow-lg mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h2>
                        <div class="space-y-4 text-gray-600">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-red-600 mt-1 mr-3 text-xl"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Our Location:</h4>
                                    <p>4/147 Greens Road, Dandenong South 3175 VIC, Australia</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt text-red-600 mt-1 mr-3 text-xl"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Phone:</h4>
                                    <a href="tel:+61397912255" class="hover:text-red-600 transition duration-300">+61 3 9791 2255</a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-red-600 mt-1 mr-3 text-xl"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Email:</h4>
                                    <a href="mailto:sales@powerauto.com.au?subject=Website%20Enquiry" class="hover:text-red-600 transition duration-300">sales@powerauto.com.au</a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-clock text-red-600 mt-1 mr-3 text-xl"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-700">Business Hours:</h4>
                                    <p>Monday - Friday: 8:00 AM - 5:00 PM</p>
                                    <p>Saturday - Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Our Location (Dandenong South)</h3>
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg shadow-md overflow-hidden">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7080.921956353444!2d145.20660777644898!3d-38.01356074548402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad613c690cd1e0d%3A0xf1647931886423ab!2sPowerauto%20Hydraulics!5e1!3m2!1sen!2sau!4v1749086838886!5m2!1sen!2sau"
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- SUCCESS MODAL (Hidden by default) -->
    <div id="successModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50 transition-opacity duration-300">
        <div class="bg-white rounded-lg shadow-2xl p-8 max-w-md w-full mx-4 transform transition-all scale-95 opacity-0" id="successModalContent">
            <div class="text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                    <i class="fas fa-check text-green-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Message Sent!</h3>
                <p class="text-gray-600 mb-8">
                    Thank you for contacting Powerauto Hydraulics. Your message has been sent successfully, and our team will be in touch shortly.
                </p>
                <button onclick="closeSuccessModal()" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">
                    Close
                </button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
    // AJAX Form Handling
    document.addEventListener('DOMContentLoaded', function() {
        
        // Handle URL parameters (Legacy/Fallback)
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('contact_status')) {
            // Clean URL
            window.history.replaceState({}, document.title, window.location.pathname);
        }

        // Prefill Logic
        const contactSubject = document.getElementById('contactSubject');
        const contactMessage = document.getElementById('contactMessage');

        if (urlParams.has('reason')) {
            const reason = urlParams.get('reason');
            if (reason === 'sales') contactSubject.value = 'Sales Enquiry';
            else if (reason === 'tech') contactSubject.value = 'Technical Support';
            else if (reason === 'general') contactSubject.value = 'General Enquiry';
        }
        if (urlParams.has('product')) {
            const product = urlParams.get('product');
            const prefill = "Hi Team,\n\nI am interested in an enquiry regarding " + product + ".\n\nMy specific requirements are:\n- ";
            if(contactMessage && contactMessage.value.trim() === "") contactMessage.value = prefill;
        }

        // --- AJAX SUBMISSION LOGIC ---
        const form = document.getElementById('contactPageForm');
        const btn = document.getElementById('contactSubmitButton');
        const btnText = document.getElementById('btnText');
        const btnSpinner = document.getElementById('btnSpinner');
        const inlineMsg = document.getElementById('inlineMessageContainer');
        const inlineText = document.getElementById('inlineMessageText');

        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Stop page reload

            // UI: Loading State
            btn.disabled = true;
            btnText.textContent = "Sending...";
            btnSpinner.classList.remove('hidden');
            btn.classList.add('opacity-75', 'cursor-not-allowed');
            inlineMsg.classList.add('hidden'); // Hide any previous errors

            // Prepare Data
            const formData = new FormData(form);
            formData.append('ajax_request', 'true'); // Tell PHP to send JSON

            // Send Request
            fetch('submit_contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Show Success Modal
                    showSuccessModal();
                    form.reset(); // Clear the form
                } else {
                    // Show Error Message Inline
                    showError(data.message || 'An unknown error occurred.');
                }
            })
            .catch(error => {
                showError('Network error. Please check your connection or try again later.');
                console.error('Error:', error);
            })
            .finally(() => {
                // UI: Reset Button State
                btn.disabled = false;
                btnText.textContent = "Send Message";
                btnSpinner.classList.add('hidden');
                btn.classList.remove('opacity-75', 'cursor-not-allowed');
            });
        });

        function showError(msg) {
            inlineMsg.classList.remove('hidden', 'bg-green-100', 'text-green-700');
            inlineMsg.classList.add('bg-red-100', 'text-red-700');
            inlineText.textContent = msg;
        }
    });

    // Modal Functions
    const modal = document.getElementById('successModal');
    const modalContent = document.getElementById('successModalContent');

    function showSuccessModal() {
        modal.classList.remove('hidden');
        // Small delay to allow display:block to apply before opacity transition
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeSuccessModal() {
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Wait for transition
    }
    </script>

<?php 
$showFooterPartners = true;
include 'includes/footer.php'; 
?>