<?php 
  include 'header-main-page.php';
?>

  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__body">
          <div class="hero__descr">
            <h1 class="hero__title title">
              Good afternoon! Welcome to our site.
            </h1>
            <p class="hero__text text">
              Here you can take a break from the worldly bustle, unwind and get pleasant emotions.
            </p>
            <div class="hero__wrapper-link">
              <a class="hero__link" href="games.php">Play</a>
            </div>
          </div>
          <div class="hero__image">
            <picture><source srcset="./img/hero-img.webp"type="image/webp"><img src="./img/hero-img.png" alt="Hero img"></picture>
          </div>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">

        <div class="about__body">
          <h2 class="about__title title">
            <svg width="48" height="48">
              <use xlink:href="./img/svg/sprites.svg#about"></use>
            </svg>
            About us
          </h2>
          <div class="about__bottom">
            <div class="about__descr">
              <p class="about__text text">
                Welcome to our social casino. Let's talk a little about us. We bring to your attention free and
                interesting games. In which it is not possible to lose real money, since our social casino is completely
                free. Here you can have a good time, as well as relax after a hard day's work.
              </p>
            </div>
            <div class="about__image">
              <picture><source srcset="./img/about-img.webp"type="image/webp"><img src="./img/about-img.png" alt="About image"></picture>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="benefits" id="advantages">
      <div class="benefits__container container">
        <div class="benefits__body">
          <h2 class="benefits__title title">
            <svg width="48" height="48">
              <use xlink:href="./img/svg/sprites.svg#benefits"></use>
            </svg>
            Advatages
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__span">
                1
              </span>
              <p class="benefits__text text">
                Games in our social casino are completely free
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">
                2
              </span>
              <p class="benefits__text text">
                There is no way to lose money in our social casino
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">
                3
              </span>
              <p class="benefits__text text">
                Our social casino is fully adapted to any device
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">
                4
              </span>
              <p class="benefits__text text">
                In our social casino games are available from anywhere in the world
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
  <div class="form-popup form-popup-transition">
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
  include 'footer.php';
?>
