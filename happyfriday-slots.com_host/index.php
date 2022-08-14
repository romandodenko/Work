<?php 
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Finden Sie Ihren Lieblingsslot und legen Sie jetzt los!
              </h1>
              <p class="hero__text">
                Unsere Seite bietet Ihnen eine fantastische Auswahl der besten Spiele!
              </p>
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
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/games/game-1.webp"type="image/webp"><img src="./img/games/game-1.jpg" alt="Games"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-1.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/games/game-2.webp"type="image/webp"><img src="./img/games/game-2.jpg" alt="Games"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-2.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="games__item games__item_big">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/games/game-3.webp"type="image/webp"><img src="./img/games/game-3.jpg" alt="Games"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-3.php">
                  Spielen
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title">
            Über uns
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <p class="about__text">
                Soziale Casinospiele sind zweifellos das Beste an Online-Casinos. Es gibt viele Gründe, warum sie gegenüber traditionellen Casinospielen bevorzugt werden. Sie können in diesen Casinos nicht nur kostenlos spielen, sondern auch eine große Auswahl an aufregenden Casinospielen finden, die von Ihren Lieblings-Online-Slots bis hin zu Kartenspielen, Craps und anderen Tischspielen sowie einigen Live-Dealer-Spielen von Top-Casinospielen reichen Entwickler. 
              </p>
              <p class="about__text">
                Alle sozialen Casinos sind völlig kostenlos und erfordern keine Registrierung; Sie bieten Spielern die Möglichkeit, Casinospiele zu erleben und neue Spiele kostenlos auszuprobieren, ohne sich registrieren oder ein Online-Casino-Konto erstellen zu müssen. Die besten Social Casinos sind der Konkurrenz jedoch einen Schritt voraus und haben das Spielerlebnis mit besserer Ton- und Videoqualität verbessert, um das Benutzererlebnis zu verbessern.
              </p>
            </div>
            <div class="about__image">
              <picture><source srcset="./img/about/image.webp"type="image/webp"><img src="./img/about/image.png" alt="image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
        <h2 class="benefits__title title">
        Unsere Vorteile
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__icon">
                <picture><source srcset="./img/benefits/icon-1.webp"type="image/webp"><img src="./img/benefits/icon-1.png" alt="Icon"></picture>
              </div>
              <div class="benefits__descr">
                <h2 class="benefits__subtitle">
                  Freies Spiel
                </h2>
                <p class="benefits__text">
                  Wenn Sie ein Liebhaber von Nervenkitzel sind und es lieben, aufregende Spiele zu spielen, dann ist unsere Seite die richtige Wahl für Sie!
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <picture><source srcset="./img/benefits/icon-2.webp"type="image/webp"><img src="./img/benefits/icon-2.png" alt="Icon"></picture>
              </div>
              <div class="benefits__descr">
                <h2 class="benefits__subtitle">
                  Spielen Sie überall
                </h2>
                <p class="benefits__text">
                  Wenn Sie ein so phänomenales und süchtig machendes Spiel finden, ist es nur natürlich, dass Sie es die ganze Zeit spielen wollen.
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <picture><source srcset="./img/benefits/icon-3.webp"type="image/webp"><img src="./img/benefits/icon-3.png" alt="Icon"></picture>
              </div>
              <div class="benefits__descr">
                <h2 class="benefits__subtitle">
                  Tolle Aktivität
                </h2>
                <p class="benefits__text">
                  Wenn Sie die Langeweile und den Müßiggang im Haus sehr satt haben, dann sind unsere Spielautomaten ein aufregender Aufruf, zum Spiel zurückzukehren!
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
          <p class="popup__text">Willkommen zurück! Auf unserer Website ist das Spiel für ein Publikum ab 18 Jahren bestimmt. Bist du 18?</p>
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
