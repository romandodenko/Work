export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    const body = document.querySelector("body");
    if (body.offsetWidth < 600) {
      const swiper = new Swiper('.hero__swiper', {
        direction: 'horizontal',
        pagination: {
          el: '.hero__pagination',
          clickable: true,
        },
      });
    }
  })
}