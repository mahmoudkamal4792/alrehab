const $ = require('jquery');
import Swiper, { Navigation, Pagination, Thumbs } from 'swiper';

import 'swiper/css';
import 'swiper/css/thumbs';
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

// Single
const thumbsSwiper = new Swiper('.thumbs-swiper', {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 5,
    watchSlidesProgress: true,
    freeMode: true,
});

const singleSwiper = new Swiper('.single-swiper', {
    loop: true,
    spaceBetween: 10,
    modules: [Thumbs],
    thumbs: {
        swiper: thumbsSwiper,
    },
});

// Branches
const branchSwiper = new Swiper('.branches-swiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 8,
    autoplay: true,
    slideToClickedSlide: true,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        }
    }
});

window.branchSwiper = branchSwiper;