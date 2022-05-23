"use strict"

export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function () {

    const burger = document.querySelector(".header__burger");
    const body = document.querySelector("body");
    const nav = document.querySelector(".header__menu");
    const exitBurger = document.querySelector(".header__menu-close");
    const navLinks = document.querySelectorAll(".nav__link");

    navLinks.forEach(function(navLinks) {
      navLinks.addEventListener("click", function() {
        nav.classList.remove("header-menu-active")
        body.classList.remove("body-block")
      })
    })

    burger.addEventListener("click", function () {
      nav.classList.add("header-menu-active")
      body.classList.add("body-block")
    })

    exitBurger.addEventListener("click", function () {
      nav.classList.remove("header-menu-active")
      body.classList.remove("body-block")
    })
  })
}