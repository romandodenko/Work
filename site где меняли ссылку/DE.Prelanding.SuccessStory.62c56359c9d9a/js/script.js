const dateSpan = document.querySelectorAll(".currentDate");

dateSpan.forEach(item => {
  item.innerHTML = new Date().toLocaleDateString(
    "de", {
      day: "numeric",
      month: "long",
      year: "numeric",
    }
  );
});

let rand = Math.floor(Math.random() * (15 - 5) + 5);
$('.data-end-place').text(rand)

const updDate = getYesterdayDate().toLocaleDateString('de', {
  day: '2-digit',
  month: '2-digit',
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