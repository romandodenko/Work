<?php
include 'header.php';
?>
    <main>
      <section class="haup">
        <div class="container">
          <div class="haup__content">
            <div class="haup__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
            <div class="haup__body">
              <span class="haup__span">
                Kostenlose Spiele ohne Registrierung und Anhänge
              </span>
              <h1 class="haup__title">
                Spannende soziale Casino-Spiele
              </h1>
              <a class="haup__link" href="#games" data-da=".haup__content, 991, last">
                Spielen
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="vorteile" id="benefits">
        <div class="container">
          <ul class="vorteile__list">
            <li class="vorteile__item">
              <h2 class="vorteile__title">
                Moderne Grafik
              </h2>
              <p class="vorteile__text">
                In den Slots finden Sie farbenfrohe, atemberaubende Grafiken, Sie können nicht nur das Spiel, sondern auch das visuelle Design genießen.
              </p>
            </li>
            <li class="vorteile__item">
              <h2 class="vorteile__title">
                Interessante Geschichten
              </h2>
              <p class="vorteile__text">
                Sie finden mehr als nur klassische Slots, spannende Themen-Slots mit neuen Charakteren warten auf Sie.
              </p>
            </li>
            <li class="vorteile__item">
              <h2 class="vorteile__title">
                Ohne Anmeldung
              </h2>
              <p class="vorteile__text">
                Um auf unserer Seite zu spielen, müssen Sie sich nicht registrieren und keine zusätzliche Zeit verschwenden. Gehen Sie einfach auf die Seite und starten Sie das Spiel.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="spiele" id="games">
        <div class="container">
          <ul class="spiele__list">
            <li class="spiele__item">
              <div class="spiele__image">
                <a href="slot-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Game"></picture>
                </a>
              </div>
                <a class="spiele__link" href="slot-1.php">
                  Cat Wilde in the Eclipse of the Sun God
                </a>
                <span class="spiele__span">
                  Slot game
                </span>
                <a class="spiele__play" href="slot-1.php">
                  Spielen
                </a>
            </li>
            <li class="spiele__item">
              <div class="spiele__image">
                <a href="slot-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
                </a>
              </div>
                <a class="spiele__link" href="slot-2.php">
                  Celebration of Wealth
                </a>
                <span class="spiele__span">
                  Slot game
                </span>
                <a class="spiele__play" href="slot-2.php">
                  Spielen
                </a>
            </li>
            <li class="spiele__item spiele__item_3">
              <div class="spiele__image spiele__image_3">
                <a href="slot-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
                </a>
              </div>
                <a class="spiele__link" href="slot-3.php">
                  Jolly Roger
                </a>
                <span class="spiele__span">
                  Slot game
                </span>
                <a class="spiele__play" href="slot-3.php">
                  Spielen
                </a>
            </li>
          </ul>


        </div>
      </section>
      <section class="uns" id="about">
        <div class="container">
          <div class="uns__content">
            <div class="uns__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
            <div class="uns__descr">
              <h2 class="uns__title">
                Über uns
              </h2>
              <p class="uns__text">
                Das Spielen von Spielautomaten ist ein beliebter Zeitvertreib vieler Menschen. Spielautomaten setzen ihren Siegeszug im Internet seit vielen Jahren unter wehenden Fahnen fort. Online-Casinospiele haben gegenüber einem regulären Casino unglaublich viele Vorteile.
                Wollten Sie schon immer Online-Casinospiele spielen, ohne etwas herunterzuladen? Sie können Spielautomaten auf Ihrem Mobilgerät, Tablet oder Computer spielen, ohne sie herunterzuladen. Viele Casinos bieten kostenlose Spielautomaten ohne Registrierung an.
              </p>
              <p class="uns__text">
                Wenn Sie nach kostenlosen Spielautomaten ohne Registrierung suchen, haben wir, was Sie brauchen! Wir möchten, dass Ihr Online-Spielerlebnis bequem und interessant ist, deshalb finden Sie hier auf unserer Website alles, was Sie mögen.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Unsere Spiele sind für ein ERWACHSENES Publikum ab 18 Jahren bestimmt. Durch Klicken auf die
            bestätigen Sie Ihr Alter.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Zustimmen</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>