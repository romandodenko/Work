<?php
include 'header.php';
?>
<main>
  <section class="main">
    <div class="container">
      <div class="main__content">
        <div class="main__body">
          <span class="main__span">
            Spróbuj czegoś wyjątkowego
          </span>
          <h1 class="main__title">
            Najlepsza kolekcja automatów w kasynie online
          </h1>
          <p class="main__text">
            Oferujemy darmowy, ciekawy wypoczynek dla miliona graczy, przeżyj ekscytujące gry.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="kryto" id="benefits">
    <div class="container">
      <ul class="kryto__list">
        <li class="kryto__item">
          <span class="kryto__icon">
            <picture>
              <source srcset="./img/icon.webp" type="image/webp"><img src="./img/icon.png" alt="Icon"></picture>
          </span>
          <h2 class="kryto__title">
            Gry bez pobierania
          </h2>
          <p class="kryto__text">
            Gry są dostępne online, wystarczy dobre połączenie z Internetem, aby zacząć grać.
          </p>
        </li>
        <li class="kryto__item">
          <span class="kryto__icon">
            <picture>
              <source srcset="./img/icon.webp" type="image/webp"><img src="./img/icon.png" alt="Icon"></picture>
          </span>
          <h2 class="kryto__title">
            Darmowa rozrywka
          </h2>
          <p class="kryto__text">
            Nie ryzykuj swoich pieniędzy i baw się podwójnie
          </p>
        </li>
        <li class="kryto__item">
          <span class="kryto__icon">
            <picture>
              <source srcset="./img/icon.webp" type="image/webp"><img src="./img/icon.png" alt="Icon"></picture>
          </span>
          <h2 class="kryto__title">
            Nowoczesne gry
          </h2>
          <p class="kryto__text">
            Jeśli jesteś zmęczony klasycznymi automatami i kiepską grafiką, nasza strona jest tym, co Ci pomoże
          </p>
        </li>
      </ul>
    </div>
  </section>
  <section class="play" id="games">
    <div class="container">
      <ul class="play__list">
        <li class="play__item">
          <div class="play__image">
            <a href="game-1.php">
              <picture>
                <source srcset="./img/game-1.webp" type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
            </a>
          </div>
          <a class="play__link" href="game-1.php">
            Golden Colis
          </a>
          <a class="play__play" href="game-1.php">
            Bawić się
          </a>
        </li>
        <li class="play__item">
          <div class="play__image">
            <a href="game-2.php">
              <picture>
                <source srcset="./img/game-2.webp" type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
            </a>
          </div>
          <a class="play__link" href="game-2.php">
            Showdown saloon
          </a>
          <a class="play__play" href="game-2.php">
            Bawić się
          </a>
        </li>
        <li class="play__item">
          <div class="play__image">
            <a href="game-3.php">
              <picture>
                <source srcset="./img/game-3.webp" type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
            </a>
          </div>
          <a class="play__link" href="game-3.php">
            Dead or Alive
          </a>
          <a class="play__play" href="game-3.php">
            Bawić się
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section class="o-nas" id="about">
    <div class="o-nas__container container">
      <div class="o-nas__descr">
        <p class="o-nas__text">
          Za dotknięciem przycisku znajdziesz wszystko, czego potrzebujesz. Nasze podejście skoncentrowane na
          urządzeniach mobilnych zapewnia doskonałe wrażenia użytkownika w Twojej dłoni. Uzyskaj dostęp do naszych gier
          z dowolnego miejsca na świecie i graj na dowolnym automacie, dzięki ogromnemu wyborowi gier, które mamy. Nie
          ma znaczenia, czy dopiero zaczynasz grać, czy jesteś już doświadczonym graczem. W naszym kasynie online
          znajdziesz wszystko, czego szukasz. Ciesz się wyjątkowymi wrażeniami z gry, które łączą zabawę i szansę na
          wygranie wirtualnych nagród.
        </p>
        <p class="o-nas__text">
          Kasyna społecznościowe to nowoczesny trend hazardowy, który wyrósł z gier w różnych sieciach
          społecznościowych. Gry planszowe to świetny sposób na spędzenie wolnego czasu. Wypróbuj każdy slot bez ryzyka.
        </p>
      </div>
      <div class="o-nas__image">
        <picture>
          <source srcset="./img/about.webp" type="image/webp"><img src="./img/about.png" alt="Image"></picture>
      </div>
    </div>
  </section>
</main>
<?php
   include 'footer.php';
?>