function showCode(showBtn, itemsNum, collapseBtn, listItem, lists) {
  const show = document.querySelector(`.${showBtn}`); // кнопка показать ещё
  const collapse = document.querySelector(`.${collapseBtn}`); // кнопка скрывает показанные элементы
  const itemsList = document.querySelectorAll(`.${listItem}`);
  const list = document.querySelector(`.${lists}`);
  const productsLength = itemsList.length; // получаем количество карточек
  let items = itemsNum; // элементы которые изначально показаны на странице, у меня в примере 6 , если меняем здесь чисто то и меняем число в items ниже, где вешаем событие на collapse
  console.log(productsLength)
  if (productsLength > items) { // проверка, если элементов больше чем показано, то кнопка показать ещё появляется
    show.classList.add("is-visible")
    show.addEventListener("click", function () {
      items += 5; // число элементов которые будут добавляться при клике на кнопку показать ещё

      const array = Array.from(list.children); // собираем массив элементов в списке

      const visibleItems = array.slice(0, items) // видимые элементы

      visibleItems.forEach(function (visibleItems) {
        visibleItems.classList.add("is-visible")
      })

      if (items === productsLength) { // если элементов больше нет которые нужно показать кнопка скрывается
        show.classList.remove("is-visible")
        collapse.classList.add("is-visible")
      } else if (items > productsLength) {
        show.classList.remove("is-visible")
        collapse.classList.add("is-visible")
      }
    })
  }

  collapse.addEventListener("click", function () {
    itemsList.forEach(function (it) {
      it.classList.remove("is-visible")
    })
    items = itemsNum;
    show.classList.remove("is-hidden")
    collapse.classList.remove("is-visible")
    if (productsLength > items) {
      show.classList.add("is-visible")
    }
  })
}
showCode("класс кнопки которая показывает элементы", "число элементов которое показывается", "класс кнопки которая скрывает элементы", "класс элементов списка", "класс списка")


/* 

        HTML

   <div class="container">
        <ul class="list">
          <li class="list-item"></li>
          <li class="list-item"></li>
          <li class="list-item"></li>
          <li class="list-item"></li>
          <li class="list-item"></li>
          <li class="list-item"></li>
          <li class="list-item"></li>
          <li class="list-item"></li>
          <li class="list-item"></li>
        </ul>
        <div class="wrapper-btn">
          <button class="show">Показать ещё</button>
          <button class="collapse">Скрыть</button>
        </div>
      </div>


    CSS

   
.list {
  display: grid;
  grid-template: auto / repeat(3,1fr);
  gap: 20px;
  margin-bottom: 30px;
}
.list-item {
  height: 300px;
  background-color: red;
}
.list-item:nth-child(n + 7) { // меняем число в зависимости от показанных элементов на сайте
  display: none;
}
.wrapper-btn {
  text-align: center;
}
.list-item.is-visible {
  display: block;
}
.show {
  display: none;
  font-size: 20px;
  padding: 15px 50px;
  line-height: 1;
  border: 1px solid #008000;
  color: #008000;
}
.collapse {
  display: none;
  font-size: 20px;
  padding: 15px 50px;
  line-height: 1;
  border: 1px solid #ff0000;
  color: #ff0000;
}
.is-hidden {
  display: none;
}
.is-visible {
  display: inline-block;
}
*/