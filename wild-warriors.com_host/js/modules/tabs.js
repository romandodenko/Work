"use strict";

document.addEventListener("DOMContentLoaded", function () {
  const popup = document.querySelectorAll(".popup-game");
  if (popup) {
    document.querySelectorAll(".block-3__clicker").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path = event.currentTarget.dataset.path

        document.querySelectorAll(".popup-game").forEach(function (tabContent) {
          tabContent.classList.remove("game-visible")
        })
        document.querySelector(`[data-target="${path}"]`).classList.add("game-visible")
      })
    })
  }
})