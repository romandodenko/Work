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
  <section class="about">
    <div class="about__container container">
      <h2 class="about__title animate__animated">Trochę o nas</h2>
      <p class="about__text animate__animated">
        Kasyno społecznościowe to jedna z najpopularniejszych gier w Internecie. W przeciwieństwie do kasyna na prawdziwe pieniądze, nie musisz płacić pieniędzy, aby grać. Wszystko, co musisz zrobić, to założyć konto i zacząć grać, ale co najważniejsze, możesz grać bez Konta. Wybierz odpowiednią grę i kliknij Graj i ciesz się grą i baw się dobrze.
      </p>
    </div>
  </section>
  <section class="benef">
    <div class="benef__container container">
      <ul class="benef__list">
        <li class="benef__item" data-aos="flip-up">
          <h2 class="benef__title">Zalety naszego kasyna społecznościowego</h2>
        </li>
        <li class="benef__item" data-aos="fade-right">
          <p class="benef__text">
            Darmowe gry
          </p>
        </li>
        <li class="benef__item" data-aos="fade-left">
          <p class="benef__text">
            Bez rejestracji
          </p>
        </li>
        <li class="benef__item" data-aos="fade-right">
          <p class="benef__text">
            Responsywna strona internetowa
          </p>
        </li>
        <li class="benef__item" data-aos="fade-left">
          <p class="benef__text">
            Gry są dostępne z każdego miejsca na świecie
          </p>
        </li>
        <li class="benef__item" data-aos="fade-right">
          <p class="benef__text">
            Częste turnieje
          </p>
        </li>
        <li class="benef__item" data-aos="fade-left">
          <p class="benef__text">
            Możesz grać z dowolnego urządzenia
          </p>
        </li>
      </ul>
    </div>
  </section>
  <section class="games">
    <div class="games__container container">
      <h2 class="games__title">Nasze gry</h2>
      <p class="games__text">Lista gier, które są obecnie w ofercie, znajduje się poniżej. Aby rozpocząć grę, kliknij nazwę gry i przeczytaj opis. Jeśli ci się podoba, to proszę o łaskę. zagrać.</p>
      <ul class="games__list">
        <li class="games__item" data-aos="fade-right">
          <div class="games__wrapper">
         <div class="games__body">
          <div class="games__image">
            <picture>
            <source media="(min-width: 851px)" srcset="./img/game-1.webp" type="image/webp">
            <source media="(max-width: 851px)" srcset="./img/game-1-850.png" type="image/png">
            <source media="(max-width: 851px)" srcset="./img/game-1-850.webp" type="image/webp">
            <img src="./img/game-1.png" alt="Lucky game">
            </picture>
          </div>
          <div class="games__descr">
            <h3 class="games__subtitle">Lucky</h3>
            <p class="games__text">
              Myślisz, że masz szczęście? Tak? To sprawdźmy twoje szczęście, wejdź i przetestuj je. Wygrywaj i zdobywaj nagrody!
            </p>
            <a class="games__link" href="./game-1/index.html"><span>Grać</span></a>
          </div>
         </div>
          </div>
        </li>
        <li class="games__item" data-aos="fade-left">
         <div class="games__wrapper">
          <div class="games__body">
            <div class="games__image">
              <picture>
                <source media="(min-width: 851px)" srcset="./img/game-2.webp" type="image/webp">
                <source media="(max-width: 851px)" srcset="./img/game-2-850.png" type="image/png">
                <source media="(max-width: 851px)" srcset="./img/game-2-850.webp" type="image/webp">
                <img src="./img/game-2.png" alt="Lucky game">
                </picture>
            </div>
            <div class="games__descr">
              <h3 class="games__subtitle">Wheel of fortune</h3>
              <p class="games__text">
                Całkiem ciekawa gra. Tak czy nie? Oto jest pytanie. Jeśli tak, to wygrałeś, jeśli nie, to przegrałeś. Spróbuj szczęścia!
              </p>
              <a class="games__link" href="./game-2/index.html"><span>Grać</span></a>
            </div>
          </div>
         </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php 
  include 'footer.php';
?>
