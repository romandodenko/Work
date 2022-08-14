<?php 
  include 'header.php';
?>
   <div class="page__content">
    <main>
      <section class="top">
        <div class="container">
          <div class="top__wrapper-logo">
          <a class="top__logo" href="index.php">
              <img src="./img/svg/logo.svg" alt="Logo">
            </a>
          </div>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__image">
              <img src="./img/hero.png" alt="Image">
            </div>
            <div class="hero__body">
              <h1 class="hero__title">
                Social Casino
              </h1>
              <p class="hero__text">
                A közösségi kaszinók lehetőséget biztosítanak mindenkinek, hogy élvezze a csodálatos játékgépeket.
              </p>
              <div class="hero__wrapper-link">
                <a class="hero__link" href="#game">
                  Játssz most
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
          <div class="container">
            <h2 class="benefits__title title">
              Előnyök
            </h2>
            <ul class="benefits__list">
              <li class="benefits__item benefits__item_1">
                <h3 class="benefits__subtitle">
                  Játékaink bármilyen eszközön elérhetőek
                </h3>
                <p class="benefits__text">
                  Játssz bárhol és bármikor, weboldalunk bármilyen eszközre reagál
                </p>
              </li>
              <li class="benefits__item benefits__item_2">
                <h3 class="benefits__subtitle">
                  Ingyenes nyerőgépek az Ön élvezetéért 
                </h3>
                <p class="benefits__text">
                  Az oldalunkon található összes játék teljesen ingyenes, és nem igényel regisztrációt.
                </p>
              </li>
            </ul>
          </div>
      </section>
      <section class="game" id="game">
        <div class="container">
          <h2 class="game__title title">
            A mi játékaink
          </h2>
          <ul class="game__list">
            <li class="game__item">
              <div class="game__image">
                <a href="game-1.php">
                  <img src="./img/game-1.png" alt="Image">
                </a>
              </div>
              <div class="game__descr">
                <span class="game__span">
                  slot játék
                </span>
                <a class="game__name" href="game-1.php">
                  Disco Diamonds
                </a>
                <a class="game__play" href="game-1.php">
                  Játék
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="game-2.php">
                  <img src="./img/game-2.png" alt="Image">
                </a>
              </div>
              <div class="game__descr">
                <span class="game__span">
                  slot játék
                </span>
                <a class="game__name" href="game-2.php">
                 Diamond change
                </a>
                <a class="game__play" href="game-2.php">
                  Játék
                </a>
              </div>
            </li>
            <li class="game__item game__item_big">
              <div class="game__image">
                <a href="game-3.php">
                  <img src="./img/game-3.png" alt="Image">
                </a>
              </div>
              <div class="game__descr">
                <span class="game__span">
                  slot játék
                </span>
                <a class="game__name" href="game-3.php">
                 Vegas night vegas
                </a>
                <a class="game__play" href="game-3.php">
                  Játék
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title">
            Rólunk
          </h2>
          <h3 class="about__subtitle">
            SZOCIÁLIS ONLINE KAZINÓ – ÖSSZES KEDVENC JÁTÉK
          </h3>
          <div class="about__texts">

              <p class="about__text">
                Megérkeztél! Üdvözöljük az oldalon, ahol minden nap kiváló minőségű online kaszinójátékok állnak az Ön rendelkezésére. Ha egy online kaszinóban szeretne játszani, akkor ne keressen tovább kedvenc online kaszinójánál: több órányi szórakozás és szórakozás várja Önt itt. Mindezt egy online kaszinó környezetben kínáljuk Önnek, ahol az élvezet az első! Valójában minden, amit a kaszinóban ismer és szeret, már elérhető az interneten.
              </p>

              <p class="about__text">
                Online kaszinónkban élvezheti kedvenc kaszinójátékai játékának legjobb módját modern grafikával, funkciókkal és dizájnnal Az online kaszinóban minden megtalálható: nyerőgépeinkkel a nap bármely szakában játszhat, közvetlenül a székéből, otthon vagy módon. Ez az online kaszinó lényege: szórakozás a világ minden tájáról kéznél van, amikor csak akarja! Nem kell semmit letöltened ahhoz, hogy online kaszinónkban játssz.
              </p>

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
            <button class="popup__button">Egyetért</button>
          </div>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>