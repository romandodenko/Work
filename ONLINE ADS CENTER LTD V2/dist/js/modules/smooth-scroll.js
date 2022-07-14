"use strict"

// data-scroll указать этот атрибут у ссылки якоря

export function smoothScroll() {
  const yakersLink = document.querySelector(".faq__yakers-link");

  if (yakersLink) {
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 1000,
      speedAsDuration: true
    });
  }
}