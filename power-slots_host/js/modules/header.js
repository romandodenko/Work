"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".header__burger");
  const nav = document.querySelector(".header__menu");
  const exitBurger = document.querySelector(".header__exit-menu");
  const body = document.querySelector("body");

  burger.addEventListener("click", function () {
    nav.classList.add("menu-active")
    body.classList.add("body-block")
  })

  exitBurger.addEventListener("click", function () {
    nav.classList.remove("menu-active")
    body.classList.remove("body-block")
  })
})