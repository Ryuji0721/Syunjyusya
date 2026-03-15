document.addEventListener('DOMContentLoaded', function () {
    const interviewSwiper = new Swiper('.swiper-interview', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 2000,
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const el = document.querySelector('.flower-gallery-swiper');
    if (!el || typeof Swiper === 'undefined') return;

    new Swiper(el, {
        slidesPerView: 1.15,
        spaceBetween: 12,
        centeredSlides: false,
        pagination: {
            el: el.querySelector('.swiper-pagination'),
            clickable: true,
        },
        breakpoints: {
            768: { slidesPerView: 1.6 }
        }
    });
});
