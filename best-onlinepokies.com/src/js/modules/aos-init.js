"use strict"

export function aosInit() {
  document.addEventListener("DOMContentLoaded", function() {
    // const policeTermsCockie = document.querySelector(".police-terms-cockie");

    AOS.init({
      duration: 900,
    });
  })
}