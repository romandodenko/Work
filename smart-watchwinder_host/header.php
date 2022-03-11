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
  <link rel="stylesheet" href="./resources/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Smart-watchwinder</title>
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
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__item">
            <a class="header__link" href="index.php">Zuhause</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="pol.php">Datenschutzbestimmungen</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="terms.php">Bedingungen und Konditionen</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="cockie.php">Cookie-Richtlinie</a>
          </li>
        </ul>
      </nav>
      <?php if(isset($_SESSION['logged_user'])) : ?>
            <div class="header__profile profile">
            <p class="profile__text">
              <?php echo $_SESSION['logged_user']->login; ?>
              </p>
              <button class="profile__exit">Hinausgehen</button>
            </div>
          <?php else : ?>
            <ul class="header__list link-list">
        <li class="link-list__item">
          <a class="link-list__link" href="reg.php">Anmeldung</a>
        </li>
        <li class="link-list__item">
          <a class="link-list__link" href="log.php">Betreten</a>
        </li>
      </ul>
      <?php endif; ?>
    </div>
  </header>