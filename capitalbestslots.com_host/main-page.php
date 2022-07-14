
<?php 
  include 'header.php';
?>
 <main>
   <section class="banner">
    <div class="banner__container container">
      <div class="row d-flex flex-column justify-content-center">
        <div class="banner__body d-flex flex-column col-12 col-md-7 col-lg-6">
          <h1 class="banner__title">
            Darmowe społecznościowe gry kasynowe
          </h1>
          <div class="banner__wrapper-link">
            <a class="banner__link" data-scroll href="#game">Zagraj teraz</a>
          </div>
      </div>
      </div>
    </div>
   </section>
   <section class="game" id="game">
    <div class="game__container container">
      <div class="row">
        <h2 class="game__title col-12">
          Gry dla Ciebie
        </h2>
        <ul class="game__list d-flex justify-content-center flex-wrap align-items-stretch col-12">
          <li class="game__item">
            <div class="game__image">
              <a href="big-bucks.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
                <picture><source srcset="./img/big-bucks.webp"type="image/webp"><img src="./img/big-bucks.png" alt="Big bucks"></picture>
              </a>
            </div>
              <div class="game__descr col-12">
                <div class="game__wrapper-name col-12">
                  <a class="game__name-game col-12" href="big-bucks.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
                    Big bucks bandits
                  </a>
                 </div>
                 <div class="game__wrapper-play col-12">
                   <a class="game__play  col-12" href="big-bucks.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
                    Bawić się
                   </a>
                 </div>
              </div>
          </li>
          <li class="game__item">
            <div class="game__image">
           <a href="one-armed-bandit.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
            <picture><source srcset="./img/one-armed-bandit.webp"type="image/webp"><img src="./img/one-armed-bandit.png" alt="One-armed-bandit"></picture>
           </a>
            </div>
         <div class="game__descr col-12">
          <div class="game__wrapper-name col-12">
            <a class="game__name-game col-12" href="one-armed-bandit.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
              One armed bandit
            </a>
           </div>
           <div class="game__wrapper-play col-12">
             <a class="game__play  col-12" href="one-armed-bandit.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
              Bawić się
             </a>
           </div>
         </div>
          </li>
          <li class="game__item">
            <div class="game__image">
              <a href="desperate-dawgs.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
                <picture><source srcset="./img/desperate-dawgs.webp"type="image/webp"><img src="./img/desperate-dawgs.png" alt="Desperate-dawgs"></picture>
              </a>
            </div>
          <div class="game__descr col-12">
            <div class="game__wrapper-name col-12">
              <a class="game__name-game col-12 " href="desperate-dawgs.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
                Desperate dawgs
              </a>
             </div>
             <div class="game__wrapper-play col-12">
               <a class="game__play  col-12" href="desperate-dawgs.php?utm_term=<?echo($_GET['utm_term'])?>&gclid=<?echo($_GET['gclid'])?>">
                Bawić się
               </a>
             </div>
          </div>
          </li>
        </ul>
      </div>
    </div>
   </section>
   <section class="about" id="about">
    <div class="about__container container">
      <div class="row d-flex flex-column">
        <h2 class="about__title col-12">
          O nas
        </h2>
        <div class="about__descr col-12 col-md-9 col-lg-7">
          <p class="about__text col-12">
            Na tym polega zabawa. Oferujemy gry hazardowe online, w których nie wydajesz prawdziwych pieniędzy i dobrze się bawisz. Wszystkie gry znajdujące się w katalogu instytucji są licencjonowane. 
          </p>
          <p class="about__text col-12">
            W grach bandytów znajdziesz swoje ulubione automaty, imponującą grafikę, niesamowite efekty dźwiękowe i opcje gry do wyboru. Odkryj darmowe automaty do gier i zostań jednym z milionów szczęśliwych graczy w sieci.
          </p>
        </div>
      </div>
    </div>
   </section>
   <section class="bnfts">
    <div class="bnfts__container container">
      <div class="row">
        <h2 class="bnfts__title col-12">
          Nasze atuty
        </h2>
        <ul class="bnfts__list d-flex justify-content-center align-items-stretch flex-wrap">
          <li class="bnfts__item d-flex flex-column">
            <div class="bnfts__icon">
              <picture><source srcset="./img/icon-1.webp"type="image/webp"><img src="./img/icon-1.png" alt="Icon"></picture>
            </div>
            <div class="bnfts__descr d-flex flex-column align-items-center justify-content-center">
              <p class="bnfts__text">
                Imponująca grafika
              </p>
            </div>
          </li>
          <li class="bnfts__item d-flex flex-column">
            <div class="bnfts__icon">
              <picture><source srcset="./img/icon-2.webp"type="image/webp"><img src="./img/icon-2.png" alt="Icon"></picture>
            </div>
            <div class="bnfts__descr d-flex flex-column align-items-center justify-content-center">
              <p class="bnfts__text">       
                  Niesamowite efekty dźwiękowe
              </p>
            </div>
          </li>
          <li class="bnfts__item d-flex flex-column">
            <div class="bnfts__icon">
              <picture><source srcset="./img/icon-3.webp"type="image/webp"><img src="./img/icon-3.png" alt="Icon"></picture>
            </div>
            <div class="bnfts__descr d-flex flex-column align-items-center justify-content-center">
              <p class="bnfts__text">
                Darmowe automaty do gier
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
   </section>
 </main>
 <?php 
 include 'footer.php';
?>