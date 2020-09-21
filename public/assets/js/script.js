(function ($) {
    "use strict";

    // Initiate the wowjs animation library
    new WOW().init();

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            900: {
                items: 2
            }
        }
    });

    // Initi AOS
    function aos_init() {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out-back",
            once: true
        });
    }
    aos_init();

    // Initiate the wowjs animation library
    new WOW().init();

    // jQuery counterUp (used in Facts section)
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });





})(jQuery);


