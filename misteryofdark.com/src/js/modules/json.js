document.addEventListener("click", function (e) {
  if (e.target.closest(".button")) {
    getProducts(e.target)
  }
})

async function getProducts(button) {
  if (!button.classList.contains("_hold")) { // проверяем класс для того чтобы выполнить нужен, класс нужен для того чтобы избежать повторной подгрузки одних и тех же файлов
    button.classList.add("_hold");
    const file = "../../json/json.json"; // получаем к нашему json файлу
    let response = await fetch(file, { // выполняем get запросов с помощью fetch и получаем результат в переменную response
      method: "GET"
    });
    if (response.ok) { // проверяем если все работает нормально то выполняем код ниже
      let result = await response.json(); // подгружаем в переменную содержание json файла
      loadProcuts(result)
      button.classList.remove("_hold");
      button.remove();
    } else {
      alert("ошибка");
    }
  }
}

function loadProcuts(data) { // функция для подгрузки элементов из json
  const cardWrapper = document.querySelector(".card__wrapper"); // куда будут подгружаться файлы


  data.products.forEach(item => { // проходится по внутренностям карточки, products название объекта в json файле
    const itemId = item.id;
    const itemTitle = item.title;
    const itemText = item.text;
    const itemImage = item.image;

    let template = `
      <div data-pid="${itemId}" class="card">
      <div class="card__image">
        <img src="${itemImage}" alt="">
      </div>
      <div class="card__descr">
        <h1 class="card__title">
          ${itemTitle}
        </h1>
        <p class="card__text">
          ${itemText}
        </p>
      </div>
    </div>
      `
    cardWrapper.insertAdjacentHTML("beforeend", template) // добавляем в элемент
  });
}



/*   в json файле все внутренности подгружаемые 

<div class="cards">
  <div class="container">
    <div class="card__wrapper">
      <div data-pid="1" class="card">
        <div class="card__image">
          <img src="./1.jpg" alt="">
        </div>
        <div class="card__descr">
          <h1 class="card__title">
            Title1 title1 title1
          </h1>
          <p class="card__text">
            Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1
            Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1 Text1
            Text1 Text1
          </p>
        </div>
      </div>
      <div data-pid="2" class="card">
        <div class="card__image">
          <img src="/2.jpg" alt="">
        </div>
        <div class="card__descr">
          <h1 class="card__title">
            Title2 title2 title2
          </h1>
          <p class="card__text">
            Text2 Text2 Text2 Text 2Text2 Text2 Text2 Text2 Text2 Text 2Text2 Text2 Text2 Text2 Text2 Text 2Text2 Text2 Text2 Text2 Text2 Text 2Text2 Text2 Text2 Text2 Text2 Text 2Text2 Text2 Text2 Text2 Text2 Text 2Text2 Text2 
          </p>
        </div>
      </div>
      <div data-pid="3" class="card">
        <div class="card__image">
          <img src="./3.jpg" alt="">
        </div>
        <div class="card__descr">
          <h1 class="card__title">
            Title3 title3 title3
          </h1>
          <p class="card__text">
            Text3 Text3 Text3 Text3 Text3 Text3  Text3 Text3 Text3 Text3 Text3 Text3  Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3 Text3
          </p>
        </div>
      </div>
    </div>
    <div class="wrapper-button">
      <button class="button">Ещё</button>
    </div>
  </div>
</div> 



  .container {
  max-width: 1440px;
  padding: 0 20px;
  margin: 0 auto;
}


.card__wrapper {
  display: grid;
  grid-template: auto / repeat(3,1fr);
  gap: 30px 20px;
  margin-bottom: 60px;
}
.card {
  background-color: rgba(70, 28, 70, 0.651);
}
.card__image {
  height: 350px;
}
.card__image img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}
.card__descr {
  padding: 30px;
}

.card__title {
  font-size: 32px;
  line-height: 1.2;
  color: #fff;
  font-weight:700;
  margin-bottom: 30px;
}

.card__text {
  font-size: 22px;
  line-height: 1.2;
  color: #fff;
  font-weight:400;
}

.wrapper-button {
  text-align: center;
}

.button {
  font-size: 20px;
  line-height: 1;
  color: #000;
  font-weight:700;
  border: 2px solid #000;
  display: inline-block;
  padding: 15px 60px;
  background-color: transparent;
}

*/