// import Swiper JS
import Swiper, {Pagination} from 'swiper';
require('./modal');
require('./tab');
require('./faq');

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

// autoload basic slide
window.loadSlide = (className, options = {}) => {
    if(document.querySelector(className)) {
        new Swiper(className, options)
    }
}

// tab
window.initTab();
window.log = (type, message = '') => {
    console.group(`[${type}]`)
    console.log(message);
    console.groupEnd();
}

// drawer
const drawerBtn = document.querySelector('.open-draw');
const layer = document.querySelector('.draw-layer');
const drawer = document.querySelector('.drawer');
drawerBtn.addEventListener('click', () => {
    layer.classList.toggle('hidden')
    drawer.classList.toggle('draw-open')
})
layer.addEventListener('click', () => {
    layer.classList.toggle('hidden')
    drawer.classList.toggle('draw-open')
})

// dropdown drawer
const dropdown = document.querySelectorAll('.dropdown')
Array.from(dropdown).forEach(element => {
    element.addEventListener('click', () => {
        element.parentNode.querySelector('.dropdown-content').classList.toggle('hidden')
    })
})
