// import Swiper JS
import Swiper, {Pagination} from 'swiper';
import 'swiper/swiper-bundle.css';

require('./modal');
require('./tab');
require('./faq');
require('./menu');
const slides = [];

const MD_SIZE = 768;

Swiper.use([Pagination]);
// import Swiper styles
/** check screen and check slideable element */
(() => {
    const initSlideable = () => {
        const slideableElements = document.querySelectorAll('[data-type="slideable"]');

        Array.from(slideableElements).forEach((element, index) => {
            const className = `swiper-slideable-${index}`
            element.classList.add(className);
            element.firstElementChild.classList.add('swiper-wrapper')
            Array.from(element.firstElementChild.children).forEach(child => {
                child.classList.add('swiper-slide')
            })

            slides.push(new Swiper(`.${className}`));
        })
    }

    if (document.body.clientWidth < MD_SIZE) {
        initSlideable();
    }

    // check when resize
    // window.addEventListener("resize", function (event) {
    //     console.log(document.body.clientWidth)
    //     if (document.body.clientWidth < MD_SIZE) {
    //         if (slides.length === 0) {
    //             initSlideable();
    //         }
    //     } else {
    //         if (slides.length) {
    //             slides.forEach(slide => {
    //                 slide.$wrapperEl.removeAttr('style');
    //                 slide.$el.removeAttr('style');
    //                 slide.destroy();
    //             })
    //             slides.length = 0;
    //         }
    //     }
    // })
})();


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
    slidesPerView: 1,
    spaceBetween: 25,
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4,
        }
    },
    pagination: {
        el: '.swiper-pagination',
    },
});

// autoload basic slide
window.loadSlide = (className, options = {}) => {
    if (document.querySelector(className)) {
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
