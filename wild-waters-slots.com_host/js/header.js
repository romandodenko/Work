"use strict"


window.onload = function () {

  const menu = document.querySelector(".block-header__menu");

  document.addEventListener("click", function (e) {
    if (e.target.closest(".block-header__burger")) {
      menu.classList.add("menu-active")
      document.body.style.overflow = "hidden";
    }
    if (e.target.closest(".block-header__exit-menu")) {
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
    }
    if (e.target.closest(".nav__link")) {
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
    }
  })

}