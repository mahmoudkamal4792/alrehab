const $ = require('jquery');
import Swiper, { Navigation, Pagination } from 'swiper';

import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

const introSwiper = new Swiper('.intro-slider', {
    loop: true
});

$('.intro-controls > button').on('click', (e) => {
    let state = $(e.currentTarget).data('nav');

    if (state == 'prev') {
        introSwiper.slidePrev();
    } else {
        introSwiper.slideNext();
    }
});

const branchSwiper = new Swiper('.branches-swiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 8,
    autoplay: true,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        }
    }
});