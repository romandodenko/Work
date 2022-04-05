"use strict"

const burger = document.querySelector(".header__burger");
const nav = document.querySelector(".header__nav");
const body = document.querySelector("body")

export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function() {
    burger.addEventListener("click", function() {
      nav.classList.toggle("nav-active")
      burger.classList.toggle("burger-active")
      body.classList.toggle("body-block")
    })

  })
}