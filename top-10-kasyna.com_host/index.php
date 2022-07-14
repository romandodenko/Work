<?php 
  include 'header.php';
?>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__body">
          <span class="hero__span">
            Kasyno społecznościowe
          </span>
          <h1 class="hero__title">
            Witamy w świecie rozrywki!
          </h1>
          <p class="hero__text">
            Na tej stronie znajdziesz bardzo dobre i obecnie popularne gry. Możesz grać w te gry za darmo.
          </p>
          <div class="hero__link">
            <a href="#slot">
              Zagraj teraz
            </a>
          </div>
        </div>
        <div class="hero__image">
          <img src="./img/hero/image.png" alt="Image">
        </div>
      </div>
    </section>
    <section class="benefit">
      <div class="benefit__container container">
        <ul class="benefit__list">
          <li class="benefit__item">
            <div class="benefit__descr">
              <h2 class="benefit__title">
                Bezpieczna gra
              </h2>
              <p class="benefit__text">
                Gry społecznościowe są grami całkowicie bezpiecznymi, nie są hazardem i nie powodują uzależnienia
              </p>
            </div>
            <div class="benefit__icon">
              <img src="./img/benefits/icon-1.png" alt="">
            </div>
          </li>
          <li class="benefit__item">
            <div class="benefit__descr">
              <h2 class="benefit__title">
                Graj na telefonie
              </h2>
              <p class="benefit__text">
                Gry na naszej stronie są dostępne na dowolnym urządzeniu, graj w dowolnym momencie.
              </p>
            </div>
            <div class="benefit__icon">
              <img src="./img/benefits/icon-2.png" alt="">
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="slots" id="slot">
      <div class="slots__container container">
        <h2 class="slots__title">
          Gry
        </h2>
        <ul class="slots__list">
          <li class="slots__item slots__item_big">
            <div class="slots__image">
              <img src="./img/slots/slot-1.jpg" alt="Slot image">
            </div>
            <a href="game-1.php"></a>
          </li>
          <li class="slots__item">
            <div class="slots__image">
              <img src="./img/slots/slot-2.jpg" alt="Slot image">
            </div>
            <a href="game-2.php"></a>
          </li>
          <li class="slots__item">
            <div class="slots__image">
              <img src="./img/slots/slot-3.jpg" alt="Slot image">
            </div>
            <a href="game-3.php"></a>
          </li>
        </ul>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <div class="about__content">
          <h2 class="about__title">
            O nas
          </h2>
          <div class="about__body">
            <p class="about__text">
              Rozrywka i gry są teraz dostępne nie tylko w zwykłych kasynach, ale także w Internecie. Nadszedł więc
              czas, aby znaleźć dobrą stronę, która oferuje szeroką gamę darmowych rozwiązań do gier na automatach. To
              kasyno online ma przyjazny dla użytkownika i spersonalizowany projekt, który jest po prostu niesamowity.
              Możesz doświadczyć estetycznej przyjemności po prostu przełączając się do gry i spędzając wolny czas z
              naszymi automatami do gry.
            </p>
            <p class="about__text">
              Wiemy, że najważniejszą rzeczą dla graczy jest szybka i bezbłędna gra. Dzięki temu nasi gracze mogą
              natychmiast i łatwo zabrać się do pracy, mając najprzyjemniejsze wrażenia z gry. Oferujemy wybór Twoich
              ulubionych gier od najlepszych dostawców w branży. Chcemy, aby Twoje wrażenia z gry były niezrównane.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div class="popup popup-active">
    <div class="popup__close"></div>

    <div class="popup__body">
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
  <?php 
  include 'footer.php';
?>
