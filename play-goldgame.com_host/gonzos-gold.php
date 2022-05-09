<?php 
 include 'header-page.php';
?>
  <main>
    <section class="game-solo">
      <div class="game-solo__container container">
        <h2 class="game-solo__title subtitle">
          Gonzo's gold
        </h2>
        <div class="game-solo__wrapper-iframe">
          <iframe src="https://netent-static.casinomodule.com/games/gonzosgold-client/game/gonzosgold-client.xhtml?launchType=iframe&iframeSandbox=allow-scripts%20allow-popups%20allow-popups-to-escape-sandbox%20allow-top-navigation%20allow-top-navigation-by-user-activation%20allow-same-origin%20allow-forms%20allow-pointer-lock&applicationType=browser&gameId=gonzosgold_not_mobile&server=https%3A%2F%2Fnetent-game.casinomodule.com%2F&lang=en&sessId=DEMO-6494182736-EUR&operatorId=netent&statisticEndpointURL=https://gcl-int.netentcdn.com/gcs/reportData&logsId=beb8b828-dda4-4dac-afb5-a8e29527f618&loadStarted=1634197533375&giOperatorConfig=%7B%22staticServer%22%3A%22https%3A%2F%2Fnetent-static.casinomodule.com%2F%22%2C%22targetElement%22%3A%22netentgame%22%2C%22launchType%22%3A%22iframe%22%2C%22iframeSandbox%22%3A%22allow-scripts%20allow-popups%20allow-popups-to-escape-sandbox%20allow-top-navigation%20allow-top-navigation-by-user-activation%20allow-same-origin%20allow-forms%20allow-pointer-lock%22%2C%22applicationType%22%3A%22browser%22%2C%22gameId%22%3A%22gonzosgold_not_mobile%22%2C%22server%22%3A%22https%3A%2F%2Fnetent-game.casinomodule.com%2F%22%2C%22lang%22%3A%22en%22%2C%22sessId%22%3A%22DEMO-6494182736XXXX%22%2C%22operatorId%22%3A%22netent%22%7D&casinourl=https://games.netent.com&loadSeqNo=0" frameborder="0"></iframe>
        </div>
      </div>
    </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your e-mail" name="email" required>
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password" required>
        </div>
        <input class="log__btn" type="submit" name="log_in" value="Engedélyezés">
      </form>
      <button class="popup-log__exit"></button>
    </div>
  </div>
  <div class="popup-reg">
    <div class="popup-reg__close"></div>
    <div class="popup-reg__body">
      <form class="popup-reg__form-reg reg" action="#" method="POST">
      <input type="text" name="country" hidden value="hu">
			<input type="text" name="site" hidden value="play-goldgame.com">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email" required>
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password" required>
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">ismerkedtem meg <a
              href="policy.html">adatvédelmi irányelvek</a> és <a href="terms.html">felhasználási feltételek</a> és elfogadom
              van</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Bejegyzés">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div>
  <?php 
  include 'footer-page.php';
?>