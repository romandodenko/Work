<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Willkommen im besten Social Casino der Welt!
              </h1>
              <p class="hero__text">
                Machen Sie sich bereit, fantastische kostenlose Slot-Spiele an verschiedenen und interessanten Orten zu spielen
              </p>
              <div class="hero__wrapper-link">
                <a class="hero__link" href="#slots">
                  Spielen
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="slots" id="slots">
        <div class="container">
          <h2 class="slots__title">
            Spiele
          </h2>
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-1.php">
                  <picture><source srcset="./img/slot-1.webp"type="image/webp"><img src="./img/slot-1.jpg" alt="Slot"></picture>
                </a>
              </div>
              <a class="slots__play" href="slot-1.php">
                Spielen
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-2.php">
                  <picture><source srcset="./img/slot-2.webp"type="image/webp"><img src="./img/slot-2.jpg" alt="Slot"></picture>
                </a>
              </div>
              <a class="slots__play" href="slot-2.php">
                Spielen
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-3.php">
                  <picture><source srcset="./img/slot-3.webp"type="image/webp"><img src="./img/slot-3.jpg" alt="Slot"></picture>
                </a>
              </div>
              <a class="slots__play" href="slot-3.php">
                Spielen
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="aboutus">
        <div class="container">
          <h2 class="about__title">
            Über uns
          </h2>
          <p class="about__text">
            Kostenlose Spielautomaten gelten als eine der besten Arten von kostenlosen Online-Casinospielen und sind heute in der Casino-Glücksspielbranche sehr beliebt. Ihre Verbreitung erklärt sich aus der Tatsache, dass kostenlose Online-Spielautomaten es den Spielern ermöglichen, ihre Lieblingsspiele zu spielen, ohne sie herunterzuladen und sich zu registrieren. Diese sehr nützliche Funktion gibt Ihnen Zugang zu den aufregendsten und aufregendsten Video-Slots ohne Download, die Sie kostenlos spielen können.
          </p>
          <p class="about__text">
            Riesige Auswahl an kostenlosen Spielautomaten – keine Einzahlung erforderlich
Sie können jeden Online-Spielautomaten für Spielgeld ausprobieren. Auf diese Weise können Sie herausfinden, ob Ihnen das Spielprinzip, das Thema und das Wettangebot gefallen, und ohne finanzielle Verpflichtung ein großartiges Spielerlebnis haben.
          </p>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <h3 class="benefits__title">
                Kostenlose Online-Slots und Demo-Slots
              </h3>
              <p class="benefits__text">
                Unser Ziel ist es, Slot-Spielern aus der ganzen Welt die besten kostenlosen Online-Slots-Spiele zur Verfügung zu stellen.
              </p>
            </li>
            <li class="benefits__item">
              <h3 class="benefits__title">
                Spielautomaten machen nicht süchtig
              </h3>
              <p class="benefits__text">
                Der Hauptvorteil unserer Spielautomaten ist, dass die Spiele nur der Unterhaltung dienen.
              </p>
            </li>
            <li class="benefits__item">
              <h3 class="benefits__title">
                Fair Play mit lizenzierten Spielen
              </h3>
              <p class="benefits__text">
                Wir sind für faires Spiel. Das Casino stellt Software von lizenzierten Spieleanbietern vor. Dies garantiert eine Nichteinmischung in Spielprozesse.
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
            <button class="popup__button">Zustimmen</button>
          </div>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>
  