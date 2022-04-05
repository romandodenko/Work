
<?php 
include 'header.php';
?>
<main>
  <section class="background-site">
    <h1 class="background-site__title">Background-site</h1>
    <div class="background-site__background">
      <picture><source srcset="./img/background.webp"type="image/webp"><img src="./img/background.png" alt="Background"></picture>
    </div>
  </section>
  <section class="about">
    <div class="about__container container">
      <h1 class="about__title title">
        Porozmawiajmy o nas
      </h1>
      <p class="about__text text">
        Dostęp do gier można uzyskać z dowolnego miejsca na świecie, a do ich uruchomienia wymagany jest telefon lub komputer.
      </p>
      <p class="about__text text">
        Istnieją dwa rodzaje kasyn społecznościowych: bezpłatne i płatne, w których możesz grać na prawdziwe pieniądze. Nasze kasyno społecznościowe jest całkowicie darmowe, więc świetnie nadaje się do zabawy i nauki.
      </p>
      <p class="about__text text">
        Nasze kasyno społecznościowe jest wyjątkowe i opiera się na zasadzie w pełni responsywnego projektu dla wszystkich urządzeń. Otrzymujesz pełną funkcjonalność zarówno na komputerach stacjonarnych, jak i urządzeniach mobilnych.
      </p>
    </div>
  </section>
  <section class="blog">
    <div class="blog__container container">
      <h2 class="blog__title title">
        Nasz blog
      </h2>
      <ul class="blog__list">
        <li class="blog__item">
          <div class="blog__image">
            <picture>
            <source media="(min-width: 1024px)" srcset="./img/blog1.webp" type="image/webp">
            <source media="(min-width: 600px)" srcset="./img/blog1-600.jpg" type="image/jpg">
            <source media="(min-width: 600px)" srcset="./img/blog1-600.webp" type="image/webp">
            <source media="(max-width: 600px)" srcset="./img/blog1-300.jpg" type="image/jpg">
            <source media="(max-width: 600px)" srcset="./img/blog1-300.webp" type="image/webp">
            <img src="./img/blog1.jpg" alt="Blog picture">
            </picture>
          </div>
          <div class="blog__descr">
            <h3 class="blog__subtitle subtitle">
              Popularne aplikacje symulatorów gier hazardowych 
            </h3>
            <p class="blog__subtext text">
              Symulator gier hazardowych to gra podobna do prawdziwego kasyna, ale bez inwestycji finansowych. Gra odwzorowuje funkcje kasyna, a gracze rywalizują ze sobą, aby zdobyć jak najwyższy wynik. Chociaż rozgrywka w kasynie offline jest dość realistyczna, nie ma w niej zwrotów akcji, a szanse na wygraną zależą od umiejętności gracza i losowości gier. Oto kilka najpopularniejszych dostępnych symulatorów gier hazardowych. Możesz wybrać rodzaj gry, w którą chcesz zagrać, w zależności od swoich preferencji.
            </p>
            <a class="blog__sublink link" href="blog-one.php">Przeczytaj w całości</a>
          </div>
        </li>
      </ul>
      <div class="blog__wrapper-link">
        <a class="blog__link" href="blog.php">Zobacz wszystkie artykuły</a>
      </div>
    </div>
  </section>
  <section class="game">
    <div class="game__container container">
      <h2 class="game__title title">Nasze gry</h2>
      <ul class="game__list">
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Zabawna piłka nożna</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-1/index.html">Grać</a>
            <a class="game__more" href="game-one.php">Więcej</a>
          </div>
        </li>
        <li class="game__item item-hover">
          <h3 class="game__subtitle subtitle">Zimna przestrzeń</h3>
          <div class="game__image">
            <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Game"></picture>
          </div>
          <div class="game__buttons">
            <a class="game__play" href="./game-2/index.html">Grać</a>
            <a class="game__more" href="game-two.php">Więcej</a>
          </div>
        </li>
      </ul>
      <div class="game__wrapper-link">
        <a class="game__link" href="game.php">Pokaż wszystkie gry</a>
      </div>
    </div>
  </section>
</main>
<?php 
include 'footer.php';
?>