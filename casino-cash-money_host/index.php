<?php 
  include 'header.php';
?>
  <main>
    <section class="back">
      <div class="back__body">
        <div class="back__item">
          <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Forest"></picture>
        </div>
      </div>
    </section> 
    <section class="about">
      <div class="about__container container">
        <h1 class="about__title title">
          About us
        </h1>
        <h2 class="about__subtitle subtitle">
          Let's talk a little about us
        </h2>
        <p class="about__text text">
          Welcome to our social casino. Our casino is completely free, so have fun learning and playing. In addition, our social casino is unique and based on the principle of a fully responsive design for all devices. You get full functionality on both desktop and mobile devices.
        </p>
        <h2 class="about__subtitle subtitle">
          What is a social casino?
        </h2>
        <p class="about__text text">
          Social casino is one of the most popular games on the internet. Unlike real money casinos, you don't have to pay money to play.
        </p>
        <p class="about__text text">
          There are two main types of social casino games: free games and real money games. While free games are great for fun and education, you should also understand that social media casino sites are very lucrative. Unlike traditional real money gambling sites, these casinos charge a commission. Players do not charge to play.
        </p>
        <div class="about__wrapper-link">
          <a class="about__link link link-anchor" href="#games">Play</a>
        </div>
      </div>
    </section>
    <section class="benefits" id="advantages">
      <div class="benefits__container container">
        <h2 class="benefits__title title">
          Advantages
        </h2>
        <ul class="benefits__list">
          <li class="benefits__item text">
            Fun games
          </li>
          <li class="benefits__item text">
            Adaptive design
          </li>
          <li class="benefits__item text">
            Ability to play from anywhere in the world
          </li>
          <li class="benefits__item text">
            Free games
          </li>
        </ul>
      </div>
    </section>
    <section class="games" id="games">
      <div class="games__container container">
        <h2 class="games__title title">
          Games
        </h2>
        <ul class="games__list">
          <li class="games__item">
            <div class="games__image">
                <a href="./Temple-of-athena/index.html">
                  <picture><source srcset="./img/temple-of-athena.webp"type="image/webp"><img src="./img/temple-of-athena.png" alt="Temple-of-athena"></picture>
                </a>
            </div>
            <div class="games__descr">
              <h3 class="games__subtitle subtitle">
                Temple of Athena
              </h3>
              <div class="games__wrapper-link">
                <a class="games__link link" href="./Temple-of-athena/index.html">Play</a>
              </div>
            </div>
          </li>
          <li class="games__item">
            <div class="games__image">
                <a href="./Olympia/index.html">
                  <picture><source srcset="./img//olympia.webp"type="image/webp"><img src="./img//olympia.png" alt="Olympia"></picture>
                </a>
            </div>
            <div class="games__descr">
              <h3 class="games__subtitle subtitle">
                Olympia
              </h3>
              <div class="games__wrapper-link">
                <a class="games__link link" href="./Olympia/index.html">Play</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="faq" id="faq">
      <div class="faq__container container">
        <h2 class="faq__title title">
          Faq
        </h2>
        <ul data-spollers data-one-spoller class="faq__list">
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn text">If I forgot my password, what should I do?</button>
            <p class="faq__text text">
              If you have forgotten your password, then there is no need to worry. Just email us at <a class="faq__link link" href="mailto:cash-money@support.com">cash-money@support.com</a> and we'll help you restore it.
            </p>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn text">Are there any events happening on your site?</button>
            <p class="faq__text text">
              Yes, we run tournaments from time to time. The winnings are coins that can be spent within the site.
            </p>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>
