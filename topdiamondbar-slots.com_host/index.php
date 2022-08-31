<?php 
  include 'header.php';
?>
      <div class="page__body">
        <main>
          <section class="block-1">
            <div class="container">
              <div class="block-1__content">
                <div class="block-1__body">
                  <h1 class="block-1__title">
                    Spielautomaten kostenlos und ohne Registrierung in einem Online-Casino
                  </h1>
                  <a class="block-1__link" href="#slots">
                    Spiele ansehen
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="block-2" id="slots">
            <div class="container">
              <ul class="block-2__list">
                <li class="block-2__item">
                  <div class="block-2__top" style="background-image: url(./img/slot-1.jpg);">
                    <a class="block-2__link" href="slot-1.php">
                      Lord Merlin and the Lady of the Lake
                    </a>
                  </div>
                  <a class="block-2__play" href="slot-1.php">
                    Spielen
                  </a>
                </li>
                <li class="block-2__item block-2__item_2">
                  <div class="block-2__top" style="background-image: url(./img/slot-2.jpg);">
                    <a class="block-2__link" href="slot-2.php">
                      Disco diamonds
                    </a>
                  </div>
                  <a class="block-2__play" href="slot-2.php">
                    Spielen
                  </a>
                </li>
                <li class="block-2__item block-2__item_3">
                  <div class="block-2__top" style="background-image: url(./img/slot-3.jpg);">
                    <a class="block-2__link" href="slot-3.php">
                      Cat Wilde in the Eclipse of the Sun God
                    </a>
                  </div>
                  <a class="block-2__play" href="slot-3.php">
                    Spielen
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="block-3" id="about">
            <div class="container">
              <div class="block-3__content">
                <div class="block-3__body">
                  <h2 class="block-3__title">
                    Über Social Casino  
                  </h2>
                  <p class="block-3__text">
                    Jedes Gerät im Gaming Club kann im kostenlosen Modus gespielt werden. Der kostenlose Modus ist ohne Registrierung verfügbar. Der kostenlose Modus bietet Ihnen die Möglichkeit, das richtige Gerät zum Spielen im Echtgeldmodus auszuprobieren – und das alles völlig kostenlos und ohne Registrierung! Jeden Tag füllen wir die Sammlung von Spielautomaten mit den neuesten Neuheiten der führenden Entwickler von Spielautomaten auf. 
                  </p>
                  <p class="block-3__text">
                    In unserem Club finden Sie das Beste aus der Welt der Spielautomaten, eine große Anzahl von Spielautomaten, bestehend aus klassischen Spielautomaten, 3D-Spielautomaten und den neuesten Innovationen in der Welt des Glücksspiels. Wählen Sie Ihr Lieblingsgerät und erleben Sie das Meer der Emotionen und Freude an den grafischen Effekten des Spiels.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="block-4" id="benefits">
            <div class="container">
              <ul class="block-4__list">
                <li class="block-4__item">
                  <span class="block-4__icon">
                    <picture><source srcset="./img/icon-1.webp"type="image/webp"><img src="./img/icon-1.png" alt="Icon"></picture>
                  </span>
                  <div class="block-4__descr">
                    <h2 class="block-4__title">
                      Freie Wahl der Spielautomaten
                    </h2>
                    <p class="block-4__text">
                      Eine Vielzahl von Slots von klassischen bis hin zu 3D-Slots, eine Vielzahl von Themen warten in unserem Casino auf Sie. Sie haben die Möglichkeit, absolut jeden Slot auszuwählen und mit dem Spielen zu beginnen.
                    </p>
                  </div>
                </li>
                <li class="block-4__item">
                  <span class="block-4__icon">
                    <picture><source srcset="./img/icon-2.webp"type="image/webp"><img src="./img/icon-2.png" alt="Icon"></picture>
                  </span>
                  <div class="block-4__descr">
                    <h2 class="block-4__title">
                      Freies Spiel 24 Stunden
                    </h2>
                    <p class="block-4__text">
                      Alle Spielautomaten sind absolut kostenlos und erfordern keine Investition. Sie können in unserem Casino kein Geld oder echte Preise gewinnen. Spiele sind nur zum Spaß da.
                    </p>
                  </div>
                </li>
                <li class="block-4__item">
                  <span class="block-4__icon">
                    <picture><source srcset="./img/icon-3.webp"type="image/webp"><img src="./img/icon-3.png" alt="Icon"></picture>
                  </span>
                  <div class="block-4__descr">
                    <h2 class="block-4__title">
                      Spielen Sie ohne Sucht
                    </h2>
                    <p class="block-4__text">
                      Unsere Spiele sind kein Glücksspiel, da sie kein Geld oder echte Preise gewinnen können. Wenn Sie sie spielen, werden Sie nicht süchtig, auf unserer Seite können Sie Ihre Zeit mit Vergnügen verbringen.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </main>
        <div class="popup">
          <div class="popup__close"></div>
          <div class="popup__body">
            <form class="popup__form" action="/">
              <p class="popup__text">Unsere Seite ist für Personen über 18 Jahre. Bist du 18?</p>
              <label>
                <input type="checkbox" name="number">
              </label>
              <label>
                <input type="text" name="years-old">
              </label>
              <div class="popup__form-bottom">
                <a class="popup__button" href="main.php">Es gibt</a>
              </div>
            </form>
          </div>
        </div>
        <?php 
        include 'footer.php';
      ?>