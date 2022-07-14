"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".hd__burger");
    const menu = document.querySelector(".hd__menu");
    const exitMenu = document.querySelector(".hd__exit-menu");
    const body = document.querySelector("body");
    const navLink = document.querySelectorAll(".nav__link");
    navLink.forEach(function(navLink) {
      navLink.addEventListener("click", function() {
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
}