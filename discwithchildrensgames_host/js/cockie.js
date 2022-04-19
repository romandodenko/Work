"use strict"

const cockieWindow = document.querySelector(".cockie");
const cockieClose = document.querySelector(".cockie__close");
const cockieExit = document.querySelector(".cockie__exit");
const btn = document.querySelector(".page-cockie__btn");

btn.addEventListener("click", function() {
  cockieWindow.classList.add("cockie-active")
})

cockieClose.addEventListener("click", function() {
  cockieWindow.classList.remove("cockie-active")
})

cockieExit.addEventListener("click", function() {
  cockieWindow.classList.remove("cockie-active")
})