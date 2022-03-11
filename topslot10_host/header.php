<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="stylesheet" href="./resources/aos.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <?php 
		require "./db.php";
	?>
  <title>Topslot-10</title>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container container">
          <nav class="header__nav">
          <ul class="header__list">
          <li class="header__item">
          <a class="header__link" href="index.php">Zuhause</a>
          </li>
          </ul>
          </nav>
          <?php if(isset($_SESSION['logged_user'])) : ?>
            <div class="header__profile profile">
              <button class="profile__btn">Profil</button>
              <div class="profile__body">
                <div class="profile__name">Login: <?php echo $_SESSION['logged_user']->login; ?>
              </div>
                <div class="profile__email">E-mail: <?php echo $_SESSION['logged_user']->email; ?>
              </div>
                <button class="profile__exit">Ausgabe</button>
              </div>
            </div>
          <?php else : ?>
            <div class="header__buttons">
                <div class="header__sign sign">
                  <button class="sign__but">Anmeldung</button>
                  <div class="sign__body">
                    <form class="sign__form" action="#" method="POST">
                      <div class="sign__label">
                        <input class="sign__input" type="text" placeholder="Email" name="email">
                      </div>
                      <div class="sign__label">
                        <input class="sign__input" type="text" placeholder="Login" name="login">
                      </div>
                      <div class="sign__label">
                        <input class="sign__input" type="password" placeholder="Password" name="password">
                      </div>
                      <div class="sign__label">
                        <input class="sign__input" type="password" placeholder="Your password again" name="password_2">
                      </div>
                      <input class="sign__btn" type="submit" name="sign_up" value="Anmeldung">
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

                          $errors[] = "Geben Sie das Passwort ein";
                        }
                        if($data['password_2'] != $data['password']) {

                          $errors[] = "Bestätige das Passwort";
                        }
                        if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

                          $errors[] = "Geben Sie das richtige Login ein";
                        }
                        if(!empty($errors)) {
                          echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
                        }
                      }
                    ?>
                  </div>
                </div>
            
                <div class="header__log log">
                  <button class="log__but">Betreten</button>
                  <div class="log__body">
                      <form class="log__form" method="POST">
                        <div class="log__label">
                          <input class="log__input" type="text" placeholder="Your login" name="login">
                        </div>
                        <div class="log__label">
                          <input class="log__input" type="password" placeholder="Password" name="password">
                        </div>
                        <input class="log__btn" type="submit" name="log_in" value="Betreten">
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

                            $errors[] = 'Passwort wurde falsch eingegeben';
                          }
                        } else {
                          $errors[] = 'Keine Benutzer mit diesem Namen gefunden!';
                        }

                        if (!empty($errors)) {

                          echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
                        }
                      }
                      ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
      </div>
    </header>