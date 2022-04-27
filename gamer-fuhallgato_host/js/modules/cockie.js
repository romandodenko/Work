"use strict"

export function cockie() {
  document.addEventListener("DOMContentLoaded", function () {
    const pageCockie = document.querySelector(".page-cockie");
    const cockieWindow = document.querySelector(".cockie");
    const cockieClose = document.querySelector(".cockie__close");
    const cockieExit = document.querySelector(".cockie__exit");
    const btn = document.querySelector(".page-cockie__btn");

    if (pageCockie && cockieWindow) {
      btn.addEventListener("click", function () {
        cockieWindow.classList.add("cockie-active")
      })
  
      cockieClose.addEventListener("click", function () {
        cockieWindow.classList.remove("cockie-active")
      })
  
      cockieExit.addEventListener("click", function () {
        cockieWindow.classList.remove("cockie-active")
      })
    }
  })
}