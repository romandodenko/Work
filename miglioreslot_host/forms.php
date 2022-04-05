<?php 
  include 'header.php';
?>
  <main>
    <section class="slider">
      <div class="slider__container container">
        <div class="slider__swiper slider-swiper">
          <ul class="slider-swiper__wrapper swiper-wrapper">
            <li class="slider-swiper__slide swiper-slide">
              <picture><source srcset="./img/img1.webp"type="image/webp"><img src="./img/img1.jpg" alt="Img"></picture>
            </li>
            <li class="slider-swiper__slide swiper-slide">
              <picture><source srcset="./img/img2.webp"type="image/webp"><img src="./img/img2.jpg" alt="Img"></picture>
            </li>
            <li class="slider-swiper__slide swiper-slide">
              <picture><source srcset="./img/img3.webp"type="image/webp"><img src="./img/img3.jpg" alt="Img"></picture>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="forms">
      <div class="forms__container container">
        <div class="forms__wrapper-sign">
          <form class="forms__sign sign" action="#" method="POST">
            <div class="sign__label">
              <input class="sign__input" type="text" placeholder="Email" name="email">
              <input class="sign__input" type="text" placeholder="Login" name="login">
            </div>
            <div class="sign__label">
              <input class="sign__input" type="password" placeholder="Password" name="password">
              <input class="sign__input" type="password" placeholder="Your password again" name="password_2">
            </div>
              <input class="sign__btn" type="submit" name="sign_up" value="Inviare">
          </form>
              <?php
            $data = $_POST;
            if(isset($data['sign_up'])) {
              $errors = array();

              if(trim($data['login']) == '') {
                $errors[] = "Inserisci login";
              }
              if(trim($data['email']) == '') {
                $errors[] = "Inserisci il tuo indirizzo email";
              }
              if($data['password'] == '') {

                $errors[] = "inserire la password";
              }
              if($data['password_2'] != $data['password']) {

                $errors[] = "Conferma la password";
              }
              if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

                $errors[] = "Conferma la password";
              }
              if(!empty($errors)) {
                echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
              }
            }
          ?>
        </div>
        <div class="forms__wrapper-log">
          <form class="log__form log" action="#" method="POST">
            <div class="log__label">
              <input class="log__input" type="text" placeholder="Your login" name="login">
            </div>
            <div class="log__label">
              <input class="log__input" type="password" placeholder="Password" name="password">
            </div>
              <input class="log__btn" type="submit" name="log_in" value="Entrata">
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

								$errors[] = 'La password è stata inserita in modo errato';
							}
						} else {
							$errors[] = 'Non c\'è nessun utente con questo nome';
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