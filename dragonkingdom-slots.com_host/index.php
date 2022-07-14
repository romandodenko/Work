<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>dragonkingdom-slots.com</title>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <button class="header__burger burger">
        <span class="burger__line"></span>
      </button>
      <div class="header__menu">
        <div class="header__menu-logo">
          <a class="header__logo" href="main-page.php">
            <span class="header__span-logo"><img src="./img/logo.jpg" alt="logo"></span>
            <span class="header__span"> Dragon <span class="header__span-one">kingdom</span><span
                class="header__span-two">slots</span></span>
          </a>
        </div>
        <nav class="header__nav nav">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__link" href="main-page.php">Dom</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="main-page.php#about">O nas</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="main-page.php#game">Gry</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="main-page.php#benefits">Zalety</a>
            </li>
          </ul>
        </nav>
        <button class="header__exit-menu"></button>
      </div>
      <div class="header__wrapper-logo">
        <a class="header__logo" href="main-page.php">
          <span class="header__span-logo"><img src="./img/logo.jpg" alt="logo"></span>
          <span class="header__span"> Dragon <span class="header__span-one">kingdom</span><span
              class="header__span-two">slots</span></span>
        </a>
      </div>
    </div>
  </header>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__body">
          <h1 class="hero__title">
            Witamy w naszym społecznościowym kasynie online
          </h1>
          <p class="hero__text">
            Automaty są całkowicie darmowe, nie wierzysz? próbować!
          </p>
          <div class="hero__wrapper-link">
            <a class="hero__link" href="main-page.php#game">
              Bawić się
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <h2 class="about__title">
          O nas
        </h2>
        <div class="about__text-wrapper">
          <p class="about__text">
            Nasze kasyno społecznościowe oferuje pełną linię automatów online gotowych do zanurzenia graczy w
            ekscytujący świat hazardu. Tutaj znajdziesz nasze gry online, w które możesz grać za darmo bez żadnych
            inwestycji.
          </p>
          <p class="about__text">
            Oferujemy widzom na całym świecie najbardziej zabawne i ekscytujące społecznościowe gry kasynowe, gry
            casualowe i gry bingo. Otrzymuj codziennie ekscytujące nagrody i nowe treści wysokiej jakości. Zróżnicowane
            portfolio mobilnych gier społecznościowych pozwala każdemu znaleźć swoje ulubione aplikacje do gier i
            ulubione automaty. Dołącz do milionów graczy na całym świecie, wygrywaj niesamowite nagrody i zmieniaj każdą
            nudną chwilę w przygodę!
          </p>
        </div>
      </div>
    </section>
    <section class="game" id="game">
      <div class="game__container container">
        <h2 class="game__title">
          Nasze gry
        </h2>
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <img src="./img/game/drago-jewels-of-fortune.jpg" alt="drago-jewels-of-fortune">
            </div>
            <div class="game__descr">
              <p class="game__name">
                Drago jewels of fortune
              </p>
              <div class="game__play">
                <a href="#!">
                  Bawić się
                </a>
              </div>
            </div>
            <button class="game__btn" data-path="drago-jewels"></button>
          </li>
          <li class="game__item">
            <div class="game__image">
              <img src="./img/game/dragon-kingdom-eyes-of-fire.jpg" alt="dragon-kingdom-eyes-of-fire">
            </div>
            <div class="game__descr">
              <p class="game__name">
                Dragon kingdom eyes of fire
              </p>
              <div class="game__play">
                <a href="#!">
                  Bawić się
                </a>
              </div>
            </div>
            <button class="game__btn" data-path="dragon-kingdom"></button>
          </li>
          <li class="game__item">
            <div class="game__image">
              <img src="./img/game/dragon-tiger.jpg" alt="dragon-tiger">
            </div>
            <div class="game__descr">
              <p class="game__name">
                Dragon tiger
              </p>
              <div class="game__play">
                <a href="#!">
                  Bawić się
                </a>
              </div>
            </div>
            <button class="game__btn" data-path="dragon-tiger"></button>
          </li>
        </ul>
      </div>
    </section>
    <section class="benefits" id="benefits">
      <div class="benefits__container container">
        <h2 class="benefits__title">
          Nasze atuty
        </h2>
        <ul class="benefits__list">
          <li class="benefits__item">
            <div class="benefits__icon">
              <img src="./img/benefits/icon-1.png" alt="">
            </div>
            <div class="benefits__descr">
              <strong class="benefits__strong">
                Nowa grafika
              </strong>
              <p class="benefits__text">
                To kasyno ma niesamowite wrażenia użytkownika dzięki nowej grafice
              </p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <img src="./img/benefits/icon-3.png" alt="">
            </div>
            <div class="benefits__descr">
              <strong class="benefits__strong">
                Nie marnujemy Twoich pieniędzy
              </strong>
              <p class="benefits__text">
                Nasze gry są całkowicie bezpłatne i nie wymagają żadnych inwestycji.
              </p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__icon">
              <img src="./img/benefits/icon.png" alt="">
            </div>
            <div class="benefits__descr">
              <strong class="benefits__strong">
                Nowe automaty online
              </strong>
              <p class="benefits__text">
                Aby portfolio było stale aktualizowane i aktualizowane, dostawcy kasyn online bardzo regularnie
                publikują nowe gry.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <div class="game-popup" data-target="drago-jewels">
    <div class="game-popup__close"></div>
    <div class="game-popup__body">
      <strong class="game-popup__strong">
        Drago jewels of fortune
      </strong>
      <div class="game-popup__iframe">
        <iframe
          src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs1600drago&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com"
          frameborder="0"></iframe>
      </div>
      <button class="game-popup__exit"></button>
    </div>
  </div>
  <div class="game-popup" data-target="dragon-kingdom">
    <div class="game-popup__close"></div>
    <div class="game-popup__body">
      <strong class="game-popup__strong">
        Dragon kingdom eyes of fire
      </strong>
      <div class="game-popup__iframe">
        <iframe
          src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=USD&gameSymbol=vs5drmystery&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com"
          frameborder="0"></iframe>
      </div>
      <button class="game-popup__exit"></button>
    </div>
  </div>
  <div class="game-popup" data-target="dragon-tiger">
    <div class="game-popup__close"></div>
    <div class="game-popup__body">
      <strong class="game-popup__strong">
        Dragon tiger
      </strong>
      <div class="game-popup__iframe">
        <iframe
          src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs1024dtiger&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com"
          frameborder="0"></iframe>
      </div>
      <button class="game-popup__exit"></button>
    </div>
  </div>
  <div class="popup-cockie">
  <div class="popup-cockie__blur"></div>
  <div class="popup-cockie__body">
    <p class="popup-cockie__text">
      Witryna oparta na plikach cookie Używamy plików cookie, aby poprawić Twoje wrażenia, spersonalizować Twoje treści i zoptymalizować Twoje wrażenia. Kliknij OK, aby przejść do strony
    </p>
    <div class="popup-cockie__wrapper-link">
      <a class="popup-cockie__link" href="main-page.php">
        Ok
      </a>
    </div>
  </div>
  </div>
  <footer class="footer">
    <div class="footer__container container">
      <div class="footer__wrapper-logo">
        <a class="footer__logo" href="main-page.php">
          <span class="footer__span-logo"><img src="./img/logo.jpg" alt="logo"></span>
          <span class="footer__span"> Dragon <span class="footer__span-one">kingdom</span><span
              class="footer__span-two">slots</span></span>
        </a>
      </div>
      <ul class="footer__ul">
        <li class="footer__li">
          <a class="footer__link" href="terms.php">
            Zasady i warunki
          </a>
        </li>
        <li class="footer__li">
          <a class="footer__link" href="privacy.php">
            Polityka prywatności
          </a>
        </li>
        <li class="footer__li">
          <a class="footer__link" href="cockie.php">
            Polityka Cookie
          </a>
        </li>
      </ul>
      <p class="footer__warning">
        Gry oferowane na stronie nie dają użytkownikom możliwości wygrania prawdziwych pieniędzy. Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w rzeczywistych grach hazardowych.
      </p>
    </div>
  </footer>
  <script src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script src="./js/modules/header.js"></script>
  <script src="./js/modules/popup.js"></script>
  <script src="./js/modules/smooth-scroll.js"></script>
  <script src="./js/modules/tabs.js"></script>
</body>

</html>