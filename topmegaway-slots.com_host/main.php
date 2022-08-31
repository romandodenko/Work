<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Ingyenes közösségi kaszinó játékok
              </h1>
              <div class="hero__wrapper-link">
                <a class="hero__link" href="#games">
                  Játssz most
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
            <h2 class="games__title">
              Játékok
            </h2>
            <ul class="games__list">
              <li class="games__item">
                <div class="games__image">
                  <a href="game-1.php">
                    <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Game"></picture>
                  </a>
                </div>
                <div class="games__descr">
                  <a class="games__game" href="game-1.php">
                    Nyjah Huston - Skate for Gold
                  </a>
                  <a class="games__play" href="game-1.php">
                    Játék
                  </a>
                </div>
              </li>
              <li class="games__item">
                <div class="games__image">
                  <a href="game-2.php">
                    <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
                  </a>
                </div>
                <div class="games__descr">
                  <a class="games__game" href="game-2.php">
                    Twisted Sister
                  </a>
                  <a class="games__play" href="game-2.php">
                    Játék
                  </a>
                </div>
              </li>
              <li class="games__item">
                <div class="games__image">
                  <a href="game-3.php">
                    <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Game"></picture>
                  </a>
                </div>
                <div class="games__descr">
                  <a class="games__game" href="game-3.php">
                    Charlie Chance: In Hell To Pay
                  </a>
                  <a class="games__play" href="game-3.php">
                    Játék
                  </a>
                </div>
              </li>
            </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
        <div class="about__content">
          <h2 class="about__title">
            Rólunk
          </h2>
          <p class="about__text">
            Ez a móka. Olyan online szerencsejátékokat kínálunk, ahol nem költ valódi pénzt, és jól szórakozik. Az Institution Directoryban szereplő összes játék licencelt.
          </p>
          <p class="about__text">
            Közösségi kaszinónkban megtalálhatja kedvenc nyerőgépeit, lenyűgöző grafikáit, lenyűgöző hanghatásait és játéklehetőségeit. Fedezze fel az ingyenes nyerőgépes játékokat, és légy a több millió boldog online játékos egyike.
          </p>
        </div>
        </div>
      </section>
      <section class="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <strong class="benefits__strong">
                Izgalmas témájú játékok
              </strong>
              <P class="benefits__text">
                Közösségi kaszinónk csak a legjobb játékokat kínálja új grafikával és modern témákkal
              </P>
            </li>
            <li class="benefits__item">
              <strong class="benefits__strong">
                Közösségi kaszinónk egy ingyenes játék
              </strong>
              <P class="benefits__text">
                A leghitelesebb játékokat különféle stílusokban játszhatja online szórakozásból és ingyenesen
              </P>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php 
    include 'footer.php';
  ?>