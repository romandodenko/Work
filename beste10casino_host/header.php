<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/JockeyOne-Regular.woff" as="font">
  <link rel="preload" href="./fonts/JockeyOne-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Kodchasan-Medium.woff" as="font">
  <link rel="preload" href="./fonts/Kodchasan-Medium.woff2" as="font">
  <link rel="preload" href="./fonts/Kodchasan-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Kodchasan-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Kodchasan-SemiBold.woff" as="font">
  <link rel="preload" href="./fonts/Kodchasan-SemiBold.woff2" as="font">
  <link rel="stylesheet" href="./resources/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>BESTE10CASINO</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="hd">
    <div class="hd__container container">
      <div class="row">
        <div class="hd__body d-flex align-items-center justify-content-between">
          <div class="hd__wrapper-logo col-lg-3" data-da=".hd__wrapper-menu, 991, 0">
            <a class="hd__logo" href="index.php">
              <picture>
                <source media="(min-width: 601px)" srcset="./img/logo.webp" type="image/webp">
                <source media="(max-width: 600px)" srcset="./img/logo_320.png" type="image/png">
                <source media="(max-width: 600px)" srcset="./img/logo_320.webp" type="image/webp">
                <img src="./img/logo.png" alt="Logo">
              </picture>
            </a>
          </div>
          <button class="hd__burger burger col-12">
            <span class="burger__line"></span>
          </button>
          <div class="hd__wrapper-menu col-lg-4 d-flex align-items-center flex-column flex-lg-row">
            <nav class="hd__nav">
              <ul class="hd__list d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">
                <li class="hd__item">
                  <a class="hd__link link" href="index.php">Startseite</a>
                </li>
                <li class="hd__item">
                  <a class="hd__link link" href="about.php">Über uns</a>
                </li>
                <li class="hd__item">
                  <a class="hd__link link" href="game.php">Spiele</a>
                </li>
              </ul>
            </nav>
            <button class="hd__menu-exit"></button>
          </div>
          <div class="hd__buttons d-flex align-items-center flex-column flex-lg-row col4 col-xl-3"
            data-da=".hd__wrapper-menu, 991, 2">
            <button class="hd__log hd-button-log">
              Einloggen
            </button>
            <button class="hd__sign hd-button-sign">
              Anmeldung
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>