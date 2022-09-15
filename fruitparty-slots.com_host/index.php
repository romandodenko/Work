<?php 
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="top">
              <div class="top__container container">
                <a class="top__logo" href="main.php">
                  <img src="./img/logo.svg" alt="Logo">
                </a>
              </div>
          </section>
          <section class="main">
            <div class="container">
              <div class="main__content">
                <div class="main__body">
                  <span class="main__span">
                    Niezawodne kasyno społecznościowe z darmowymi automatami online.
                  </span>
                  <h1 class="main__title">
                    Gry na automatach dla zabawy
                  </h1>
                  <a class="main__link" href="#gry">
                    Zagraj teraz
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="zalety" id="zalety">
            <div class="container">
              <ul class="zalety__list">
                <li class="zalety__item">
                  <span class="zalety__icon">
                    <picture><source srcset="./img/icon-1.webp"type="image/webp"><img src="./img/icon-1.png" alt="Icon"></picture>
                  </span>
                  <h2 class="zalety__title">
                    Graj bez rejestracji
                  </h2>
                  <p class="zalety__text">
                    Wszystkie gry są dostępne bez rejestracji
                  </p>
                </li>
                <li class="zalety__item zalety__item_2">
                  <span class="zalety__icon">
                    <picture><source srcset="./img/icon-2.webp"type="image/webp"><img src="./img/icon-2.png" alt="Icon"></picture>
                  </span>
                  <h2 class="zalety__title">
                    Graj za darmo
                  </h2>
                  <p class="zalety__text">
                    Gra w kasynach społecznościowych jest bezpłatna i nie wymaga żadnych inwestycji. Graj dla zabawy i nie marnuj swojego budżetu
                  </p>
                </li>
                <li class="zalety__item zalety__item_3">
                  <span class="zalety__icon">
                    <picture><source srcset="./img/icon-3.webp"type="image/webp"><img src="./img/icon-3.png" alt="Icon"></picture>
                  </span>
                  <h2 class="zalety__title">
                    Gry bez uzależnienia
                  </h2>
                  <p class="zalety__text">
                    Skłonność do uzależnienia jest minimalna
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="nas" id="nas">
            <div class="container">
              <div class="nas__content">
                <h2 class="nas__title">
                  O nas
                </h2>
                <p class="nas__text">
                  Gracz w naszym kasynie otrzymuje do swojej dyspozycji określoną ilość kredytów na wirtualnym saldzie. Chociaż kasyno społecznościowe nie pozwala na wypłacanie wygranych, a także wpłacanie prawdziwych pieniędzy, pod każdym innym względem kasyno społecznościowe nie różni się absolutnie od standardowych: mają te same symbole, tę samą stopę zwrotu, rozgrywkę, funkcje bonusowe , itd. Społecznościowe kasyno z automatami jest używane przez graczy, którzy nie chcą ryzykować swoich pieniędzy, ale chcą przeżyć emocje i emocje związane z grami na automatach.
                </p>
                <p class="nas__text">
                  Możesz zagrać w dowolny automat dostępny na stronie za darmo i bez rejestracji. Kasyno społecznościowe nie tylko nie wymaga uzupełniania konta osobistego, ale także pozwala obstawiać zakłady dokładnie tak długo, jak potrzebujesz. Rzeczywiście, nawet po zresetowaniu salda maszyny do zera, aby kontynuować grę, wystarczy zrestartować grę lub pobrać nowy slot i kontynuować grę.
                </p>
              </div>
            </div>
          </section>
          <section class="gry" id="gry">
            <div class="container">
                <ul class="gry__list">
                  <li class="gry__item gry__item_1">
                    <div class="gry__image">
                      <a href="gry-1.php">
                        <picture><source srcset="./img/gry-1.webp"type="image/webp"><img src="./img/gry-1.png" alt="Img"></picture>
                      </a>
                    </div>
                    <a class="gry__link" href="gry-1.php">
                      Fruit Raindow
                    </a>
                  </li>
                  <li class="gry__item">
                    <div class="gry__image">
                      <a href="gry-2.php">
                        <picture><source srcset="./img/gry-2.webp"type="image/webp"><img src="./img/gry-2.png" alt="Img"></picture>
                      </a>
                    </div>
                    <a class="gry__link" href="gry-2.php">
                      Fruit Shop
                    </a>
                  </li>
                  <li class="gry__item">
                    <div class="gry__image">
                      <a href="gry-3.php">
                        <picture><source srcset="./img/gry-3.webp"type="image/webp"><img src="./img/gry-3.png" alt="Img"></picture>
                      </a>
                    </div>
                    <a class="gry__link" href="gry-3.php">
                      Fruit Party
                    </a>
                  </li>
                </ul>
            </div>
          </section>
        </main>
        <div class="popup">
          <div class="popup__close"></div>
          <div class="popup__body">
            <form class="popup__form" action="/">
                <div class="popup__image">
                  <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
                </div>
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