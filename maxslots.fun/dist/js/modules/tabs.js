"use strict";

export function tabs() {
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".tabs-button").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path = event.currentTarget.dataset.path
  
        document.querySelectorAll(".tabs-content").forEach(function (tabContent) {
          tabContent.classList.remove("tabs-content-active")
        })
        document.querySelector(`[data-target="${path}"]`).classList.add("tabs-content-active")
      })
    })
  })
}
