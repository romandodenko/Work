<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/NewRocker-Regular.woff" as="font">
  <link rel="preload" href="./fonts/NewRocker-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Oswald-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Oswald-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/OtomanopeeOne-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OtomanopeeOne-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Outfit-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Outfit-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>SOCIAL CASINO PLAY GOLDGAME</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__wrapper-logo" data-da=".header__wrapper-menu, 1024, 0">
        <a class="header__logo" href="index.php">
          <picture>
            <source media="(min-width: 1024px)" srcset="./img/svg/logo_fullcreen.svg" type="image/svg+xml">
            <source media="(min-width: 601px)" srcset="./img/svg/logo_1024.svg" type="image/svg+xml">
            <source media="(max-width: 600px)" srcset="./img/svg/logo_320.svg" type="image/svg+xml">
            <img src="./img/svg/logo_fullcreen.svg" alt="Logo">
          </picture>
        </a>
      </div>
      <button class="header__burger burger">
        <span class="burger__line"></span>
      </button>
      <div class="header__wrapper-menu">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Itthon</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="index.php#game">Játékok</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="index.php#about">Rólunk</a>
            </li>
          </ul>
        </nav>
        <button class="header__menu-exit"></button>
      </div>
      <?php if(isset($_SESSION['logged_user'])) : ?>

<div class="header__profile profile">
  <p class="profile__text text">   <?php echo $_SESSION['logged_user']->email; ?></p>
  <a href="logout.php" class="profile__btn"></a>
</div>

<?php else : ?>
<div class="header__buttons">
<button class="header__sign">
  Bejegyzés
</button>
<button class="header__log">
  Engedélyezés
</button>
</div>
<?php endif; ?>
    </div>
  </header>