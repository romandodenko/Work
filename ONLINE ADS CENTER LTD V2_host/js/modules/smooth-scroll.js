"use strict"

  const yakersLink = document.querySelector(".faq__yakers-link");

  if (yakersLink) {
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 1000,
      speedAsDuration: true
    });
  }
