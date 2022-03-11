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
    <section class="regulamin">
      <div class="regulamin__container container">
        <h1 data-aos="fade-right"><strong>Warunki</strong></h1>

        <p data-aos="fade-left">Poniższy regulamin określa zasady i regulamin korzystania z Serwisu kasyn-sloty.com,
          położony przy kasyn-sloty.com.</p>

        <p data-aos="fade-right">Uzyskując dostęp do tej witryny, zakładamy, że akceptujesz te warunki. Nie kontynuuj używania
          kasyn-sloty.com jeśli nie zgadzasz się na przyjęcie wszystkich warunków określonych na tej stronie.</p>

        <h2 data-aos="fade-left"><strong>Licencja</strong></h2>

        <p data-aos="fade-right">O ile nie zaznaczono inaczej, kasyno-sloty.com i/lub jego licencjodawcy posiadają prawa własności intelektualnej dla wszystkich
          materiał na kasyno-sloty.com. Wszelkie prawa własności intelektualnej są zastrzeżone. Możesz uzyskać do tego dostęp z
          kasyn-sloty.com na własny użytek podlegający ograniczeniom określonym w niniejszym regulaminie.</p>

        <h3 data-aos="fade-left">Nie wolno:</h3>
        <ul data-aos="fade-right">
          <li data-aos="fade-left">1) Ponownie publikuj materiał z kasyn-sloty.com</li>
          <li data-aos="fade-right">2) Sprzedawaj, wypożyczaj lub udzielaj sublicencji materiału od kasyn-sloty.com</li>
          <li data-aos="fade-left">3) Reprodukcja, powielanie lub kopiowanie materiału z kasyn-sloty.com</li>
          <li data-aos="fade-right">4) Ponowne rozpowszechnianie treści z kasyn-sloty.com</li>
        </ul>

        <p data-aos="fade-left">Niniejsza Umowa zaczyna obowiązywać w dniu niniejszego dokumentu.</p>

        <p data-aos="fade-right">kasyn-sloty.com zastrzega sobie prawo do monitorowania wszystkich komentarzy i usuwania wszelkich komentarzy, które mogą zostać wzięte pod uwagę
          nieodpowiednie, obraźliwe lub powoduje naruszenie niniejszych Warunków.</p>

        <h3 data-aos="fade-left">Gwarantujesz i oświadczasz, że:</h3>

        <ul data-aos="fade-right">
          <li data-aos="fade-left">1) Masz prawo do publikowania komentarzy na naszej stronie internetowej i posiadasz wszystkie niezbędne licencje i zgody na to
            więc;</li>
          <li data-aos="fade-right">2) Komentarze nie naruszają żadnych praw własności intelektualnej, w tym między innymi praw autorskich, patentów
            lub znak towarowy jakiejkolwiek strony trzeciej;</li>
          <li data-aos="fade-left">3) Komentarze nie zawierają żadnych zniesławiających, zniesławiających, obraźliwych, nieprzyzwoitych ani w inny sposób niezgodnych z prawem materiałów
            co jest naruszeniem prywatności</li>
          <li data-aos="fade-right">4) Komentarze nie będą wykorzystywane do nagabywania lub promowania działalności biznesowej lub zwyczajowej lub prezentowania działalności komercyjnej lub
            działalność niezgodna z prawem.</li>
        </ul>

        <p data-aos="fade-left">Niniejszym udzielasz kasyn-sloty.com niewyłącznej licencji na użytkowanie, reprodukcję, edycję oraz upoważnienie innych do korzystania,
          odtwarzaj i edytuj dowolne swoje komentarze we wszystkich formach, formatach lub mediach.</p>

          <h2 data-aos="fade-right"><strong>Hiperłącze do naszych treści</strong></h2>

          <h3 data-aos="fade-left">Następujące organizacje mogą zamieszczać linki do naszej Witryny bez uprzedniej pisemnej zgody:</h3>
  
          <ul data-aos="fade-right">
            <li data-aos="fade-left">1) Agencje rządowe;</li>
            <li data-aos="fade-right">2) Wyszukiwarki;</li>
            <li data-aos="fade-left">3) Organizacje prasowe;</li>
            <li data-aos="fade-right">4) Dystrybutorzy katalogów online mogą łączyć się z naszą Witryną w taki sam sposób, jak hiperłącza do Witryn
              innych notowanych przedsiębiorstw; i</li>
            <li data-aos="fade-left">5) Akredytowane firmy obejmujące cały system, z wyjątkiem pozyskiwania organizacji non-profit, charytatywnych centrów handlowych i
              grupy charytatywne, które nie mogą prowadzić hiperłączy do naszej strony internetowej.</li>
          </ul>
  
          <p data-aos="fade-right">Organizacje te mogą łączyć się z naszą stroną główną, publikacjami lub innymi informacjami dotyczącymi Witryny, o ile
            link: (a) nie jest w żaden sposób zwodniczy; (b) nie sugeruje fałszywie sponsorowania, poparcia lub zatwierdzenia
            podmiot łączący i jego produkty i/lub usługi; oraz (c) pasuje do kontekstu witryny podmiotu łączącego.
          </p>
  
          <h3 data-aos="fade-left">Możemy rozważyć i zatwierdzić inne prośby o połączenie z następujących typów organizacji:</h3>
  
          <ul data-aos="fade-right">
            <li data-aos="fade-left">1) Powszechnie znane źródła informacji konsumenckich i/lub biznesowych;</li>
            <li data-aos="fade-right">2) Witryny społeczności dot.com;</li>
            <li data-aos="fade-left">3) Stowarzyszenia lub inne grupy reprezentujące organizacje charytatywne;</li>
            <li data-aos="fade-right">4) Dystrybutorzy katalogów online;</li>
            <li data-aos="fade-left">5) Portale internetowe;</li>
            <li data-aos="fade-right">6) Firmy księgowe, prawnicze i konsultingowe; i</li>
            <li data-aos="fade-left">7) Instytucje edukacyjne i stowarzyszenia branżowe.</li>
          </ul>
  
          <p data-aos="fade-right">Zatwierdzimy prośby o połączenie od tych organizacji, jeśli uznamy, że: (a) link nie sprawi, że spojrzymy
            niekorzystnie dla nas lub dla naszych akredytowanych firm; (b) organizacja nie ma żadnych negatywnych
            zapisy u nas; (c) korzyść dla nas z widoczności hiperłącza rekompensuje brak
            kasyno-sloty.com; oraz (d) link znajduje się w kontekście ogólnych informacji o zasobach.</p>
  
          <p data-aos="fade-right">Te organizacje mogą zawierać link do naszej strony głównej, o ile link: (a) nie jest w żaden sposób zwodniczy; (b) nie
            nie fałszywie sugerować sponsorowania, poparcia lub zatwierdzenia strony łączącej i jej produktów lub usług; oraz
            (c) pasuje do kontekstu witryny strony łączącej.</p>
  
          <p data-aos="fade-left">Jeśli jesteś jedną z organizacji wymienionych w paragrafie 2 powyżej i chcesz połączyć się z naszą witryną,
            musisz nas o tym poinformować wysyłając e-mail na adres kasyn-sloty.com. Podaj swoje imię i nazwisko, nazwę organizacji,
            informacje kontaktowe, a także adres URL Twojej witryny, lista wszelkich adresów URL, z których zamierzasz połączyć się z naszą
            Witryna i lista adresów URL w naszej witrynie, do których chcesz się połączyć. Poczekaj 2-3 tygodnie na odpowiedź.
          </p>
  
          <h3 data-aos="fade-right">Zatwierdzone organizacje mogą prowadzić hiperłącze do naszej Witryny w następujący sposób:</h3>
  
          <ul data-aos="fade-left">
            <li data-aos="fade-right">1) Korzystając z nazwy naszej firmy; lub</li>
            <li data-aos="fade-left">2) Przy użyciu jednolitego lokalizatora zasobów, z którym jest połączony; lub</li>
            <li data-aos="fade-right">3) Korzystając z jakiegokolwiek innego opisu naszej Witryny, z którym jest połączona, ma to sens w kontekście i
              format treści na stronie podmiotu łączącego.</li>
          </ul>
  
          <p data-aos="fade-left">Zabrania się używania logo kasyn-sloty.com lub innej grafiki do linkowania bez licencji na znak towarowy
            umowa.</p>
    
            <h2 data-aos="fade-right"><strong>Odpowiedzialność za treść</strong></h2>
    
            <p data-aos="fade-left">Nie ponosimy odpowiedzialności za treści pojawiające się w Twojej Witrynie. Zgadzasz się chronić i
              bronić nas przed wszelkimi roszczeniami, które powstają w Twojej Witrynie. Żadne linki nie powinny pojawiać się w żadnej witrynie, która może:
              być interpretowane jako oszczercze, obsceniczne lub kryminalne, lub które naruszają, w inny sposób naruszają lub popierają
              naruszenie lub inne naruszenie jakichkolwiek praw osób trzecich.</p>
    
            <h2 data-aos="fade-right"><strong>Zastrzeżenie praw</strong></h2>
    
            <p data-aos="fade-left">Zastrzegamy sobie prawo do zażądania usunięcia wszystkich linków lub konkretnego linku do naszej Witryny. Zatwierdzasz
              natychmiastowego usunięcia wszystkich linków do naszej Witryny na żądanie. Zastrzegamy sobie również prawo do zmiany niniejszych warunków i
              warunki i zasady łączenia w dowolnym momencie. Poprzez ciągłe łącze do naszej Witryny, wyrażasz zgodę na bycie związanym
              do tych warunków korzystania z linków i postępuj zgodnie z nimi.</p>
    
            <h2 data-aos="fade-right"><strong>Usunięcie linków z naszej strony internetowej</strong></h2>
    
            <p data-aos="fade-left">Jeśli znajdziesz w naszej Witrynie jakikolwiek link, który jest obraźliwy z jakiegokolwiek powodu, możesz się z nami skontaktować i poinformować nas
              w każdej chwili. Rozpatrzymy prośby o usunięcie linków, ale nie jesteśmy do tego zobowiązani ani do udzielania odpowiedzi
              bezpośrednio.</p>
    
            <p data-aos="fade-right">Nie gwarantujemy, że informacje na tej stronie są poprawne, nie gwarantujemy ich kompletności lub
              precyzja; ani nie obiecujemy zapewnić, że strona internetowa pozostanie dostępna lub że materiały na stronie internetowej
              jest aktualizowany.</p>
    
            <h2 data-aos="fade-left"><strong>Zastrzeżenie</strong></h2>
    
            <p data-aos="fade-right">W maksymalnym zakresie dozwolonym przez obowiązujące prawo wykluczamy wszelkie oświadczenia, gwarancje i warunki
              związanych z naszą witryną internetową i korzystaniem z tej witryny.</p>

              <h3>Nic w tym wyłączeniu odpowiedzialności nie spowoduje:</h3>
    
            <ul data-aos="fade-left">
              <li data-aos="fade-right">1) Ograniczyć lub wykluczyć naszą lub Twoją odpowiedzialność za śmierć lub obrażenia ciała;</li>
              <li data-aos="fade-left">2) Ograniczyć lub wykluczyć naszą lub Twoją odpowiedzialność za oszustwo lub oszukańcze wprowadzenie w błąd;</li>
              <li data-aos="fade-right">3) Ograniczać jakąkolwiek naszą lub Twoją odpowiedzialność w jakikolwiek sposób, który nie jest dozwolony na mocy obowiązującego prawa; lub</li>
              <li data-aos="fade-left">4) Wykluczyć wszelkie nasze lub Twoje zobowiązania, które nie mogą być wyłączone na mocy obowiązującego prawa.</li>
            </ul>
    
            <p data-aos="fade-right">Ograniczenia i zakazy odpowiedzialności określone w tej sekcji i w innych miejscach niniejszego wyłączenia odpowiedzialności: (a) są
              z zastrzeżeniem poprzedniego ustępu; oraz (b) regulują wszystkie zobowiązania wynikające z wyłączenia odpowiedzialności, w tym:
              zobowiązania wynikające z umowy, deliktu i naruszenia obowiązków ustawowych.</p>
    
            <p data-aos="fade-left">Dopóki witryna oraz informacje i usługi w witrynie są udostępniane bezpłatnie, będziemy
              nie ponosi odpowiedzialności za jakiekolwiek straty lub szkody jakiegokolwiek rodzaju.</p>
      </div>
    </section>
  </main>
  <?php 
  include 'footer.php';
?>