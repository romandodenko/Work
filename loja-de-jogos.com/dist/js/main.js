"use strict"

window.onload = function () {

  const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {
  if (e.target.closest(".header__burger")) {
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (e.target.closest(".header__exit-menu")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (e.target.closest(".nav__link")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
})

    function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});

    var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 1000,
  speedAsDuration: true
});

    const parallax = document.querySelector(".hero")

if (parallax) {
  // const content = document.querySelector(".parallax__container");
  const mountains = document.querySelector(".hero__image");


  // Коэффициенты
  const forMountains = 20;


  // Скорость анимации
  const speed = 0.05;

  // Объявление переменных
  let positionX = 0
  let positionY = 0;
  let coordXprocent = 0;
  let coordYprocent = 0;

  function setMouseParallaxStyle() {
    const distX = coordXprocent - positionX;
    const distY = coordYprocent - positionY;

    positionX = positionX + (distX * speed);
    positionY = positionY + (distY * speed)

    // Передаем стили 
    mountains.style.cssText = `transform: translate(${positionX / forMountains}%, ${positionY / forMountains}%);`;

    requestAnimationFrame(setMouseParallaxStyle);
  }
  setMouseParallaxStyle();


  parallax.addEventListener("mousemove", function (e) {
    // Получение ширины и высоты блока
    const parallaxWidth = parallax.offsetWidth;
    const parallaxHeight = parallax.offsetHeight;

    // Ноль по середине
    const coordX = e.pageX - parallaxWidth / 2;
    const coordY = e.pageY - parallaxHeight / 2;

    // Получаем проценты
    coordXprocent = coordX / parallaxWidth * 100;
    coordYprocent = coordY / parallaxHeight * 100;
  });


  // Паралакс при скролле

  let thresholdSets = [];
  for (let i = 0; i <= 1.0; i += 0.005) {
    thresholdSets.push(i);
  }
  const callback = function (entries, observer) {
    const scrollTopProcent = window.pageYOffset / parallax.offsetHeight * 100;
    setParallaxItemsStyle(scrollTopProcent);
  };
  const observer = new IntersectionObserver(callback, {
    threshold: thresholdSets
  });

  // observer.observe(document.querySelector(".content")) // удалить, если есть баг с картинкой при скролле

  function setParallaxItemsStyle(scrollTopProcent) {
    // content.style.cssText = `transform: translate(0%, -${scrollTopProcent / 9}%);`;
    mountains.parentElement.style.cssText = `transform: translate(0%, -${scrollTopProcent / 6}%);`;
    // human.parentElement.style.cssText = `transform: translate(0%, -${scrollTopProcent / 3}%);`;
  }
}



/* 


            HTML



<div class="wrapper">
<section class="parallax">
  <div class="parallax__body">
    <div class="parallax__container container">
      <div class="parallax__label">Q</div>
      <h1 class="parallax__title">Eto Ya</h1>
    </div>
    <div class="parallax__images images-parallax">
      <div class="images-parallax__item">
        <div class="images-parallax__clouds"></div>
      </div>
      <div class="images-parallax__item">
        <div class="images-parallax__mountains"></div>
      </div>
      <div class="images-parallax__item">
        <div class="images-parallax__human"></div>
      </div>
    </div>
  </div>
</section>
</div> 

          CSS

          .parallax {
  min-height: 100vh;

}
.parallax__body {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
.parallax__container {
  text-transform: uppercase;
  position: relative;
  z-index: 2;
}
.parallax__label {
  color: #fbd784;
  display: flex;
  font-size: 18px;
  letter-spacing: 6px;
  margin-bottom: 30px;
  align-items: center;
}
.parallax__label:before {
  content: "";
  flex: 0 0 70px;
  margin: 0 30px 0 0;
  background-color: #fbd784;
  height: 1px;
}
.parallax__title {
  font-size: 80px;
}
.parallax__images {
  position: absolute;
  width: 120%;
  height: 120%;
  top: -10%;
  left: -10%;
  z-index: 1;
}
.images-parallax__item {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}
.images-parallax__clouds,
.images-parallax__mountains,
.images-parallax__human {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
}

.images-parallax__clouds {
  background-image: url(./img/clouds.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top;
  top: 0;
}

.images-parallax__mountains {
  background-image: url(./img/mountains.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top;
  top: 15%;
  z-index: 2;
}

.images-parallax__human {
  background-image: url(./img/human.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top;
  top: 45%;
  z-index: 3;
}


*/

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

const gamesSwiper = new Swiper('.games-swiper', {
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
    nextEl: '.games-swiper-next',
    prevEl: '.games-swiper-prev',
  },
  breakpoints: {
    100: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    551: {
      slidesPerView: 2,
      spaceBetween: 15
    },
    851: {
      slidesPerView: 3,
      spaceBetween: 15
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30
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
    
}