import Swiper from "swiper/bundle";
import "swiper/css/bundle";

// Swiper Header
var swiper = new Swiper(".mySwiper", {
    autoplay: {
        delay: 5000,
    },
    speed: 800,
    parallax: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Swiper Category
var swiper2 = new Swiper(".swiper2", {
    autoplay: {
        delay: 3000,
    },
    speed: 800,
    slidesPerView: 5,
    initialSlide: 2,
    loop: true,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
