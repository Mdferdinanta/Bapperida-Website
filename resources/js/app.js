import './bootstrap';

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        center: true,
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            620: {
                items: 2,
                nav: false
            },
            1280: {
                items: 3,
                nav: false,
            }
        }
    })
});
