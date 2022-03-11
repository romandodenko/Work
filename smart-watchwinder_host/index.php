<?php 
include 'header.php';
?>
<main>
    <section class="about">
      <div class="about__container container">
        <h1 class="about__title">Reden wir ein wenig über uns</h1>
        <p class="about__text">Unser soziales Casino ist völlig kostenlos, Sie müssen sich nicht registrieren, um zu spielen. Unser Social Casino kann sowohl als Training, als auch zum Spaß und zur Entspannung genutzt werden!</p>
        <div class="about__image">
          <picture><source srcset="./img/gamer.webp"type="image/webp"><img src="./img/gamer.png" alt="Gamer"></picture>
        </div>
      </div>
    </section>
    <section class="game">
      <div class="game__container container">
        <h2 class="game__title">Unsere Spiele</h2>
        <div class="game__swiper game-swiper swiper">
          <ul class="game-swiper__wrapper swiper-wrapper">
            <li class="game-swiper__slide swiper-slide">
              <div class="game__fructs">
                <h3 class="game__subtitle">Klassisches Spiel</h3>
                <p class="game__text">Glaubst du, du hast Glück? Dann komm und erlebe es!</p>
                <div class="game__image">
                  <picture><source srcset="./img/fructs.webp"type="image/webp"><img src="./img/fructs.png" alt="Fructs"></picture>
                  <a class="game__link" href="./game-1/index.html">Anklicken um abzuspielen!</a>
                </div>
              </div>
            </li>
            <li class="game-swiper__slide swiper-slide">
              <div class="game__cosmos">
                <h3 class="game__subtitle">Weltraumausflug</h3>
                <p class="game__text">Reise durchs Weltall und suche nach Schätzen, Hauptsache nicht von Piraten erwischt!</p>
                <div class="game__image">
                  <picture><source srcset="./img/cosmo.webp"type="image/webp"><img src="./img/cosmo.png" alt="Cosmo"></picture>
                  <a class="game__link" href="./game-2/index.html">Anklicken um abzuspielen!</a>
                </div>
              </div>
            </li>
          </ul>
          <button class="game-swiper__prev">←</button>
          <button class="game-swiper__next">→</button>
        </div>
      </div>
    </section>
    <section class="prem">
      <div class="prem__container container">
        <div class="prem__grid">
          <h2 class="prem__title">Unsere vorteile</h2>
          <div class="prem__item item-l"><p class="prem__text">Gratis spiele</p></div>
          <div class="prem__item item-t"><p class="prem__text">Fähigkeit, ohne registrierung zu spielen</p></div>
          <div class="prem__item item-r"><p class="prem__text">Keine chance, geld zu verlieren</p></div>
          <div class="prem__item item-b"><p class="prem__text">Responsive website</p></div>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="news__container container">
        <h2 class="news__title">
          Neuigkeiten
        </h2>
        <p class="news__text">Wenn Sie müde sind, machen Sie eine Pause, lesen Sie die Nachrichten :)</p>
        <ul class="news__list">
          <li class="news__item">
            <h3 class="news__subtitle">Wir haben für Sie ein Portal mit unseren besten Spielen geöffnet</h3>
            <ul class="news__sublist">
              <li class="news__subitem">
                <h4 class="news__namegame">Klassisches Spiel</h4>
                <p class="news__descr">Versuchen Sie Ihr Glück, drehen Sie drei Früchte und gewinnen Sie! Drehen und gewinnen!</p>
              </li>
              <li class="news__subitem">
                <h4 class="news__namegame">Weltraumausflug</h4>
                <p class="news__descr">Reisen, erobern und erkunden Sie den Weltraum!</p>
              </li>
            </ul>
          </li>
          <li class="news__item">
            <h3 class="news__subtitle">Turnier</h3>
            <p class="news__descr">Wir geben die Eröffnung des Turniers bald bekannt! Das Turnier wird spannend und sehr interessant. Möchten Sie teilnehmen? Warten Sie auf Informationen!</p>
          </li>
        </ul>
      </div>
    </section>
    <section class="faq">
      <div class="faq__container container">
        <h2 class="faq__title">Fragen & Antworten</h2>
        <ul data-spollers data-one-spoller class="faq__accordion">
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Ich habe nicht genug Spiele, wann kommt der Nachschub?</button>
            <p class="faq__text">
              Wir arbeiten jeden Tag an unserem Sortiment, lassen uns gute Spiele einfallen und entwickeln sie dann weiter. Wenn die Entwicklung abgeschlossen ist, laden Sie sie auf die Website hoch!
            </p>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Wie kann ich ein Passwort wiederherstellen?</button>
            <p class="faq__text">
              Senden Sie uns eine E-Mail: germ@support.com . Geben Sie Ihren Benutzernamen und Ihre E-Mail-Adresse an, wir helfen Ihnen!
            </p>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Kann ich die Seite auf Mobilgeräten nutzen?</button>
            <p class="faq__text">
              Ja, unsere Website ist perfekt für Mobil- und Tablet-Geräte geeignet.
            </p>
          </li>
          <li class="faq__item">
            <button tabindex="-1" type="button" data-spoller class="faq__btn">Ist es möglich, bei Spielen auf Ihrer Website echtes Geld zu verlieren?</button>
            <p class="faq__text">
              Nein, unser soziales Casino ist völlig kostenlos. Und es wurde geschaffen, um eine gute Zeit zu haben und sich zu entspannen.
            </p>
          </li>
        </ul>
      </div>
    </section>
</main>
<?php 
include 'footer.php';
?>