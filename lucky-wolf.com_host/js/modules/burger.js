"use strict"

export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function () {

    const burger = document.querySelector(".block-header__burger");
    const menu = document.querySelector(".block-header__menu-wrapper");
    const exitMenu = document.querySelector(".block-header__exit-menu");
    const body = document.querySelector("body");
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

    exitMenu.addEventListener("click", function () {
      menu.classList.remove("menu-active")
      body.classList.remove("body-block")
    })
  })
}