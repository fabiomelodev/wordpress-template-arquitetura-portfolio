import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

new Swiper(".js-swiper", {
  modules: [Navigation, Pagination],

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".js-swiper-button-prev",
  },

  pagination: {
    el: ".js-swiper-pagination",
    type: "bullets",
  },
});

const swiperProjects = document.querySelectorAll(".js-swiper-projects");

swiperProjects.forEach((swiperProject) => {
  new Swiper(swiperProject, {
    modules: [Navigation, Pagination],
    slidesPerView: 3,
    spaceBetween: 16,

    breakpoints: {
      320: {
        slidesPerView: 1.2,
      },

      1024: {
        slidesPerView: 2.2
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });
});

new Swiper(".js-swiper-ratings", {
  slidesPerView: 4,
  spaceBetween: 16,

  breakpoints: {
    320: {
      slidesPerView: 1.2,
    },
    1024: {
      slidesPerView: 2.2
    },
    1200: {
      slidesPerView: 4,
    }
  }
});