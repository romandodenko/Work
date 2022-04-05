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
    <section class="pol-cockie">
      <div class="pol-cockie__container container">
        <h1 class="title">Zasady dotyczące plików cookie dla maxslots.fun</h1>

        <p class="text">To jest polityka dotycząca plików cookie dla maxslots.fun, dostępna z maxslots.fun</p>

        <h2 class="subtitle"><strong>Co to są pliki cookie</strong></h2>

        <p class="text">Jak to jest powszechną praktyką w przypadku prawie wszystkich profesjonalnych witryn
          internetowych, ta witryna używa plików cookie, które są małymi plikami, które
          są pobierane na Twój komputer, aby poprawić Twoje wrażenia. Ta strona opisuje, jakie informacje gromadzą,
          w jaki sposób z nich korzystamy i dlaczego czasami musimy przechowywać te pliki cookie. Podzielimy się również
          tym, jak możesz temu zapobiec
          przechowywanie plików cookie, jednak może to obniżyć lub „zakłócić” niektóre elementy funkcjonalności witryny.
        </p>

        <h2 class="subtitle"><strong>Jak używamy plików cookie</strong></h2>

        <p class="text">Korzystamy z plików cookie z różnych powodów wyszczególnionych poniżej. Niestety w większości
          przypadków nie ma branży
          standardowe opcje wyłączania plików cookies bez całkowitego wyłączania funkcjonalności i funkcji, do których
          one dodają
          ta strona. Zaleca się pozostawienie wszystkich plików cookie, jeśli nie masz pewności, czy ich potrzebujesz,
          czy nie
          przypadku, gdy są one wykorzystywane do świadczenia usług, z których korzystasz.</p>

        <h2 class="subtitle"><strong>Wyłączanie plików cookie</strong></h2>

        <p class="text">Możesz zapobiec ustawianiu plików cookie, dostosowując ustawienia w przeglądarce (patrz Pomoc
          przeglądarki, aby uzyskać
          jak to zrobić). Pamiętaj, że wyłączenie plików cookie wpłynie na funkcjonalność tej i wielu innych stron
          internetowych
          które odwiedzasz. Wyłączenie plików cookie zwykle powoduje również wyłączenie niektórych funkcji i funkcji
          na tej stronie. Dlatego zaleca się, aby nie wyłączać plików cookie.</p>

        <h2 class="subtitle"><strong>Ustawiane przez nas pliki cookie</strong></h2>

        <ul>

          <li>
            <p>Pliki cookie związane z kontem</p>
            <p>Jeśli utworzysz u nas konto, użyjemy plików cookie do zarządzania procesem rejestracji i
              administracja ogólna. Te pliki cookie są zwykle usuwane po wylogowaniu, jednak w niektórych przypadkach
              może pozostać później, aby zapamiętać preferencje witryny po wylogowaniu.</p>
          </li>

          <li>
            <p>Pliki cookie związane z logowaniem</p>
            <p>Używamy plików cookie, gdy jesteś zalogowany, abyśmy mogli zapamiętać ten fakt. Zapobiega to konieczności
              loguj się za każdym razem, gdy odwiedzasz nową stronę. Te pliki cookie są zazwyczaj usuwane lub usuwane
              podczas logowania
              aby zapewnić dostęp do ograniczonych funkcji i obszarów tylko po zalogowaniu.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Pliki cookie stron trzecich</strong></h2>

        <p class="text">W niektórych szczególnych przypadkach używamy również plików cookie dostarczanych przez zaufane
          strony trzecie. Poniższa sekcja szczegóły
          jakie pliki cookie stron trzecich możesz napotkać za pośrednictwem tej witryny.</p>

        <ul>
          <li>
            <p>Ta witryna korzysta z usługi Google Analytics, która jest jednym z najbardziej rozpowszechnionych i
              zaufanych rozwiązań analitycznych w
              web, aby pomóc nam zrozumieć, w jaki sposób korzystasz z witryny i jak możemy poprawić Twoje wrażenia. Te
              pliki cookie mogą śledzić takie rzeczy, jak czas spędzony w witrynie i odwiedzane strony, abyśmy mogli
              nadal tworzyć ciekawe treści.</p>
            <p>Więcej informacji na temat plików cookie Google Analytics można znaleźć na oficjalnej stronie Google
              Analytics.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Więcej informacji</strong></h2>

        <p class="text">Mam nadzieję, że to wyjaśniło ci pewne sprawy i jak wspomniano wcześniej, jeśli jest coś,
          nie jesteś pewien, czy potrzebujesz, czy nie, zwykle bezpieczniej jest pozostawić włączone pliki cookie na
          wypadek interakcji
          jedna z funkcji, z których korzystasz na naszej stronie.</p>

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
    <section class="pol-cockie">
      <div class="pol-cockie__container container">
        <h1 class="title">Zasady dotyczące plików cookie dla maxslots.fun</h1>

        <p class="text">To jest polityka dotycząca plików cookie dla maxslots.fun, dostępna z maxslots.fun</p>

        <h2 class="subtitle"><strong>Co to są pliki cookie</strong></h2>

        <p class="text">Jak to jest powszechną praktyką w przypadku prawie wszystkich profesjonalnych witryn
          internetowych, ta witryna używa plików cookie, które są małymi plikami, które
          są pobierane na Twój komputer, aby poprawić Twoje wrażenia. Ta strona opisuje, jakie informacje gromadzą,
          w jaki sposób z nich korzystamy i dlaczego czasami musimy przechowywać te pliki cookie. Podzielimy się również
          tym, jak możesz temu zapobiec
          przechowywanie plików cookie, jednak może to obniżyć lub „zakłócić” niektóre elementy funkcjonalności witryny.
        </p>

        <h2 class="subtitle"><strong>Jak używamy plików cookie</strong></h2>

        <p class="text">Korzystamy z plików cookie z różnych powodów wyszczególnionych poniżej. Niestety w większości
          przypadków nie ma branży
          standardowe opcje wyłączania plików cookies bez całkowitego wyłączania funkcjonalności i funkcji, do których
          one dodają
          ta strona. Zaleca się pozostawienie wszystkich plików cookie, jeśli nie masz pewności, czy ich potrzebujesz,
          czy nie
          przypadku, gdy są one wykorzystywane do świadczenia usług, z których korzystasz.</p>

        <h2 class="subtitle"><strong>Wyłączanie plików cookie</strong></h2>

        <p class="text">Możesz zapobiec ustawianiu plików cookie, dostosowując ustawienia w przeglądarce (patrz Pomoc
          przeglądarki, aby uzyskać
          jak to zrobić). Pamiętaj, że wyłączenie plików cookie wpłynie na funkcjonalność tej i wielu innych stron
          internetowych
          które odwiedzasz. Wyłączenie plików cookie zwykle powoduje również wyłączenie niektórych funkcji i funkcji
          na tej stronie. Dlatego zaleca się, aby nie wyłączać plików cookie.</p>

        <h2 class="subtitle"><strong>Ustawiane przez nas pliki cookie</strong></h2>

        <ul>

          <li>
            <p>Pliki cookie związane z kontem</p>
            <p>Jeśli utworzysz u nas konto, użyjemy plików cookie do zarządzania procesem rejestracji i
              administracja ogólna. Te pliki cookie są zwykle usuwane po wylogowaniu, jednak w niektórych przypadkach
              może pozostać później, aby zapamiętać preferencje witryny po wylogowaniu.</p>
          </li>

          <li>
            <p>Pliki cookie związane z logowaniem</p>
            <p>Używamy plików cookie, gdy jesteś zalogowany, abyśmy mogli zapamiętać ten fakt. Zapobiega to konieczności
              loguj się za każdym razem, gdy odwiedzasz nową stronę. Te pliki cookie są zazwyczaj usuwane lub usuwane
              podczas logowania
              aby zapewnić dostęp do ograniczonych funkcji i obszarów tylko po zalogowaniu.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Pliki cookie stron trzecich</strong></h2>

        <p class="text">W niektórych szczególnych przypadkach używamy również plików cookie dostarczanych przez zaufane
          strony trzecie. Poniższa sekcja szczegóły
          jakie pliki cookie stron trzecich możesz napotkać za pośrednictwem tej witryny.</p>

        <ul>
          <li>
            <p>Ta witryna korzysta z usługi Google Analytics, która jest jednym z najbardziej rozpowszechnionych i
              zaufanych rozwiązań analitycznych w
              web, aby pomóc nam zrozumieć, w jaki sposób korzystasz z witryny i jak możemy poprawić Twoje wrażenia. Te
              pliki cookie mogą śledzić takie rzeczy, jak czas spędzony w witrynie i odwiedzane strony, abyśmy mogli
              nadal tworzyć ciekawe treści.</p>
            <p>Więcej informacji na temat plików cookie Google Analytics można znaleźć na oficjalnej stronie Google
              Analytics.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Więcej informacji</strong></h2>

        <p class="text">Mam nadzieję, że to wyjaśniło ci pewne sprawy i jak wspomniano wcześniej, jeśli jest coś,
          nie jesteś pewien, czy potrzebujesz, czy nie, zwykle bezpieczniej jest pozostawić włączone pliki cookie na
          wypadek interakcji
          jedna z funkcji, z których korzystasz na naszej stronie.</p>

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