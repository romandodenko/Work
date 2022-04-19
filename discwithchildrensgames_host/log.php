


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
    <div class="forms-body__top">
    <div class="header__profile profile">
										<p class="profile__text profile-text-games"><?php echo $_SESSION['logged_user']->login; ?></p>
										<button class="profile__btn profile-btn-games"></button>
										</div>
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
    <div class="forms-body__log log">
      <div class="log__container container">
        <div class="log__wrapper-form">
          <form class="log__form" action="#" method="POST">
            <div class="log__label">
              <input class="log__input" type="text" placeholder="Your login" name="login">
            </div>
            <div class="log__label">
              <input class="log__input" type="password" placeholder="Password" name="password">
            </div>
            <input class="log__btn" type="submit" name="log_in" value="Entrance">
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
        <a class="welcome-links__link forms-link" href="reg.php">Registration</a>
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
    <div class="forms-body__log log">
      <div class="log__container container">
        <div class="log__wrapper-form">
          <form class="log__form" action="#" method="POST">
            <div class="log__label">
              <input class="log__input" type="text" placeholder="Your login" name="login">
            </div>
            <div class="log__label">
              <input class="log__input" type="password" placeholder="Password" name="password">
            </div>
            <input class="log__btn" type="submit" name="log_in" value="Entrance">
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

</body>

</html>



            <?php endif; ?>