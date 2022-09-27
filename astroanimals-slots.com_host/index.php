<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <span class="main__span">
                Varie slot machine
              </span>
              <h1 class="main__title">
                Giochi da tavolo gratuiti per divertimento
              </h1>
              <p class="main__text">
                Ci sono milioni di modi per divertirsi e rilassarsi nel mondo. Uno di questi sono le slot machine.
              </p>
              <a class="main__link" href="#games">
                Riproduci ora
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="plus" id="benefits">
        <div class="plus__container container">
            <ul class="plus__list">
              <li class="plus__item">
                <span class="plus__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </span>
                <p class="plus__text">
                  Giocare alle slot machine gratis senza registrazione è un'opportunità per scommettere su crediti virtuali senza correre il rischio di perdere. Possiamo evidenziare i pro ei contro di questa modalità.
                </p>
              </li>
              <li class="plus__item">
                <span class="plus__icon">
                  <img src="./img/icon-2.svg" alt="Icon">
                </span>
                <p class="plus__text">
                  Tutti i nuovi giochi online sono disponibili sul nostro sito Web e puoi giocare ai social games gratuitamente in qualsiasi momento della giornata senza registrazione.
                </p>
              </li>
              <li class="plus__item">
                <span class="plus__icon">
                  <img src="./img/icon-3.svg" alt="Icon">
                </span>
                <p class="plus__text">
                  I giocatori possono scegliere uno slot adatto in base a una varietà di criteri. Tutte le proprietà sono piuttosto importanti e il giocatore deve decidere da solo cosa è più necessario per lui.
                </p>
              </li>
            </ul>
            <div class="plus__image">
              <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
            </div>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item slots__item_1" style="background-image: url(./img/game-1.jpg);">
              <div class="slots__descr">
                <a class="slots__link" href="game-1.php">
                  Crystal Sun
                </a>
                <a class="slots__play" href="game-1.php">
                    Giocare
                </a>
              </div>
            </li>
            <li class="slots__item" style="background-image: url(./img/game-2.png);">
              <div class="slots__descr">
                <a class="slots__link" href="game-2.php">
                  Diamond Vortex
                </a>
                <a class="slots__play" href="game-2.php">
                    Giocare
                </a>
              </div>
            </li>
            <li class="slots__item" style="background-image: url(./img/game-3.png);">
              <div class="slots__descr">
                <a class="slots__link" href="game-3.php">
                  Space Rocks
                </a>
                <a class="slots__play" href="game-3.php">
                    Giocare
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="nas" id="about">
        <div class="container">
            <div class="nas__content">
              <p class="nas__text">
                Il nostro sito non richiede la registrazione e il riempimento del conto in quanto le scommesse vengono effettuate in crediti condizionali. Quindi, i giochi sociali sono pensati per i giocatori che preferiscono non spendere i propri soldi, ma anche non rifiutano l'intrattenimento. Questo sito contiene slot machine gratuite da giocare su computer o smartphone solo a scopo di intrattenimento.
                Gli abitanti del pianeta ora possono giocare gratuitamente su Internet alle nuove slot machine sovietiche e di alta qualità, ma prima non erano così accessibili. Giocare alle slot gratuite è diventato popolare grazie alla sua semplicità, all'interfaccia chiara e alle regole.
              </p>
              <p class="nas__text">
                Il principale vantaggio del social gaming è l'opportunità di “giocare gratis”, per così dire, soprattutto per i paesi con divieto di gioco. È impossibile limitare Internet, quindi le slot machine gratuite con la possibilità di giocare online sono la scelta migliore per milioni di persone. Naturalmente, anche il comfort è importante: puoi iniziare la tua pagina preferita su un morbido divano, nel bar più vicino e persino al lavoro quando hai tempo libero.
              </p>
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