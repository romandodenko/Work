<?php 
  include 'header.php';
?>
<main>
  <section class="hero">
    <picture><source srcset="./img/hero-img.webp"type="image/webp"><img src="./img/hero-img.png" alt="Hero"></picture>
    <div class="hero__container container">
      <h1 class="hero__title title">
        Willkommen in unserem sozialen Casino!
      </h1>
      <div class="hero__wrapper-link">
        <a class="hero__link link link-anchor" href="#games">Abspielen</a>
      </div>
      <p class="hero__text text">
        Zum Spielen ist keine Anmeldung erforderlich. Sie brauchen kein echtes Geld, um zu spielen, kommen Sie einfach und spielen Sie!
      </p>
    </div>
  </section>
  <section class="about">
    <div class="about__container container">
      <h2 class="about__title title">
        Über uns
      </h2>
      <p class="about__text text">
        Willkommen bei Pursuit of clarity - Free Social Casino
      </p>
      <p class="about__text text">
        Unsere Website bietet Unterhaltungsliebhabern 100% KOSTENLOSE Spiele, bei denen Sie kein echtes Geld ausgeben müssen. Das bedeutet auch, dass dabei kein echtes Geld gewonnen werden kann.
      </p>
      <p class="about__text text">
        Egal, ob Sie die besten Social-Casino-Spiele oder fantastische kostenlose Spielautomaten lieben, wir haben etwas für Sie zum Spielen.
      </p>
      <p class="about__text text">
        Denken Sie daran, dass diese Spiele nicht dazu gedacht sind, mit echtem Geld gespielt zu werden. Sie können nur zu kostenlosen Unterhaltungszwecken gespielt werden!
      </p>
      <p class="about__text text">
        Wir wünschen Ihnen viel Glück!
      </p>
    </div>
  </section>
  <section class="games" id="games">
    <div class="games__container container">
      <h2 class="games__title title">
        Unsere spiele
      </h2>
      <ul class="games__list">
        <li class="games__item">
          <div class="games__image">
            <a href="./spartans/index.html">
              <picture><source srcset="./img/spartans.webp"type="image/webp"><img src="./img/spartans.png" alt="Spartans"></picture>
            </a>
          </div>
          <div class="games__descr">
            <h3 class="games__subtitle">
              Spartans
            </h3>
            <a class="games__link" href="./spartans/index.html">Abspielen</a>
          </div>
        </li>
        <li class="games__item">
          <div class="games__image">
            <a href="./lustige-spielzeuge/index.html">
              <picture><source srcset="./img/lustige-spielzeuge.webp"type="image/webp"><img src="./img/lustige-spielzeuge.png" alt="Lustige spielzeuge"></picture>
            </a>
          </div>
          <div class="games__descr">
            <h3 class="games__subtitle">
              Lustige spielzeuge
            </h3>
            <a class="games__link" href="./lustige-spielzeuge/index.html">Abspielen</a>
          </div>
        </li>
        <li class="games__item">
          <div class="games__image">
            <a href="./das-dunkle-schloss/index.html">
              <picture><source srcset="./img/das-dunkle-schloss.webp"type="image/webp"><img src="./img/das-dunkle-schloss.png" alt="Das dunkle schloss"></picture>
            </a>
          </div>
          <div class="games__descr">
            <h3 class="games__subtitle">
              Das dunkle schloss
            </h3>
            <a class="games__link" href="./das-dunkle-schloss/index.html">Abspielen</a>
          </div>
        </li>
        <li class="games__item">
          <div class="games__image">
            <a href="./lang-ersehnter-urlaub/index.html">
              <picture><source srcset="./img/lang-ersehnter-urlaub.webp"type="image/webp"><img src="./img/lang-ersehnter-urlaub.png" alt="Lang ersehnter urlaub"></picture>
            </a>
          </div>
          <div class="games__descr">
            <h3 class="games__subtitle">
              Lang ersehnter urlaub
            </h3>
            <a class="games__link" href="./lang-ersehnter-urlaub/index.html">Abspielen</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php 
  include 'footer.php';
?>