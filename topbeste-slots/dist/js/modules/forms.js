"use strict"

const regLink = document.querySelector(".reg-link");
const logLink = document.querySelector(".log-link");
const regClose = document.querySelector(".reg__close");
const logClose = document.querySelector(".log__close");
const reg = document.querySelector(".reg");
const log = document.querySelector(".log");

export function forms() {
  regLink.addEventListener("click", function() {
    reg.classList.add("reg-active")
  })
  regClose.addEventListener("click", function() {
    reg.classList.remove("reg-active")
    top()
  })

  logLink.addEventListener("click", function() {
    log.classList.add("log-active")
  })

  logClose.addEventListener("click", function() {
    log.classList.remove("log-active")
    top()
  })

  function top() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }
}