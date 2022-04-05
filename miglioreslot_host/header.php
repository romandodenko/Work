<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/ZenKakuGothicNew-Bold.woff" as="font">
  <link rel="preload" href="./fonts/ZenKakuGothicNew-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/ZenKakuGothicNew-Regular.woff" as="font">
  <link rel="preload" href="./fonts/ZenKakuGothicNew-Regular.woff2" as="font">
  <link rel="stylesheet" href="./resources/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>MIGLIORESLOT</title>
  <?php 
		require "./db.php";
	?>
</head>
<body>
  <header class="header">
    <div class="header__container container">
      <a class="header__logo" href="index.php">Mi<span>g</span>lioreslot</a>
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__item">
            <a class="header__link" href="index.php">Casa</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="faq.php">Faq</a>
          </li>
          <?php if(isset($_SESSION['logged_user'])) : ?>
            <li class="header__item">
            <div class="header__profile profile">
             <p class="profile__text">
              <?php echo $_SESSION['logged_user']->login; ?>
              </p>
              <button class="profile__btn"><span>x</span></button>
            </div>
            </li>
          <?php else : ?>
            <li class="header__item ">
            <a class="header__link" href="forms.php">Registrazione e autorizzazione</a>
            </li>
            <?php endif; ?>
        </ul>
      </nav>
      <ul class="header__list header-sublist">
        <li class="header-sublist__item">
          <a class="header-sublist__link" href="politicks.php">Politica sulla riservatezza</a>
        </li>
        <li class="header-sublist__item">
          <a class="header-sublist__link" href="politicks.php">Termini e Condizioni</a>
        </li>
        <li class="header-sublist__item">
          <a class="header-sublist__link" href="politicks.php">Gestione dei Cookie</a>
        </li>
      </ul>
    </div>
  </header>