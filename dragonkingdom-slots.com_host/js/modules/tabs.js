"use strict";

document.addEventListener("DOMContentLoaded", function () {
  const game = document.querySelector(".game");
  if (game) {
    document.querySelectorAll(".game__btn").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path = event.currentTarget.dataset.path

        document.querySelectorAll(".game-popup").forEach(function (tabContent) {
          tabContent.classList.remove("game-popup-active")
        })
        document.querySelector(`[data-target="${path}"]`).classList.add("game-popup-active")
      })
    })
  }
})