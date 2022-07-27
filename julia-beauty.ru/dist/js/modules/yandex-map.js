"use strict";

document.addEventListener("DOMContentLoaded", function () {


  const mapClass = document.querySelector(".contacts__map")
  let flag = 0;

  if (mapClass) {
    window.addEventListener("scroll", function () {
      let scrollY = window.scrollY;
      let mapOffset = this.document.querySelector("#map").offsetTop;
      if (scrollY >= mapOffset - 1000 && flag == 0) {
        ymaps.ready(init);

        function init() {
          const myMap = new ymaps.Map(
            "map", {
              center: [45.03648307459802, 38.97118049999989],
              zoom: 14,
            },
          );
          myMap.controls.remove('geolocationControl'); // удаляем геолокацию
          myMap.controls.remove('searchControl'); // удаляем поиск
          myMap.controls.remove('trafficControl'); // удаляем контроль трафика
          myMap.controls.remove('typeSelector'); // удаляем тип
          myMap.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
          myMap.controls.remove('zoomControl'); // удаляем контрол зуммирования
          myMap.controls.remove('rulerControl'); // удаляем контрол правил
          var myPlacemark = new ymaps.Placemark([45.03648307459802, 38.97118049999989], {}, {
            iconLayout: 'default#image',
            iconImageHref: '../../img/svg/marker-map.svg',
            iconImageSize: [20, 20],
          });

          myMap.geoObjects.add(myPlacemark);
        }
        flag = 1;
      }

    })
  }
})