"use strict"

export function parallax() {
  document.addEventListener("DOMContentLoaded", function() {
    const parallax = document.querySelector(".parallax")
    if(parallax) {
      window.onload = function () {

      
        if (parallax) {
          const content = document.querySelector(".parallax__container");
          const clouds = document.querySelector(".images-parallax__clouds");
      
          // Коэффициенты
          const forClouds = 40;
      
          // Скорость анимации
          const speed = 0.10;
      
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
            clouds.style.cssText = `transform: translate(${positionX / forClouds}%, ${positionY / forClouds}%);`;
            
            requestAnimationFrame(setMouseParallaxStyle);
          }
          setMouseParallaxStyle();
      
      
          parallax.addEventListener("mousemove", function(e) {
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
          const observer = new IntersectionObserver( callback, {
            threshold: thresholdSets
          });
      
          // observer.observe(document.querySelector(".content")) 
      
          function setParallaxItemsStyle(scrollTopProcent) {
            content.style.cssText = `transform: translate(0%, -${scrollTopProcent / 9}%);`;
          }
        }
      }
    }
  })
}