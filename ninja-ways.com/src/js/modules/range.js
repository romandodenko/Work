// не забыть подключить файлы nouislider
const rangeSlider = document.querySelector(".wrapper-input__range");
const btnClose = document.querySelector(".wrapper-value__button"); // Закрыть оболочку вывода значений
const priceWrapperValue = document.querySelector(".wrapper-value__quantity") // Если куда-то нужно вывести значение инпутов, если нет то комменитируем
const priceWrapper = document.querySelector(".wrapper-value") // Если куда-то нужно вывести значение инпутов, если нет то комменитируем , так же расскоментировать код ниже

btnClose.addEventListener("click", function () { // Закрыть оболочку вывода значений
  priceWrapper.classList.remove("wrapper-value-active")
})


noUiSlider.create(rangeSlider, {
  start: [2000, 150000],
  connect: true,
  // tooltips: true, // показывает на каком значение находится элемент управления активным телом range
  animationDuration: 100,
  step: 1,
  handleAttributes: [{
      'aria-label': 'уменьшить цену'
    },
    {
      'aria-label': 'повысить цену'
    },
  ],
  behaviour: 'tap',
  decimals: 0,
  range: {
    'min': 0,
    'max': 225000,
  }
});
const firstPrice = document.querySelector(".from-input"); // инпут со значением от
const secondPrice = document.querySelector(".to-input"); // инпут со значением до
const inputPrice = [firstPrice, secondPrice];

rangeSlider.noUiSlider.on("update", function (values, handle) {
  inputPrice[handle].value = Math.round(values[handle])

  // priceWrapperValue.innerHTML = "До " + secondPrice.value // так же удаляем если не нужно никуда записывать значения  с инпутов

  // priceWrapper.classList.add("wrapper-value-active") // так же удаляем если не нужно никуда записывать значения  с инпутов
})

const setRangeSlider = (i, value) => {
  let arr = [null, null]
  arr[i] = value;

  rangeSlider.noUiSlider.set(arr)
}

inputPrice.forEach((el, index) => {
  el.addEventListener("change", (e) => {
    setRangeSlider(index, e.currentTarget.value);
  });
});