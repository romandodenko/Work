"use strict"

export function forms() {
  document.addEventListener("DOMContentLoaded", function() {
    const signText = document.querySelector(".sign-text");
    const signClose = document.querySelector(".sign-close");
    const signBtn = document.querySelector(".sign-btn");
    const sign = document.querySelector(".forms__wrapper-sign");
    const logText = document.querySelector(".log-text");
    const logClose = document.querySelector(".log-close");
    const logBtn = document.querySelector(".log-btn");
    const log = document.querySelector(".forms__wrapper-log");

    signBtn.addEventListener("click", function() {
      sign.classList.add("sign-active")
    })
    signClose.addEventListener("click", function() {
      sign.classList.remove("sign-active")
    })
    logBtn.addEventListener("click", function() {
      log.classList.add("log-active")
    })
    logClose.addEventListener("click", function() {
      log.classList.remove("log-active")
    })
  })
}