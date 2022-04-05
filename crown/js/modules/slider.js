

export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.game-swiper', {
      loop: true,
      direction: 'horizontal',
      navigation: {
        nextEl: '.game-swiper__next',
        prevEl: '.game-swiper__prev',
      },
    });
  })
}