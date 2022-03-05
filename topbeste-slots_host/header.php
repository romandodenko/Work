<!DOCTYPE html>
<html lang="da">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <link rel="preload" href="./fonts/TTFirsNeue-Bold.woff" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Regular.woff" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/main-min.css">
  <?php 
		require "./db.php";
	?>
  <title>Topbeste-slots</title>
</head>

<body>
  <div class="page">
    <header class="header">
      <div class="header__container container">
        <a class="header__logo" href="index.php">Top beste slots</a>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link" href="index.php">Vigtigste</a>
            </li>
            <?php if(isset($_SESSION['logged_user'])) : ?>
            <li class="header__item">
            <p class="header__text">
              <?php echo $_SESSION['logged_user']->login; ?>
              </p>
              <button class="header__btn">Afslut</button>
            </li>
          <?php else : ?>
            <li class="header__item">
              <a class="header__link reg-link links" href="#reg">Registrering</a>
            </li>
            <li class="header__item">
              <a class="header__link log-link links" href="#log">Log ind</a>
            </li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </header>


    