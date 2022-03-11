"use strict"

export function forms() {
  document.addEventListener("DOMContentLoaded", function () {
    const sign = document.querySelector(".sign");
    const signBtn = document.querySelector(".sign__but");
    const signBody = document.querySelector(".sign__body");
    const log = document.querySelector(".log");
    const logBtn = document.querySelector(".log__but");
    const logBody = document.querySelector(".log__body");
    const parallax = document.querySelector(".parallax");
    const headerNav = document.querySelector(".header__nav");
    const profile = document.querySelector(".profile");
    const profileBtn = document.querySelector(".profile__btn");
    const profileBOdy = document.querySelector(".profile__body");

    if (profile) {
      profileBtn.addEventListener("click", function() {
        profileBOdy.classList.toggle("profile-body-active")
      })
      parallax.addEventListener("click", function () {
        profileBOdy.classList.remove("profile-body-active")
      })
      headerNav.addEventListener("click", function () {
        profileBOdy.classList.remove("profile-body-active")
      })
    }

    if (sign && log) {
      signBtn.addEventListener("click", function () {
        signBody.classList.toggle("sign-form-active")
        logBody.classList.remove("log-form-active")
      })
      logBtn.addEventListener("click", function () {
        logBody.classList.toggle("log-form-active")
        signBody.classList.remove("sign-form-active")
      })
      parallax.addEventListener("click", function () {
        signBody.classList.remove("sign-form-active")
        logBody.classList.remove("log-form-active")
      })
      headerNav.addEventListener("click", function () {
        signBody.classList.remove("sign-form-active")
        logBody.classList.remove("log-form-active")
      })
    }
  })
}