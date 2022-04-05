"use strict"

export function formsJs() {
  document.addEventListener("DOMContentLoaded", function() {
    const reg = document.querySelector(".reg");
    const regClose = document.querySelector(".reg__close");
    const regExit = document.querySelector(".reg__exit");
    const regClick = document.querySelector(".reg-click");
    const log = document.querySelector(".log");
    const logClose = document.querySelector(".log__close");
    const logExit = document.querySelector(".log__exit");
    const logClick = document.querySelector(".log-click");
    const body = document.querySelector("body");

    regClick.addEventListener("click", function() {
      reg.classList.add("reg-active")
      body.classList.add("body-block")
    })

    regClose.addEventListener("click", function() {
      reg.classList.remove("reg-active")
       body.classList.remove("body-block")
    })

    regExit.addEventListener("click", function() {
      reg.classList.remove("reg-active")
       body.classList.remove("body-block")
    })

    logClick.addEventListener("click", function() {
      log.classList.add("log-active")
      body.classList.add("body-block")
    })

    logClose.addEventListener("click", function() {
      log.classList.remove("log-active")
       body.classList.remove("body-block")
    })

    logExit.addEventListener("click", function() {
      log.classList.remove("log-active")
       body.classList.remove("body-block")
    })
  })
}