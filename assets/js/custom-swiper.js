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
