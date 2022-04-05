<?php 
  include 'header.php';
?>

<main>
  <section class="about">
    <div class="about__container container">
      <div class="about__body" data-aos="fade-right">
        <h1 class="about__title title">
          Parliamo di noi
        </h1>
        <p class="about__text text">
          Benvenuto nel nostro social casino Alotaams-it! Presentiamo alla vostra attenzione i migliori giochi! Il nostro social casino è completamente gratuito, non c'è possibilità di perdere soldi. Puoi giocare senza registrazione, seleziona il gioco e vai.
        </p>
      </div>
    </div>
  </section>
  <section class="games">
    <div class="games__container container">
      <div class="games__body" data-aos="fade-left">
        <h2 class="games__title title">
          I nostri giochi
        </h2>
        <ul class="games__list">
          <li class="games__item">
            <div class="games__image">
              <picture><source srcset="./img/tanks.webp"type="image/webp"><img src="./img/tanks.jpg" alt="Tanks"></picture>
            </div>
            <div class="games__descr">
              <h3 class="games__subtitle">
               Carri armati
              </h3>
              <div class="games__links">
                <a class="games__play link" href="./tanks/index.html">Giocare</a>
                <a class="games__read link" href="tanks.html">Descrizione</a>
              </div>
            </div>
          </li>
          <li class="games__item">
            <div class="games__image">
              <picture><source srcset="./img/vertoleti.webp"type="image/webp"><img src="./img/vertoleti.jpg" alt="Helicopters"></picture>
            </div>
            <div class="games__descr">
              <h3 class="games__subtitle">
                Più veloce del vento
              </h3>
              <div class="games__links">
                <a class="games__play link" href="./helicopters/index.html">Giocare</a>
                <a class="games__read link" href="helicopters.html">Descrizione</a>
              </div>
            </div>
          </li>
        </ul>
        <div class="games__wrapper-all">
          <a class="games__all link" href="games.html">Vedi tutto</a>
        </div>
      </div>
    </div>
  </section>
  <section class="news">
    <div class="news__container container">
      <div class="news__body" data-aos="fade-right">
        <h2 class="news__title title">
          Novità del nostro casinò sociale
        </h2>
        <div class="news__news">
          <div class="news__image">
            <picture><source srcset="./img/news.webp"type="image/webp"><img src="./img/news.jpg" alt="news"></picture>
          </div>
          <h3 class="news__subtitle subtitle">
            Annuncio: il torneo inizierà prestыo!
          </h3>
          <p class="news__text text">
            Il torneo si svolgerà a breve. Poco dopo, ci saranno ulteriori informazioni. Chiunque può partecipare a questo torneo. I premi saranno fiches che potrai spendere per far salire di livello il tuo profilo. Partecipa, vinci, aggiorna!
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php 
  include 'footer.php';
?>
