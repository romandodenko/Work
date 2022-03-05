<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Bold.woff2" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff" as="font">
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font">
  <link rel="stylesheet" href="./resources/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <?php 
    require "db.php";
  ?>
  <title>Top10-slot</title>
</head>

<body>
  <div class="lists">
    <header class="lists-head">
      <div class="lists-head__container container">
        <a class="lists-head__logo" href="index.php">Top10-Slot</a>
        <nav class="lists-head__nav">
          <ul class="lists-head__list">
            <li class="lists-head__item">
              <button class="lists-head__btn reg">Registrazione</button>
            </li>
            <li class="lists-head__item">
              <button class="lists-head__btn acced">Accedi</button>
            </li>
          </ul>
        </nav>
        <div class="lists-head__user user">
        <?php if(isset($_SESSION['logged_user'])) : ?>
            <div class="user__prof">
            <?php echo $_SESSION['logged_user']->login; ?>
          <div class="user__img"><img src="./img/user.png" alt="User"></div>
          </div>
         <?php else : ?>
            <div class="user__prof">Ospite</div>
            <div class="user__img"><img src="./img/user.png" alt="User"></div>
          <?php endif; ?>
        </div>
      </div>
    </header>
    <main>
      <section class="lists-hero">
        <div class="lists-hero__container container">
          <div class="lists-hero__descr">
            <h1 class="lists-hero__title">Benvenuti al casinò sociale Top10-slot!</h1>
            <p class="lists-hero__text">Vi presentiamo un casinò sociale con giochi gratuiti per l'intrattenimento e il
              tempo libero. Gioca da solo o con gli amici. Crea un account personale per giocare come utente registrato.
              Tutti i giocatori che vogliono divertirsi sono i benvenuti.</p>
          </div>
        </div>
      </section>
      <section class="lists-gameplay">
        <div class="lists-gameplay__container container">
          <h1 class="lists-gameplay__title">Giochi</h1>
          <div class="lists-gameplay__buttons">
            <button class="lists-gameplay__prev">←</button>
            <button class="lists-gameplay__next">→</button>
          </div>
             <div class="lists-gameplay__swiper gameplay-swiper">
               <ul class="gameplay-swiper__wrapper swiper-wrapper">
                 <li class="gameplay-swiper__slide swiper-slide">
                  <div class="gameplay-swiper__image">
                    <picture><source srcset="./img/pirats.webp"type="image/webp"><img src="./img/pirats.png" alt="Pirate"></picture>
                  </div>
                  <div class="gameplay-swiper__descr">
                    <h1 class="gameplay-swiper__title">
                      Pirati. Conquistatori di mari e tesori.
                    </h1>
                    <p class="gameplay-swiper__text">
                      Hai sempre voluto essere un pirata? Ecco la tua occasione, parti per un viaggio e metti le mani sul tesoro!
                    </p>
                    <a class="gameplay-swiper__link" href="#">Gioca</a>
                  </div>
                 </li>
                 <li class="gameplay-swiper__slide swiper-slide">
                  <div class="gameplay-swiper__image">
                    <picture><source srcset="./img/ostrov.webp"type="image/webp"><img src="./img/ostrov.png" alt="Isola"></picture>
                  </div>
                  <div class="gameplay-swiper__descr">
                    <h1 class="gameplay-swiper__title">
                      L'isola del tesoro.
                    </h1>
                    <p class="gameplay-swiper__text">
                      Lei è un marinaio. Il tuo obiettivo era trovare un'isola del tesoro, ma sei naufragato. E come il destino ha voluto, sei finito su quest'isola. Riuscirai a mettere le mani sull'ambito tesoro?
                    </p>
                    <a class="gameplay-swiper__link" href="#">Gioca</a>
                  </div>
                 </li>
                 <li class="gameplay-swiper__slide swiper-slide">
                  <div class="gameplay-swiper__image">
                    <picture><source srcset="./img/luchnik.webp"type="image/webp"><img src="./img/luchnik.png" alt="Arciere"></picture>
                  </div>
                  <div class="gameplay-swiper__descr">
                    <h1 class="gameplay-swiper__title">
                      Tiratore. Spara e vinci.
                    </h1>
                    <p class="gameplay-swiper__text">
                      Metti alla prova la tua fortuna e le tue capacità di tiro. Spara con precisione e guadagna monete!
                    </p>
                    <a class="gameplay-swiper__link" href="#">Gioca</a>
                  </div>
                 </li>
               </ul>
             </div>
        </div>
      </section>
    </main>
    <div class="popup-reg">
      <div class="popup-reg__exit"></div>
      <div class="popup-reg__body">
        <form class="popup-reg__form" action="#" method="POST">
          <div class="popup-reg__label">
            <input class="popup-reg__input" type="text" placeholder="Email" name="email">
          </div>
          <div class="popup-reg__label">
            <input class="popup-reg__input" type="text" placeholder="Login" name="login">
          </div>
          <div class="popup-reg__label">
            <input class="popup-reg__input" type="password" placeholder="Password" name="password">
          </div>
          <div class="popup-reg__label">
            <input class="popup-reg__input" type="password" placeholder="Your password again" name="password_2">
          </div>
          <input class="popup-reg__btn" type="submit" name="sign_up" value="Invia">
          <div class="popup-reg__close">x</div>
        </form>
        <?php
            $data = $_POST;
            if(isset($data['sign_up'])) {
              $errors = array();

              if(trim($data['login']) == '') {
                $errors[] = "Inserisci la connessione";
              }
              if(trim($data['email']) == '') {
                $errors[] = "Inserisci la tua email";
              }
              if($data['password'] == '') {

                $errors[] = "Inserisci la tua password";
              }
              if($data['password_2'] != $data['password']) {

                $errors[] = "La password non è stata inserita correttamente";
              }
              if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

                $errors[] = "Lunghezza password errata";
              }
              if(!empty($errors)) {
                echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
              }
            }
            ?>
      </div>
    </div>
    <div class="popup-acced">
      <div class="popup-acced__exit"></div>
      <div class="popup-acced__body">
        <form class="popup-acced__form" action="#" method="POST">
          <div class="popup-acced__label">
            <input class="popup-acced__input" type="text" placeholder="Your login" name="login">
          </div>
          <div class="popup-acced__label">
            <input class="popup-acced__input" type="password" placeholder="Password" name="password">
          </div>
          <input class="popup-acced__btn" type="submit" name="log_in" value="Entrare">
          <div class="popup-acced__close">x</div>
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
                $errors[] = 'La password non è stata inserita correttamente';
              }
            } else {
              $errors = 'Nessun utente trovato con questo nome!';
            }
            if(!empty($errors)) {
              echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
            }
            ?>
      </div>
    </div>
    <footer class="lists-footer">
      <div class="lists-footer__container container">
        <ul class="lists-footer__list">
          <li class="lists-footer__item">
            <a class="lists-footer__link" href="politica.php">Informativa sulla privacy</a>
          </li>
          <li class="lists-footer__item">
            <a class="lists-footer__link" href="conditions.php">Condizioni d'uso</a>
          </li>
          <li class="lists-footer__item">
            <a class="lists-footer__link" href="cockie.php">Politica dei cookie</a>
          </li>
        </ul>
        <p class="lists-footer__copy">Il casinò sociale è solo per persone di età superiore ai 18 anni. Il casinò sociale
          non ti dà l'opportunità di vincere o guadagnare premi di valore o denaro. </p>
      </div>
    </footer>
  </div>
  <script src="./js/main.min.js"></script>
</body>

</html>