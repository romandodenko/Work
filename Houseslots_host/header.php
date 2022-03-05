<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <?php 
		require "./db.php";
	?>
  <title>House-slots</title>
</head>

<body>
  <header class="hd">
    <div class="hd__container container">
      <a class="hd__logo" href="index.php">HouseSlots</a>
      <button class="hd__burger burger">
      <span class="burger__line"></span>
      </button>
      <nav class="hd__nav">
        <ul class="hd__list">
          <li class="hd__item">
            <a class="hd__link" href="slots.php">Slots</a>
          </li>
          <li class="hd__item">
            <a class="hd__link" href="about.php">About us</a>
          </li>
          <li class="hd__item">
            <a class="hd__link" href="faq.php">Faq</a>
          </li>
          <li class="hd__item">
            <a class="hd__link" href="news.php">News</a>
          </li>
        </ul>
      </nav>
      <div class="hd__user">
          <?php if(isset($_SESSION['logged_user'])) : ?>
            <a class="hd__link" href="account.php">Profile</a>
          <?php else : ?>
            <ul class="hd__buttons buttons">
               <li class="buttons__item">
                <button class="hd__log but" data-path="one">
                  Log in
                </button>      
                <div class="buttons__dropdown" data-target="one">
                  <form class="buttons__form sign-form" action="#" method="POST">
                    <div class="buttons__label">
                      <input class="buttons__input" type="text" placeholder="Email" name="email">
                    </div>
                    <div class="buttons__label">
                      <input class="buttons__input" type="text" placeholder="Login" name="login">
                    </div>
                    <div class="buttons__label">
                      <input class="buttons__input" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="buttons__label">
                      <input class="buttons__input" type="password" placeholder="Your password again" name="password_2">
                    </div>
                    <input class="buttons__btn" type="submit" name="sign_up" value="Send">
                  </form>
                  <?php
                  $data = $_POST;
                  if(isset($data['sign_up'])) {
                    $errors = array();

                    if(trim($data['login']) == '') {
                      $errors[] = "Enter login";
                    }
                    if(trim($data['email']) == '') {
                      $errors[] = "Enter your email";
                    }
                    if($data['password'] == '') {

                      $errors[] = "Enter password";
                    }
                    if($data['password_2'] != $data['password']) {

                      $errors[] = "Confirm password";
                    }
                    if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

                      $errors[] = "Wrong password length";
                    }
                    if(!empty($errors)) {
                      echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
                    }
                  }
                  ?>
                </div>
              </li>
        <li class="buttons__item">
          <button class="hd__sign but" data-path="two">
            Sign in
          </button>
          <div class="buttons__dropdown entrance-form" data-target="two">
            <form class="buttons__form log-form" action="#" method="POST">
              <div class="buttons__label">
                <input class="buttons__input" type="text" placeholder="Your login" name="login">
              </div>
              <div class="buttons__label">
                <input class="buttons__input" type="password" placeholder="Password" name="password">
              </div>
              <input class="buttons__btn" type="submit" name="log_in" value="Entrance">
            </form>
            <?php
            $data = $_POST;
            if(isset($data['log_in'])) {
              $errors = array();

              $user = R::findOne('users', 'login = ?', array($data['login']));

              if($user) {
                if(password_verify($data['password'], $user->password)) {
                  $_SESSION['logged_user'] = $user;
                    header('Location: index.php');
                }
              } else {
                $errors[] = 'The password was entered incorrectly';
              }
            } else {
              $errors[] = 'No users found with this name!';
            }
            if(!empty($errors)) {
              echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
            }
            ?>
          </div>
        </li>
        </ul>
            <?php endif; ?>
        </div>     
      </div>
    </div>
  </header>
  <main class="aos">