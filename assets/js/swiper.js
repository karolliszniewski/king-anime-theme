// Import Swiper styles
import 'swiper/swiper-bundle.min.css';

// Import Swiper core and required modules
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

// Initialize Swiper
const swiper = new Swiper('.swiper-container', {
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
