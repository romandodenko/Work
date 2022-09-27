<?php
include 'header.php';
?>
    <main>
      <section class="ain">
        <div class="container">
          <div class="ain__content">
            <div class="ain__vbody">
              <span class="ain__span">
                Immerse yourself in the world of games
              </span>
                <h1 class="ain__title">
                  Play free slots and spend your free time with pleasure
                </h1>
                <a class="ain__link" href="#slots">
                  Play
                </a>
            </div>
          </div>
        </div>
      </section>
      <section class="slots" id="slots">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-1.php">
                  <picture><source srcset="./img/slot-1.webp"type="image/webp"><img src="./img/slot-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="slot-1.php">
                play
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-2.php">
                  <picture><source srcset="./img/slot-2.webp"type="image/webp"><img src="./img/slot-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="slot-2.php">
                play
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="slot-3.php">
                  <picture><source srcset="./img/slot-3.webp"type="image/webp"><img src="./img/slot-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="slot-3.php">
                play
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="abo" id="about">
        <div class="container">
          <h2 class="abo__title">
            About us
          </h2>
          <p class="abo__text">
            The principle of our slots is based on the spin of the reels and the accumulation of virtual payouts when the win combination occurs. Each slot comes with a generator that guarantees randomness in the formation of winning sequences and excludes the possibility of influencing the outcome of the game.
          </p>
          <p class="abo__text">
            First of all, we attract customers with the best online slot machine offer. The portal has hundreds of them from the best software manufacturers. All slots are certified by independent international organizations for quality control and Game safety.
            Playing for free without registration allows you to get acquainted with the rules of slot machines without risking your own wallet.
          </p>
          <p class="abo__text">
            On the casino's website, every gambler will find exactly what he needs. The list of slot machines is regularly updated with new samples of the gaming industry.
          </p>
        </div>
      </section>
      <section class="ele" id="benefits">
        <div class="container">
          <ul class="ele__list">
            <li class="ele__item">
              <h2 class="ele__title">
                Free entertainment
              </h2>
              <p class="ele__text">
                On our website you can find free fun and slot games. Spend your free time to your liking.
              </p>
            </li>
            <li class="ele__item">
              <h2 class="ele__title">
                Modern games
              </h2>
              <p class="ele__text">
                In our collection there are only modern and most interesting slot machines. Attractive graphics and breathtaking illustrations will impress you.
              </p>
            </li>
            <li class="ele__item">
              <h2 class="ele__title">
                Adaptive play
              </h2>
              <p class="ele__text">
                Play anywhere and anytime, our site can work on any convenient device. The game only requires an internet connection.
              </p>
            </li>
          </ul>
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