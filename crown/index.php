<!DOCTYPE html>
<html lang="en-au">
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
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./resources/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Crown social casino</title>
  <?php 
		require "./db.php";
	?>
</head>
<body>
<div class="flex">
<?php 
  include 'header.php';
?>
  <div class="flex__top">
    <div class="about">
      <div class="about__container container">
          <div class="about__body" data-aos="fade-left">
            <h1 class="about__title">
              <span>About us</span>
            </h1>
            <p class="about__text">
              Let's talk a little about us. We are the best social casino in Australia. We only have the best, popular games in which you can have a good time. Our social casino is completely free, so it is good for training. Our site is perfectly adapted, so you can visit it and play games from any device. All in all, enjoy the game! Sincerely, the administration of the site.
            </p>
            <div class="about__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.jpg" alt="About"></picture>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="flex__bottom">
    <div class="game">
      <div class="game__container container">
        <div class="game__body" data-aos="fade-right">
          <div class="game__descr">
            <h2 class="game__title">
              <span>Games</span>
            </h2>
            <p class="game__text">
              Our games are addictive. Our games are the best. Our games are loved by hundreds of players. Do not trust? Try it yourself and join the players who love our games!
            </p>
          </div>
                <div class="game__swiper game-swiper">
                  <div class="game-swiper__buttons">
                    <button class="game-swiper__prev">
                      <
                    </button>
                    <button class="game-swiper__next">
                      >
                    </button>
                  </div>
                  <div class="game-swiper__wrapper swiper-wrapper">
                    <div class="game-swiper__slide swiper-slide">
                      <div class="game-swiper__image">
                        <picture><source srcset="./img/space_odyssey.webp"type="image/webp"><img src="./img/space_odyssey.jpg" alt="Space odyssey"></picture>
                      </div>
                      <div class="game-swiper__descr">
                        <h3 class="game-swiper__title">
                          Space odyssey
                        </h3>
                        <p class="game-swiper__text">
                          Embark on a space odyssey and find treasure!
                        </p>
                        <div class="game-swiper__wrapper-link">
                          <a class="game-swiper__link" href="#">Go</a>
                        </div>
                      </div>
                    </div>
                    <div class="game-swiper__slide swiper-slide">
                      <div class="game-swiper__image">
                        <picture><source srcset="./img/hunter.webp"type="image/webp"><img src="./img/hunter.jpg" alt="Hunt"></picture>
                      </div>
                      <div class="game-swiper__descr">
                        <h3 class="game-swiper__title">
                          Primal hunt
                        </h3>
                        <p class="game-swiper__text">
                          Our ancestors hunted, now you hunt for treasures!
                        </p>
                        <div class="game-swiper__wrapper-link">
                          <a class="game-swiper__link" href="#">Go</a>
                        </div>
                      </div>
                    </div>
                    <div class="game-swiper__slide swiper-slide">
                      <div class="game-swiper__image">
                        <picture><source srcset="./img/fishing.webp"type="image/webp"><img src="./img/fishing.jpg" alt="Fishing"></picture>
                      </div>
                      <div class="game-swiper__descr">
                        <h3 class="game-swiper__title">
                          Fishing
                        </h3>
                        <p class="game-swiper__text">
                          Catch, catch, catch her! There she is, yes yes, catch that fish!
                        </p>
                        <div class="game-swiper__wrapper-link">
                          <a class="game-swiper__link" href="#">Go</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
      </div>
    </div>
    <div class="advantages">
      <div class="advantages__container container">
        <div class="advantages__body" data-aos="fade-left">
          <h2 class="advantages__title">
            <span>Advantages</span>
          </h2>
          <ul class="advantages__list">
            <li class="advantages__item">
              <div class="advantages__image">
                <picture><source srcset="./img/game.webp"type="image/webp"><img src="./img/game.jpg" alt="Game"></picture>
              </div>
              <p class="advantages__text">
                Completely free games, no money needed to play.
              </p>
            </li>
            <li class="advantages__item">
              <div class="advantages__image">
                <picture><source srcset="./img/site.webp"type="image/webp"><img src="./img/site.jpg" alt="Site"></picture>
              </div>
              <p class="advantages__text">
                Responsive website that can be accessed from any device.
              </p>
            </li>
            <li class="advantages__item">
              <div class="advantages__image">
                <picture><source srcset="./img/earth.webp"type="image/webp"><img src="./img/earth.jpg" alt="Earth"></picture>
              </div>
              <p class="advantages__text">
                The best and most addictive games that are fun and exciting to play.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php 
  include 'footer.php';
?>
  </div>
</div>
<div class="reg">
  <div class="reg__close"></div>
<div class="reg__wrapper-form">
  <form class="reg__form" action="#" method="POST">
    <div class="reg__label">
      <input class="reg__input" type="text" placeholder="Email" name="email">
      <input class="reg__input" type="text" placeholder="Login" name="login">
    </div>
    <div class="reg__label">
      <input class="reg__input" type="password" placeholder="Password" name="password">
      <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
    </div>
    <div class="reg__button">
      <div class="reg__exit">x</div>
      <input class="reg__btn" type="submit" name="sign_up" value="Register">
    </div>
</form>
<?php
        $data = $_POST;
        if(isset($data['sign_up'])) {
          $errors = array();

          if(trim($data['login']) == '') {
            $errors[] = "Enter login";
          }
          if(trim($data['email']) == '') {
            $errors[] = "Enter your email address";
          }
          if($data['password'] == '') {

            $errors[] = "Enter password";
          }
          if($data['password_2'] != $data['password']) {

            $errors[] = "Confirm the password";
          }
          if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

            $errors[] = "Confirm the password";
          }
          if(!empty($errors)) {
            echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
          }
        }
      ?>
</div>
</div>
<div class="log">
  <div class="log__close"></div>
<div class="log__wrapper-form">
    <form class="log__form" action="#" method="POST">
      <div class="log__label">
        <input class="log__input" type="text" placeholder="Your login" name="login">
      </div>
      <div class="log__label">
        <input class="log__input" type="password" placeholder="Password" name="password">
      </div>
      <div class="log__buttons">
        <div class="log__exit">x</div>
        <input class="log__btn" type="submit" name="log_in" value="Log in">
      </div>
  </form>
  <?php
					$data = $_POST;

					if (isset($data['log_in'])) {

						$errors = array();

						$user = R::findOne('users', 'login = ?', array($data['login']));

						if ($user) {

							if (password_verify($data['password'], $user->password)) {

								$_SESSION['logged_user'] = $user;

								header('Location: index.php');
							} else {

								$errors[] = 'The password was entered incorrectly';
							}
						} else {
							$errors[] = 'There is no user with this name';
						}

						if (!empty($errors)) {

							echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
						}
					}
					?>
  </div>
</div>
<script src="./resources/aos.js"></script>
<script src="./resources/swiper.js"></script>
<script src="./js/main.min.js"></script>
</body>
</html>