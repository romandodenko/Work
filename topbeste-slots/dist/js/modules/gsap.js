import gsap from 'gsap';

const cockieBody = document.querySelector(".cockie-body");
const agree = document.querySelector(".agree");
const more = document.querySelector(".more");

export function gsapScript() {

  let cockie = gsap.timeline()

  // let cockieOff = gsap.timeline( {paused: true} )

  cockie
    .from(cockieBody, {duration: .5, bottom: -100,})
    
    agree.addEventListener("click", function() {
      cockieBody.classList.add("cockie-body-disabled")
    })

  // cockieOff
  // .to(cockieBody, {duration: .5, bottom: -100, opacity: 1,})
}


// не забудь установить пакет