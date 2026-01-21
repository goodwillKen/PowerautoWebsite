/**
 * assets/js/main.js
 * Core JavaScript logic for Powerauto Hydraulics Website
 */

/* =========================================
   1. UTILITY FUNCTIONS
   ========================================= */

/**
 * Rotates the tagline in the top header bar.
 */
function setupTaglineRotation() {
    const variants = [ "Trusted local partner", "Your local specialists" ];
    const leadingSpan = document.getElementById("tagline-leading");
    if (!leadingSpan) return;
    
    let index = 0;
    function updateLeadingText() { leadingSpan.textContent = variants[index]; }
    updateLeadingText(); // Init
    
    setInterval(function () {
        index = (index + 1) % variants.length;
        updateLeadingText();
    }, 6000);
}

/**
 * Handles generating and downloading a vCard for the contact modal.
 */
function generateAndDownloadVCard() {
    const vCardData = `BEGIN:VCARD\nVERSION:3.0\nFN:Sales Powerauto Hydraulics P/L\nORG:Powerauto Hydraulics Pty Ltd - Dandenong\nTITLE:Sales Team\nTEL;TYPE=WORK,VOICE:03 9791 2255\nTEL;TYPE=WORK,FAX:03 9791 6947\nEMAIL;TYPE=WORK:sales@powerauto.com.au\nADR;TYPE=WORK:;;Unit 4/147 Greens Road;Dandenong South;VIC;3175;Australia\nURL:www.powerauto.com.au\nNOTE:Trusted local partner for mobile hydraulics and control systems support.\nEND:VCARD`;
    const blob = new Blob([vCardData], { type: 'text/vcard' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.style.display = 'none';
    a.href = url;
    a.download = 'Powerauto_Hydraulics_Contact.vcf';
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
    document.body.removeChild(a);
    // Close modal after download
    const modal = document.getElementById('contactCardModal');
    if(modal) modal.style.display = 'none';
}

/**
 * Displays the PDF Viewer Modal.
 * @param {string} url - URL of the PDF to display
 * @param {string} title - Title to show in the modal header
 */
function openPdfViewer(url, title) {
    const modal = document.getElementById('pdfViewerModal');
    const frame = document.getElementById('pdfViewerFrame');
    const titleEl = document.getElementById('pdfViewerTitle');
    if(modal && frame) {
        if(titleEl) titleEl.textContent = title || "Document Viewer";
        frame.src = url;
        modal.style.display = 'flex';
    }
}

/**
 * Helper to display form status messages based on URL parameters.
 */
function displayFormStatusMessage(messageElementId, statusParam, messageParam) {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get(statusParam);
    const messageText = urlParams.get(messageParam);
    const messageElement = document.getElementById(messageElementId);

    if (messageElement && status) {
        messageElement.textContent = decodeURIComponent(messageText || (status.includes('success') ? 'Submission successful!' : 'An error occurred.'));
        messageElement.className = (status.includes('success')) ? 'form-message success' : 'form-message error';
    }
}

/* =========================================
   2. MODAL LOGIC (Contact Card & Lead)
   ========================================= */

function openContactCardModal() { 
    const modal = document.getElementById('contactCardModal');
    if(modal) modal.style.display = 'flex'; 
}

function setupLeadModal() {
    const leadModal = document.getElementById('leadModal');
    const closeLeadModalButton = document.getElementById('closeLeadModal');
    const leadReturnUrlField = document.getElementById('leadReturnUrl');
    
    // Define global function for calling from HTML
    window.openLeadModal = function() {
        if (leadModal) {
            const modalTitle = leadModal.querySelector('.modal-content h3');
            if(modalTitle) modalTitle.textContent = "Keep me in the loop!";
            
            // Remove legacy element if it exists
            const legacyEl = document.getElementById('leadInterest');
            if(legacyEl) legacyEl.remove();

            if (leadReturnUrlField) {
                // Set return URL to current page without query params
                leadReturnUrlField.value = window.location.href.split('?')[0].split('#')[0];
            }
            leadModal.style.display = 'flex';
            displayFormStatusMessage('leadFormMessage', 'lead_status', 'lead_message');
        }
    }
    
    // Alias for compatibility
    window.openSmartModal = function(interestContext) { openLeadModal(); }
    
    if (closeLeadModalButton) {
        closeLeadModalButton.onclick = () => { if (leadModal) leadModal.style.display = 'none'; };
    }
    
    // Auto-open if status param exists
    if (new URLSearchParams(window.location.search).has('lead_status')) {
        window.openLeadModal();
    }
}

/* =========================================
   3. DOM READY INITIALIZATION
   ========================================= */

$(document).ready(function(){
    // --- Mobile Menu Toggle ---
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    }

    // --- Back To Top Button ---
    const backToTopButton = document.getElementById('backToTop');
    if (backToTopButton) {
        window.onscroll = () => {
            backToTopButton.style.opacity = (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) ? "1" : "0";
        };
        backToTopButton.addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));
    }
    
    // --- Current Year Footer ---
    const currentYearEl = document.getElementById('currentYear');
    if (currentYearEl) currentYearEl.textContent = new Date().getFullYear();
    
    // --- General Modal Close Logic ---
    // Closes any element with class 'modal' if clicking the 'close-button'
    $('.close-button').click(function() { 
        $(this).closest('.modal').hide(); 
    });
    
    // Closes modal if clicking outside the content area
    $(window).click(function(e) { 
        if ($(e.target).hasClass('modal')) { 
            // Clear iframe src to stop video/pdf playback
            const frame = $(e.target).find('iframe');
            if(frame.length) frame.attr('src', ''); 
            $(e.target).hide(); 
        } 
    });
    
    // Specific listener for Contact Card cancel button
    const closeContactCardBtn = document.getElementById('closeContactCardModal');
    if(closeContactCardBtn) {
        closeContactCardBtn.addEventListener('click', () => {
            const modal = document.getElementById('contactCardModal');
            if(modal) modal.style.display = 'none';
        });
    }

    // --- Run Setup Functions ---
    setupLeadModal();
    setupTaglineRotation();
});