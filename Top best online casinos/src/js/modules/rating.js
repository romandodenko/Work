"use strict"

export function rat() {
  document.addEventListener("DOMContentLoaded", function () {
    const rating = this;
    this.ratingValue = document.querySelectorAll(".carts__rating-text");
    let numRating = 10.1;
    this.ratingValue.forEach(function (ratingValue) {
  
        numRating = numRating - 0.1
        ratingValue.innerHTML = numRating.toFixed(1);
  
    })
  })
}