<?php 
  include 'header.php';
?>
  <main>
    <section class="game">
      <div class="game__container container">
          <h2 class="game__title subtitle">
            Alle Spiele
          </h2>
          <ul class="game__list d-flex flex-wrap align-items-center justify-content-center">
            <li class="game__item">
              <div class="game__top goldenox">
                <h2 class="game__name-game game-name">
                  GoldenOx
                </h2>
                <a class="game__link-hidden" href="goldenox-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="goldenox.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="goldenox-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top gates-of-olympus">
                <h2 class="game__name-game game-name">
                  Gates of Olympus
                </h2>
                <a class="game__link-hidden" href="gates-of-olympus-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="gates-of-olympus.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="gates-of-olympus-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top ancients-blessing">
                <h2 class="game__name-game game-name">
                  Ancients blessing
                </h2>
                <a class="game__link-hidden" href="ancients-blessing-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="ancients-blessing.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="ancients-blessing-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top stacked">
                <h2 class="game__name-game game-name">
                  Stacked
                </h2>
                <a class="game__link-hidden" href="stacked-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="stacked.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="stacked-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top sinbad">
                <h2 class="game__name-game game-name">
                  Sinbad
                </h2>
                <a class="game__link-hidden" href="sinbad-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="sinbad.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="sinbad-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top shimmering-woods">
                <h2 class="game__name-game game-name">
                  Shimmering woods
                </h2>
                <a class="game__link-hidden" href="shimmering-woods-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="shimmering-woods.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="shimmering-woods-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top take-olympus">
                <h2 class="game__name-game game-name">
                  Take Olympus
                </h2>
                <a class="game__link-hidden" href="take-olympus-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="take-olympus.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="take-olympus-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top dragon-kingdom">
                <h2 class="game__name-game game-name">
                  Dragon Kingdom Eyes of Fire
                </h2>
                <a class="game__link-hidden" href="dragon-kingdom-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="dragon-kingdom.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="dragon-kingdom-play.php">
                  Spiel
                </a>
              </div>
            </li>
            <li class="game__item">
              <div class="game__top eye-storm">
                <h2 class="game__name-game game-name">
                  Eye of the Storm
                </h2>
                <a class="game__link-hidden" href="eye-storm-play.php"></a>
              </div>
              <div class="game__links">
                <a class="game__link about-link" href="eye-storm.php">
                  Über Spiel
                </a>
                <a class="game__link game-play" href="eye-storm-play.php">
                  Spiel
                </a>
              </div>
            </li>
          </ul>
        </div>
    </section>
  </main>
  <!-- <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your e-mail" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <input class="log__btn" type="submit" name="log_in" value="Genehmigung">
      </form>
      <button class="popup-log__exit"></button>
    </div>
  </div>
  <div class="popup-reg">
    <div class="popup-reg__close"></div>
    <div class="popup-reg__body">
      <form class="popup-reg__form-reg reg" action="#" method="POST">
        <input type="text" name="country" hidden value="de">
        <input type="text" name="site" hidden value="frost-luckygames.com">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email">
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">Ich habe gelesen <a
              href="policy.php">Datenschutz-Bestimmungen</a> und <a href="terms.php">Geschäftsbedingungen</a> und
            ich akzeptiere sie</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Anmeldung">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div> -->
  <div class="popup">
    <div class="popup__body">
      <div class="popup__text">
      Guten Tag! Unsere Website verwendet <a href="cockie.php">Cookies</a>.
      </div>
      <div class="popup__btns">
        <button class="popup__btns-accept">
          Akzeptieren
        </button>
        <button class="popup__btns-clos">
          Schließen
        </button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer.php';
?>