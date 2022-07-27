<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <strong class="hero__strong">
                Online-Casino-Spiele zum Spaß
              </strong>
              <h1 class="hero__title">
                Kostenloses soziales Online-Casino
              </h1>
              <div class="hero__wrapper-link">
                <a href="#games">
                  Unsere Slots
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item benefits__item_img-1">
              <div class="benefits__body">
            <h2 class="benefits__title">
              STECKPLÄTZE FREI
            </h2>
            <p class="benefits__text">
              Spielen und Spaß haben, ohne Geld einzuzahlen
            </p>
           </div>
            </li>
            <li class="benefits__item benefits__item_img-2">
              <div class="benefits__body">
              <h2 class="benefits__title">
                CASINO OHNE REGISTRIERUNG
              </h2>
              <p class="benefits__text">
                Unsere Spiele erfordern keine Registrierung
              </p>
            </div>
            </li>
            <li class="benefits__item benefits__item_img-3">
           <div class="benefits__body">
            <h2 class="benefits__title">
              Spielen ohne Risiko
            </h2>
            <p class="benefits__text">
              Unsere Spiele sind kein Glücksspiel
            </p>
           </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            ÜBER UNS
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <h3 class="about__subtitle">
                Die Zukunft der Online-Casinos ist sozial
              </h3>
              <p class="about__text">
                Da sich Casinos von physischen Casinos zu neuen Online-Casinos entwickelt haben, sind die Menschen auf kostenlose Casinospiele aufmerksamer geworden. Eine Art Casino, das kein Geld oder Geldpreise hat; Stattdessen ist alles auf maximalen Spielspaß ausgelegt. Die besten Online-Casinos werden in Zukunft mehr auf den Spielspaß als auf den Nervenkitzel des Gewinnens oder Verlierens setzen. Wir sind stolz darauf, Ihnen mitteilen zu können, dass wir diese Zukunft mit unseren völlig kostenlosen Online-Casino-Optionen anführen, bei denen Sie kein Geld gewinnen oder verlieren, aber viel Spaß haben können!
              </p>
            </div>
            <div class="about__image">
              <picture><source srcset="./img/about/img.webp"type="image/webp"><img src="./img/about/img.png" alt="Pic"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
            <ul class="games__list">
              <li class="games__item">
                <div class="games__image">
                  <a href="game-1.php">
                    <picture><source srcset="./img/games/game-1.webp"type="image/webp"><img src="./img/games/game-1.jpg" alt="Game"></picture>
                  </a>
                </div>
                <div class="games__links">
                  <a class="games__play-link" href="game-1.php">Spielen</a>
                  <a class="games__top-link" href="top-game.php">Top-Slots</a>
                </div>
              </li>
              <li class="games__item">
                <div class="games__image">
                  <a href="game-2.php">
                    <picture><source srcset="./img/games/game-2.webp"type="image/webp"><img src="./img/games/game-2.jpg" alt="Game"></picture>
                  </a>
                </div>
                <div class="games__links">
                  <a class="games__play-link" href="game-2.php">Spielen</a>
                  <a class="games__top-link" href="top-game.php">Top-Slots</a>
                </div>
              </li>
              <li class="games__item">
                <div class="games__image">
                  <a href="game-3.php">
                    <picture><source srcset="./img/games/game-3.webp"type="image/webp"><img src="./img/games/game-3.jpg" alt="Game"></picture>
                  </a>
                </div>
                <div class="games__links">
                  <a class="games__play-link" href="game-3.php">Spielen</a>
                  <a class="games__top-link" href="top-game.php">Top-Slots</a>
                </div>
              </li>
            </ul>
        </div>
      </section>
    </main>
    <!-- <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
         <div class="popup__wrapper-image">
          <div class="popup__image">
            <picture><source srcset="./img/popup-image.webp"type="image/webp"><img src="./img/popup-image.png" alt="Pic"></picture>
          </div>
         </div>
          <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on the button you confirm your age.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <button class="popup__button">Agree</button>
          </div>
        </form>
      </div>
    </div> -->
    <?php 
    include 'footer.php';
  ?>