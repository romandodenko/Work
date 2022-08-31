<?php 
  include 'header.php';
?>
    <main>
      <section class="block-1">
        <div class="container">
          <div class="block-1__content">
            <div class="block-1__body">
              <div class="block-1__image">
                <picture><source srcset="./img/jokerc.webp"type="image/webp"><img src="./img/jokerc.jpg" alt="Img"></picture>
              </div>
             <div class="block-1__descr">
              <h1 class="block-1__title">
                Willkommen in unserem sozialen Casino
                Alle Spiele im kostenlosen Modus  
              </h1>
              <p class="block-1__text">
                Spielen Sie fantastische kostenlose Spielautomaten an verschiedenen und interessanten Orten ohne Grenzen
              </p>
              <div class="block-1__wrapper-link">
                <a class="block-1__link" href="#blockGames">
                  Spielen
                </a>
              </div>
             </div>
            </div>
          </div>
        </div>
      </section>
      <section class="block-about" id="about">
        <div class="container">
          <h2 class="block-about__title">
            Über uns
          </h2>
          <p class="block-about__text">
            Selbst wenn Sie zum ersten Mal auf der Casino-Website sind, stehen Ihnen absolut alle Spiele im kostenlosen Modus zur Verfügung. Es genügt, den gewünschten Slot zu starten, den Sie spielen können. So können Sie sowohl die technischen Merkmale der Maschine als auch die Handlung und Bonusangebote bewerten. Der Unterschied zwischen einem normalen Casino und einem sozialen Casino ist, dass Sie keinen Gewinn erzielen können. Jeder hat jedoch die Chance, alle Schlüsselmerkmale eines bestimmten Geräts zu untersuchen.
          </p>
          <p class="block-about__text">
            Riesige Auswahl an kostenlosen Spielautomaten – keine Einzahlung erforderlich
            Sie können jeden Online-Spielautomaten für Spielgeld ausprobieren. 
                 Kostenlose Spielautomaten gelten als eine der besten Arten von kostenlosen Online-Casinospielen und sind heute in der Casino-Glücksspielbranche sehr beliebt.
             Ihre Verbreitung erklärt sich aus der Tatsache, dass kostenlose Online-Spielautomaten es den Spielern ermöglichen, ihre Lieblingsspiele zu spielen, ohne sie herunterzuladen und sich zu registrieren.
            Auf diese Weise können Sie herausfinden, ob Ihnen das Spielprinzip, das Thema und das Wettangebot gefallen, und ohne finanzielle Verpflichtung ein großartiges Spielerlebnis haben.
          </p>
        </div>
      </section>
      <section class="block-benefits" id="vorteile">
        <div class="container">
          <ul class="block-benefits__list">
            <li class="block-benefits__item">
              <h3 class="block-benefits__title">
                Das Universum der Unterhaltung ist grenzenlos.
              </h3>
              <p class="block-benefits__text">
                Folgen Sie dem Instinkt der Aufregung und entdecken Sie die grenzenlose Welt der lizenzierten Spiele auf der Gaming-Plattform.
              </p>
            </li>

            <li class="block-benefits__item">
              <h3 class="block-benefits__title">
                Social Casino präsentiert nur kostenlose Spiele
              </h3>
              <p class="block-benefits__text">
                Kostenlose Spiele erfordern keine Investitionen. Es ist nicht möglich, Geld oder echte Preise im Social Casino zu gewinnen
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="block-games" id="blockGames">
        <div class="container">
          <h2 class="block-games__title">
            Spiele
          </h2>
          <ul class="block-games__list">
            <li class="block-games__item">
              <div class="block-games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Slot"></picture>
                </a>
              </div>
              <a class="block-games__name" href="game-1.php">
                Joker King
              </a>
              <a class="block-games__play" href="game-1.php">
                Spielen
              </a>
            </li>
            <li class="block-games__item">
              <div class="block-games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Slot"></picture>
                </a>
              </div>
              <a class="block-games__name" href="game-2.php">
                Triple Jokers
              </a>
              <a class="block-games__play" href="game-2.php">
                Spielen
              </a>
            </li>
            <li class="block-games__item">
              <div class="block-games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Slot"></picture>
                </a>
              </div>
              <a class="block-games__name" href="game-3.php">
                Beowulf
              </a>
              <a class="block-games__play" href="game-3.php">
                Spielen
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Die Website steht nur Personen über 18 Jahren zur Verfügung. Bist du 18?</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <button class="popup__button">Es gibt</button>
          </div>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>