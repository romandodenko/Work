<?php 
  include 'header.php';
?>
  <main>
    <section class="gm-ab">
      <div class="gm-ab__container container">
        <div class="row">
          <div class="gm-ab__body d-flex flex-column flex-lg-row">
            <div class="gm-ab__image">
              <picture>
              <source media="(min-width: 601px)" srcset="./img/shimmering-woods-sg.webp" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/shimmering-wods_320.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/shimmering-wods_320.webp" type="image/webp">
              <img src="./img/shimmering-woods-sg.png" alt="Shimmering woods">
              </picture>
            </div>
            <div class="gm-ab__descr">
              <h1 class="gm-ab__title subtitle">
                Shimmering woods
              </h1>
              <p class="gm-ab__text">
                Shimmering Woods ist ein entspannender Spielautomat. Der Besuch eines unerklärlichen Waldes war noch nie so gewaltig, also ziehen Sie Ihre Wanderschuhe an. Online-Slots bereichern das Spiel mit spannenden Bonusrunden.
              </p>
              <div class="gm-ab__wrapper-link">
                <a class="gm-ab__link game-play" href="shimmering-woods-play.php">Spiel</a>
              </div>
            </div>
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
  </div>
  <div class="popup">
    <div class="popup__body">
      <div class="popup__text">
        Guten Tag! Unsere Website verwendet Cookies.
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