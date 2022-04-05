

export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.slider-swiper', {
      allowTouchMove: false,
      loop: true,
      effect: 'fade',
      speed: 5000,
      autoplay: {
        delay: 3000
      },
    });
    const swiperGames = new Swiper('.games-swiper', {
      direction: "horizontal",
      loop: true,
      navigation: {
        nextEl: '.games-swiper__next',
        prevEl: '.games-swiper__prev',
      },
    });
  })
}