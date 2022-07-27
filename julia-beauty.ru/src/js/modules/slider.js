"use strict"

export function swiper() {
  document.addEventListener("DOMContentLoaded", function () {
    const swiperCosmetics = document.querySelector(".cosmetics-swiper");
    const swiperMain = document.querySelector(".main-swiper");
    const swiperThumb = document.querySelector(".thumb-swiper");
    if (swiperCosmetics) {
      const cosmeticsSwiper = new Swiper('.cosmetics-swiper', {
        loop: true,
        observer: true,
        observeParents: true,
        watchOverflow: true,
        slidesPerView: 1,
        direction: 'horizontal',
        speed: 700,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 15
          },
          501: {
            slidesPerView: 3,
             spaceBetween: 15
          },
          801: {
            slidesPerView: 5,
             spaceBetween: 15
          },
          1051: {
            slidesPerView: 6,
             spaceBetween: 15
          },
          1351: {
            slidesPerView: 7,
            spaceBetween: 15
          }
        }
      });
    }
    if (swiperMain && swiperThumb) {
      const thumbSwiper = new Swiper('.thumb-swiper', {
        observer: true,
        observeParents: true,
        watchOverflow: true,
        direction: 'horizontal',
        navigation: {
          nextEl: '.thumb-swiper__next',
          prevEl: '.thumb-swiper__prev',
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 5
          },
          501: {
            slidesPerView: 3,
            spaceBetween: 10
          },
          651: {
            slidesPerView: 4,
            spaceBetween: 10
          },
          851: {
            slidesPerView: 5,
            spaceBetween: 20
          }
        }
      });
      const mainSwiper = new Swiper('.main-swiper', {
        observer: true,
        observeParents: true,
        watchOverflow: true,
        slidesPerView: 1,
        spaceBetween: 20,
        direction: 'horizontal',
        thumbs: {
          swiper: thumbSwiper,
        },
      });
    }
  })
}