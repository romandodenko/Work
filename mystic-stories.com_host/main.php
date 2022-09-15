<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="top">
            <div class="container">
              <a class="top__logo" href="main.php">
                <img src="./img/logo.svg" alt="Logo">
              </a>
            </div>
          </section>
          <section class="hero">
            <div class="container">
              <div class="hero__content">
                <div class="hero__body">
                  <h1 class="hero__title">
                    Free online slots
                  </h1>
                  <p class="hero__text">
                    A limitless world of free entertainment with online slots on our website
                  </p>
                  <a class="hero__link" href="#slots">
                    Online slots
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="slots" id="slots">
            <div class="container">
              <h2 class="slots__title title">
                Games
              </h2>
              <ul class="slots__list">
                <li class="slots__item" style="background-image: url(./img/slot-1.png);">
                    <a class="slots__link" href="slot-1.php">
                      mystic hive
                      <img src="./img/play.svg" alt="Icon">
                    </a>
                </li>
                <li class="slots__item slots__item_2" style="background-image: url(./img/slot-2.jpg);">
                  <a class="slots__link" href="slot-2.php">
                    Diamond Vortex
                    <img src="./img/play.svg" alt="Icon">
                  </a>
              </li>
              <li class="slots__item slots__item_3" style="background-image: url(./img/slot-3.jpg);">
                <a class="slots__link" href="slot-3.php">
                  Saxon
                  <img src="./img/play.svg" alt="Icon">
                </a>
            </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="container">
              <h2 class="about__title title">
                About Us
              </h2>
              <div class="about__content">
                <div class="about__descr">
                  <p class="about__text">
                    Follow your gambling instinct and discover the endless world of licensed games and big wins on the gaming platform website. Our team will become your reliable guide in the field of online casinos.
                  </p>
                  <div class="about__descr-item">
         <p class="about__text">
          Our task is to create a unique gaming portal that meets the needs of the most demanding connoisseurs of slot games from different countries. Our site offers users a variety of virtual slot machines, made in a variety of traditional settings for the genre, which offer a varied and exciting gameplay. The player uses in-game currency to use virtual slot machines.
                  </p>
                  </div>
                </div>
                <div class="about__image" data-da=".about__descr-item, 1200, last">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </section>
          <section class="benefits" id="benefits">
         <div class="container">
          <h2 class="benefits__title title">
            Advantages
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <h3 class="benefits__subtitle">
                Games are free
              </h3>
              <p class="benefits__text">
                Games do not require investments. Playing on our site you do not risk your finances.
              </p>
            </li>
            <li class="benefits__item benefits__item_2">
              <h3 class="benefits__subtitle">
                Game without obstacles
              </h3>
              <p class="benefits__text">
                Playing on our site you do not need to register or download anything. Choose any slot you like and play.
              </p>
            </li>
            <li class="benefits__item">
              <h3 class="benefits__subtitle">
                Thematic slots
              </h3>
              <p class="benefits__text">
                Play a variety of slots with different themes. Here you can find amazing graphics and modern games.
              </p>
            </li>
          </ul>
         </div>
          </section>
        </main>
<?php
include 'footer.php';
?>