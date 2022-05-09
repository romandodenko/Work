"use strict"


export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const menu = document.querySelector(".menu");
    const body = document.querySelector("body");
    const menuExit = document.querySelector(".menu__exit");
    const menuClose = document.querySelector(".menu__close");
    const linkAnchor = document.querySelectorAll(".link-anchor");

    linkAnchor.forEach(function(linkAnchor) {
      linkAnchor.addEventListener("click", function() {
        menu.classList.remove("menu-active")
        body.classList.remove("body-block")
      })
    })

    burger.addEventListener("click", function () {
      menu.classList.add("menu-active")
      body.classList.add("body-block")
    })
    menuClose.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
    menuExit.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })
}