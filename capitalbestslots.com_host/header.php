<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/JockeyOne-Regular.woff" as="font">
  <link rel="preload" href="./fonts/JockeyOne-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Moul-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Moul-Regular.woff2" as="font">
  <link rel="stylesheet" href="./resources/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Сapitalbestslots</title>
</head>
<body>
  <header class="header">
    <div class="header__container container">
    <div class="row ">
     <div class="header__body d-flex align-items-center justify-content-between">
      <nav class="header__nav navbar-expand-md navbar col-7 col-lg-6 col-xxl-4 ">
        <button class="header__nav-toggler navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="header__offcanvas offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="header__offcanvas-header offcanvas-header">
            <button type="button" class="header__close-btn btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="header__offcanvas-body offcanvas-body">
            <ul class="header__nav navbar-nav flex-grow-1 pe-3">
              <li class="header__nav-item nav-item">
                <a class="header__nav-link nav-link" href="main-page.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">Strona główna</a>
              </li>
              <li class="header__nav-item nav-item">
                <a class="header__nav-link nav-link" href="main-page.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>#about">O nas</a>
              </li>
              <li class="header__nav-item nav-item">
                <a class="header__nav-link nav-link" href="main-page.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>#game">Gry</a>
              </li>
            </ul>
          </div>
        </div>

    </nav>
    <div class="header__wrapper-logo col-5 col-xl-4" data-da=".header__offcanvas-header, 768, 0">
      <a class="header__logo" href="main-page.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
        <p class="bnfts__text">capitalbestslots</p>
      </a>
    </div>
     </div>
    </div>
    </div>
  </header>