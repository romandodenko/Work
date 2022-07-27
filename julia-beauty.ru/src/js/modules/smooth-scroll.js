"use strict"

// data-scroll указать этот атрибут у ссылки якоря

export function smoothScroll() {
  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 10,
    speedAsDuration: true
  });
}