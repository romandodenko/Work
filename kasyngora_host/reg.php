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
    <section class="reg">
      <div class="reg__container container">
        <div class="reg__wrapper-form">
          <form class="reg__form" action="#" method="POST">
            <div class="reg__label">
              <div class="reg__wrapper-input">
                <span class="reg__span text">Wprowadź swój email</span>
                <input class="reg__input" type="text" placeholder="Email" name="email">
              </div>
              <div class="reg__wrapper-input">
                <span class="reg__span text">Wpisz swój login</span>
                <input class="reg__input" type="text" placeholder="Login" name="login">
              </div>
            </div>
            <div class="reg__label">
              <div class="reg__wrapper-input">
                <span class="reg__span text">Wprowadź hasło</span>
                <input class="reg__input" type="password" placeholder="Password" name="password">
              </div>
              <div class="reg__wrapper-input">
                <span class="reg__span text">Potwierdź hasło</span>
                <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
              </div>
            </div>
              <input class="reg__btn" type="submit" name="sign_up" value="Wysłać">
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
        </div>
      </div>
    </section>
  </main>
  <?php 
include 'footer.php';
?>