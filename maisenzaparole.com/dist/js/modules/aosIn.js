"use strict"

export function aosInit() {
  document.addEventListener("DOMContentLoaded", function() {
    const aosClass = document.querySelector(".class-aos");
    if (aosClass) {
      AOS.init();
    }
  })
}