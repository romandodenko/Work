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
  <link rel="stylesheet" href="./css/cockie-min.css">
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
        <section class="lists-cockie">
          <div class="lists-cockie__container container">
            <ul class="lists-cockie__list">
              <li class="lists-cockie__item">
                <h1 class="lists-cockie__title">Politica dei cookie</h1>
              </li>
              <li class="lists-cockie__item">
                <p class="lists-cockie__text">
                  Quando visitate un sito web, il nostro sistema raccoglie automaticamente informazioni sulla vostra visita, come il vostro browser, l'indirizzo IP e il sito web di riferimento. Le informazioni possono essere raccolte in collaborazione con i nostri fornitori di piattaforme e partner. Possiamo ricevere da loro informazioni demografiche generali o dati sull'uso dei visitatori del nostro sito web. Non usiamo automaticamente le informazioni raccolte per identificarvi personalmente senza ottenere un ulteriore consenso. Utilizziamo i cookie e strumenti di tracciamento simili per raccogliere tali informazioni. I cookie sono piccoli file di testo che vengono memorizzati sul suo computer o attrezzatura quando visita le nostre pagine web. Alcuni cookie sono essenziali per il funzionamento del sito web; altri migliorano il sito e ci aiutano a fornire un servizio migliore. Di seguito sono riportati i tipi di cookie che utilizziamo e i loro scopi.
                </p>
              </li>
              <li class="lists-cockie__item">
                <p class="lists-cockie__text">
                  <span>Cookie obbligatori:</span> permettono la navigazione e le funzionalità di base dei siti web, per esempio l'accesso alle sezioni di un sito web.
                </p>
              </li>
              <li class="lists-cockie__item">
                <p class="lists-cockie__text">
                  <span>Cookie di funzionalità:</span> ci permettono di analizzare l'uso del sito web e le vostre scelte sul sito (ad esempio la chiave di sessione, la lingua o la regione), in modo da poter memorizzare queste impostazioni e offrirvi un'esperienza più personalizzata.
                </p>
              </li>
              <li class="lists-cockie__item">
                <p class="lists-cockie__text">
                  <span>Cookie pubblicitari:</span> ci permettono di valutare l'efficacia del nostro content marketing. Questi cookie sono forniti dai nostri partner per tracciare le visite al sito web e registrare nuovi giocatori attraverso la pubblicità. Non condividiamo le vostre informazioni personali (ad esempio il nome o l'indirizzo e-mail) con i partner affiliati, ad eccezione dei dati di visita al sito web raccolti direttamente da questi cookie pubblicitari. Tuttavia, i dati relativi alla sua visita al sito web possono essere collegati ad altre informazioni personali raccolte dai venditori attraverso altre fonti. Quest'ultimo trattamento esterno dei dati è regolato dalle informative sulla privacy e dalle politiche di questi fornitori terzi.
                </p>
              </li>
              <li class="lists-cockie__item">
                <p class="lists-cockie__text">
                  Oltre a quanto sopra, utilizziamo un certo numero di fornitori di servizi terzi che impostano anche i cookie su questo sito web per fornire i servizi che ci forniscono. Questi servizi aiutano a migliorare il monitoraggio delle sue attività sul sito web, a misurare l'efficacia del sito web e l'efficacia delle nostre campagne di marketing.
                </p>
              </li>
              <li class="lists-cockie__item">
                <p class="lists-cockie__text">
                  La maggior parte dei browser internet accetta automaticamente i cookies. Se preferisci, puoi bloccare alcuni o tutti i cookie, o cancellare i cookie che sono già stati impostati modificando le impostazioni del tuo browser. Tuttavia, le raccomandiamo di non bloccare o cancellare i cookie, poiché ciò potrebbe limitare il suo utilizzo del nostro sito web.
                </p>
              </li>
            </ul>
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