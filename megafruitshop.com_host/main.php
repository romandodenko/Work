<?php 
  include 'header.php';
?>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="row d-flex align-items-center justify-content-end">
          <div class="hero__body d-flex align-items-center flex-column justify-content-center col-12">
            <h1 class="hero__title col-12">
              Witamy w najlepszym kasynie społecznościowym online
            </h1>
            <p class="hero__text col-12">
              Graj i baw się z nami
            </p>
            <div class="hero__link col-12">
              <a href="main.php#game">
                Bawić się
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__image">
        <picture><source srcset="./img/hero/hero.webp"type="image/webp"><img src="./img/hero/hero.jpg" alt="image"></picture>
      </div>
    </section>
    <section class="game" id="game">
      <div class="game__container container">
        <div class="row d-flex flex-wrap justify-content-center">
          <ul class="game__list col-12 col-xxl-8 d-flex flex-wrap justify-content-center">
            <li class="game__item">
              <div class="game__image">
                <a href="bananarock.php">
                  <picture><source srcset="./img/game/bananarock.webp"type="image/webp"><img src="./img/game/bananarock.jpg" alt="bananarock"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="bananarock.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="cherrypop.php">
                  <picture><source srcset="./img/game/cherrypop.webp"type="image/webp"><img src="./img/game/cherrypop.jpg" alt=""></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="cherrypop.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="juicy-fruits.php">
                  <picture><source srcset="./img/game/juicy-fruits.webp"type="image/webp"><img src="./img/game/juicy-fruits.jpg" alt="juicy-fruits"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="juicy-fruits.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="blinged.php">
                  <picture><source srcset="./img/game/blinged.webp"type="image/webp"><img src="./img/game/blinged.jpg" alt="blinged"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="blinged.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="octopus-treasure.php">
                  <picture><source srcset="./img/game/octopus-treasure.webp"type="image/webp"><img src="./img/game/octopus-treasure.jpg" alt="octopus-treasure"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="octopus-treasure.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="saxon.php">
                  <picture><source srcset="./img/game/saxon.webp"type="image/webp"><img src="./img/game/saxon.jpg" alt="saxon"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="saxon.php">
                  Bawić się
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <div class="row">
          <h2 class="about__title col-12">
            O nas
          </h2>
          <div class="about__wrapper-text col-12">
            <p class="about__text">
              Możesz grać w nasze gry całkowicie za darmo i bezpiecznie. Zanurz się w świat magicznej rozrywki, czekają na Ciebie różne motywy, bez żadnych inwestycji.
            </p>
            <p class="about__text">
              Na naszej stronie możesz zagrać w dowolny dogodny dla Ciebie sen, mam przy sobie telefon lub tablet. Nasza strona daje Ci możliwość całkowitego zanurzenia się w automatach rozrywkowych i wygrania wirtualnych nagród.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="benefits">
      <div class="benefits__container container">
        <div class="row">
          <ul class="benefits__list d-flex flex-wrap justify-content-center">
            <li class="benefits__item d-flex flex-column">
              <div class="benefits__icon d-flex align-items-center justify-content-center">
                <picture><source srcset="./img/icon/icon-1.webp"type="image/webp"><img src="./img/icon/icon-1.png" alt="icon"></picture>
              </div>
              <p class="benefits__text">
                Graj w automaty za darmo
              </p>
            </li>
            <li class="benefits__item d-flex flex-column">
              <div class="benefits__icon d-flex align-items-center justify-content-center">
                <picture><source srcset="./img/icon/icon-2.webp"type="image/webp"><img src="./img/icon/icon-2.png" alt="icon"></picture>
              </div>
              <p class="benefits__text">
                Dreszcz automatów do gry
              </p>
            </li>
            <li class="benefits__item d-flex flex-column">
              <div class="benefits__icon d-flex align-items-center justify-content-center">
                <picture><source srcset="./img/icon/icon-3.webp"type="image/webp"><img src="./img/icon/icon-3.png" alt="icon"></picture>
              </div>
              <p class="benefits__text">
                Gry przynoszą zabawę
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>