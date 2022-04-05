<?php 
  include 'header.php';
?>

<main>
  <section class="games-all">
    <div class="games-all__container container">
      <div class="games-all__body" data-aos="fade-down">
        <h2 class="games-all__title title">
          I nostri giochi
        </h2>
        <ul class="games-all__list">
          <li class="games-all__item">
            <div class="games-all__image">
              <picture><source srcset="./img/tanks.webp"type="image/webp"><img src="./img/tanks.jpg" alt="Tanks"></picture>
            </div>
            <div class="games-all__descr">
              <h3 class="games-all__subtitle">
               Carri armati
              </h3>
              <div class="games-all__links">
                <a class="games-all__play link" href="./tanks/index.html">Giocare</a>
                <a class="games-all__read link" href="tanks.html">Descrizione</a>
              </div>
            </div>
          </li>
          <li class="games-all__item">
            <div class="games-all__image">
              <picture><source srcset="./img/vertoleti.webp"type="image/webp"><img src="./img/vertoleti.jpg" alt="Helicopters"></picture>
            </div>
            <div class="games-all__descr">
              <h3 class="games-all__subtitle">
                Più veloce del vento
              </h3>
              <div class="games-all__links">
                <a class="games-all__play link" href="./helicopters/index.html">Giocare</a>
                <a class="games-all__read link" href="helicopters.html">Descrizione</a>
              </div>
            </div>
          </li>
          <li class="games-all__item">
            <div class="games-all__image">
              <picture><source srcset="./img/witcher.webp"type="image/webp"><img src="./img/witcher.jpg" alt="Witch"></picture>
            </div>
            <div class="games-all__descr">
              <h3 class="games-all__subtitle">
                Streghe ospitali
              </h3>
              <div class="games-all__links">
                <a class="games-all__play link" href="./witch/index.html">Giocare</a>
                <a class="games-all__read link" href="witcher.html">Descrizione</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php 
  include 'footer.php';
?>
