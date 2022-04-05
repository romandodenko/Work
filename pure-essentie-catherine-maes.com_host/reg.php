<?php 
  include 'header.php';
?>
  <main>
    <section class="reg">
      <div class="reg__container container">
        <div class="reg__wrapper-form">
          <form class="reg__form" action="#" method="POST">
            <div class="reg__label">
              <input class="reg__input" type="text" placeholder="Pošta" name="email">
              <input class="reg__input" type="text" placeholder="Přihlásit se" name="login">
            </div>
            <div class="reg__label">
              <input class="reg__input" type="password" placeholder="Heslo" name="password">
              <input class="reg__input" type="password" placeholder="Zopakovat heslo" name="password_2">
            </div>
              <input class="reg__btn" type="submit" name="sign_up" value="Poslat">
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

						$errors[] = "Zadejte své přihlašovací údaje";
					}

					if (trim($data['email']) == '') {

						$errors[] = "vložte svou e-mailovou adresu";
					}

					if ($data['password'] == '') {

						$errors[] = "Zadejte heslo";
					}

					if ($data['password_2'] != $data['password']) {

						$errors[] = "Heslo bylo zadáno nesprávně";
					}
					// функция mb_strlen - получает длину строки
					// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
					if (mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

						$errors[] = "Neplatná délka vstupu";
					}

					if (mb_strlen($data['password']) < 5) {

						$errors[] = "Nesprávná délka hesla (více než 5 znaků)";
					}

					// проверка на правильность написания Email
					if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

						$errors[] = 'Nesprávná e-mailová adresa';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "Uživatel s takovým přihlášením existuje";
					}

					// Проверка на уникальность email

					if (R::count('users', "email = ?", array($data['email'])) > 0) {

						$errors[] = "Uživatel s touto e-mailovou adresou existuje";
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
						echo '<div class="no-error" style="color: green; ">Byli jste úspěšně zaregistrováni! Můžete tak učinit na<a href="logform.php">Přihlaste se na</a>.</div><hr>';
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