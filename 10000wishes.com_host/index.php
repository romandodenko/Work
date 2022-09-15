<?php 
  include 'header.php';
?>
    <main>
      <section class="block-1">
        <div class="container">
            <div class="block-1__content">
              <div class="block-1__body">
                <span class="block-1__span">
                  Merüljön el a játékok világában
                </span>
                <h1 class="block-1__title">
                  Játsszon ingyenes nyerőgépekkel, és töltse szabadidejét örömmel
                </h1>
                <div class="block-1__wrapper-link">
                  <a class="block-1__link" href="#slots">
                    Játssz most
                  </a>
                </div>
              </div>
            </div>
        </div>
      </section>
      <section class="block-2" id="benefits">
        <div class="container">
          <ul class="block-2__list">
            <li class="block-2__item">
              <h2 class="block-2__title">
                Ingyenes szórakozás
              </h2>
              <p class="block-2__text">
                Weboldalunkon ingyenes szórakoztató és nyerőgépes játékokat találhat. Töltsd el a szabadidődet kedved szerint.
              </p>
            </li>
            <li class="block-2__item">
              <h2 class="block-2__title">
                Modern játékok
              </h2>
              <p class="block-2__text">
                Gyűjteményünkben csak modern és legérdekesebb nyerőgépek találhatók. A vonzó grafika és a lélegzetelállító illusztrációk lenyűgözik Önt.
              </p>
            </li>
            <li class="block-2__item block-2__item_3">
              <h2 class="block-2__title">
                Adaptív játék
              </h2>
              <p class="block-2__text">
                Játsszon bárhol és bármikor, oldalunk bármilyen kényelmes eszközön működhet. A játékhoz csak internetkapcsolat szükséges.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="block-3" id="slots">
        <div class="container">
          <h2 class="block-3__title">
            A mi játékaink
          </h2>
          <ul class="block-3__list">
            <li class="block-3__item" style="background-image: url(./img/slot-1.jpg);">
              <a class="block-3__link" href="slot-1.php">
                The Green Knight
              </a>
            </li>
            <li class="block-3__item" style="background-image: url(./img/slot-2.jpg);">
              <a class="block-3__link" href="slot-2.php">
                Aliya’s Wishes
              </a>
            </li>
            <li class="block-3__item block-3__item_3" style="background-image: url(./img/slot-3.jpg);">
              <a class="block-3__link" href="slot-3.php">
                House of Doom 2: The Crypt
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="block-4" id="about">
        <div class="container">
          <h2 class="block-4__title">
            Rólunk
          </h2>
          <div class="block-4__content">
            <div class="block-4__descr">
              <p class="block-4__text">
                Nyerőgépeink működési elve a tárcsák forgatásán és a nyereménykombináció megjelenésekor a virtuális kifizetések halmozódásán alapul. Minden slothoz tartozik egy generátor, amely garantálja a nyerő sorozatok kialakulásának véletlenszerűségét, és kizárja a játék kimenetelének befolyásolásának lehetőségét.
              </p>
           <div class="block-4__wrapper-text">
            <div class="block-4__wrapper-texts">
              <p class="block-4__text">
                Mindenekelőtt a legjobb online nyerőgép-kínálattal vonzzuk az ügyfeleket. A portálon több száz található belőlük a legjobb szoftvergyártóktól. Minden nyerőgépet független nemzetközi szervezetek tanúsítottak a minőség-ellenőrzés és a játékbiztonság érdekében.
              </p>
              <p class="block-4__text">
                Az ingyenes regisztráció nélküli játék lehetővé teszi, hogy saját pénztárcája kockáztatása nélkül ismerkedjen meg a játékgépek szabályaival.
              </p>
            </div>
           </div>
              <p class="block-4__text">
                A kaszinó honlapján minden szerencsejátékos pontosan megtalálja azt, amire szüksége van. A nyerőgépek listája rendszeresen frissül a szerencsejáték-ipar új mintáival.
              </p>
            </div>
            <div class="block-4__image" data-da=".block-4__wrapper-text, 991, 1">
              <picture><source srcset="./img/block-4.webp"type="image/webp"><img src="./img/block-4.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Játékainkat 18 év feletti FELNŐTT közönségnek szánjuk. A gombra kattintva
            gombbal megerősíti életkorát.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Egyetért</a>
          </div>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>