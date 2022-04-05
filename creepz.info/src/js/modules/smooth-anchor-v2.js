export function smooth() {
  document.addEventListener("DOMContentLoaded", function() {
    const anchors = document.querySelectorAll('.link-anchor');
    if (anchors) {
      for (let anchor of anchors) {
        anchor.addEventListener('click', function (e) {
          e.preventDefault()
          
          const blockID = anchor.getAttribute('href')
          
          document.querySelector(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          })
        })
      }
    }
  })
}