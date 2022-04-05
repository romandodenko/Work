"use strict"

const regClicker = document.querySelector(".header__reg"); 
const logClicker = document.querySelector(".header__log"); 
const log = document.querySelector(".log");
const reg = document.querySelector(".reg");
const main = document.querySelector("main");
const headerTop = document.querySelector(".header__top");


export function burgerOpen() {
  document.addEventListener("DOMContentLoaded", function() {
    regClicker.addEventListener("click", function() {
      reg.classList.toggle("reg-active")
      log.classList.remove("log-active")
    })
    main.addEventListener("click", function() {
      reg.classList.remove("reg-active")
      log.classList.remove("log-active")
    })
    headerTop.addEventListener("click", function() {
      reg.classList.remove("reg-active")
      log.classList.remove("log-active")
    })
    logClicker.addEventListener("click", function() {
      log.classList.toggle("log-active")
      reg.classList.remove("reg-active")
    })
  })
}