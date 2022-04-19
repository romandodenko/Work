<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Montserrat-Black.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Black.woff2" as="font">
  <link rel="preload" href="./fonts/Montserrat-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Montserrat-Medium.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Medium.woff2" as="font">
  <link rel="preload" href="./fonts/Montserrat-Light.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Light.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>GAMER FUHALLGATO</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__left">
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.php">Gamer <span>fuhallgato</span></a>
        </div>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Dom</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="index.php#about">O nas</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="index.php#games">Gry</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="index.php#benefits">Korzyści</a>
            </li>
          </ul>
        </nav>
        <button class="header__burger burger">
          <span class="burger__line"></span>
        </button>
      </div>

      <?php if(isset($_SESSION['logged_user'])) : ?>
        <div class="header__profile profile" data-da=".header__bottom, 1024, 1">
      <p class="profile__text text"><?php echo $_SESSION['logged_user']->login; ?></p>
      <button class="profile__btn"></button>
      </div>
          <?php else : ?>
            <div class="header__buttons buttons" data-da=".header__bottom, 1024, 1">
        <button class="buttons__log">
          Upoważnienie
        </button>
        <button class="buttons__sign">
          Rejestracja
        </button>
      </div>
            <?php endif; ?>

      <div class="header__bottom"></div>
    </div>
  </header>