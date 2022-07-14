"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const gameSwiper = document.querySelector(".game-swiper");
  if (gameSwiper) {
    const swiper = new Swiper('.game-swiper', {
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: "auto",
      spaceBetween: 20,
      direction: 'horizontal',
      navigation: {
        nextEl: '.game-swiper__next',
        prevEl: '.game-swiper__prev',
      },

    });
  }
})