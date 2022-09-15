<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <span class="main__span">
                Ingyenes slot játékok
              </span>
              <h1 class="main__title">
                Közösségi kaszinó ingyenes szórakozással
              </h1>
              <a class="main__link" href="#jatek">
                Játék
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="items" id="benefits">
        <div class="items__container container">
          <ul class="items__list">
            <li class="items__item">
              <h2 class="items__title">
                Játékok bármilyen eszközön
              </h2>
              <p class="items__text">
                Oldalunk abszolút adaptív, bármilyen kényelmes eszközről lehetősége van belépni és játszani
              </p>
            </li>
            <li class="items__item items__item_2">
              <h2 class="items__title">
                Ngyenes nyerőgépek az Ön élvezetéért 
              </h2>
              <p class="items__text">
                Lehetőség a szerencsejáték-rajongók számára, hogy megtartsák pénzüket anélkül, hogy elveszítenék érzelmi érintettségüket
              </p>
            </li>
            <li class="items__item">
              <h2 class="items__title">
                Regisztráció nem szükséges
              </h2>
              <p class="items__text">
                Azonnal kezdj el játszani, ne pazarold az idejét extra mozdulatokra 
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="rolunk" id="about">
        <div class="rolunk__container container">
          <div class="rolunk__column">
            <h2 class="rolunk__title">
              Rólunk
            </h2>
            <h3 class="rolunk__subtitle">
              Szerezzen örömet és élénk érzelmeket!
            </h3>
            <p class="rolunk__text">
              A számítógépen való játék mellett van egy mobil verzió is. A kaszinó oldalát úgy alakították ki, hogy kényelmesen játszhasson telefonon és táblagépen. A szerencsejátékosoknak bárhol lehetőségük van játszani, ahol van internet kapcsolat. A játékgépek azonos választékán kívül minden promóció és bónusz elérhető a játékos számára a kütyüben.
            </p>
            <p class="rolunk__text">
              Bármely nyerőgép ingyenes módban, regisztráció nélkül indul az oldalon. Fogadási jóváírások lesznek a számlán. Az ingyenes nyerőgépek funkciójukban nem különböznek a klasszikusoktól.
            </p>
            <p class="rolunk__text">
              A nyerőgépek kiválasztásakor mindig az izgalmas játék alapelvei vezérelnek minket! Győződjön meg róla, hogy a velünk töltött idő örömet és élénk érzelmeket fog hozni Önnek!
            </p>
          </div>
          <div class="rolunk__image">
            <picture><source srcset="./img/rolunk.webp"type="image/webp"><img src="./img/rolunk.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="jatek" id="jatek">
        <div class="container">
          <ul class="jatek__list">
            <li class="jatek__item">
              <div class="jatek__image">
                <a href="jatek-1.php">
                  <picture><source srcset="./img/jatek-1.webp"type="image/webp"><img src="./img/jatek-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="jatek__link" href="jatek-1.php">
                Helloween
              </a>
            </li>
            <li class="jatek__item">
              <div class="jatek__image">
                <a href="jatek-2.php">
                  <picture><source srcset="./img/jatek-2.webp"type="image/webp"><img src="./img/jatek-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="jatek__link" href="jatek-2.php">
                Wild Blood 2
              </a>
            </li>
            <li class="jatek__item jatek__item_3">
              <div class="jatek__image jatek__image_3">
                <a href="jatek-3.php">
                  <picture><source srcset="./img/jatek-3.webp"type="image/webp"><img src="./img/jatek-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="jatek__link" href="jatek-3.php">
                Helloween Jackpot
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
            <div class="popup__image">
              <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
            </div>
          <p class="popup__text">Oldalunk 18 éven felüliek számára készült. 18 éves vagy?</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Igen</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>