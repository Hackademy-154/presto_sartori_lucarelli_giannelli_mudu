import Swiper from "swiper/bundle";
import "swiper/css/bundle";

// SwiperJS
var swiper = new Swiper(".mySwiper", {
    speed: 600,
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