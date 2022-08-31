<?php 
  include 'header.php';
?>
    <div class="hero">
      <div class="container">
        <div class="hero__content">
          <div class="hero__body">
            <h1 class="hero__title">
              Kostenlose Online-Slots
            </h1>
            <p class="hero__text">
              Holen Sie sich lebendige Empfindungen und angenehme Emotionen von kostenlosen Slot-Spielen, spielen Sie zum Spaß
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content">
      <main>
        <section class="benefits" id="benefits">
          <div class="container">
            <ul class="benefits__list">
              <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <div class="benefits__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </div>
              </div>
                <h2 class="benefits__title">
                  Ohne Anmeldung
                </h2>
                <p class="benefits__text">
                  Spielen Sie jetzt ohne Registrierung, um ein spannendes Spiel zu starten, wählen Sie einfach einen Slot aus und klicken Sie auf die Schaltfläche.
                </p>
              </li>
              <li class="benefits__item benefits__item_2">
                <div class="benefits__wrapper-icon">
                  <div class="benefits__icon">
                    <img src="./img/icon-2.svg" alt="Icon">
                  </div>
                </div>
                <h2 class="benefits__title">
                  Kostenlos spielen
                </h2>
                <p class="benefits__text">
                  Wählen Sie jetzt Unterhaltung und spielen Sie ohne Gebühr, haben Sie Spaß mit Spielen, ohne Ihr Geld zu verlieren.
                </p>
              </li>
              <li class="benefits__item benefits__item_3">
                <div class="benefits__wrapper-icon">
                  <div class="benefits__icon">
                    <img src="./img/icon-3.svg" alt="Icon">
                  </div>
                </div>
                <h2 class="benefits__title">
                  Thematische Spiele
                </h2>
                <p class="benefits__text">
                  Dabei stehen Ihnen nicht nur klassische Slots zur Verfügung, sondern auch Slots mit ungewöhnlichen Plots
                </p>
              </li>
            </ul>
          </div>
        </section>
        <section class="games" id="games">
          <div class="container">
            <ul class="games__list">
              <li class="games__item games__item_1">
                  <div class="games__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                  <div class="games__descr">
                    <a class="games__link" href="game-1.php">
                      Ramses revenge
                    </a>
                    <a class="games__play" href="game-1.php">
                      <span>
                        <img src="./img/arrow.svg" alt="Arrow">
                      </span>
                    </a>
                  </div>
              </li>
              <li class="games__item">
                <div class="games__image">
                  <a href="game-2.php">
                    <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                  </a>
                </div>
                <div class="games__descr">
                  <a class="games__link" href="game-2.php">
                    Dom of dead
                  </a>
                  <a class="games__play" href="game-2.php">
                    <span>
                      <img src="./img/arrow.svg" alt="Arrow">
                    </span>
                  </a>
                </div>
            </li>
            <li class="games__item games__item_3">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-3.php">
                  Legacy of Dead
                </a>
                <a class="games__play" href="game-3.php">
                  <span>
                    <img src="./img/arrow.svg" alt="Arrow">
                  </span>
                </a>
              </div>
          </li>
            </ul>
          </div>
        </section>
        <section class="about" id="about">
          <div class="container">
              <h2 class="about__title">
                Über uns
              </h2>
              <div class="about__content">
                <div class="about__descr">
                  <p class="about__text">
                    Wenn Sie in unserem sozialen Casino spielen, müssen Sie keine Zeit damit verbringen, das Registrierungsformular auszufüllen, sondern Ihre persönlichen Ersparnisse ausgeben. Wählen Sie einfach das Spiel aus, das Sie interessiert. Es wird keine Probleme mit der Auswahl geben, da wir interessante Spielautomaten thematisiert haben.
                  </p>
                  <p class="about__text">
                    Als nächstes klicken Sie auf das Bild des Spiels und der Prozess startet ohne SMS in guter Qualität im Browser, ohne dass Sie es herunterladen und installieren müssen.
                  </p>
                </div>
                <div class="about__image">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
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
              <a class="popup__button" href="main.php">Akzeptieren</a>
            </div>
          </form>
        </div>
      </div>
      <?php 
      include 'footer.php';
    ?>