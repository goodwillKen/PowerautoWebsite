/**
 * assets/js/carousel.js
 * Logic for Slick Carousels and Banner Animations
 */

$(document).ready(function(){
    
    // 1. Content Carousel (Used on About Page - 2-about.php)
    // -----------------------------------------------------
    if ($('.content-carousel').length) {
        $('.content-carousel').slick({
            dots: true,
            infinite: true, 
            speed: 500,
            slidesToShow: 3, 
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            // Custom Arrow HTML
            prevArrow: '<button type="button" class="slick-prev absolute top-1/2 left-0 z-10 -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 focus:outline-none"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next absolute top-1/2 right-0 z-10 -translate-y-1/2 bg-gray-700 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 focus:outline-none"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                { breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1 } },
                { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }
            ]
        });
    }

    // 2. Text Carousel (Used on Products Hub - 4-products.php)
    // -------------------------------------------------------
    if ($('.text-carousel').length) {
        $('.text-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500, // Transition speed (0.5s)
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true, // Enable autoplay
            autoplaySpeed: 10000, // 10 seconds (Very Slow)
            arrows: false, // Remove arrows
            adaptiveHeight: false
        });
    }

    // 3. Banner Animation Logic (Used on Products Hub - 4-products.php)
    // ----------------------------------------------------------------
    const img = document.getElementById('measureBanner');
    const wrapper = document.getElementById('scrollingBanner');
    
    if(img && wrapper) {
        function applyAnimation() {
            const width = img.offsetWidth; 
            if(width > 0) {
                // Dynamically create keyframes based on image width
                const styleSheet = document.createElement('style');
                const keyframes = `
                    @keyframes scroll-calculated {
                        0% { transform: translateX(0px); }
                        100% { transform: translateX(-${width}px); }
                    }
                `;
                styleSheet.innerHTML = keyframes;
                document.head.appendChild(styleSheet);
                wrapper.style.animation = 'scroll-calculated 60s linear infinite';
            } else {
                // Retry if image hasn't loaded dimensions yet
                setTimeout(applyAnimation, 100);
            }
        }

        if (img.complete) {
            applyAnimation();
        } else {
            img.onload = applyAnimation;
        }
    }
});