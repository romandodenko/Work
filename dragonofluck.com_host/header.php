<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Montserrat-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/SourceSans3-Bold.woff" as="font">
  <link rel="preload" href="./fonts/SourceSans3-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/SourceSans3-Regular.woff" as="font">
  <link rel="preload" href="./fonts/SourceSans3-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>DRAGON OF LUCK</title>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <button class="header__burger burger">
        <span class="burger__line"></span>
      </button>
      <div class="header__wrapper-logo" data-da=".header__inner-menu, 768, 0">
        <a class="header__logo" href="main-page.php">
          <picture>
          <source media="(min-width: 1024px)" srcset="./img/svg/logo.svg" type="image/svg+xml">
          <source media="(min-width: 769px)" srcset="./img/svg/logo_1024.svg" type="image/svg+xml">
          <source media="(max-width: 768px)" srcset="./img/svg/logo_320.svg" type="image/svg+xml">
          <img src="./img/svg/logo.svg" alt="Logo">
          </picture>
        </a>
      </div>
      <div class="header__inner-menu">
        <nav class="header__nav nav">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__link" href="main-page.php">Main</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="main-page.php#game" data-scroll>Games</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" href="main-page.php#about" data-scroll>About us</a>
            </li>
          </ul>
        </nav>
        <button class="header__inner-exit">
        </button>
      </div>
    </div>
  </header>