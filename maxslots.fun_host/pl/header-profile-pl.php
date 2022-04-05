<!DOCTYPE html>
<html lang="pl">

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

<body class="profile-page">
  <header class="header">
    <div class="header__top">
      <div class="header__left">
        <a class="header__logo" href="index-poland.php">Maxslots <span>fun</span></a>
        <a class="header__link-profile link" href="profile-poland.php">Rachunek</a>
      </div>
      <div class="header__right">
        <a class="header__back" href="index-poland.php">Wrócić do domu</a>
        <div class="header__country country">
          <button class="country__button" data-path="country">
            <picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture>
          </button>
          <ul class="country__list" data-target="country">
            <li class="country__item">
              <a class="country__link" href="../en/index.php"><picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture></a>
            </li>
            <li class="country__item">
              <a class="country__link" href="../de/index-germany.php"><picture><source srcset="./img/ger.webp"type="image/webp"><img src="./img/ger.png" alt="Germany"></picture></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>