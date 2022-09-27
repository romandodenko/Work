<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="top">
            <div class="top__container container">
              <a class="top__logo" href="main.php">
                <img src="./img/logo.svg" alt="Logotip">
              </a>
            </div>
          </section>
          <section class="topping">
            <div class="topping__container container">
              <div class="topping__descr">
                <span class="topping__span">
                  <picture><source srcset="./img/ic.webp"type="image/webp"><img src="./img/ic.png" alt="Icon"></picture>
                  Social Casino
                </span>
                <h1 class="topping__title">
                  Immerse yourself in the exciting world of entertainment
                </h1>
                <a class="topping__link" href="#games" data-da=".topping__container, 1200, last">
                  Watch games
                </a>
              </div>
              <div class="topping__image">
                <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
              </div>
            </div>
          </section>
          <section class="playerning" id="games">
            <div class="container">
              <h2 class="playerning__title">
                <picture><source srcset="./img/ic-2.webp"type="image/webp"><img src="./img/ic-2.png" alt="Icon"></picture>
                Games
              </h2>
              <ul class="playerning__list">
                <li class="playerning__item playerning__item_1">
                  <div class="playerning__image playerning__image_1">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                </li>
                <li class="playerning__item">
                  <div class="playerning__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                </li>
                <li class="playerning__item">
                  <div class="playerning__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="avantag" id="benefits">
            <div class="container">
              <h2 class="avantag__title">
                <picture><source srcset="./img/ic-2.webp"type="image/webp"><img src="./img/ic-2.png" alt="Icon"></picture>
                Our advantages
              </h2>
              <div class="avantag__content">
                <div class="avantag__image">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
                <ul class="avantag__list">
                  <li class="avantag__item">
                    <span class="avantag__icon">
                      <picture><source srcset="./img/ic.webp"type="image/webp"><img src="./img/ic.png" alt="Icon"></picture>
                    </span>
                    <p class="avantag__text">
                      You can access any game just by having a good internet connection.
                    </p>
                  </li>
                  <li class="avantag__item">
                    <span class="avantag__icon">
                      <picture><source srcset="./img/ic.webp"type="image/webp"><img src="./img/ic.png" alt="Icon"></picture>
                    </span>
                    <p class="avantag__text">
                      Games are available without registration, choose any game and play with pleasure.
                    </p>
                  </li>
                  <li class="avantag__item">
                    <span class="avantag__icon">
                      <picture><source srcset="./img/ic.webp"type="image/webp"><img src="./img/ic.png" alt="Icon"></picture>
                    </span>
                    <p class="avantag__text">
                      Here users can enjoy slot machines without any financial costs.
                    </p>
                  </li>
                  <li class="avantag__item">
                    <span class="avantag__icon">
                      <picture><source srcset="./img/ic.webp"type="image/webp"><img src="./img/ic.png" alt="Icon"></picture>
                    </span>
                    <p class="avantag__text">
                      Our site is absolutely adaptive, games are available on any device.
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </section>
          <section class="info" id="about">
            <div class="container">
              <h2 class="info__title">
                <picture><source srcset="./img/ic-2.webp"type="image/webp"><img src="./img/ic-2.png" alt="Icon"></picture>
                About Us
              </h2>
              <h3 class="info__subtitle">
                Social Casino
              </h3>
              <div class="info__body">
                <div class="info__column">
                      <p class="info__text">
                        Experience the ease of a quick game start by clicking on the game icon right now! Enjoy the moments when you play slot machines for virtual coins from the leading game providers.
                        Our casino is open 24/7 with free games and a selection of all kinds of slot machines - just select a game and start playing
                      </p>
                      <p class="info__text">
                        You can try out each of our slots for fun - an amazing feature that allows you to play all of our slots without downloading and without registration for free! You can access it through your mobile phone, computer or tablet.We never spoil your fun, so you can play all of our games without downloading anything to your computer.
                      </p>
                </div>
                <div class="info__column">
                  <p class="info__text">
                    Slot games in casinos are one of the most popular games. Not only because of the huge incentives you can get, but also because of the breathtaking graphics, good music and overall nice visuals of the game.
                  </p>
                  <p class="info__text">
                    Browse through all the slots, choose your favorite game and hit the PLAY button - it's that easy!
                  </p>
            </div>
              </div>
            </div>
          </section>
        </main>
        <?php
        include 'footer.php';
        ?>