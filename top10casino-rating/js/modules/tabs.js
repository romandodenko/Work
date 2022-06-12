"use strict";


document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".items-top-left__button").forEach(function (tabsBtn) {
    tabsBtn.addEventListener("click", function (event) {
      const path = event.currentTarget.dataset.path

      document.querySelectorAll(".items__bottom-text").forEach(function (tabContent) {
        tabContent.classList.remove("text-active")
      })
      document.querySelector(`[data-target="${path}"]`).classList.add("text-active")
    })
  })
})