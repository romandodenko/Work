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
  <section class="game game-a">
    <div class="game__container container">
      <h2 class="game__title title">Nasze gry</h2>
        <div class="game__body">
          <div class="game__image">
            <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
          </div>
          <div class="game__descr">
            <h3 class="game__subtitle subtitle subtitle-solo-game">Zabawna piłka nożna</h3>
            <p class="game__text text">
              Wesoła piłka nożna. Gra dla miłośników piłki nożnej. Spróbuj zakręcić piłką, poczuj się jak piłkarz!
            </p>
            <div class="game__wrapper-play">
              <a class="game__play" href="./game-1/index.html">Grać</a>
            </div>
          </div>
        </div>
    </div>
  </section>
</main>
<?php 
include 'footer.php';
?>