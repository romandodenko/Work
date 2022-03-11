"use strict"

export function swiperSc() {
document.addEventListener("DOMContentLoaded", function() {
  const gameSwiper = document.querySelector(".game-swiper");
  if(gameSwiper) {
    const swiper = new Swiper(gameSwiper, {

      direction: 'horizontal',
      speed: 800,
      
      navigation: {
        nextEl: '.game-swiper__next',
        prevEl: '.game-swiper__prev',
      },
   
    });
  }
})
}