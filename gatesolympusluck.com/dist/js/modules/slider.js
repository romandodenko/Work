"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper('.games__swiper', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    direction: 'horizontal',
    navigation: {
      nextEl: '.games-swiper__next',
      prevEl: '.games-swiper__prev',
    },

  });
})