var swiper__medicalProcedures = new Swiper(".js-staffSlider", {
    slidesPerView: 2,
    spaceBetween: 10,
    navigation: {
        nextEl: '.s-generalStaff .c-slideArrows__arrow.--r',
        prevEl: '.s-generalStaff .c-slideArrows__arrow.--l',
    },
    autoplay: {
        delay: 5000,
    },
    breakpoints: {
        // when window width is >= 320px
        1080: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        780: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
    }
});