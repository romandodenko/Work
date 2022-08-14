"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".navbar");

  burger.addEventListener("click", function () {
    nav.classList.toggle("navbar-active")
  })

})