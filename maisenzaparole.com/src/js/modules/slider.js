export function swiper() {
  document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.hotels-swiper', {
      direction: 'horizontal',
      navigation: {
        nextEl: '.hotels-swiper__next',
        prevEl: '.hotels-swiper__prev',
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