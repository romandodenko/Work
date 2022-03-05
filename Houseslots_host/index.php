<?php 
  include 'header.php';
?>
  <section class="best">
      <div class="best__container container">
        <div class="best__wrapper">
          <div class="best__body">
            <h1 class="best__title">
              The best social <span>Online Casino</span>
            </h1>
            <a class="best__link" href="#">Play</a>
            <p class="best__text">
              Do you want to get away from the hustle and bustle of the world? So you are in the right place. Press play and have fun!
            </p>
          </div>
        </div>
      </div>
  </section>
  <section class="slots">
    <div class="slots__container container">
      <h2 class="slots__title">
        Top slots for week
      </h2>
      <a class="slots__link" href="slots.php">See more</a>
      <ul class="slots__list">
        <li class="slots__item" data-aos="fade-right">
          <h3 class="slots__subtitle">Vikings</h3>
          <a class="slots__play" href="#">Play</a>
          <picture><source srcset="./img/vikings.webp"type="image/webp"><img src="./img/vikings.jpg" alt="Vikings"></picture>
        </li>
        <li class="slots__item">
          <h3 class="slots__subtitle">Olymp</h3>
          <a class="slots__play" href="#">Play</a>
          <picture><source srcset="./img/olymp.webp"type="image/webp"><img src="./img/olymp.png" alt="Olymp"></picture>
        </li>
        <li class="slots__item" data-aos="fade-left">
          <h3 class="slots__subtitle">Rome</h3>
          <a class="slots__play" href="#">Play</a>
          <picture><source srcset="./img/rome.webp"type="image/webp"><img src="./img/rome.jpg" alt="Rome"></picture>
        </li>
      </ul>
      <h2 class="slots__title">
        The best slot
      </h2>
      <a class="slots__link" href="slots.php">See more</a>
      <ul class="slots__list">
        <li class="slots__item" data-aos="fade-right">
          <h3 class="slots__subtitle">Zeus</h3>
          <a class="slots__play" href="#">Play</a>
          <picture><source srcset="./img/zeus.webp"type="image/webp"><img src="./img/zeus.jpg" alt="Zeus"></picture>
        </li>
        <li class="slots__item">
          <h3 class="slots__subtitle">Monkey</h3>
          <a class="slots__play" href="#">Play</a>
          <picture><source srcset="./img/monkey.webp"type="image/webp"><img src="./img/monkey.png" alt="Monkey"></picture>
        </li>
        <li class="slots__item" data-aos="fade-left">
          <h3 class="slots__subtitle">Gladiator</h3>
          <a class="slots__play" href="#">Play</a>
          <picture><source srcset="./img/gladiator.webp"type="image/webp"><img src="./img/gladiator.png" alt="Gladiator"></picture>
        </li>
      </ul>
    </div>
  </section>
  <section class="news">
    <div class="news__container container">
      <h2 class="news__title">Last news</h2>
      <ul class="news__list">
        <li class="news__item" data-aos="fade-right">
          <div class="news__image">
            <picture><source srcset="./img/sports.webp"type="image/webp"><img src="./img/sports.png" alt="Sports"></picture>
          </div>
          <p class="news__text">
            We're happy to announce that sports games have been added recently! Hurry up and try them out!
          </p>
          <a class="news__link" href="#">See news</a>
        </li>
        <li class="news__item" data-aos="fade-left">
          <div class="news__image">
            <picture><source srcset="./img/social.webp"type="image/webp"><img src="./img/social.png" alt="Social network"></picture>
          </div>
          <p class="news__text">
            Social network Soclint loses huge investments due to scandal with investors
          </p>
          <a class="news__link" href="#">See news</a>
        </li>
      </ul>
    </div>
  </section>
  <?php 
    include 'footer.php';
  ?>