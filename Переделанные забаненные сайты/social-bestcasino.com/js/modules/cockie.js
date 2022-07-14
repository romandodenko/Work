"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const wrapper = document.querySelector(".start-cc__wrapper-cockie");
  const close = document.querySelector(".start-cc__close");
  const exit = document.querySelector(".start-cc__exit");
  const btn = document.querySelector(".cc__btn");
  const check = document.querySelectorAll(".cc__checkbox");
  const link = document.querySelector(".cc__link");
  if (wrapper) {
    btn.addEventListener("click", function () {
      wrapper.classList.add("start-cc-wrapper-active")
    })
    close.addEventListener("click", function () {
      wrapper.classList.remove("start-cc-wrapper-active")
    })
    exit.addEventListener("click", function () {
      wrapper.classList.remove("start-cc-wrapper-active")
    })
  
    check.forEach(function(checkbox) {
      checkbox.addEventListener("change", function() {
        link.classList.toggle("link-disabled")
      })
    })
  }

})