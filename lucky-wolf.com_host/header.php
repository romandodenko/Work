<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Inter-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Inter-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Moul-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Moul-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-Regular.woff" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-ExtraBold.woff" as="font">
  <link rel="preload" href="./fonts/MPLUS1p-ExtraBold.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>LUCKY WOLF</title>
  <?php 
		require "./db.php";
	?>

</head>

<body>
  <header class="block-header">
    <div class="block-header__container container">
      <button class="block-header__burger burger">
      <span class="burger__line"></span>
      </button>
      <div class="block-header__logo-wrapper" data-da=".block-header__menu-wrapper, 1024, 0">
        <a class="block-header__logo" href="page-main.php">
          <img src="./img/svg/logo-header.svg" alt="Logo">
        </a>
      </div>
      <div class="block-header__menu-wrapper">
        <nav class="block-header__nav">
          <ul class="block-header__list">
            <li class="block-header__item">
              <a class="block-header__link link" href="page-main.php">Home</a>
            </li>
            <li class="block-header__item">
              <a class="block-header__link link link-anchor" href="#about">About us</a>
            </li>
            <li class="block-header__item">
              <a class="block-header__link link link-anchor" href="#game">Game</a>
            </li>
          </ul>
        </nav>
        <button class="block-header__exit-menu"></button>
      </div>
<?php if(isset($_SESSION['logged_user'])) : ?>

        <div class="header__profile profile" data-da=".block-header__menu-wrapper, 1024, 2">
        <a href="logout.php" class="profile__btn"></a>
      <p class="profile__text text">  <?php echo $_SESSION['logged_user']->email; ?></p>
      </div>

<?php else : ?>
  
            <div class="block-header__buttons" data-da=".block-header__menu-wrapper, 1024, 2">
        <a href="log.php" class="block-header__btn-log">
          Log in
        </a>
        <a href="sign.php" class="block-header__btn-sign">
          Sign up
        </a>
      </div>

<?php endif; ?>

    </div>
  </header>