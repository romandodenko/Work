<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/Margarine-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Margarine-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Pursuit-of-clarity.com</title>
  <?php 
		require "./db.php";
	?>
</head>
<body>
<header class="header">
<?php if(isset($_SESSION['logged_user'])) : ?>
  <div class="header__container container">
    <div class="header__profile profile">
      <button class="profile__btn">x</button>
    <p class="profile__text text"> <?php echo $_SESSION['logged_user']->login; ?></p>
    </div>
  <div class="header__wrapper-logo">
    <a class="header__logo" href="index.php"><span class="header__pursuit">Pursuit</span><span class="header__of">of</span><span class="header__clarity">clarity</span></a>
  </div>
    <p class="header__text text">
      Herzlich willkommen!
    </p>
  </div>
          <?php else : ?>
            <div class="header__container container">
    <a class="header__reg" href="reg.php">Registrierung</a>
  <div class="header__wrapper-logo">
    <a class="header__logo" href="index.php"><span class="header__pursuit">Pursuit</span><span class="header__of">of</span><span class="header__clarity">clarity</span></a>
  </div>
    <a class="header__log" href="log.php">Genehmigung</a>
  </div>
            <?php endif; ?>
</header>
