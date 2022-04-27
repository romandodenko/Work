"use strict"

document.addEventListener("DOMContentLoaded", function() {
  const gamesClickForm = document.querySelectorAll(".games-click-form");
  const gamesWrapperForm = document.querySelector(".games-wrapper-form");
  const gamesWrapperFormClose = document.querySelector(".games-wrapper-form__close");
  const gamesRegExit = document.querySelector(".games-reg__exit");
  const gamesLogExit = document.querySelector(".games-log__exit");
  const body = document.querySelector("body");

  gamesClickForm.forEach(function(formClicker) {
    formClicker.addEventListener("click", function() {
      gamesWrapperForm.classList.add("games-wrapper-form-active")
      body.classList.add("body-block")
    })
  })

  gamesWrapperFormClose.addEventListener("click", function(){
    gamesWrapperForm.classList.remove("games-wrapper-form-active")
    body.classList.remove("body-block")
  })

  gamesRegExit.addEventListener("click", function(){
    gamesWrapperForm.classList.remove("games-wrapper-form-active")
    body.classList.remove("body-block")
  })
  
  gamesLogExit.addEventListener("click", function(){
    gamesWrapperForm.classList.remove("games-wrapper-form-active")
    body.classList.remove("body-block")
  })

})