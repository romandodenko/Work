"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const br = document.querySelector(".hd__burger");
  const menu = document.querySelector(".hd__menu");
  const exitBr = document.querySelector(".hd__exit-menu");
  const body = document.querySelector("body");
  const links = document.querySelectorAll(".nav__link");

  links.forEach(function (links) {
    links.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })

  br.addEventListener("click", function () {
    menu.classList.add("menu-active")
    body.classList.add("body-block")
  })

  exitBr.addEventListener("click", function () {
    menu.classList.remove("menu-active")
    body.classList.remove("body-block")
  })
})