"use strict"

export function popup() {
  document.addEventListener("DOMContentLoaded", function () {
    const popup = document.querySelectorAll(".game-popup");
    const popupClose = document.querySelectorAll(".game-popup__close");
    const popupExit = document.querySelectorAll(".game-popup__exit");
    if (popup) {
      popupClose.forEach(function (popupClose) {
        popupClose.addEventListener("click", function () {
          popup.forEach(function (popup) {
            popup.classList.remove("game-popup-active")
          })
        })
      })
      popupExit.forEach(function (popupExit) {
        popupExit.addEventListener("click", function () {
          popup.forEach(function (popup) {
            popup.classList.remove("game-popup-active")
          })
        })
      })
    }
  })
}