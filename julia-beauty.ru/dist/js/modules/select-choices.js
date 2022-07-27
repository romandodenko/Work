"use strict"

const headerSelectRegion = document.querySelector('.enroll__select'); // элемент choices

const choices = new Choices(headerSelectRegion, {
  searchEnabled: false,
});