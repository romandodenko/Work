<?php 
include 'header-page.php';
?>
  <main>
      <section class="game-play">
          <div class="game-play__container container">
            <h1 class="game-play__title title">
              Lei it slide
            </h1>
            <div class="game-play__wrapper-iframe">
              <iframe src="https://staticdemo.yggdrasilgaming.com/init/launchClient.html?gameid=10024&lang=en&currency=EUR&org=Demo&key=&fullscreen=yes" frameborder="0"></iframe>
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