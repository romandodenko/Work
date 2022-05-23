
<?php 
include 'header.php';
?>
<main>
  <section class="hero">
    <div class="hero__container container">
      <div class="hero__body">
        <h1 class="hero__title">
          Darmowe społecznościowe gry kasynowe
        </h1>
        <p class="hero__text">
          Najlepsze kasyno społecznościowe z grami jest teraz na wyciągnięcie ręki
        </p>
          <div class="hero__wrapper-link">
            <a class="hero__link" data-scroll href="#games">
              Oglądaj gry
            </a>
          </div>
      </div>
    </div>
  </section>
  <section class="benefits">
<div class="benefits__container container">
  <ul class="benefits__list">
    <li class="benefits__item">
      <div class="benefits__image">
        <picture><source srcset="./img/benefits/img-1.webp"type="image/webp"><img src="./img/benefits/img-1.png" alt=""></picture>
      </div>
        <strong class="benefits__name">
          Nowa grafika
        </strong>
        <p class="benefits__text">
          To kasyno ma niesamowite wrażenia użytkownika dzięki nowej grafice
        </p>
    </li>
    <li class="benefits__item">
      <div class="benefits__image">
        <picture><source srcset="./img/benefits/img-2.webp"type="image/webp"><img src="./img/benefits/img-2.png" alt=""></picture>
      </div>
        <strong class="benefits__name">
          Najlepsze automaty do gier
        </strong>
        <p class="benefits__text">
          Najbardziej ekscytujące i dynamiczne automaty do gry
        </p>
    </li>
    <li class="benefits__item">
      <div class="benefits__image">
        <picture><source srcset="./img/benefits/img-3.webp"type="image/webp"><img src="./img/benefits/img-3.png" alt=""></picture>
      </div>
        <strong class="benefits__name">
          Dostępne na wszystkich urządzeniach
        </strong>
        <p class="benefits__text">
          Myjemy smugę w naga play na wszystkich urządzeniach
        </p>
    </li>
  </ul>
</div>
  </section>
  <section class="about" id="about">
    <div class="about__container container">
      <div class="about__body">
        <h2 class="about__title">
          O nas
        </h2>
        <p class="about__text">
          Zapewniamy najbardziej wciągające i dynamiczne wrażenia w grach w branży.
          Nasz personel jest zaangażowany w dostarczanie najlepszych usług zarządzania kontem pod każdym względem, od ogólnych zapytań po ogłoszenia promocyjne i błyskawiczne czasy reakcji.
          Zapraszam do wypróbowania nowego, supernowoczesnego wirtualnego kasyna społecznościowego Capital Luckwolf z pełnym wyborem gier. Nasze kasyno zapewnia możliwość gry na darmowych automatach do gier dla Twojej przyjemności.
        </p>
      </div>
    </div>
  </section>
  <section class="games" id="games">
    <div class="games__container container">
      <ul class="games__list">
        <li class="games__item">
          <div class="games__image">
           <a href="wolf-reels.php">
            <picture><source srcset="./img/game/wolf-reels.webp"type="image/webp"><img src="./img/game/wolf-reels.png" alt="Wolf reels"></picture>
           </a>
          </div>
          <div class="games__body">
            <a class="games__namegame" href="wolf-reels.php">
              Wolf reels
            </a>
            <div class="games__wrapper-link">
              <a class="games__play" href="wolf-reels.php">
                Zagraj teraz
              </a>
            </div>
          </div>
        </li>
        <li class="games__item">
          <div class="games__image">
           <a href="ice-wolf.php">
            <picture><source srcset="./img/game/ice-wolf.webp"type="image/webp"><img src="./img/game/ice-wolf.png" alt="Ice wolf"></picture>
           </a>
          </div>
          <div class="games__body">
            <a class="games__namegame" href="ice-wolf.php">
              Ice wolf
            </a>
            <div class="games__wrapper-link">
              <a class="games__play" href="ice-wolf.php">
                Zagraj teraz
              </a>
            </div>
          </div>
        </li>
        <li class="games__item">
          <div class="games__image">
           <a href="wolf-howl.php">
            <picture><source srcset="./img/game/wolf-howl.webp"type="image/webp"><img src="./img/game/wolf-howl.png" alt="Wolf howl"></picture>
           </a>
          </div>
          <div class="games__body">
            <a class="games__namegame" href="wolf-howl.php">
              Wolf howl
            </a>
          <div class="games__wrapper-link">
            <a class="games__play" href="wolf-howl.php">
              Zagraj teraz
            </a>
          </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php 
  include 'footer.php';
?>