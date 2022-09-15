<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
            <div class="hero__content">
              <div class="hero__image">
                <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
              </div>
              <div class="hero__body">
                <h1 class="hero__title">
                  Ekscytujące automaty do gier dla zabawy
                </h1>
                <a class="hero__link" href="#games">
                  Bawić się
                </a>
              </div>
            </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title">
            Zalety
          </h2>
            <ul class="benefits__list">
              <li class="benefits__item">
                <h3 class="benefits__subtitle">
                  Niesamowite gry
                </h3>
                <p class="benefits__text">
                  Ciesz się najlepszym wyborem gier online - automatami do gry! Całość otoczona jest piękną grafiką, której towarzyszą dynamiczne animacje, oszałamiające efekty dźwiękowe i muzyka.
                </p>
              </li>
              <li class="benefits__item">
                <h3 class="benefits__subtitle">
                  Gry bez rejestracji
                </h3>
                <p class="benefits__text">
                  Aby rozpocząć grę, wystarczy wejść na stronę i wybrać grę, którą lubisz. Kliknij przycisk odtwarzania i ciesz się.
                </p>
              </li>
              <li class="benefits__item">
                <h3 class="benefits__subtitle">
                  Wsparcie techniczne wokół
                </h3>
                <p class="benefits__text">
                  Nasz profesjonalny zespół z przyjemnością Ci pomoże, jeśli masz jakiekolwiek problemy z grami. Wsparcie działa 24/7, jesteśmy dostępni przez całą dobę
                </p>
              </li>
            </ul>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
           Gry
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
               <a href="game-1.php">
                <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
               </a>
              </div>
              <a class="games__link" href="game-1.php">
                <span>Bawić się</span>
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                <span>Bawić się</span>
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                <span>Bawić się</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            O nas
          </h2>
          <div class="about__content">
            <p class="about__text">
              Kasyna społecznościowe to nowoczesny trend hazardowy, który wyrósł z gier na wszelkiego rodzaju sieciach społecznościowych. Gry planszowe to przyjemny sposób na spędzenie wolnego czasu. Wypróbuj każdą maszynę bez ryzyka.
            </p>
            <p class="about__text">
              Naszym zadaniem jest stworzenie wyjątkowego portalu gamingowego, który zaspokoi potrzeby najbardziej wymagających koneserów automatów do gier z różnych krajów.
            </p>
            <p class="about__text">
              Być może najważniejszą misją dla nas jest utrzymanie nienagannej reputacji naszej firmy, gwarantowanie rzetelności i otwartości każdemu z naszych klientów oraz okazywanie maksymalnej lojalności w rozwiązywaniu każdego problemu!
              Ciesz się darmowymi grami na automatach z kolorową grafiką i efektami wysokiej jakości. Spróbuj szczęścia i zgarnij jackpota!
            </p>
          </div>
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