"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const menu = document.querySelector(".header__menu");
    const exitMenu = document.querySelector(".header__exit-menu");
    const body = document.querySelector("body");
    const links = document.querySelectorAll(".nav__link");

    links.forEach(function(links) {
      links.addEventListener("click", function() {
        menu.classList.remove("menu-active")
        body.classList.remove("body-clobk")
      })
    })

    burger.addEventListener("click", function () {
      menu.classList.add("menu-active")
      body.classList.add("body-clobk")
    })

    exitMenu.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-clobk")
    })
  })
}