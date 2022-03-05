"use strict"

const body = document.querySelector("body")
const aosClass = document.querySelector(".aos")

export function aosScript() {

  if (body.offsetWidth > 1024 && aosClass) {
    AOS.init({
      duration: 800
    });
  }
}