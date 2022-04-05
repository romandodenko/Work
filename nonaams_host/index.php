<?php 
  include 'header.php';
?>
    <main>
      <section class="parallax">
        <div class="parallax__container container">
          <div class="parallax__about about">
            <h1 class="about__title title">
              Chi siamo
            </h1>
            <p class="about__text text">
              Questo è un nuovo livello di giochi! Il nostro social casino è stato creato per i giocatori che non vogliono perdere tutto a causa del gioco d'azzardo. Usiamo giochi senza la possibilità di guadagnare soldi veri. Allo stesso tempo, ti divertirai giocando ai nostri giochi, godendoti il ​​processo di gioco.
            </p>
            <p class="about__text text">
              Abbiamo la registrazione online, ma puoi anche giocare come ospite se non sei un utente registrato.
            </p>
          </div>
        </div>
        <div class="parallax__body">
          <div class="parallax__images images-parallax">
            <div class="images-parallax__item">
              <div class="images-parallax__clouds"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="games">
        <div class="games__container container">
          <h2 class="games__title title">
            Giochi
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <picture><source srcset="./img/egypt.webp"type="image/webp"><img src="./img/egypt.png" alt="Game"></picture>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle">
                  Faraoni egizi
                </h3>
                <div class="games__links">
                  <a class="games__play link" href="./game-1/index.html">Giocare</a>
                  <a class="games__more link" href="game-one.php">Descrizione</a>
                </div>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <picture><source srcset="./img/okean.webp"type="image/webp"><img src="./img/okean.png" alt="Game"></picture>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle">
                  Mondo sottomarino
                </h3>
                <div class="games__links">
                  <a class="games__play link" href="./game-2/index.html">Giocare</a>
                  <a class="games__more link" href="game-two.php">Descrizione</a>
                </div>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <picture><source srcset="./img/hunting.webp"type="image/webp"><img src="./img/hunting.png" alt="Game"></picture>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle">
                  A caccia
                </h3>
                <div class="games__links">
                  <a class="games__play link" href="./game-3/index.html">Giocare</a>
                  <a class="games__more link" href="game-third.php">Descrizione</a>
                </div>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <picture><source srcset="./img/300-spartans.webp"type="image/webp"><img src="./img/300-spartans.png" alt="Game"></picture>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle">
                  300 spartani
                </h3>
                <div class="games__links">
                  <a class="games__play link" href="./game-4/index.html">Giocare</a>
                  <a class="games__more link" href="game-four.php">Descrizione</a>
                </div>
              </div>
            </li>
          </ul>
          <div class="games__wrapper-all">
            <a class="games__all link" href="game-all.php">Visualizza tutti i giochi</a>
          </div>
        </div>
      </section>
        <section class="blog">
          <div class="blog__container container">
            <h2 class="blog__title title">
              Articoli
            </h2>
            <ul class="blog__list">
              <li class="blog__item">
                <div class="blog__image">
                  <picture><source srcset="./img/blog1.webp"type="image/webp"><img src="./img/blog1.png" alt="Blog"></picture>
                </div>
                <div class="blog__descr">
                  <h3 class="blog__subtitle subtitle">
                    Come vincere alla grande giocando alle slot gratuite
                  </h3>
                  <p class="blog__text text">
                    Le slot gratuite sono molto simili alle slot machine che si trovano sulla Las Vegas Strip, e sono un modo molto popolare per praticare la vostra strategia. Molte persone amano anche il gioco gratuito perché permette loro di rilassarsi e sperimentare il divertimento e l'eccitazione del casinò senza rischiare alcun denaro. Potete giocare alle slot gratuite per provare nuove strategie o semplicemente per divertirvi. Questo articolo vi mostrerà come vincere alla grande giocando alle slot gratuite. Continuate a leggere per saperne di più su come vincere alla grande senza rischi.
                  </p>
                  <a class="blog__link link" href="blog-str-one.php">Leggere</a>
                </div>
              </li>
              <li class="blog__item">
                <div class="blog__image">
                  <picture><source srcset="./img/blog2.webp"type="image/webp"><img src="./img/blog2.png" alt="Blog"></picture>
                </div>
                <div class="blog__descr">
                  <h3 class="blog__subtitle subtitle">
                    Nuovo rapporto sul gioco d'azzardo simulato
                  </h3>
                  <p class="blog__text text">
                    Un nuovo rapporto di mercato sull'industria globale del casinò sociale è stato rilasciato da Market Study Report LLC. Il rapporto fornisce una panoramica del mercato attuale per i giochi di casinò sociali, comprese le tendenze dei prezzi, i driver di mercato chiave e il panorama competitivo. Valuta anche il contributo dei principali concorrenti, tra cui Google, Facebook e Microsoft. Di seguito sono elencati alcuni dei principali attori del settore e come si classificano in termini di entrate e quote di mercato. Per saperne di più, continuate a leggere!
                  </p>
                  <a class="blog__link link" href="blog-str-two.php">Leggere</a>
                </div>
              </li>
            </ul>
            <div class="blog__wrapper-all">
              <a class="blog__all link" href="blogs.php">Vedi tutti gli articoli</a>
            </div>
          </div>
        </section>
    </main>
    <?php 
  include 'footer.php';
?>
