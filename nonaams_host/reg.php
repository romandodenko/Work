<?php 
  include 'header.php';
?>
    <main>
      <section class="parallax">
        <div class="parallax__container container">
          <div class="parallax__about about">
            <h1 class="about__title title">
              Chi siamo
            </h1>
            <p class="about__text text">
              Questo è un nuovo livello di giochi! Il nostro social casino è stato creato per i giocatori che non
              vogliono perdere tutto a causa del gioco d'azzardo. Usiamo giochi senza la possibilità di guadagnare soldi
              veri. Allo stesso tempo, ti divertirai giocando ai nostri giochi, godendoti il ​​processo di gioco.
            </p>
            <p class="about__text text">
              Abbiamo la registrazione online, ma puoi anche giocare come ospite se non sei un utente registrato.
            </p>
          </div>
        </div>
        <div class="parallax__body">
          <div class="parallax__images images-parallax">
            <div class="images-parallax__item">
              <div class="images-parallax__clouds"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="reg">
        <div class="reg__container container">
          <div class="reg__wrapper-form">
            <form class="reg__form" action="#" method="POST">
              <div class="reg__form-top">
                <div class="reg__label">
                  <div class="reg__wrapper-input">
                    <span class="reg__span text">Inserisci la tua email</span>
                    <input class="reg__input" type="text" placeholder="Email" name="email">
                  </div>
                  <div class="reg__wrapper-input">
                    <span class="reg__span text">Inserisci il tuo login</span>
                    <input class="reg__input" type="text" placeholder="Login" name="login">
                  </div>
                </div>
                <div class="reg__label">
                  <div class="reg__wrapper-input">
                    <span class="reg__span text">Inserisci una password</span>
                    <input class="reg__input" type="password" placeholder="Password" name="password">
                  </div>
                  <div class="reg__wrapper-input">
                    <span class="reg__span text">Conferma password</span>
                    <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
                  </div>
                </div>
              </div>
              <input class="reg__btn" type="submit" name="sign_up" value="Registrazione">
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

						$errors[] = "La password ripetuta è stata inserita in modo errato!";
					}
					// функция mb_strlen - получает длину строки
					// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
					if (mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

						$errors[] = "Lunghezza di accesso errata!";
					}

					if (mb_strlen($data['password']) < 5) {

						$errors[] = "Lunghezza password errata (più di 5 caratteri)!";
					}

					// проверка на правильность написания Email
					if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {

						$errors[] = 'Indirizzo email errato!';
					}

					// Проверка на уникальность логина
					if (R::count('users', "login = ?", array($data['login'])) > 0) {

						$errors[] = "Esiste un utente con questo nome di accesso!";
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
						echo '<div class="yes" style="color: green; ">You have been successfully registered! You can do so at <a href="logform.php">Log in at</a>.</div><hr>';
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
