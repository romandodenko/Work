"use strict";

export function tabs() {
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".button-init-popup").forEach(function (tabsBtn) {
      tabsBtn.addEventListener("click", function (event) {
        const path = event.currentTarget.dataset.path
  
        document.querySelectorAll(".popup").forEach(function (tabContent) {
          tabContent.classList.remove("popup-active")
        })
        document.querySelector(`[data-target="${path}"]`).classList.add("popup-active")
      })
    })
  })
  const popup = document.querySelectorAll(".popup");
  const popupClose = document.querySelectorAll(".popup__close");
  const popupExit = document.querySelectorAll(".popup__exit")
  popupClose.forEach(function(e) {
    e.addEventListener("click", function() {
      popup.forEach(function(e) {
        e.classList.remove("popup-active")
      })
    })
  })
  popupExit.forEach(function(e) {
    e.addEventListener("click", function() {
      popup.forEach(function(e) {
        e.classList.remove("popup-active")
      })
    })
  })
}

/* 
            HTML


  <button class="btn" data-path="germany">Germany</button>

  <div class="content" data-target="germany">
      <div">
          <span>
            Что мы о нём знаем?
          </span>
          <p>
            Пока ничего... Зато мы точно знаем, что в галерее есть на что посмотреть!
          </p>
          <a href="">
            В галерею
          </a>
      </div>
  </div>
          
              CSS

  .content {
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
  }

  .content-active {
    opacity: 1;
    pointer-events: visible;
    visibility: visible;
  } 

*/
