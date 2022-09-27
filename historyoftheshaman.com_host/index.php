<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Social Casino
              </span>
              <h1 class="hero__title">
                We invite you to an exciting gaming journey
              </h1>
              <a class="hero__link" href="#games">
                Watch games
              </a>
            </div>
            <div class="hero__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title title">
            Games
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <a href="game-1.php">
                <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
              </a>
            </li>
            <li class="games__item">
              <a href="game-2.php">
                <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
              </a>
            </li>
            <li class="games__item">
              <a href="game-3.php">
                <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="advantages" id="benefits">
        <h2 class="advantages__title title">
          Advantages
        </h2>
        <div class="advantages__content">
          <ul class="advantages__list">
            <li class="advantages__item">
              <span class="advantages__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <p class="advantages__text">
                We treat all players with respect and try to make sure that everyone, playing slot machines, gets maximum pleasure and plunges into the world of games.
              </p>
            </li>
            <li class="advantages__item">
              <span class="advantages__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <p class="advantages__text">
                Since our site is dedicated to gamblers, we have developed a version of all games in a free mode, each user of our club can play all games without restrictions.
              </p>
            </li>
            <li class="advantages__item">
              <span class="advantages__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <p class="advantages__text">
                We regularly update the collection of slots with the latest novelties, and experienced players will be able to determine the prospects of any unfamiliar machine without any extra costs.
              </p>
            </li>
            <li class="advantages__item">
              <span class="advantages__icon">
                <img src="./img/icon-4.svg" alt="Icon">
              </span>
              <p class="advantages__text">
                Enjoy the game anywhere and on any device, games are available at any time you just need to have an internet connection.
              </p>
            </li>
          </ul>
          <div class="advantages__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title">
            About Us
          </h2>
          <div class="about__content">
            <p class="about__text">
              Users are waiting for switching from everyday worries to bright and unforgettable moments of exciting adventures. A huge assortment of different themes, technical characteristics, additional ways to receive virtual rewards, as well as graphic and musical design of gaming slots is waiting for beginners and avid players on our site. To distract from problems and gray everyday life, to relax after a hard day's work, to test new strategies and their unique chips for the game, each user will be able to play any offered machine for free.
            </p>
            <p class="about__text">
              Try to light the flame of an exciting game, and slot machines for free will help you do it at any time. To play in free mode, you just need to click on the "Play" button of the game slot browser. It does not require registration, sending paid messages or installing additional applications. On our site, a gamer plays with virtual currency, with the full use of which the launch should be repeated.
            </p>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on the
            button you confirm your age.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Agree</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>