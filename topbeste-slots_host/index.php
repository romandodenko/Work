<?php if ( empty(session_id()) ) session_start(); ?>
<?php 
  include 'header.php';
?>

<main>
    <section class="hero">
      <div class="hero__container container">
        <h1 class="hero__title">Om os</h1>
        <p class="hero__text">Vi er et socialt casino - og i modsætning til casinoer med rigtige penge behøver du ikke
          at betale penge for at
          spille spillene. Du kan endda spille gratis, og du kan sende gaver til dine venner. Så længe du har på
          mindst én ven på siden, kan du spille for sjov og få gratis belønninger.</p>
        <p class="hero__text">De bedste sociale casinospil har mange fordele. Nogle er gratis, og du kan spille dem på
          din computer gratis. Optjen credits ved at logge ind hver dag, og lås op for nye spil, efterhånden som du
          spiller. Jo mere du
          spiller, jo flere penge vil du tjene. Derfor skal du altid huske, at huset altid vinder! Og
          bliv ikke overrasket, hvis du får et lille overskud på dit spil.</p>
      </div>
    </section>
    <section class="game">
      <div class="game__container container">
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <picture>
                <source srcset="./img/colonist.webp" type="image/webp"><img src="./img/colonist.jpg" alt="Colonist">
              </picture>
            </div>
            <div class="game__descr">
              <h2 class="game__title">
                Kolonist i rummet
              </h2>
              <p class="game__text">
                Koloniser planeten, og søg efter dens skatte!
              </p>
              <a class="game__link" href="#">Spil</a>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <picture>
                <source srcset="./img/cosmic-war.webp" type="image/webp"><img src="./img/cosmic-war.jpg"
                  alt="Cosmic war"></picture>
            </div>
            <div class="game__descr">
              <h2 class="game__title">
                Krig i rummet
              </h2>
              <p class="game__text">
                Skyd skibe ned, og bliv belønnet for det!
              </p>
              <a class="game__link" href="#">Spil</a>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <picture>
                <source srcset="./img/orc.webp" type="image/webp"><img src="./img/orc.jpg" alt="Orc"></picture>
            </div>
            <div class="game__descr">
              <h2 class="game__title">
                Ork-krigere
              </h2>
              <p class="game__text">
                Afvis angrebet fra orkerne, og lad ikke kongeriget falde!
              </p>
              <a class="game__link" href="#">Spil</a>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <picture>
                <source srcset="./img/ferma.webp" type="image/webp"><img src="./img/ferma.jpg" alt="Ferm"></picture>
            </div>
            <div class="game__descr">
              <h2 class="game__title">
                Farm vanvid
              </h2>
              <p class="game__text">
                Føl dig som en landmand, dyrk afgrøder og sælg dem, og tjen derved mønter!
              </p>
              <a class="game__link" href="#">Spil</a>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <div class="reg" id="reg">
    <div class="reg__container container">
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
          <div class="reg__close">x</div>
          <input class="reg__btn" type="submit" name="sign_up" value="Sende">
        </div>
      </form>
      <?php
        $data = $_POST;
        if(isset($data['sign_up'])) {
          $errors = array();

          if(trim($data['login']) == '') {
            $errors[] = "Indtast login";
          }
          if(trim($data['email']) == '') {
            $errors[] = "Indtast din e-mail";
          }
          if($data['password'] == '') {

            $errors[] = "Indtast adgangskode";
          }
          if($data['password_2'] != $data['password']) {

            $errors[] = "Bekræft adgangskode";
          }
          if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

            $errors[] = "Bekræft adgangskode";
          }
          if(!empty($errors)) {
            echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
          }
        }
      ?>
    </div>
  </div>
  <div class="log" id="log">
    <div class="log__container container">
      <form class="log__form" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your login" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="log__buttons">
          <div class="log__close">x</div>
          <input class="log__btn" type="submit" name="log_in" value="Indgang">
        </div>
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
            $errors[] = 'Adgangskoden blev indtastet forkert';
          }
        } else {
          $errors[] = 'Ingen brugere fundet med dette navn!';
        }
        if(!empty($errors)) {
          echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
        }
      ?>
    </div>
  </div>
  <div class="cockie-body">
    <p class="cockie-body__text">
      Dette websted bruger cookies, klik ok for at acceptere, klik mere for at læse vores cookiepolitik.
    </p>
    <div class="cockie-body__buttons">
      <button class="cockie-body__btn agree">Enig</button>
      <a class="cockie-body__link more" href="cock.html">Mere</a>
    </div>
  </div>
<?php 
  include 'footer.php';
?>