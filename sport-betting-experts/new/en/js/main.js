"use strict"

window.onload = function () {



  document.addEventListener("click", function (e) {
    if (e.target.closest(".header-language__button")) {
      document.querySelector(".header-language").classList.add("header-language-active")
    }
    if (!e.target.closest(".header-language-active")) {
      document.querySelector(".header-language").classList.remove("header-language-active")
    }
  })

  const swiperHero = new Swiper('.hero-swiper', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 1,
    spaceBetween: 0,
    direction: 'horizontal',
    pagination: {
      el: '.hero-swiper-pagination',
      clickable: true,
    },
  });
  const swiperCazik1 = new Swiper('.cazik-list-swiper1', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    direction: 'horizontal',
    navigation: {
      nextEl: '.cazik-list-swiper-next1',
      prevEl: '.cazik-list-swiper-prev1',
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      400: {
        slidesPerView: 4,
        spaceBetween: 0
      }
    }
  });
  const swiperCazik2 = new Swiper('.cazik-list-swiper2', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    direction: 'horizontal',
    navigation: {
      nextEl: '.cazik-list-swiper-next2',
      prevEl: '.cazik-list-swiper-prev2',
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      400: {
        slidesPerView: 4,
        spaceBetween: 0
      }
    }
  });
  const swiperCazik3 = new Swiper('.cazik-list-swiper3', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    direction: 'horizontal',
    navigation: {
      nextEl: '.cazik-list-swiper-next3',
      prevEl: '.cazik-list-swiper-prev3',
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      400: {
        slidesPerView: 4,
        spaceBetween: 0
      }
    }
  });

  document.querySelectorAll(".cazik-button").forEach(function (tabsBtn) {
    tabsBtn.addEventListener("click", function (event) {
      const path = event.currentTarget.dataset.path

      document.querySelectorAll(".cazik-content").forEach(function (tabContent) {
        tabContent.classList.remove("cazik-content-active")
      })
      document.querySelector(`[data-target="${path}"]`).classList.add("cazik-content-active")
    })
  })

  document.querySelectorAll(".cazik-button").forEach(function (tabsBtn) {
    tabsBtn.addEventListener("click", function (event) {
      const path1 = event.currentTarget.dataset.path1

      document.querySelectorAll(".cazik-button").forEach(function (tabContent) {
        tabContent.classList.remove("cazik-button-active")
      })
      document.querySelector(`[data-target1="${path1}"]`).classList.add("cazik-button-active")
    })
  })


}