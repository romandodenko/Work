<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Impact.woff" as="font">
  <link rel="preload" href="./fonts/Impact.woff2" as="font">
  <link rel="preload" href="./fonts/Lalezar-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Lalezar-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Sticky-lucky.com</title>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <button class="header__burger burger">
        <span class="burger__line"></span>
      </button>
      <div class="header__wrapper-logo" data-da=".header__menu, 1024, 0">
        <a href="main-page.php">
          <img src="./img/svg/header-logo.svg" alt="Logo">
        </a>
      </div>
      <div class="header__menu">
        <nav class="header__nav nav">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__link" href="main-page.php">Pagina principal</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" data-scroll href="main-page.php#games">Juegos</a>
            </li>
            <li class="nav__item">
              <a class="nav__link" data-scroll  href="main-page.php#about">Sobre nosotros</a>
            </li>
          </ul>
        </nav>
        <button class="header__exit-menu"></button>
      </div>

    </div>
  </header>