<!DOCTYPE html>
<html lang="el">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="stylesheet" href="./css/registration-min.css">
  <?php 
  require "db.php";
  ?>
  <title>Slots-best</title>
</head>

<body>
  <div class="page">
  <header class="page-header">
      <div class="page-header__container container">
        <a class="page-header__logo" href="index.php">SlotBest</a>
        <button class="page-header__burger">
        <span class="page-header__line"></span>
        </button>
        <nav class="page-header__nav">
          <ul class="page-header__list">
            <li class="page-header__item">
              <a class="page-header__link" href="index.php">Σπίτι</a>
            </li>
            <li class="page-header__item">
              <a class="page-header__link" href="games.php">Παιχνίδια</a>
            </li>
            <li class="page-header__item">
              <a class="page-header__link" href="index.php">Σχετικά με εμάς</a>
            </li>
            <?php if(isset($_SESSION['logged_user'])) : ?>
              <li class="page-header__item">
              <a class="page-header__link" href="logout.php">Πηγαίνετε στο</a>
            </li>
            <?php else : ?>
              <li class="page-header__item">
              <a class="page-header__link" href="registration.php">Εγγραφή</a>
            </li>
            <li class="page-header__item">
              <a class="page-header__link" href="entrance.php">Συνδεθείτε</a>
            </li>
            <?php endif; ?>
          </ul>
        </nav>
        <div class="page-header__user user">
        <?php if(isset($_SESSION['logged_user'])) : ?>
            <div class="user__profile">
            <?php echo $_SESSION['logged_user']->login; ?>
          <div class="user__img"><img src="./img/user.png" alt="User"></div>
          </div>
         <?php else : ?>
            <div class="user__profile">Επισκέπτης</div>
            <div class="user__img"><img src="./img/user.png" alt="User"></div>
          <?php endif; ?>
        </div>
      </div>
    </header>
    <main>
      <section class="page-registration">
        <div class="page-registration__container container">
          <div class="page-registration__body">
            <form class="page-registration__form" action="#" method="POST">
              <div class="page-registration__label">
                <input class="page-registration__input" type="text" placeholder="Email" name="email">
              </div>
              <div class="page-registration__label">
                <input class="page-registration__input" type="text" placeholder="Login" name="login">
              </div>
              <div class="page-registration__label">
                <input class="page-registration__input" type="password" placeholder="Password" name="password">
              </div>
              <div class="page-registration__label">
                <input class="page-registration__input" type="password" placeholder="Your password again" name="password_2">
              </div>
              <input class="page-registration__btn" type="submit" name="sign_up" value="Στείλτε">
            </form>
            <?php
            $data = $_POST;
            if(isset($data['sign_up'])) {
              $errors = array();

              if(trim($data['login']) == '') {
                $errors[] = "Εισάγετε τη σύνδεση";
              }
              if(trim($data['email']) == '') {
                $errors[] = "Εισάγετε το email σας";
              }
              if($data['password'] == '') {

                $errors[] = "Εισάγετε τον κωδικό πρόσβασής σας";
              }
              if($data['password_2'] != $data['password']) {

                $errors[] = "Ο κωδικός πρόσβασης δεν πληκτρολογήθηκε σωστά";
              }
              if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

                $errors[] = "Λανθασμένο μήκος κωδικού πρόσβασης";
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
    <footer class="page-footer">
      <div class="page-footer__container container">
        <div class="page-footer__body">
          <ul class="page-footer__list">
            <li class="page-footer__item">
              <a class="page-footer__link" href="politick.html">Πολιτική απορρήτου</a>
            </li>
            <li class="page-footer__item">
              <a class="page-footer__link" href="conditions.html">Όροι χρήσης</a>
            </li>
            <li class="page-footer__item">
              <a class="page-footer__link" href="cockie.html">Πολιτική cookie</a>
            </li>
          </ul>
          <p class="page-footer__text">Σημείωση: Το κοινωνικό καζίνο απευθύνεται μόνο σε άτομα άνω των 18 ετών. Το
            κοινωνικό καζίνο δεν σας δίνει την ευκαιρία να κερδίσετε ή να κερδίσετε πολύτιμα βραβεία ή χρήματα. Το
            κοινωνικό καζίνο έχει σχεδιαστεί για ψυχαγωγία.</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="./js/main.min.js"></script>
</body>

</html>