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
    <section class="pol-cockie">
      <div class="pol-cockie__container container">
        <h1 class="title">Cookie Policy for maxslots.fun</h1>

        <p class="text">This is the Cookie Policy for maxslots.fun, accessible from maxslots.fun</p>

        <h2 class="subtitle"><strong>What Are Cookies</strong></h2>

        <p class="text">As is common practice with almost all professional websites this site uses cookies, which are tiny files that
          are downloaded to your computer, to improve your experience. This page describes what information they gather,
          how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these
          cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.
        </p>

        <h2 class="subtitle"><strong>How We Use Cookies</strong></h2>

        <p class="text">We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry
          standard options for disabling cookies without completely disabling the functionality and features they add to
          this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in
          case they are used to provide a service that you use.</p>

        <h2 class="subtitle"><strong>Disabling Cookies</strong></h2>

        <p class="text">You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for
          how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites
          that you visit. Disabling cookies will usually result in also disabling certain functionality and features of
          the this site. Therefore it is recommended that you do not disable cookies.</p>

        <h2 class="subtitle"><strong>The Cookies We Set</strong></h2>

        <ul>

          <li>
            <p>Account related cookies</p>
            <p>If you create an account with us then we will use cookies for the management of the signup process and
              general administration. These cookies will usually be deleted when you log out however in some cases they
              may remain afterwards to remember your site preferences when logged out.</p>
          </li>

          <li>
            <p>Login related cookies</p>
            <p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having to
              log in every single time you visit a new page. These cookies are typically removed or cleared when you log
              out to ensure that you can only access restricted features and areas when logged in.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Third Party Cookies</strong></h2>

        <p class="text">In some special cases we also use cookies provided by trusted third parties. The following section details
          which third party cookies you might encounter through this site.</p>

        <ul>
          <li>
            <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the
              web for helping us to understand how you use the site and ways that we can improve your experience. These
              cookies may track things such as how long you spend on the site and the pages that you visit so we can
              continue to produce engaging content.</p>
            <p>For more information on Google Analytics cookies, see the official Google Analytics page.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>More Information</strong></h2>

        <p class="text">Hopefully that has clarified things for you and as was previously mentioned if there is something that you
          aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact with
          one of the features you use on our site.</p>

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
    <section class="pol-cockie">
      <div class="pol-cockie__container container">
        <h1 class="title">Cookie Policy for maxslots.fun</h1>

        <p class="text">This is the Cookie Policy for maxslots.fun, accessible from maxslots.fun</p>

        <h2 class="subtitle"><strong>What Are Cookies</strong></h2>

        <p class="text">As is common practice with almost all professional websites this site uses cookies, which are tiny files that
          are downloaded to your computer, to improve your experience. This page describes what information they gather,
          how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these
          cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.
        </p>

        <h2 class="subtitle"><strong>How We Use Cookies</strong></h2>

        <p class="text">We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry
          standard options for disabling cookies without completely disabling the functionality and features they add to
          this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in
          case they are used to provide a service that you use.</p>

        <h2 class="subtitle"><strong>Disabling Cookies</strong></h2>

        <p class="text">You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for
          how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites
          that you visit. Disabling cookies will usually result in also disabling certain functionality and features of
          the this site. Therefore it is recommended that you do not disable cookies.</p>

        <h2 class="subtitle"><strong>The Cookies We Set</strong></h2>

        <ul>

          <li>
            <p>Account related cookies</p>
            <p>If you create an account with us then we will use cookies for the management of the signup process and
              general administration. These cookies will usually be deleted when you log out however in some cases they
              may remain afterwards to remember your site preferences when logged out.</p>
          </li>

          <li>
            <p>Login related cookies</p>
            <p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having to
              log in every single time you visit a new page. These cookies are typically removed or cleared when you log
              out to ensure that you can only access restricted features and areas when logged in.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Third Party Cookies</strong></h2>

        <p class="text">In some special cases we also use cookies provided by trusted third parties. The following section details
          which third party cookies you might encounter through this site.</p>

        <ul>
          <li>
            <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the
              web for helping us to understand how you use the site and ways that we can improve your experience. These
              cookies may track things such as how long you spend on the site and the pages that you visit so we can
              continue to produce engaging content.</p>
            <p>For more information on Google Analytics cookies, see the official Google Analytics page.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>More Information</strong></h2>

        <p class="text">Hopefully that has clarified things for you and as was previously mentioned if there is something that you
          aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact with
          one of the features you use on our site.</p>

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
