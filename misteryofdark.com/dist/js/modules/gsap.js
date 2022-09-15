const openBtn = document.querySelector(".open-btn")
const collapseBtn = document.querySelector(".collapse-btn")
let productList = gsap.timeline({
  paused: true
})

productList
  .to(".product-hidden", {
    duration: .4,
    opacity: 1,
    visibility: "visible",
    display: "flex"
  })

openBtn.addEventListener("click", () => {
  collapseBtn.classList.add("collapse-btn-active")
  openBtn.classList.add("open-btn-disabled")
  productList.timeScale(1).play()
})

collapseBtn.addEventListener("click", () => {
  collapseBtn.classList.remove("collapse-btn-active")
  openBtn.classList.remove("open-btn-disabled")
  productList.timeScale(2).reverse()
})