<?php 
include 'header.php';
?>
  <main>
    <section class="background-site">
      <h1 class="background-site__title">Background-site</h1>
      <div class="background-site__background">
        <picture><source srcset="./img/background.webp"type="image/webp"><img src="./img/background.png" alt="Background"></picture>
      </div>
    </section>
    <section class="log">
      <div class="log__container container">
        <div class="log__wrapper-form">
          <form class="log__form" action="#" method="POST">
            <div class="log__label">
              <span class="log__span text">Wpisz swój login</span>
              <input class="log__input" type="text" placeholder="Your login" name="login">
            </div>
            <div class="log__label">
              <span class="log__span text">Wprowadź hasło</span>
              <input class="log__input" type="password" placeholder="Password" name="password">
            </div>
              <input class="log__btn" type="submit" name="log_in" value="Upoważnienie">
          </form>
          <?php
					$data = $_POST;

					if (isset($data['log_in'])) {

						$errors = array();

						$user = R::findOne('users', 'login = ?', array($data['login']));

						if ($user) {

							if (password_verify($data['password'], $user->password)) {

								$_SESSION['logged_user'] = $user;

								header('Location: index.php');
							} else {

								$errors[] = 'Hasło zostało wprowadzone niepoprawnie';
							}
						} else {
							$errors[] = 'Nie ma użytkownika o tej nazwie';
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