"use strict"

export function forms() {
  document.addEventListener("DOMContentLoaded", function() {
    const logBtn = document.querySelector(".header-buttons__log");
    const regBtn = document.querySelector(".header-buttons__sign");
    const popupLog = document.querySelector(".popup-log");
    const popupReg = document.querySelector(".popup-reg");
    const popupLogClose = document.querySelector(".popup-log__close");
    const popupRegClose = document.querySelector(".popup-reg__close");
    const popupLogExit = document.querySelector(".popup-log__exit");
    const popupRegExit = document.querySelector(".popup-reg__exit");
    const body = document.querySelector("body");

    logBtn.addEventListener("click", function() {
      popupLog.classList.add("popup-log-active")
      body.classList.add("body-block")
    })

    popupLogClose.addEventListener("click", function() {
      popupLog.classList.remove("popup-log-active")
      body.classList.remove("body-block")
    })

    popupLogExit.addEventListener("click", function() {
      popupLog.classList.remove("popup-log-active")
      body.classList.remove("body-block")
    })

    regBtn.addEventListener("click", function() {
      popupReg.classList.add("popup-reg-active")
      body.classList.add("body-block")
    })

    popupRegClose.addEventListener("click", function() {
      popupReg.classList.remove("popup-reg-active")
      body.classList.remove("body-block")
    })

    popupRegExit.addEventListener("click", function() {
      popupReg.classList.remove("popup-reg-active")
      body.classList.remove("body-block")
    })

  })
}