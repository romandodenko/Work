"use strict";

export function contactsMap() {
  document.addEventListener("DOMContentLoaded", function() {
    let flag = 0;

  window.addEventListener("scroll", function () {
    let scrollY = window.scrollY;
    let mapOffset = this.document.querySelector("#map").offsetTop;
    if (scrollY >= mapOffset - 1000 && flag == 0) {
      ymaps.ready(init);
  
        function init() {
        const myMap = new ymaps.Map(
          "map",
          { 
            center: [55.76963601332982,37.63668850000002],
            zoom: 14,
          },
        );
        var myPlacemark = new ymaps.Placemark([55.76963601332982,37.63668850000002], {}, {
          iconLayout: 'default#image',
          iconImageHref: '../../img/baloon.png',
          iconImageSize: [12, 12],
        });
  
        myMap.geoObjects.add(myPlacemark);
      }
      flag = 1;
    }
  
  })
  })
}