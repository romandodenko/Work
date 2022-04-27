"use strict";

export function tabs() {
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".forms-button").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path = event.currentTarget.dataset.path
  
        document.querySelectorAll(".wrapper-form").forEach(function (tabContent) {
          tabContent.classList.remove("wrapper-form-active")
        })
        document.querySelector(`[data-target="${path}"]`).classList.add("wrapper-form-active")
      })
    })
  })
}
