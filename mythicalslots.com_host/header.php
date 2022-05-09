<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/BalooThambi2-Regular.woff" as="font">
  <link rel="preload" href="./fonts/BalooThambi2-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/LilitaOne-Regular.woff" as="font">
  <link rel="preload" href="./fonts/LilitaOne-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Mythicalslots.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__body">
      <div class="header__container container">
        <div class="header__wrapper-logo" data-da=".header__wrapper-burger, 1024, 1">
          <a class="header__logo" href="main-page.php">
            <picture>
              <source media="(min-width: 1081px)" srcset="./img/svg/logo-header.svg" type="image/svg+xml">
              <source media="(max-width: 1080px)" srcset="./img/svg/logo-header-320.svg" type="image/svg+xml">
              <img src="./img/svg/logo-header.svg" alt="Logo">
            </picture>
          </a>
        </div>
        <button class="header__burger burger">
          <span class="burger__line"></span>
        </button>
        <div class="header__wrapper-burger">
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item">
                <a class="header__link link" href="main-page.php">Strona główna</a>
              </li>
              <li class="header__item">
                <a class="header__link link link-anchor" href="#about">O nas</a>
              </li>
              <li class="header__item">
                <a class="header__link link" href="game.php">Nasze gry</a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- <div class="header__profile profile" data-da=".header__wrapper-burger, 1024, 1">
          <div class="profile__icon">
            <svg width="45" height="44">
            <use xlink:href="./img/svg/sprites.svg#icon"></use>
            </svg>
          </div>
          <div class="profile__right">
            <p class="profile__text">login login login login login login login login login login</p>
          <button class="profile__btn">Wyloguj</button>
          </div>
        </div> -->
        <div class="header__buttons header-buttons" data-da=".header__wrapper-burger, 1024, 1">
          <button class="header-buttons__log">
            Zaloguj sie
          </button>
          <div class="header-buttons__icon">
            <picture>
              <source media="(min-width: 601px)" srcset="./img/svg/icon.svg" type="image/svg+xml">
              <source media="(max-width: 600px)" srcset="./img/svg/icon-320.svg" type="image/svg+xml">
              <img src="./img/svg/icon.svg" alt="Icon">
            </picture>
          </div>
          <button class="header-buttons__sign">
            Zapisz sie
          </button>
        </div>
      </div>
    </div>
  </header>