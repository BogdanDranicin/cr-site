$(function () {
    swiper();
    function swiper() {
        const swiper = new Swiper('.swiper', {
            allowTouchMove: false,
            loop: true,
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                  slidesPerView: 2,
                  spaceBetween: 30
                }
              }
          });
    }

});