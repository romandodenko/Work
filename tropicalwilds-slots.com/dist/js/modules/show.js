"use strict"

export function show() {
  const show = document.querySelector(".show"); // кнопка показать ещё
  const productsLength = document.querySelectorAll(".list-item").length; // получаем количество карточек
  let items = 6; // элементы которые изначально показаны на странице, у меня в примере 6

  show.addEventListener("click", function () {
    items += 3; // число элементов которые будут добавляться при клике на кнопку показать ещё

    const array = Array.from(document.querySelector(".list").children); // собираем массив элементов в списке

    const visibleItems = array.slice(0, items) // видимые элементы

    visibleItems.forEach(function (visibleItems) {
      visibleItems.classList.add("is-visible")
    })

    if (items === productsLength) { // если элементов больше нет которые нужно показать кнопка скрывается
      show.style.display = "none";
    }
  })
}