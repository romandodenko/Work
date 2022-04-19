<?php 
  include 'header-page.php';
?>
  <main>
    <section class="background">
      <div class="background__body">
        <div class="background__item">
          <picture><source srcset="./img/fixed-img.webp"type="image/webp"><img src="./img/fixed-img.png" alt="Fixed img"></picture>
        </div>
      </div>
    </section>
    <section class="politicks">
      <div class="politicks__container container">
        <h1 class="title">Polityka plików cookie dla gamer-fuhallgato.com</h1>

        <p class="text">To jest polityka dotycząca plików cookie dla gamer-fuhallgato.com, dostępna na gamer-fuhallgato.com</p>

        <h2 class="subtitle"><strong>Co to są pliki cookie</strong></h2>

        <p class="text">Jak to jest powszechną praktyką w przypadku prawie wszystkich profesjonalnych witryn internetowych, ta witryna używa plików cookie, które są małymi plikami, które
          są pobierane na Twój komputer, aby poprawić Twoje wrażenia. Ta strona opisuje, jakie informacje gromadzą,
          w jaki sposób z nich korzystamy i dlaczego czasami musimy przechowywać te pliki cookie. Podzielimy się również tym, jak możesz temu zapobiec
          przechowywanie plików cookie, jednak może to obniżyć lub „zakłócić” niektóre elementy funkcjonalności witryny.
        </p>

        <h2 class="subtitle"><strong>Jak używamy plików cookie</strong></h2>

        <p class="text">Używamy plików cookie z różnych powodów wyszczególnionych poniżej. Niestety w większości przypadków nie ma przemysłu
          standardowe opcje wyłączania plików cookies bez całkowitego wyłączania funkcjonalności i funkcji, do których one dodają
          ta strona. Zaleca się pozostawienie wszystkich plików cookie, jeśli nie masz pewności, czy ich potrzebujesz, czy nie
          przypadku, gdy są one wykorzystywane do świadczenia usług, z których korzystasz.</p>

        <h2 class="subtitle"><strong>Wyłączanie plików cookie</strong></h2>

        <p class="text">Możesz zapobiec ustawianiu plików cookie, dostosowując ustawienia w przeglądarce (patrz Pomoc przeglądarki, aby uzyskać
          jak to zrobić). Pamiętaj, że wyłączenie plików cookie wpłynie na funkcjonalność tej i wielu innych stron internetowych
          które odwiedzasz. Wyłączenie plików cookie zwykle powoduje również wyłączenie niektórych funkcji i funkcji
          na tej stronie.</p>

        <h2 class="subtitle"><strong>Ustawiane przez nas pliki cookie</strong></h2>

        <ul>

          <li>
            <p>Pliki cookie związane z kontem</p>
            <p>Jeśli utworzysz u nas konto, użyjemy plików cookie do zarządzania procesem rejestracji i
              administracja ogólna. Te pliki cookie są zwykle usuwane po wylogowaniu, jednak w niektórych przypadkach
              może pozostać później, aby zapamiętać preferencje witryny po wylogowaniu.</p>
          </li>

          <li>
            <p>Pliki cookie związane z logowaniem</p>
            <p>Używamy plików cookie, gdy jesteś zalogowany, abyśmy mogli zapamiętać ten fakt. Zapobiega to konieczności
              loguj się za każdym razem, gdy odwiedzasz nową stronę. Te pliki cookie są zazwyczaj usuwane lub usuwane podczas logowania
              aby zapewnić dostęp do ograniczonych funkcji i obszarów tylko po zalogowaniu.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Pliki cookie stron trzecich</strong></h2>

        <p class="text">W niektórych szczególnych przypadkach używamy również plików cookie dostarczanych przez zaufane strony trzecie. Poniższa sekcja szczegóły
          jakie pliki cookie stron trzecich możesz napotkać za pośrednictwem tej witryny.</p>

        <ul>

          <li>
            <p>Ta witryna korzysta z usługi Google Analytics, która jest jednym z najbardziej rozpowszechnionych i zaufanych rozwiązań analitycznych w
              web, aby pomóc nam zrozumieć, w jaki sposób korzystasz z witryny i jak możemy poprawić Twoje wrażenia. Te
              pliki cookie mogą śledzić takie rzeczy, jak czas spędzony w witrynie i odwiedzane strony, abyśmy mogli
              nadal tworzyć ciekawe treści.</p>
            <p>Więcej informacji na temat plików cookie Google Analytics można znaleźć na oficjalnej stronie Google Analytics.</p>
          </li>

        </ul>

        <h2 class="subtitle"><strong>Więcej informacji</strong></h2>

        <p class="text">Mam nadzieję, że to wyjaśniło ci sprawy i jak wspomniano wcześniej, jeśli jest coś, co ty
          nie jesteś pewien, czy potrzebujesz, czy nie, zwykle bezpieczniej jest pozostawić włączone pliki cookie na wypadek interakcji
          jedna z funkcji, z których korzystasz na naszej stronie.</p>

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