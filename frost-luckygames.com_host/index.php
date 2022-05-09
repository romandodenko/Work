<?php 
  include 'header.php';
?>

  <main>
    <section class="hero">
      <div class="hero__container container">
        <div class="hero__body">
          <h1 class="hero__title title">
            Frost-lucky
          </h1>
          <p class="hero__text text-h">
            Κοινωνικό καζίνο με δωρεάν παιχνίδια
          </p>
          <a class="hero__link hero-l link-anchor" href="#game">Παίξε τώρα</a>
        </div>
      </div>
    </section>
    <section class="game" id="game">
      <div class="game__container container">
        <h2 class="game__title subtitle">
          Επιλέξτε το αγαπημένο σας παιχνίδι
        </h2>
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <a href="winter-berries-play.php">
                <picture>
                  <source media="(min-width: 601px)" srcset="./img/winter-berries_fullscreen.webp" type="image/webp">
                  <source media="(min-width: 600px)" srcset="./img/winter-berries_320.png" type="image/png">
                  <source media="(max-width: 600px)" srcset="./img/winter-berries_320.webp" type="image/webp">
                  <img src="./img/winter-berries_fullscreen.png" alt="Winter berries">
                </picture>
              </a>
            </div>
            <div class="game__links">
              <a class="game__link game-link-p" href="winter-berries-play.php">Παίξτε</a>
              <a class="game__link game-link-a" href="winter-berries-about.php">Περισσότερο</a>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="let-it-slide-play.php">
                <picture>
                  <source media="(min-width: 601px)" srcset="./img/let-it-slide_fullscreen.webp" type="image/webp">
                  <source media="(min-width: 600px)" srcset="./img/let-it-slide_320.png" type="image/png">
                  <source media="(max-width: 600px)" srcset="./img/let-it-slide_320.webp" type="image/webp">
                  <img src="./img/let-it-slide_fullscreen.png" alt="Let it slide">
                </picture>
              </a>
            </div>
            <div class="game__links">
              <a class="game__link game-link-p" href="let-it-slide-play.php">Παίξτε</a>
              <a class="game__link game-link-a" href="let-it-slide-about.php">Περισσότερο</a>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about__container container">
        <div class="about__item">
          <h2 class="about__title title-a">
            Frost-lucky
          </h2>
          <h3 class="about__subtitle subtitle-a">
            Κοινωνικό καζίνο με δωρεάν παιχνίδια.
          </h3>
          <p class="about__text text">
            Το Frost-lucky συνδυάζει μια προσέγγιση βάσει δεδομένων, μια προηγμένη οικονομία gaming με περιεχόμενο
            υψηλής ποιότητας για να δημιουργήσει μια καθηλωτική εμπειρία gaming για κινητά για εκατομμύρια χρήστες σε
            όλο τον κόσμο.
          </p>
          <p class="about__text text">
            Το Social Casino, τα casual και τα παιχνίδια μπίνγκο της εταιρείας παραμένουν πιστά στο αυθεντικό πνεύμα των
            μεγαλύτερων επωνυμιών καζίνο στον κόσμο και προσφέρουν στους χρήστες ώρες διασκέδασης και ψυχαγωγίας, καθώς
            και εξαιρετικά βραβεία και μια ισχυρή κοινότητα παικτών.
          </p>
        </div>
        <div class="about__item">
          <p class="about__text text">
            Όλα τα παιχνίδια στο καζίνο μας είναι δωρεάν και δεν απαιτούν καμία επένδυση, δεν μπορείτε να κερδίσετε
            πραγματικά χρήματα.
          </p>
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
  include 'footer.php';
?>
