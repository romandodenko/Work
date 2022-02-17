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
  <link rel="stylesheet" href="./css/conditions-min.css">
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
      <section class="page-conditions">
        <div class="page-conditions__container container">
          <h1 class="page-conditions__title">Όροι χρήσης</h1>
          <ul class="page-conditions__list">
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                1. Το παρόν έγγραφο καθορίζει τους όρους πρόσβασης και χρήσης του δικτυακού τόπου, εφεξής καλούμενοι "Γενικοί Όροι".
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                2. Κάθε χρήστης, αμέσως μόλις αρχίσει να χρησιμοποιεί τον ιστότοπο, υποχρεούται να διαβάσει, να συμμορφωθεί και να αποδεχθεί τους Γενικούς Όρους, χωρίς περιορισμούς ή επιφυλάξεις.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                3. Εάν δεν συμφωνείτε με όλους τους Γενικούς Όρους, πρέπει να σταματήσετε να χρησιμοποιείτε τον ιστότοπο και να τον εγκαταλείψετε αμέσως.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                4. Όλες οι εμπορικές ονομασίες, οι εταιρικές επωνυμίες και τα λογότυπά τους που χρησιμοποιούνται στον ιστότοπο ανήκουν στους αντίστοιχους ιδιοκτήτες τους και χρησιμοποιούνται μόνο για σκοπούς αναγνώρισης. Μπορεί να είναι καταχωρισμένα εμπορικά σήματα.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                5. Απαγορεύεται η μη εξουσιοδοτημένη χρήση του περιεχομένου του δικτυακού τόπου, των έργων ή των πληροφοριών, καθώς και η μη εξουσιοδοτημένη αναπαραγωγή, αναμετάδοση ή άλλη χρήση οποιουδήποτε στοιχείου του δικτυακού τόπου, καθώς μια τέτοια ενέργεια μπορεί να παραβιάζει, μεταξύ άλλων, τα πνευματικά δικαιώματα ή τα προστατευόμενα εμπορικά σήματα.
              </p>
            </li>
            <li class="page-conditions__item">
              <h2 class="page-conditions__subtitle">
                Ορισμοί
              </h2>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                1. ΕΝΤΥΠΟ ΕΓΓΡΑΦΗΣ - ερωτηματολόγιο διαθέσιμο στον ιστότοπο που επιτρέπει την εγγραφή και τη δημιουργία λογαριασμού στον ιστότοπο.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                2. ΛΟΓΑΡΙΑΣΜΟΣ - ένα σύνολο πόρων στον ιστότοπο, που χαρακτηρίζεται από ένα ατομικό όνομα ή ένα login και έναν κωδικό πρόσβασης, στο οποίο συλλέγονται τα δεδομένα του χρήστη.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                3. ΕΦΑΡΜΟΣΤΕΟ ΔΙΚΑΙΟ - Για τους σκοπούς της εφαρμογής των Γενικών Όρων και Προϋποθέσεων, εφαρμόζεται το πολωνικό δίκαιο.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                4. ΙΣΤΟΣΕΛΙΔΑ - το εργαλείο, με την ονομασία: bateriasajw.com, που χρησιμοποιείται για την παροχή ηλεκτρονικών υπηρεσιών.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                5. ΧΡΗΣΤΗΣ - φυσικό πρόσωπο, νομικό πρόσωπο ή οργανωτική μονάδα χωρίς νομική προσωπικότητα, στην οποία αναγνωρίζεται από το νόμο η δικαιοπρακτική ικανότητα, που χρησιμοποιεί τις ηλεκτρονικές υπηρεσίες που διατίθενται στον ιστότοπο.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                6. ΟΡΟΙ ΚΑΙ ΠΡΟΫΠΟΘΕΣΕΙΣ - το σύνολο όλων των διατάξεων, μεταξύ άλλων, των παρόντων Γενικών Όρων και Προϋποθέσεων, της Πολιτικής Προστασίας Προσωπικών Δεδομένων, των cookies, των Κανόνων και Κανονισμών για τη χρήση του ηλεκτρονικού καταστήματος, καθώς και οποιωνδήποτε άλλων όρων και προϋποθέσεων που βρίσκονται στον ιστότοπο και αφορούν συγκεκριμένες λειτουργίες, χαρακτηριστικά ή προσφορές, καθώς και την εξυπηρέτηση πελατών.
              </p>
            </li>
            <li class="page-conditions__item">
              <h2 class="page-conditions__subtitle">
                Όροι και προϋποθέσεις χρήσης
              </h2>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                1. Ο δικτυακός τόπος υποστηρίζεται από όλα τα είδη προγραμμάτων περιήγησης στο Διαδίκτυο. Δεν απαιτούνται ειδικές ιδιότητες του τερματικού εξοπλισμού του χρήστη.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                2. Με την αποδοχή των Όρων και Προϋποθέσεων, ο Χρήστης μπορεί να δει, να αντιγράψει, να εκτυπώσει και να διανείμει χωρίς τροποποίηση το περιεχόμενο του παρόντος δικτυακού τόπου, υπό την προϋπόθεση ότι:
               <span>α. το περιεχόμενο θα χρησιμοποιείται μόνο για ενημερωτικούς, μη εμπορικούς σκοπούς,</span>
                <span>β. κάθε αντίγραφο που δημιουργείται περιλαμβάνει πληροφορίες για τα πνευματικά δικαιώματα ή τα στοιχεία του δημιουργού του περιεχομένου.</span>
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                3. Απαγορεύεται η χρήση και η αντιγραφή λογισμικού, διαδικασιών και τεχνολογιών που αποτελούν μέρος του δικτυακού τόπου.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                4. 4ο Οι χρήστες μπορούν να χρησιμοποιούν την ιστοσελίδα μόνο σύμφωνα με τις διατάξεις του νόμου περί τηλεπικοινωνιών, του νόμου περί παροχής ηλεκτρονικών υπηρεσιών και των σχετικών διατάξεων του αστικού δικαίου.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                5. Απαγορεύεται η χρήση του δικτυακού τόπου:
                <span>α. με τρόπο που οδηγεί σε παραβίαση της ισχύουσας νομοθεσίας.</span>
                <span>β. με οποιονδήποτε παράνομο ή ανέντιμο τρόπο ή με τρόπο που αποσκοπεί στην επίτευξη παράνομου ή ανέντιμου σκοπού,</span>
                <span>γ. με σκοπό την πρόκληση βλάβης σε παιδιά ή την απόπειρα πρόκλησης οποιασδήποτε βλάβης σε αυτά,</span>
                <span>δ. να στείλετε, να λάβετε εν γνώσει σας, να ανεβάσετε ή να χρησιμοποιήσετε περιεχόμενο που δεν συμμορφώνεται με τους Γενικούς Όρους,</span>
                <span>ε. Να διαβιβάζετε ή να ζητάτε τη διαβίβαση οποιουδήποτε μη ζητηθέντος ή μη εγκεκριμένου διαφημιστικού ή προωθητικού υλικού ή οποιασδήποτε άλλης μορφής παρόμοιου υλικού που εμπίπτει στη συλλογική κατηγορία SPAM.</span>
                <span>στ. να διαβιβάζετε εν γνώσει σας δεδομένα, να στέλνετε ή να ανεβάζετε υλικό που περιέχει ιούς, δούρειους ίππους, spyware, adware ή οποιοδήποτε άλλο επιβλαβές πρόγραμμα ή παρόμοιο κώδικα υπολογιστή που έχει σχεδιαστεί για να επηρεάσει αρνητικά ή να θέσει σε κίνδυνο τη λειτουργία οποιουδήποτε λογισμικού ή υλικού υπολογιστή ή να επηρεάσει αρνητικά ή να θέσει σε κίνδυνο τον Χρήστη.</span>
              </p>
            </li>
            <li class="page-conditions__item">
              <h2 class="page-conditions__subtitle">
                ΤΡΟΠΟΠΟΊΗΣΗ ΤΩΝ ΌΡΩΝ ΚΑΙ ΠΡΟΫΠΟΘΈΣΕΩΝ ΤΟΥ ΔΙΚΤΥΑΚΟΎ ΤΌΠΟΥ
              </h2>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                1. Ο ιδιοκτήτης του δικτυακού τόπου διατηρεί το δικαίωμα να τροποποιεί τους παρόντες Γενικούς Όρους, ανά πάσα στιγμή κατά τη διάρκεια της ισχύος τους, αναρτώντας την επικαιροποιημένη έκδοση στον δικτυακό τόπο, η οποία θα είναι δεσμευτική για τους χρήστες από τη στιγμή της δημοσίευσής της, εκτός εάν αναφέρεται διαφορετικά στους τροποποιημένους Γενικούς Όρους.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                2. Ο Χρήστης υποχρεούται να εξοικειωθεί με τις τροποποιήσεις των Γενικών Όρων, για τις οποίες ο Ιδιοκτήτης θα τον ενημερώσει στέλνοντάς του μήνυμα ή ανακοίνωση σχετικά με τις τροποποιήσεις των Γενικών Όρων προς αποδοχή.
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                3. Η συνέχιση της χρήσης του ιστότοπου ισοδυναμεί με αποδοχή των τροποποιημένων Όρων και Προϋποθέσεων του ιστότοπου.
              </p>
            </li>
            <li class="page-conditions__item">
              <h2 class="page-conditions__subtitle">
                ΕΠΊΛΥΣΗ ΔΙΑΦΟΡΏΝ
              </h2>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                1. Τα μέρη συμφωνούν να επιλύουν πρώτα φιλικά τις διαφορές που προκύπτουν ενώπιον του αρμόδιου διαιτητικού δικαστηρίου (ρήτρα διαιτησίας).
              </p>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                2. Εάν δεν είναι δυνατή η φιλική διευθέτηση του ζητήματος, η διαφορά που προκύπτει από την παρούσα συμφωνία θα επιλύεται από το δικαστήριο στην περιφέρεια του οποίου βρίσκεται η έδρα του ιδιοκτήτη.
              </p>
            </li>
            <li class="page-conditions__item">
              <h2 class="page-conditions__subtitle">
                ΝΟΜΙΚΗ ΒΑΣΗ
              </h2>
            </li>
            <li class="page-conditions__item">
              <p class="page-conditions__text">
                1. Σε θέματα που δεν καλύπτονται από τους παρόντες Γενικούς Όρους, εφαρμόζονται αναλόγως οι ακόλουθοι νόμοι:
                <span>α. ο νόμος περί τηλεπικοινωνιών της 16ης Ιουλίου 2004 (δηλ. Εφημερίδα της Κυβερνήσεως του 2019, σημείο 2460, όπως τροποποιήθηκε),</span>
                <span>β. τον νόμο για την παροχή υπηρεσιών με ηλεκτρονικά μέσα της 18ης Ιουλίου 2002. (δηλ. Εφημερίδα της Κυβερνήσεως του 2019, σημείο 123, όπως τροποποιήθηκε),</span>
                <span>γ. Ο νόμος περί πνευματικής ιδιοκτησίας και συγγενικών δικαιωμάτων της 4ης Φεβρουαρίου 1994. (δηλ. Εφημερίδα της Κυβερνήσεως του 2019, σημείο 1231, όπως τροποποιήθηκε),</span>
                <span>δ. ο νόμος περί αστικού κώδικα της 23ης Απριλίου 1964. (δηλ. Εφημερίδα της Κυβερνήσεως του 2019, σημείο 1145, όπως τροποποιήθηκε),</span>
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