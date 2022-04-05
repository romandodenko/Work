<?php 
  include 'header.php';
?>
    <main>
      <section class="politicks">
        <div class="politicks__container container">
          <h1 class="title" data-aos="zoom-out-up">Cookie Policy for Glo-office</h1>

          <p class="text" data-aos="zoom-out-up">This is the Cookie Policy for Glo-office, accessible from glo-office.com</p>

          <h2 class="subtitle" data-aos="zoom-out-up"><strong>What Are Cookies</strong></h2>

          <p class="text" data-aos="zoom-out-up">As is common practice with almost all professional websites this site uses cookies, which are tiny files
            that are downloaded to your computer, to improve your experience. This page describes what information they
            gather, how we use it and why we sometimes need to store these cookies. We will also share how you can
            prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites
            functionality.</p>

          <h2 class="subtitle" data-aos="zoom-out-up"><strong>How We Use Cookies</strong></h2>

          <p class="text" data-aos="zoom-out-up">We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry
            standard options for disabling cookies without completely disabling the functionality and features they add
            to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or
            not in case they are used to provide a service that you use.</p>

          <h2 class="subtitle" data-aos="zoom-out-up"><strong>Disabling Cookies</strong></h2>

          <p class="text" data-aos="zoom-out-up">You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for
            how to do this). Be aware that disabling cookies will affect the functionality of this and many other
            websites that you visit. Disabling cookies will usually result in also disabling certain functionality and
            features of the this site. Therefore it is recommended that you do not disable cookies.</p>

          <h2 class="subtitle" data-aos="zoom-out-up"><strong>The Cookies We Set</strong></h2>

          <ul data-aos="zoom-out-up">

            <li>
              <p>Account related cookies</p>
              <p>If you create an account with us then we will use cookies for the management of the signup process and
                general administration. These cookies will usually be deleted when you log out however in some cases
                they may remain afterwards to remember your site preferences when logged out.</p>
            </li>

            <li>
              <p>Login related cookies</p>
              <p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having
                to log in every single time you visit a new page. These cookies are typically removed or cleared when
                you log out to ensure that you can only access restricted features and areas when logged in.</p>
            </li>
          </ul>

          <h2 class="subtitle" data-aos="zoom-out-up"><strong>Third Party Cookies</strong></h2>

          <p class="text" data-aos="zoom-out-up">In some special cases we also use cookies provided by trusted third parties. The following section details
            which third party cookies you might encounter through this site.</p>

          <ul data-aos="zoom-out-up">

            <li>
              <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on
                the web for helping us to understand how you use the site and ways that we can improve your experience.
                These cookies may track things such as how long you spend on the site and the pages that you visit so we
                can continue to produce engaging content.</p>
              <p>For more information on Google Analytics cookies, see the official Google Analytics page.</p>
            </li>
          </ul>

          <h2 class="subtitle" data-aos="zoom-out-up"><strong>More Information</strong></h2>

          <p class="text" data-aos="zoom-out-up">Hopefully that has clarified things for you and as was previously mentioned if there is something that you
            aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact
            with one of the features you use on our site.</p>

        </div>
      </section>
    </main>
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
            <input class="reg__btn link" type="submit" name="sign_up" value="Send">
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

						$errors[] = "Enter your login";
					}

					if (trim($data['email']) == '') {

						$errors[] = "Enter your email address";
					}

					if ($data['password'] == '') {

						$errors[] = "Enter your password";
					}

					if ($data['password_2'] != $data['password']) {

						$errors[] = "The second password was entered incorrectly";
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

						$errors[] = 'Incorrect E-Mail Address';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "The user with such login exists";
					}

					// Проверка на уникальность email

					if (R::count('users', "email = ?", array($data['email'])) > 0) {

						$errors[] = "A user with this email address exists";
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
						echo '<div class="no-error" style="color: green; ">You have successfully registered! You can do it in <a href="logform.php">Authorization</a>.</div><hr>';
					} else {
						// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
						echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
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
            <input class="log__btn link" type="submit" name="log_in" value="Log in">
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
    <?php 
    include 'footer.php';
  ?>