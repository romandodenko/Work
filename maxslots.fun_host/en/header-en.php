<?php if(isset($_SESSION['logged_user'])) : ?>
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Black.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Black.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Medium.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Medium.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>maxslots.fun</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__top">
      <button class="header__burger burger" data-da=".middle-container, 650, 1">
        <span class="burger__line"></span>
      </button>
      <a class="header__link-profile link" href="profile.php" data-da=".container-bottom, 1024, 1">Account</a>
      <a class="header__logo" href="index.php">Maxslots <span>fun</span></a>
      <button class="header__join" data-da=".container-bottom, 1024, 2">Join</button>
      <div class="header__right" data-da=".middle-container, 650, 1">
        <div class="header__country country">
          <button class="country__button" data-path="country">
            <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
          </button>
          <ul class="country__list" data-target="country">
            <li class="country__item">
              <a class="country__link" href="../pl/index-poland.php"><picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture></a>
            </li>
            <li class="country__item">
              <a class="country__link" href="../de/index-germany.php"><picture><source srcset="./img/ger.webp"type="image/webp"><img src="./img/ger.png" alt="Germany"></picture></a>
            </li>
          </ul>
        </div>
        <button class="header__burger burger-menu">
          <span class="burger-menu__line"></span>
        </button>
      </div>
    </div>
    <div class="header__middle">
      <div class="header__container container middle-container"></div>
    </div>
    <div class="header__bottom" data-da=".header, 650, 0">
      <div class="header__container container container-bottom">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link home" href="index.php">
                <svg width="25" height="23">
                  <use xlink:href="./img/svg/sprites.svg#main"></use>
                </svg>
                <span>Home</span>
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="all-games.php">
                <svg width="35" height="18">
                  <use xlink:href="./img/svg/sprites.svg#games"></use>
                </svg>
                <span>All games</span></a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#slots">
                <svg width="35" height="18">
                  <use xlink:href="./img/svg/sprites.svg#slots"></use>
                </svg>
                <span>Free slots</span>
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="blogs.php">
                <svg width="24" height="24">
                  <use xlink:href="./img/svg/sprites.svg#social-casino"></use>
                </svg>
                <span>Social casino</span>
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="about.php">
                <svg width="18" height="22">
                  <use xlink:href="./img/svg/sprites.svg#about"></use>
                </svg>
                <span>About us</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
          <?php else : ?>
            <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Black.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Black.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Medium.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Medium.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff" as="font">
  <link rel="preload" href="./fonts/Roboto-Light.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>maxslots.fun</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__top">
      <button class="header__burger burger" data-da=".middle-container, 650, 1">
        <span class="burger__line"></span>
      </button>
      <div class="header__buttons buttons" data-da=".container-bottom, 1024, 1">
        <div class="buttons__buttons">
          <button class="buttons__log link">Log in</button>
          <button class="buttons__sign link">Sign up</button>
        </div>
        <div class="buttons__icon">
          <svg width="30" height="31">
            <use xlink:href="./img/svg/sprites.svg#profile"></use>
          </svg>
        </div>
      </div>
      <a class="header__logo" href="index.php">Maxslots <span>fun</span></a>
      <button class="header__join" data-da=".container-bottom, 1024, 2">Join</button>
      <div class="header__right" data-da=".middle-container, 650, 1">
        <div class="header__country country">
          <button class="country__button" data-path="country">
            <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
          </button>
          <ul class="country__list" data-target="country">
            <li class="country__item">
              <a class="country__link" href="../pl/index-poland.php"><picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture></a>
            </li>
            <li class="country__item">
              <a class="country__link" href="../de/index-germany.php"><picture><source srcset="./img/ger.webp"type="image/webp"><img src="./img/ger.png" alt="Germany"></picture></a>
            </li>
          </ul>
        </div>
        <button class="header__burger burger-menu">
          <span class="burger-menu__line"></span>
        </button>
      </div>
    </div>
    <div class="header__middle">
      <div class="header__container container middle-container"></div>
    </div>
    <div class="header__bottom" data-da=".header, 650, 0">
      <div class="header__container container container-bottom">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link home" href="index.php">
                <svg width="25" height="23">
                  <use xlink:href="./img/svg/sprites.svg#main"></use>
                </svg>
                <span>Home</span>
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="all-games.php">
                <svg width="35" height="18">
                  <use xlink:href="./img/svg/sprites.svg#games"></use>
                </svg>
                <span>All games</span></a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#slots">
                <svg width="35" height="18">
                  <use xlink:href="./img/svg/sprites.svg#slots"></use>
                </svg>
                <span>Free slots</span>
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="blogs.php">
                <svg width="24" height="24">
                  <use xlink:href="./img/svg/sprites.svg#social-casino"></use>
                </svg>
                <span>Social casino</span>
              </a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="about.php">
                <svg width="18" height="22">
                  <use xlink:href="./img/svg/sprites.svg#about"></use>
                </svg>
                <span>About us</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
            <?php endif; ?>