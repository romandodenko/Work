"use strict"

export function aosInit() {
  document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
      duration: 900,
    });
  })
}