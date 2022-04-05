<?php 
include 'header.php';
?>
<main>
  <section class="background-site">
    <h1 class="background-site__title">Background-site</h1>
    <div class="background-site__background">
      <picture><source srcset="./img/background.webp"type="image/webp"><img src="./img/background.png" alt="Background"></picture>
    </div>
  </section>
  <section class="game">
    <div class="game__container container">
      <h2 class="game__title title">Nasze gry</h2>
      <ul class="game__list main-list">
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Zabawna piłka nożna</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-1/index.html">Grać</a>
            <a class="game__more" href="game-one.php">Więcej</a>
          </div>
        </li>
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Zimna przestrzeń</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-2/index.html">Grać</a>
            <a class="game__more" href="game-two.php">Więcej</a>
          </div>
        </li>
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Rejs</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-3/index.html">Grać</a>
            <a class="game__more" href="game-third.php">Więcej</a>
          </div>
        </li>
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Ządni krwi piraci</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-4.webp"type="image/webp"><img src="./img/game-4.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-4/index.html">Grać</a>
            <a class="game__more" href="game-four.php">Więcej</a>
          </div>
        </li>
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Hokej</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-5.webp"type="image/webp"><img src="./img/game-5.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-5/index.html">Grać</a>
            <a class="game__more" href="game-five.php">Więcej</a>
          </div>
        </li>
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Długo oczekiwane wakacje</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-6.webp"type="image/webp"><img src="./img/game-6.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-6/index.html">Grać</a>
            <a class="game__more" href="game-six.php">Więcej</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php 
include 'footer.php';
?>