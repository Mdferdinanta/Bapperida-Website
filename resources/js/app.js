import './bootstrap';

const swiper = new Swiper('.slider-wrapper', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    spaceBetween: 30,

    // If we need pagination
    // pagination: {
    //     el: '.swiper-pagination',
    // },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    // },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        640: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
});
