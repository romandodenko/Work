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
    <section class="pol-cockie">
      <div class="pol-cockie__container container">
        <h1 class="title">Cookie-Richtlinie für maxslots.fun</h1>

        <p class="text">Dies ist die Cookie-Richtlinie für maxslots.fun, zugänglich über maxslots.fun</p>

        <h2 class="subtitle"><strong>Was sind Cookies</strong></h2>

        <p class="text">Wie bei fast allen professionellen Websites üblich, verwendet diese Website Cookies, bei denen es sich um winzige Dateien handelt, die
          werden auf Ihren Computer heruntergeladen, um Ihre Erfahrung zu verbessern. Diese Seite beschreibt, welche Informationen sie sammeln,
          wie wir sie verwenden und warum wir diese Cookies manchmal speichern müssen. Wir teilen Ihnen auch mit, wie Sie diese verhindern können
          Cookies werden nicht gespeichert, dies kann jedoch bestimmte Elemente der Website-Funktionalität herabsetzen oder „brechen“.
        </p>

        <h2 class="subtitle"><strong>Wie wir Cookies verwenden</strong></h2>

        <p class="text">Wir verwenden Cookies aus einer Vielzahl von Gründen, die unten aufgeführt sind. Leider gibt es in den meisten Fällen keine Industrie
          Standardoptionen zum Deaktivieren von Cookies, ohne die Funktionalität und Features, zu denen sie hinzugefügt werden, vollständig zu deaktivieren
          Diese Seite. Es wird empfohlen, alle Cookies aktiviert zu lassen, wenn Sie sich nicht sicher sind, ob Sie sie benötigen oder nicht
          falls sie verwendet werden, um einen von Ihnen genutzten Dienst bereitzustellen.</p>

        <h2 class="subtitle"><strong>Cookies deaktivieren</strong></h2>

        <p class="text">Sie können das Setzen von Cookies verhindern, indem Sie die Einstellungen in Ihrem Browser anpassen (siehe Hilfe Ihres Browsers für
          Wie macht man das). Beachten Sie, dass das Deaktivieren von Cookies die Funktionalität dieser und vieler anderer Websites beeinträchtigt
          die du besuchst. Das Deaktivieren von Cookies führt normalerweise auch dazu, dass bestimmte Funktionen und Merkmale von deaktiviert werden
          die diese Seite. Daher wird empfohlen, Cookies nicht zu deaktivieren.</p>

        <h2 class="subtitle"><strong>Die Cookies, die wir setzen</strong></h2>

        <ul>

          <li>
            <p>Kontobezogene Cookies</p>
            <p>Wenn Sie ein Konto bei uns erstellen, verwenden wir Cookies für die Verwaltung des Anmeldevorgangs und
              allgemeine Verwaltung. Diese Cookies werden in der Regel gelöscht, wenn Sie sich ausloggen, in manchen Fällen jedoch schon
              kann danach bleiben, um sich an Ihre Website-Einstellungen zu erinnern, wenn Sie abgemeldet sind.</p>
          </li>

          <li>
            <p>Loginbezogene Cookies</p>
            <p>Wir verwenden Cookies, wenn Sie eingeloggt sind, damit wir uns daran erinnern können. Dies verhindert, dass Sie müssen
              Melden Sie sich jedes Mal an, wenn Sie eine neue Seite besuchen. Diese Cookies werden normalerweise entfernt oder gelöscht, wenn Sie sich anmelden
              aus, um sicherzustellen, dass Sie nur auf eingeschränkte Funktionen und Bereiche zugreifen können, wenn Sie angemeldet sind.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Cookies von Drittanbietern</strong></h2>

        <p class="text">In einigen Sonderfällen verwenden wir auch Cookies, die von vertrauenswürdigen Drittanbietern bereitgestellt werden. Der folgende Abschnitt enthält Einzelheiten
          auf welche Cookies von Drittanbietern Sie möglicherweise über diese Website stoßen.</p>

        <ul>
          <li>
            <p>Diese Website verwendet Google Analytics, eine der am weitesten verbreiteten und vertrauenswürdigsten Analyselösungen auf der
              web, um uns dabei zu helfen zu verstehen, wie Sie die Website nutzen und wie wir Ihre Erfahrung verbessern können. Diese
              Cookies können Dinge verfolgen, wie z. B. wie lange Sie auf der Website verbringen und welche Seiten Sie besuchen, damit wir dies können
              weiterhin ansprechende Inhalte zu produzieren.</p>
            <p>Weitere Informationen zu Google Analytics-Cookies finden Sie auf der offiziellen Google Analytics-Seite.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Weitere Informationen</strong></h2>

        <p class="text">Hoffentlich hat das die Dinge für Sie geklärt und wie bereits erwähnt, wenn es etwas gibt, das Sie betrifft
          Sie sich nicht sicher sind, ob Sie Cookies benötigen oder nicht, ist es normalerweise sicherer, Cookies aktiviert zu lassen, falls es zu einer Interaktion kommt
          eine der Funktionen, die Sie auf unserer Website verwenden.</p>

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
    <section class="pol-cockie">
      <div class="pol-cockie__container container">
        <h1 class="title">Cookie-Richtlinie für maxslots.fun</h1>

        <p class="text">Dies ist die Cookie-Richtlinie für maxslots.fun, zugänglich über maxslots.fun</p>

        <h2 class="subtitle"><strong>Was sind Cookies</strong></h2>

        <p class="text">Wie bei fast allen professionellen Websites üblich, verwendet diese Website Cookies, bei denen es sich um winzige Dateien handelt, die
          werden auf Ihren Computer heruntergeladen, um Ihre Erfahrung zu verbessern. Diese Seite beschreibt, welche Informationen sie sammeln,
          wie wir sie verwenden und warum wir diese Cookies manchmal speichern müssen. Wir teilen Ihnen auch mit, wie Sie diese verhindern können
          Cookies werden nicht gespeichert, dies kann jedoch bestimmte Elemente der Website-Funktionalität herabsetzen oder „brechen“.
        </p>

        <h2 class="subtitle"><strong>Wie wir Cookies verwenden</strong></h2>

        <p class="text">Wir verwenden Cookies aus einer Vielzahl von Gründen, die unten aufgeführt sind. Leider gibt es in den meisten Fällen keine Industrie
          Standardoptionen zum Deaktivieren von Cookies, ohne die Funktionalität und Features, zu denen sie hinzugefügt werden, vollständig zu deaktivieren
          Diese Seite. Es wird empfohlen, alle Cookies aktiviert zu lassen, wenn Sie sich nicht sicher sind, ob Sie sie benötigen oder nicht
          falls sie verwendet werden, um einen von Ihnen genutzten Dienst bereitzustellen.</p>

        <h2 class="subtitle"><strong>Cookies deaktivieren</strong></h2>

        <p class="text">Sie können das Setzen von Cookies verhindern, indem Sie die Einstellungen in Ihrem Browser anpassen (siehe Hilfe Ihres Browsers für
          Wie macht man das). Beachten Sie, dass das Deaktivieren von Cookies die Funktionalität dieser und vieler anderer Websites beeinträchtigt
          die du besuchst. Das Deaktivieren von Cookies führt normalerweise auch dazu, dass bestimmte Funktionen und Merkmale von deaktiviert werden
          die diese Seite. Daher wird empfohlen, Cookies nicht zu deaktivieren.</p>

        <h2 class="subtitle"><strong>Die Cookies, die wir setzen</strong></h2>

        <ul>

          <li>
            <p>Kontobezogene Cookies</p>
            <p>Wenn Sie ein Konto bei uns erstellen, verwenden wir Cookies für die Verwaltung des Anmeldevorgangs und
              allgemeine Verwaltung. Diese Cookies werden in der Regel gelöscht, wenn Sie sich ausloggen, in manchen Fällen jedoch schon
              kann danach bleiben, um sich an Ihre Website-Einstellungen zu erinnern, wenn Sie abgemeldet sind.</p>
          </li>

          <li>
            <p>Loginbezogene Cookies</p>
            <p>Wir verwenden Cookies, wenn Sie eingeloggt sind, damit wir uns daran erinnern können. Dies verhindert, dass Sie müssen
              Melden Sie sich jedes Mal an, wenn Sie eine neue Seite besuchen. Diese Cookies werden normalerweise entfernt oder gelöscht, wenn Sie sich anmelden
              aus, um sicherzustellen, dass Sie nur auf eingeschränkte Funktionen und Bereiche zugreifen können, wenn Sie angemeldet sind.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Cookies von Drittanbietern</strong></h2>

        <p class="text">In einigen Sonderfällen verwenden wir auch Cookies, die von vertrauenswürdigen Drittanbietern bereitgestellt werden. Der folgende Abschnitt enthält Einzelheiten
          auf welche Cookies von Drittanbietern Sie möglicherweise über diese Website stoßen.</p>

        <ul>
          <li>
            <p>Diese Website verwendet Google Analytics, eine der am weitesten verbreiteten und vertrauenswürdigsten Analyselösungen auf der
              web, um uns dabei zu helfen zu verstehen, wie Sie die Website nutzen und wie wir Ihre Erfahrung verbessern können. Diese
              Cookies können Dinge verfolgen, wie z. B. wie lange Sie auf der Website verbringen und welche Seiten Sie besuchen, damit wir dies können
              weiterhin ansprechende Inhalte zu produzieren.</p>
            <p>Weitere Informationen zu Google Analytics-Cookies finden Sie auf der offiziellen Google Analytics-Seite.</p>
          </li>
        </ul>

        <h2 class="subtitle"><strong>Weitere Informationen</strong></h2>

        <p class="text">Hoffentlich hat das die Dinge für Sie geklärt und wie bereits erwähnt, wenn es etwas gibt, das Sie betrifft
          Sie sich nicht sicher sind, ob Sie Cookies benötigen oder nicht, ist es normalerweise sicherer, Cookies aktiviert zu lassen, falls es zu einer Interaktion kommt
          eine der Funktionen, die Sie auf unserer Website verwenden.</p>

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