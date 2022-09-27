<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Społecznościowe kasyno online. <span>Graj i wygrywaj wirtualne nagrody</span>
              </span>
              <h1 class="hero__title">
                Najlepsze gry i automaty do rozrywki
              </h1>
              <a class="hero__link" href="#games">
                Bawić się
              </a>
            </div>
            <div class="hero__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/benefits-1.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Całkowicie darmowy slot
              </h2>
              <p class="benefits__text">
                Graj na naszych automatach całkowicie za darmo, bez żadnego ryzyka. Kasyno społecznościowe zapewnia dowolne gry i automaty bez wpłacania pieniędzy.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/benefits-2.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Ekskluzywny wybór gier
              </h2>
              <p class="benefits__text">
                Tylko u nas znajdziesz najlepsze i ekskluzywne automaty do gier. Tutaj znajdziesz wiele ciekawych i ekscytujących gier, które doskonale umilą Twój wolny czas.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            O nas
          </h2>
          <p class="about__text">
            Turn your fortuneegy witryna społecznościowa kasyna zaprojektowana w celu zapewnienia graczom bezpiecznej przestrzeni dla bezpłatnych, wysokiej jakości witryn kasynowych. Tak, masz rację – oferujemy gry kasynowe, w które możesz grać całkowicie za darmo. Nie wymaga depozytu! Oznacza to, że możesz cieszyć się pierwszorzędnymi grami, nie martwiąc się o równowagę i całkowicie skupiając się na grach.
          </p>
          <p class="about__text">
            Graj w tyle gier, ile chcesz i nigdy nie trać przy tym pieniędzy. Nie musisz nawet tworzyć konta. Tylko dlatego, że te gry są bezpłatne, nie oznacza to, że brakuje im jakości. Każda gra na naszej stronie została stworzona z niesamowitą dbałością o szczegóły przez znanych twórców oprogramowania. Wszystkie gry mają grafikę HD i wyraźne efekty dźwiękowe, a także ciekawe historie i zabawne motywy.
          </p>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <a href="game-1.php">
                <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Game"></picture>
              </a>
            </li>
            <li class="games__item">
              <a href="game-2.php">
                <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
              </a>
            </li>
            <li class="games__item">
              <a href="game-3.php">
                <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Game"></picture>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
<?php
include 'footer.php';
?>