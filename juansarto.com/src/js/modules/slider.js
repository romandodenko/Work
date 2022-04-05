"use strict"

export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.hero__swiper', {
      allowTouchMove: false,
      loop: true,
      effect: 'fade',
      speed: 3000,
      autoplay: {
        delay: 3000
      },
    });
  })
}