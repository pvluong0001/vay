// import Swiper JS
import Swiper, {Pagination} from 'swiper';
require('./modal');
require('./tab');

Swiper.use([Pagination]);
// import Swiper styles
import 'swiper/swiper-bundle.css';

new Swiper('.swiper-container');
new Swiper('.branch-slide', {
    slidesPerView: 6,
    spaceBetween: 25,
    loop: true,
    centeredSlides: true,
});
new Swiper('.comment-slide', {
    pagination: {
        el: '.swiper-pagination-comment'
    }
});
new Swiper('.knowledge-slide', {
    slidesPerView: 4,
    spaceBetween: 25,
    pagination: {
        el: '.swiper-pagination',
    },
});

// tab
window.initTab();
