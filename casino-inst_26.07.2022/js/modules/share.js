const shareBtn = document.querySelectorAll('.galary__share');
const check = document.querySelector(".check");
function checknone() {
  check.classList.remove("check-active")
}

shareBtn.forEach(function(btn){
  btn.onclick = function(){
    if (navigator.share) {
        console.log("Congrats! Your browser supports Web Share API")

      // navigator.share принимает объект с URL, title или text
      navigator.share({
        title: this.getAttribute('data-title'),
        text: this.getAttribute('data-text'),
        url: this.getAttribute('data-url')
      })
      .then(function () {
          console.log("Shareing successfull");
      })
      .catch(function () {
          console.log("Sharing failed");
      })

    } else {
      let parent = this.parentNode;
      let inputLink = parent.querySelector('.gogogo');
      inputLink.focus();
      inputLink.select();
      document.execCommand('copy');
      check.classList.add("check-active");
      setTimeout(checknone, 2000);
    }
  }

});