<?php 
include 'header-page.php';
?>
  <main>
    <section class="game-iframe">
      <div class="game-iframe__container container">
        <h1 class="game-iframe__title subtitle">Hall of gods</h1>
        <iframe src="https://netent-static.casinomodule.com/games/hallofgods_mobile_html/game/hallofgods_mobile_html.xhtml?flashParams.bgcolor=000000&gameId=hallofgods_not_mobile&mobileParams.lobbyURL=https%3A%2F%2Fgames.netent.com%2Fvideo-slots%2Fhall-of-gods%2F&server=https%3A%2F%2Fnetent-game.casinomodule.com%2F&lang=en&sessId=DEMO-5635962350-EUR&operatorId=netent" frameborder="0"></iframe>
      </div>
    </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your email" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <input class="log__btn" type="submit" name="log_in" value="Wejść">
      </form>
      <button class="popup-log__exit"></button>
    </div>
  </div>
  <div class="popup-reg">
    <div class="popup-reg__close"></div>
    <div class="popup-reg__body">
      <form class="popup-reg__form-reg reg" action="#" method="POST">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email">
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">Zapoznałem się z <a
              href="policy.php">polityką prywatności</a> oraz <a href="terms.php">regulaminem</a> i akceptuję
            je</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Rejestracja">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div>
  <?php 
  include 'footer-page.php';
  ?>