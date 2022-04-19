<?php if(isset($_SESSION['logged_user'])) : ?>

    
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main.css">
  <title>discwithchildrensgames.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body class="forms-body">
  <div class="header">
    <div class="header__container container">
      <div class="header__links header-links vis">
        <div class="header__profile profile">
          <p class="profile__text text"><?php echo $_SESSION['logged_user']->login; ?></p>
          <button class="profile__btn"></button>
          </div>
        <a class="header-links__link reg-link" href="main-page.php">Home</a>
        <a class="header-links__link" href="games.php">Games</a>
      </div>
      <ul class="welcome__list header-list vis">
        <li class="header-list__item">
          <a class="header-list__link" href="policy.php">Privacy policy</a>
        </li>
        <li class="header-list__item">
          <a class="header-list__link" href="terms.php">Terms and conditions</a>
        </li>
        <li class="header-list__item">
          <a class="header-list__link" href="cockie.php">Cookie policy</a>
        </li>
      </ul>
    </div>
  </div>


    
<?php else : ?>

  

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main.css">
  <title>discwithchildrensgames.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body class="forms-body">
  <div class="header">
    <div class="header__container container">
      <div class="header__links header-links vis">
        <a class="header-links__link reg-link" href="main-page.php">Home</a>
        <a class="header-links__link reg-link" href="games.php">Games</a>
        <a class="header-links__link" href="log.php">Authorization</a>
      </div>
      <ul class="welcome__list header-list vis">
        <li class="header-list__item">
          <a class="header-list__link" href="policy.php">Privacy policy</a>
        </li>
        <li class="header-list__item">
          <a class="header-list__link" href="terms.php">Terms and conditions</a>
        </li>
        <li class="header-list__item">
          <a class="header-list__link" href="cockie.php">Cookie policy</a>
        </li>
      </ul>
    </div>
  </div>


  <?php endif; ?>