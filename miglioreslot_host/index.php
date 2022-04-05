<?php 
  include 'header.php';
?>
<main>
    <section class="slider">
      <div class="slider__container container">
        <div class="slider__swiper slider-swiper">
          <ul class="slider-swiper__wrapper swiper-wrapper">
            <li class="slider-swiper__slide swiper-slide">
              <picture><source srcset="./img/img1.webp"type="image/webp"><img src="./img/img1.jpg" alt="Img"></picture>
            </li>
            <li class="slider-swiper__slide swiper-slide">
              <picture><source srcset="./img/img2.webp"type="image/webp"><img src="./img/img2.jpg" alt="Img"></picture>
            </li>
            <li class="slider-swiper__slide swiper-slide">
              <picture><source srcset="./img/img3.webp"type="image/webp"><img src="./img/img3.jpg" alt="Img"></picture>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="about__container container">
          <h1 class="about__title">
            Chi siamo
          </h1>
          <p class="about__text">
            Siamo un casinò sociale MIGLIORESLOT. Offriamo i migliori giochi interessanti. Non è necessario registrarsi per giocare. Scegli il tuo gioco preferito e vai alla vittoria!
          </p>
          <div class="about__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
          </div>
          <h2 class="about__subtitle">
            Parliamo un po' dei casinò social:
          </h2>
          <p class="about__text">
            Il social casino è uno dei giochi più popolari su Internet. A differenza dei casinò con soldi veri, non devi pagare soldi per giocare. Tutto quello che devi fare è creare un account e iniziare a giocare. È anche possibile giocare senza registrazione. Il casinò sociale è adatto per l'allenamento e un piacevole passatempo dal trambusto della vita.
          </p>
      </div>
    </section>
    <section class="games">
      <div class="games__container container">
        <h2 class="games__title">
          Giochi
        </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <picture><source srcset="./img/games1.webp"type="image/webp"><img src="./img/games1.png" alt="Games"></picture>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle">
                  Slot-gratis-mega-fortunati-1
                </h3>
                <p class="games__text">
                  Prova a vincere nel nostro gioco, dove ti servono non solo abilità, ma anche fortuna!
                </p>
                <div class="games__link-wrapper">
                  <a class="games__link" href="#">Giocare</a>
                </div>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <picture><source srcset="./img/games2.webp"type="image/webp"><img src="./img/games2.png" alt="Games"></picture>
              </div>
              <div class="games__descr">
                <h3 class="games__subtitle">
                  Slot-gratis-mega-fortunati-2
                </h3>
                <p class="games__text">
                  Dai, mostraci cosa sai fare. Avanti verso la vittoria o perdi con dignità!
                </p>
                <div class="games__link-wrapper">
                  <a class="games__link" href="#">Giocare</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </section>
    <section class="vantaggi">
      <div class="vantaggi__container container">
        <h2 class="vantaggi__title">
          Vantaggi
        </h2>
        <div class="vantaggi__body">
          <div class="vantaggi__image">
            <picture><source srcset="./img/vantaggi1.webp"type="image/webp"><img src="./img/vantaggi1.png" alt="Vantaggi"></picture>
          </div>
          <ul class="vantaggi__list">
            <li class="vantaggi__item">
              <p class="vantaggi__text">
                1) Possibilità di giocare gratuitamente.
              </p>
            </li>
            <li class="vantaggi__item">
              <p class="vantaggi__text">
                2) I giochi migliori e interessanti.
              </p>
            </li>
            <li class="vantaggi__item">
              <p class="vantaggi__text">
                3) Possibilità di giocare da qualsiasi parte del mondo.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
</main>
<?php 
  include 'footer.php';
?>