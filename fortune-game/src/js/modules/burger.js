"use strict"


export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function () {

    const burger = document.querySelector(".header__burger");
    const menu = document.querySelector(".header__wrapper-menu");
    const exitmenu = document.querySelector(".header__menu-close");
    const body = document.querySelector("body");
    const linkAnchor = document.querySelectorAll(".link-anchor");

    linkAnchor.forEach(function(linkAnchor) {
      linkAnchor.addEventListener("click", function() {
        menu.classList.remove("wrapper-menu-active")
        body.classList.remove("body-block")
      })
    })

    burger.addEventListener("click", function () {
      menu.classList.add("wrapper-menu-active")
      body.classList.add("body-block")
    })

    exitmenu.addEventListener("click", function () {
      menu.classList.remove("wrapper-menu-active")
      body.classList.remove("body-block")
    })
  })
}