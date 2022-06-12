<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Inter-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Inter-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/KronaOne-Regular.woff" as="font">
  <link rel="preload" href="./fonts/KronaOne-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Kufam-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Kufam-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Faraons-slot.com</title>
</head>
<body>
<header class="header">
  <div class="header__container container">
    <button class="header__burger burger">
    <span class="burger__line"></span>
    </button>
    <div class="header__wrapper-logo">
      <a class="header__logo" href="main-page.php">
        <picture>
        <source media="(min-width: 1024px)" srcset="./img/svg/logo.svg" type="image/svg+xml">
        <source media="(min-width: 601px)" srcset="./img/svg/logo_2.svg" type="image/svg+xml">
        <source media="(max-width: 600px)" srcset="./img/svg/logo_4.svg" type="image/svg+xml">
        <img src="./img/svg/logo.svg" alt="Logo">
        </picture>
      </a>
    </div>
    <div class="header__menu">
      <div class="header__logo-menu">
        <a href="main-page.php">
          <img src="./img/svg/logo_2.svg" alt="Logo">
        </a>
      </div>
      <nav class="header__nav nav">
      <ul class="nav__list">
      <li class="nav__item">
      <a class="nav__link" href="main-page.php">Strona główna</a>
      </li>
      <li class="nav__item">
        <a class="nav__link" data-scroll href="main-page.php#game">Gry</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" data-scroll href="main-page.php#about">O nas</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" data-scroll href="main-page.php#benefits">Zalety</a>
            </li>
      </ul>
      </nav>
      <ul class="header__list">
        <li class="header__item">
          <a class="header__link" href="terms.php">
            Regulamin
          </a>
        </li>
        <li class="header__item">
          <a class="header__link" href="privacy.php">
            Polityka prywatności
          </a>
        </li>
        <li class="header__item">
          <a class="header__link" href="cockie.php">
            Polityka Cookie
          </a>
        </li>
      </ul>
      <button class="header__exit-menu"></button>
    </div>
  </div>
</header>