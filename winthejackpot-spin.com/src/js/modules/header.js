"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".hh__burger");
    const nav = document.querySelector(".hh__menu");
    const exitBurger = document.querySelector(".hh__exit-menu");
    const body = document.querySelector("body");
    const navLink = document.querySelectorAll(".nav__link");

    navLink.forEach(function (navLink) {
      navLink.addEventListener("click", function () {
        nav.classList.remove("menu-active")
        body.style.overflow = ""
      })
    })

    burger.addEventListener("click", function () {
      nav.classList.add("menu-active")
      body.style.overflow = "hidden"
    })

    exitBurger.addEventListener("click", function () {
      nav.classList.remove("menu-active")
      body.style.overflow = ""
    })
  })
}