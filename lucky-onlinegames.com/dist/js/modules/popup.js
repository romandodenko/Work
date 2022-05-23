"use strict"

export function popup() {
  document.addEventListener("DOMContentLoaded", function() {
    const startCockie = document.querySelector(".start-cockie");
    const startCockieWrapperCockie = document.querySelector(".start-cockie__wrapper-cockie");
    const startCockieBtn = document.querySelector(".start-cockie__btn");
    const startCockieClose = document.querySelector(".start-cockie__close");
    const startCockieExit = document.querySelector(".start-cockie__exit");
    const body = document.querySelector("body");

    if (startCockie) {
      startCockieBtn.addEventListener("click", function() {
        startCockieWrapperCockie.classList.add("start-cockie-wrapper-active")
        body.classList.add(".body-block")
      })
      startCockieClose.addEventListener("click", function() {
        startCockieWrapperCockie.classList.remove("start-cockie-wrapper-active")
        body.classList.remove(".body-block")
      })
      startCockieExit.addEventListener("click", function() {
        startCockieWrapperCockie.classList.remove("start-cockie-wrapper-active")
        body.classList.remove(".body-block")
      })
    }
  
  })
}