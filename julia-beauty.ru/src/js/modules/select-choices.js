"use strict"
// не забудь подключить файлы библиотеки
export function selectChoices() {
  const headerSelectRegion = document.querySelector('.enroll__select'); // элемент choices

  const choices = new Choices(headerSelectRegion, {
    searchEnabled: false,
  });
}