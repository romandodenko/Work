<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Margarine-Regular.woff" as="font">
  <link rel="preload" href="./fonts/Margarine-Regular.woff2" as="font">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Glo-office</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <div class="grid">
    <header class="header">
      <div class="header__container container">
        <div class="header__body">
          <div class="header__wrapper-logo">
            <a class="header__logo" href="index.php">Glo <span>office</span></a>
          </div>
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item">
                <a class="header__link link" href="index.php">Home</a>
              </li>
            </ul>
          </nav>
          <div class="header__buttons">
          <?php if(isset($_SESSION['logged_user'])) : ?>
            <div class="header__profile profile">
            <p class="profile__text text">  <?php echo $_SESSION['logged_user']->login; ?></p>
            <button class="profile__btn">x</button>
            </div>
          <?php else : ?>
            <button class="header__reg link">
              Registration
            </button>
            <button class="header__log link">
              Authorization
            </button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </header>