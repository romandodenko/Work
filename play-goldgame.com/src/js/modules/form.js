"use strict"

export function form() {
  document.addEventListener("DOMContentLoaded", function() {
    const buttonSign = document.querySelector(".header__sign");
    const buttonLog = document.querySelector(".header__log");
    const reg = document.querySelector(".popup-reg");
    const log = document.querySelector(".popup-log");
    const signClose = document.querySelector(".popup-reg__close");
    const signLog = document.querySelector(".popup-log__close");
    const signExit = document.querySelector(".popup-reg__exit");
    const logExit = document.querySelector(".popup-log__exit");
    const body = document.querySelector("body");

    if (buttonSign && buttonLog) {
      buttonLog.addEventListener("click", function() {
        log.classList.add("popup-log-active")
        body.classList.add("body-block")
      })
      signLog.addEventListener("click", function() {
        log.classList.remove("popup-log-active")
        body.classList.remove("body-block")
      })
      logExit.addEventListener("click", function() {
        log.classList.remove("popup-log-active")
        body.classList.remove("body-block")
      })
  
      buttonSign.addEventListener("click", function() {
        reg.classList.add("popup-reg-active")
        body.classList.add("body-block")
      })
      signClose.addEventListener("click", function() {
        reg.classList.remove("popup-reg-active")
        body.classList.remove("body-block")
      })
      signExit.addEventListener("click", function() {
        reg.classList.remove("popup-reg-active")
        body.classList.remove("body-block")
      })
    }

  })
}
