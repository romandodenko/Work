"use strict"

document.addEventListener("DOMContentLoaded", function () {

  const burger = document.querySelector(".hd__burger");
  const menu = document.querySelector(".hd__wrapper-menu");
  const exitMenu = document.querySelector(".hd__menu-exit");
  const body = document.querySelector("body");

  burger.addEventListener("click", function () {
    menu.classList.add("menu-active")
    body.classList.add("body-block")
  })

  exitMenu.addEventListener("click", function () {
    menu.classList.remove("menu-active")
    body.classList.remove("body-block")
  })
})