"use strict"

export function forms() {
  document.addEventListener("DOMContentLoaded", function() {
    const btnReg = document.querySelector(".buttons__sign");
    const reg = document.querySelector(".reg");
    const regExit = document.querySelector(".reg__exit");
    const regClose = document.querySelector(".reg__close");
    const btnLog = document.querySelector(".buttons__log");
    const log = document.querySelector(".log");
    const logExit = document.querySelector(".log__exit");
    const logClose = document.querySelector(".log__close");
    const body = document.querySelector("body");

    btnReg.addEventListener("click", function() {
      reg.classList.add("reg-active")
      body.classList.add("body-block")
    })
    regExit.addEventListener("click", function() {
      reg.classList.remove("reg-active")
      body.classList.remove("body-block")
    })
    regClose.addEventListener("click", function() {
      reg.classList.remove("reg-active")
      body.classList.remove("body-block")
    })
    btnLog.addEventListener("click", function() {
      log.classList.add("log-active")
      body.classList.add("body-block")
    })
    logExit.addEventListener("click", function() {
      log.classList.remove("log-active")
      body.classList.remove("body-block")
    })
    logClose.addEventListener("click", function() {
      log.classList.remove("log-active")
      body.classList.remove("body-block")
    })
  })
}