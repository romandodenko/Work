"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const buttonSign = document.querySelector(".hd__sign");
  const buttonLog = document.querySelector(".hd__log");
  const reg = document.querySelector(".popup-reg");
  const log = document.querySelector(".popup-log");
  const signClose = document.querySelector(".popup-reg__close");
  const logClose = document.querySelector(".popup-log__close");
  const signExit = document.querySelector(".popup-reg__exit");
  const logExit = document.querySelector(".popup-log__exit");
  const body = document.querySelector("body");
  const menu = document.querySelector(".hd__wrapper-menu");
  const hrButton = document.querySelector(".hr__button");

  if (buttonSign && buttonLog) {
    buttonLog.addEventListener("click", function () {
      log.classList.add("popup-log-active")
      body.classList.add("body-block")
      menu.classList.remove("menu-active")
    })
    logClose.addEventListener("click", function () {
      log.classList.remove("popup-log-active")
      body.classList.remove("body-block")
    })
    logExit.addEventListener("click", function () {
      log.classList.remove("popup-log-active")
      body.classList.remove("body-block")
    })

    buttonSign.addEventListener("click", function () {
      reg.classList.add("popup-reg-active")
      body.classList.add("body-block")
      menu.classList.remove("menu-active")
    })
    signClose.addEventListener("click", function () {
      reg.classList.remove("popup-reg-active")
      body.classList.remove("body-block")
    })
    signExit.addEventListener("click", function () {
      reg.classList.remove("popup-reg-active")
      body.classList.remove("body-block")
    })
  }

  if (hrButton && reg) {
    hrButton.addEventListener("click", function () {
      reg.classList.add("popup-reg-active")
      body.classList.add("body-block")
      menu.classList.remove("menu-active")
    })

    signClose.addEventListener("click", function () {
      reg.classList.remove("popup-reg-active")
      body.classList.remove("body-block")
    })
    signExit.addEventListener("click", function () {
      reg.classList.remove("popup-reg-active")
      body.classList.remove("body-block")
    })
  }

})