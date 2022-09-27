<?php
include 'header.php';
?>
      <div class="page__body">
        <main>
          <section class="top">
            <div class="container">
              <a class="top__logo" href="main.php">
                <img src="./img/logo.svg" alt="Logo">
              </a>
            </div>
          </section>
          <section class="main">
            <div class="main__container container">
              <div class="main__content">
                <div class="main__body">
                  <h1 class="main__title">
                    Zanurz się w ekscytującym świecie rozrywki
                  </h1>
                  <p class="main__text">
                    Oferujemy darmowy, ciekawy wypoczynek dla miliona graczy, przeżyj ekscytujące gry.
                  </p>
                  <a class="main__link" href="#games" data-da=".main__content, 1200, last">
                    Oglądaj gry
                  </a>
                </div>
                <div class="main__image">
                  <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </section>
          <section class="gry" id="games">
            <div class="container">
              <h2 class="gry__title title">
                Gry
              </h2>
                <ul class="gry__list">
                  <li class="gry__item gry__item_1">
                    <div class="gry__image gry__image_1">
                      <a href="game-1.php">
                        <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
                      </a>
                    </div>
                    <a class="gry__link" href="game-1.php">
                      Bawić się
                    </a>
                  </li>
                  <li class="gry__item">
                    <div class="gry__image">
                      <a href="game-2.php">
                        <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Game"></picture>
                      </a>
                    </div>
                    <a class="gry__link" href="game-2.php">
                      Bawić się
                    </a>
                  </li>
                  <li class="gry__item">
                    <div class="gry__image">
                      <a href="game-3.php">
                        <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
                      </a>
                    </div>
                    <a class="gry__link" href="game-3.php">
                      Bawić się
                    </a>
                  </li>
                </ul>
            </div>
          </section>
          <section class="nas" id="about">
            <div class="container">
              <h2 class="nas__title title">
                O nas
              </h2>
              <div class="nas__item">
                <div class="nas__image">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
                <p class="nas__text">
                  Automaty do gier to rodzaj gry. Celem jest ułożenie symboli na bębnie, aby wygrać pieniądze z tego spinu. Graj w gry społecznościowe za darmo i bez rejestracji - zapraszamy!
                </p>
                <p class="nas__text">
                  Gry społecznościowe to jedna z najpopularniejszych gier kasynowych na świecie. Automat do gry za darmo to ekscytujący sposób, aby cieszyć się grą na automacie bez rejestracji i płacenia prawdziwymi pieniędzmi. Nasza strona oferuje możliwość dowiedzenia się więcej o automatach do gry, dowiedzenia się, które z nich są najlepsze i wypróbowania ich dla własnej przyjemności. Automat do gry za darmo - Graj na automatach bez rejestracji Jeśli chcesz grać na automatach za darmo i bez rejestracji - zapraszamy na naszą stronę. Tutaj możesz odpocząć po pracy i dobrze się bawić.
                </p>
              </div>
              <p class="nas__text nas__text_2">
                Użytkownik nie musi nawet uzupełniać konta. W przypadku zakładów w darmowych automatach dostępne są wirtualne monety, których ilość (a czasem nawet wartość) można dostosować przed rozpoczęciem kręcenia. Jeśli klient klubu zgubił wszystkie monety, musisz ponownie załadować stronę - a saldo zostanie przywrócone.
              </p>
            </div>
          </section>
          <section class="korzy" id="benefits">
            <div class="container">
              <h2 class="korzy__title title">
                Korzyść
              </h2>
              <ul class="korzy__list">
                <li class="korzy__item">
                  <span class="korzy__icon">
                    <img src="./img/icon-1.svg" alt="icon">
                  </span>
                  <h3 class="korzy__subtitle">
                    Nie marnuj pieniędzy
                  </h3>
                  <p class="korzy__text">
                    W przypadku zakładów w darmowych automatach dostępne są wirtualne monety.
                  </p>
                </li>
                <li class="korzy__item korzy__item_2">
                  <span class="korzy__icon">
                    <img src="./img/icon-2.svg" alt="icon">
                  </span>
                  <h3 class="korzy__subtitle">
                    Anonimowość
                  </h3>
                  <p class="korzy__text">
                    Ponieważ do ich uruchomienia nie jest wymagana rejestracja, klienci nie obawiają się, że ich dane, takie jak adres e-mail, imię i nazwisko, numer telefonu i inne dane osobowe, trafią w ręce osób trzecich.
                  </p>
                </li>
                <li class="korzy__item">
                  <span class="korzy__icon">
                    <img src="./img/icon-3.svg" alt="icon">
                  </span>
                  <h3 class="korzy__subtitle">
                    Gry nie mają znaczenia
                  </h3>
                  <p class="korzy__text">
                    Automaty w grach społecznościowych są identyczne jak w zwykłych wersjach: mają ten sam zakres zakładów.
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