// В этом файле будут собраны участки кода, которые пригодятся в верстке

// Данный код проверяет сколько в родителе элементов, и дается соответствующий класс

const itemsBlocks = document.querySelectorAll(".items__block"); // родитель

if (itemsBlocks.length) {
  itemsBlocks.forEach(itemsBlock => {
    const itemsBlocksItem = itemsBlock.querySelectorAll(".items__block-item").length; // элементы в родителе
    itemsBlock.classList.add(`items__block-item_${itemsBlocksItem}`); // соответствующий класс
  })
}

// Примерная структура кода в штмл

/* <div class="items">
<div class="items__block">
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
</div>
<div class="items__block">
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
</div>
<div class="items__block">
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
  <div class="items__block-item">
    dasdsdsdsdsasdsdaasdadsds
  </div>
</div>
</div> */

// Данный код проверяет сколько в родителе элементов, и даем соответствующий класс

// ===================================================================================================================================================

// Данный код делает кастомную фракцию пагинации в свайпере

// Классы меняются на свои , так же кнопки вперед назад меняют чиста в кастомной фракции

const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 0,
  // loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  on: {
    init: function (swiper) {
      const allSliders = document.querySelector(".num_last");
       // const allSlides = document.querySelectorAll(".swiper-slide:not(.swiper-slide-duplicate)"); // при активном loop для корректного изображения числа в num_last используется такой метод 
       // allSliders.innerHTML = allSlides.length < 10 ? `0${allSlides.length}` : allSlides.length;
      allSliders.innerHTML = swiper.slides.length < 10 ? `0${swiper.slides.length}` : swiper.slides.length;
    },
    slideChange: function (swiper) {
      const currentSlider = document.querySelector(".num_current");
      currentSlider.innerHTML = swiper.activeIndex + 1 < 10 ? `0${swiper.activeIndex + 1}` : swiper.activeIndex + 1; // если нужно чтобы был включен loop , использовать вместо activeIndex realIndex
      console.log(swiper)
    },
  },
});

/* <div class="swiper">
<div class="swiper-wrapper">
  <div class="swiper-slide">Slide - 1</div>
  <div class="swiper-slide">Slide - 2</div>
  <div class="swiper-slide">Slide - 3</div>
</div>
<div class="swipper-controls">  
  <div class="swiper-pagination"></div>
  <div class="swiper__numbers">
    <span class="num_current">01</span>
    /
    <span class="num_last">0</span>
  </div>
</div>
</div> */

// Данный код делает кастомную фракцию пагинации в свайпере

// ===================================================================================================================================================

// Скрипт позволяет при нажатии на кнопку перейти плавно к началу страницы

// const buttonUp = document.querySelector(".button-up ");

function top() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
});
}
buttonUp.addEventListener("click", function() {
  top()
})

/* <button class="button-up"></button> */

// ===================================================================================================================================================

const b = document.querySelectorAll(".wrapper") // элемент на которой наводишься и должен появляться скрытый список
const e = document.querySelectorAll(".e"); // скрытый список

b.forEach(function (b) {
  b.addEventListener("mouseover", function () {
    b.querySelector('.e').classList.add("eeeeee") // если много элементов b то пишем так, код означает что данный класс будет даваться е, который находится во враппере на который навели а не у всех врапперов
  })
})
b.forEach(function (b) {
  b.addEventListener("mouseleave", function () {
    b.querySelector('.e').classList.remove("eeeeee")
  })
})
// ===================================================================================================================================================

// Закрытие при нажатии вне элемента

const btnMenu = document.querySelector(".btn");
const menu = document.querySelector(".menu");
function toggleMenu() {
    menu.classList.toggle("menu-active");
}

btnMenu.addEventListener("click", function (e) {
    e.stopPropagation();
    toggleMenu();
});

document.addEventListener("click", function (e) {
    const target = e.target;
    const itsMenu = target == menu || menu.contains(target);
    const itsBtnMenu = target == btnMenu;
    const menuIsActive = menu.classList.contains("menu-active");

    if (!itsMenu && !itsBtnMenu && menuIsActive) {
        toggleMenu();
    }
});

// ===================================================================================================================================================

// Запуск видео

const btn = document.querySelector(".btn");
const video = document.querySelector(".video video");

btn.addEventListener("click", function() {
  video.play();
  video.setAttribute("controls","controls");
  btn.classList.add("hidden")
})

// ===================================================================================================================================================

// при  прокручивание скролом до 1200 пикселей высоты классу контейнер дается доп класс

const con = document.querySelector(".container");
document.addEventListener("scroll", function() {
  let pop = Math.floor(scrollY);
  console.log(pop)
  // console.log(`${scrollY}px`)
  if (pop >= 1200) {
    con.style.backgroundColor = "red"
  } else {
    con.style.backgroundColor = ""
  }
})

// ===================================================================================================================================================

// Копирует текст с инпута copyText при нажатии на кнопку copyButton

const copyButton = document.querySelector(".copy-btn");

copyButton.addEventListener("click", function() {
  copyFunction()
})

function copyFunction() {
  var copyText = document.querySelector(".copy-value");
  copyText.select();
  document.execCommand("copy");
} 

// ===================================================================================================================================================
