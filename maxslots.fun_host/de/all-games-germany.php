<?php if(isset($_SESSION['logged_user'])) : ?>

  

  <?php 
include 'header-page-de.php';
?>
  <main>
    <section class="hero-page">
      <div class="hero-page__container container">
        <div class="hero-page__wrapper-body">
          <div class="hero-page__body">
            <h1 class="hero__title">
              Willkommen im besten sozialen Casino
              <span>Maxslots.fun</span>
            </h1>
            <div class="hero-page__wrapper-link">
              <a class="hero-page__link link" href="index-germany.php#slots">Spiel</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="game">
      <div class="game__container container">
        <h2 class="game__title title">
          Freie Plätze
        </h2>
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <a href="./egypt-germany/index.html">
                <picture><source srcset="./img/egypt-img.webp"type="image/webp"><img src="./img/egypt-img.jpg" alt="Egypt"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Ägypten - der Stern des Ostens
              </h3>
             <div class="game__wrapper-link">
              <a class="game__link link" href="./egypt-germany/index.html">Spiel</a>
             </div>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="./rome-germany/index.html">
                <picture><source srcset="./img/rome-img.webp"type="image/webp"><img src="./img/rome-img.jpg" alt="Rome"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Rom, Stadt der Götter
              </h3>
              <div class="game__wrapper-link">
                <a class="game__link link" href="./rome-germany/index.html">Spiel</a>
              </div>
            </div>
          </li>
        </ul>
        <h2 class="game__title title">
          Reichtum
        </h2>
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <a href="./egypt-fortune-germany/index.html">
                <picture><source srcset="./img/egypt-fortune.webp"type="image/webp"><img src="./img/egypt-fortune.jpg" alt="Egypt"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Ägypten
              </h3>
             <div class="game__wrapper-link">
              <a class="game__link link" href="./egypt-fortune-germany/index.html">Spiel</a>
             </div>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="./rome-fortune-germany/index.html">
                <picture><source srcset="./img/rome-fortune.webp"type="image/webp"><img src="./img/rome-fortune.jpg" alt="Rome"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Rom
              </h3>
              <div class="game__wrapper-link">
                <a class="game__link link" href="./rome-fortune-germany/index.html">Spiel</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <div class="reg-popup reg">
    <div class="reg__close"></div>
    <div class="reg__wrapper-form">
      <h3 class="reg__title">
        Erstelle deinen account 
      </h3>
      <form class="reg__form" action="#" method="POST">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email">
          <input class="reg__input" type="text" placeholder="Login" name="login">
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password">
          <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
        </div>
        <div class="reg__wrapper-btn">
          <input class="reg__btn" type="submit" name="sign_up" value="Erstelle deinen account">
        </div>
      </form>
      <div class="reg__exit"></div>
      <div class="reg__already">
        <p class="reg__text">
          Sie haben bereits ein konto?
        </p>
        <button class="reg__button sign-log">
          Einloggen
        </button>
      </div>
    </div>
  </div>
  <div class="log-popup log">
    <div class="log__close"></div>
    <div class="log__wrapper-form">
      <h3 class="log__title">
        Einloggen
      </h3>
      <form class="log__form" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your login" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="log__wrapper-btn">
          <input class="log__btn" type="submit" name="log_in" value="Einloggen">
        </div>
      </form>
      <div class="log__exit"></div>
      <div class="log__already">
        <p class="log__text">
          Sie haben kein konto?
        </p>
        <button class="log__button log-sign">
          Anmelden
        </button>
      </div>
    </div>
  </div>
  <div class="email-popup email email-germany">
    <div class="email__close"></div>
    <div class="email__wrapper-form">
      <h3 class="email__title">Abonnieren Sie Updates</h3>
      <form action="mail.php" class="email__form germany-form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="admin_email[]" value="exigonyashka@yandex.ru">
        <input type="hidden" name="form_subject" value="Abonnieren Sie Updates">
        <label class="email__label">
          <input class="email__input" type="text" name="name" placeholder="Name*" required data-validate-field="name"
            id="name">
        </label>
        <label class="email__label"><input class="email__input" type="mail" name="email" placeholder="E-mail*" required
            data-validate-field="mail" data-validate-rules="mail" id="mail"></label>
       <div class="email__wrapper-button">
        <button class="email__btn" type="submit">Abonnieren</button>
       </div>
      </form>
      <div class="email__exit"></div>
    </div>
  </div>
  <div class="pullout-menu">
    <div class="pullout-menu__close"></div>
    <div class="pullout-menu__wrapper-body">
      <div class="pullout-menu__body">
        <div class="pullout-menu__wrapper-logo">
          <a class="pullout-menu__logo" href="index-germany.php">Maxslots <span>fun</span></a>
        </div>
          <div class="pullout-menu__account">
          <a class="pullout-menu__account-link link" href="profile-germany.php">Konto</a>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-germany.php">
              Zuhause
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="all-games-germany.php">
              Alle spiele
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-germany.php#slots">
              Freie plätze
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="blogs-germany.php">
              Soziales casino
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="about-germany.php">
              Über uns
            </a>
          </li>
        </ul>
        <div class="pullout-menu__wrapper-country">
          <div class="pullout-menu__country country">
            <button class="country__button" data-path="pullout-menu__country">
              <picture><source srcset="./img/ger.webp"type="image/webp"><img src="./img/ger.png" alt="Germany"></picture>
              <span>Germany</span>
            </button>
            <ul class="country__list" data-target="pullout-menu__country">
              <li class="country__item">
                <a class="country__link" href="../pl/index-poland.php">
                  <picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture>
                  <span>Poland</span>
                </a>
              </li>
              <li class="country__item">
                <a class="country__link" href="../en/index.php">
                  <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
                  <span>England</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link terms" href="terms-germany.php">
              Geschäftsbedingungen
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link policy" href="private-policy-germany.php">
              Datenschutz-bestimmungen
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link cockie" href="cockie-germany.php">
              Cookie-richtlinie
            </a>
          </li>
        </ul>
        <button class="pullout-menu__exit"></button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer-de.php';
  ?>



  
<?php else : ?>




  <?php 
include 'header-page-de.php';
?>
  <main>
    <section class="hero-page">
      <div class="hero-page__container container">
        <div class="hero-page__wrapper-body">
          <div class="hero-page__body">
            <h1 class="hero__title">
              Willkommen im besten sozialen Casino
              <span>Maxslots.fun</span>
            </h1>
            <div class="hero-page__wrapper-link">
              <a class="hero-page__link link" href="index-germany.php#slots">Spiel</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="game">
      <div class="game__container container">
        <h2 class="game__title title">
          Freie Plätze
        </h2>
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <a href="./egypt-germany/index.html">
                <picture><source srcset="./img/egypt-img.webp"type="image/webp"><img src="./img/egypt-img.jpg" alt="Egypt"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Ägypten - der Stern des Ostens
              </h3>
             <div class="game__wrapper-link">
              <a class="game__link link" href="./egypt-germany/index.html">Spiel</a>
             </div>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="./rome-germany/index.html">
                <picture><source srcset="./img/rome-img.webp"type="image/webp"><img src="./img/rome-img.jpg" alt="Rome"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Rom, Stadt der Götter
              </h3>
              <div class="game__wrapper-link">
                <a class="game__link link" href="./rome-germany/index.html">Spiel</a>
              </div>
            </div>
          </li>
        </ul>
        <h2 class="game__title title">
          Reichtum
        </h2>
        <ul class="game__list">
          <li class="game__item">
            <div class="game__image">
              <a href="./egypt-fortune-germany/index.html">
                <picture><source srcset="./img/egypt-fortune.webp"type="image/webp"><img src="./img/egypt-fortune.jpg" alt="Egypt"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Ägypten
              </h3>
             <div class="game__wrapper-link">
              <a class="game__link link" href="./egypt-fortune-germany/index.html">Spiel</a>
             </div>
            </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="./rome-fortune-germany/index.html">
                <picture><source srcset="./img/rome-fortune.webp"type="image/webp"><img src="./img/rome-fortune.jpg" alt="Rome"></picture>
              </a>
            </div>
            <div class="game__descr">
              <h3 class="game__subtitle subtitle">
                Rom
              </h3>
              <div class="game__wrapper-link">
                <a class="game__link link" href="./rome-fortune-germany/index.html">Spiel</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <div class="reg-popup reg">
    <div class="reg__close"></div>
    <div class="reg__wrapper-form">
      <h3 class="reg__title">
        Erstelle deinen account 
      </h3>
      <form class="reg__form" action="#" method="POST">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email">
          <input class="reg__input" type="text" placeholder="Login" name="login">
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password">
          <input class="reg__input" type="password" placeholder="Your password again" name="password_2">
        </div>
        <div class="reg__wrapper-btn">
          <input class="reg__btn" type="submit" name="sign_up" value="Erstelle deinen account">
        </div>
      </form>
      <div class="reg__exit"></div>
      <div class="reg__already">
        <p class="reg__text">
          Sie haben bereits ein konto?
        </p>
        <button class="reg__button sign-log">
          Einloggen
        </button>
      </div>
    </div>
  </div>
  <div class="log-popup log">
    <div class="log__close"></div>
    <div class="log__wrapper-form">
      <h3 class="log__title">
        Einloggen
      </h3>
      <form class="log__form" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your login" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="log__wrapper-btn">
          <input class="log__btn" type="submit" name="log_in" value="Einloggen">
        </div>
      </form>
      <div class="log__exit"></div>
      <div class="log__already">
        <p class="log__text">
          Sie haben kein konto?
        </p>
        <button class="log__button log-sign">
          Anmelden
        </button>
      </div>
    </div>
  </div>
  <div class="email-popup email email-germany">
    <div class="email__close"></div>
    <div class="email__wrapper-form">
      <h3 class="email__title">Abonnieren Sie Updates</h3>
      <form action="mail.php" class="email__form germany-form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="admin_email[]" value="exigonyashka@yandex.ru">
        <input type="hidden" name="form_subject" value="Abonnieren Sie Updates">
        <label class="email__label">
          <input class="email__input" type="text" name="name" placeholder="Name*" required data-validate-field="name"
            id="name">
        </label>
        <label class="email__label"><input class="email__input" type="mail" name="email" placeholder="E-mail*" required
            data-validate-field="mail" data-validate-rules="mail" id="mail"></label>
       <div class="email__wrapper-button">
        <button class="email__btn" type="submit">Abonnieren</button>
       </div>
      </form>
      <div class="email__exit"></div>
    </div>
  </div>
  <div class="pullout-menu">
    <div class="pullout-menu__close"></div>
    <div class="pullout-menu__wrapper-body">
      <div class="pullout-menu__body">
        <div class="pullout-menu__wrapper-logo">
          <a class="pullout-menu__logo" href="index-germany.php">Maxslots <span>fun</span></a>
        </div>
        <div class="pullout-menu__buttons">
          <button class="pullout-menu__sign">
            Anmelden
          </button>
          <button class="pullout-menu__log">
            Einloggen
          </button>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-germany.php">
              Zuhause
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="all-games-germany.php">
              Alle spiele
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-germany.php#slots">
              Freie plätze
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="blogs-germany.php">
              Soziales casino
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="about-germany.php">
              Über uns
            </a>
          </li>
        </ul>
        <div class="pullout-menu__wrapper-country">
          <div class="pullout-menu__country country">
            <button class="country__button" data-path="pullout-menu__country">
              <picture><source srcset="./img/ger.webp"type="image/webp"><img src="./img/ger.png" alt="Germany"></picture>
              <span>Germany</span>
            </button>
            <ul class="country__list" data-target="pullout-menu__country">
              <li class="country__item">
                <a class="country__link" href="../pl/index-poland.php">
                  <picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture>
                  <span>Poland</span>
                </a>
              </li>
              <li class="country__item">
                <a class="country__link" href="../en/index.php">
                  <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
                  <span>England</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link terms" href="terms-germany.php">
              Geschäftsbedingungen
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link policy" href="private-policy-germany.php">
              Datenschutz-bestimmungen
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link cockie" href="cockie-germany.php">
              Cookie-richtlinie
            </a>
          </li>
        </ul>
        <button class="pullout-menu__exit"></button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer-de.php';
  ?>



<?php endif; ?>