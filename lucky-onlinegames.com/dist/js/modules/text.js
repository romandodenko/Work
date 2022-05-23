"use strict"

export function text() {
  const btn = document.querySelector(".btn-1");
  const text = document.querySelector(".text-1")
  const btn2 = document.querySelector(".btn-2");
  const text2 = document.querySelector(".text-2")
  const btn3 = document.querySelector(".btn-3");
  const text3 = document.querySelector(".text-3")


  btn.addEventListener("click", function() {
    text.classList.toggle("text-active")
  })
  btn2.addEventListener("click", function() {
    text2.classList.toggle("text-active")
  })
  btn3.addEventListener("click", function() {
    text3.classList.toggle("text-active")
  })


}