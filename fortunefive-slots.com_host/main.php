<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Najlepsze automaty online dla zabawy
              </span>
              <h1 class="hero__title">
                Darmowe maszyny rozrywkowe
              </h1>
              <div class="hero__wrapper-link" data-da=".hero__content, 991, last">
                <a class="hero__link" href="#games">
                  Graj za darmo
                </a>
              </div>
            </div>
            <div class="hero__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title title">
            Nasze atuty
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <div class="benefits__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </div>
              </div>
              <h3 class="benefits__subtitle">
                Bez pobierania
              </h3>
              <p class="benefits__text">
                Zacznij grać bez zbędnych ruchów, po prostu wybierz dowolną grę i zagraj.
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <div class="benefits__icon">
                  <img src="./img/icon-2.svg" alt="Icon">
                </div>
              </div>
              <h3 class="benefits__subtitle">
                Bez rejestracji
              </h3>
              <p class="benefits__text">
                Nasza strona nie wymaga rejestracji, co znacznie upraszcza rozgrywkę. Zacznij grać już teraz.
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <div class="benefits__icon">
                  <img src="./img/icon-3.svg" alt="Icon">
                </div>
              </div>
              <h3 class="benefits__subtitle">
                Gry są darmowe
              </h3>
              <p class="benefits__text">
                Jeśli nie chcesz wydawać pieniędzy, to nasze automaty są tym, czego potrzebujesz, gry nie wymagają inwestycji.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title title">
            Nasze gry
          </h2>
          <ul class="games__list">
            <li class="games__item games__item_1">
              <a class="games__link" href="game-1.php">
                <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
              </a>
            </li>
            <li class="games__item games__item_2">
              <a class="games__link" href="game-2.php">
                <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
              </a>
            </li>
            <li class="games__item games__item_3">
              <a class="games__link" href="game-3.php">
                <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title">
            O nas
          </h2>
          <div class="about__content">
            <div class="about__column">
              <h3 class="about__subtitle">
                Wolne gniazda
              </h3>
              <p class="about__text">
                Popularne automaty do gry są dostępne na naszej stronie całkowicie za darmo. Jeśli nie jesteś gotowy, aby ryzykować własnymi pieniędzmi, nasze gry na automatach są dla Ciebie najlepszym rozwiązaniem. Tutaj znajdziesz najnowocześniejsze automaty z zapierającą dech w piersiach grafiką. Nasze automaty różnią się od klasycznych własnym motywem, kilka razy gra się ciekawiej.
              </p>
            </div>
            <div class="about__column">
              <h3 class="about__subtitle">
                Po co grać w darmowe automaty
              </h3>
              <p class="about__text">
                Darmowe automaty są dostępne dla każdego, kto chce poznać funkcjonalność urządzenia i dobrze się bawić.W trakcie gry użytkownicy poznają zasady, zdobywają umiejętności i starają się opracować zwycięską strategię.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php 
    include 'footer.php';
  ?>