<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Raleway-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Raleway-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Raleway-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Raleway-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Raleway-Light.woff" as="font">
  <link rel="preload" href="./fonts/Raleway-Light.woff2" as="font">
  <link rel="stylesheet" href="./resources/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>megafruitshop.com</title>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div
        class="row d-flex flex-row flex-md-column align-items-center justify-content-between justify-content-md-center">
        <div
          class="header__wrapper-logo d-flex align-items-center justify-content-start justify-content-md-center col-6 col-md-12">
          <a class="header__logo" href="main.php">
            megafruitshop
          </a>
        </div>
        <nav class="header__nav navbar-expand-md navbar d-flex align-items-center justify-content-end col-2 col-md-12 ">
          <button class="header__nav-toggler navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="header__offcanvas offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="header__offcanvas-header offcanvas-header">
              <button type="button" class="header__close-btn btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="header__offcanvas-body offcanvas-body">
              <ul class="header__nav navbar-nav d-flex align-items-center justify-content-center flex-grow-1 pe-3">
                <li class="header__nav-item nav-item">
                  <a class="header__nav-link nav-link" href="main.php">Strona główna</a>
                </li>
                <li class="header__nav-item nav-item">
                  <a class="header__nav-link nav-link" href="main.php#about">O nas</a>
                </li>
                <li class="header__nav-item nav-item">
                  <a class="header__nav-link nav-link" href="main.php#game">Gry</a>
                </li>
                <li class="header__nav-item nav-item">
                  <a class="header__nav-link nav-link" href="tt.php">Zasady i warunki</a>
                </li>
                <li class="header__nav-item nav-item">
                  <a class="header__nav-link nav-link" href="pl.php">Polityka prywatności</a>
                </li>
                <li class="header__nav-item nav-item">
                  <a class="header__nav-link nav-link" href="cc.php">Polityka Cookie</a>
                </li>
              </ul>
            </div>
          </div>

        </nav>
      </div>
    </div>
  </header>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="row d-flex align-items-center justify-content-end">
          <div class="hero__body d-flex align-items-center flex-column justify-content-center col-12">
            <h1 class="hero__title col-12">
              Witamy w najlepszym kasynie społecznościowym online
            </h1>
            <p class="hero__text col-12">
              Graj i baw się z nami
            </p>
            <div class="hero__link col-12">
              <a href="main.php#game">
                Bawić się
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__image">
        <picture><source srcset="./img/hero/hero.webp"type="image/webp"><img src="./img/hero/hero.jpg" alt="image"></picture>
      </div>
    </section>
    <section class="game" id="game">
      <div class="game__container container">
        <div class="row d-flex flex-wrap justify-content-center">
          <ul class="game__list col-12 col-xxl-8 d-flex flex-wrap justify-content-center">
            <li class="game__item">
              <div class="game__image">
                <a href="bananarock.php">
                  <picture><source srcset="./img/game/bananarock.webp"type="image/webp"><img src="./img/game/bananarock.jpg" alt="bananarock"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="bananarock.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="cherrypop.php">
                  <picture><source srcset="./img/game/cherrypop.webp"type="image/webp"><img src="./img/game/cherrypop.jpg" alt=""></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="cherrypop.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="juicy-fruits.php">
                  <picture><source srcset="./img/game/juicy-fruits.webp"type="image/webp"><img src="./img/game/juicy-fruits.jpg" alt="juicy-fruits"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="juicy-fruits.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="blinged.php">
                  <picture><source srcset="./img/game/blinged.webp"type="image/webp"><img src="./img/game/blinged.jpg" alt="blinged"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="blinged.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="octopus-treasure.php">
                  <picture><source srcset="./img/game/octopus-treasure.webp"type="image/webp"><img src="./img/game/octopus-treasure.jpg" alt="octopus-treasure"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="octopus-treasure.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__image">
                <a href="saxon.php">
                  <picture><source srcset="./img/game/saxon.webp"type="image/webp"><img src="./img/game/saxon.jpg" alt="saxon"></picture>
                </a>
              </div>
              <div class="game__play">
                <a href="saxon.php">
                  Bawić się
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <div class="row">
          <h2 class="about__title col-12">
            O nas
          </h2>
          <div class="about__wrapper-text col-12">
            <p class="about__text">
              Możesz grać w nasze gry całkowicie za darmo i bezpiecznie. Zanurz się w świat magicznej rozrywki, czekają
              na Ciebie różne motywy, bez żadnych inwestycji.
            </p>
            <p class="about__text">
              Na naszej stronie możesz zagrać w dowolny dogodny dla Ciebie sen, mam przy sobie telefon lub tablet. Nasza
              strona daje Ci możliwość całkowitego zanurzenia się w automatach rozrywkowych i wygrania wirtualnych
              nagród.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="benefits">
      <div class="benefits__container container">
        <div class="row">
          <ul class="benefits__list d-flex flex-wrap justify-content-center">
            <li class="benefits__item d-flex flex-column">
              <div class="benefits__icon d-flex align-items-center justify-content-center">
                <picture><source srcset="./img/icon/icon-1.webp"type="image/webp"><img src="./img/icon/icon-1.png" alt="icon"></picture>
              </div>
              <p class="benefits__text">
                Graj w automaty za darmo
              </p>
            </li>
            <li class="benefits__item d-flex flex-column">
              <div class="benefits__icon d-flex align-items-center justify-content-center">
                <picture><source srcset="./img/icon/icon-2.webp"type="image/webp"><img src="./img/icon/icon-2.png" alt="icon"></picture>
              </div>
              <p class="benefits__text">
                Dreszcz automatów do gry
              </p>
            </li>
            <li class="benefits__item d-flex flex-column">
              <div class="benefits__icon d-flex align-items-center justify-content-center">
                <picture><source srcset="./img/icon/icon-3.webp"type="image/webp"><img src="./img/icon/icon-3.png" alt="icon"></picture>
              </div>
              <p class="benefits__text">
                Gry przynoszą zabawę
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
  <div class="popup">
    <div class="popup__blur"></div>
    <div class="popup__body">
      <p class="popup__text">
        Używamy plików cookie, aby poprawić nawigację w witrynie, analizować korzystanie z witryny i pomagać w naszych działaniach marketingowych.
      </p>
      <div class="popup__link">
        <a href="main.php">Akceptować</a>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="footer__container container">
      <div class="row">
        <ul class="footer__ul d-flex align-items-center justify-content-center flex-wrap col-12">
          <li class="footer__li">
            <a class="footer__link" href="tt.php">
              Zasady i warunki
            </a>
          </li>
          <li class="footer__li">
            <a class="footer__link" href="pl.php">
              Polityka prywatności
            </a>
          </li>
          <li class="footer__li">
            <a class="footer__link" href="cc.php">
              Polityka Cookie
            </a>
          </li>
        </ul>
        <p class="footer__text col-12">
          Uwaga! W kasynie społecznościowym nie można wygrać ani grać na prawdziwe pieniądze. Ta strona jest
          przeznaczona wyłącznie do rozrywki, bez możliwości wypłaty prawdziwych pieniędzy lub otrzymania wartościowych
          nagród. Gry są dostępne dla użytkowników od 18 roku życia
        </p>
      </div>
    </div>
  </footer>
  <script src="./resources/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script src="./js/smooth-scroll.js"></script>
</body>

</html>