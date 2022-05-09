<!DOCTYPE html>
<html lang="el">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Battambang-Black.woff" as="font">
  <link rel="preload" href="./fonts/Battambang-Black.woff2" as="font">
  <link rel="preload" href="./fonts/Battambang-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Battambang-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Battambang-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Battambang-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Comfortaa-Medium.woff" as="font">
  <link rel="preload" href="./fonts/Comfortaa-Medium.woff2" as="font">
  <link rel="preload" href="./fonts/Comfortaa-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Comfortaa-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Imprima-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Imprima-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Frost-lucky</title>
  <?php 
		require "./db.php";
	?>

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
              <a class="header__link link" href="index.php">
                Κύρια σελίδα
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#about">
                Σχετικά με εμάς
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#game">
                Παιχνίδια
              </a>
            </li>
          </ul>
        </nav>
        <button class="header__menu-exit"></button>
      </div>
      <div class="header__wrapper-logo" data-da=".header__wrapper-menu, 1130, 0">
        <a class="header__logo" href="index.php">
          <picture>
            <source media="(min-width: 1235px)" srcset="./img/svg/logo_fullscreen.svg" type="image/svg+xml">
            <source media="(min-width: 601px)" srcset="./img/svg/logo_1024.svg" type="image/svg+xml">
            <source media="(max-width: 600px)" srcset="./img/svg/logo_320.svg" type="image/svg+xml">
            <img src="./img/svg/logo_fullscreen.svg" alt="Logo">
          </picture>
        </a>
      </div>

      <?php if(isset($_SESSION['logged_user'])) : ?>
      <div class="header__profile profile" data-da=".header__wrapper-menu, 1130, 2">
      <p class="profile__text text"><?php echo $_SESSION['logged_user']->email; ?></p>
      <a href="logout.php" class="profile__btn"></a>
      </div>
<?php else : ?>

  <div class="header__buttons" data-da=".header__wrapper-menu, 1130, 2">
        <button class="header__log">
          Να ερθει μεσα
        </button>
        <button class="header__sign">
          Εγγραφή
        </button>
      </div>

<?php endif; ?>

    </div>
  </header>