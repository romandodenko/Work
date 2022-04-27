<?php 
include 'header-page.php';
?>
  <main>
    <section class="background">
      <div class="background__body">
        <div class="background__item">
          <picture><source srcset="./img/hero-back.webp"type="image/webp"><img src="./img/hero-back.png" alt="Hero back"></picture>
        </div>
      </div>
    </section>
    <section class="games">
      <div class="games__container container">
        <div class="games__body">
          <h1 class="games__title title">
            <svg width="48" height="48">
            <use xlink:href="./img/svg/sprites.svg#games"></use>
            </svg>
            Games
          </h1>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
               <a href="sweet-bonanza.php"><picture><source srcset="./img/sweet-bonanza.webp"type="image/webp"><img src="./img/sweet-bonanza.png" alt="Sweet bonanza"></picture></a>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle subtitle">
                 Sweet bonanza
                </h3>
                <div class="games__wrapper-link">
                  <a class="games__link" href="sweet-bonanza.php">Play</a>
                </div>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="fruit-party.php"><picture><source srcset="./img/fruit-party.webp"type="image/webp"><img src="./img/fruit-party.png" alt="Fruit party"></picture></a>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle subtitle">
                  Fruit party
                </h3>
                <div class="games__wrapper-link">
                  <a class="games__link" href="fruit-party.php">Play</a>
                </div>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="fruit-rainbow.php"><picture><source srcset="./img/fruit-rainbow.webp"type="image/webp"><img src="./img/fruit-rainbow.png" alt="Fruit rainbow"></picture></a>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle subtitle">
                  Fruit rainbow
                </h3>
                <div class="games__wrapper-link">
                  <a class="games__link" href="fruit-rainbow.php">Play</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
  <div class="form-popup form-popup-gsap">
    <div class="form-popup__close"></div>
    <div class="form-popup__body">
      <p class="form-popup__text text">
        Subscribe to our updates
      </p>
      <form action="#" class="form-popup__form" method="post" enctype="multipart/form-data">
        <input type="text" name="country" hidden value="au">
        <input type="text" name="site" hidden value="lucky-onlinegames.com">
        <label class="form-popup__label">
          <input class="form-popup__input" type="text" name="name" placeholder="Name*" required>
          </label>
        <label class="form-popup__label">
          <input class="form-popup__input" type="email" name="email" placeholder="E-mail*">
          </label>
          <div class="form-popup__wrapper-checkbox">
            <input class="form-popup__checkbox" type="checkbox" required><span class="form-popup__checkbox-span">I have read the <a class="form-popup__checkbox-link" href="politick.php">privacy policy</a> and <a class="form-popup__checkbox-link" href="terms.php">terms and conditions</a> and agree to them</span>
          </div>
          <input class="form-popup__btn" type="submit" name="clicker" value="Subscribe">
      </form>
      <?php
          $data = $_POST;
          $get_url = 'https://top10casino-no.com/social/mail/?mail=' . trim($data['email']) . '&country=' . trim($data['country']) . '&site=' . trim($data['site']);
          $responce = file_get_contents($get_url);
          $jsonstr = json_decode($responce);
      ?>
      <button class="form-popup__exit"></button>
    </div>
  </div>
  <?php 
  include 'footer-games.php';
  ?>