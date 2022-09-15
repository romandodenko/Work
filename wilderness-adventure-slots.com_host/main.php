<?php 
  include 'header.php';
?>
    <main>
      <section class="block-hero">
        <div class="container">
            <div class="block-hero__content">
              <div class="block-hero__body">
                <h1 class="block-hero__title">
                  Darmowe automaty i gry
                </h1>
                <p class="block-hero__text">
                  Spędzanie czasu na naszej stronie jest zawsze łatwe, przyjemne i interesujące.
                </p>
              </div>
            </div>
        </div>
      </section>
      <section class="block-games" id="games">
        <div class="container">
          <ul class="block-games__list">
            <li class="block-games__item">
              <div class="block-games__image">
                <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
              </div>
              <a class="block-games__link" href="game-1.php">
                <span>Bawić się</span>
              </a>
            </li>
            <li class="block-games__item">
              <div class="block-games__image">
                <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
              </div>
              <a class="block-games__link" href="game-2.php">
                <span>Bawić się</span>
              </a>
            </li>
            <li class="block-games__item">
              <div class="block-games__image">
                <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
              </div>
              <a class="block-games__link" href="game-3.php">
                <span>Bawić się</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="block-benefits" id="benefits">
        <div class="container">
          <h2 class="block-benefits__title">
            Zalety
          </h2>
          <div class="block-benefits__content">
            <div class="block-benefits__image">
              <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
            </div>
            <ul class="block-benefits__list">
              <li class="block-benefits__item">
                <h2 class="block-benefits__subtitle">
                  Automaty tematyczne
                </h2>
                <p class="block-benefits__text">
                  Ekscytujące i ciekawe gry z różnymi fabułami i oszałamiającą grafiką czekają na Ciebie.
                </p>
              </li>
              <li class="block-benefits__item">
                <h2 class="block-benefits__subtitle">
                  Gra bez inwestycji
                </h2>
                <p class="block-benefits__text">
                  Kasyna społecznościowe to gry bez inwestycji i bez szans na wygranie prawdziwych pieniędzy lub nagród.
                </p>
              </li>
              <li class="block-benefits__item">
                <h2 class="block-benefits__subtitle">
                  Rejestracja nie jest wymagana
                </h2>
                <p class="block-benefits__text">
                  Przed grą nie ma żadnych przeszkód, wystarczy nacisnąć przycisk i cieszyć się grą
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="block-about" id="about">
        <div class="container">
          <h2 class="block-about__title">
            O nas
          </h2>
          <div class="block-about__content">
            <p class="block-about__text">
              Wiemy, jaka powinna być idealna usługa z punktu widzenia klienta i staramy się ją Tobie zapewnić. Kasyno online spełnia wszystkie wymagania nowoczesnego kasyna społecznościowego. Oferujemy najszerszy możliwy wybór dostawców gier hazardowych, automatów do gier. Internetowe kasyno społecznościowe nie jest platformą bukmacherską, więc nie są wymagane żadne prawdziwe pieniądze do wpłaty. Gracze powinni również zrozumieć, że algorytmy gier online bardzo różnią się od ich alternatyw w świecie rzeczywistym. Dlatego prawdopodobieństwo wygranej w grach online nie powinno być utożsamiane z wygranymi w kasynach stacjonarnych.
            </p>
            <p class="block-about__text">
              Oprócz gry na komputerze dostępna jest wersja mobilna. Witryna kasyna jest odpowiednia do wygodnego grania na telefonach i tabletach. Gracze mają możliwość gry w dowolnym miejscu, w którym jest połączenie z Internetem. Oprócz identycznego wyboru automatów do gry, wszystkie promocje i bonusy są dostępne dla gracza na gadżecie.
            </p>
          </div>
        </div>
      </section>
    </main>
    <?php 
    include 'footer.php';
  ?>