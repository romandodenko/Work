"use strict"

export function popups() {
  document.addEventListener("DOMContentLoaded", function () {
    const headerBurger = document.querySelector(".burger");
    const pulloutMmenu = document.querySelector(".pullout-menu");
    const pulloutMmenuClose = document.querySelector(".pullout-menu__close");
    const pulloutMmenuExit = document.querySelector(".pullout-menu__exit");
    const body = document.querySelector("body");
    const headerSign = document.querySelector(".buttons__sign");
    const headerLog = document.querySelector(".buttons__log");
    const reg = document.querySelector(".reg");
    const log = document.querySelector(".log");
    const regClose = document.querySelector(".reg__close");
    const logClose = document.querySelector(".log__close");
    const regExit = document.querySelector(".reg__exit");
    const logExit = document.querySelector(".log__exit");
    const signLog = document.querySelector(".sign-log");
    const logSign = document.querySelector(".log-sign");
    const pulloutMenuSign = document.querySelector(".pullout-menu__sign");
    const pulloutMenuLog = document.querySelector(".pullout-menu__log");
    const pulloutLink = document.querySelector(".pullout-link");
    const profilePage = document.querySelector(".profile-page");
    const email = document.querySelector(".email");
    const emailClose = document.querySelector(".email__close");
    const emailExit = document.querySelector(".email__exit");
    const join = document.querySelector(".header__join");

    if (!profilePage) {
      headerBurger.addEventListener("click", function () {
        pulloutMmenu.classList.add("pullout-menu-active")
        body.classList.add("body-block")
      })
      pulloutMmenuClose.addEventListener("click", function () {
        pulloutMmenu.classList.remove("pullout-menu-active")
        body.classList.remove("body-block")
      })
      pulloutMmenuExit.addEventListener("click", function () {
        pulloutMmenu.classList.remove("pullout-menu-active")
        body.classList.remove("body-block")
      })
      pulloutMenuSign.addEventListener("click", function () {
        pulloutMmenu.classList.remove("pullout-menu-active")
        reg.classList.add("reg-active")
      })
      pulloutMenuLog.addEventListener("click", function () {
        pulloutMmenu.classList.remove("pullout-menu-active")
        log.classList.add("log-active")
      })
      if (pulloutLink) {
        pulloutLink.addEventListener("click", function () {
          pulloutMmenu.classList.remove("pullout-menu-active")
          body.classList.remove("body-block")
        })
      }
  
      headerSign.addEventListener("click", function () {
        reg.classList.add("reg-active")
        body.classList.add("body-block")
      })
      regExit.addEventListener("click", function () {
        reg.classList.remove("reg-active")
        body.classList.remove("body-block")
      })
      regClose.addEventListener("click", function () {
        reg.classList.remove("reg-active")
        body.classList.remove("body-block")
      })
      signLog.addEventListener("click", function () {
        reg.classList.remove("reg-active")
        log.classList.add("log-active")
      })
  
      headerLog.addEventListener("click", function () {
        log.classList.add("log-active")
        body.classList.add("body-block")
      })
      logExit.addEventListener("click", function () {
        log.classList.remove("log-active")
        body.classList.remove("body-block")
      })
      logClose.addEventListener("click", function () {
        log.classList.remove("log-active")
        body.classList.remove("body-block")
      })
      logSign.addEventListener("click", function () {
        reg.classList.add("reg-active")
        log.classList.remove("log-active")
      })

      join.addEventListener("click", function() {
        email.classList.add("email-active")
        body.classList.add("body-block")
      })
      emailClose.addEventListener("click", function() {
        email.classList.remove("email-active")
        body.classList.remove("body-block")
      })
      emailExit.addEventListener("click", function() {
        email.classList.remove("email-active")
        body.classList.remove("body-block")
      })

    }

  })
}