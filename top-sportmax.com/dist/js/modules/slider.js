"use strict"
export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    let pubs = document.querySelector(".pubs");
    if (pubs) {
      const swiper = new Swiper('.pubs-swiper', {
        slidesPerView: "auto",
        direction: 'horizontal',
        navigation: {
          nextEl: '.pubs-swiper__next',
          prevEl: '.pubs-swiper__prev',
        },
      });
    }
  })
}