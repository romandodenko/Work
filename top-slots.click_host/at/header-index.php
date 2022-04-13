<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/TTFirsNeue-Light.woff" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Light.woff2" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Regular.woff" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Bold.woff" as="font">
  <link rel="preload" href="./fonts/TTFirsNeue-Bold.woff2" as="font">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Top-slots.click</title>
  <?php 
		require "./db.php";
	?>
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__top">
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.php">Top slots</a>
        </div>
        <button class="header__burger burger">
          <span class="burger__line"></span>
        </button>
      </div>
      <div class="header__bottom">
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.php">Zuhause</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#games">Spiele</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#blog">Bloggen</a>
            </li>
            <li class="header__item">
              <a class="header__link link link-anchor" href="#benefist">Vorteile</a>
            </li>
          </ul>
        </nav>
        <?php if(isset($_SESSION['logged_user'])) : ?>
            <div class="header__profile profile">
        <p class="profile__text text">  <?php echo $_SESSION['logged_user']->login; ?></p>
        <button class="profile__btn"></button>
        </div>
          <?php else : ?>
            <div class="header__buttons buttons">
          <div class="buttons__reg reg">
            <button class="reg__button form-button" data-path="reg">
              Registrierung
            </button>
            <div class="reg__wrapper-form wrapper-form" data-target="reg">
              <form class="reg__form" action="#" method="POST">
                <div class="reg__label">
                  <input class="reg__input" type="text" placeholder="Email" name="email">
                  <input class="reg__input" type="text" placeholder="Login" name="login">
                </div>
                <div class="reg__label">
                  <input class="reg__input" type="password" placeholder="Password" name="password">
                  <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
                </div>
                <input class="reg__btn" type="submit" name="sign_up" value="Schicken">
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

						$errors[] = "Geben Sie Ihr Login ein";
					}

					if (trim($data['email']) == '') {

						$errors[] = "Geben sie ihre E-Mailadresse ein";
					}

					if ($data['password'] == '') {

						$errors[] = "Введите свой пароль";
					}

					if ($data['password_2'] != $data['password']) {

						$errors[] = "Das zweite Passwort wurde falsch eingegeben";
					}
					// функция mb_strlen - получает длину строки
					// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
					if (mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

						$errors[] = "Ungültige Eingabelänge";
					}

					if (mb_strlen($data['password']) < 5) {

						$errors[] = "Falsche Passwortlänge (mehr als 5 Zeichen)";
					}

					// проверка на правильность написания Email
					if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

						$errors[] = 'falsche E-Mail Adresse';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "Der Benutzer mit diesem Login existiert";
					}

					// Проверка на уникальность email

					if (R::count('users', "email = ?", array($data['email'])) > 0) {

						$errors[] = "Ein Benutzer mit dieser E-Mail-Adresse existiert";
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
						echo '<div class="no-error" style="color: green; ">Sie haben sich erfolgreich registriert! Du kannst es drin machen <a href="logform.php">Genehmigung</a>.</div><hr>';
					} else {
						// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
						echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
					}
				}
				?>
            </div>
          </div>
          <div class="buttons__log log">
            <button class="log__button form-button" data-path="log">
              Genehmigung
            </button>
            <div class="log__wrapper-form wrapper-form" data-target="log">
              <form class="log__form" action="#" method="POST">
                <div class="log__label">
                  <input class="log__input" type="text" placeholder="Your login" name="login">
                </div>
                <div class="log__label">
                  <input class="log__input" type="password" placeholder="Password" name="password">
                </div>
                <input class="log__btn" type="submit" name="log_in" value="Eingang">
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

								$errors[] = 'Das Passwort wurde falsch eingegeben';
							}
						} else {
							$errors[] = 'Es gibt keinen Benutzer mit diesem Namen';
						}

						if (!empty($errors)) {

							echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
						}
					}
					?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </header>