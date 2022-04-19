<?php 
  include 'header.php';
?>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__descr">
          <h1 class="hero__title title">
            Witamy na naszej stronie internetowej!
          </h1>
          <p class="hero__text text">
            Nasze kasyno społecznościowe jest najlepsze w 2022 roku!
          </p>
        </div>
        <div class="hero__image">
          <picture><source srcset="./img/hero-img-2.webp"type="image/webp"><img src="./img/hero-img-2.png" alt="Hero img"></picture>
        </div>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <div class="about__image">
          <picture><source srcset="./img//about.webp"type="image/webp"><img src="./img//about.png" alt="About"></picture>
        </div>
        <div class="about__descr">
          <h2 class="about__title title">
            O nas
          </h2>
          <p class="about__text text">
            Witamy w naszym kasynie społecznościowym. Nasze kasyno jest całkowicie darmowe i zarówno do nauki, jak i gry
            baw się dobrze. Ponadto nasze kasyno społecznościowe jest wyjątkowe i opiera się na zasadzie w pełni
            responsywne projekty dla wszystkich urządzeń. Otrzymujesz pełną funkcjonalność na obu komputerach
            stacjonarnych jak również na urządzeniach mobilnych.
            Social Casino to jedna z najpopularniejszych gier w Internecie. W przeciwieństwie do kasyn na prawdziwe
            pieniądze, musisz nie płać pieniędzy na grę.
            Istnieją dwa główne rodzaje społecznościowych gier kasynowych: darmowe gry i gry na prawdziwe pieniądze.
            Chociaż wolny Gry są świetne do zabawy i edukacji, powinieneś również zrozumieć, że witryny kasyn w mediach
            społecznościowych są bardzo może być lukratywny. W przeciwieństwie do tradycyjnych witryn hazardowych na
            prawdziwe pieniądze, kasyna te pobierają opłatę Gracze nie pobierają opłat za grę.
          </p>
        </div>
      </div>
    </section>
    <section class="games" id="games">
      <div class="games__container container">
        <h2 class="games__title title">
          Nasze gry
        </h2>
        <ul class="games__list">
          <li class="games__item">
            <div class="games__image">
              <picture><source srcset="./img/castle.webp"type="image/webp"><img src="./img/castle.png" alt="Castle"></picture>
            </div>
            <div class="games__descr">
              <h3 class="games__subtitle subtitle">
                Ciemny zamek
              </h3>
              <div class="games__wrapper-link">
                <a class="games__link link" href="./dark-castle/index.html">Bawić się</a>
              </div>
            </div>
          </li>
          <li class="games__item">
            <div class="games__image">
              <picture><source srcset="./img/cruise.webp"type="image/webp"><img src="./img/cruise.png" alt="Cruise"></picture>
            </div>
            <div class="games__descr">
              <h3 class="games__subtitle subtitle">
                Rejs
              </h3>
              <div class="games__wrapper-link">
                <a class="games__link link" href="./cruise/index.html">Bawić się</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="benefits" id="benefits">
      <div class="benefits__container container">
        <h2 class="benefits__title title">
          Nasza przewaga
        </h2>
        <div class="benefits__body">
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__span">1</span>
              <p class="benefits__text text">
               Darmowe gry
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">2</span>
              <p class="benefits__text text">
               Możliwość grania bez rejestracji z komputera lub telefonu
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">3</span>
              <p class="benefits__text text">
              Możliwość grania z dowolnego miejsca na świecie
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">4</span>
              <p class="benefits__text text">
              Nowoczesny i responsywny projekt strony internetowej
              </p>
            </li>
          </ul>
          <div class="benefits__image">
            <picture><source srcset="./img/advantages.webp"type="image/webp"><img src="./img/advantages.png" alt="Benefits"></picture>
          </div>
        </div>
      </div>
    </section>
    <section class="last">
      <div class="last__container container">
        <div class="last__image">
          <picture><source srcset="./img/last-img.webp"type="image/webp"><img src="./img/last-img.png" alt="Last img"></picture>
        </div>
        <div class="last__descr">
          <h2 class="last__title title">
            Witamy w naszym kasynie społecznościowym!
          </h2>
          <p class="last__text text">
            Nasze kasyno jest całkowicie darmowe, gry są ciekawe, a co najważniejsze, nasze kasyno jest najlepsze w 2022
            roku!
          </p>
        </div>
      </div>
    </section>
  </main>
  <div class="reg">
    <div class="reg__close"></div>
    <div class="reg__body">
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
          <div class="reg__exit"></div>
          <input class="reg__btn" type="submit" name="sign_up" value="Wysłać">
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

						$errors[] = "Wpisz swój login!";
					}

					if (trim($data['email']) == '') {

						$errors[] = "Wpisz swój adres e-mail";
					}

					if ($data['password'] == '') {

						$errors[] = "Wprowadź hasło";
					}

					if ($data['password_2'] != $data['password']) {

						$errors[] = "Drugie hasło zostało wpisane niepoprawnie!";
					}
					// функция mb_strlen - получает длину строки
					// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
					if (mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

						$errors[] = "Nieprawidłowa długość wpisana";
					}

					if (mb_strlen($data['password']) < 5) {

						$errors[] = "Nieprawidłowa długość hasła (więcej niż 5 znaków)";
					}

					// проверка на правильность написания Email
					if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

						$errors[] = 'Niepoprawny email';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "Użytkownik z takim loginem istnieje!";
					}

					// Проверка на уникальность email

					if (R::count('users', "email = ?", array($data['email'])) > 0) {

						$errors[] = "Użytkownik z tym adresem e-mail istnieje!";
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
						echo '<div class="no-error" style="color: green; ">Zarejestrowałeś się pomyślnie! Możesz to zrobić w <a href="logform.php">upoważnienie</a>.</div><hr>';
					} else {
						// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
						echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
					}
				}
				?>
      </div>
    </div>
  </div>
  <div class="log">
    <div class="log__close"></div>
    <div class="log__body">
      <div class="log__wrapper-form">
        <form class="log__form" action="#" method="POST">
          <div class="log__label">
            <input class="log__input" type="text" placeholder="Your login" name="login">
          </div>
          <div class="log__label">
            <input class="log__input" type="password" placeholder="Password" name="password">
          </div>
          <div class="log__exit"></div>
          <input class="log__btn" type="submit" name="log_in" value="Wejść">
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

								$errors[] = 'Hasło zostało wprowadzone niepoprawnie!';
							}
						} else {
							$errors[] = 'Nie ma użytkownika o tej nazwie!';
						}

						if (!empty($errors)) {

							echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
						}
					}
					?>
      </div>
    </div>
  </div>
  <?php 
  include 'footer.php';
?>