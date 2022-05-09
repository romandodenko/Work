<?php 
include 'header-page.php';
?>
  <main>
    <section class="game-solo">
      <div class="game-solo__container container">
        <div class="game-solo__image">
          <picture>
            <source media="(min-width: 1024px)" srcset="./img/parthenon-quest-for-ommortality-solo.webp" type="image/webp">
            <source media="(min-width: 601px)" srcset="./img/parthenon-quest-for-ommortality-solo-768.png" type="image/png">
            <source media="(max-width: 601px)" srcset="./img/parthenon-quest-for-ommortality-solo-768.webp" type="image/webp">
            <source media="(min-width: 600px)" srcset="./img/parthenon-quest-for-ommortality-solo-320.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/parthenon-quest-for-ommortality-solo-320.webp" type="image/webp">
            <img src="./img/parthenon-quest-for-ommortality-solo.png" alt="Parthenon quest for ommortality">
          </picture>
        </div>
        <div class="game-solo__wrapper-link">
          <a class="game-solo__play" href="parthenon-quest-for-immortality-game.php">Bawic się</a>
        </div>
        <h1 class="game-solo__title subtitle">
          O grze Bogactwo Hall of Gods
        </h1>
        <div class="game-solo__body">
          <div class="game-solo__descr">
            <p class="game-solo__text text-s">
              Projekt slotu Parton Quest na nieśmiertelność to test starożytnej Grecji - tutaj element Gehenny i wszystko jest starannie. W tle gracz zobaczy rzeźby bogów górujące na niebie. Symbole nagród mają postać węża, pegaza, statku, trójzębu itp. Podczas gry słyszysz melodię w zrelaksowanym stylu. Partenon, gdzie czeka na Ciebie nie tylko ekscytacja, ale także spotkanie z majestatycznymi bogami. Jeśli graczowi uda się rozwiązać tajemnice ukryte w murach starożytnej budowli, zostanie nagrodzony wyższą wypłatą.
            </p>
            <div class="game-solo__wrapper-link">
              <a class="game-solo__play" href="parthenon-quest-for-immortality-game.php">Bawic się</a>
            </div>
          </div>
          <div class="game-solo__image">
            <picture>
              <source media="(min-width: 601px)" srcset="./img/parthenon-quest-for-ommortality-2-solo.webp" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/parthenon-quest-for-ommortality-2-solo-320.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/parthenon-quest-for-ommortality-2-solo-320.webp" type="image/webp">
              <img src="./img/parthenon-quest-for-ommortality-2-solo.png" alt="Parthenon quest for ommortality">
            </picture>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your email" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <input class="log__btn" type="submit" name="log_in" value="Wejść">
      </form>
      <button class="popup-log__exit"></button>
    </div>
  </div>
  <div class="popup-reg">
    <div class="popup-reg__close"></div>
    <div class="popup-reg__body">
      <form class="popup-reg__form-reg reg" action="#" method="POST">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email">
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">Zapoznałem się z <a
              href="policy.php">polityką prywatności</a> oraz <a href="terms.php">regulaminem</a> i akceptuję
            je</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Rejestracja">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div>
  <?php 
include 'footer-page.php';
?>