"use strict"

export function gsapScript() {
  document.addEventListener("DOMContentLoaded", function() {
  const warningPopup = document.querySelector(".warning-popup")
  const warningPopupClose = document.querySelector(".warning-popup__close")
  const warningPopupExit = document.querySelectorAll(".warning-popup__exit")
  let warp = gsap.timeline()

  warp
  .to(warningPopup, {duration: .4, delay: 2, opacity: 1, visibility: "visible", pointerEvents: "visible"})

    warningPopupClose.addEventListener("click", () => {
      warp.timeScale(2).reverse()
  })

  warningPopupExit.forEach(function(warningPopupExit) {
    warningPopupExit.addEventListener("click", function() {
      warp.timeScale(2).reverse()
    })
  })

  })
}