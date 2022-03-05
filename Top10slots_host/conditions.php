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
  <link rel="stylesheet" href="./css/conditions-min.css">
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
      <section class="lists-conditions">
        <div class="lists-conditions__container container">
          <h1 class="lists-conditions__title">Condizioni d'uso</h1>
          <ul class="lists-conditions__list">
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                1. Il presente documento stabilisce le condizioni di accesso e di utilizzo del sito web, di seguito
                denominate "Condizioni generali".
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                2. Ogni utente, dal momento in cui inizia a utilizzare il sito web, è obbligato a leggere, rispettare e
                accettare le Condizioni Generali, senza alcuna limitazione o riserva.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                3. Se non siete d'accordo con tutte le Condizioni Generali, dovete smettere di usare il sito web e
                lasciarlo immediatamente.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                4. Tutti i nomi commerciali, i nomi di società e i loghi utilizzati sul sito web appartengono ai loro
                rispettivi proprietari e sono utilizzati solo a scopo di identificazione. Possono essere marchi
                registrati.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                5. L'uso non autorizzato del contenuto, delle opere o delle informazioni del sito web, così come la
                riproduzione non autorizzata, la ritrasmissione o altro uso di qualsiasi elemento del sito web è
                vietato, in quanto tale azione può violare, tra l'altro, il diritto d'autore o i marchi protetti.
              </p>
            </li>
            <li class="lists-conditions__item">
              <h2 class="lists-conditions__subtitle">
                Definizioni
              </h2>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                1. MODULO DI REGISTRAZIONE - un questionario disponibile sul sito web che permette la registrazione e la
                creazione di un account sul sito web.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                2. ACCOUNT - un insieme di risorse sul sito web, caratterizzato da un nome individuale o login e
                password, in cui vengono raccolti i dati dell'utente.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                3. LEGGE APPLICABILE - ai fini dell'applicazione delle Condizioni Generali è applicabile la legge
                polacca.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                4. SITO WEB - lo strumento, denominato: bateriasajw.com, utilizzato per la fornitura di servizi
                elettronici.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                5. UTENTE - una persona fisica, persona giuridica o unità organizzativa senza personalità giuridica,
                riconosciuta dalla legge come avente capacità giuridica, che utilizza i servizi elettronici disponibili
                sul sito web.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                6. TERMINI E CONDIZIONI - l'insieme di tutte le disposizioni, compresi, ma non limitati a, questi
                Termini e Condizioni Generali, l'Informativa sulla Privacy, i cookies, le Regole e i Regolamenti per
                l'utilizzo dell'e-shop, così come qualsiasi altro termine e condizione presente sul sito web e relativo
                a specifiche funzioni, caratteristiche o offerte, così come il servizio clienti.
              </p>
            </li>
            <li class="lists-conditions__item">
              <h2 class="lists-conditions__subtitle">
                Termini e condizioni d'uso
              </h2>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                1. Il Sito è supportato da tutti i tipi di browser Internet. Non sono richieste proprietà speciali
                dell'apparecchiatura terminale utente.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                2. Accettando i Termini e Condizioni, l'Utente può visualizzare, copiare, stampare e distribuire senza
                modifiche il contenuto di questo sito Web, a condizione che:
                <span>a) il contenuto sarà utilizzato solo a scopo informativo e non commerciale,</span>
                <span>b) ogni copia creata contiene informazioni sul copyright o i dettagli del creatore del contenuto.</span>
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                3. È vietato l'uso e la copia di software, processi e tecnologie che fanno parte del sito web.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                4. 4° Gli utenti possono utilizzare il sito solo in conformità con le disposizioni della legge sulle
                telecomunicazioni, la legge sulla fornitura di servizi elettronici e le relative disposizioni di diritto
                civile.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                5. È vietato l'uso del sito web:
                <span>a) in un modo che porti a una violazione della legge applicabile.</span>
                <span>b) in qualsiasi modo illecito o disonesto o in un modo inteso a raggiungere uno scopo illecito o
                  disonesto, </span>
                <span>c) al fine di arrecare danno ai bambini o tentare di arrecare loro danno,</span>
                <span>d) inviare, riconoscere, caricare o utilizzare contenuti non conformi alle Condizioni generali,
                </span>
                <span>e) Trasmettere o richiedere la trasmissione di qualsiasi materiale promozionale o promozionale
                  non richiesto o non approvato o qualsiasi altra forma di materiale simile che rientri nella categoria
                  della classe SPAM.</span>
                <span>h) trasmettere, inviare o caricare consapevolmente materiale che contenga virus, cavalli di
                  Troia, spyware, adware o qualsiasi altro programma dannoso o codice informatico simile progettato per
                  influire negativamente o compromettere il funzionamento di qualsiasi computer software o hardware o
                  pregiudicare o mettere in pericolo l'Utente.</span>
              </p>
            </li>
            <li class="lists-conditions__item">
              <h2 class="lists-conditions__subtitle">
                Modifica dei termini e delle condizioni del sito web
              </h2>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                1. Il proprietario del Sito si riserva il diritto di modificare le presenti Condizioni Generali in
                qualsiasi momento durante la loro validità, pubblicando la versione aggiornata sul Sito, che sarà
                vincolante per gli utenti dal momento della sua pubblicazione, salvo diversa indicazione nelle
                Condizioni Generali modificate.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                2. L'Utente è obbligato a familiarizzare con le modifiche delle Condizioni Generali, di cui il
                Proprietario lo informerà inviandogli un messaggio o un avviso delle modifiche delle Condizioni Generali
                da accettare.
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                3. L'uso continuato del sito web equivale all'accettazione dei Termini e Condizioni modificati del sito
                web.
              </p>
            </li>
            <li class="lists-conditions__item">
              <h2 class="lists-conditions__subtitle">
                Risoluzione delle controversie
              </h2>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                1. Le parti concordano di risolvere prima amichevolmente qualsiasi controversia che si presenti davanti
                al tribunale arbitrale competente (clausola arbitrale).
              </p>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                2. Se non è possibile risolvere la questione amichevolmente, la controversia derivante da questo accordo
                sarà risolta dal tribunale del distretto in cui si trova la sede legale del proprietario.
              </p>
            </li>
            <li class="lists-conditions__item">
              <h2 class="lists-conditions__subtitle">
                Basi legali
              </h2>
            </li>
            <li class="lists-conditions__item">
              <p class="lists-conditions__text">
                1. Per quanto non previsto dalle presenti Condizioni Generali, si applicano mutatis mutandis le seguenti
                leggi:
                <span>a) la legge sulle telecomunicazioni del 16 luglio 2004 (ie Gazzetta ufficiale del governo del
                  2019, paragrafo 2460, come modificato),</span>
                <span>b) la legge sulla prestazione di servizi per via elettronica del 18 luglio 2002. (ie Gazzetta
                  Ufficiale del 2019, punto 123 e successive modifiche),</span>
                <span>c) Il Copyright and Related Rights Act del 4 febbraio 1994. (ossia Government Gazette 2019,
                  paragrafo 1231, come modificato),</span>
                <span>d) la legge sul codice civile del 23 aprile 1964. (ie Gazzetta ufficiale del governo del 2019,
                  punto 1145, come modificato),</span>
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