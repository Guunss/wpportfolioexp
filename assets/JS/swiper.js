const swiperConf = {
    loop: true,
    autoHeight: true,
    spaceBetween: 30,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
};

document.addEventListener("DOMContentLoaded", () => {

    var persoSlides = new Swiper('.swiper', swiperConf);
});