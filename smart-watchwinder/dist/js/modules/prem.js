"use strict"

export function prem() {
document.addEventListener("DOMContentLoaded", function() {
  const prem = document.querySelector(".prem");
  const body = document.querySelector("body");

  if (body.offsetWidth > 1024) {
    prem.classList.add("prem-dekstop")
  }
})
}