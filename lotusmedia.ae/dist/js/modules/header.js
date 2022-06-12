"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const menu = document.querySelector(".header__menu");
    const exitBurger = document.querySelector(".header__menu-exit");
    const body = document.querySelector("body");
    const navLink = document.querySelectorAll(".nav__link");

    navLink.forEach(function(navLink) {
      navLink.addEventListener("click", function() {
        menu.classList.remove("menu-active")
        body.classList.remove("body-block")
      })
    })

    burger.addEventListener("click", function () {
      menu.classList.add("menu-active")
      body.classList.add("body-block")
    })

    exitBurger.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })
}