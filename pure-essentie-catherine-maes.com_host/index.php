<?php 
  include 'header.php';
?>
  <main>
    <section class="about">
      <div class="about__container container">
        <div class="about__wrapper" data-aos="fade-up">
          <h1 class="about__title title">
            Co je sociální kasino?
          </h1>
          <p class="about__text text">
            Sociální kasino je jednou z nejpopulárnějších her na internetu. Na rozdíl od kasin se skutečnými penězi za hraní her nemusíte platit peníze. Jediné, co musíte udělat, je vytvořit si účet a začít hrát. Můžete hrát i bez účtu.
          </p>
          <p class="about__text text">
            Existují dva hlavní typy společenských kasinových her: hry zdarma a hry o skutečné peníze. Zatímco hry zdarma jsou skvělé pro zábavu a vzdělávání, měli byste také pochopit, že stránky kasin pro sociální sítě mohou být velmi lukrativní. Na rozdíl od tradičních stránek s hazardními hrami o skutečné peníze tato kasina neúčtují hráčům za hraní žádné poplatky. Vše, co potřebujete, je webový prohlížeč a pár kliknutí ke hře. A jakmile vstoupíte, už nikdy nebudete muset platit za žádnou službu.
          </p>
          <p class="about__text text">
            Naše sociální kasino je zcela zdarma. Není šance přijít o peníze.
          </p>
          <div class="about__image">
            <picture><source srcset="./img/about-img.webp"type="image/webp"><img src="./img/about-img.jpg" alt="Gamer"></picture>
          </div>
        </div>
      </div>
    </section>
    <section class="game">
      <div class="game__container container">
        <h2 class="game__title title">
          Naše hry
        </h2>
        <ul class="game__list">
          <li class="game__item" data-aos="fade-right">
            <div class="game__image">
              <picture><source srcset="./img/game-bike.webp"type="image/webp"><img src="./img/game-bike.jpg" alt="Bike"></picture>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Závody na kole
              </h3>
              <p class="game__text text">
                Jezděte na kole a vyhrajte závod. vyhrát závod, získat ceny. Vpřed
              </p>
              <div class="game__wrapper-link">
                <a class="game__link" href="./take-a-bike/index.html">Hrát si</a>
              </div>
            </div>
          </li>
          <li class="game__item" data-aos="fade-left">
            <div class="game__image">
              <picture><source srcset="./img/game-flowers.webp"type="image/webp"><img src="./img/game-flowers.jpg" alt="Flowers"></picture>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Kouzelné květiny
              </h3>
              <p class="game__text text">
                Na tajemné louce rostou kouzelné květiny. Něco je hlídá, dost se naber a utíkej, utíkej!
              </p>
              <div class="game__wrapper-link">
                <a class="game__link" href="./beautiful-flower/index.html">Hrát si</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="faq">
      <div class="faq__container container">
        <h2 class="faq__title title">
          Otázky a odpovědi
        </h2>
          <div data-spollers data-one-spoller class="faq__accordion accordion">
            <div class="accordion__item" data-aos="fade-down">
              <button tabindex="-1" type="button" data-spoller class="accordion__btn">Co když jsem zapomněl heslo?</button>
              <p class="accordion__text">
                Pokud jste náhle zapomněli heslo, nemějte obavy. Dá se obnovit. Stačí nám napsat na mail <a class="accordion__link" href="mailto:pure@gmail.com">pure@gmail.com</a>
              </p>
            </div>
            <div class="accordion__item" data-aos="fade-down">
              <button tabindex="-1" type="button" data-spoller class="accordion__btn">Jaké aktivity máš kromě her?</button>
              <p class="accordion__text">
                Čas od času pořádáme turnaje. Turnaje jsou předem oznámeny. Upozornění bude zasláno na e-mailovou adresu uvedenou při registraci. Poté budete mít týden na registraci.
              </p>
            </div>
          </div>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>