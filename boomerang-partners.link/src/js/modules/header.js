"use strict"

export function header() {
  window.onload = function() {

      const menu = document.querySelector(".hh-block__menu");
  
      document.addEventListener("click", function(e) {
        if(e.target.closest(".hh-block__burger")) {
          menu.classList.add("menu-active")
          document.body.style.overflow = "hidden";
        }
        if(e.target.closest(".hh-block__exit-menu")) {
          menu.classList.remove("menu-active")
          document.body.style.overflow = "";
        }
        if(e.target.closest(".nav__link")) {
          menu.classList.remove("menu-active")
          document.body.style.overflow = "";
        }
      })
  
  }
  
}