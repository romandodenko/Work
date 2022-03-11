"use strict"

export function initJs() {
  document.addEventListener("DOMContentLoaded", function() {
    AOS.init( {
      duration: 1000,
    });
  })
}