"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const popup = document.querySelector(".popup");
  const accept = document.querySelector(".popup__btns-accept");
  const close = document.querySelector(".popup__btns-clos");
  let popupTime = gsap.timeline()

  popupTime
    .to(popup, {
      delay: 1,
      duration: .4,
      opacity: '1',
      bottom: "30px",
    })

  accept.addEventListener("click", () => {
    popupTime.timeScale(2).reverse()
  })

  close.addEventListener("click", () => {
    popupTime.timeScale(2).reverse()
  })
})