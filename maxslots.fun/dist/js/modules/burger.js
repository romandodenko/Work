"use strict"

const burger = document.querySelector(".burger-menu");
const nav = document.querySelector(".header__nav");
const body = document.querySelector("body");
const profilePage = document.querySelector(".profile-page");

export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function() {
    if (!profilePage) {
      burger.addEventListener("click", function() {
        nav.classList.toggle("nav-active")
        burger.classList.toggle("burger-menu-active")
        body.classList.toggle("body-block")
      })
    }
  })
}