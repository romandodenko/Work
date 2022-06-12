"use strict"

export function swiper() {
  document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.about-swiper', {
      loop: true,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: 1,
      spaceBetween: 32,
      autoHeight: true,
      direction: 'horizontal',
      // speed: 500, // Автовоспроизведение
      // autoplay: {
        // delay: 5000,
        // disableOnInteraction: false,
      // },
      // thumbs: { // Читаем ниже что даёт эта настройка
      //   swiper: thumbsSwiper,
      // },
      pagination: {
        el: '.about-swiper__pagination',
        clickable: true,
        // dynamicBullets: true, // Если много кружков пагинации
        // dynamicMainBullets: 3, // Показывает количество отображаемых кружков пагинаии при включеном dynamicBullets
      },
      navigation: {
        nextEl: '.hero__button-next',
        prevEl: '.hero__button-prev',
      },
      // breakpoints: {
      //   320: {
      //     slidesPerView: 2,
      //     spaceBetween: 20
      //   },
      //   480: {
      //     slidesPerView: 3,
      //     spaceBetween: 30
      //   },
      //   640: {
      //     slidesPerView: 4,
      //     spaceBetween: 40
      //   }
      // }
    });
  })
}