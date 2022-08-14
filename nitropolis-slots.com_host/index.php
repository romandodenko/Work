<?php 
  include 'header.php';
?>
 <main>
   <section class="hero position-relative mb-5">
    <div class="container">
      <div class="row ps-2 pe-2 pe-sm-0 ps-sm-0">
        <div class="hero__content d-flex flex-column align-items-center justify-content-center position-relative p-0">
          <h1 class="hero__title fs-1 fw-bold lh-2 text-white text-uppercase mb-2 mb-sm-5 text-center">
            Közösségi kaszinó ingyenes játékokkal
          </h1>
          <p class="hero__text fs-4 lh-sm text-white mb-5 text-center">
            Játssz érdekes és izgalmas játékokat most ingyen, merülj el bennük órákig!
          </p>
          <a class="hero__link d-inline-block fs-4 lh-4 text-white p-3 pe-5 ps-5 bg-danger" href="#games">Játék</a>
        </div>
      </div>
    </div>
   </section>
   <section class="about mb-5" id="about">
    <div class="container">
      <div class="row ps-2 pe-2 pe-sm-0 ps-sm-0">
        <h2 class="about__title col-12 fs-1 fw-bold lh-2 text-black text-uppercase mb-2 mb-sm-5 p-0">
          Rólunk
        </h2>
      </div>
      <div class="row d-block d-lg-flex ps-2 pe-2 pe-sm-0 ps-sm-0">
        <div class="about__descr mb-4 mb-sm-5 mb-lg-0 col-12 col-lg-6 pe-0 pe-lg-4 p-0">
          <p class="about__text fs-4 lh-sm text-black mb-3 mb-xl-4">
            Üdvözöljük kaszinónkban, ahol az álmok valóra válnak – egyetlen pörgetéssel sok mókát szerezhet. Kaszinónkban játékok széles választékát találja. Itt megtapasztalhatja a legjobb online kaszinójátékok izgalmát.
          </p>
          <p class="about__text fs-4 lh-sm text-black mb-3 mb-xl-4">
            Játsszon online nyerőgépekkel, és élvezze játékaink, izgalmas versenyeink és nagyszerű ajánlataink széles választékát. Nagyon könnyű online játékgépekkel játszani. Mindig arra törekszünk, hogy nyerőgépeink a legmagasabb minőséget biztosítsák a tökéletes vásárlói élmény megteremtése érdekében.
          </p>
          <p class="about__text fs-4 lh-sm text-black mb-0">
            Különféle nyerőgépek páratlan választékát kínáljuk. A klasszikus nyerőgépektől az új játékokig, ilyen és egyedi témájú nyerőgépekig.
          </p>
         </div>
          <div class="about__image col-12 col-lg-6 p-0">
            <img src="./img/about.jpg" alt="Image">
          </div>
       </div>
    </div>
   </section>
   <section class="benefits mb-5" id="benefits">
    <div class="container">
      <div class="row d-flex justify-content-center flex-wrap ps-2 pe-2 pe-sm-0 ps-sm-0">

          <div class="benefits__item p-4 p-lg-5 col-12 col-lg-6 col-xl-3 mb-3 me-lg-3">
            <strong class="benefits__strong d-block text-white fs-4 lh-1 text-center mb-2 mb-sm-3 mb-lg-4">
              Játék nem pénzért
            </strong>
            <p class="benefits__text fs-6 lh-base text-center text-white mb-0">
              Játssz kedvenc játékaiddal anélkül, hogy egy fillért költenél
            </p>
          </div>
          <div class="benefits__item p-4 p-lg-5 col-12 col-lg-6 col-xl-3 mb-3 me-lg-3">
            <strong class="benefits__strong d-block text-white fs-4 lh-1 text-center mb-2 mb-sm-3 mb-lg-4">
              Legjobb szórakozás
            </strong>
            <p class="benefits__text fs-6 lh-base text-center text-white mb-0">
              Oldalunkon kiváló grafikával és hangeffektusokkal élvezheti a játékot
            </p>
          </div>
          <div class="benefits__item p-4 p-lg-5 col-12 col-lg-6 col-xl-3 mb-0 mb-xl-3">
            <strong class="benefits__strong d-block text-white fs-4 lh-1 text-center mb-2 mb-sm-3 mb-lg-4">
              Játssz bármilyen eszközön
            </strong>
            <p class="benefits__text fs-6 lh-base text-center text-white mb-0">
              Játékaink bármikor és bárhol elérhetők kütyüin
            </p>
          </div>

      </div>
    </div>
   </section>
   <section class="games mb-5" id="games">
    <div class="container">
      <div class="row ps-2 pe-2 pe-sm-0 ps-sm-0">
        <h2 class="games__title col-12 fs-1 fw-bold lh-2 text-black text-uppercase mb-2 mb-sm-5">
          Játékok
        </h2>
      </div>
      <div class="row d-flex justify-content-center flex-wrap ps-2 pe-2 pe-sm-0 ps-sm-0">

          <div class="col-12 col-lg-6 col-xl-4 pb-2 pb-lg-3 pe-0 pe-lg-3 p-0">
            <div class="games__image overflow-hidden">
              <a class="d-block w-100 h-100" href="game-1.php">
                <img src="./img/game-1.jpg" alt="Games image">
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-4 pb-2 pb-lg-3 pe-0 pe-lg-3 p-0">
            <div class="games__image overflow-hidden">
              <a class="d-block w-100 h-100" href="game-2.php">
                <img src="./img/game-2.jpg" alt="Games image">
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-4 pb-2 pb-lg-3 pe-0 pe-lg-3 p-0">
            <div class="games__image overflow-hidden">
              <a class="d-block w-100 h-100" href="game-3.php">
                <img src="./img/game-3.jpg" alt="Games image">
              </a>
            </div>
          </div>

      </div>
    </div>
   </section>
 </main>
 <div class="popup position-fixed w-100 h-100 top-0 start-0">
  <div class="popup__back position-absolute w-100 h-100 top-0 start-0 bg-black bg-opacity-75"></div>
  <div class="popup__body position-relative top-50 start-50 translate-middle col-11 col-sm-8 col-lg-5 col-xxl-3 bg-light p-4 p-lg-5">
    <form class="popup__form" action="/">
      <p class="popup__text fs-5 lh-sm text-black mb-3 mb-xl-4 text-center">Játékainkat 18 év feletti FELNŐTT közönségnek szánjuk. A gombra kattintva
        gombbal megerősíti életkorát.</p>
      <label class="position-absolute opacity-0">
        <input type="checkbox" name="number">
      </label>
      <label class="position-absolute opacity-0">
        <input type="text" name="years-old">
      </label>
      <div class="popup__form-bottom text-center">
        <button class="popup__button d-inline-block fs-5 lh-4 text-white p-3 pe-5 ps-5 bg-danger">Agree</button>
      </div>
    </form>
  </div>
</div>
<?php 
  include 'footer.php';
?>