<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Itim-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Itim-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Lalezar-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Lalezar-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>fortune game</title>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <button class="header__burger burger">
        <span class="burger__line"></span>
      </button>
      <div class="header__wrapper-menu">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link" href="index.php">Strona główna</a>
            </li>
            <li class="header__item">
              <a class="header__link link-anchor" href="#about">O nas</a>
            </li>
            <li class="header__item">
              <a class="header__link link-anchor" href="#game">Nasze gry</a>
            </li>
          </ul>
        </nav>
        <button class="header__menu-close"></button>
      </div>
      <div class="header__wrapper-logo" data-da=".header__wrapper-menu, 1024, 0">
        <a class="header__logo" href="index.php">
          <img src="./img/svg/logo-header.svg" alt="Logo">
        </a>
      </div>
    </div>
  </header>