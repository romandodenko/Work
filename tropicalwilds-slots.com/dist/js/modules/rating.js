"use strict"

export function rat() {
  document.addEventListener("DOMContentLoaded", function () {
    const ratings = document.querySelectorAll(".rating");

    if (ratings.length > 0) {
      initRatings();
    }

    // Основная функция
    function initRatings() {
      let ratingActive;
      let ratingValue;
      for (let i = 0; i < ratings.length; i++) {
        const rating = ratings[i];
        initRating(rating);
      }



      // Инициализируем конкретный рейтинг
      function initRating(rating) {
        initRatingVars(rating);

        setRatingActiveWidth();

        if (rating.classList.contains("rating_set")) {
          setRating(rating);
        }
      }

      // Инициализация переменных
      function initRatingVars(rating) {
        ratingActive = rating.querySelector(".rating__active");
        ratingValue = rating.querySelector(".rating__value");
      }

      // Изменяем ширину активных звёзд
      function setRatingActiveWidth(index = ratingValue.innerHTML) {
        const ratingActiveWidth = index / 0.05;
        ratingActive.style.width = `${ratingActiveWidth}%`;
      }

      // Возможность указывать оценку
      function setRating(rating) {
        const ratingItems = rating.querySelectorAll(".rating__item");

        for (let i = 0; i < ratingItems.length; i++) {
          const ratingItem = ratingItems[i];

          ratingItem.addEventListener("mouseenter", function (e) {
            // Обновление переменных 
            initRatingVars(rating);
            // Обновление активных звёзд
            setRatingActiveWidth(ratingItem.value)
          });
          ratingItem.addEventListener("mouseleave", function (e) {
            // Обновление активных звезд
            setRatingActiveWidth();
          });
          ratingItem.addEventListener("click", function (e) {
            // Обновление переменных 
            initRatingVars(rating);
            if (rating.dataset.ajax) { // Если выбираешь вариант с ajax то используем if , если нет то можно убрать
              // Отправить на сервер
              setRatingValue(ratingItem.value, rating);
            } else {
              // Отобразить указанную оценку
              ratingValue.innerHTML = i + 1;
              setRatingActiveWidth();
            }
          });
        }
      }


      // data-ajax="true" атрибут который нужно добавить к элементу в нашем случае элементу с классом rating rating_set
      // Функция которая отправляет с ajax

      // async function setRatingValue(value, rating) {
      //  if (!rating.classList.contains("rating_sending")) {
      //  rating.classList.add("rating_sending");

      // Отправка данных(value) на сервер
      // let response = await fetch("rating.json", { // rating.hson просто файл для проверки, вместо него должен быть сервер
      // method: "GET",

      // Закомментирована отправка на сервер

      // body: JSON.stringify({
      //   userRating: value,
      // }),
      // headers: {
      //   "content-type": "application/json"
      // }


      // });


      // if (response.ok) {
      // const result = await response.json();

      // Получаем новый рейтинг
      // const newRating = result.newRating;

      // Выбор нового среднего результата 
      // ratingValue.innerHTML = newRating;

      // Обновление активных звезд
      // setRatingActiveWidth();

      // rating.classList.remove("rating_sending");
      // } else {
      //  alert("ошибка");

      // rating.classList.remove("rating_sending")
      // }

      //  }
      //}

    }
  })
}


/* <div class="rating rating_set">
<div class="rating__body">
<div class="rating__active"></div>
<div class="rating__items">
<input type="radio" class="rating__item" name="rating" value="1">
<input type="radio" class="rating__item" name="rating" value="2">
<input type="radio" class="rating__item" name="rating" value="3">
<input type="radio" class="rating__item" name="rating" value="4">
<input type="radio" class="rating__item" name="rating" value="5">
</div>
</div>
<div class="rating__value">3.6</div>
</div> */

// .rating {
//   display: flex;
//   align-items: flex-end;
//   font-size: 40px;
//   line-height: 0.75;
//   transition: opacity .2s ease-in-out;
//   &__body {
//   position: relative;
//   &::before {
//   content: "★★★★★";
//   display: block;
//   }
//   }
//   &__active {
//   position: absolute;
//   width: 0%;
//   height: 100%;
//   top: 0;
//   left: 0;
//   overflow: hidden;
//   &::before {
//   content: "★★★★★";
//   width: 100%;
//   height: 100%;
//   top: 0;
//   left: 0;
//   color: aqua;
//   }
//   }
//   &__items {
//   display: flex;
//   position: absolute;
//   width: 100%;
//   height: 100%;
//   top: 0;
//   left: 0;
//   }
//   &__item {
//   flex: 0 0 20%;
//   height: 100%;
//   opacity: 0;
//   }
//   &__value {
//   font-size: 50%;
//   line-height: 1;
//   padding-left: 10px;
//   }
//   }
//   .rating.rating_set .rating__active,
//   .rating.rating_set .rating__item {
//   cursor: pointer;
//   }
//   .rating.rating_sending {
//   opacity: .2;
//   }