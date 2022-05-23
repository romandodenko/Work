"use strict"

export function gsapScript() {
  document.addEventListener("DOMContentLoaded", function() {
  const formPopupClose = document.querySelector(".form-popup__close");
  const formPopupExit = document.querySelector(".form-popup__exit");
  const initialButton = document.querySelector(".subscribe");
  const popupGsap = document.querySelector(".form-popup-gsap");

    if(popupGsap) {
      let form = gsap.timeline()
      form
      .to(".form-popup-gsap", {duration: .4, delay: 2, opacity: 1, visibility: "visible", pointerEvents: "visible"})
  
      initialButton.addEventListener("click", function() {
        form.timeScale(4).play()
      })
  
      formPopupClose.addEventListener("click", function() {
        form.timeScale(2).reverse()
      })
  
      formPopupExit.addEventListener("click", function() {
        form.timeScale(2).reverse()
      })
    }

  })
}