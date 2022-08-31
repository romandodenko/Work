"use strict"

export function parallax() {
  "use strict"

  window.onload = function () {
    const parallax = document.querySelector(".main")

    if (parallax) {
      // const content = document.querySelector(".parallax__container");
      const parallaxImage = document.querySelectorAll(".main-swiper__parallax-image");

      // Коэффициенты
      const forEarallaxImage = 40;

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
        parallaxImage.forEach(function(e) {
          e.style.cssText = `transform: translate(${positionX / forEarallaxImage}%, ${positionY / forEarallaxImage}%);`;
        })



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



      function setParallaxItemsStyle(scrollTopProcent) {
        content.style.cssText = `transform: translate(0%, -${scrollTopProcent / 9}%);`;
        mountains.parentElement.style.cssText = `transform: translate(0%, -${scrollTopProcent / 6}%);`;
        human.parentElement.style.cssText = `transform: translate(0%, -${scrollTopProcent / 3}%);`;
      }
    }
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