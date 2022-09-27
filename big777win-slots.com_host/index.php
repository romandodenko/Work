<?php
include 'header.php';
?>
    <main>
      <section class="up">
        <div class="container">
          <div class="up__content">
            <div class="up__body">
              <h1 class="up__title">
                Z przyjemnością spędzaj wolny czas
              </h1>
              <p class="up__text">
                Gry społecznościowe to darmowe i wysokiej jakości automaty do gier.
              </p>
              <a class="up__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="fits" id="benefits">
        <div class="fits__container container">
          <ul class="fits__list">
            <li class="fits__item">
              <h2 class="fits__title">
                Tematyczne gry fabularne
              </h2>
              <p class="fits__text">
                Nowoczesna prezentacja gier, teraz możesz podziwiać nowe postacie, które są zupełnie inne od starych klasycznych gier. Zupełnie nowa grafika zaskoczy Cię
              </p>
            </li>
            <li class="fits__item">
              <h2 class="fits__title">
                Graj bez ryzyka dla portfela
              </h2>
              <p class="fits__text">
                Grając w gry społecznościowe absolutnie nie ryzykujesz własnymi pieniędzmi. Wirtualne pieniądze automatycznie pojawiają się na Twoim koncie.
              </p>
            </li>
            <li class="fits__item">
              <h2 class="fits__title">
                Rejestracja nie jest wymagana
              </h2>
              <p class="fits__text">
                Nie musisz wprowadzać żadnych swoich danych, aby grać, po prostu wejdź na stronę i zacznij grać.
              </p>
            </li>
          </ul>
          <div class="fits__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="stronie" id="about">
        <div class="container">
          <div class="stronie__content">
          <h2 class="stronie__title">
            O naszej stronie
          </h2>
          <div class="stronie__body">
            <div class="stronie__column">
              <p class="stronie__text">
                Na naszej stronie znajdują się wyłącznie darmowe automaty do gier, które nie wymagają rejestracji, pobierania oprogramowania i wysyłania SMS-ów. Wybierz slot z poniższej listy, a automatycznie uruchomi się on na stronie. Jest to bardzo wygodne, jeśli szukasz czegoś nowego lub chcesz spróbować szczęścia bez narażania własnych pieniędzy. Jedyną wadą takiej gry jest brak możliwości wygrania prawdziwych pieniędzy.
              </p>
              <p class="stronie__text">
                Jesteśmy pewni, że w całej różnorodności automatów do gier znajdziesz coś, co będzie dla Ciebie interesujące. I jestem pewien, że zechcesz wrócić na naszą stronę.
              </p>
            </div>
            <div class="stronie__column">
              <p class="stronie__text">
                Gry społecznościowe oferują wiele witryn. Naszym zadaniem jest łączenie darmowych gier w jednym miejscu. Spójrz poniżej, a zobaczysz wybór producentów, których automaty do gry oferujemy do gry. Nie przypomnę, że wszystkie te rozrywki są dla Ciebie darmowe!
              </p>
              <p class="stronie__text">
                Automaty, z wyjątkiem PC, działają na telefonach i tabletach. Dla wygody twórcy witryny kasyna stworzyli wersję mobilną, która dostosowuje się do dowolnej rozdzielczości ekranu.
              </p>
            </div>
          </div>
          </div>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="game-1.php">
                The Paying Piano Club
              </a>
              <p class="slots__text">
                Gra na automatach
              </p>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="game-2.php">
                Twin Spin
              </a>
              <p class="slots__text">
                Gra na automatach
              </p>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="game-3.php">
                Big Win 777
              </a>
              <p class="slots__text">
                Gra na automatach
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Nasze gry są przeznaczone dla DOROSŁYCH odbiorców w wieku 18 lat i starszych. Klikając na
            przycisk potwierdzasz swój wiek.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Zgodzić się</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>