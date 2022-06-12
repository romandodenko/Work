"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const cockieWrapper = document.querySelector(".start-cockie__wrapper-cockie");
  const cockieClose = document.querySelector(".start-cockie__close");
  const cockieExit = document.querySelector(".start-cockie__exit");
  const cockieBtn = document.querySelector(".cockie__btn");
  const cockieCheck = document.querySelectorAll(".cockie__checkbox");
  const cockieLink = document.querySelector(".cockie__link");

  cockieBtn.addEventListener("click", function () {
    cockieWrapper.classList.add("start-cockie-wrapper-active")
  })
  cockieClose.addEventListener("click", function () {
    cockieWrapper.classList.remove("start-cockie-wrapper-active")
  })
  cockieExit.addEventListener("click", function () {
    cockieWrapper.classList.remove("start-cockie-wrapper-active")
  })

  cockieCheck.forEach(function(checkbox) {
    checkbox.addEventListener("change", function() {
      cockieLink.classList.toggle("link-disabled")
    })
  })

})