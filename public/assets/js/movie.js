var swiper = new Swiper(".mySlideMovie", {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    breakpoints: {
        320: {
            slidesPerView: 2,
        },
        390: {
            slidesPerView: 2,
        },
        675: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 3,
        },
        991: {
            slidesPerView: 4,
        }
    }
});