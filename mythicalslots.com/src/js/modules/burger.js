"use strict"


export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const wrapperBurger = document.querySelector(".header__wrapper-burger");
    const body = document.querySelector("body");
    const linkAnchor = document.querySelectorAll(".link-anchor");
    linkAnchor.forEach(function (linkAnchor) {
      linkAnchor.addEventListener("click", function () {
        wrapperBurger.classList.remove("wrapper-burger-active")
        burger.classList.remove("burger-active")
        body.classList.remove("body-block")
      })
    })
    burger.addEventListener("click", function () {
      wrapperBurger.classList.toggle("wrapper-burger-active")
      burger.classList.toggle("burger-active")
      body.classList.toggle("body-block")
    })
  })
}