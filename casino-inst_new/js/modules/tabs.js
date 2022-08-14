"use strict";


  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".galary__button").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path = event.currentTarget.dataset.path
  
        document.querySelectorAll(".galary__list").forEach(function (tabContent) {
          tabContent.classList.remove("galary-list-active")
        })
        document.querySelector(`[data-target="${path}"]`).classList.add("galary-list-active")
      })
    })


    document.querySelectorAll(".galary__button").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path1 = event.currentTarget.dataset.path1
  
        document.querySelectorAll(".galary__button").forEach(function (tabContent) {
          tabContent.classList.remove("galary-button-active")
        })
        document.querySelector(`[data-target1="${path1}"]`).classList.add("galary-button-active")
      })
    })

  })