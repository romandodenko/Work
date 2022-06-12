"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const menu = document.querySelector(".header__wrapper-menu");
    const exitBurger = document.querySelector(".header__close-menu");
    const body = document.querySelector("body");
    const main = document.querySelector("main");
    const navLink = document.querySelectorAll(".nav__link");

    burger.addEventListener("click", function () {
      menu.classList.add("menu-active")
      body.classList.add("body-block")
    })

    navLink.forEach(function(navLink) {
      navLink.addEventListener("click", function() {
        menu.classList.remove("menu-active")
        body.classList.remove("body-block")
      })
    })

    exitBurger.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })

    main.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })
}