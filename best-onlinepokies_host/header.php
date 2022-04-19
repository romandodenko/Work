<?php if(isset($_SESSION['logged_user'])) : ?>



  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Lovelo-LineBold.woff" as="font">
  <link rel="preload" href="./fonts/Lovelo-LineBold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff2" as="font">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Best-onlinepokies.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__top">
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.php">
            <picture><source srcset="./img/logo-img.webp"type="image/webp"><img src="./img/logo-img.png" alt="Yoda"></picture>
            <span>Best.onlinepokies</span>
          </a>
        </div>
        <div class="header__profile profile" data-da=".header__bottom, 1024, 1">
        <p class="profile__text text">login login login login login login login login login login</p>
        <button class="profile__btn"></button>
        </div>
        <button class="header__burger burger">
          <span class="burger__line"></span>
        </button>
      </div>
      <div class="header__bottom">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Main</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#about">About</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#games">Games</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#benefits">Benefits</a>
            </li>
          </ul>
        </nav>
      </div>
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
  <link rel="preload" href="./fonts/Lovelo-LineBold.woff" as="font">
  <link rel="preload" href="./fonts/Lovelo-LineBold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff2" as="font">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Best-onlinepokies.com</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__top">
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.php">
            <picture><source srcset="./img/logo-img.webp"type="image/webp"><img src="./img/logo-img.png" alt="Yoda"></picture>
            <span>Best.onlinepokies</span>
          </a>
        </div>
        <div class="header__buttons header-buttons" data-da=".header__bottom, 1024, 1">
          <div class="header-buttons__wrapper-sign">
            <button class="header-buttons__sign forms-btn" data-path="one">
              Sign up
            </button>
            <div class="header-buttons__reg reg forms" data-target="one">
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
                  <input class="reg__btn" type="submit" name="sign_up" value="Send">
                </form>

                <?php
				// Создаем переменную для сбора данных от пользователя по методу POST
				$data = $_POST;

				// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
				if (isset($data['sign_up'])) {

					// Регистрируем
					// Создаем массив для сбора ошибок
					$errors = array();

					// Проводим проверки
					// trim — удаляет пробелы (или другие символы) из начала и конца строки
					if (trim($data['login']) == '') {

						$errors[] = "Enter your login!";
					}

					if (trim($data['email']) == '') {

						$errors[] = "Enter your email address";
					}

					if ($data['password'] == '') {

						$errors[] = "Enter your password";
					}

					if ($data['password_2'] != $data['password']) {

						$errors[] = "The second password was entered incorrectly!";
					}
					// функция mb_strlen - получает длину строки
					// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
					if (mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

						$errors[] = "Invalid input length";
					}

					if (mb_strlen($data['password']) < 5) {

						$errors[] = "Wrong password length (more than 5 characters)";
					}

					// проверка на правильность написания Email
					if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

						$errors[] = 'Invalid email';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "The user with such login exists!";
					}

					// Проверка на уникальность email

					if (R::count('users', "email = ?", array($data['email'])) > 0) {

						$errors[] = "A user with this email address exists!";
					}


					if (empty($errors)) {

						// Все проверено, регистрируем
						// Создаем таблицу users
						$user = R::dispense('users');

						// добавляем в таблицу записи
						$user->login = $data['login'];
						$user->email = $data['email'];

						// Хешируем пароль
						$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

						// Сохраняем таблицу
						R::store($user);
						echo '<div class="no-error" style="color: green; ">You have successfully registered! You can do it in <a href="logform.php">authorization</a>.</div><hr>';
					} else {
						// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
						echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
					}
				}
				?>
              </div>
            </div>
          </div>
          <div class="header-buttons__wrapper-log">
            <button class="header-buttons__log forms-btn" data-path="two">
              Log in
            </button>
            <div class="about__log log forms" data-target="two">
              <div class="log__wrapper-form">
                <form class="log__form" action="#" method="POST">
                  <div class="log__label">
                    <input class="log__input" type="text" placeholder="Your login" name="login">
                  </div>
                  <div class="log__label">
                    <input class="log__input" type="password" placeholder="Password" name="password">
                  </div>
                  <input class="log__btn" type="submit" name="log_in" value="Authorization">
                </form>

                <?php
					// Создаем переменную для сбора данных от пользователя по методу POST
					$data = $_POST;

					// Пользователь нажимает на кнопку "Login" и код начинает выполняться
					if (isset($data['log_in'])) {

						// Создаем массив для сбора ошибок
						$errors = array();

						// Проводим поиск пользователей в таблице users
						$user = R::findOne('users', 'login = ?', array($data['login']));

						if ($user) {

							// Если логин существует, тогда проверяем пароль
							if (password_verify($data['password'], $user->password)) {

								// Все верно, пускаем пользователя
								$_SESSION['logged_user'] = $user;

								// Редирект на главную страницу
								header('Location: index.php');
							} else {

								$errors[] = 'The password was entered incorrectly!';
							}
						} else {
							$errors[] = 'There is no user with this name!';
						}

						if (!empty($errors)) {

							echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
						}
					}
					?>
              </div>
            </div>
          </div>
        </div>
        <button class="header__burger burger">
          <span class="burger__line"></span>
        </button>
      </div>
      <div class="header__bottom">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Main</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#about">About</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#games">Games</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#benefits">Benefits</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>



<?php endif; ?>