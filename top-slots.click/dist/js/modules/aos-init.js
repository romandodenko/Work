"use strict"

export function aosInit() {
  document.addEventListener("DOMContentLoaded", function() {
    const aosElement = document.querySelector(".aos-element");
    if (aosElement) {
      AOS.init({
        duration: 900,
      });
    }
  })
}