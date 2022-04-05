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
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>ALOTAAMS-IT</title>
  <?php 
		require "./db.php";
	?>
</head>
<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__top">
        <div class="header__wrapper-logo">
          <a class="header__logo" href="index.html">Alotaams <span>it</span></a>
        </div>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a class="header__link link" href="index.html">Casa</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="faq.html">Faq</a>
            </li>
            <li class="header__item">
              <a class="header__link link" href="games.html">Giochi</a>
            </li>
          </ul>
        </nav>
      </div>
      <?php if(isset($_SESSION['logged_user'])) : ?>
        <div class="header__buttons">
          <div class="header__profile profile">
            <p class="profile__text text"> <?php echo $_SESSION['logged_user']->login; ?></p>
            <button class="profile__btn">x</button>
          </div>
        </div>
          <?php else : ?>
            <div class="header__buttons">
        <div class="header__wrapper-buttons">
          <button class="header__reg link">Registrazione</button>
          <button class="header__log link">Entrare</button>
        </div>
      </div>
      <div class="header__wrapper-reg reg">
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
            <div class="reg__wrapper-btn">
              <input class="reg__btn text" type="submit" name="sign_up" value="Registrazione">
            </div>
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

						$errors[] = "Inserisci il tuo login!";
					}

					if (trim($data['email']) == '') {

						$errors[] = "Inserisci il tuo indirizzo email!";
					}

					if ($data['password'] == '') {

						$errors[] = "Inserisci la tua password!";
					}

					if ($data['password_2'] != $data['password']) {

						$errors[] = "La seconda password è stata inserita in modo errato!";
					}
					// функция mb_strlen - получает длину строки
					// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
					if (mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

						$errors[] = "Lunghezza di input non valida!";
					}

					if (mb_strlen($data['password']) < 5) {

						$errors[] = "Lunghezza password errata (più di 5 caratteri)!";
					}

					// проверка на правильность написания Email
					if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

						$errors[] = 'indirizzo email errato!';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "L'utente con tale login esiste!";
					}

					// Проверка на уникальность email

					if (R::count('users', "email = ?", array($data['email'])) > 0) {

						$errors[] = "Esiste un utente con questo indirizzo email!";
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
						echo '<div class="yes" style="color: green; ">Sei stato registrato con successo! Puoi farlo a <a href="logform.php">Accedi a</a>.</div><hr>';
					} else {
						// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
						echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
					}
				}
				?>

        </div>
      </div>
      <div class="header__wrapper-log log">
        <div class="log__wrapper-form">
          <form class="log__form" action="#" method="POST">
            <div class="log__top">
              <div class="log__label">
                <input class="log__input" type="text" placeholder="Your login" name="login">
              </div>
              <div class="log__label">
                <input class="log__input" type="password" placeholder="Password" name="password">
              </div>
            </div>
            <div class="log__wrapper-btn">
              <input class="log__btn text" type="submit" name="log_in" value="Entrare">
            </div>
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

								$errors[] = 'La password è stata inserita in modo errato!';
							}
						} else {
							$errors[] = 'Non c\'è nessun utente con questo nome!';
						}

						if (!empty($errors)) {

							echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
						}
					}
					?>
        </div>
      </div>
            <?php endif; ?>

    </div>
  </header>