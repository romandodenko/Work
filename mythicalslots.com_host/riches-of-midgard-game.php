<?php 
include 'header-page.php';
?>
<main>
  <section class="game-iframe">
    <div class="game-iframe__container container">
      <h1 class="game-iframe__title subtitle">Riches of midgard</h1>
      <iframe
        src="https://gigb2cswe-static.casinomodule.com/games/richesofmidgard-client/game/richesofmidgard-client.xhtml?gameId=richesofmidgard_f1_not_mobile_sw&flashParams.wmode=opaque&server=https%3A%2F%2Fgigb2cswe-game.casinomodule.com%2F&lang=en&sessId=DEMO-c5f8b024440b46448ffe&operatorId=rizk&statisticEndpointURL=https://gcl.netentcdn.com/gcs/reportData&logsId=a7629e3d-7507-4df9-a225-b3ef4a50fa03&loadStarted=1607121105173&giOperatorConfig=%7B%22gameId%22%3A%22richesofmidgard_f1_not_mobile_sw%22%2C%22staticServer%22%3A%22https%3A%2F%2Fgigb2cswe-static.casinomodule.com%2F%22%2C%22targetElement%22%3A%22netentgame%22%2C%22width%22%3A1493%2C%22height%22%3A840%2C%22flashParams%22%3A%7B%22wmode%22%3A%22opaque%22%7D%2C%22server%22%3A%22https%3A%2F%2Fgigb2cswe-game.casinomodule.com%2F%22%2C%22lang%22%3A%22sv%22%2C%22sessId%22%3A%22DEMO-c5f8b024440b4644XXXX%22%2C%22operatorId%22%3A%22rizk%22%7D&casinourl=https://rizk.com&loadSeqNo=0"
        frameborder="0"></iframe>
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