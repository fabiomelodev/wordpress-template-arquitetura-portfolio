import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

const modal = document.querySelector('.js-projects-modal');

const modalCloses = document.querySelectorAll('.js-modal-close');

const modalSwiperWrapper = document.querySelector('.js-modal-projects-wrapper');

modalCloses.forEach(close => {
    close.addEventListener('click', () => {
        modal.classList.remove('is-active');
        const swiperWrapper = document.querySelector('.js-modal-projects-wrapper');
        swiperWrapper.innerHTML = '';
    }
    );
});

const openModalButtons = document.querySelectorAll('.js-project-open-modal');
openModalButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        modal.classList.add('is-active');

        const images = document.querySelectorAll('.js-project-item-image[data-slug="' + button.dataset.slug + '"]');

        images.forEach(image => {
            modalSwiperWrapper.insertAdjacentHTML('beforeend', `<div class="swiper-slide">
                                        <img class="w-full h-full object-contain"
                                            src="${image.src}" />
                                    </div>`);
        });

        new Swiper('.js-swiper-projects-modal', {
            modules: [Navigation],
            initialSlide: index,
            loop: true,

            navigation: {
                nextEl: '.js-swiper-button-next-projects-modal',
                prevEl: '.js-swiper-button-prev-projects-modal',
            },
        });
    });
});                    