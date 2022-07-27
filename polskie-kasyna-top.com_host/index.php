<?php 
  include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__body">
            <h1 class="hero__title">
              W naszym kasynie społecznościowym dostępne są gry i automaty do rozrywki.
            </h1>
            <p class="hero__text">
              Nasza kolorowa strona internetowa oferuje zupełnie nowe wrażenia. Masz świetną okazję doświadczyć
              wszystkich emocji i wrażeń związanych z tematycznymi automatami.
            </p>
          </div>
          <div class="hero__image">
            <img src="./img/hero/image.png" alt="Picture">
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <h2 class="about__title">
            O naszym kasynie społecznościowym
          </h2>
          <div class="about__body">
            <p class="about__text">
              Odkryj nasz ogromny wybór automatów z różnymi wielkościami zakładów. Podróżuj przez mistyczne światy i
              ciesz się ekscytującymi rundami bonusowymi i funkcjami. Zawsze stawiamy naszych klientów na pierwszym
              miejscu. Możesz zacząć doświadczać wszystkiego, co ma do zaoferowania nasze kasyno społecznościowe, w tym
              popularnych automatów i gier stołowych.
            </p>
            <p class="about__text">
              Graj w gry bez prawdziwych pieniędzy z różnymi poziomami zakładów w różnych formatach. Dzięki naszemu
              innowacyjnemu i przyjaznemu dla użytkownika oprogramowaniu możesz cieszyć się ulubionymi grami w wielu
              odmianach.
            </p>
          </div>
        </div>
      </section>
      <section class="benefits">
        <div class="benefits__container container">
          <div class="benefits__image">
            <img src="./img/benefits/image.png" alt="Picture">
          </div>
          <ul class="benefits__list">
            <li class="benefits__item">
              <p class="benefits__text">
                Nasza platforma, kompatybilna z komputerami stacjonarnymi i urządzeniami mobilnymi, ma na celu
                zapewnienie pełnej obsługi
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__text">
                Nasze gry nie dają realnych możliwości uprawiania hazardu, nie prowadzą do uzależnienia i są wyłącznie
                rozrywką.
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__text">
                Całkowicie bezpieczne gry. Nasza platforma jest całkowicie legalna i umożliwia zabawę ze znajomymi i
                nawiązywanie nowych znajomości.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="games" id="games">
        <div class="games__container container">
          <h2 class="games__title">
            Automaty online
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="amber-sterlings-mystic-shrine.php">
                  <img src="./img/games/game-1.jpg" alt="Picture game">
                </a>
              </div>
              <a class="games__name" href="amber-sterlings-mystic-shrine.php">
                Amber sterlings mystic shrine
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="jungle-jim-and-the-lost-sphinx.php">
                  <img src="./img/games/game-2.jpg" alt="Picture game">
                </a>
              </div>
              <a class="games__name" href="jungle-jim-and-the-lost-sphinx.php">
                Jungle jim and the lost sphinx
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="cat-wilde-i-doom-of-dead.php">
                  <img src="./img/games/game-3.jpg" alt="Picture game">
                </a>
              </div>
              <a class="games__name" href="cat-wilde-i-doom-of-dead.php">
                Cat wilde i doom of dead
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
          <p class="popup__text">Ta strona jest przeznaczona dla dorosłych użytkowników.
            <span>Czy masz ukończone 18 lat?</span></p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <button class="popup__button">Tak</button>
        </form>
      </div>
    </div>
    <?php 
    include 'footer.php';
  ?>