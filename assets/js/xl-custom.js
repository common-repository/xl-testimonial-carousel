jQuery.noConflict();

jQuery(document).ready(function ($) {

    $('.xl-carousel').owlCarousel({
        loop: true,
        nav: true,
        navText: [
            "<span class='icon-arrow-left'></span>",
            "<span class='icon-arrow-right'></span>"
        ],
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });

});