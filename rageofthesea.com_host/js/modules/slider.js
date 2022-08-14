"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper('.block-3-swiper', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    direction: 'horizontal',
    navigation: {
      nextEl: '.block-3-swiper__next',
      prevEl: '.block-3-swiper__prev',
    },
    breakpoints: {
      320: {
        spaceBetween: 20
      },
      991: {
        spaceBetween: 40
      },
    }
  });
})