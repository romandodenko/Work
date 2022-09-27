<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Casinò sociale per giochi di intrattenimento
              </h1>
              <p class="hero__text">
                Prova la gioia di giochi emozionanti sul nostro sito web
              </p>
              <a class="hero__link" href="#games">
                Giocare online
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            Chi siamo
          </h2>
          <div class="about__content">
            <div class="about__image" data-da=".about__item, 1200, first">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
            <div class="about__descr">
              <div class="about__item">
         <div>
          <p class="about__text">
            Il casinò ufficiale collabora solo con sviluppatori di software affidabili. I produttori certificati forniscono solo slot machine con licenza, le cui impostazioni soddisfano tutti i requisiti dell'industria del gioco d'azzardo.
          </p>
          <p class="about__text">
            La collezione include non solo slot a rulli. I clienti del casinò potranno giocare ai popolari simulatori di carte e tavoli senza registrazione e senza SMS. I giochi da tavolo online presentano una grafica realistica e un'ampia gamma di scommesse. Puoi verificarlo in pratica gratuitamente.
          </p>
         </div>
              </div>
              <p class="about__text">
                Le slot gratuite sono richieste dai nuovi arrivati ​​e dai clienti abituali del casinò. Dal momento che puoi giocare alle slot machine gratuitamente senza autorizzazione, la modalità di allenamento è completamente anonima. I dipendenti dell'Internet club non controllano la durata e i risultati delle sessioni di test.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
            Tutti i giochi
          </h2>
          <ul class="games__list">
            <li class="games__item" style="background-image: url(./img/game-1.png);">
              <a class="games__link" href="game-1.php">
                The Wild Machine
              </a>
            </li>
            <li class="games__item" style="background-image: url(./img/game-2.png);">
              <a class="games__link" href="game-2.php">
                Wild Robo 
              </a>
            </li>
            <li class="games__item" style="background-image: url(./img/game-3.png);">
              <a class="games__link" href="game-3.php">
                Twisted Turbine
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title">
            I nostri vantaggi
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Grafica impressionante
              </h2>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Incredibili effetti sonori  
              </h2>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Slot machine gratuite
              </h2>
            </li>
          </ul>
        </div>
      </section>
    </main>
<?php
include 'footer.php';
?>