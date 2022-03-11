<?php 
  include 'header.php';
?>
  <main>
  <section class="forms">
      <div class="forms__container container">
      <?php if(isset($_SESSION['logged_user'])) : ?>
      <div class="profile">
            <p class="profile__text">
              <?php echo $_SESSION['logged_user']->login; ?>
              </p>
              <button class="profile__btn"><span>Wyjście</span></button>
            </div>
          <?php else : ?>
        <div class="forms__wrapper-sign animate__animated">
          <p class="forms__text sign-text">Naciśnij przycisk zarejestrować się aby rozpocząć rejestrację</p>
          <form class="forms__sign sign" action="#" method="POST">
            <div class="sign__label">
              <input class="sign__input" type="text" placeholder="Poczta" name="email">
              <input class="sign__input" type="text" placeholder="Login" name="login">
            </div>
            <div class="sign__label">
              <input class="sign__input" type="password" placeholder="Hasło" name="password">
              <input class="sign__input" type="password" placeholder="Powtórz hasło" name="password_2">
            </div>
              <input class="sign__btn" type="submit" name="sign_up" value="Zarejestrować">
          </form>
          <?php
            $data = $_POST;
            if(isset($data['sign_up'])) {
              $errors = array();

              if(trim($data['login']) == '') {
                $errors[] = "Wpisz login";
              }
              if(trim($data['email']) == '') {
                $errors[] = "Wpisz swój adres e-mail";
              }
              if($data['password'] == '') {

                $errors[] = "Wprowadź hasło";
              }
              if($data['password_2'] != $data['password']) {

                $errors[] = "Potwierdź hasło";
              }
              if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) {

                $errors[] = "Potwierdź hasło";
              }
              if(!empty($errors)) {
                echo '<div class="error" style="color: red;">' . array_shift($errors). '</div><hr>';
              }
            }
          ?>
          <button class="forms__btn sign-btn">Zarejestrować</button>
          <button class="forms__close sign-close"><span>x</span></button>
        </div>
        <div class="forms__wrapper-log animate__animated">
          <p class="forms__text log-text">Kliknij przycisk logowania, aby wejść na stronę</p>
          <form class="forms__log log" action="#" method="POST">
            <div class="log__label">
              <input class="log__input" type="text" placeholder="Twój login" name="login">
            </div>
            <div class="log__label">
              <input class="log__input" type="password" placeholder="Hasło" name="password">
            </div>
              <input class="log__btn" type="submit" name="log_in" value="Zalogować">
          </form>
          <?php
					$data = $_POST;
					if (isset($data['log_in'])) {

						$errors = array();

						
						$user = R::findOne('users', 'login = ?', array($data['login']));

						if ($user) {

							if (password_verify($data['password'], $user->password)) {

								$_SESSION['logged_user'] = $user;

								header('Location: index.php');
							} else {

								$errors[] = 'Hasło zostało wprowadzone niepoprawnie!';
							}
						} else {
							$errors[] = 'Nie ma użytkownika o tej nazwie!';
						}

						if (!empty($errors)) {

							echo '<div class="error" style="color: red; ">' . array_shift($errors) . '</div><hr>';
						}
					}
					?>
          <button class="forms__btn log-btn">Zalogować</button>
          <button class="forms__close log-close"><span>x</span></button>
        </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="politicks">
      <div class="politicks__container container">
        <h1 data-aos="fade-right">Polityka prywatności dla kasyn-sloty.com</h1>

        <p data-aos="fade-left">W kasynie-sloty.com, dostępnym z kasyna-sloty.com, jednym z naszych głównych priorytetów jest prywatność naszego
          goście. Niniejszy dokument dotyczący Polityki prywatności zawiera rodzaje informacji gromadzonych i rejestrowanych przez
          kasyno-sloty.com i jak z niego korzystamy.</p>

        <p data-aos="fade-right">Niniejsza Polityka prywatności dotyczy tylko naszych działań online i jest ważna dla odwiedzających naszą stronę internetową z
          w odniesieniu do informacji, które udostępnili i/lub zebrali w kasynie-sloty.com. Ta zasada nie ma zastosowania
          do wszelkich informacji zebranych w trybie offline lub za pośrednictwem kanałów innych niż ta strona internetowa.</p>

        <h2 data-aos="fade-left">Zgoda</h2>

        <p data-aos="fade-right">Korzystając z naszej strony internetowej, wyrażasz zgodę na naszą Politykę prywatności i zgadzasz się na jej warunki.</p>

        <h2 data-aos="fade-left">Informacje, które zbieramy</h2>

        <p data-aos="fade-right">Dane osobowe, o które jesteś proszony, oraz powody, dla których jesteś proszony o ich podanie, będą
          być jasne w momencie, w którym prosimy o podanie swoich danych osobowych.</p>
        <p data-aos="fade-left">Kiedy zarejestrujesz Konto, możemy poprosić Cię o Twoje dane kontaktowe, w tym takie elementy jak imię i nazwisko,
          nazwa firmy, adres, adres e-mail i numer telefonu.</p>

        <h2 data-aos="fade-right">Jak wykorzystujemy Twoje informacje</h2>

        <p data-aos="fade-left">Zgromadzone informacje wykorzystujemy na różne sposoby, w tym do:</p>

        <ul data-aos="fade-right">
          <li data-aos="fade-left">1) Zapewnij, obsługuj i utrzymuj naszą stronę internetową</li>
          <li data-aos="fade-right">2) Polepszaj, personalizuj i rozwijaj naszą stronę internetową</li>
          <li data-aos="fade-left">3) Zrozum i przeanalizuj, w jaki sposób korzystasz z naszej strony internetowej</li>
          <li data-aos="fade-right">4) Opracuj nowe produkty, usługi, funkcje i funkcje</li>
          <li data-aos="fade-left">5) Komunikować się z Tobą bezpośrednio lub za pośrednictwem jednego z naszych partnerów, w tym w celu obsługi klienta, aby
            dostarczania aktualizacji i innych informacji dotyczących strony internetowej oraz w celach marketingowych i promocyjnych
            cele</li>
          <li data-aos="fade-right">6) Wysyłaj e-maile</li>
          <li data-aos="fade-left">7) Znajduj i zapobiegaj oszustwom</li>
        </ul>

        <h2 data-aos="fade-right">Pliki cookie i sygnały nawigacyjne</h2>

        <p data-aos="fade-left">Jak każda inna strona internetowa, kasyn-sloty.com używa 'cookies'. Te pliki cookie służą do przechowywania informacji, w tym:
          preferencje odwiedzających oraz strony w witrynie, do których użytkownik uzyskał dostęp lub które odwiedził. Informacja jest
          służy do optymalizacji doświadczeń użytkowników poprzez dostosowywanie zawartości naszej strony internetowej w oparciu o typ przeglądarki odwiedzających
          i/lub inne informacje.</p>

          <h2 data-aos="fade-right">Pliki dziennika</h2>

          <p data-aos="fade-left">kasyn-sloty.com stosuje standardową procedurę korzystania z plików dziennika. Te pliki rejestrują odwiedzających, gdy odwiedzają
            strony internetowe. Robią to wszystkie firmy hostingowe i stanowią część analizy usług hostingowych. Zebrane informacje
            przez pliki dziennika zawierają adresy protokołu internetowego (IP), typ przeglądarki, dostawcę usług internetowych (ISP), datę i
            znacznik czasu, strony odsyłające/wyjścia i ewentualnie liczbę kliknięć. Nie są one powiązane z żadną informacją
            to jest osobista identyfikacja. Celem informacji jest analiza trendów, administrowanie
            witrynę, śledzenie ruchu użytkowników w witrynie i zbieranie informacji demograficznych.</p>

        <h2 data-aos="fade-right">Plik cookie Google DoubleClick DART</h2>

        <p data-aos="fade-left">Google jest jednym z zewnętrznych dostawców w naszej witrynie. Wykorzystuje również pliki cookie, znane jako pliki cookie DART, do wyświetlania reklam
          odwiedzającym naszą witrynę na podstawie ich wizyty na stronie www.website.com i innych witrynach w Internecie. Jednakże,
          odwiedzający mogą zdecydować się na odrzucenie korzystania z plików cookie DART, odwiedzając witrynę reklamową Google i sieć partnerską Prywatność</p>

        <h2 data-aos="fade-right">Polityka prywatności partnerów reklamowych</h2>

        <p data-aos="fade-left">Możesz zapoznać się z tą listą, aby znaleźć Politykę Prywatności dla każdego z partnerów reklamowych kasyn-sloty.com.
        </p>

        <p data-aos="fade-right">Serwery reklamowe lub sieci reklamowe innych firm korzystają z technologii, takich jak pliki cookie, JavaScript lub sygnalizatory WWW, które są
          wykorzystywane w swoich odpowiednich reklamach i linkach pojawiających się na kasyn-sloty.com, które są wysyłane bezpośrednio do
          przeglądarka użytkowników. Gdy to nastąpi, automatycznie otrzymają Twój adres IP. Te technologie służą do
          mierzyć skuteczność swoich kampanii reklamowych i/lub personalizować treści reklamowe, które:
          widzisz w odwiedzanych witrynach.</p>

        <p data-aos="fade-left">Zauważ, że kasyn-sloty.com nie ma dostępu ani kontroli nad tymi ciasteczkami, które są używane przez strony trzecie
          reklamodawców.</p>

       <h2 data-aos="fade-right">Polityka prywatności stron trzecich</h2>

        <p data-aos="fade-left">Polityka prywatności firmy kasyn-sloty.com nie ma zastosowania do innych reklamodawców ani witryn internetowych. W związku z tym doradzamy
          aby zapoznać się z odpowiednią Polityką prywatności tych zewnętrznych serwerów reklamowych, aby uzyskać bardziej szczegółowe informacje. Ono
          może zawierać swoje praktyki i instrukcje dotyczące rezygnacji z niektórych opcji. </p>

        <p data-aos="fade-right">Możesz wyłączyć pliki cookie za pomocą indywidualnych opcji przeglądarki. Aby poznać bardziej szczegółowe informacje
          o zarządzaniu plikami cookie w określonych przeglądarkach internetowych można je znaleźć w odpowiednich witrynach przeglądarek.</p>

          <h2 data-aos="fade-left">Nasi partnerzy reklamowi</h2>

          <p data-aos="fade-right">Niektórzy reklamodawcy w naszej witrynie mogą używać plików cookie i sygnalizatorów internetowych. Lista naszych partnerów reklamowych znajduje się poniżej.
            Każdy z naszych partnerów reklamowych ma własną Politykę prywatności dla swoich zasad dotyczących danych użytkowników. Dla łatwiejszego
            dostępu, poniżej zamieszczono hiperłącze do ich Polityki prywatności.</p>

        <h2 data-aos="fade-left">Prawa do ochrony danych RODO</h2>

        <p data-aos="fade-right">Chcielibyśmy upewnić się, że jesteś w pełni świadomy wszystkich swoich praw do ochrony danych. Każdy użytkownik jest uprawniony
          do następujących:</p>
        <p data-aos="fade-left">Prawo dostępu – Masz prawo zażądać kopii swoich danych osobowych. Możemy obciążyć Cię niewielką opłatą
          opłata za tę usługę.</p>
        <p data-aos="fade-right">Prawo do sprostowania — masz prawo zażądać poprawienia wszelkich informacji, które Twoim zdaniem są
          niedokładny. Masz również prawo zażądać od nas uzupełnienia informacji, które Twoim zdaniem są niekompletne.</p>
        <p data-aos="fade-left">Prawo do usunięcia – masz prawo zażądać, abyśmy usunęli Twoje dane osobowe, pod pewnymi względami
          warunki.</p>
        <p data-aos="fade-right">Prawo do ograniczenia przetwarzania – Masz prawo zażądać ograniczenia przetwarzania Twojego
          dane osobowe, pod pewnymi warunkami.</p>
        <p data-aos="fade-left">Prawo do sprzeciwu wobec przetwarzania – Masz prawo sprzeciwić się przetwarzaniu przez nas Twoich danych osobowych,
          pod pewnymi warunkami.</p>
        <p data-aos="fade-right">Prawo do przenoszenia danych – Masz prawo zażądać od nas przeniesienia posiadanych przez nas danych
          zebrane do innej organizacji lub bezpośrednio do Ciebie, pod pewnymi warunkami.</p>
        <p data-aos="fade-left">Jeśli złożysz prośbę, mamy miesiąc na odpowiedź. Jeśli chcesz skorzystać z któregokolwiek z nich
          praw, skontaktuj się z nami.</p>

      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>