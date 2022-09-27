const products = document.querySelectorAll('.product'); // класс блока  в котором лежит блок картинки
const body = document.querySelector("body");
if (products) { // проверка на элемент, можно не делать
  products.forEach(el => {
    let currentProduct = el;
    const imageSwitchItems = currentProduct.querySelectorAll('.image-switch__item');
    const imagePagination = currentProduct.querySelector('.image-pagination');
    if (imageSwitchItems.length > 1) {
      imageSwitchItems.forEach((el, index) => {
        el.setAttribute('data-index', index);
        imagePagination.innerHTML += `<li class="image-pagination__item ${index == 0 ? 'image-pagination__item--active' : ''}" data-index="${index}"></li>`;
        if (body.offsetWidth <= 991) { // вся эта система чтобы на мобилке при клике картинки работали, если не так сделал, то в лясе глянь, я там делал
          el.addEventListener('mouseenter', (e) => {
            currentProduct.querySelectorAll('.image-pagination__item').forEach(el => {
              el.classList.remove('image-pagination__item--active')
            });
            currentProduct.querySelector(`.image-pagination__item[data-index="${e.currentTarget.dataset.index}"]`).classList.add('image-pagination__item--active');
          });

          el.addEventListener('mouseleave', (e) => {
            currentProduct.querySelectorAll('.image-pagination__item').forEach(el => {
              el.classList.remove('image-pagination__item--active')
            });
            currentProduct.querySelector(`.image-pagination__item[data-index="0"]`).classList.add('image-pagination__item--active');
          });
        } else if ((body.offsetWidth >= 991)) { // вся эта система чтобы на мобилке при клике картинки работали, если не так сделал, то в лясе глянь, я там делал
          el.addEventListener('click', (e) => {
            currentProduct.querySelectorAll('.image-pagination__item').forEach(el => {
              el.classList.remove('image-pagination__item--active')
            });
            currentProduct.querySelector(`.image-pagination__item[data-index="${e.currentTarget.dataset.index}"]`).classList.add('image-pagination__item--active');
          });
        }
      });
    }
  });
}





/* 

          HTML

<a href="#" class="product__image">
<div class="product__switch image-switch">
  <div class="image-switch__item">
    <div class="image-switch__img"><img src="img/macbook.jpg" alt="Макбук"></div>
  </div>
  <div class="image-switch__item">
    <div class="image-switch__img"><img src="img/macbook-2.jpg" alt="Макбук"></div>
  </div>
  <div class="image-switch__item">
    <div class="image-switch__img"><img src="img/macbook-3.jpg" alt="Макбук"></div>
  </div>
</div>
<ul class="product__image-pagination image-pagination" aria-hidden="true"></ul>
</a> 

            CSS


            .product__image {
	position: relative;
	overflow: hidden;
	display: block;
	height: 162px;
}

.image-switch {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 20;
	width: 100%;
	height: 100%;
	display: flex;
}

.image-switch__item {
	flex-grow: 1;
	cursor: pointer;
}

.image-switch__img {
	position: absolute;
	left: 50%;
	top: 0;
	z-index: 2;
	width: 100%;
	height: 100%;
	transform: translateX(-50%);
	pointer-events: none;
	background-color: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
	opacity: 0;
}

.image-switch__img img {
	display: block;
	max-width: 100%;
	height: 100%;
	object-fit: cover;
}

.image-switch__item:first-child .image-switch__img {
	opacity: 1;
	z-index: -1;
}

.image-switch__item:hover .image-switch__img {
	opacity: 1;
	z-index: -1;
}

.image-pagination {
	position: absolute;
	z-index: 30;
	left: 0;
	bottom: 15px;
	width: 100%;
	display: flex;
	justify-content: center;
}

.image-pagination__item {
	display: block;
	width: 4px;
	height: 4px;
	border-radius: 100%;
	margin: 0 3px;
	background-color: #c4c4c4;
}

.image-pagination__item--active {
	background-color: var(--color-accent);
}

*/