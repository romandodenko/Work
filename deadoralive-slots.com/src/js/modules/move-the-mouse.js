const furniture = document.querySelector(".furniture__body");
const body = document.querySelector("body");

if (body.offsetWidth > 1024) {
  const furnitureItems = document.querySelector(".furniture__items");
  const furnitureColumn = document.querySelectorAll(".furniture__column");
  // Скорость анимации
  const speed = furniture.dataset.speed;

  // Объявление переменных
  let postitionX = 0;
  let coordXprocent = 0;

  function setMouseGalleryStyle() {
    let furnitureItemsWidth = 0;
    furnitureColumn.forEach(element => {
      furnitureItemsWidth += element.offsetWidth;
    });

    const furnitureDifferent = furnitureItemsWidth - furniture.offsetWidth;
    const distX = Math.floor(coordXprocent - postitionX);

    postitionX = postitionX + (distX * speed);
    let position = furnitureDifferent / 200 * postitionX;

    furnitureItems.style.cssText = `transform: translate3d(${-position}px,0,0);`;

    if (Math.abs(distX) > 0) {
      requestAnimationFrame(setMouseGalleryStyle);
    } else {
      furniture.classList.remove("_init");
    }
  }
  furniture.addEventListener("mousemove", function (e) {
    // Получение ширины
    const furnitureWidth = furniture.offsetWidth;

    // Ноль по середине
    const coordX = e.pageX - furnitureWidth / 2;

    // Получаем проценты
    coordXprocent = coordX / furnitureWidth * 200;

    if (!furniture.classList.contains("_init")) {
      requestAnimationFrame(setMouseGalleryStyle);
      furniture.classList.add("_init")
    }
  });
}


/* <div data-speed="0.01" class="furniture__body">
    <div class="furniture__items">
      <div class="furniture__column">
        <div class="furniture__row furniture-row left-top">
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-9.jpg"><img src="./img/furniture-9.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-1.jpg"><img src="./img/furniture-1.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-2.jpg"><img src="./img/furniture-2.jpg" alt="Image" aria-label="image"></a>
        </div>
        <div class="furniture__row furniture-row left-bottom">
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-4.jpg"><img src="./img/furniture-4.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-6.jpg"><img src="./img/furniture-6.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-7.jpg"><img src="./img/furniture-7.jpg" alt="Image" aria-label="image"></a>
        </div>
      </div>
      <div class="furniture__column">
        <div class="furniture__row furniture-row center">
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-3.jpg"><img src="./img/furniture-3.jpg" alt="Image" aria-label="image"></a>
        </div>
      </div>
      <div class="furniture__column">
        <div class="furniture__row furniture-row right-top">
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-4.jpg"><img src="./img/furniture-4.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-5.jpg"><img src="./img/furniture-5.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-1.jpg"><img src="./img/furniture-1.jpg" alt="Image" aria-label="image"></a>
        </div>
        <div class="furniture__row furniture-row right-bottom">
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-8.jpg"><img src="./img/furniture-8.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-9.jpg"><img src="./img/furniture-9.jpg" alt="Image" aria-label="image"></a>
          <a data-fslightbox="gallery" class="furniture-row__item" href="./img/furniture-6.jpg"><img src="./img/furniture-6.jpg" alt="Image" aria-label="image"></a>
        </div>
      </div>
    </div>
  </div> */