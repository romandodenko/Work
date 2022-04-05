import Swiper, { Navigation, Pagination } from 'swiper';

export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    Swiper.use([Navigation, Pagination]);
    const swiper = new Swiper('.hero__swiper', {
      loop: true,
      loopAdditionalSlides: 3,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      speed: 500,
      slidesPerView: 1,
      spaceBetween: 32,
      direction: 'horizontal',
      pagination: {
        el: '.hero__pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.hero__button-next',
        prevEl: '.hero__button-prev',
      },
    });
  })
}

// не забудь установить пакет



// <div class="swiper">
//   <div class="swiper-wrapper">
//     <div class="swiper-slide">Slide 1</div>
//     <div class="swiper-slide">Slide 2</div>
//     <div class="swiper-slide">Slide 3</div>
//   </div>
//   <div class="swiper-pagination"></div>

//   <div class="swiper-button-prev"></div>
//   <div class="swiper-button-next"></div>

//   <div class="swiper-scrollbar"></div>
// </div>