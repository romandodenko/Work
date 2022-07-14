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