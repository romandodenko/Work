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
        <li class="blog__item">
          <div class="blog__image">
            <picture>
              <source media="(min-width: 1024px)" srcset="./img/blog2.webp" type="image/webp">
              <source media="(min-width: 600px)" srcset="./img/blog2-600.png" type="image/png">
              <source media="(min-width: 600px)" srcset="./img/blog2-600.webp" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/blog2-300.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/blog2-300.webp" type="image/webp">
              <img src="./img/blog2.png" alt="Blog picture">
            </picture>
          </div>
          <div class="blog__descr">
            <h3 class="blog__subtitle subtitle">
              O tworzeniu logo gier symulatorów hazardowych
            </h3>
            <p class="blog__subtext text">
              Logo gier hazardowych powinno wyróżniać się na tle konkurencji i przekazywać przesłanie firmy. Dynamiczny projekt może wyrażać elegancję i wyrafinowanie, podczas gdy prosty układ może emanować zabawą i ekscytacją. Ponadto ważne jest, aby wybrać odpowiednie czcionki i kolory dla logo gier hazardowych. Istnieje wiele opcji do wyboru, w tym darmowe i płatne generatory logo gier hazardowych. Zanim dokonasz wyboru, weź pod uwagę kilka wskazówek podanych poniżej.
            </p>
            <a class="blog__sublink link" href="blog-two.php">Przeczytaj w całości</a>
          </div>
        </li>
        <li class="blog__item">
          <div class="blog__image">
            <picture>
              <source media="(min-width: 1024px)" srcset="./img/blog3.webp" type="image/webp">
              <source media="(min-width: 600px)" srcset="./img/blog3-600.png" type="image/png">
              <source media="(min-width: 600px)" srcset="./img/blog3-600.webp" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/blog3-300.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/blog3-300.webp" type="image/webp">
              <img src="./img/blog3.png" alt="Blog picture">
            </picture>
          </div>
          <div class="blog__descr">
            <h3 class="blog__subtitle subtitle">
              Tworzenie szczelin
            </h3>
            <p class="blog__subtext text">
              Szczeliny można tworzyć w programie Sketcher za pomocą polecenia Szczelina. Najpierw należy zdefiniować krzywą środkową i element odniesienia. Do profilu można dodać jeden lub więcej profili, przy czym nie muszą się one przecinać. Następnie można kliknąć polecenie Szczelina, aby dodać szczelinę do szkicu. Po utworzeniu elementu odniesienia należy otworzyć okno dialogowe Definicja szczeliny. Po wprowadzeniu zmian okno dialogowe zostanie zamknięte. Możesz je teraz otworzyć ponownie.
            </p>
            <a class="blog__sublink link" href="blog-third.php">Przeczytaj w całości</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php 
include 'footer.php';
?>