<?php 
include 'header-page.php';
?>
  <main>
    <section class="game">
      <div class="game__container container">
        <div class="game__body">
        <h2 class="game__title subtitle">
          Gry dla ciebie
        </h2>
        <ul class="game__list">
          <li class="game__item">
            <div class="game__links">
              <a class="game__play" href="riches-of-midgard-game.php">Bawic się</a>
              <a class="game__more" href="riches-of-midgard-more.php">O grze</a>
            </div>
          </li>
          <li class="game__item">
            <div class="game__links">
              <a class="game__play" href="hall-of-gods-game.php">Bawic się</a>
              <a class="game__more" href="hall-of-gods-more.php">O grze</a>
            </div>
          </li>
          <li class="game__item">
            <div class="game__links">
              <a class="game__play" href="parthenon-quest-for-immortality-game.php">Bawic się</a>
              <a class="game__more" href="parthenon-quest-for-immortality-more.php">O grze</a>
            </div>
          </li>
        </ul>
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