<?php
// Query params are: utm_term={keyword}&utm_creative={creative}&utm_campaign={campaignid}&utm_position={adposition}&utm_network={network}&utm_target={target}&utm_placement={placement}&utm_match={matchtype}&subid={subid} 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://grajteraz-pl-98.site/api.php?', '3h6wp7t63DzLf8m4');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<?php
include 'header.php';
?>
    <main>
        <div class="container-fluid banner">
            <div class="row d-flex justify-content-center justify-content-xl-end">
                <div class="body-block col-12 col-xl-6 d-flex flex-column">
                    <h3 class="p-2">Społecznościowe kasyno online</h3>
                    <h1 class="p-2 mb-2 mb-md-5">KASYNO SPOŁECZNOŚCIOWE to plac zabaw dla gier i rozrywki</h1>
                    <a class="toGames" href="main-page.php#games">Dostępne gry</a>
                </div>
            </div>
        </div>
        <div class="container-fluid games">
            <div class="row" id="games">
                <div class="col-12">
                    <h2 class="m-4">
                        Gry
                    </h2>
                </div>


            </div>
            <div class="row py-4">
                <div class="col-md-4">
                    <div class="game m-2">
                        <div class="gameMain position-relative">
                            <!-- <img src="img/g1.png" alt=""> -->
                            <h3 class="position-absolute">RISE OF MAYA</h3>
                        </div>
                        <div class="gameBtn my-4 text-end">
                            <a class="arrow m-3" href="rise-of-maya.php">Bawić się<svg class="arrow-3-icon" width="50" height="50" viewBox="0 0 32 32">
                                    <g fill="none" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10">
                                        <path class="arrow-3-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game m-2">
                        <div class="gameMain gameMain-1 position-relative">
                            <!-- <img src="img/g2.png" alt=""> -->
                            <h3 class="position-absolute">SNAKE ARENA</h3>
                        </div>
                        <div class="gameBtn my-4 text-end">
                            <a class="arrow m-3" href="snake-arena.php">Bawić się<svg class="arrow-3-icon" width="50" height="50" viewBox="0 0 32 32">
                                    <g fill="none" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10">
                                        <path class="arrow-3-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game m-2">
                        <div class="gameMain gameMain-2 position-relative">
                            <!-- <img src="img/g3.png" alt=""> -->
                            <h3 class="position-absolute">EYE OF DEAD</h3>
                        </div>
                        <div class="gameBtn my-4 text-end">
                            <a class="arrow m-3" href="eye-of-dead.php">Bawić się<svg class="arrow-3-icon" width="50" height="50" viewBox="0 0 32 32">
                                    <g fill="none" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10">
                                        <path class="arrow-3-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center justify-content-lg-around py-4" style="background: #575555;">
                <div class="col-10 col-lg-5 boxes m-2">
                    <div class="title d-flex">
                        <h2>Nie marnujemy Twoich pieniędzy</h2>
                    </div>
                    <p class="descr">Nasze gry są całkowicie bezpłatne i nie wymagają żadnych inwestycji.</p>
                </div>
                <div class=" col-10 col-lg-5 boxes m-2">
                    <div class="title d-flex">
                        <h2>Nasze gry nie uzależniają</h2>
                    </div>
                    <p class="descr">Gry tylko dla rozrywki nie uzależniają</p>
                </div>

            </div>
        </div>
        <div class="container-fluid aboutBg">
            <div class="row d-flex justify-content-center p-md-4" id="about">
                <div class="col-12 d-flex justify-content-center flex-column">
                    <h2 class="m-4">
                        O nas
                    </h2>
                    <p>Społecznościowe kasyna online buffalo game boy oferują pełną gamę automatów do gier online, gotowych do zanurzenia graczy w ekscytujący świat hazardu. Tutaj znajdziesz nasze gry online, które pozwalają grać za darmo bez żadnych inwestycji.

                    </p>
                    <p>Buffalo game boy oferuje widzom na całym świecie najbardziej zabawne i ekscytujące społeczne gry kasynowe, gry casual i bingo. Otrzymuj codziennie ekscytujące nagrody i nowe treści wysokiej jakości. Zróżnicowane portfolio mobilnych gier społecznościowych pozwala każdemu znaleźć swoje ulubione aplikacje do gier i ulubione automaty w kasynie. Dołącz do milionów graczy na całym świecie, wygrywaj niesamowite nagrody i zamień każdą nudną chwilę w przygodę!</p>
                </div>
            </div>
        </div>


    </main>


<?php
include 'footer.php';
?>