<?php if(isset($_SESSION['logged_user'])) : ?>



  <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./img/favicon.png">
	<link rel="stylesheet" href="./css/main.css">
	<script src="./js/main.js" defer></script>
	<script src="./js/backer.js" defer></script>
	<title>discwithchildrensgames.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>

	<div class="content">
		<section class="content__item">

			<div class="frame"></div>

			<div class="frame">
				<div class="frame__container container">
					<div class="frame__content welcome">
						<div class="welcome__body">
							<div class="welcome__image">
								<img src="./img/welcome_man.png" alt="Man">
							</div>
							<div class="welcome__descr">
								<div class="welcome__links welcome-links vis" style="justify-content: space-between;">
									<div class="header__profile profile">
										<p class="profile__text text"><?php echo $_SESSION['logged_user']->login; ?></p>
										<button class="profile__btn"></button>
										</div>
                  <a class="welcome-links__link reg-link" href="games.php">Games</a>
								</div>
								<h1 class="welcome__title">Welcome to our social casino <span>discwithchildrensgames.com</span></h1>
								<p class="welcome__text">
									To move around the site, use the scroll
								</p>
								<ul class="welcome__list welcome-list vis">
									<li class="welcome-list__item">
										<a class="welcome-list__link" href="policy.php">Privacy policy</a>
									</li>
									<li class="welcome-list__item">
										<a class="welcome-list__link" href="terms.php">Terms and conditions</a>
									</li>
									<li class="welcome-list__item">
										<a class="welcome-list__link" href="cockie.php">Cookie policy</a>
									</li>
								</ul>
								<p class="welcome__warning">
									The Social Casino is intended only for persons over 18 years of age. Social Casino does not give you the
									opportunity to win or earn valuable prizes or money.
								</p>
							</div>
							<div class="welcome__image">
								<img src="./img/welcome_man_2.png" alt="Man">
							</div>
						</div>
					</div>
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
	<script src="./js/main.js" defer></script>
	<script src="./js/backer.js" defer></script>
	<title>discwithchildrensgames.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>

	<div class="content">
		<section class="content__item">

			<div class="frame"></div>

			<div class="frame">
				<div class="frame__container container">
					<div class="frame__content welcome">
						<div class="welcome__body">
							<div class="welcome__image">
								<img src="./img/welcome_man.png" alt="Man">
							</div>
							<div class="welcome__descr">
								<div class="welcome__links welcome-links vis">
									<a class="welcome-links__link reg-link" href="reg.html">Registration</a>
                  <a class="welcome-links__link reg-link" href="games.php">Games</a>
									<a class="welcome-links__link" href="log.html">Authorization</a>
								</div>
								<h1 class="welcome__title">Welcome to our social casino <span>discwithchildrensgames.com</span></h1>
								<p class="welcome__text">
									To move around the site, use the scroll
								</p>
								<ul class="welcome__list welcome-list vis">
									<li class="welcome-list__item">
										<a class="welcome-list__link" href="policy.php">Privacy policy</a>
									</li>
									<li class="welcome-list__item">
										<a class="welcome-list__link" href="terms.php">Terms and conditions</a>
									</li>
									<li class="welcome-list__item">
										<a class="welcome-list__link" href="cockie.php">Cookie policy</a>
									</li>
								</ul>
								<p class="welcome__warning">
									The Social Casino is intended only for persons over 18 years of age. Social Casino does not give you the
									opportunity to win or earn valuable prizes or money.
								</p>
							</div>
							<div class="welcome__image">
								<img src="./img/welcome_man_2.png" alt="Man">
							</div>
						</div>
					</div>
				</div>
			</div>





<?php endif; ?>