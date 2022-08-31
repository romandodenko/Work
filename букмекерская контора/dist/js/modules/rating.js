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

const ratIng = document.querySelectorAll(".rating");
ratIng.forEach(function(e, i) {
  if(i === 0) {
    e.querySelector(".rating__value").innerHTML = 5.0
  } else if(i === 1) {
    e.querySelector(".rating__value").innerHTML = 5.0
  } else  if(i === 2) {
    e.querySelector(".rating__value").innerHTML = 5.0
  } else  if(i === 3) {
    e.querySelector(".rating__value").innerHTML = 4.5
  } else   if(i === 4) {
    e.querySelector(".rating__value").innerHTML = 4.5
  } else   if(i === 5) {
    e.querySelector(".rating__value").innerHTML = 4.5
  } else {
    e.querySelector(".rating__value").innerHTML = 4.0
  }
 
})