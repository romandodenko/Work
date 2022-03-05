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
  <link rel="stylesheet" href="./css/politica-min.css">
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
      <section class="lists-politica">
        <div class="lists-politica__container container">
          <ul class="lists-politica__list">
            <li class="lists-politica__item">
              <h1 class="lists-politica__title">Politica sulla privacy</h1>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                1. Per il proprietario di questo sito web, la protezione dei dati personali degli utenti è
                di fondamentale importanza. Fa di tutto per garantire che gli utenti si sentano sicuri quando si fidano del sito web.
                quando si utilizza il sito web.
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                2. L'utente è una persona fisica, una persona giuridica o un'unità organizzativa senza personalità giuridica.
                una persona giuridica o un'unità organizzativa senza personalità giuridica alla quale la legge conferisce capacità giuridica utilizzando i servizi elettronici disponibili sul sito web
                il sito web.
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                3. Questa politica sulla privacy spiega i principi e la portata del trattamento dei dati personali dell'utente,
                i diritti dell'utente, così come gli obblighi del responsabile del trattamento, e informa anche sull'uso del
                biscotti.
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                4. Il responsabile del trattamento dei dati implementa le misure tecniche e le soluzioni organizzative più aggiornate che assicurano
                un alto livello di protezione dei dati personali trattati e la sicurezza contro l'accesso non autorizzato.
                persone non autorizzate.
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                5. I dati personali possono anche essere trattati ai fini del marketing diretto dei prodotti,
                garantire e far valere i diritti o proteggersi dai diritti di voi o di terzi; e
                così come il marketing di servizi e prodotti di terzi o il proprio marketing che non è
                marketing diretto.
              </p>
            </li>
            <li class="lists-politica__item">
              <h1 class="lists-politica__title">Base legale per il trattamento dei dati personali</h1>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                1. Il trattamento dei dati personali è effettuato in conformità con le disposizioni del regolamento (UE)
                2016/679 del 27 aprile 2016 sulla protezione delle persone fisiche con riguardo al trattamento dei dati personali
                dati personali e sulla libera circolazione di tali dati e che abroga la direttiva 95/46/CE (regolamento generale sulla protezione dei dati).
                Regolamento sulla protezione dei dati), GU L 119 del 4.5.2016, pagg. 1-88, di seguito denominato "regolamento RODO".
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                2. L'Amministratore tratterà i dati personali solo con il previo consenso dell'Utente, che è espresso in.
                al momento della registrazione sul sito web.
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                3. Il suo consenso al trattamento dei suoi dati personali è completamente volontario, tuttavia, il non
                Il consenso le impedisce di registrarsi sul sito web.
              </p>
            </li>
            <li class="lists-politica__item">
              <h1 class="lists-politica__title">Diritti dell'utente</h1>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                1. L'utente può in qualsiasi momento richiedere al responsabile del trattamento informazioni sulla portata del trattamento dei suoi dati personali.
                dati personali.
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                2. L'utente può ritirare il suo consenso al trattamento dei suoi dati personali in qualsiasi momento:
                <span>a) Senza dare alcuna ragione. La richiesta di non trattare i dati può riguardare i dati specifici.</span>
                <span>b) Scopo specifico del trattamento, ad esempio la revoca del consenso a ricevere informazioni commerciali, o può riguardare</span>
                <span>c) Tutti gli scopi del trattamento dei dati. </span>
                La revoca del consenso rispetto a tutte le finalità del trattamento comporterà:
                <span>a) L'account dell'utente sarà cancellato dal sito web, insieme a tutti i precedenti</span>
                <span>b) I precedenti Dati Personali dell'Utente trattati dall'Amministratore. Il ritiro del consenso non influisce sulle azioni già
                  attività già svolte.</span>
              </p>
            </li>
            <li class="lists-politica__item">
              <p class="lists-politica__text">
                3. L'Utente può, in qualsiasi momento e senza giustificazione, chiedere all'Amministratore di cancellare i suoi dati. La richiesta di cancellazione dei dati non pregiudica le attività che sono state eseguite finora. Per cancellazione dei dati si intende la cancellazione simultanea dell'account dell'Utente, insieme a tutti i dati personali memorizzati e trattati fino ad oggi dall'Amministratore.
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