"use strict"

// data-scroll указать этот атрибут у ссылки якоря


var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 1000,
  speedAsDuration: true
});