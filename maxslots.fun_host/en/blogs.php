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
    <section class="blog">
      <div class="blog__container container">
        <h2 class="blog__title title">
          Blog
        </h2>
        <ul class="blog__list">
          <li class="blog__item">
            <div class="blog__image">
              <picture><source srcset="./img/blog-img-one.webp"type="image/webp"><img src="./img/blog-img-one.jpg" alt="Blog"></picture>
            </div>
            <div class="blog__descr">
              <h3 class="blog__subtitle subtitle">
                Social slot machines
              </h3>
              <p class="blog__text text">
                Would you like to play some social slots and social casino games online to have fun with people around
                the world and your friends? If so, here's what you need to know:
                Social Casino Games - Social Slots
                Those with any knowledge of the casino industry are well aware that slots are the gold mine of this
                sector, bringing in about 80% of all gaming revenue. Why is that? Well, they're games that are simple to
                play, require no skill and can yield big winnings.
              </p>

              <p class="blog__text text">
                Recently, however, reel spinners have also become a super-popular option for social casino games. This
                means that you can enjoy their gameplay without spending your money, having fun with your friends or
                other users around the world. This gaming option has been around for quite some time, but it has gained
                more popularity with the invention of social media and mobile apps. Our website invites you to try
                playing for free and without having to register.
              </p>
              <p class="blog__text text">
                Social Slots. Today, you can play different kinds of slots from the comfort of your own home. Use our
                website to do so. Games that mimic physical machines. However, they use slightly different mathematical
                models that provide a higher level of customer satisfaction, as winning combos are formed on their reels
                more often than in real-money games. So don't consider the achievement in social casino games as much as
                in real money casinos.
              </p>
            </div>
          </li>
          <li class="blog__item">
            <div class="blog__image">
              <picture><source srcset="./img/blog-img-two.webp"type="image/webp"><img src="./img/blog-img-two.jpg" alt="Blog"></picture>
            </div>
            <div class="blog__descr">
              <h3 class="blog__subtitle subtitle">
                Online social casino gaming tournaments
              </h3>
              <p class="blog__text text">
                An online slot machine tournament is what it sounds like, a competitive event for playing digital drum spinners. The host chooses one or more games to play and as soon as a fixed number of players join, the competition begins. Each player gets the same number of free credits, which they must use within the allotted time. In the end, the person who sits at the top of the scoreboard with the most credit wins claims the top prize.
              </p>

              <p class="blog__text text">
                There are two main types of these tournaments. These are free-roll and buy-in. The former requires no entry fee, while you'll need to shell out a few dollars to enter the latter. Naturally, buy-in tournaments usually bring better rewards. Remember that if a contest has the phrase sit-and-go, it means it's an open seat contest that accepts a limited number of players. Once all positions are filled, the competition begins.
              </p>
              <p class="blog__text text">
                Social Online casinos include game races as the equivalent of social game tournaments. They entail a competition in which the player with the most betting funds within a set time limit wins the top prize. They also include leaderboards and consolation awards.
              </p>
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
            <a class="pullout-menu__link link pullout-link" href="#slots">
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
        <button class="pullout-menu__exit"></button>
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
    <section class="blog">
      <div class="blog__container container">
        <h2 class="blog__title title">
          Blog
        </h2>
        <ul class="blog__list">
          <li class="blog__item">
            <div class="blog__image">
              <picture><source srcset="./img/blog-img-one.webp"type="image/webp"><img src="./img/blog-img-one.jpg" alt="Blog"></picture>
            </div>
            <div class="blog__descr">
              <h3 class="blog__subtitle subtitle">
                Social slot machines
              </h3>
              <p class="blog__text text">
                Would you like to play some social slots and social casino games online to have fun with people around
                the world and your friends? If so, here's what you need to know:
                Social Casino Games - Social Slots
                Those with any knowledge of the casino industry are well aware that slots are the gold mine of this
                sector, bringing in about 80% of all gaming revenue. Why is that? Well, they're games that are simple to
                play, require no skill and can yield big winnings.
              </p>

              <p class="blog__text text">
                Recently, however, reel spinners have also become a super-popular option for social casino games. This
                means that you can enjoy their gameplay without spending your money, having fun with your friends or
                other users around the world. This gaming option has been around for quite some time, but it has gained
                more popularity with the invention of social media and mobile apps. Our website invites you to try
                playing for free and without having to register.
              </p>
              <p class="blog__text text">
                Social Slots. Today, you can play different kinds of slots from the comfort of your own home. Use our
                website to do so. Games that mimic physical machines. However, they use slightly different mathematical
                models that provide a higher level of customer satisfaction, as winning combos are formed on their reels
                more often than in real-money games. So don't consider the achievement in social casino games as much as
                in real money casinos.
              </p>
            </div>
          </li>
          <li class="blog__item">
            <div class="blog__image">
              <picture><source srcset="./img/blog-img-two.webp"type="image/webp"><img src="./img/blog-img-two.jpg" alt="Blog"></picture>
            </div>
            <div class="blog__descr">
              <h3 class="blog__subtitle subtitle">
                Online social casino gaming tournaments
              </h3>
              <p class="blog__text text">
                An online slot machine tournament is what it sounds like, a competitive event for playing digital drum spinners. The host chooses one or more games to play and as soon as a fixed number of players join, the competition begins. Each player gets the same number of free credits, which they must use within the allotted time. In the end, the person who sits at the top of the scoreboard with the most credit wins claims the top prize.
              </p>

              <p class="blog__text text">
                There are two main types of these tournaments. These are free-roll and buy-in. The former requires no entry fee, while you'll need to shell out a few dollars to enter the latter. Naturally, buy-in tournaments usually bring better rewards. Remember that if a contest has the phrase sit-and-go, it means it's an open seat contest that accepts a limited number of players. Once all positions are filled, the competition begins.
              </p>
              <p class="blog__text text">
                Social Online casinos include game races as the equivalent of social game tournaments. They entail a competition in which the player with the most betting funds within a set time limit wins the top prize. They also include leaderboards and consolation awards.
              </p>
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
            <a class="pullout-menu__link link pullout-link" href="#slots">
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
        <button class="pullout-menu__exit"></button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer-en.php';
?>


<?php endif; ?>