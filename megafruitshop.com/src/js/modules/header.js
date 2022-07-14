"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const nav = document.querySelector(".header__nav");
    const exitBurger = document.querySelector(".header__btn");

    burger.addEventListener("click", function () {
      nav.classList.add("nav-active")
    })

    exitBurger.addEventListener("click", function () {
      nav.classList.remove("nav-active")
    })
  })
}