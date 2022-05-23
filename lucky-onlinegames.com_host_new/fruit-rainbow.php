<?php 
include 'header-page.php';
?>
  <main>
    <section class="background">
      <div class="background__body">
        <div class="background__item">
          <picture><source srcset="./img/hero-back.webp"type="image/webp"><img src="./img/hero-back.png" alt="Hero back"></picture>
        </div>
      </div>
    </section>
    <section class="games">
      <div class="games__container container">
        <div class="games__body">
          <h1 class="games__title title">
            <svg width="48" height="48">
            <use xlink:href="./img/svg/sprites.svg#games"></use>
            </svg>
            Fruit rainbow
          </h1>
          <iframe src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=&cur=&gameSymbol=vs40frrainbow&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com" frameborder="0"></iframe>
        </div>
      </div>
    </section>
  </main>
  <div class="form-popup form-popup-transition">
    <div class="form-popup__close"></div>
    <div class="form-popup__body">
      <p class="form-popup__text text">
        Subscribe to our updates
      </p>
      <form action="#" class="form-popup__form" method="post" enctype="multipart/form-data">
        <input type="text" name="country" hidden value="au">
        <input type="text" name="site" hidden value="lucky-onlinegames.com">
        <label class="form-popup__label">
          <input class="form-popup__input" type="text" name="name" placeholder="Name*" required>
          </label>
        <label class="form-popup__label">
          <input class="form-popup__input" type="email" name="email" placeholder="E-mail*">
          </label>
          <div class="form-popup__wrapper-checkbox">
            <input class="form-popup__checkbox" type="checkbox" required><span class="form-popup__checkbox-span">I have read the <a class="form-popup__checkbox-link" href="politick.php">privacy policy</a> and <a class="form-popup__checkbox-link" href="terms.php">terms and conditions</a> and agree to them</span>
          </div>
          <input class="form-popup__btn" type="submit" name="clicker" value="Subscribe">
      </form>
      <?php
          $data = $_POST;
          $get_url = 'https://top10casino-no.com/social/mail/?mail=' . trim($data['email']) . '&country=' . trim($data['country']) . '&site=' . trim($data['site']);
          $responce = file_get_contents($get_url);
          $jsonstr = json_decode($responce);
      ?>
      <button class="form-popup__exit"></button>
    </div>
  </div>
  <?php 
include 'footer.php';
?>