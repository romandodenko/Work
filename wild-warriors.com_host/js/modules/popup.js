"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const popup = document.querySelectorAll(".popup-game");
  const popupClose = document.querySelectorAll(".popup-game__close");
  const popupExit = document.querySelectorAll(".popup-game__exit");

  if (popup) {
    popupClose.forEach(function (popupClose) {
      popupClose.addEventListener("click", function () {
        popup.forEach(function (popup) {
          popup.classList.remove("game-visible")
        })
      })
    })

    popupExit.forEach(function (popupClose) {
      popupClose.addEventListener("click", function () {
        popup.forEach(function (popup) {
          popup.classList.remove("game-visible")
        })
      })
    })
  }


})