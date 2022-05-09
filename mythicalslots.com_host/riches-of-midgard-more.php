<?php 
include 'header-page.php';
?>
  <main>
    <section class="game-solo">
      <div class="game-solo__container container">
        <div class="game-solo__image">
          <picture>
            <source media="(min-width: 1024px)" srcset="./img/riches-of-midgard-solo.webp" type="image/webp">
            <source media="(min-width: 601px)" srcset="./img/riches-of-midgard-solo-768.png" type="image/png">
            <source media="(max-width: 601px)" srcset="./img/riches-of-midgard-solo-768.webp" type="image/webp">
            <source media="(min-width: 600px)" srcset="./img/riches-of-midgard-solo-320.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/riches-of-midgard-solo-320.webp" type="image/webp">
            <img src="./img/riches-of-midgard-solo.png" alt="Riches of midgard">
          </picture>
        </div>
        <div class="game-solo__wrapper-link">
          <a class="game-solo__play" href="riches-of-midgard-game.php">Bawic się</a>
        </div>
        <h1 class="game-solo__title subtitle">
          O grze Riches of Midgard
        </h1>
        <div class="game-solo__body">
          <div class="game-solo__descr">
            <p class="game-solo__text text-s">
              Riches of Midgard: Land and Expand to automat wrzutowy o skandynawskim motywie.
            </p>
            <p class="game-solo__text text-s">
              Grając w slot Riches of Midgard: Land and Expand (Wealth of Midgard) poczujesz atmosferę Skandynawii i
              przeniesiesz się do Midgardu, gdzie czekają na Ciebie Odyn, Thor i oczywiście Freya.
            </p>
            <p class="game-solo__text text-s">
              Riches of Midgard: Land and Expand ma 3 bapaban, 3 spans i 9 linii wypłat (do 29 linii wypłat podczas
              darmowych spinów). Największe kombinacje są tworzone przez umieszczenie 3 symboli o niskiej wartości lub
              co najmniej 2 symboli o wysokiej wartości na dowolnej z 9 linii wygrywających od lewej do prawej.
            </p>
            <div class="game-solo__wrapper-link">
              <a class="game-solo__play" href="riches-of-midgard-game.php">Bawic się</a>
            </div>
          </div>
          <div class="game-solo__image">
            <picture>
            <source media="(min-width: 601px)" srcset="./img/riches-of-midgard-2-solo.webp" type="image/webp">
            <source media="(max-width: 600px)" srcset="./img/riches-of-midgard-2-solo-320.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/riches-of-midgard-2-solo-320.webp" type="image/webp">
            <img src="./img/riches-of-midgard-2-solo.png" alt="Riches of midgard">
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