<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff2" as="font">
  <link rel="stylesheet" href="./resources/animate.css">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Pure-essentie-catherine-maes.com</title>
</head>
<?php 
		require "./db.php";
?>
<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__wrapper-logo">
        <a class="header__logo" href="index.php">PECM <span
            class="header__span">Pure-essentie-catherine-maes</span></a>
      </div>
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__item">
            <a class="header__link link" href="index.php">
              Domov
            </a>
          </li>
          <?php if(isset($_SESSION['logged_user'])) : ?>
            <li class="header__item">
            <div class="header__profile profile">
              <p class="profile__text text"> <?php echo $_SESSION['logged_user']->login; ?></p>
              <button class="profile__btn">x</button>
              </div>
          </li>
          <?php else : ?>
            <li class="header__item">
            <a class="header__link link" href="reg.php">
              Registrace
            </a>
          </li>
          <li class="header__item">
            <a class="header__link link" href="log.php">
              Oprávnění
            </a>
          </li>
            <?php endif; ?>
        </ul>
      </nav>
      <div class="header__image">
        <picture><source srcset="./img/header-img.webp"type="image/webp"><img src="./img/header-img.png" alt="Header image"></picture>
      </div>
      <div class="header__star star-one"></div>
      <div class="header__star star-two"></div>
      <div class="header__star star-third"></div>
      <div class="header__star star-four"></div>
      <div class="header__star star-five"></div>
      <div class="header__star star-six"></div>
      <div class="header__star star-seven"></div>
      <div class="header__star star-eight"></div>
      <div class="header__star star-nine"></div>
      <div class="header__star star-ten"></div>
    </div>
  </header>