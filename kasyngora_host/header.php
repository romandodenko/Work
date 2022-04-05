<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/MullerBold.woff" as="font">
  <link rel="preload" href="./fonts/MullerBold.woff2" as="font">
  <link rel="preload" href="./fonts/MullerRegular.woff" as="font">
  <link rel="preload" href="./fonts/MullerRegular.woff2" as="font">
  <link rel="preload" href="./fonts/MullerLight.woff" as="font">
  <link rel="preload" href="./fonts/MullerLight.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Kasyngora Social Casino</title>
  <?php 
		require "./db.php";
	?>
</head>
<body>
<header class="header">
  <div class="header__container container">
    <div class="header__wrapper-logo">
      <a class="header__logo" href="index.php">Kasyn-G</a>
    </div>
    <nav class="header__nav">
      <ul class="header__list">
        <li class="header__item">
          <a class="header__link link" href="index.php">Dom</a>
        </li>
        <li class="header__item">
          <a class="header__link link" href="game.php">Gry</a>
        </li>
        <li class="header__item">
          <a class="header__link link" href="blog.php">Blog</a>
        </li>
      </ul>
    </nav>
    <div class="header__wrp">
      <button class="header__burger burger">
        <span class="burger__line"></span>
      </button>
      <?php if(isset($_SESSION['logged_user'])) : ?>
        <div class="header__profile profile">
        <p class="profile__text text">echo $_SESSION['logged_user']->login;</p>
        <button class="profile__btn">x</button>
      </div>
          <?php else : ?>
            <div class="header__buttons header-buttons">
        <a class="header-buttons__link link" href="reg.php">Rejestracja</a>
        <a class="header-buttons__link link" href="log.php">Zaloguj sie</a>
      </div>
            <?php endif; ?>
    </div>
  </div>
</header>