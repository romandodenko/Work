<?php 
  include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="bl1">
            <div class="bl1__container container">
              <div class="bl1__content">
                <div class="bl1__body">
                  <h1 class="bl1__title">
                    <span>Social online</span> casino with free slots
                  </h1>
                  <p class="bl1__text">
                    Our casino provides an opportunity for fans to play the best games.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="bl2" id="bl2">
            <div class="bl2__container container">
              <h2 class="bl2__title title">
                Games
              </h2> <!-- Если будете добавлять элемент в список ниже, то стираете все классы у li кроме bl2__item -->
              <ul class="bl2__list">
                <li class="bl2__item bl2__item_big" style="background-image: url(./img/bl2/game-1.jpg);">
                  <div class="bl2__wrapper-play">
                    <a class="bl2__play" href="game-1.php">
                      Play now
                      <span><img src="./img/bl2/arrow.png" alt="Arrow"></span>
                    </a>
                  </div>
                </li>
                <li class="bl2__item bl2__item_1" style="background-image: url(./img/bl2/game-2.jpg);">
                  <div class="bl2__wrapper-play">
                    <a class="bl2__play" href="game-2.php">
                      Play now
                      <span><img src="./img/bl2/arrow.png" alt="Arrow"></span>
                    </a>
                  </div>
                </li>
                <li class="bl2__item bl2__item_2" style="background-image: url(./img/bl2/game-3.jpg);">
                  <div class="bl2__wrapper-play">
                    <a class="bl2__play" href="game-3.php">
                      Play now
                      <span><img src="./img/bl2/arrow.png" alt="Arrow"></span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="bl3" id="bl3">
            <div class="bl3__container container">
              <h2 class="bl3__title title">
                About Us
              </h2>
              <div class="bl3__content">
                <div class="bl3__row">
                  <div class="bl3__texts">
                    <p class="bl3__text">
                      Our free slot games can be played anywhere in the world as long as you are connected. You don't
                      need to wager with real money, you can play our free slots games online 24/7 with no download
                      required.
                      And we are adding more free slot games.
                    </p>
                    <p class="bl3__text">
                      Free casino slots are fun to play when you have a few minutes to spare. There are a huge number of
                      themes, so if you want to find thunder god cats free online slots, you will find them all here.
                    </p>
                  </div>
                  <div class="bl3__image">
                    <img src="./img/bl3/image.jpg" alt="Image">
                  </div>
                </div>
                <div class="bl3__row">
                  <p class="bl3__text">
                    At Winthejackpot-spin.com we offer you a selection of free casino games. All of our free slot games
                    require no download and will allow you to play as much as you want.Play free slot machines online
                    without registration and download. Our free slots selection includes some of the most famous games
                    in the industry, so feel invited to join in the fun, start playing and prepare to win. Games are
                    available for a large number of workouts without risk.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="bl4" id="bl4">
            <div class="bl4__container container">
              <h2 class="bl4__title title">
                Our advantages
              </h2>
              <ul class="bl4__list">
                <li class="bl4__item">
                  <h3 class="bl4__subtitle">
                    Excellent gaming experience
                  </h3>
                </li>
                <li class="bl4__item">
                  <h3 class="bl4__subtitle">
                    Free slot machines with entertainment features
                  </h3>
                </li>
                <li class="bl4__item">
                  <h3 class="bl4__subtitle">
                    Risk free game
                  </h3>
                </li>
              </ul>
            </div>
          </section>
        </main>
        <div class="pp">
          <div class="pp__close"></div>
          <div class="pp__body">
            <form class="pp__form" action="/">
              <p class="pp__text">Сonfirm that I am over 18 years old, give my consent to the processing of personal data and accept the terms of the user agreement</p>
              <label>
                <input type="checkbox" name="number">
              </label>
              <label>
                <input type="text" name="years-old">
              </label>
              <div class="pp__form-bottom">
                <button class="pp__button">Agree</button>
              </div>
            </form>
          </div>
        </div>
        <?php 
        include 'footer.php';
      ?>