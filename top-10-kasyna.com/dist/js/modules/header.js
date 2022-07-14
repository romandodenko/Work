"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const nav = document.querySelector(".header__menu");
    const exitBurger = document.querySelector(".header__exit-menu");
    const body = document.querySelector("body");
    const link = document.querySelectorAll(".nav__link");

    link.forEach(function(link) {
      link.addEventListener("click", function() {
        nav.classList.remove("menu-active")
        body.style.overflow = "visible"
      })
    })

    burger.addEventListener("click", function () {
      nav.classList.add("menu-active")
      body.style.overflow = "hidden"
    })

    exitBurger.addEventListener("click", function () {
      nav.classList.remove("menu-active")
      body.style.overflow = "visible"
    })
  })
}