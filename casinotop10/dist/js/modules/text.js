"use strict"

export function text() {
  const btn = document.querySelector(".btn-1");
  const text = document.querySelector(".text-1")
  const btn2 = document.querySelector(".btn-2");
  const text2 = document.querySelector(".text-2")
  const btn3 = document.querySelector(".btn-3");
  const text3 = document.querySelector(".text-3")
  const btn4 = document.querySelector(".btn-4");
  const text4 = document.querySelector(".text-4")
  const btn5 = document.querySelector(".btn-5");
  const text5 = document.querySelector(".text-5")
  const btn6 = document.querySelector(".btn-6");
  const text6 = document.querySelector(".text-6")
  const btn7 = document.querySelector(".btn-7");
  const text7 = document.querySelector(".text-7")
  const btn8 = document.querySelector(".btn-8");
  const text8 = document.querySelector(".text-8")
  const btn9 = document.querySelector(".btn-9");
  const text9 = document.querySelector(".text-9")

  btn.addEventListener("click", function() {
    text.classList.toggle("text-active")
  })
  btn2.addEventListener("click", function() {
    text2.classList.toggle("text-active")
  })
  btn3.addEventListener("click", function() {
    text3.classList.toggle("text-active")
  })
  btn4.addEventListener("click", function() {
    text4.classList.toggle("text-active")
  })
  btn5.addEventListener("click", function() {
    text5.classList.toggle("text-active")
  })
  btn6.addEventListener("click", function() {
    text6.classList.toggle("text-active")
  })
  btn7.addEventListener("click", function() {
    text7.classList.toggle("text-active")
  })
  btn8.addEventListener("click", function() {
    text8.classList.toggle("text-active")
  })
  btn9.addEventListener("click", function() {
    text9.classList.toggle("text-active")
  })

}