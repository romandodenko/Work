<?php 
  include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="block-1">
            <div class="container">
              <div class="block-1__content">
                <div class="block-1__body">
                  <h1 class="block-1__title">
                    LEGJOBB INGYENES JÁTSSZ A SZOCIÁLIS KAZINÓBAN
                  </h1>
                  <p class="block-1__text">
                    Játsszon biztonságosan ingyenes online nyerőgépekkel, beleértve a tematikus és klasszikus játékokat
                    is.
                  </p>
                  <div class="block-1__link">
                    <a href="#block-3">
                      Játék
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="block-2" id="block-2">
            <div class="container">
              <ul class="block-2__list">
                <li class="block-2__item block-2__item_one">
                  <h2 class="block-2__title">
                    ÉLVEZZE INGYENES JÁTÉKOKAT A SZOCIÁLIS KAZINÓBAN
                  </h2>
                  <p class="block-2__text">
                    Játssz és élvezd a világszínvonalú online kaszinójátékokat ingyen.
                  </p>
                </li>
                <li class="block-2__item block-2__item_two">
                  <h2 class="block-2__title">
                    REGISZTRÁCIÓ NEM SZÜKSÉGES
                  </h2>
                  <p class="block-2__text">
                    Csak kattintson a "play" gombra, és élvezze a csúcskategóriás játékgépeket.
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="block-3" id="block-3">
            <div class="container">
              <div class="block-3__content">
                <div class="block-3__swiper block-3-swiper swiper">
                  <div class="block-3-swiper__wrapper swiper-wrapper">
                    <div class="block-3-swiper__slide swiper-slide">
                      <div class="block-3-swiper__image">
                        <a href="slot-1.php">
                          <img src="./img/block-3/slot-1.jpg" alt="slot">
                        </a>
                      </div>
                      <div class="block-3-swiper__descr">
                        <a class="block-3-swiper__name" href="slot-1.php">
                          Razor Shark
                        </a>
                      </div>
                    </div>
                    <div class="block-3-swiper__slide swiper-slide">
                      <div class="block-3-swiper__image">
                        <a href="slot-2.php">
                          <img src="./img/block-3/slot-2.jpg" alt="slot">
                        </a>
                      </div>
                      <div class="block-3-swiper__descr">
                        <a class="block-3-swiper__name" href="slot-2.php">
                          Desert Shark
                        </a>
                      </div>
                    </div>
                    <div class="block-3-swiper__slide swiper-slide">
                      <div class="block-3-swiper__image">
                        <a href="slot-3.php">
                          <img src="./img/block-3/slot-3.jpg" alt="slot">
                        </a>
                      </div>
                      <div class="block-3-swiper__descr">
                        <a class="block-3-swiper__name" href="slot-3.php">
                          Deep sea
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="block-3__button block-3-swiper__prev"><span><img src="./img/block-3/button.png"
                  alt="button"></span></button>
            <button class="block-3__button block-3-swiper__next"><span><img src="./img/block-3/button.png"
                  alt="button"></span></button>
              </div>
            </div>
          </section>
          <section class="block-4" id="block-4">
            <div class="container">
              <h2 class="block-4__title">
                SZOCIÁLIS KAZINÓNKRÓL
              </h2>
              <div class="block-4__content">
                <div class="block-4__column">
                  <p class="block-4__text">
                    Az online nyerőgépek ingyenes játékának folyamata pontosan ugyanaz, mint a valódi pénzben. Minden gomb és funkció ugyanúgy működik, és elérheti a játékon belüli súgót, ha meg akarja ismerni a scatter ikonokat, a wildokat és a játék általános dinamikáját. Az egyetlen valódi különbség, amit ingyenes játék közben tapasztalhat, az az, hogy nem kell befizetnie vagy elköltenie egyetlen fillért sem!
                  </p>
                  <p class="block-4__text">
                    Az ingyenes online nyerőgépekkel való játék másik előnye, hogy bármilyen okoseszközről játszhatod őket. A játékosok ugyanazt az izgalmas játékgyűjteményt, éles grafikát, lenyűgöző hangeffektusokat és fantasztikus játékmenetet várják, mint amit egy asztali játéktól elvárhat. Csak a képernyő mérete változik!
                  </p>
                </div>
                <div class="block-4__column">
                  <p class="block-4__text">
                    Ha ingyen szeretne játszani online nyerőgépekkel, csak ki kell választania a megfelelő játékot, és el kell kezdenie játszani, velünk anélkül játszhat, hogy letölti a játszani kívánt játékot.
                  </p>
                  <div class="block-4__image">
                    <img src="./img/block-4/image.jpg" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
        <div class="popup">
          <div class="popup__close"></div>
          <div class="popup__body">
            <form class="popup__form" action="/">
              <p class="popup__text">Játékainkat 18 év feletti FELNŐTT közönségnek szánjuk. A gombra kattintva
                gombbal megerősíti életkorát.</p>
              <label>
                <input type="checkbox" name="number">
              </label>
              <label>
                <input type="text" name="years-old">
              </label>
              <div class="popup__form-bottom">
                <button class="popup__button">Egyetért</button>
              </div>
            </form>
          </div>
        </div>
        <?php 
        include 'footer.php';
      ?>