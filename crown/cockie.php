<!DOCTYPE html>
<html lang="en-au">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Light.woff2" as="font">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./resources/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <title>Crown social casino</title>
  <?php 
  require "./db.php";
  ?>
</head>

<body>
  <div class="content">
  <?php 
  include 'header.php';
?>
    <main>
      <section class="cockie">
        <div class="cockie__container container">
          <h1 data-aos="fade-down">Cookie Policy for crown-social.com</h1>

          <p data-aos="fade-down">This is the Cookie Policy for crown-social.com, accessible from crown-social.com</p>
          
          <p data-aos="fade-down"><strong>What Are Cookies</strong></p>
          
          <p data-aos="fade-down">As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.</p>
          
          <p data-aos="fade-down"><strong>How We Use Cookies</strong></p>
          
          <p data-aos="fade-down">We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>
          
          <p data-aos="fade-down"><strong>Disabling Cookies</strong></p>
          
          <p data-aos="fade-down">You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.</p>
          <p data-aos="fade-down"><strong>The Cookies We Set</strong></p>
          
          <ul data-aos="fade-down">
          
          <li>
              <p>Account related cookies</p>
              <p>If you create an account with us then we will use cookies for the management of the signup process and general administration. These cookies will usually be deleted when you log out however in some cases they may remain afterwards to remember your site preferences when logged out.</p>
          </li>

          </ul>
          
          <p data-aos="fade-down"><strong>Third Party Cookies</strong></p>
          
          <p data-aos="fade-down">In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p>
          
          <ul data-aos="fade-down">
          
          <li>
              <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content.</p>
              <p>For more information on Google Analytics cookies, see the official Google Analytics page.</p>
          </li>

          </ul>
          
          <p data-aos="fade-down"><strong>More Information</strong></p>
          
          <p data-aos="fade-down">Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p>
          
          <p data-aos="fade-down">However if you are still looking for more information then you can contact us through one of our preferred contact methods:</p>
          
          <p data-aos="fade-down">Email: <a href="mailto:crown@support.com">crown@support.com</a></p>
        
        </div>
      </section>
    </main>
    <?php 
  include 'footer.php';
?>
  </div>
  <div class="reg">
  <div class="reg__close"></div>
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
    <div class="reg__button">
      <div class="reg__exit">x</div>
      <input class="reg__btn" type="submit" name="sign_up" value="Register">
    </div>
</form>
<?php
        $data = $_POST;
        if(isset($data['sign_up'])) {
          $errors = array();

          if(trim($data['login']) == '') {
            $errors[] = "Enter login";
          }
          if(trim($data['email']) == '') {
            $errors[] = "Enter your email address";
          }
          if($data['password'] == '') {

            $errors[] = "Enter password";
          }
          if($data['password_2'] != $data['password']) {

            $errors[] = "Confirm the password";
          }
          if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

            $errors[] = "Confirm the password";
          }
          if(!empty($errors)) {
            echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
          }
        }
      ?>
</div>
</div>
<div class="log">
  <div class="log__close"></div>
<div class="log__wrapper-form">
    <form class="log__form" action="#" method="POST">
      <div class="log__label">
        <input class="log__input" type="text" placeholder="Your login" name="login">
      </div>
      <div class="log__label">
        <input class="log__input" type="password" placeholder="Password" name="password">
      </div>
      <div class="log__buttons">
        <div class="log__exit">x</div>
        <input class="log__btn" type="submit" name="log_in" value="Log in">
      </div>
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

								$errors[] = 'The password was entered incorrectly';
							}
						} else {
							$errors[] = 'There is no user with this name';
						}

						if (!empty($errors)) {

							echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
						}
					}
					?>
  </div>
</div>
  <script src="./resources/aos.js"></script>
  <script src="./resources/swiper.js"></script>
  <script src="./js/main.min.js"></script>
</body>

</html>