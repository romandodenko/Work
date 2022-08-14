"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".hd__burger");
  const nav = document.querySelector(".hd__menu");
  const exitBurger = document.querySelector(".hd__exit-menu");
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