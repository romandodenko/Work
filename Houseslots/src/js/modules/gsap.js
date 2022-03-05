import gsap from 'gsap';

const weekSee = document.querySelector(".week-see");
const weekCollapse = document.querySelector(".week-collapse");
const bestSee = document.querySelector(".best-see");
const bestCollapse = document.querySelector(".best-collapse");
const allSee = document.querySelector(".all-see");
const allCollapse = document.querySelector(".all-collapse");
const gs = document.querySelector(".slots-gsap");
let weekSlots = gsap.timeline({ paused: true })
let bestSlots = gsap.timeline({ paused: true })
let allSlots = gsap.timeline({ paused: true })
 
export function gsapScript() {
 if (gs) {

  weekSlots
    .to(".week-hidden", {duration: .4, opacity: 1, visibility: "visible", display: "flex"})
    .to(".week-hidden-fade", {duration: .4, opacity: 1, visibility: "visible", display: "flex"}, "-=.4")


    weekSee.addEventListener("click", () => {
      weekCollapse.classList.add("week-collapse-active")
      weekSee.classList.add("week-open-disabled")
      weekSlots.timeScale(1).play()
  })

   weekCollapse.addEventListener("click", () => {
      weekCollapse.classList.remove("week-collapse-active")
      weekSee.classList.remove("week-open-disabled")
      weekSlots.timeScale(2).reverse()
    })
  
    bestSlots
    .to(".best-hidden", {duration: .4, opacity: 1, visibility: "visible", display: "flex"})
    .to(".best-hidden-fade", {duration: .4, opacity: 1, visibility: "visible", display: "flex"}, "-=.4")


    bestSee.addEventListener("click", () => {
      bestCollapse.classList.add("best-collapse-active")
      bestSee.classList.add("best-open-disabled")
      bestSlots.timeScale(1).play()
  })

   bestCollapse.addEventListener("click", () => {
    bestCollapse.classList.remove("best-collapse-active")
      bestSee.classList.remove("best-open-disabled")
      bestSlots.timeScale(2).reverse()
    })

  allSlots
    .to(".all-hidden", {duration: .4, opacity: 1, visibility: "visible", display: "flex"})
    .to(".all-hidden-fade", {duration: .4, opacity: 1, visibility: "visible", display: "flex"}, "-=.4")

    allSee.addEventListener("click", () => {
      allCollapse.classList.add("all-collapse-active")
      allSee.classList.add("all-open-disabled")
      allSlots.timeScale(1).play()
  })

    allCollapse.addEventListener("click", () => {
      allCollapse.classList.remove("all-collapse-active")
      allSee.classList.remove("all-open-disabled")
      allSlots.timeScale(2).reverse()
    })

 }   
}