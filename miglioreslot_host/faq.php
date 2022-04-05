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
    <section class="faq">
      <div class="faq__container container">
        <ul data-spollers data-one-spoller class="faq__list">
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Come iniziare a giocare?<span></span></button>
            <div class="faq__descr">
              <p class="faq__text">Per iniziare a giocare, devi scegliere il gioco che ti piace e iniziare a giocare. Tutto è semplice. Per giocare non è necessaria la registrazione.</p>
            </div>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Devo registrarmi per giocare?<span></span></button>
            <div class="faq__descr">
              <p class="faq__text">Per giocare non è necessaria la registrazione.</p>
            </div>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Se ho dimenticato la mia password, cosa devo fare?<span></span></button>
            <div class="faq__descr">
              <p class="faq__text">Per recuperare la tua password, devi inviarci un'e-mail <a class="faq__link" href="mailto:admin@support.ru">admin@support.ru</a></p>
            </div>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Che cos'è un casinò sociale?<span></span></button>
            <div class="faq__descr">
              <p class="faq__text">Il social casino è uno dei giochi più popolari su Internet. A differenza dei casinò con soldi veri, non devi pagare soldi per giocare. Adatto per l'allenamento e per il divertimento.</p>
            </div>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Quali sono i tipi di casinò social?<span></span></button>
            <div class="faq__descr">
              <p class="faq__text">Esistono due tipi principali di giochi da casinò social: giochi gratuiti e giochi con soldi veri.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
<?php 
  include 'footer.php';
?>