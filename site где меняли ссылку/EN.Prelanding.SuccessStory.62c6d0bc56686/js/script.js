const currentData = document.querySelectorAll(".currentData");
const today = new Date();

const rand = Math.floor(Math.random() * (15 - 5) + 5);
$('.data-end-place').text(rand)
$('.data-end-scr').text(today)

currentData.forEach(item => {
  item.innerHTML = today.toLocaleDateString(
    "en", {
      month: "long",
      day: "numeric",
      year: "numeric",
    }
  );
});

const updDate = getYesterdayDate().toLocaleDateString('en', {
  month: 'short',
  day: 'numeric',
  year: 'numeric',
})

document.querySelector('.updateDate').innerHTML = updDate
document.querySelector('.updateDate2').innerHTML = updDate

function getYesterdayDate() {
  let yesterday = new Date()
  yesterday.setMonth(yesterday.getMonth())
  yesterday.setDate(yesterday.getDate() - 1)
  return yesterday
}

(function () {
  function scrollHorizontally(e) {
    e = window.event || e;
    var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
    document.getElementById('yourDiv').scrollLeft -= (delta * 40); // Multiplied by 40
    e.preventDefault();
  }
  if (document.getElementById('yourDiv').addEventListener) {
    // IE9, Chrome, Safari, Opera
    document.getElementById('yourDiv').addEventListener('mousewheel', scrollHorizontally, false);
    // Firefox
    document.getElementById('yourDiv').addEventListener('DOMMouseScroll', scrollHorizontally, false);
  } else {
    // IE 6/7/8
    document.getElementById('yourDiv').attachEvent('onmousewheel', scrollHorizontally);
  }
})();