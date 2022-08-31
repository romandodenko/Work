<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                SPIEL OHNE GRENZEN
              </span>
              <h1 class="hero__title">
                Alle Spiele im kostenlosen Modus
              </h1>
              <a class="hero__link" href="#slots">
                Spielen
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <h2 class="benefits__title">
                Das Universum der Unterhaltung ist grenzenlos.
              </h2>
              <p class="benefits__text">
                Folgen Sie dem Instinkt der Aufregung und entdecken Sie die grenzenlose Welt der lizenzierten Spiele auf der Gaming-Plattform.
              </p>
            </li>
            <li class="benefits__item">
              <h2 class="benefits__title">
                Fair Play mit lizenzierten Spielen
              </h2>
              <p class="benefits__text">
                Wir sind für faires Spiel. Das Casino stellt Software von lizenzierten Spieleanbietern vor. Dies garantiert eine Nichteinmischung in Spielprozesse.
              </p>
            </li>
            <li class="benefits__item">
              <h2 class="benefits__title">
                Social Casino präsentiert nur kostenlose Spiele
              </h2>
              <p class="benefits__text">
                Kostenlose Spiele erfordern keine Investitionen. Es ist nicht möglich, Geld oder echte Preise im Social Casino zu gewinnen
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__left">
            <h2 class="about__title">
              Über uns
            </h2>
            <strong class="about__strong">
              Kostenloses soziales Casino
            </strong>
            <p class="about__text">
              Selbst wenn Sie zum ersten Mal auf der Casino-Website sind, stehen Ihnen absolut alle Spiele im kostenlosen Modus zur Verfügung. Es genügt, den gewünschten Slot zu starten, den Sie spielen können. So können Sie sowohl die technischen Merkmale der Maschine als auch die Handlung und Bonusangebote bewerten. Der Unterschied zwischen einem normalen Casino und einem sozialen Casino ist, dass Sie keinen Gewinn erzielen können. Jeder hat jedoch die Chance, alle Schlüsselmerkmale eines bestimmten Geräts zu untersuchen.
            </p>
          </div>
          <div class="about__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Picture"></picture>
          </div>
        </div>
      </section>
      <section class="slots" id="slots">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-1.php">
                  <picture><source srcset="./img/slot-1.webp"type="image/webp"><img src="./img/slot-1.png" alt="Picture"></picture>
                </a>
              </div>
              <a class="slots__game" href="slot-1.php">Egyptian Fortunes</a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-2.php">
                  <picture><source srcset="./img/slot-2.webp"type="image/webp"><img src="./img/slot-2.png" alt="Picture"></picture>
                </a>
              </div>
              <a class="slots__game" href="slot-2.php">Sun of Egypt</a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-3.php">
                  <picture><source srcset="./img/slot-3.webp"type="image/webp"><img src="./img/slot-3.png" alt="Picture"></picture>
                </a>
              </div>
              <a class="slots__game" href="slot-3.php">Rise of Dead</a>
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