import Swiper from "swiper/bundle";
import "swiper/css/bundle";

var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 7,
    loop: true,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
      clickable: true,
    },
  });