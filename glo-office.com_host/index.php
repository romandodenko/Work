<?php 
  include 'header.php';
?>
    <main>
      <section class="about">
        <div class="about__container container">
          <h1 class="about__title title" data-aos="zoom-out-up">
            About us
          </h1>
          <p class="about__text text" data-aos="zoom-out-up">
            Welcome to our social casino. The games do not require real money, so it is impossible to lose money. Our casino is suitable for training, as well as for having a good time. Also, our social casino is unique and based on the principle of fully responsive design for all devices. You get full functionality on both desktop and mobile devices.
          </p>
          <h2 class="about__subtitle subtitle" data-aos="zoom-out-up">
            What is a social casino?
          </h2>
          <p class="about__text text" data-aos="zoom-out-up">
            Social casino is one of the most popular games on the internet. Unlike real money casinos, you don't have to pay money to play.
          </p>
          <p class="about__text text" data-aos="zoom-out-up">
            There are two main types of social casino games: free games and real money games. While free games are great for fun and education, you should also understand that social media casino sites can be very lucrative. Unlike traditional real money gambling sites, these casinos do not charge players for gambling. 
          </p>
          <p class="about__text text" data-aos="zoom-out-up">
            All you need is a web browser and a few clicks to play. And once you're in, you'll never have to pay for any service again.
          </p>
        </div>
      </section>
      <section class="games">
        <div class="games__container container">
          <h2 class="games__title title" data-aos="zoom-out-up">
            Games
          </h2>
          <ul class="games__list">
              <li class="games__item" data-aos="zoom-out-up">
                <div class="games__image">
                  <a href="./cold-space/index.html"><picture><source srcset="./img/cold-space.webp"type="image/webp"><img src="./img/cold-space.jpg" alt="Cold space"></picture></a>
                </div>
                <div class="games__descr">
                  <h3 class="games__subtitle subtitle">
                    Cold space
                  </h3>
                  <p class="games__text text">
                    In far cold space, there is a legendary casino where winning will give you what you want. And here's the luck, you got into it, cool win, because your desires are limitless!
                  </p>
                  <div class="games__wrapper-link">
                    <a class="games__link link" href="./cold-space/index.html">Play</a>
                  </div>
                </div>
              </li>
              <li class="games__item" data-aos="zoom-out-up">
                <div class="games__image">
                  <a href="./simpsons/index.html"><picture><source srcset="./img/simpsons.webp"type="image/webp"><img src="./img/simpsons.jpg" alt="Simpsons"></picture></a>
                </div>
                <div class="games__descr">
                  <h3 class="games__subtitle subtitle">
                    The Simpsons
                  </h3>
                  <p class="games__text text">
                    Yes, the same popular family opened their own casino in which there is a fortune. Play it!
                  </p>
                  <div class="games__wrapper-link">
                    <a class="games__link link" href="./simpsons/index.html">Play</a>
                  </div>
                </div>
              </li>
              <li class="games__item" data-aos="zoom-out-up">
                <div class="games__image">
                  <a href="./mysterious-glade/index.html"><picture><source srcset="./img/mysterious-glade.webp"type="image/webp"><img src="./img/mysterious-glade.jpg" alt="Mysterious glade"></picture></a>
                </div>
                <div class="games__descr">
                  <h3 class="games__subtitle subtitle">
                    Mysterious glade
                  </h3>
                  <p class="games__text text">
                    There is a legend that in the middle of a magical meadow, there is a casino where you can win untold riches! And here it is, before your eyes... Try your luck?
                  </p>
                  <div class="games__wrapper-link">
                    <a class="games__link link" href="./mysterious-glade/index.html">Play</a>
                  </div>
                </div>
              </li>
          </ul>
        </div>
      </section>
      <section class="benefits">
        <div class="benefits__container container">
          <h2 class="benefits__title title" data-aos="zoom-out-up">
            Benefits
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item" data-aos="zoom-out-up">
              <p class="benefits_text text">
                Completely free games
              </p>
            </li>
            <li class="benefits__item" data-aos="zoom-out-up">
              <p class="benefits_text text">
                Can be played from anywhere in the world
              </p>
            </li>
            <li class="benefits__item" data-aos="zoom-out-up">
              <p class="benefits_text text">
                Modern design
              </p>
            </li>
             <li class="benefits__item" data-aos="zoom-out-up">
              <p class="benefits_text text">
                Responsive website
              </p>
            </li> 
          </ul>
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