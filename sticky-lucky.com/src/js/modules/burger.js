"use strict"

const burger = document.querySelector(".header__burger");
const nav = document.querySelector(".header__menu");
const exitBurger = document.querySelector(".header__exit-menu");
const body = document.querySelector("body");
const navLink = document.querySelectorAll(".nav__link");

export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function() {
    navLink.forEach(function(navLink) {
      navLink.addEventListener("click", function() {
        nav.classList.remove("nav-active")
        body.classList.remove("body-block")
      })
    })

    burger.addEventListener("click", function() {
      nav.classList.add("nav-active")
      body.classList.add("body-block")
    })
  
    exitBurger.addEventListener("click", function() {
      nav.classList.remove("nav-active")
      body.classList.remove("body-block")
    })
  })
}