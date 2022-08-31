<?php 
  include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <h2 class="main__title">
                Kostenlose Spielautomaten und Spiele
              </h2>
              <p class="main__text">
                Zeit auf unserer Seite zu verbringen ist immer einfach, lustig und interessant.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="spiele" id="spiele">
        <div class="container">
          <h2 class="spiele__title title">
            Spiele
          </h2>
          <ul class="spiele__list">
            <li class="spiele__item">
              <div class="spiele__image">
                <a href="spiele-1.php">
                  <picture><source srcset="./img/spiele-1.webp"type="image/webp"><img src="./img/spiele-1.png" alt="Spiele pic"></picture>
                </a>
              </div>
              <div class="spiele__descr">
                <a class="spiele__link" href="spiele-1.php">
                  Сurse of the werewolf
                </a>
                <a class="spiele__play" href="spiele-1.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="spiele__item">
              <div class="spiele__image">
                <a href="spiele-2.php">
                  <picture><source srcset="./img/spiele-2.webp"type="image/webp"><img src="./img/spiele-2.png" alt="Spiele pic"></picture>
                </a>
              </div>
              <div class="spiele__descr">
                <a class="spiele__link" href="spiele-2.php">
                  Wolf moon rising
                </a>
                <a class="spiele__play" href="spiele-2.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="spiele__item spiele__item_3">
              <div class="spiele__image">
                <a href="spiele-3.php">
                  <picture><source srcset="./img/spiele-3.webp"type="image/webp"><img src="./img/spiele-3.jpg" alt="Spiele pic"></picture>
                </a>
              </div>
              <div class="spiele__descr">
                <a class="spiele__link" href="spiele-3.php">
                  Coywolf Cash
                </a>
                <a class="spiele__play" href="spiele-3.php">
                  Spielen
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="vorteile" id="vorteile">
        <div class="container">
          <h2 class="vorteile__title title">
            Vorteile
          </h2>
          <div class="vorteile__content">
            <div class="vorteile__image">
              <picture>
              <source media="(min-width: 992px)" srcset="./img/vorteile.png" type="image/png">
              <source media="(min-width: 601px)" srcset="./img/vorteile_2.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/vorteile_3.png" type="image/png">
              <img src="./img/vorteile.png" alt="Pic">
              </picture>
            </div>
            <ul class="vorteile__list">
              <li class="vorteile__item">
                <h3 class="vorteile__subtitle">
                  Erstaunliche Spiele
                </h3>
                <p class="vorteile__text">
                  Genießen Sie die beste Auswahl an Online-Spielen - Spielautomaten! Alles ist in wunderschöne Grafiken verpackt, begleitet von dynamischen Animationen, atemberaubenden Soundeffekten und Musik.
                </p>
              </li>
              <li class="vorteile__item">
                <h3 class="vorteile__subtitle">
                  Spiele ohne Anmeldung
                </h3>
                <p class="vorteile__text">
                  Um mit dem Spielen zu beginnen, müssen Sie nur auf die Website gehen und das Spiel auswählen, das Ihnen gefällt. Klicken Sie auf die Schaltfläche „Play“ und genießen Sie.
                </p>
              </li>
              <li class="vorteile__item">
                <h3 class="vorteile__subtitle">
                  Technischer Support rund u
                </h3>
                <p class="vorteile__text">
                  Unser professionelles Team hilft Ihnen gerne weiter, wenn Sie Schwierigkeiten mit den Spielen haben. Der Support arbeitet 24/7, wir sind rund um die Uhr erreichbar
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="uns" id="uns">
        <div class="container">
          <h2 class="uns__title title">
            Über uns
          </h2>
            <div class="uns__content">
              <div class="uns__column uns__column_1">
                <p class="uns__text">
                  Unsere Aufgabe ist es, ein einzigartiges Spielportal zu schaffen, das die Bedürfnisse der anspruchsvollsten Kenner von Spielautomaten aus verschiedenen Ländern erfüllt.
                </p>
                <p class="uns__text uns__text_none-margin">
                  Die vielleicht wichtigste Mission für uns ist es, den tadellosen Ruf unseres Unternehmens aufrechtzuerhalten, indem wir Zuverlässigkeit und Offenheit gegenüber jedem unserer Kunden garantieren und maximale Loyalität bei der Lösung aller Probleme zeigen!
                </p>
                <p class="uns__text uns__text_none-margin">
                  Genießen Sie kostenlose Spielautomatenspiele mit farbenfrohen Grafiken und hochwertigen Effekten. Versuchen Sie Ihr Glück und knacken Sie den Jackpot!
                </p>
              </div>
              <div class="uns__column uns__column_2">
                <p class="uns__text">
                  Jeder kann auf unserer Seite spielen. Die Spielhalle enthält Spielautomaten verschiedener Hersteller. All dies steht Ihnen ohne Registrierung und Download zur Verfügung. Wählen Sie einfach einen beliebigen Slot und beginnen Sie zu spielen.
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
          <p class="popup__text">Der Zugang zu unserer Website ist Personen über 18 Jahren vorbehalten. Bist du 18?</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main-page.php">Zustimmen</a>
          </div>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>