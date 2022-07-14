"use strict"

document.addEventListener("DOMContentLoaded", function () {
  const top = document.querySelector(".top");

  if (top) {
    const rating = this;
    this.ratingValue = document.querySelectorAll(".top__rating-text");
    let numRating = 10.1;
    this.ratingValue.forEach(function (ratingValue) {
  
        numRating = numRating - 0.1
        ratingValue.innerHTML = numRating.toFixed(1);
  
    })
  }
})