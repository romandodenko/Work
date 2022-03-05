"use strict"

const regBtn = document.querySelector(".reg");
const reges = document.querySelector(".popup-reg");
const regClose = document.querySelector(".popup-reg__close");
const regExit = document.querySelector(".popup-reg__exit")

export function reg() {
  regBtn.addEventListener("click", function() {
    reges.classList.add("pop-reg-active")
  })
  regExit.addEventListener("click", function() {
    reges.classList.remove("pop-reg-active")
  })
  regClose.addEventListener("click", function() {
    reges.classList.remove("pop-reg-active")
  })
}