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
              <a class="hero-page__link link" href="index-poland.php#slots">Grać</a>
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
                Automaty społecznościowe
              </h3>
              <p class="blog__text text">
                Czy chciałbyś zagrać w automaty społecznościowe i społecznościowe gry kasynowe online, aby dobrze się bawić z ludźmi z całego świata i swoimi przyjaciółmi? Jeśli tak, oto, co musisz wiedzieć:
                Gry towarzyskie w kasynie - Automaty towarzyskie
                Osoby znające branżę kasyn doskonale wiedzą, że automaty do gry są kopalnią złota w tym sektorze, przynosząc około 80% wszystkich przychodów z gier. Dlaczego tak jest? Cóż, są to gry, w które łatwo się gra, nie wymagają umiejętności, a mogą przynieść duże wygrane.
              </p>
              <p class="blog__text text">
                Ostatnio jednak spinnery stały się również bardzo popularną opcją w grach w kasynach społecznościowych. Oznacza to, że możesz cieszyć się ich rozgrywką bez wydawania pieniędzy, bawiąc się z przyjaciółmi lub innymi użytkownikami z całego świata. Ten rodzaj gier jest dostępny już od dłuższego czasu, ale zyskał na popularności wraz z pojawieniem się mediów społecznościowych i aplikacji mobilnych. Nasza strona internetowa zaprasza do wypróbowania gry za darmo i bez konieczności rejestracji.
              </p>
              <p class="blog__text text">
                Social Slots. Obecnie można grać w różne rodzaje automatów do gry w zaciszu własnego domu. W tym celu należy skorzystać z naszej strony internetowej. Gry naśladujące maszyny fizyczne. Wykorzystują one jednak nieco inne modele matematyczne, które zapewniają większą satysfakcję klientów, ponieważ na ich bębnach częściej niż w grach na prawdziwe pieniądze tworzą się zwycięskie kombinacje. Nie należy więc traktować osiągnięć w grach towarzyskich tak samo jak w kasynach na prawdziwe pieniądze.
              </p>
            </div>
          </li>
          <li class="blog__item">
            <div class="blog__image">
              <picture><source srcset="./img/blog-img-two.webp"type="image/webp"><img src="./img/blog-img-two.jpg" alt="Blog"></picture>
            </div>
            <div class="blog__descr">
              <h3 class="blog__subtitle subtitle">
                Turnieje gier towarzyskich w kasynie online
              </h3>
              <p class="blog__text text">
                Turniej automatów do gier online jest tym, na co wygląda - konkurencyjnym wydarzeniem polegającym na grze na cyfrowych bębnach. Gospodarz wybiera jedną lub więcej gier do rozegrania, a gdy tylko dołączy do nich określona liczba graczy, rozpoczyna się rywalizacja. Każdy gracz otrzymuje taką samą liczbę darmowych kredytów, które musi wykorzystać w wyznaczonym czasie. Na koniec osoba, która usiądzie na szczycie tabeli wyników z największą liczbą punktów, otrzymuje nagrodę główną.
              </p>
              <p class="blog__text text">
                Istnieją dwa główne rodzaje takich turniejów. Są to free-roll i buy-in. W pierwszym przypadku nie trzeba wnosić opłaty startowej, natomiast w drugim trzeba wyłożyć kilka dolarów. Oczywiście, turnieje z wpisowym przynoszą zwykle najlepsze nagrody. Pamiętaj, że jeśli w konkursie występuje wyrażenie sit-and-go, oznacza to, że jest to konkurs z otwartymi miejscami, w którym może wziąć udział ograniczona liczba graczy. Gdy wszystkie stanowiska zostaną obsadzone, rozpoczyna się konkurs.
              </p>
              <p class="blog__text text">
                Społecznościowe kasyna online zawierają wyścigi gier jako odpowiednik turniejów gier społecznościowych. Polegają one na rywalizacji, w której gracz z największą liczbą postawionych zakładów w określonym czasie wygrywa nagrodę główną. Obejmują one również tablice rankingowe i nagrody pocieszenia.
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
              <a class="hero-page__link link" href="index-poland.php#slots">Grać</a>
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
                Automaty społecznościowe
              </h3>
              <p class="blog__text text">
                Czy chciałbyś zagrać w automaty społecznościowe i społecznościowe gry kasynowe online, aby dobrze się bawić z ludźmi z całego świata i swoimi przyjaciółmi? Jeśli tak, oto, co musisz wiedzieć:
                Gry towarzyskie w kasynie - Automaty towarzyskie
                Osoby znające branżę kasyn doskonale wiedzą, że automaty do gry są kopalnią złota w tym sektorze, przynosząc około 80% wszystkich przychodów z gier. Dlaczego tak jest? Cóż, są to gry, w które łatwo się gra, nie wymagają umiejętności, a mogą przynieść duże wygrane.
              </p>
              <p class="blog__text text">
                Ostatnio jednak spinnery stały się również bardzo popularną opcją w grach w kasynach społecznościowych. Oznacza to, że możesz cieszyć się ich rozgrywką bez wydawania pieniędzy, bawiąc się z przyjaciółmi lub innymi użytkownikami z całego świata. Ten rodzaj gier jest dostępny już od dłuższego czasu, ale zyskał na popularności wraz z pojawieniem się mediów społecznościowych i aplikacji mobilnych. Nasza strona internetowa zaprasza do wypróbowania gry za darmo i bez konieczności rejestracji.
              </p>
              <p class="blog__text text">
                Social Slots. Obecnie można grać w różne rodzaje automatów do gry w zaciszu własnego domu. W tym celu należy skorzystać z naszej strony internetowej. Gry naśladujące maszyny fizyczne. Wykorzystują one jednak nieco inne modele matematyczne, które zapewniają większą satysfakcję klientów, ponieważ na ich bębnach częściej niż w grach na prawdziwe pieniądze tworzą się zwycięskie kombinacje. Nie należy więc traktować osiągnięć w grach towarzyskich tak samo jak w kasynach na prawdziwe pieniądze.
              </p>
            </div>
          </li>
          <li class="blog__item">
            <div class="blog__image">
              <picture><source srcset="./img/blog-img-two.webp"type="image/webp"><img src="./img/blog-img-two.jpg" alt="Blog"></picture>
            </div>
            <div class="blog__descr">
              <h3 class="blog__subtitle subtitle">
                Turnieje gier towarzyskich w kasynie online
              </h3>
              <p class="blog__text text">
                Turniej automatów do gier online jest tym, na co wygląda - konkurencyjnym wydarzeniem polegającym na grze na cyfrowych bębnach. Gospodarz wybiera jedną lub więcej gier do rozegrania, a gdy tylko dołączy do nich określona liczba graczy, rozpoczyna się rywalizacja. Każdy gracz otrzymuje taką samą liczbę darmowych kredytów, które musi wykorzystać w wyznaczonym czasie. Na koniec osoba, która usiądzie na szczycie tabeli wyników z największą liczbą punktów, otrzymuje nagrodę główną.
              </p>
              <p class="blog__text text">
                Istnieją dwa główne rodzaje takich turniejów. Są to free-roll i buy-in. W pierwszym przypadku nie trzeba wnosić opłaty startowej, natomiast w drugim trzeba wyłożyć kilka dolarów. Oczywiście, turnieje z wpisowym przynoszą zwykle najlepsze nagrody. Pamiętaj, że jeśli w konkursie występuje wyrażenie sit-and-go, oznacza to, że jest to konkurs z otwartymi miejscami, w którym może wziąć udział ograniczona liczba graczy. Gdy wszystkie stanowiska zostaną obsadzone, rozpoczyna się konkurs.
              </p>
              <p class="blog__text text">
                Społecznościowe kasyna online zawierają wyścigi gier jako odpowiednik turniejów gier społecznościowych. Polegają one na rywalizacji, w której gracz z największą liczbą postawionych zakładów w określonym czasie wygrywa nagrodę główną. Obejmują one również tablice rankingowe i nagrody pocieszenia.
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