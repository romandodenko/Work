"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".head__burger");
  const head_menu = document.querySelector(".head__menu");
  const exit_menu = document.querySelector(".head__exit-menu");
  const body = document.querySelector("body");
  const nav_link = document.querySelectorAll(".nav__link");

  nav_link.forEach(function (navLink) {
    navLink.addEventListener("click", function () {
      head_menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })

  burger.addEventListener("click", function () {
    head_menu.classList.add("menu-active")
    body.classList.add("body-block")
  })

  exit_menu.addEventListener("click", function () {
    head_menu.classList.remove("menu-active")
    body.classList.remove("body-block")
  })
})