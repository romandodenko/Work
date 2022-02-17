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
  <link rel="stylesheet" href="./css/politick-min.css">
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
      <section class="page-politick">
        <div class="page-politick__container container">
          <h1 class="page-politick__title">Πολιτική απορρήτου</h1>
          <ul class="page-politick__list">
            <li class="page-politick__item">
              <p class="page-politick__text">
                1. Για τον ιδιοκτήτη αυτού του δικτυακού τόπου, η προστασία των προσωπικών δεδομένων των χρηστών είναι
                υψίστης σημασίας. Καταβάλλει μεγάλες προσπάθειες για να διασφαλίσει ότι οι χρήστες αισθάνονται ασφαλείς όταν εμπιστεύονται τις
                όταν χρησιμοποιείτε τον ιστότοπο.
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                2. Χρήστης είναι ένα φυσικό πρόσωπο, ένα νομικό πρόσωπο ή μια οργανωτική μονάδα χωρίς νομική προσωπικότητα.
                νομικό πρόσωπο ή οργανωτική μονάδα χωρίς νομική προσωπικότητα, στην οποία ο νόμος αναγνωρίζει δικαιοπρακτική ικανότητα, χρησιμοποιώντας τις ηλεκτρονικές υπηρεσίες που είναι διαθέσιμες στον ιστότοπο
                την ιστοσελίδα.
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                3. Η παρούσα πολιτική απορρήτου εξηγεί τις αρχές και το πεδίο εφαρμογής της επεξεργασίας των προσωπικών δεδομένων του χρήστη,
                τα δικαιώματα του χρήστη, καθώς και τις υποχρεώσεις του υπεύθυνου επεξεργασίας δεδομένων, και ενημερώνει επίσης για τη χρήση των
                μπισκότα.
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                4. Ο υπεύθυνος επεξεργασίας εφαρμόζει τα πλέον σύγχρονα τεχνικά μέτρα και οργανωτικές λύσεις που εξασφαλίζουν
                υψηλό επίπεδο προστασίας των επεξεργασμένων δεδομένων προσωπικού χαρακτήρα και ασφάλεια έναντι μη εξουσιοδοτημένης πρόσβασης.
                μη εξουσιοδοτημένα άτομα.
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                5. Τα δεδομένα προσωπικού χαρακτήρα μπορούν επίσης να υποβληθούν σε επεξεργασία για τους σκοπούς της άμεσης εμπορικής προώθησης προϊόντων,
                εξασφάλιση και διεκδίκηση αξιώσεων ή προστασία από αξιώσεις από εσάς ή από τρίτους, καθώς και
                καθώς και το μάρκετινγκ υπηρεσιών και προϊόντων τρίτων ή το δικό σας μάρκετινγκ που δεν είναι
                άμεσο μάρκετινγκ.
              </p>
            </li>
          </ul>
          <h2 class="page-politick__subtitle">Νομική βάση για την επεξεργασία δεδομένων προσωπικού χαρακτήρα</h2>
          <ul class="page-politick__list">
            <li class="page-politick__item">
              <p class="page-politick__text">
                1. Η επεξεργασία των δεδομένων προσωπικού χαρακτήρα γίνεται σύμφωνα με τις διατάξεις του κανονισμού του Ευρωπαϊκού Κοινοβουλίου και του Συμβουλίου (ΕΕ)
                2016/679 της 27ης Απριλίου 2016 σχετικά με την προστασία των φυσικών προσώπων έναντι της επεξεργασίας
                δεδομένων προσωπικού χαρακτήρα και για την ελεύθερη κυκλοφορία των δεδομένων αυτών και για την κατάργηση της οδηγίας 95/46/ΕΚ (Γενική
                Κανονισμός για την προστασία των δεδομένων), ΕΕ L 119 της 4.5.2016, σ. 1-88, εφεξής καλούμενος "κανονισμός RODO".
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                2. Ο Διαχειριστής επεξεργάζεται δεδομένα προσωπικού χαρακτήρα μόνο με την προηγούμενη συγκατάθεση του Χρήστη, η οποία εκφράζεται σε
                κατά τη στιγμή της εγγραφής στον ιστότοπο.
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                3. Η συγκατάθεσή σας για την επεξεργασία των προσωπικών σας δεδομένων είναι απολύτως εθελοντική, ωστόσο, η μη
                η συγκατάθεση σας εμποδίζει να εγγραφείτε στον ιστότοπο.
              </p>
            </li>
          </ul>
          <h2 class="page-politick__subtitle">Δικαιώματα χρηστών</h2>
          <ul class="page-politick__list">
            <li class="page-politick__item">
              <p class="page-politick__text">
                1. Ο χρήστης μπορεί ανά πάσα στιγμή να ζητήσει από τον υπεύθυνο επεξεργασίας πληροφορίες σχετικά με την έκταση της επεξεργασίας των
                προσωπικά δεδομένα.
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                2. Ο χρήστης μπορεί να ανακαλέσει τη συγκατάθεσή του για την επεξεργασία των προσωπικών του δεδομένων ανά πάσα στιγμή, χωρίς
                χωρίς αιτιολόγηση. Το αίτημα για τη μη επεξεργασία των δεδομένων μπορεί να αφορά τα συγκεκριμένα
                συγκεκριμένο σκοπό της επεξεργασίας, π.χ. ανάκληση της συγκατάθεσης για τη λήψη εμπορικών πληροφοριών, ή μπορεί να αφορά
                όλους τους σκοπούς της επεξεργασίας δεδομένων. Η ανάκληση της συγκατάθεσης όσον αφορά όλους τους σκοπούς της επεξεργασίας θα έχει ως αποτέλεσμα
                Ο λογαριασμός του Χρήστη θα διαγραφεί από τον ιστότοπο, μαζί με όλα τα προηγούμενα
                Προσωπικά δεδομένα του χρήστη που επεξεργάζεται ο Διαχειριστής. Η ανάκληση της συγκατάθεσης δεν επηρεάζει τις ενέργειες που έχουν ήδη
                δραστηριότητες που έχουν ήδη πραγματοποιηθεί.
              </p>
            </li>
            <li class="page-politick__item">
              <p class="page-politick__text">
                4. Ο χρήστης μπορεί, ανά πάσα στιγμή και χωρίς αιτιολόγηση, να ζητήσει από τον Διαχειριστή να διαγράψει τα δεδομένα του. Το αίτημα διαγραφής δεδομένων δεν επηρεάζει τις δραστηριότητες που έχουν εκτελεστεί μέχρι στιγμής. Διαγραφή δεδομένων σημαίνει ταυτόχρονη διαγραφή του λογαριασμού του Χρήστη, μαζί με όλα τα προσωπικά δεδομένα που έχουν αποθηκευτεί και επεξεργαστεί μέχρι σήμερα από τον Διαχειριστή.
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