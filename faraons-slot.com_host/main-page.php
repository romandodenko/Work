<?php 
  include 'header.php';
?>
<main>
  <section class="hero">
    <div class="hero__container container">
      <div class="hero__body">
        <span class="hero__span">
          Darmowe społecznościowe gry kasynowe
        </span>
        <h1 class="hero__title">
          Graj na naszych automatach dla zabawy
        </h1>
        <div class="hero__wrapper-link">
          <a class="hero__link" data-scroll href="main-page.php#game">Oglądaj gry</a>
        </div>
      </div>
    </div>
  </section>
  <section class="benefits" id="benefits">
    <div class="benefits__container container">
      <ul class="benefits__list">
        <li class="benefits__item">
          <div class="benefits__icon">
            <picture>
            <source media="(min-width: 601px)" srcset="./img/benefits/benefits-1.webp" type="image/webp">
            <source media="(max-width: 600px)" srcset="./img/benefits/benefits-1_3.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/benefits/benefits-1_3.webp" type="image/webp">
            <img src="./img/benefits/benefits-1.png" alt="Icon-1">
            </picture>
          </div>
          <div class="benefits__descr">
            <h2 class="benefits__title">
              Darmowe gry
            </h2>
            <p class="benefits__text">
              W kasynie społecznościowym wszystkie gry są darmowe i nie wymagają inwestycji.
            </p>
          </div>
        </li>
        <li class="benefits__item benefits__item_transform">
          <div class="benefits__icon">
            <picture>
            <source media="(min-width: 601px)" srcset="./img/benefits/benefits-2.webp" type="image/webp">
            <source media="(max-width: 600px)" srcset="./img/benefits/benefits-2_3.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/benefits/benefits-2_3.webp" type="image/webp">
            <img src="./img/benefits/benefits-2.png" alt="Icon-2">
            </picture>
          </div>
          <div class="benefits__descr">
            <h2 class="benefits__title">
              Niezawodność i bezpieczeństwo
            </h2>
            <p class="benefits__text">
              Na naszej stronie możesz być pewien bezpieczeństwa, wszystkie gry są legalizowane
            </p>
          </div>
        </li>
        <li class="benefits__item">
          <div class="benefits__icon">
            <picture>
            <source media="(min-width: 601px)" srcset="./img/benefits/benefits-3.webp" type="image/webp">
            <source media="(max-width: 600px)" srcset="./img/benefits/benefits-3_3.png" type="image/png">
            <source media="(max-width: 600px)" srcset="./img/benefits/benefits-3_3.webp" type="image/webp">
            <img src="./img/benefits/benefits-3.png" alt="Icon-3">
            </picture>
          </div>
          <div class="benefits__descr">
            <h2 class="benefits__title">
              Wykwalifikowana usługa wsparcia
            </h2>
            <p class="benefits__text">
              Jeśli masz jakiekolwiek problemy, możesz skontaktować się z naszym wsparciem
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="about" id="about">
    <div class="about__container container">
      <h2 class="about__title">
        Faraons slots
      </h2>
      <div class="about__body">
        <p class="about__text">
          Czy jesteś gotowy na zabawę? Trafiłeś we właściwe miejsce. Nasza strona to najlepsze miejsce do gry. Ciesz się swoimi ulubionymi grami, a także wieloma ekscytującymi automatami online w jednym miejscu. Bez względu na to, gdzie jesteś, Faraons slots jest tym, czego potrzebujesz. Znajdź więc wygodne miejsce i baw się z najbardziej niezawodnym i bezpiecznym dostawcą gier online. Nie tylko jesteśmy jedynym legalnym społecznościowym kasynem online, ale zapewnimy Ci doświadczenie, którego nie znajdziesz nigdzie indziej!
        </p>
        <div class="about__image">
          <picture>
          <source media="(min-width: 1024px)" srcset="./img/about/image-1.webp" type="image/webp">
          <source media="(min-width: 601px)" srcset="./img/about/image-2.png" type="image/png">
          <source media="(min-width: 601px)" srcset="./img/about/image-2.webp" type="image/webp">
          <source media="(max-width: 600px)" srcset="./img/about/image-3.png" type="image/png">
          <source media="(max-width: 600px)" srcset="./img/about/image-3.webp" type="image/webp">
          <img src="./img/about/image-1.png" alt="Image">
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="game" id="game">
    <div class="game__container container">
      <ul class="game__list">
        <li class="game__item mysterious-egypt">
          <div class="game__links">
            <a class="game__name" href="mysterious-egypt.php">
              Mysterious Egypt
            </a>
            <a class="game__link" href="mysterious-egypt.php">
              Bawić się
            </a>
          </div>
        </li>
        <li class="game__item valley-of-the-gods">
          <div class="game__links">
            <a class="game__name" href="valley-of-the-gods.php">
              Valley of the gods
            </a>
            <a class="game__link" href="valley-of-the-gods.php">
              Bawić się
            </a>
          </div>
        </li>
        <li class="game__item ankh-of-anubis">
          <div class="game__links">
            <a class="game__name" href="ankh-of-anubis.php">
              Ankh of anubis
            </a>
            <a class="game__link" href="ankh-of-anubis.php">
              Bawić się
            </a>
          </div>
        </li>
        <li class="game__item golden-glyph">
          <div class="game__links">
            <a class="game__name" href="golden-glyph.php">
              Golden glyph
            </a>
            <a class="game__link" href="golden-glyph.php">
              Bawić się
            </a>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php 
  include 'footer.php';
?>