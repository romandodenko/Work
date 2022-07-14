"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".header__burger");
  const menu = document.querySelector(".header__menu");
  const exitMenu = document.querySelector(".header__exit-menu");
  const body = document.querySelector("body");
  const navLinks = document.querySelectorAll(".nav__link");

  navLinks.forEach(function (navLinks) {
    navLinks.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })

  burger.addEventListener("click", function () {
    menu.classList.add("menu-active")
    body.classList.add("body-block")
  })

  exitMenu.addEventListener("click", function () {
    menu.classList.remove("menu-active")
    body.classList.remove("body-block")
  })
})