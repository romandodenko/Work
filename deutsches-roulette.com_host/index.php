<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Soziale Casinospiele zum Spaß
              </span>
              <h1 class="hero__title">
                Spielen Sie kostenlose Spielautomaten online
              </h1>
           <div class="hero__wrapper-link">
            <a class="hero__link" href="#games">
              Jetzt spielen
            </a>
           </div>
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
            <div class="about__content">
              <div class="about__descr">
                <h2 class="about__title title">
                  Über uns
                </h2>
                <p class="about__text">
                  Modernes Glücksspiel der besten Anbieter steht jedem Gast unserer Seite zur Verfügung. Wir laden Sie ein, virtuelle Spielautomaten kostenlos zu spielen. Um das ausgewählte Spiel zu aktivieren, müssen Sie das Registrierungsverfahren nicht durchlaufen, Ihr Konto auffüllen oder Ihre eigenen Finanzen riskieren. Stabiles Internet ist alles, was Sie brauchen, um eine gute Zeit zu haben. Diese Seite enthält Spielautomaten, die von bekannten Entwicklern verfasst wurden. Wählen Sie aus einer umfangreichen Liste Ihrer bevorzugten Online-Spielautomaten, starten Sie den Vorgang und haben Sie Spaß.
                </p>
                <div class="about__item">
                  <p class="about__text">
                    Um Spielautomaten kostenlos und ohne Registrierung zu spielen, klicken Sie einfach auf das Symbol, das Ihnen gefällt. Da keine Einzahlung erforderlich ist, besteht kein Verlustrisiko. Für das Abschließen von Wetten stellt das Online-Casino die Spielwährung – Münzen – zur Verfügung. Jeder Gewinn erhöht das Guthaben, ein Verlust führt zu einer Verringerung der Punktzahl. Das kostenlose Spiel unterscheidet sich nicht von der Hauptversion in Bezug auf Funktionalität, Regeln und Gewinnprinzipien. Das einzige, was ein soziales Casino verbietet, ist, Gewinne in echt abzuheben.
                  </p>
                </div>
              </div>
              <div class="about__image" data-da=".about__item, 991, 1">
                <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
              </div>
            </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
            <h2 class="games__title title">
              Spiele
            </h2>
            <ul class="games__list">
              <li class="games__item">
                <a class="games__link" href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </li>
              <li class="games__item">
                <a class="games__link" href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </li>
              <li class="games__item">
                <a class="games__link" href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </li>
            </ul>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title title">
          Vorteile
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h3 class="benefits__subtitle">
                Kein Risiko
              </h3>
              <p class="benefits__text">
                In einem Social Casino riskieren Sie Ihr Geld nicht, Sie haben die Möglichkeit, absolut ohne Risiko für Ihren Geldbeutel zu spielen.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h3 class="benefits__subtitle">
                Anonymität
              </h3>
              <p class="benefits__text">
                Der entscheidende Vorteil von Online-Unterhaltung ohne Angabe personenbezogener Daten ist die Anonymität.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h3 class="benefits__subtitle">
                Vielzahl von Slots
              </h3>
              <p class="benefits__text">
                Eine Vielzahl von Online-Slots ermöglicht es Ihnen, jeden Tag einen neuen Spielautomaten kennenzulernen. Sie können sicher sein – an Vielfalt wird man nicht satt.
              </p>
            </li>
          </ul>
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