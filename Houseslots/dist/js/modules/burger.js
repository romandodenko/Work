"use strict"

const burger = document.querySelector(".burger")
const nav = document.querySelector(".hd__nav")
const body = document.querySelector("body")

export function burgerOpen() {
  burger.addEventListener("click", function() {
    nav.classList.toggle("nav-active")
    burger.classList.toggle("burger-active")
    body.classList.toggle("body-block")
  })
}