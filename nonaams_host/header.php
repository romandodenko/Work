<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Non-aams-top</title>
  <?php 
		require "./db.php";
	?>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container container">
        <div class="header__wrapper-buttons">
          <button class="header__burger burger">
            <span class="burger__line"></span>
          </button>
          <?php if(isset($_SESSION['logged_user'])) : ?>
            <div class="header__profile profile">
          <p class="profile__text text"><?php echo $_SESSION['logged_user']->login; ?></p>
          <button class="profile__btn">x</button>
          </div>
          <?php else : ?>
            <div class="header__buttons">
          <a class="header__reg link" href="reg.php">Registrazione</a>
          <a class="header__log link" href="log.php">Autorizzazione</a>
          </div>
            <?php endif; ?>
        </div>
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.php">Non-aams-top</a>
        </div>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Casa</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="blogs.php">Articoli</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="game-all.php">Giochi</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>