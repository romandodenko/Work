<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Slot social gratuiti
              </h1>
              <p class="hero__text">
                Un mondo illimitato di intrattenimento gratuito con le slot machine sul nostro sito web
              </p>
              <a class="hero__link" href="#games">
                Riproduci ora
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="benefits__container container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <div class="benefits__descr">
              <h2 class="benefits__title">
                Ampia selezione di giochi
              </h2>
              <p class="benefits__text">
                Il nostro club ha una vasta selezione di giochi dei produttori più famosi
              </p>
             </div>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <div class="benefits__descr">
              <h2 class="benefits__title">
                Gioca su qualsiasi dispositivo
              </h2>
              <p class="benefits__text">
                Comoda versione mobile e versione desktop, gioca ovunque da qualsiasi dispositivo
              </p>
             </div>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
             <div class="benefits__descr">
              <h2 class="benefits__title">
                Gioco gratis
              </h2>
              <p class="benefits__text">
                I giochi non richiedono alcun investimento, puoi giocare liberamente senza perdere il portafoglio
              </p>
             </div>
            </li>
          </ul>
          <div class="benefits__image">
            <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <span class="games__text">
                Slot machine
              </span>
              <a class="games__link" href="game-1.php">
                Halloween Jack
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <span class="games__text">
                Slot machine
              </span>
              <a class="games__link" href="game-2.php">
                Dark Vortex
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <span class="games__text">
                Slot machine
              </span>
              <a class="games__link" href="game-3.php">
                Halloween jackpot
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            Informazioni sul nostro casinò sociale
          </h2>
          <div class="about__content">
            <div class="about__column">
              <p class="about__text">
                Il nostro sito funziona solo con sviluppatori ufficiali, in quanto ciò garantisce la disponibilità di una licenza per ogni gioco e la casualità delle combinazioni vincenti. Le slot machine di queste società sono popolari da più di un decennio.
              </p>
              <p class="about__text">
                Si consiglia di avviare un gioco gratuito per quei clienti che non vogliono rischiare i propri soldi.
              </p>
            </div>
            <div class="about__column">
              <p class="about__text">
                Per giocare alle slot gratuitamente, gli utenti non hanno nemmeno bisogno di un account sul sito. Passa il mouse sopra il logo di qualsiasi dispositivo nella riga e fai clic sul pulsante Riproduci.
              </p>
              <p class="about__text">
                Si consiglia di avviare un gioco gratuito per quei clienti che non vogliono rischiare i propri soldi.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">I nostri giochi sono destinati a un pubblico ADULTO dai 18 anni in su. Cliccando sul
            pulsante confermi la tua età.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Concordare</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>