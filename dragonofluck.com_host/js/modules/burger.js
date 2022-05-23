"use strict"


document.addEventListener("DOMContentLoaded", function () {

  const burger = document.querySelector(".header__burger");
  const inner = document.querySelector(".header__inner-menu");
  const exitInner = document.querySelector(".header__inner-exit");
  const navLinks = document.querySelectorAll(".nav__link");
  const body = document.querySelector("body");

  navLinks.forEach(function (navLinks) {
    navLinks.addEventListener("click", function () {
      inner.classList.remove("inner-menu-active")
      body.classList.remove("body-block")
    })
  })

  burger.addEventListener("click", function () {
    inner.classList.add("inner-menu-active")
    body.classList.add("body-block")
  })

  exitInner.addEventListener("click", function () {
    inner.classList.remove("inner-menu-active")
    body.classList.remove("body-block")
  })
})