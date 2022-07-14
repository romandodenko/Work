<?php 
  include 'header.php';
?>
  <main>
    <section class="elem-top">
      <div class="elem-top__container container">
        <div class="elem-top__logo">
          <a href="index.php">
            <img src="./img/logo.png" alt="Logo site">
          </a>
        </div>
      </div>
    </section>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__body">
          <span class="hero__span">
            Społecznościowe kasyno online. Graj i wygrywaj wirtualne nagrody
          </span>
          <h1 class="hero__title">
            Najlepsze gry i automaty do rozrywki
          </h1>
          <div class="hero__link">
            <a href="index.php#games">
              Graj w automaty
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="benefits">
      <div class="benefits__container container">
        <ul class="benefits__list">
          <li class="benefits__item">
            <h2 class="benefits__title">
              SMACZNEGO
            </h2>
            <p class="benefits__text">
              W naszej społeczności możesz rozmawiać z innymi członkami i cieszyć się wszystkimi naszymi darmowymi
              grami.
            </p>
          </li>
          <li class="benefits__item">
            <h2 class="benefits__title">
              KASYNO SPOŁECZNOŚCIOWE
            </h2>
            <p class="benefits__text">
              Mamy gości z różnych krajów, którzy chcą cieszyć się naszymi darmowymi grami kasynowymi.
            </p>
          </li>
          <li class="benefits__item">
            <h2 class="benefits__title">
              100% bezpieczny i bezpieczny
            </h2>
            <p class="benefits__text">
              Nasza strona jest całkowicie bezpieczna i nie ma absolutnie żadnego ryzyka utraty prawdziwych pieniędzy.
            </p>
          </li>
        </ul>
      </div>
    </section>
    <section class="games" id="games">
      <div class="games__container container">
        <h2 class="games__title">
          Automaty
        </h2>
        <ul class="games__list">
          <li class="games__item">
            <div class="games__image">
              <a href="diamond-blitz.php">
                <img src="./img/game/diamond-blitz.jpg" alt="diamond-blitz">
              </a>
            </div>
            <div class="games__descr">
              <a class="games__link" href="diamond-blitz.php">
                Diamond Bitz
              </a>
              <a class="games__play" href="diamond-blitz.php">
                Bawić się
              </a>
            </div>
          </li>
          <li class="games__item">
            <div class="games__image">
              <a href="disco-diamonds.php">
                <img src="./img/game/disco-diamonds.jpg" alt="disco-diamonds">
              </a>
            </div>
            <div class="games__descr">
              <a class="games__link" href="disco-diamonds.php">
                Disco Diamonds
              </a>
              <a class="games__play" href="disco-diamonds.php">
                Bawić się
              </a>
            </div>
          </li>
          <li class="games__item">
            <div class="games__image">
              <a href="kinock-out-diamonds.php">
                <img src="./img/game/kinock-out-diamonds.jpg" alt="kinock-out-diamonds">
              </a>
            </div>
            <div class="games__descr">
              <a class="games__link" href="kinock-out-diamonds.php">
                Kinock Out Diamonds
              </a>
              <a class="games__play" href="kinock-out-diamonds.php">
                Bawić się
              </a>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <h2 class="about__title">
          O nas
        </h2>
        <div class="about__content">
          <div class="about__descr">
            <h3 class="about__subtitle">
              Lepsze wrażenia z gry
            </h3>
            <p class="about__text">
              Diamonds glory to łyk zupełnie nowych doznań w grach, które nigdy Cię nie zawiodą. Aby rozpocząć swoją
              podróż, nasze kasyno społecznościowe oferuje nienaganną obsługę klienta i wybór wspaniałych gier
              opracowanych przez największych dostawców oprogramowania w branży.
            </p>
            <p class="about__text">
              Nawet jeśli do tej pory grałeś tylko w jednorękiego bandytę w niewirtualnym kasynie, z pewnością nie
              będziesz miał problemów z przejściem na opcję online. Rozgrywka w automatach online jest taka sama.
            </p>
            <p class="about__text">
              Przekonasz się jednak, że automaty online są wygodniejsze. Przełączanie się między automatami online
              zajmuje tylko kilka sekund i nigdy nie musisz się martwić, że ktoś przejmie dany automat. Możesz nawet
              zmieniać kasyna, kiedy tylko chcesz. W kasynie online możesz wpłacać taniej, a także grać za darmo, jeśli
              nie chcesz stawiać.
            </p>
          </div>
          <div class="about__image">
            <img src="./img/about/image.png" alt="Site image">
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="popup popup-active">
  <div class="popup__close"></div>
  
  <div class="popup__body">
  <form class="popup__form" action="/">
    <p class="popup__text">Ta strona jest przeznaczona dla dorosłych użytkowników.
<span>Czy masz powyżej 18 lat?</span></p>
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