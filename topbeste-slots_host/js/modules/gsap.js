import gsap from 'gsap';

const cockieBody = document.querySelector(".cockie-body");

export function gsapScript() {

  let cockie = gsap.timeline()

  cockie
    .from(cockieBody, {duration: .5, bottom: -100})
}


// не забудь установить пакет