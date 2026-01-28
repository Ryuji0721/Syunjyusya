document.addEventListener('DOMContentLoaded', function() {
    // Menu Toggle Logic
    var menuToggle = document.getElementById('menuToggle');
    var menuClose = document.getElementById('menuClose');
    var menuOverlay = document.getElementById('menuOverlay');

    if(menuToggle && menuClose && menuOverlay) {
        menuToggle.addEventListener('click', function() {
            menuOverlay.classList.add('active');
        });
        menuClose.addEventListener('click', function() {
            menuOverlay.classList.remove('active');
        });
    }

    // Dynamic Vine Height Adjustment
    function adjustVineHeight() {
        var centerCol = document.querySelector('.global-pc-center');
        var footer = document.querySelector('.site-footer');
        var vineArea = document.querySelector('.vine-decoration-area');

        if (centerCol && footer && vineArea) {
            var centerHeight = centerCol.offsetHeight;
            var footerHeight = footer.offsetHeight;
            // Subtract footer height and some extra margin (100px) for whitespace
            var newHeight = centerHeight - footerHeight - 100; 
            
            if (newHeight > 0) {
                vineArea.style.height = newHeight + 'px';
                vineArea.style.overflow = 'hidden'; 
            }
        }
    }

    // Run on load
    adjustVineHeight();

    // Run on resize
    window.addEventListener('resize', adjustVineHeight);
    
    // Run after a short delay to ensure images/layout are settled
    setTimeout(adjustVineHeight, 500);

    // Store Map Interaction
    var storeCards = document.querySelectorAll('.store-card');
    var mapFrame = document.getElementById('storeMapFrame');

    if (storeCards.length > 0 && mapFrame) {
        storeCards.forEach(function(card) {
            card.addEventListener('click', function() {
                var query = this.getAttribute('data-query');
                if (query) {
                    var newSrc = "https://maps.google.com/maps?q=" + encodeURIComponent(query) + "&t=&z=15&ie=UTF8&iwloc=&output=embed";
                    mapFrame.src = newSrc;
                    
                    // Optional: Scroll to map
                    var mapSection = document.querySelector('.store-map-section');
                    if(mapSection) {
                        mapSection.scrollIntoView({behavior: 'smooth', block: 'start'});
                    }
                }
            });
        });
    }
});
