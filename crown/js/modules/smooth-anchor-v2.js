const anchors = document.querySelectorAll('.catalog-accordion__link')

export function smooth() {
  document.addEventListener("DOMContentLoaded", function() {
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
  })
}