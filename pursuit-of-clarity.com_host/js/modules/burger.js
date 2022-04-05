"use strict"

const burger = document.querySelector(".header__burger")
const nav = document.querySelector(".header__nav")
const exitBurger = document.querySelector(".header__btn")

export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function() {
    burger.addEventListener("click", function() {
      nav.classList.add("nav-active")
    })
  
    exitBurger.addEventListener("click", function() {
      nav.classList.remove("nav-active")
    })
  })
}