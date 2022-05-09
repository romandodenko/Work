<?php 
include 'header-page.php';
?>
  <main>
    <section class="game-solo">
      <div class="game-solo__container container">
        <div class="game-solo__image">
          <picture>
            <source media="(min-width: 1024px)" srcset="./img/hall-of-gods-solo.webp" type="image/webp">
            <source media="(min-width: 601px)" srcset="./img/hall-of-gods-solo-768.png" type="image/png">
            <source media="(max-width: 601px)" srcset="./img/hall-of-gods-solo-768.webp" type="image/webp">
            <source media="(min-width: 600px)" srcset="./img/hall-of-gods-solo-320.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/hall-of-gods-solo-320.webp" type="image/webp">
            <img src="./img/hall-of-gods-solo.png" alt="Hall of gods">
          </picture>
        </div>
        <div class="game-solo__wrapper-link">
          <a class="game-solo__play" href="hall-of-gods-game.php">Bawic się</a>
        </div>
        <h1 class="game-solo__title subtitle">
          O grze bogactwo Hall of Gods
        </h1>
        <div class="game-solo__body">
          <div class="game-solo__descr">
            <p class="game-solo__text text-s">
              Slot Hall of Gods z motywem skandynawskim i trzema progresywnymi jackpotami.
            </p>
            <p class="game-solo__text text-s">
              Tłem gry był długi statek, został zaatakowany przez kogoś lub węża, wszystkie symbole, które zobaczysz w
              slocie bogów, są związane z tematem. Symbole o niższej wartości kojarzą się z owocami, naszyjnikiem,
              młotem Topa i ozdobą, a symbolami o wyższej wartości są sami bogowie Loki Freya, Top i Odyn. Oferty
              specjalne obejmują symbol dziki (wąż), symbol bonusu (młot), symbol rozproszenia (kruk).
              Wysoki automat Hall of Gods ma również funkcję darmowych spinów.
            </p>
            <div class="game-solo__wrapper-link">
              <a class="game-solo__play" href="hall-of-gods-game.php">Bawic się</a>
            </div>
          </div>
          <div class="game-solo__image">
            <picture>
              <source media="(min-width: 601px)" srcset="./img/hall-of-gods-2-solo.webp" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/hall-of-gods-2-solo-320.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/hall-of-gods-2-solo-320.webp" type="image/webp">
              <img src="./img/hall-of-gods-2-solo.png" alt="Hall of gods">
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