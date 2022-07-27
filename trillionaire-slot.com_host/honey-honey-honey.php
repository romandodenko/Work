<?php 
  include 'header.php';
?>
    <main>
      <section class="navigation navigation_politicks">
        <div class="navigation__container container">
          <div class="navigation__content">
            <ul class="navigation__list">
              <li class="navigation__item">
                <a class="navigation__link" href="index.php">
                  <span class="navigation__icon">
                    <img src="./img/icons/home.png" alt="Icon">
                  </span>
                  Pääsivu
                </a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php#games">
                  <span class="navigation__icon">
                    <img src="./img/icons/game.png" alt="Icon">
                  </span>
                  Pelit
                </a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php#about">
                  <span class="navigation__icon">
                    <img src="./img/icons/man.png" alt="Icon">
                  </span>
                  Meistä
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="play">
        <div class="play__container container">
          <h1 class="play__title">
            Honey Honey Honey
          </h1>
          <div class="play__iframe">
            <iframe
              src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs20honey&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com"
              frameborder="0"></iframe>
          </div>
        </div>
      </section>
    </main>
    <?php 
    include 'footer.php';
  ?>