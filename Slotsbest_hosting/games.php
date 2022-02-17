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
  <link rel="stylesheet" href="./css/games-min.css">
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
              <a class="page-header__link" href="games.html">Παιχνίδια</a>
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
      <section class="page-games">
        <div class="page-games__container container">
          <ul class="page-games__list">
            <li class="page-games__item">
              <div class="page-games__image">
                <picture><source srcset="./img/auto.webp"type="image/webp"><img src="./img/auto.png" alt="κουλοχέρης"></picture>
              </div>
             <div class="page-games__descr">
              <h1 class="page-games__title">Κλασικοί κουλοχέρηδες</h1>
              <p class="page-games__text">Σε αυτό το παιχνίδι, έχετε όλες τις πιθανότητες να κερδίσετε εύκολα. Ελπίζω να θυμάστε ακόμα τον κλασικό κουλοχέρη με τους τρεις τροχούς - εδώ είναι! Παίξτε με το περιεχόμενο της καρδιάς σας.</p>
              <a class="page-games__link" href="./auto">Παίξτε</a>
             </div>
            </li>
            <li class="page-games__item">
              <div class="page-games__image">
                <picture><source srcset="./img/monkey.webp"type="image/webp"><img src="./img/monkey.png" alt="Μαϊμού"></picture>
              </div>
             <div class="page-games__descr">
              <h1 class="page-games__title">Η αγαπημένη μας μαϊμού! Δοκιμάστε την τύχη σας!</h1>
              <p class="page-games__text">Παίζοντας ως μαϊμού, πιάστε τις μπανάνες, αυξάνοντας έτσι τα κέρδη σας!</p>
              <a class="page-games__link" href="./monkey">Παίξτε</a>
             </div>
            </li>
            <li class="page-games__item">
              <div class="page-games__image">
                <picture><source srcset="./img/duck.webp"type="image/webp"><img src="./img/duck.png" alt="Μαϊμού"></picture>
              </div>
             <div class="page-games__descr">
              <h1 class="page-games__title">Πιστεύεις ότι είσαι καλός σκοπευτής; Δοκιμάστε το.</h1>
              <p class="page-games__text">Προσπαθήστε να χτυπήσετε ένα πουλί και να πάρετε νομίσματα για αυτό!</p>
              <a class="page-games__link" href=".duck/">Παίξτε</a>
             </div>
            </li>
          </ul>
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