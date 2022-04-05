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
      <section class="log">
        <div class="log__container container">
          <div class="log__wrapper-form">
            <form class="log__form" action="#" method="POST">
              <div class="log__form-top">
                <div class="log__label">
                  <span class="log__span text">Inserisci il tuo login</span>
                  <input class="log__input" type="text" placeholder="Your login" name="login">
                </div>
                <div class="log__label">
                  <span class="log__span text">Inserisci una password</span>
                  <input class="log__input" type="password" placeholder="Password" name="password">
                </div>
              </div>
              <input class="log__btn" type="submit" name="log_in" value="Entrata">
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

								$errors[] = 'La password è stata inserita in modo errato!';
							}
						} else {
							$errors[] = 'Non c\'è nessun utente con questo nome!';
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
