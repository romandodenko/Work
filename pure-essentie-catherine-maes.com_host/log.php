<?php 
  include 'header.php';
?>
  <main>
    <section class="log">
      <div class="log__container container">
       <div class="log__wrapper-form">
        <form class="log__form" action="#" method="POST">
          <div class="log__label">
            <input class="log__input" type="text" placeholder="Vaše přihlašovací jméno" name="login">
          </div>
          <div class="log__label">
            <input class="log__input" type="password" placeholder="Heslo" name="password">
          </div>
            <input class="log__btn" type="submit" name="log_in" value="Vejít do">
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

								$errors[] = 'Heslo bylo zadáno špatně';
							}
						} else {
							$errors[] = 'Neexistuje žádný uživatel s tímto jménem';
						}

						if (!empty($errors)) {

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