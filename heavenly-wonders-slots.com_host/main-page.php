<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__descr">
                <span class="hero__span">
                  Lustige Wabenspiele zum Spaß
                </span>
                <h1 class="hero__title">
                  Soziales Casino
                </h1>
                <p class="hero__text">
                  Verbringen Sie Ihre Freizeit mit unterhaltsamen lustigen Spielen
                </p>
                <a class="hero__link" href="#games">
                  Spiele
                </a>
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
                <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__play" href="game-1.php">
                  <img src="./img/play.svg" alt="Icon">
                </a>
                <div class="games__right">
                  <a class="games__link" href="game-1.php">
                    Amulet of dead
                  </a>
                  <span class="games__span">Spielautomat</span>
                </div>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__play" href="game-2.php">
                  <img src="./img/play.svg" alt="Icon">
                </a>
                <div class="games__right">
                  <a class="games__link" href="game-2.php">
                    Shimmering woods
                  </a>
                  <span class="games__span">Spielautomat</span>
                </div>
              </div>
            </li>
            <li class="games__item games__item_3">
              <div class="games__image games__image_3">
                <a href="game-3.php">
                <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__play" href="game-3.php">
                  <img src="./img/play.svg" alt="Icon">
                </a>
                <div class="games__right">
                  <a class="games__link" href="game-3.php">
                    Wings of Riches
                  </a>
                  <span class="games__span">Spielautomat</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
       <div class="about__content">
        <h2 class="about__title">
          Über unser soziales Casino
        </h2>
        <p class="about__text">
          Wir wissen, was die ideale Dienstleistung aus Sicht des Kunden sein sollte, und wir bemühen uns, sie Ihnen zu bieten. Das Online Casino erfüllt alle Anforderungen an ein modernes Social Casino. Wir bieten die größtmögliche Auswahl an Glücksspielanbietern, Spielautomaten. Das soziale Online-Casino ist keine Wettplattform, daher ist für die Einzahlung kein echtes Geld erforderlich. Spieler sollten auch verstehen, dass sich die Algorithmen von Online-Spielen stark von ihren realen Alternativen unterscheiden. Daher sollte die Gewinnwahrscheinlichkeit bei Online-Spielen nicht mit Gewinnen in echten Casinos gleichgesetzt werden.
        </p>
        <p class="about__text">
          Neben dem Spielen auf dem Computer gibt es eine mobile Version. Die Casino-Website ist für das bequeme Spielen auf Telefonen und Tablets geeignet. Spieler haben die Möglichkeit, überall dort zu spielen, wo es eine Internetverbindung gibt. Neben einer identischen Auswahl an Spielautomaten stehen dem Spieler alle Aktionen und Boni auf dem Gadget zur Verfügung.
        </p>
       </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </div>
              <h3 class="benefits__title">
                Thematische Slots
              </h3>
              <p class="benefits__text">
                Spannende und interessante Spiele mit unterschiedlichen Handlungen und atemberaubender Grafik warten auf Sie.
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </div>
              <h3 class="benefits__title">
                Spiel ohne Investitionen
              </h3>
              <p class="benefits__text">
                Soziale Casinos sind Spiele ohne Investitionen und ohne die Möglichkeit, echtes Geld oder Preise zu gewinnen.
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </div>
              <h3 class="benefits__title">
                Eine Registrierung ist nicht erforderlich
              </h3>
              <p class="benefits__text">
                Es gibt keine Hindernisse vor dem Spiel, drücken Sie einfach die Taste und genießen Sie das Spiel
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php 
    include 'footer.php';
  ?>