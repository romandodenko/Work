<?php 
include 'header-page.php';
?>
  <main>
    <section class="game-iframe">
      <div class="game-iframe__container container">
        <h1 class="game-iframe__title subtitle">Parthenon quest for immortality</h1>
        <iframe src="https://leovegas-static.casinomodule.com/games/parthenon-client/game/parthenon-client.xhtml?gameId=parthenon_not_mobile_sw&disableDeviceDetection=true&flashParams.allowFullScreen=false&server=https%3A%2F%2Fleovegas-game.casinomodule.com%2F&lang=en&sessId=DEMO-48726754-GBP&operatorId=mrgreen&statisticEndpointURL=https://gcl.netentcdn.com/gcs/reportData&logsId=6f93c8c0-fa2b-4a95-9072-82071314969d&loadStarted=1600336782238&giOperatorConfig=%7B%22gameId%22%3A%22divinemegaways_not_mobile_sw%22%2C%22staticServer%22%3A%22https%3A%2F%2Fmrgreen-static.casinomodule.com%2F%22%2C%22disableDeviceDetection%22%3Atrue%2C%22height%22%3A%22100%25%22%2C%22width%22%3A%22100%25%22%2C%22targetElement%22%3A%22game-wrapper%22%2C%22enforceRatio%22%3Afalse%2C%22flashParams%22%3A%7B%22allowFullScreen%22%3Afalse%7D%2C%22server%22%3A%22https%3A%2F%2Fmrgreen-game.casinomodule.com%2F%22%2C%22lang%22%3A%22en%22%2C%22sessId%22%3A%22DEMO-48726754-GBP%22%2C%22operatorId%22%3A%22mrgreen%22%7D&casinourl=https://leovegas.com&url=https://www.bigwinboard.com" frameborder="0"></iframe>
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