"use strict";

export function tabs() {
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".games-form-button").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path = event.currentTarget.dataset.path
  
        document.querySelectorAll(".games-forms").forEach(function (tabContent) {
          tabContent.classList.remove("games-form-active")
        })
        document.querySelector(`[data-target="${path}"]`).classList.add("games-form-active")
      })
    })
  })
}
