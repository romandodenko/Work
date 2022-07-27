"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".header__burger");
  const nav = document.querySelector(".header__menu");
  const exitBurger = document.querySelector(".header__exit-menu");
  const body = document.querySelector("body");
  const navLink = document.querySelectorAll(".nav__link");

  navLink.forEach(function (navLink) {
    navLink.addEventListener("click", function () {
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