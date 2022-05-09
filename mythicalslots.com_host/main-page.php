<?php 
  include 'header.php';
?>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <h1 class="hero__title title">
          Mythicalslots <span>najlepsze kasyno</span><span>spolecznosciowe</span>
        </h1>
        <div class="hero__wrapper-link">
          <a href="game.php" class="hero__link">
            Zagraj teraz
          </a>
        </div>
      </div>
    </section>
    <section class="game">
      <div class="game__container container">
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
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <h2 class="about__title subtitle">
          O nas
        </h2>
        <p class="about__text text">
          Jeśli lubisz hazard w kasynie, ale nie chcesz ryzykować swoich pieniędzy, nasze społecznościowe kasyna online
          są świetną opcją. Aby uzyskać najlepsze wrażenia z darmowej gry. W naszym kasynie można grać w dowolne darmowe
          gry, bez opłat i inwestycji.
        </p>
        <p class="about__text text">
          Nasze społecznościowe <a class="about__link" href="main-page.php">myticalslots</a> dają Ci możliwość spędzenia
          czasu na graniu w Twoje ulubione gry.
        </p>
        <p class="about__text text">
          Wygrane nie podlegają wypłacie, ale możesz wykorzystać swoje wygrane, aby grać dalej.
          Rejestracja jest bezpłatna i prosta. Wystarczy odwiedzić witrynę gier społecznościowych „Zarejestruj się”,
          podając swój ważny adres e-mail.
        </p>
        <p class="about__text text">
          Odblokuj nowe gry i osiągaj nowe poziomy podczas gry.
        </p>
        <div class="about__image">
          <picture>
            <source media="(min-width: 1024px)" srcset="./img/about.webp" type="image/webp">
            <source media="(min-width: 601px)" srcset="./img/about-768.png" type="image/png">
            <source media="(min-width: 601px)" srcset="./img/about-768.webp" type="image/webp">
            <source media="(max-width: 600px)" srcset="./img/about-320.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/about-320.webp" type="image/webp">
            <img src="./img/about.png" alt="About">
          </picture>
        </div>
      </div>
    </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="email" placeholder="Your email" name="email" required>
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password" required>
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
        <input type="text" name="country" hidden value="pl">
        <input type="text" name="site" hidden value="mythicalslots.com">
        <div class="reg__label">
          <input class="reg__input" type="email" placeholder="Email" name="email" required>
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password" required>
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
  include 'footer.php';
?>