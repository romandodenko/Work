"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const headerElement = document.querySelector(".header")
  const linkUp = document.querySelector(".link-up");
  const callback = function (entries, observer) {
    if (entries[0].isIntersecting) {
      linkUp.classList.remove("link-up-visible")
    } else {
      linkUp.classList.add("link-up-visible")
    }
  }

  const headerObserver = new IntersectionObserver(callback);
  headerObserver.observe(headerElement);
})