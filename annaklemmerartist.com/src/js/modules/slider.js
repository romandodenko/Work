"use strict"

export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.bar__swiper', {
      direction: 'horizontal',
      navigation: {
        nextEl: '.bar-swiper__next',
        prevEl: '.bar-swiper__prev',
      },
    });
  })
}