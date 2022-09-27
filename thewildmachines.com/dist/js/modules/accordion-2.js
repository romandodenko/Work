const accordionItems = document.querySelectorAll('.accordion__item')

if (accordionItems.length > 0) {
  accordionItems.forEach((item) => {
    const accordionHeader = item.querySelector('.accordion__header')

    accordionHeader.addEventListener('click', () => {

      const openItem = document.querySelector('.accordion-open')

      toggleItem(item)

      if (openItem && openItem !== item) {
        toggleItem(openItem)
      }
    })
  })
}
const toggleItem = (item) => {
  const accordionContent = item.querySelector('.accordion__content')

  if (item.classList.contains('accordion-open')) {
    accordionContent.removeAttribute('style')
    item.classList.remove('accordion-open')
  } else {
    accordionContent.style.height = accordionContent.scrollHeight + 'px'
    item.classList.add('accordion-open')
  }
}




/* 

                HTML  

<div class="accordion__list">

<div class="accordion__item">
    <div class="accordion__header">
        <h3 class="accordion__title">What's an accordion?</h3>
    </div>

    <div class="accordion__content">
        <p class="accordion__description">
            An accordion always contains the category title, an expanded and a collapsed state, 
            an icon indicating expansion, and the spacing between them.
        </p>
    </div>
</div>



<div class="accordion__item">
  <div class="accordion__header">
      <h3 class="accordion__title">What's an accordion?</h3>
  </div>

  <div class="accordion__content">
      <p class="accordion__description">
          An accordion always contains the category title, an expanded and a collapsed state, 
          an icon indicating expansion, and the spacing between them.
      </p>
  </div>
</div>


</div> 


               CSS

.accordion__list {
  display: grid;
  row-gap: .75rem;
  padding: 2rem 1rem;
  background-color: var(--container-color);
  border-radius: .5rem;
  box-shadow: 0 12px 32px rgba(51, 51, 51, 0.1);
}

.accordion__title {
  font-size: var(--small-font-size);
  color: var(--title-color);
  font-weight: 400;
  margin-top: .15rem;
  transition: .2s;
}

.accordion__header {
  display: flex;
  column-gap: .5rem;
  padding: 1.25rem 1.25rem 1.25rem 1rem;
  cursor: pointer;
  justify-content: space-between;
}

.accordion__description {
  padding: 0 1.25rem 1.25rem 3rem;
  font-size: var(--smaller-font-size);
}

.accordion__content {
  overflow: hidden;
  height: 0;
  transition: all .25s ease;
}
.accordion-open.accordion__icon {
    transform: rotate(45 deg);
  }

  .accordion-open.accordion__title {
    font-weight: 600;
  }

*/