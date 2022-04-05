<?php if(isset($_SESSION['logged_user'])) : ?>

  

  <?php 
  include 'header-page-pl.php';
?>
  <main>
    <section class="hero-page">
      <div class="hero-page__container container">
        <div class="hero-page__wrapper-body">
          <div class="hero-page__body">
            <h1 class="hero__title">
              Witamy w najlepszym kasynie społecznościowym
              <span>Maxslots.fun</span>
            </h1>
            <div class="hero-page__wrapper-link">
              <a class="hero-page__link link" href="index.php#slots">Grać</a>
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
                  O nas
                </span>
              </h1>
            </div>
            <div class="about__right">
              <p class="about__text text">
                Witamy w Maxslots.fun - darmowym kasynie społecznościowym
              </p>
              <p class="about__text text">
                Nasza strona oferuje miłośnikom rozrywki w 100% DARMOWE gry, które nie wymagają inwestowania prawdziwych
                pieniędzy. Ten
                oznacza również, że nie można wygrać prawdziwych pieniędzy.
              </p>
              <p class="about__text text">
                Niezależnie od tego, czy lubisz najlepsze społecznościowe gry kasynowe, czy niesamowite darmowe gry na
                automatach, mamy coś dla Ciebie.
              </p>
              <p class="about__text text">
                Należy pamiętać, że w te gry nie można grać na prawdziwe pieniądze. Można w nie grać tylko o
                darmowe cele rozrywkowe!
              </p>
              <p class="about__text text">
                Życzymy powodzenia!
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
                  Korzyści
                </span>
              </h2>
            </div>
            <div class="about__right">
              <ol class="about__sublist">
                <li class="about__subitem">
                  Całkowicie darmowe gry
                </li>
                <li class="about__subitem">
                  Piękny design
                </li>
                <li class="about__subitem">
                  Responsywna strona internetowa
                </li>
                <li class="about__subitem">
                  Możliwość grania z dowolnego miejsca na świecie
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
        Utwórz swoje konto
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
          <input class="reg__btn" type="submit" name="sign_up" value="Utwórz swoje konto">
        </div>
      </form>
      <div class="reg__exit"></div>
      <div class="reg__already">
        <p class="reg__text">
          Posiadasz już konto?
        </p>
        <button class="reg__button sign-log">
          Zaloguj sie
        </button>
      </div>
    </div>
  </div>
  <div class="log-popup log">
    <div class="log__close"></div>
    <div class="log__wrapper-form">
      <h3 class="log__title">
        Zaloguj sie
      </h3>
      <form class="log__form" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your login" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="log__wrapper-btn">
          <input class="log__btn" type="submit" name="log_in" value="Zaloguj sie">
        </div>
      </form>
      <div class="log__exit"></div>
      <div class="log__already">
        <p class="log__text">
          Nie masz konta?
        </p>
        <button class="log__button log-sign">
          Zapisz się
        </button>
      </div>
    </div>
  </div>
  <div class="email-popup email email-poland">
    <div class="email__close"></div>
    <div class="email__wrapper-form">
      <h3 class="email__title">Subskrybuj aktualizacje</h3>
      <form action="mail.php" class="email__form poland-form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="admin_email[]" value="exigonyashka@yandex.ru">
        <input type="hidden" name="form_subject" value="Subskrybuj aktualizacje">
        <label class="email__label">
          <input class="email__input" type="text" name="name" placeholder="Imię*" required data-validate-field="name"
            id="name">
        </label>
        <label class="email__label"><input class="email__input" type="mail" name="email" placeholder="E-mail*" required
            data-validate-field="mail" data-validate-rules="mail" id="mail"></label>
       <div class="email__wrapper-button">
        <button class="email__btn" type="submit">Subskrybuj</button>
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
          <a class="pullout-menu__logo" href="index-poland.php">Maxslots <span>fun</span></a>
        </div>
           <div class="pullout-menu__account">
          <a class="pullout-menu__account-link link" href="profile-poland.php">Rachunek</a>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-poland.php">
              Dom
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="all-games-poland.php">
              Wszystkie gry
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-poland.php#slots">
              Wolne gniazda
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="blogs-poland.php">
              Kasyno społecznościowe
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="about-poland.php">
              O nas
            </a>
          </li>
        </ul>
        <div class="pullout-menu__wrapper-country">
          <div class="pullout-menu__country country">
            <button class="country__button" data-path="pullout-menu__country">
              <picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture>
              <span>Poland</span>
            </button>
            <ul class="country__list" data-target="pullout-menu__country">
              <li class="country__item">
                <a class="country__link" href="../en/index.php">
                  <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
                  <span>England</span>
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
            <a class="pullout-menu__link link terms" href="terms-poland.php">
              Regulamin
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link policy" href="private-policy-poland.php">
              Privacy policy
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link cockie" href="cockie-poland.php">
              Cookie policy
            </a>
          </li>
        </ul>
        <button class="pullout-menu__exit"></button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer-pl.php';
?>
  


<?php else : ?>
    
            
  <?php 
  include 'header-pl.php';
?>
  <main>
    <section class="hero-page">
      <div class="hero-page__container container">
        <div class="hero-page__wrapper-body">
          <div class="hero-page__body">
            <h1 class="hero__title">
              Witamy w najlepszym kasynie społecznościowym
              <span>Maxslots.fun</span>
            </h1>
            <div class="hero-page__wrapper-link">
              <a class="hero-page__link link" href="index.php#slots">Grać</a>
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
                  O nas
                </span>
              </h1>
            </div>
            <div class="about__right">
              <p class="about__text text">
                Witamy w Maxslots.fun - darmowym kasynie społecznościowym
              </p>
              <p class="about__text text">
                Nasza strona oferuje miłośnikom rozrywki w 100% DARMOWE gry, które nie wymagają inwestowania prawdziwych
                pieniędzy. Ten
                oznacza również, że nie można wygrać prawdziwych pieniędzy.
              </p>
              <p class="about__text text">
                Niezależnie od tego, czy lubisz najlepsze społecznościowe gry kasynowe, czy niesamowite darmowe gry na
                automatach, mamy coś dla Ciebie.
              </p>
              <p class="about__text text">
                Należy pamiętać, że w te gry nie można grać na prawdziwe pieniądze. Można w nie grać tylko o
                darmowe cele rozrywkowe!
              </p>
              <p class="about__text text">
                Życzymy powodzenia!
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
                  Korzyści
                </span>
              </h2>
            </div>
            <div class="about__right">
              <ol class="about__sublist">
                <li class="about__subitem">
                  Całkowicie darmowe gry
                </li>
                <li class="about__subitem">
                  Piękny design
                </li>
                <li class="about__subitem">
                  Responsywna strona internetowa
                </li>
                <li class="about__subitem">
                  Możliwość grania z dowolnego miejsca na świecie
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
        Utwórz swoje konto
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
          <input class="reg__btn" type="submit" name="sign_up" value="Utwórz swoje konto">
        </div>
      </form>
      <div class="reg__exit"></div>
      <div class="reg__already">
        <p class="reg__text">
          Posiadasz już konto?
        </p>
        <button class="reg__button sign-log">
          Zaloguj sie
        </button>
      </div>
    </div>
  </div>
  <div class="log-popup log">
    <div class="log__close"></div>
    <div class="log__wrapper-form">
      <h3 class="log__title">
        Zaloguj sie
      </h3>
      <form class="log__form" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your login" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="log__wrapper-btn">
          <input class="log__btn" type="submit" name="log_in" value="Zaloguj sie">
        </div>
      </form>
      <div class="log__exit"></div>
      <div class="log__already">
        <p class="log__text">
          Nie masz konta?
        </p>
        <button class="log__button log-sign">
          Zapisz się
        </button>
      </div>
    </div>
  </div>
  <div class="email-popup email email-poland">
    <div class="email__close"></div>
    <div class="email__wrapper-form">
      <h3 class="email__title">Subskrybuj aktualizacje</h3>
      <form action="mail.php" class="email__form poland-form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="admin_email[]" value="exigonyashka@yandex.ru">
        <input type="hidden" name="form_subject" value="Subskrybuj aktualizacje">
        <label class="email__label">
          <input class="email__input" type="text" name="name" placeholder="Imię*" required data-validate-field="name"
            id="name">
        </label>
        <label class="email__label"><input class="email__input" type="mail" name="email" placeholder="E-mail*" required
            data-validate-field="mail" data-validate-rules="mail" id="mail"></label>
       <div class="email__wrapper-button">
        <button class="email__btn" type="submit">Subskrybuj</button>
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
          <a class="pullout-menu__logo" href="index-poland.php">Maxslots <span>fun</span></a>
        </div>
        <div class="pullout-menu__buttons">
          <button class="pullout-menu__sign">
            Zapisz się
          </button>
          <button class="pullout-menu__log">
            Zaloguj sie
          </button>
        </div>
        <ul class="pullout-menu__list">
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-poland.php">
              Dom
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="all-games-poland.php">
              Wszystkie gry
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="index-poland.php#slots">
              Wolne gniazda
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="blogs-poland.php">
              Kasyno społecznościowe
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link" href="about-poland.php">
              O nas
            </a>
          </li>
        </ul>
        <div class="pullout-menu__wrapper-country">
          <div class="pullout-menu__country country">
            <button class="country__button" data-path="pullout-menu__country">
              <picture><source srcset="./img/pol.webp"type="image/webp"><img src="./img/pol.png" alt="Poland"></picture>
              <span>Poland</span>
            </button>
            <ul class="country__list" data-target="pullout-menu__country">
              <li class="country__item">
                <a class="country__link" href="../en/index.php">
                  <picture><source srcset="./img/eng.webp"type="image/webp"><img src="./img/eng.png" alt="England"></picture>
                  <span>England</span>
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
            <a class="pullout-menu__link link terms" href="terms-poland.php">
              Regulamin
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link policy" href="private-policy-poland.php">
              Privacy policy
            </a>
          </li>
          <li class="pullout-menu__item">
            <a class="pullout-menu__link link cockie" href="cockie-poland.php">
              Cookie policy
            </a>
          </li>
        </ul>
        <button class="pullout-menu__exit"></button>
      </div>
    </div>
  </div>
  <?php 
  include 'footer-pl.php';
?>



<?php endif; ?>