"use strict"

  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const menu = document.querySelector(".header__menu");
    const exitmenu = document.querySelector(".header__exit-menu");
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

    exitmenu.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })
