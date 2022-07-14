"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const clicker = document.querySelector(".header__burger");
  const menu = document.querySelector(".header__menu");
  const closeMenu = document.querySelector(".header__exit-menu");
  const body = document.querySelector("body");
  const link = document.querySelectorAll(".nav__link");

  link.forEach(function (link) {
    link.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })

  clicker.addEventListener("click", function () {
    menu.classList.add("menu-active")
    body.classList.add("body-block")
  })

  closeMenu.addEventListener("click", function () {
    menu.classList.remove("menu-active")
    body.classList.remove("body-block")
  })
})