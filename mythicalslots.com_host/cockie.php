<?php 
include 'header-page.php';
?>
  <main>
    <section class="hero">
      <div class="hero__container container">
        <h1 class="hero__title title">
          Mythicalslots <span>najlepsze kasyno</span><span>spolecznosciowe</span>
        </h1>
        <div class="hero__wrapper-link">
          <a href="game.php" class="hero__link">
            Zagraj teraz
          </a>
        </div>
      </div>
    </section>
    <section class="politicks">
      <div class="politicks__container container">
        <h2>Polityka plików cookie dla myticalslots.com</h2>

        <p>To są zasady dotyczące plików cookie dla myticalslots.com, dostępne na myticalslots.com</p>

        <h3><strong>Co to sa pliki cookie</strong></h3>

        <p>Jak to jest powszechną praktyką w przypadku prawie wszystkich profesjonalnych witryn internetowych, ta witryna używa plików cookie, które są małymi plikami, które
          są pobierane na Twój komputer, aby poprawić Twoje wrażenia. Ta strona opisuje, jakie informacje gromadzą,
          w jaki sposób z nich korzystamy i dlaczego czasami musimy przechowywać te pliki cookie. Podzielimy się również tym, jak możesz temu zapobiec
          przechowywanie plików cookie, jednak może to obniżyć lub „zakłócić” niektóre elementy funkcjonalności witryny.
        </p>

        <h3><strong>Jak uzywamy plików cookie</strong></h3>

        <p>Używamy plików cookie z różnych powodów wyszczególnionych poniżej. Niestety w większości przypadków nie ma przemysłu
          standardowe opcje wyłączania plików cookies bez całkowitego wyłączania funkcjonalności i funkcji, do których one dodają
          ta strona. Zaleca się pozostawienie wszystkich plików cookie, jeśli nie masz pewności, czy ich potrzebujesz, czy nie
          przypadku, gdy są one wykorzystywane do świadczenia usług, z których korzystasz.</p>

        <h3><strong>Wyłaczanie plików cookie</strong></h3>

        <p>Możesz zapobiec ustawianiu plików cookie, dostosowując ustawienia w przeglądarce (patrz Pomoc przeglądarki, aby uzyskać
          jak to zrobić). Pamiętaj, że wyłączenie plików cookie wpłynie na funkcjonalność tej i wielu innych stron internetowych
          które odwiedzasz. Wyłączenie plików cookie zwykle powoduje również wyłączenie niektórych funkcji i funkcji
          na tej stronie. Dlatego zaleca się, aby nie wyłączać plików cookie.</p>

        <h3><strong>Ustawiane przez nas pliki cookie</strong></h3>
        <ul>

          <li>
            <p>Pliki cookie związane z kontem</p>
            <p>Jeśli utworzysz u nas konto, użyjemy plików cookie do zarządzania procesem rejestracji i
              administracja ogólna. Te pliki cookie są zwykle usuwane po wylogowaniu, jednak w niektórych przypadkach
              może pozostać później, aby zapamiętać preferencje witryny po wylogowaniu.</p>
          </li>
        </ul>

        <h3><strong>Pliki cookie stron trzecich</strong></h3>

        <p>W niektórych szczególnych przypadkach używamy również plików cookie dostarczanych przez zaufane strony trzecie. Poniższa sekcja szczegóły
          jakie pliki cookie stron trzecich możesz napotkać za pośrednictwem tej witryny.</p>

        <ul>

          <li>
            <p>Ta witryna korzysta z usługi Google Analytics, która jest jednym z najbardziej rozpowszechnionych i zaufanych rozwiązań analitycznych w
              web, aby pomóc nam zrozumieć, w jaki sposób korzystasz z witryny i jak możemy poprawić Twoje wrażenia. Te
              pliki cookie mogą śledzić takie rzeczy, jak czas spędzony w witrynie i odwiedzane strony, abyśmy mogli
              nadal tworzyć ciekawe treści.</p>
            <p>Więcej informacji na temat plików cookie Google Analytics można znaleźć na oficjalnej stronie Google Analytics.</p>
          </li>
        </ul>

        <h3><strong>Wiecej informacji</strong></h3>

        <p>Mam nadzieję, że to wyjaśniło ci sprawy i jak wspomniano wcześniej, jeśli jest coś, co ty
          nie jesteś pewien, czy potrzebujesz, czy nie, zwykle bezpieczniej jest pozostawić włączone pliki cookie na wypadek interakcji
          jedna z funkcji, z których korzystasz na naszej stronie.</p>

      </div>
    </section>
  </main>
  <div class="popup-log">
    <div class="popup-log__close"></div>
    <div class="popup-log__body">
      <form class="popup-log__form-log log" action="#" method="POST">
        <div class="log__label">
          <input class="log__input" type="text" placeholder="Your email" name="login">
        </div>
        <div class="log__label">
          <input class="log__input" type="password" placeholder="Password" name="password">
        </div>
        <input class="log__btn" type="submit" name="log_in" value="Wejść">
      </form>
      <button class="popup-log__exit"></button>
    </div>
  </div>
  <div class="popup-reg">
    <div class="popup-reg__close"></div>
    <div class="popup-reg__body">
      <form class="popup-reg__form-reg reg" action="#" method="POST">
        <div class="reg__label">
          <input class="reg__input" type="text" placeholder="Email" name="email">
        </div>
        <div class="reg__label">
          <input class="reg__input" type="password" placeholder="Password" name="password">
        </div>
        <div class="reg__label">
          <input class="reg__checkbox" type="checkbox" required><span class="reg__span">Zapoznałem się z <a
              href="policy.php">polityką prywatności</a> oraz <a href="terms.php">regulaminem</a> i akceptuję
            je</span>
        </div>
        <input class="reg__btn" type="submit" name="sign_up" value="Rejestracja">
      </form>
      <button class="popup-reg__exit"></button>
    </div>
  </div>
  <?php 
  include 'footer-page.php';
  ?>