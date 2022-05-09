<?php 
include 'header-page.php';
?>
  <main>
      <section class="game-solo">
        <div class="game-solo__container container">
          <div class="game-solo__top">
            <div class="game-solo__image">
              <picture>
              <source media="(min-width: 601px)" srcset="./img/let-it-slide-s_fullscreen.webp" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/let-it-slide-s_320.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/let-it-slide-s_320.webp" type="image/webp">
              <img src="./img/let-it-slide-s_fullscreen.png" alt="Let it slide">
              </picture>
            </div>
            <div class="game-solo__top-right">
              <h1 class="game-solo__title subtitle">
                Χαρακτηριστικά παιχνιδιού
              </h1>
              <ul class="game-solo__list">
                <li class="game-solo__item">
                  τον ιστότοπό μας μπορείτε να παίξετε το Let It Slide δωρεάν χωρίς εγγραφή
                </li>
                <li class="game-solo__item">
                  Yπέροχο gameplay
                </li>
                <li class="game-solo__item">
                  Ωραία γραφικά
                </li>
                <li class="game-solo__item">
                  Αξέχαστη εμπειρία παιχνιδιού
                </li>
                <li class="game-solo__item">
                  Εντυπωσιακή λειτουργία βάσης
                </li>
                <li class="game-solo__item">
                  Βελτιστοποιημένο για παιχνίδι μέσω κινητού
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
            
Το Let It Slide είναι ένας κουλοχέρης στον οποίο μπορείτε να απολαύσετε το βόρειο σέλας και άξια κέρδη. Ο κουλοχέρης Let It Slide έχει αγωνιστικό χώρο 6x5 και 20 γραμμές πληρωμής, αξιοσημείωτο είναι ότι τα κέρδη στον κουλοχέρη μπορούν να σχηματιστούν και προς τις δύο κατευθύνσεις. Ο συμβολισμός του κουλοχέρη Let It Slide αποτελείται από 9 κανονικά σύμβολα και 7 ειδικά. Με τη βοήθεια ειδικών συμβόλων, όχι μόνο θα κερδίζετε πιο συχνά, αλλά μπορείτε επίσης να ενεργοποιήσετε ενδιαφέρουσες λειτουργίες.
            </p>
            <div class="game-solo__wrapper-link">
              <a class="game-solo__link game-link-p" href="let-it-slide-play.php">Παίξτε</a>
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