"use strict"

const accedBtn = document.querySelector(".acced");
const acceds = document.querySelector(".popup-acced");
const accedClose = document.querySelector(".popup-acced__close");
const accedExit = document.querySelector(".popup-acced__exit")

export function acced() {
  accedBtn.addEventListener("click", function() {
    acceds.classList.add("pop-acced-active")
  })
  accedExit.addEventListener("click", function() {
    acceds.classList.remove("pop-acced-active")
  })
  accedClose.addEventListener("click", function() {
    acceds.classList.remove("pop-acced-active")
  })
}