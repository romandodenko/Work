<?php 
  include 'header.php';
?>

  <main>
    <section class="block-hero">
      <div class="block-hero__container container">
        <div class="block-hero__body">
          <h1 class="block-hero__title title">
            Lucky-wolf <span class="block-hero__span">Social casino</span>
          </h1>
          <div class="block-hero__wrapper-link">
            <a class="block-hero__link hero-l link-anchor" href="#game">Play now</a>
          </div>
        </div>
      </div>
    </section>
    <section class="block-games" id="game">
      <div class="block-games__container container">
        <h2 class="block-games__title subtitle">
          Our <span>games</span>
        </h2>
        <ul class="block-games__list">
          <li class="block-games__item">
            <div class="block-games__image">
              <picture><source srcset="./img/wolf-moon-rising.webp"type="image/webp"><img src="./img/wolf-moon-rising.png" alt="Wolf-moon-rising"></picture>
            </div>
              <div class="block-games__links">
                <a class="block-games__link game-p" href="wolf-moon-rising-play.php">Play</a>
                <a class="block-games__link game-a" href="wolf-moon-rising-about.php">Read more</a>
              </div>            
          </li>
          <li class="block-games__item">
            <div class="block-games__image">
              <picture><source srcset="./img/wolfs-bane.webp"type="image/webp"><img src="./img/wolfs-bane.png" alt="Wolfs-bane"></picture>
            </div>
              <div class="block-games__links">
                <a class="block-games__link game-p" href="wolfs-bane-play.php">Play</a>
                <a class="block-games__link game-a" href="wolfs-bane-about.php">Read more</a>
              </div>            
          </li>
          <li class="block-games__item">
            <div class="block-games__image">
              <picture><source srcset="./img/coywolfs-cash.webp"type="image/webp"><img src="./img/coywolfs-cash.png" alt="Coywolfs-cash"></picture>
            </div>
              <div class="block-games__links">
                <a class="block-games__link game-p" href="coywolfs-cash-play.php">Play</a>
                <a class="block-games__link game-a" href="coywolfs-cash-about.php">Read more</a>
              </div>            
          </li>
          <li class="block-games__item">
            <div class="block-games__image">
              <picture><source srcset="./img/curse-werewolf.webp"type="image/webp"><img src="./img/curse-werewolf.png" alt="Curse-werewolf"></picture>
            </div>
              <div class="block-games__links">
                <a class="block-games__link game-p" href="curse-werewolf-play.php">Play</a>
                <a class="block-games__link game-a" href="curse-werewolf-about.php">Read more</a>
              </div>            
          </li>
        </ul>
      </div>
    </section>
    <section class="block-about" id="about">
      <div class="block-about__container container">
        <h2 class="block-about__title subtitle">
          About <span>lucky-wolf </span>
        </h2>
        <div class="block-about__bottom">
          <p class="block-about__text text">
            Each of our exciting slots gives you a chance to hit a progressive jackpot and win thousands of lucky-wolf  Coins — take them for a spin today!
Our exclusive lucky-wolf  Coins are up for grabs every
day. Play-for-fun your favorite online soial casino games more on your desktop or mobile device at anytime and anywhere. Lucky-wolf is a brand new social lottery casino that provides players with free casino entertainment. With our lottery model, you can win free coins that can be used in all the games in our library. Winnings cannot be withdrawn, nor can you get big winnings. Try your luck in our exciting games and get a chance to exchange your winnings for real cash prizes!
          </p>
          <div class="block-about__image">
              <picture>
              <source media="(min-width: 601px)" srcset="./img/avout.webp" type="image/webp">
              <source media="(max-width: 600px)" srcset="./img/avout_320.png" type="image/png">
              <source media="(max-width: 600px)" srcset="./img/avout_320.webp" type="image/webp">
              <img src="./img/avout.png" alt="About">
              </picture>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>
