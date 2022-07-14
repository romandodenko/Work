"use strict"

export function gsapScript() {
  document.addEventListener("DOMContentLoaded", function () {
 const seeWatchSkip = document.querySelector(".see-watch__skip");
    let productList = gsap.timeline({})

    productList
      .to(".see-watch", {
        delay: 4,
        duration: .4,
        opacity: 1,
        visibility: "visible",
        display: "block"
      })

    seeWatchSkip.addEventListener("click", () => {
      productList.timeScale(2).reverse()
    })
  })
}
