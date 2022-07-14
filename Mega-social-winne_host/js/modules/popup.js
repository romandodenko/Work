"use strict"

  document.addEventListener("DOMContentLoaded", function () {
    const popup = document.querySelector(".popup");
    const popupClose = document.querySelector(".popup__close");
    const popupExit = document.querySelector(".popup__exit");
    const popupBtn = document.querySelector(".popup__btn");
    popupClose.addEventListener("click", function () {
      popup.classList.remove("popup-active")
    })
    popupExit.addEventListener("click", function () {
      popup.classList.remove("popup-active")
    })
    popupBtn.addEventListener("click", function () {
      popup.classList.remove("popup-active")
    })
  })
