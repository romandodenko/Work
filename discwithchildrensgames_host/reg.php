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
  <div class="forms-body__content">
  <div class="header__profile profile">
										<p class="profile__text profile-text-games"><?php echo $_SESSION['logged_user']->login; ?></p>
										<button class="profile__btn profile-btn-games"></button>
										</div>
    <div class="forms-body__top">
      <div class="welcome__links welcome-links vis">
        <a class="welcome-links__link reg-link forms-link" href="main-page.php">Home</a>
        <a class="welcome-links__link reg-link forms-link" href="games.php">Games</a>
      </div>
      <ul class="welcome__list welcome-list vis">
        <li class="welcome-list__item">
          <a class="welcome-list__link forms-link" href="policy.php">Privacy policy</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link forms-link" href="terms.php">Terms and conditions</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link forms-link" href="cockie.php">Cookie policy</a>
        </li>
      </ul>
    </div>
    <div class="forms-body__reg reg">
      <div class="reg__container container">
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

						$errors[] = "Повторный пароль был введен неправильно!";
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
						echo '<div class="no-error" style="color: green; ">You have successfully registered! You can do it in <a href="logform.php">Enter</a>.</div><hr>';
					} else {
						// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
						echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
					}
				}
				?>
         </div>
       </div>
     </div>
  </div>

</body>

</html>






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
  <div class="forms-body__content">
    <div class="forms-body__top">
      <div class="welcome__links welcome-links vis">
        <a class="welcome-links__link reg-link forms-link" href="main-page.php">Home</a>
        <a class="welcome-links__link reg-link forms-link" href="games.php">Games</a>
        <a class="welcome-links__link forms-link" href="log.php">Authorization</a>
      </div>
      <ul class="welcome__list welcome-list vis">
        <li class="welcome-list__item">
          <a class="welcome-list__link forms-link" href="policy.php">Privacy policy</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link forms-link" href="terms.php">Terms and conditions</a>
        </li>
        <li class="welcome-list__item">
          <a class="welcome-list__link forms-link" href="cockie.php">Cookie policy</a>
        </li>
      </ul>
    </div>
    <div class="forms-body__reg reg">
      <div class="reg__container container">
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

						$errors[] = "Повторный пароль был введен неправильно!";
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
						echo '<div class="no-error" style="color: green; ">You have successfully registered! You can do it in <a href="logform.php">Enter</a>.</div><hr>';
					} else {
						// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
						echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
					}
				}
				?>
         </div>
       </div>
     </div>
  </div>

</body>

</html>



 <?php endif; ?>