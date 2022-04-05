<?php 
  include 'header.php';
?>
  <main>
    <section class="reg">
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

						$errors[] = "Geben sie ihr login ein";
					}

					if (trim($data['email']) == '') {

						$errors[] = "Geben sie ihre e-mailadresse ein";
					}

					if ($data['password'] == '') {

						$errors[] = "Geben Sie Ihr Passwort ein";
					}

					if ($data['password_2'] != $data['password']) {

						$errors[] = "Das zweite passwort wurde falsch eingegeben";
					}
					// функция mb_strlen - получает длину строки
					// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
					if (mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

						$errors[] = "Ungültige eingabelänge";
					}

					if (mb_strlen($data['password']) < 5) {

						$errors[] = "Falsche passwortlänge (mehr als 5 zeichen)";
					}

					// проверка на правильность написания Email
					if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

						$errors[] = 'Falsche e-mail adresse';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "Der benutzer mit diesem login existiert";
					}

					// Проверка на уникальность email

					if (R::count('users', "email = ?", array($data['email'])) > 0) {

						$errors[] = "Ein benutzer mit dieser e-mail-adresse existiert";
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
    </section>
  </main>
  <?php 
  include 'footer.php';
?>