<?php 
include 'header.php';
?>
  <main>
    <section class="reg">
      <div class="reg__container container">
        <form class="reg__form" action="#" method="POST">
          <div class="reg__formwrap">
            <div class="reg__label">
              <input class="reg__input" type="text" placeholder="Email" name="email">
              <input class="reg__input" type="text" placeholder="Login" name="login">
            </div>
            <div class="reg__label">
              <input class="reg__input" type="password" placeholder="Password" name="password">
              <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
            </div>
          </div>
            <input class="reg__btn" type="submit" name="sign_up" value="Sende">
        </form>
        <?php
        $data = $_POST;
        if(isset($data['sign_up'])) {
          $errors = array();

          if(trim($data['login']) == '') {
            $errors[] = "Login eingeben";
          }
          if(trim($data['email']) == '') {
            $errors[] = "Geben sie ihre E-Mailadresse ein";
          }
          if($data['password'] == '') {

            $errors[] = "Passwort eingeben";
          }
          if($data['password_2'] != $data['password']) {

            $errors[] = "Bestätige das Passwort";
          }
          if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

            $errors[] = "Bestätige das Passwort";
          }
          if(!empty($errors)) {
            echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
          }
        }
      ?>
      </div>
    </section>
  </main>
  <?php 
include 'footer.php';
?>