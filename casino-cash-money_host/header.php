

<?php if(isset($_SESSION['logged_user'])) : ?>


  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Montserrat-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Montserrat-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Montserrat-Light.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Light.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Casino cash money</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__top">
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.php">Casino cash <span>money</span></a>
        </div>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Home</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#games">Games</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#faq">Faq</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#advantages">Advantages</a>
            </li>
          </ul>
        </nav>
        <div class="header__profile profile" data-da=".header__bottom, 1024, 1">
        <p class="profile__text text"><?php echo $_SESSION['logged_user']->login; ?></p>
        <button class="profile__btn"></button>
        </div>  
        <button class="header__burger burger">
          <span class="burger__line"></span>
        </button>
      </div>
      <div class="header__bottom"></div>
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
  <link rel="preload" href="./fonts/Montserrat-Bold.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/Montserrat-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Montserrat-Light.woff" as="font">
  <link rel="preload" href="./fonts/Montserrat-Light.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Casino cash money</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__top">
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.php">Casino cash <span>money</span></a>
        </div>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Home</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#games">Games</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#faq">Faq</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#advantages">Advantages</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="reg.php">Registration</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="log.php">Authorization</a>
            </li>
          </ul>
        </nav>
        <button class="header__burger burger">
          <span class="burger__line"></span>
        </button>
      </div>
      <div class="header__bottom"></div>
    </div>
  </header>



<?php endif; ?>