<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__descr">
              <strong class="hero__strong title">
                Probeer iets speciaals
              </strong>
            <h1 class="hero__title">
              GRATIS CASINO SOCIAAL
            </h1>
            <p class="hero__text">
              Een sociaal casinoplatform waarmee je enkele van de meest populaire casinospellen gratis kunt spelen.
            </p>
            <a class="hero__link" href="#game">
              Nu afspelen
              <span><img src="./img/arrow.png" alt="Icon"></span>
            </a>
            </div>
            <div class="hero__image">
              <img src="./img/hero/image.png" alt="Image">
            </div>
          </div>
        </div>
      </section>
      <section class="navigation">
        <div class="container">
          <div class="navigation__content">
            <ul class="navigation__list">
              <li class="navigation__item">
                <a class="navigation__link" href="index.php">
                  Hoofdpagina
                </a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php#game">
                  Spellen
                </a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php#benefits">
                  Voordelen
                </a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php#about">
                  Over ons
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="game" id="game">
        <div class="container">
          <h2 class="game__title title">
            Spellen
          </h2>
          <ul class="game__list">
            <li class="game__item">
              <div class="game__image">
                <a href="game-1.php">
                  <img src="./img/game/game-1.jpg" alt="Image game">
                </a>
              </div>
              <div class="game__descr">
                <a class="game__name" href="game-1.php">
                  Wheel of Wonders
                </a>
                <a class="game__play" href="game-1.php">
                  Toneelstuk
                  <span><img src="./img/arrow.png" alt="Icon"></span>
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="game-2.php">
                  <img src="./img/game/game-2.jpg" alt="Image game">
                </a>
              </div>
              <div class="game__descr">
                <a class="game__name" href="game-2.php">
                  RABBIT HOLE
                </a>
                <a class="game__play" href="game-2.php">
                  Toneelstuk
                  <span><img src="./img/arrow.png" alt="Icon"></span>
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="game-3.php">
                  <img src="./img/game/game-3.jpg" alt="Image game">
                </a>
              </div>
              <div class="game__descr">
                <a class="game__name" href="game-3.php">
                  Wonder WOODS
                </a>
                <a class="game__play" href="game-3.php">
                  Toneelstuk
                  <span><img src="./img/arrow.png" alt="Icon"></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title title">
            ONZE VOORDELEN
          </h2>
          <div class="benefits__content">
            <div class="benefits__image">
              <img src="./img/benefits/image.png" alt="Image">
            </div>
            <ul class="benefits__list">
              <li class="benefits__item">
                  <h3 class="benefits__subtitle">
                    GEWELDIGE GRAFIEK
                  </h3>
                  <p class="benefits__text">
                    SLOTS MET DE BESTE GRAFISCHE EN PATRONEN. GENIET NIET ALLEEN VAN EEN SPEL, MAAR PROFESSIONEEL
                  </p>
              </li>
              <li class="benefits__item">
                <h3 class="benefits__subtitle">
                  GRATIS ENTERTAINMENT
                </h3>
                <p class="benefits__text">
                  SOCIALE CASINOSPELLEN ZIJN VOLLEDIG GRATIS EN VEREISEN GEEN INVESTERING
                </p>
            </li>
            <li class="benefits__item">
              <h3 class="benefits__subtitle">
                NIET GOKKEN
              </h3>
              <p class="benefits__text">
                DE SPELLEN ZIJN VOLLEDIG NIET GOKKEN EN NIET VERSLAVEND, SPEEL VOOR DE PLEZIER
              </p>
          </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title">
            OVER ONS
          </h2>
          <p class="about__text">
            Enorme selectie van games, onbeperkte betaalmethoden, geweldige promotie-aanbiedingen. Om het helemaal af te maken, dit alles vanuit het comfort van uw huis. Dat klopt, je hoeft je niet om te kleden en naar het casino te gaan. Met één druk op de knop vind je alles wat je nodig hebt. Onze mobile-first benadering levert een geweldige gebruikerservaring in de palm van je hand.
          </p>
          <p class="about__text">
            Krijg toegang tot onze spellen van overal ter wereld en speel elke gokkast die je wilt met de enorme selectie aan spellen die we hebben. Het maakt niet uit of je net begint met spelen of al een ervaren speler bent. In ons online casino vind je alles wat je zoekt. 
          </p>
          <p class="about__text">
            Geniet van een unieke game-ervaring waarbij je plezier combineert met de kans om virtuele prijzen te winnen. Ontdek de klassieke casinospellen die het je biedt. Beleef dag en nacht plezier met een online casino, zoals het hoort. We bieden je de meest intuïtieve interface, speciaal ontworpen om je onder te dompelen in de sfeer van een echt online casino.
          </p>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <div class="popup__wrapper-image">
            <div class="popup__image">
              <img src="./img/popup.jpg" alt="Image">
            </div>
          </div>
          <p class="popup__text">Onze games zijn bedoeld voor een VOLWASSEN publiek van 18 jaar en ouder. Door op de te klikken
            knop bevestigt u uw leeftijd.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <button class="popup__button">Mee eens zijn</button>
          </div>
        </form>
      </div>
    </div>
    <?php 
  include 'footer.php';
?>
