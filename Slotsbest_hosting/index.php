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
  <link rel="stylesheet" href="./css/main-min.css">
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
              <a class="page-header__link" href="#about">Σχετικά με εμάς</a>
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
      <section class="page-hero">
        <div class="page-hero__container container">
          <div class="page-hero__body">
            <h1 class="page-hero__title">Kοινωνικό καζίνο</h1>
            <p class="page-hero__text">Καλώς ήρθατε στο κοινωνικό μας καζίνο! Παρουσιάζουμε ένα κοινωνικό καζίνο με
              δωρεάν παιχνίδια για ψυχαγωγία και αναψυχή. Είναι ένα νέο επίπεδο παιχνιδιού! Δεν χρειάζεστε πραγματικά
              χρήματα για να παίξετε. Θέλετε να το δοκιμάσετε; Εγγραφείτε τώρα!</p>
          </div>
        </div>
      </section>
      <section class="page-about" id="about">
        <div class="page-about__container container">
            <div class="page-about__body">
              <h2 class="page-about__title">Σχετικά με εμάς</h2>
              <div class="page-about__descr">
                <p class="page-about__text">
                  Είμαστε ένα κοινωνικό καζίνο για όλους τους παίκτες. Δεν έχουμε παιχνίδια με πραγματικά χρήματα. Σας
                  προσκαλούμε να διασκεδάσετε παίζοντας με τους φίλους σας ή μόνοι σας. Μπορούν να παίξουν τόσο μη
                  εγγεγραμμένοι όσο και εγγεγραμμένοι χρήστες.
                </p>
                    <div class="page-about__bottom">
                      <h2 class="page-about__subtitle">Τα πλεονεκτήματά μας:</h2>
                      <ul class="page-about__list">
                        <li class="page-about__item">
                          <p>Διαθέσιμο σε όλους</p>
                        </li>
                        <li class="page-about__item">
                          <p>Μην χρησιμοποιείτε πραγματικά χρήματα</p>
                        </li>
                        <li class="page-about__item">
                          <p>Απλά ελάτε και παίξτε!</p>
                        </li>
                      </ul>
                    </div>
              </div>
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
          <p class="page-footer__text">Σημείωση: Το κοινωνικό καζίνο απευθύνεται μόνο σε άτομα άνω των 18 ετών.  Το κοινωνικό καζίνο δεν σας δίνει την ευκαιρία να κερδίσετε ή να κερδίσετε πολύτιμα βραβεία ή χρήματα. Το κοινωνικό καζίνο έχει σχεδιαστεί για ψυχαγωγία.</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="./js/main.min.js"></script>
</body>

</html>