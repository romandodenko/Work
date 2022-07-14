<?php 
  include 'header.php';
?>
  <main>
    <section class="nav nav_terms">
      <div class="nav__container container">
        <ul class="nav__list">
          <li class="nav__item">
            <a class="nav__link" href="main-page.php">
              Main page
            </a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="main-page.php#slot">
              Games
            </a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="main-page.php#about">
              About Us
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="slot-play">
      <div class="slot-play__container container">
        <h1 class="slot-play__title">
          Vegas Night Life
        </h1>
        <div class="slot-play__iframe">
          <iframe src="https://affgambler.ru/wp-content/plugins/sid-slots/ssframe.php?game_id=vegasnightlife_not_mobile" frameborder="0"></iframe>
        </div>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>