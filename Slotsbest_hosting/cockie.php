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
  <link rel="stylesheet" href="./css/cockie-min.css">
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
      <section class="page-coockie">
        <div class="page-coockie__container container">
        <h1 class="page-coockie__title">
          Πολιτική cookie για Slots-best
        </h1>
        <ul class="page-coockie__list">
          <li class="page-coockie__item">
            <h2 class="page-coockie__subtitle">
              Τι είναι τα Cookies
            </h2>
          </li>
          <li class="page-coockie__item">
            <p class="page-coockie__text">
              Όπως είναι κοινή πρακτική με όλους σχεδόν τους επαγγελματικούς ιστότοπους, αυτός ο ιστότοπος χρησιμοποιεί cookies, τα οποία είναι μικροσκοπικά αρχεία που μεταφορτώνονται στον υπολογιστή σας, για να βελτιώσουν την εμπειρία σας. Αυτή η σελίδα περιγράφει ποιες πληροφορίες συλλέγουν, πώς τις χρησιμοποιούμε και γιατί μερικές φορές χρειάζεται να αποθηκεύουμε αυτά τα cookies. Θα σας ενημερώσουμε επίσης για το πώς μπορείτε να αποτρέψετε την αποθήκευση αυτών των cookies, ωστόσο αυτό μπορεί να υποβαθμίσει ή να "σπάσει" ορισμένα στοιχεία της λειτουργικότητας του ιστότοπου.
            </p>
          </li>
          <li class="page-coockie__item">
            <h2 class="page-coockie__subtitle">
              Πώς χρησιμοποιούμε τα cookies
            </h2>
          </li>
          <li class="page-coockie__item">
            <p class="page-coockie__text">
              Χρησιμοποιούμε cookies για διάφορους λόγους που περιγράφονται λεπτομερώς παρακάτω. Δυστυχώς, στις περισσότερες περιπτώσεις δεν υπάρχουν τυποποιημένες επιλογές για την απενεργοποίηση των cookies χωρίς την πλήρη απενεργοποίηση της λειτουργικότητας και των χαρακτηριστικών που προσθέτουν σε αυτόν τον ιστότοπο. Συνιστάται να αφήνετε ενεργοποιημένα όλα τα cookies εάν δεν είστε σίγουροι αν τα χρειάζεστε ή όχι, σε περίπτωση που χρησιμοποιούνται για την παροχή μιας υπηρεσίας που χρησιμοποιείτε.
            </p>
          </li>
          <li class="page-coockie__item">
            <h2 class="page-coockie__subtitle">
              Απενεργοποίηση των cookies
            </h2>
          </li>
          <li class="page-coockie__item">
            <p class="page-coockie__text">
              Μπορείτε να αποτρέψετε τη ρύθμιση των cookies προσαρμόζοντας τις ρυθμίσεις του προγράμματος περιήγησής σας (δείτε τη βοήθεια του προγράμματος περιήγησής σας για να μάθετε πώς να το κάνετε αυτό). Λάβετε υπόψη ότι η απενεργοποίηση των cookies θα επηρεάσει τη λειτουργικότητα αυτού και πολλών άλλων ιστότοπων που επισκέπτεστε. Η απενεργοποίηση των cookies έχει συνήθως ως αποτέλεσμα την απενεργοποίηση ορισμένων λειτουργιών και χαρακτηριστικών αυτού του ιστότοπου. Ως εκ τούτου, συνιστάται να μην απενεργοποιείτε τα cookies.
            </p>
          </li>
          <li class="page-coockie__item">
            <h2 class="page-coockie__subtitle">
              Τα cookies που θέτουμε 
            </h2>
          </li>
          <li class="page-coockie__item">
            <p class="page-coockie__text">
              Εάν δημιουργήσετε λογαριασμό μαζί μας, τότε θα χρησιμοποιήσουμε cookies για τη διαχείριση της διαδικασίας εγγραφής και τη γενική διαχείριση. Αυτά τα cookies συνήθως διαγράφονται όταν αποσυνδεθείτε, ωστόσο σε ορισμένες περιπτώσεις μπορεί να παραμείνουν στη συνέχεια για να θυμούνται τις προτιμήσεις σας στον ιστότοπο όταν αποσυνδεθείτε.
            </p>
          </li>
          <li class="page-coockie__item">
            <h2 class="page-coockie__subtitle">
              Cookies που σχετίζονται με τη σύνδεση
            </h2>
          </li>
          <li class="page-coockie__item">
            <p class="page-coockie__text">
              Χρησιμοποιούμε cookies όταν είστε συνδεδεμένοι, ώστε να μπορούμε να θυμόμαστε αυτό το γεγονός. Αυτό σας αποτρέπει από το να χρειάζεται να συνδέεστε κάθε φορά που επισκέπτεστε μια νέα σελίδα. Αυτά τα cookies συνήθως αφαιρούνται ή διαγράφονται όταν αποσυνδέεστε, ώστε να διασφαλίζεται ότι μπορείτε να έχετε πρόσβαση σε περιορισμένες λειτουργίες και περιοχές μόνο όταν είστε συνδεδεμένοι.
            </p>
          </li>
          <li class="page-coockie__item">
            <h2 class="page-coockie__subtitle">
              Cookies τρίτων μερών
            </h2>
          </li>
          <li class="page-coockie__item">
            <p class="page-coockie__text">
              Σε ορισμένες ειδικές περιπτώσεις χρησιμοποιούμε επίσης cookies που παρέχονται από αξιόπιστα τρίτα μέρη. Η ακόλουθη ενότητα περιγράφει λεπτομερώς τα cookies τρίτων μερών που ενδέχεται να συναντήσετε μέσω αυτού του ιστότοπου.
            </p>
            <p class="page-coockie__text">
              Αυτός ο ιστότοπος χρησιμοποιεί το Google Analytics, το οποίο είναι μια από τις πιο διαδεδομένες και αξιόπιστες λύσεις ανάλυσης στο διαδίκτυο, για να μας βοηθήσει να κατανοήσουμε πώς χρησιμοποιείτε τον ιστότοπο και πώς μπορούμε να βελτιώσουμε την εμπειρία σας. Αυτά τα cookies μπορούν να παρακολουθούν πράγματα όπως η διάρκεια παραμονής σας στον ιστότοπο και οι σελίδες που επισκέπτεστε, ώστε να συνεχίσουμε να παράγουμε ελκυστικό περιεχόμενο.
            </p>
          </li>
          <li class="page-coockie__item">
            <h2 class="page-coockie__subtitle">
              Περισσότερες πληροφορίες
            </h2>
          </li>
          <li class="page-coockie__item">
            <p class="page-coockie__text">
              Ελπίζουμε ότι αυτό έχει ξεκαθαρίσει τα πράγματα για εσάς και όπως αναφέρθηκε προηγουμένως, αν υπάρχει κάτι που δεν είστε σίγουροι αν χρειάζεστε ή όχι, είναι συνήθως ασφαλέστερο να αφήσετε τα cookies ενεργοποιημένα σε περίπτωση που αλληλεπιδρά με κάποια από τις λειτουργίες που χρησιμοποιείτε στον ιστότοπό μας.
            </p>
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