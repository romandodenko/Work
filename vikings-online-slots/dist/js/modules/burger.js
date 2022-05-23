"use strict"

export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function () {

    const burger = document.querySelector(".header__burger");
    const nav = document.querySelector(".header__menu");
    const exitBurger = document.querySelector(".header__menu-ex");
    const body = document.querySelector("body");
    const headerLink = document.querySelectorAll(".nav__link");

    headerLink.forEach(function(headerLink) {
      headerLink.addEventListener("click", function() {
        nav.classList.remove("nav-active")
        body.classList.remove("body-block")
      })
    })

    burger.addEventListener("click", function () {
      nav.classList.add("nav-active")
      body.classList.add("body-block")
    })

    exitBurger.addEventListener("click", function () {
      nav.classList.remove("nav-active")
      body.classList.remove("body-block")
    })
  })
}