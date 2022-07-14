<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUFFALOGAMEBOY.COM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet icon" href="img/logo1.png">
    
</head>

<body>
    <div class="container-fluid ">
        <div class="row modalMiddle justify-content-center">
            <div class="col-10 col-md-8 modal flex-column p-2 p-md-5" id="disable">
                <div class="modal__item d-flex  justify-content-between position-relative w-100">
                    <h2>Pliki cookie</h2>
                    <a href="main-page.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
                        <div class="close"></div>
                    </a>
                </div>
                <div class="modal__item">
                    <p>Klikając „Akceptuj wszystkie pliki cookie”, zgadzasz się na przechowywanie plików cookie na swoim urządzeniu w celu usprawnienia nawigacji w witrynie, analizy korzystania z witryny i pomocy w naszych działaniach marketingowych. Przeczytaj naszą politykę</p>
                </div>

                <div class="modal__item modal__item-btns  d-flex flex-column flex-md-row justify-content-around">
                    <a class="modalBtn" id="cookieShow">Ustawienia plików cookie</a>
                    <a class="modalBtn" href="main-page.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">Akceptuje ciasteczka</a>
                </div>
            </div>
            <div class="col-10 col-md-8 modal flex-column p-md-5 cookieBlock" id="withCookie">
                <div class="modal__item d-flex  justify-content-between position-relative w-100">
                    <h3>Polityka plików cookie dla buffalogameboy.com</h3>

                </div>
                <div class="modal__item ">


                    <p>To jest polityka dotycząca plików cookie dla buffalogameboy.com, dostępna na buffalogameboy.com</p>

                    <p><strong>Co to są pliki cookie</strong></p>

                    <p>Jak to jest powszechną praktyką w przypadku prawie wszystkich profesjonalnych witryn internetowych, ta witryna używa plików cookie, które są małymi plikami pobieranymi na komputer w celu poprawy komfortu użytkowania. Ta strona opisuje, jakie informacje zbierają, w jaki sposób je wykorzystujemy i dlaczego czasami musimy przechowywać te pliki cookie. Podzielimy się również, w jaki sposób możesz zapobiec przechowywaniu tych plików cookie, jednak może to obniżyć lub „zepsuć” niektóre elementy funkcjonalności witryny.</p>

                    <p><strong>Jak używamy plików cookie</strong></p>

                    <p>Używamy plików cookie z różnych powodów wyszczególnionych poniżej. Niestety w większości przypadków nie ma standardowych opcji branżowych umożliwiających wyłączenie plików cookie bez całkowitego wyłączenia funkcjonalności i funkcji, które dodają do tej witryny. Zaleca się pozostawienie wszystkich plików cookie, jeśli nie masz pewności, czy ich potrzebujesz, czy nie, jeśli są one wykorzystywane do świadczenia usług, z których korzystasz.</p>

                    <p><strong>Ustawiane przez nas pliki cookie</strong></p>

                    <ul>






                        <li>
                            <p>Pliki cookie związane z formularzami</p>
                            <p>Gdy przesyłasz dane za pomocą formularza, takiego jak te znajdujące się na stronach kontaktowych lub formularzach komentarzy, pliki cookie mogą być ustawione tak, aby zapamiętać dane użytkownika na potrzeby przyszłej korespondencji.</p>
                        </li>


                    </ul>

                    <p><strong>Pliki cookie stron trzecich</strong></p>

                    <p>W niektórych szczególnych przypadkach używamy również plików cookie dostarczanych przez zaufane strony trzecie. Poniższa sekcja zawiera szczegółowe informacje na temat plików cookie stron trzecich, które możesz napotkać w tej witrynie.</p>

                    <ul>



                        <li>
                            <p>Od czasu do czasu testujemy nowe funkcje i wprowadzamy subtelne zmiany w sposobie dostarczania witryny. Gdy wciąż testujemy nowe funkcje, te pliki cookie mogą być używane w celu zapewnienia spójnego korzystania z witryny, jednocześnie zapewniając, że rozumiemy, które optymalizacje nasi użytkownicy najbardziej cenią.</p>
                        </li>







                    </ul>

                    <p><strong>Więcej informacji</strong></p>

                    <p>Mam nadzieję, że to wyjaśniło ci sprawę i jak wspomniano wcześniej, jeśli jest coś, czego nie jesteś pewien, czy potrzebujesz, czy nie, zwykle bezpieczniej jest pozostawić włączone pliki cookie na wypadek interakcji z jedną z funkcji, których używasz na naszej stronie.</p>



                    <p>Jeśli jednak nadal szukasz więcej informacji, możesz skontaktować się z nami za pomocą jednej z naszych preferowanych metod kontaktu:</p>
                </div>

                <div class="modal__item modal__item-btns  d-flex flex-column flex-md-row justify-content-around">
                    <a class="modalBtn" href="main-page.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">Akceptuje ciasteczka</a>
                </div>
            </div>
        </div>

    </div>
    <!-- <script src="js/main.js"></script> -->
    <script>
        document.getElementById('cookieShow').onclick = function() {
            document.getElementById('withCookie').classList.add('cookieBlock-active');
            document.getElementById('disable').classList.add('modal-disable');
        }
    </script>
</body>

</html>