<?php 
  include 'header.php';
?>
  <main>
  <section class="forms">
      <div class="forms__container container">
      <?php if(isset($_SESSION['logged_user'])) : ?>
      <div class="profile">
            <p class="profile__text">
              <?php echo $_SESSION['logged_user']->login; ?>
              </p>
              <button class="profile__btn"><span>Wyjście</span></button>
            </div>
          <?php else : ?>
        <div class="forms__wrapper-sign animate__animated">
          <p class="forms__text sign-text">Naciśnij przycisk zarejestrować się aby rozpocząć rejestrację</p>
          <form class="forms__sign sign" action="#" method="POST">
            <div class="sign__label">
              <input class="sign__input" type="text" placeholder="Poczta" name="email">
              <input class="sign__input" type="text" placeholder="Login" name="login">
            </div>
            <div class="sign__label">
              <input class="sign__input" type="password" placeholder="Hasło" name="password">
              <input class="sign__input" type="password" placeholder="Powtórz hasło" name="password_2">
            </div>
              <input class="sign__btn" type="submit" name="sign_up" value="Zarejestrować">
          </form>
          <?php
            $data = $_POST;
            if(isset($data['sign_up'])) {
              $errors = array();

              if(trim($data['login']) == '') {
                $errors[] = "Wpisz login";
              }
              if(trim($data['email']) == '') {
                $errors[] = "Wpisz swój adres e-mail";
              }
              if($data['password'] == '') {

                $errors[] = "Wprowadź hasło";
              }
              if($data['password_2'] != $data['password']) {

                $errors[] = "Potwierdź hasło";
              }
              if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

                $errors[] = "Potwierdź hasło";
              }
              if(!empty($errors)) {
                echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
              }
            }
          ?>
          <button class="forms__btn sign-btn">Zarejestrować</button>
          <button class="forms__close sign-close"><span>x</span></button>
        </div>
        <div class="forms__wrapper-log animate__animated">
          <p class="forms__text log-text">Kliknij przycisk logowania, aby wejść na stronę</p>
          <form class="forms__log log" action="#" method="POST">
            <div class="log__label">
              <input class="log__input" type="text" placeholder="Twój login" name="login">
            </div>
            <div class="log__label">
              <input class="log__input" type="password" placeholder="Hasło" name="password">
            </div>
              <input class="log__btn" type="submit" name="log_in" value="Zalogować">
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
          <button class="forms__btn log-btn">Zalogować</button>
          <button class="forms__close log-close"><span>x</span></button>
        </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="cockie">
      <div class="cockie__container container">
        <h1 data-aos="fade-right">Cookie Policy for kasyn-sloty.com</h1>

        <h2 data-aos="fade-left"><strong>What Are Cookies</strong></h2>

        <p data-aos="fade-right">As is common practice with almost all professional websites this site uses cookies, which are tiny files that
          are downloaded to your computer, to improve your experience. This page describes what information they gather,
          how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these
          cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.
        </p>

        <h2 data-aos="fade-left"><strong>How We Use Cookies</strong></h2>

        <p data-aos="fade-right">We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry
          standard options for disabling cookies without completely disabling the functionality and features they add to
          this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in
          case they are used to provide a service that you use.</p>

        <h2 data-aos="fade-left"><strong>Disabling Cookies</strong></h2>

        <p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for
          how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites
          that you visit. Disabling cookies will usually result in also disabling certain functionality and features of
          the this site. Therefore it is recommended that you do not disable cookies.</p>

        <h2 data-aos="fade-right"><strong>The Cookies We Set</strong></h2>

        <ul data-aos="fade-left">

          <li data-aos="fade-right">
            <h3 data-aos="fade-left">Account related cookies:</h3>
            <p data-aos="fade-right">If you create an account with us then we will use cookies for the management of the signup process and
              general administration. These cookies will usually be deleted when you log out however in some cases they
              may remain afterwards to remember your site preferences when logged out.</p>
          </li>
          <li data-aos="fade-left">
            <h3 data-aos="fade-right">Login related cookies:</h3>
            <p data-aos="fade-left">We use cookies when you are logged in so that we can remember this fact. This prevents you from having to
              log in every single time you visit a new page. These cookies are typically removed or cleared when you log
              out to ensure that you can only access restricted features and areas when logged in.</p>
          </li>
        </ul>

        <h2 data-aos="fade-right"><strong>Third Party Cookies</strong></h2>

        <p data-aos="fade-left">In some special cases we also use cookies provided by trusted third parties. The following section details
          which third party cookies you might encounter through this site.</p>

          <a href="mailto:kasynsloty@gmail.com" data-aos="fade-right">Email: kasynsloty@gmail.com</a>

      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>