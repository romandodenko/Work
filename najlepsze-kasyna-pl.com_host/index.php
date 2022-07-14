<?php 
  include 'header.php';
?>
  <main>
    <div class="popup popup-active">
      <div class="popup__close"></div>
  
      <div class="popup__body">
        <div class="popup__logo">
          <img src="./img/logotip.png" alt="logotip">
        </div>
        <form class="popup__form" action="/">
          <p class="popup__text">Ta strona jest przeznaczona dla dorosłych użytkowników.
            <span>Czy masz ukończone 18 lat?</span></p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <button class="popup__button">Tak</button>
        </form>
      </div>
    </div>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__content">
          <span class="hero__span">
            Przygotuj się na grę w niesamowite darmowe gry na automatach w różnych i interesujących miejscach
          </span>
          <h1 class="hero__title">
            Witamy w największej na świecie przygodzie na automaty!
          </h1>
          <div class="hero__wrapper-link">
            <a class="hero__link" href="#game">
              Oglądaj automaty
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="page-body">
      <div class="about" id="about">
        <div class="about__container container">
          <h2 class="about__title">
            Trochę o nas
          </h2>
          <div class="about__content">
            <div class="about__descr">
            <p class="about__text">
              Darmowe automaty są uważane za jeden z najlepszych rodzajów darmowych gier kasynowych online i są bardzo popularne w dzisiejszej branży gier kasynowych. Ich rozpowszechnienie tłumaczy się tym, że darmowe automaty do gier online pozwalają graczom grać w swoje ulubione gry bez pobierania i rejestracji. Ta bardzo przydatna funkcja zapewnia dostęp do najbardziej ekscytujących i ekscytujących automatów wideo bez pobierania, w których możesz grać za darmo.
            </p>
            <p class="about__text">
              Ogromny wybór darmowych slotów - nie jest wymagany depozyt
              Możesz wypróbować każdy automat online na wirtualne pieniądze. W ten sposób możesz dowiedzieć się, czy podoba Ci się rozgrywka, motyw i zakres zakładów oraz mieć wspaniałe wrażenia z gry bez zaangażowania finansowego.
            </p>
          </div>
            <div class="about__image">
              <img src="./img/about/img.jpg" alt="Image">
            </div>
          </div>
        </div>
      </div>
      <div class="benefits">
          <div class="benefits__container container">
            <ul class="benefits__list">
              <li class="benefits__item benefits__item_1">
                <h2 class="benefits__title">
                  Najlepszy na świecie wybór automatów demo i darmowych automatów online!
                </h2>
                <p class="benefits__text">
                  Naszym celem jest zapewnienie graczom slotów z całego świata najlepszych darmowych gier slotowych online.
                </p>
              </li>
              <li class="benefits__item benefits__item_2">
                <h2 class="benefits__title">
                  Automaty do gier nie uzależniają
                </h2>
                <p class="benefits__text">
                  Główną zaletą naszych automatów do gier jest to, że gry nastawione są wyłącznie na rozrywkę.
                </p>
              </li>
            </ul>
          </div>
      </div>
      <div class="game" id="game">
        <div class="game__container container">
          <h2 class="game__title">
            Nasze automaty
          </h2>
          <div class="game__wrapper-swiper">
          <div class="game__swiper game-swiper swiper">
          <div class="swiper-wrapper game-swiper__wrapper">
          <div class="swiper-slide game-swiper__slide">
              <div class="game-swiper__image">
                <img src="./img/game/game-1.jpg" alt="Image game">
              </div>
              <a class="game-swiper__link" href="game-1.php"></a>
          </div>
          <div class="swiper-slide game-swiper__slide">
            <div class="game-swiper__image">
              <img src="./img/game/game-2.jpg" alt="Image game">
            </div>
            <a class="game-swiper__link" href="game-2.php"></a>
        </div>
        <div class="swiper-slide game-swiper__slide">
          <div class="game-swiper__image">
            <img src="./img/game/game-3.jpg" alt="Image game">
          </div>
          <a class="game-swiper__link" href="game-3.php"></a>
      </div>
          </div>
          </div>
          <div class="game__controls">
            <button class="game-swiper__prev"><span></span></button>
            <button class="game-swiper__next"><span></span></button>
          </div>
        </div>
        </div>
      </div>
      <?php 
  include 'footer.php';
?>