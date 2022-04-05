<?php if(isset($_SESSION['logged_user'])) : ?>


  
  <?php 
  include 'header-page-en.php';
?>
  <main>
    <section class="hero-page">
      <div class="hero-page__container container">
        <div class="hero-page__wrapper-body">
          <div class="hero-page__body">
            <h1 class="hero__title">
              Welcome to the best social casino
              <span>Maxslots.fun</span>
            </h1>
            <div class="hero-page__wrapper-link">
              <a class="hero-page__link link" href="index.php#slots">Play</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="about__container container">
        <ul class="about__list">
          <li class="about__item">
            <div class="about__left">
              <h1 class="about__title title">
                <span class="about__circle">
                  <svg width="97" height="97">
                    <use xlink:href="./img/svg/sprites.svg#about-icon"></use>
                  </svg>
                </span>
                <span class="about__title-text">
                  About us
                </span>
              </h1>
            </div>
            <div class="about__right">
              <p class="about__text text">
                Welcome to Maxslots.fun - free social casino
              </p>
              <p class="about__text text">
                Our site offers entertainment lovers 100% FREE games that do not require real money investment. This
                also means that real money cannot be won.
              </p>
              <p class="about__text text">
                Whether you love the best social casino games or amazing free slots games, we have something for you.
              </p>
              <p class="about__text text">
                Please be aware that these games are not meant to be played for real money. They can only be played for
                free entertainment purposes!
              </p>
              <p class="about__text text">
                We wish you good luck!
              </p>
            </div>
          </li>
          <li class="about__item">
            <div class="about__left">
              <h2 class="about__title title">
               <span class="about__circle">
                <svg width="91" height="90">
                  <use xlink:href="./img/svg/sprites.svg#benefits"></use>
                </svg>
               </span>
               <span class="about__title-text">
                Benefits
               </span>
              </h2>
            </div>
            <div class="about__right">
              <ol class="about__sublist">
                <li class="about__subitem">
                    Completely free games
                </li>
                <li class="about__subitem">
                    Beautiful design
                </li>
                <li class="about__subitem">
                    Responsive website
                </li>
                <li class="about__subitem">
                    Ability to play from anywhere in the world
                </li>
              </ol>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <div class="email-popup email email-england">
    <div class="email__close"></div>
    <div class="email__wrapper-form">
      <h3 class="email__title">Subscribe to updates</h3>
      <form action="mail.php" class="email__form england-form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="admin_email[]" value="exigonyashka@yandex.ru">
        <input type="hidden" name="form_subject" value="Subscribe to updates">
        <label class="email__label">
          <input class="email__input" type="text" name="name" placeholder="Name*" required data-validate-field="name"
            id="name">
        </label>
        <label class="email__label"><input class="email__input" type="mail" name="email" placeholder="E-mail*" required
            data-validate-field="mail" data-validate-rules="mail" id="mail"></label>
       <div class="email__wrapper-button">
        <button class="email__btn" type="submit">Subscribe</button>
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
          <a class="pullout-menu__logo" href="index.php">Maxslots <span>fun</span></a>
        </div>
      <div class="pullout-menu__account">
          <a class="pullout-menu__account-link link" href="profile.php">Account</a>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index.php">
              Home
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="all-games.php">
              All games
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index.php#slots">
              Free slots
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="blogs.php">
              Social casino
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="about.php">
              About us
            </a>
          </li>
        </ul>
        <div class="pullout-menu__wrapper-country">
          <div class="pullout-menu__country country">
            <button class="country__button" data-path="pullout-menu__country">
              <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
              <span>English</span>
            </button>
            <ul class="country__list" data-target="pullout-menu__country">
              <li class="country__item">
                <a class="country__link" href="../pl/index-poland.php">
                  <picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture>
                  <span>Poland</span>
                </a>
              </li>
              <li class="country__item">
                <a class="country__link" href="../de/index-germany.php">
                  <picture><source srcset="./img/ger.webp"type="image/webp"><img src="./img/ger.png" alt="Germany"></picture>
                  <span>Germany</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link terms" href="terms.php">
              Terms and conditions
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link policy" href="private-policy.php">
              Privacy policy
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link cockie" href="cockie.php">
              Cookie policy
            </a>
          </li>
        </ul>
        <button class="pullout-menu__exit">

        </button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer-en.php';
?>
     <?php else : ?>
      <?php 
  include 'header-en.php';
?>
  <main>
    <section class="hero-page">
      <div class="hero-page__container container">
        <div class="hero-page__wrapper-body">
          <div class="hero-page__body">
            <h1 class="hero__title">
              Welcome to the best social casino
              <span>Maxslots.fun</span>
            </h1>
            <div class="hero-page__wrapper-link">
              <a class="hero-page__link link" href="index.php#slots">Play</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="about__container container">
        <ul class="about__list">
          <li class="about__item">
            <div class="about__left">
              <h1 class="about__title title">
                <span class="about__circle">
                  <svg width="97" height="97">
                    <use xlink:href="./img/svg/sprites.svg#about-icon"></use>
                  </svg>
                </span>
                <span class="about__title-text">
                  About us
                </span>
              </h1>
            </div>
            <div class="about__right">
              <p class="about__text text">
                Welcome to Maxslots.fun - free social casino
              </p>
              <p class="about__text text">
                Our site offers entertainment lovers 100% FREE games that do not require real money investment. This
                also means that real money cannot be won.
              </p>
              <p class="about__text text">
                Whether you love the best social casino games or amazing free slots games, we have something for you.
              </p>
              <p class="about__text text">
                Please be aware that these games are not meant to be played for real money. They can only be played for
                free entertainment purposes!
              </p>
              <p class="about__text text">
                We wish you good luck!
              </p>
            </div>
          </li>
          <li class="about__item">
            <div class="about__left">
              <h2 class="about__title title">
               <span class="about__circle">
                <svg width="91" height="90">
                  <use xlink:href="./img/svg/sprites.svg#benefits"></use>
                </svg>
               </span>
               <span class="about__title-text">
                Benefits
               </span>
              </h2>
            </div>
            <div class="about__right">
              <ol class="about__sublist">
                <li class="about__subitem">
                    Completely free games
                </li>
                <li class="about__subitem">
                    Beautiful design
                </li>
                <li class="about__subitem">
                    Responsive website
                </li>
                <li class="about__subitem">
                    Ability to play from anywhere in the world
                </li>
              </ol>
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
        Create your account
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
          <input class="reg__btn" type="submit" name="sign_up" value="Create your account">
        </div>
      </form>
      <div class="reg__exit"></div>
      <div class="reg__already">
        <p class="reg__text">
          Already have an account?
        </p>
        <button class="reg__button sign-log">
          Log in
        </button>
      </div>
    </div>
  </div>
  <div class="log-popup log">
    <div class="log__close"></div>
    <div class="log__wrapper-form">
      <h3 class="log__title">
        Log in
      </h3>
      <form class="log__form" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your login" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="log__wrapper-btn">
          <input class="log__btn" type="submit" name="log_in" value="Log in">
        </div>
      </form>
      <div class="log__exit"></div>
      <div class="log__already">
        <p class="log__text">
          Don't have an account?
        </p>
        <button class="log__button log-sign">
          Sign up
        </button>
      </div>
    </div>
  </div>
  <div class="email-popup email email-england">
    <div class="email__close"></div>
    <div class="email__wrapper-form">
      <h3 class="email__title">Subscribe to updates</h3>
      <form action="mail.php" class="email__form england-form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="admin_email[]" value="exigonyashka@yandex.ru">
        <input type="hidden" name="form_subject" value="Subscribe to updates">
        <label class="email__label">
          <input class="email__input" type="text" name="name" placeholder="Name*" required data-validate-field="name"
            id="name">
        </label>
        <label class="email__label"><input class="email__input" type="mail" name="email" placeholder="E-mail*" required
            data-validate-field="mail" data-validate-rules="mail" id="mail"></label>
       <div class="email__wrapper-button">
        <button class="email__btn" type="submit">Subscribe</button>
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
          <a class="pullout-menu__logo" href="index.php">Maxslots <span>fun</span></a>
        </div>
        <div class="pullout-menu__buttons">
          <button class="pullout-menu__sign">
            Sign up
          </button>
          <button class="pullout-menu__log">
            Log in
          </button>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index.php">
              Home
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="all-games.php">
              All games
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index.php#slots">
              Free slots
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="blogs.php">
              Social casino
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="about.php">
              About us
            </a>
          </li>
        </ul>
        <div class="pullout-menu__wrapper-country">
          <div class="pullout-menu__country country">
            <button class="country__button" data-path="pullout-menu__country">
              <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
              <span>English</span>
            </button>
            <ul class="country__list" data-target="pullout-menu__country">
              <li class="country__item">
                <a class="country__link" href="../pl/index-poland.php">
                  <picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture>
                  <span>Poland</span>
                </a>
              </li>
              <li class="country__item">
                <a class="country__link" href="../de/index-germany.php">
                  <picture><source srcset="./img/ger.webp"type="image/webp"><img src="./img/ger.png" alt="Germany"></picture>
                  <span>Germany</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link terms" href="terms.php">
              Terms and conditions
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link policy" href="private-policy.php">
              Privacy policy
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link cockie" href="cockie.php">
              Cookie policy
            </a>
          </li>
        </ul>
        <button class="pullout-menu__exit">

        </button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer-en.php';
?>
 <?php endif; ?>
