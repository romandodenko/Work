"use strict"

export function popup() {
  document.addEventListener("DOMContentLoaded", function() {
    const initialButton = document.querySelector(".subscribe");
    const formPopup = document.querySelector(".form-popup");
    const formPopupClose = document.querySelector(".form-popup__close");
    const formPopupExit = document.querySelector(".form-popup__exit");
    const startCockie = document.querySelector(".start-cockie");
    const startCockieWrapperCockie = document.querySelector(".start-cockie__wrapper-cockie");
    const startCockieBtn = document.querySelector(".start-cockie__btn");
    const startCockieClose = document.querySelector(".start-cockie__close");
    const startCockieExit = document.querySelector(".start-cockie__exit");
    const body = document.querySelector("body");
    if (!startCockie) {
      initialButton.addEventListener("click" , function() {
        formPopup.classList.add("form-popup-active");
        body.classList.add(".body-block")
      })
      formPopupClose.addEventListener("click" , function() {
        formPopup.classList.remove("form-popup-active");
        body.classList.remove(".body-block")
      })
      formPopupExit.addEventListener("click" , function() {
        formPopup.classList.remove("form-popup-active");
        body.classList.remove(".body-block")
      })
    }
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