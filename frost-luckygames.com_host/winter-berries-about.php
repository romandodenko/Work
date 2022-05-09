<?php 
include 'header-page.php';
?>
  <main>
      <section class="game-solo">
        <div class="game-solo__container container">
          <div class="game-solo__top">
            <div class="game-solo__image">
              <picture>
              <source media="(min-width: 601px)" srcset="./img/winter-berries-s_fullscreen.png" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/winter-berries-s_320.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/winter-berries-s_fullscreen.webp" type="image/webp">
              <img src="./img/winter-berries-s_fullscreen.png" alt="Winter berries">
              </picture>
            </div>
            <div class="game-solo__top-right">
              <h1 class="game-solo__title subtitle">
                Χαρακτηριστικά παιχνιδιού
              </h1>
              <ul class="game-solo__list">
                <li class="game-solo__item">
                  Τζακ ποτ 62.500 νομισμάτων
                </li>
                <li class="game-solo__item">
                  Λειτουργία Freeze and Re-spins
                </li>
                <li class="game-solo__item">
                  Συνάρτηση πολλαπλασιαστή στήλης
                </li>
                <li class="game-solo__item">
                  Δεν υπάρχει δυνατότητα δωρεάν περιστροφών
                </li>
                <li class="game-solo__item">
                  Χωρίς σύμβολα διασποράς
                </li>
                <li class="game-solo__item">
                  Χωρίς wild σύμβολα
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="game-solo__bottom">
          <div class="game-solo__container container">
            <h2 class="game-solo__subtitle subtitle">
              Περιγραφή παιχνιδιού
            </h2>
            <p class="game-solo__text">
              Απολαύστε τον ευχάριστο χειμωνιάτικο καιρό στο Winter Berries. Με αυτό το παιχνίδι μπορείτε να βουτήξετε στη χειμερινή ατμόσφαιρα οποιαδήποτε εποχή του χρόνου. Ένα συναρπαστικό παιχνίδι με καλές πληρωμές θα σας διασκεδάσει για ώρες. Το Winter Berries είναι ένας κουλοχέρης 5 τροχών, 3 γραμμών και 25 γραμμών πληρωμής με τροχούς και πολλαπλασιαστές. Δοκιμάστε διαφορετικά μούρα του χειμώνα και επιστρέψτε με μεγάλα κέρδη.
            </p>
            <div class="game-solo__wrapper-link">
              <a class="game-solo__link game-link-p" href="winter-berries-play.php">Παίξτε</a>
            </div>
          </div>
        </div>
      </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your e-mail" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <input class="log__btn" type="submit" name="log_in" value="Να ερθει μεσα">
      </form>
      <button class="popup-log__exit"></button>
    </div>
  </div>
  <div class="popup-reg">
    <div class="popup-reg__close"></div>
    <div class="popup-reg__body">
      <form class="popup-reg__form-reg reg" action="#" method="POST">
      <input type="text" name="country" hidden value="el">
            <input type="text" name="site" hidden value="frost-luckygames.com">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email">
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">συνάντησα <a
              href="policy.php">πολιτική απορρήτου</a> και <a href="terms.php">oροι χρήσης</a> και
            Δέχομαι με</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Εγγραφή">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div>
  <?php 
  include 'footer-page.php';
  ?>