var swiper = new Swiper('.myBanner', {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
        480: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        840: {
            slidesPerView: 3,
            spaceBetween: 10,
        }
    },
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // Optional parameters   
})

var swiper2 = new Swiper('.myBanner2', {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // Optional parameters   
})

var swiper3 = new Swiper('.myBanner3', {
    slidesPerView: 2,
    spaceBetween: 10,
    breakpoints: {
        480: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        680: {
            slidesPerView: 4,
            spaceBetween: 10,
        }
    },
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // Optional parameters   
})