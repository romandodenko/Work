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

    // const swiper = new Swiper('.hero__swiper', {
//   loop: true,
//   // loopAdditionalSlides: 3, // Добавляет количество слайдов которые будут склонированы после создания цикла
//   // centeredSlides: true, // центрирует активный слайд по центру а не слева
//   observer: true,
//   observeParents: true,
//   watchOverflow: true,
//   slidesPerView: 1,
//   spaceBetween: 32,
//   // slidesPerGroup: 1, 
//   // centeredSlides: true, // активный слайд будет в центре
//   // autoHeight: true,
//   direction: 'horizontal',
//   // speed: 500, // Автовоспроизведение
//   // autoplay: {
//   // delay: 5000,
//   // disableOnInteraction: false,
//   // },
//   // thumbs: { // Читаем ниже что даёт эта настройка
//   //   swiper: thumbsSwiper,
//   // },
//   pagination: {
//     el: '.hero__pagination',
//     clickable: true,
//     // dynamicBullets: true, // Если много кружков пагинации
//     // dynamicMainBullets: 3, // Показывает количество отображаемых кружков пагинаии при включеном dynamicBullets
//   },
//   navigation: {
//     nextEl: '.hero__button-next',
//     prevEl: '.hero__button-prev',
//   },
//   // scrollbar: {
//   //   el: '.hero__scrollbar',
//   //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
//   // },
//   // breakpoints: {
//   //   320: {
//   //     slidesPerView: 2,
//   //     spaceBetween: 20
//   //   },
//   //   480: {
//   //     slidesPerView: 3,
//   //     spaceBetween: 30
//   //   },
//   //   640: {
//   //     slidesPerView: 4,
//   //     spaceBetween: 40
//   //   }
//   // }
// });

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
  // slidesPerGroup: 1, 
  // centeredSlides: true, // активный слайд будет в центре
  // autoHeight: true,
  direction: 'horizontal',
  // speed: 500, // Автовоспроизведение
  // autoplay: {
  // delay: 5000,
  // disableOnInteraction: false,
  // },
  // thumbs: { // Читаем ниже что даёт эта настройка
  //   swiper: thumbsSwiper,
  // },
  navigation: {
    nextEl: '.cazik-list-swiper-next1',
    prevEl: '.cazik-list-swiper-prev1',
  },
  // scrollbar: {
  //   el: '.hero__scrollbar',
  //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
  // },
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
  // slidesPerGroup: 1, 
  // centeredSlides: true, // активный слайд будет в центре
  // autoHeight: true,
  direction: 'horizontal',
  // speed: 500, // Автовоспроизведение
  // autoplay: {
  // delay: 5000,
  // disableOnInteraction: false,
  // },
  // thumbs: { // Читаем ниже что даёт эта настройка
  //   swiper: thumbsSwiper,
  // },
  navigation: {
    nextEl: '.cazik-list-swiper-next2',
    prevEl: '.cazik-list-swiper-prev2',
  },
  // scrollbar: {
  //   el: '.hero__scrollbar',
  //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
  // },
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
  // slidesPerGroup: 1, 
  // centeredSlides: true, // активный слайд будет в центре
  // autoHeight: true,
  direction: 'horizontal',
  // speed: 500, // Автовоспроизведение
  // autoplay: {
  // delay: 5000,
  // disableOnInteraction: false,
  // },
  // thumbs: { // Читаем ниже что даёт эта настройка
  //   swiper: thumbsSwiper,
  // },
  navigation: {
    nextEl: '.cazik-list-swiper-next3',
    prevEl: '.cazik-list-swiper-prev3',
  },
  // scrollbar: {
  //   el: '.hero__scrollbar',
  //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
  // },
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
// Обычная разметка слайдера

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

// Разметка слайдера с thumb. Этот слайдер выглядит как обычный слайдер в карточках товара в интернет магазине. Т.е один верхний слайдер с большой картинкой, и снизу под ним маленький слайдер с маленькими картинками. Так вот, каталог свайпер это основной, а thumbs свайпер второй слайдер. Инициализируем два слайдера, первому слайдеру пишем консту thumbsSwiper(можно и поменять) а второму слайдеру пишем в настройках thumb, другими словами связываем их. и все, всё работает

/* <div class="wrapper">
<div class="swiper catalog__swiper catalog-swiper">
  <div class="swiper-wrapper catalog-swiper__wrapper">
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/01.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/02.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/03.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/04.jpg" alt="">
    </div>

  </div>
</div>
<div class="swiper__thumbs swiper thumbs-swiper">
  <div class="swiper-wrapper thumbs-swiper__wrapper">
    <div class="swiper-slide thumbs-swiper__slide">
      <img src="./img/01.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/02.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/03.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/04.jpg" alt="">
    </div>
  </div>
</div>
</div> */

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


/* 
            HTML


  <button class="btn" data-path="germany">Germany</button>

  <div class="content" data-target="germany">
      <div">
          <span>
            Что мы о нём знаем?
          </span>
          <p>
            Пока ничего... Зато мы точно знаем, что в галерее есть на что посмотреть!
          </p>
          <a href="">
            В галерею
          </a>
      </div>
  </div>
          
              CSS

  .content {
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
  }

  .content-active {
    opacity: 1;
    pointer-events: visible;
    visibility: visible;
  } 

*/

}