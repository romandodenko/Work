let now = new Date();
now.setHours(now.getHours() - 2);
document.querySelector('.current-date').textContent = `${now.toLocaleDateString('de', {month: "long", day: "2-digit", year: "numeric",  hour: "2-digit", minute: "2-digit"})}`;

document.querySelector('.current-year').textContent = now.getFullYear();

// script for data-end
let today = new Date();
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
let yyyy = today.getFullYear();
today = dd + '/' + mm + '/' + yyyy;
let rand = Math.floor(Math.random() * (15 - 5) + 5);
document.querySelector('.data-end-place').textContent = rand;
document.querySelector('.data-end-scr').textContent = `${now.toLocaleDateString('de', {month: "long", day: "2-digit", year: "numeric"})}`;

// input calculator
const inputValue = document.querySelector('#range-value');
inputValue.onchange = function () {
  sliderChangeFunc();
};

function sliderChangeFunc() {
  let value = inputValue.value,
    min = inputValue.getAttribute('min'),
    max = inputValue.getAttribute('max');
  inputValue.style.backgroundSize = (value - min) * 100 / (max - min) + '%' + ' 100%';
};
inputValue.addEventListener("input", function (e) {
  sliderChangeFunc(); // Prints "Example of an event"
});
// Create the event
let e = new CustomEvent("input");

// Dispatch/Trigger/Fire the event
inputValue.dispatchEvent(e);

// calculate profit
const profit = document.querySelector('#profit');
const days = document.querySelector('#day-value');

inputValue.addEventListener('input', function (e) {
  e.preventDefault();
  days.textContent = `${this.value}`;
  profit.textContent = `${this.value}` * 8910;

  if (this.value == 0) {
    profit.textContent = 8910;
    days.textContent = 1;
  }
})