"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".block-header");
    const burger = document.querySelector(".block-header__burger");
    const menu = document.querySelector(".block-header__menu");
    const exitBurger = document.querySelector(".block-header__exit-menu");
    const body = document.querySelector("body");
    if (header) {
      burger.addEventListener("click", function () {
        menu.classList.add("menu-active")
        body.style.overflow = "hidden"

      })
  
      exitBurger.addEventListener("click", function () {
        menu.classList.remove("menu-active")
        body.style.overflow = "visible"
      })
    }
  })
}