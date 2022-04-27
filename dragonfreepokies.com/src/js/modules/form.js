"use strict"

export function form() {
  document.addEventListener("click", function () {
    const regButton = document.querySelectorAll(".form-clicker");
    const popup = document.querySelector(".popup-forms");
    const popupClose = document.querySelector(".popup-forms__close");
    const popupExit = document.querySelector(".popup-forms__exit");
    const body = document.querySelector("body");
    const sign = document.querySelector(".popup-forms__sign");
    const log = document.querySelector(".popup-forms__log");
    const burger = document.querySelector(".header__burger");
    const nav = document.querySelector(".header__nav");

    regButton.forEach(function (formClicker) {
      formClicker.addEventListener("click", function () {
        popup.classList.add("popup-forms-active")
        body.classList.add("body-block")
        nav.classList.remove("nav-active")
        burger.classList.remove("burger-active")
      })
    })

    popupClose.addEventListener("click", function () {
      popup.classList.remove("popup-forms-active")
      body.classList.remove("body-block")
      nav.classList.remove("nav-active")
      burger.classList.remove("burger-active")
    })

    popupExit.addEventListener("click", function () {
      popup.classList.remove("popup-forms-active")
      body.classList.remove("body-block")
      nav.classList.remove("nav-active")
      burger.classList.remove("burger-active")
    })

    sign.addEventListener("click", function () {
      sign.classList.add("forms-button-active")
      log.classList.remove("forms-button-active")
      nav.classList.remove("nav-active")
      burger.classList.remove("burger-active")
    })

    log.addEventListener("click", function () {
      log.classList.add("forms-button-active")
      sign.classList.remove("forms-button-active")
      nav.classList.remove("nav-active")
      burger.classList.remove("burger-active")
    })
  })
}